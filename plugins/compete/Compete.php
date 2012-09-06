<?php
// Check for dependencies
if (!function_exists('curl_init'))
  throw new Exception('Compete needs the CURL PHP extension.');

if (!function_exists('json_decode'))
  throw new Exception('Compete needs the JSON PHP extension.');

/**
 * Base Compete exception class.
 */
class CompeteException extends Exception {}

/**
 * Represents Compete API.
 * @author Egor Gumenyuk (boo1ean0807 at gmail dot com)
 * @package Compete
 * @license Apache 2.0
 */
class Compete
{
  /**
   * Default usr agent.
   */
  const USER_AGENT   = 'Compete API wrapper for PHP';

  /**
   * Base url for api calls.
   */
  const API_BASE_URL = 'http://apps.compete.com/sites/:domain/trended/:metric/?apikey=:key';

  /**
   * Masks for url params.
   */
  private $_urlKeys = array(':domain', ':metric', ':key');
  private $_apiKey;

  /**
   * For url cleaning.
   */
  private $_toSearch  = array('http://', 'www.');
  private $_toReplace = array('', '');

  /**
   * List of available metrics.
   */
  private $_availableMetrics = array(
              // Description      Auth type
    'uv',     // Unique Visitors  Basic
    'vis',    // Visits           Basic
    'rank',   // Rank             Basic
    'pv',     // Page Views       All-Access
    'avgstay',// Average Stay     All-Access
    'vpp',    // Visits/Person    All-Access
    'ppv',    // Pages/Visit      All-Access
    'att',    // Attention        All-Access
    'reachd', // Daily Reach      All-Access
    'attd',   // Daily Attention  All-Access
    'gen',    // Gender           All-Access
    'age',    // Age              All-Access
    'inc',    // Income           All-Access
  );

  /**
   * List of available methods for __call() implementation.
   */
  private $_metrics = array(
    'uniqueVisitors' => 'uv',
    'visits'         => 'vis',
    'rank'           => 'rank',
    'pageViews'      => 'pv',
    'averageStay'    => 'avgstay',
    'visitsPerson'   => 'vpp',
    'pagesVisit'     => 'ppv',
    'attention'      => 'att',
    'dailyReach'     => 'reachd',
    'dailyAttention' => 'attd',
    'gender'         => 'gen',
    'age'            => 'age',
    'income'         => 'inc'
  );

  /**
   * Create access to Compete API.
   * @param string $apiKey user's api key.
   */
  public function __construct($apiKey) {
    $this->_apiKey = $apiKey;
  }

  /**
   * Implement specific methods.
   */
  public function __call($name, $args) {
    if (array_key_exists($name, $this->_metrics) && isset($args[0]))
      return $this->get($args[0], $this->_metrics[$name]);

    throw new CompeteException($name . ' method does not exist.');
  }

  /**
   * Get data from Compete.
   * @param string $site some domain.
   * @param string $metric metric to get.
   * @return stdClass Compete data.
   * @throws CompeteException
   */
  public function get($site, $metric) {
    if (!in_array($metric, $this->_availableMetrics))
      throw new CompeteException($metric . ' - wrong metric.');

    $values = array(
      $this->_prepareUrl($site),
      $metric,
      $this->_apiKey
    );

    // Prepare call url
    $url = str_replace($this->_urlKeys, $values, self::API_BASE_URL);

    // Retrieve data using HTTP GET method.
    $data = json_decode($this->_get($url));

    // Because of unsuccessful responses contain "status_message".
    if (!isset($data->status_message))
      return $data;

    throw new CompeteException('Status: ' . $data->status . '. ' .$data->status_message);
  }

  /**
   * Cut unnecessary parts of url.
   * @param string $url some url.
   * @return string trimmed url.
   */
  private function _prepareUrl($url) {
    return str_replace($this->_toSearch, $this->_toReplace, $url);
  }

  /**
   * Execute http get method.
   * @param string $url request url.
   * @return string response.
   */
  private function _get($url) {
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL,            $url);
    curl_setopt($ch, CURLOPT_USERAGENT,      self::USER_AGENT);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    return curl_exec($ch);
  }
}
