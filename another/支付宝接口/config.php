<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Base Site URL
|--------------------------------------------------------------------------
|
| URL to your CodeIgniter root. Typically this will be your base URL,
| WITH a trailing slash:
|
|	http://example.com/
|
| If this is not set then CodeIgniter will guess the protocol, domain and
| path to your installation.
|
*/
$config['base_url']	= '';


/*
|--------------------------------------------------------------------------
| URI PROTOCOL
|--------------------------------------------------------------------------
|
| This item determines which server global should be used to retrieve the
| URI string.  The default setting of 'AUTO' works for most servers.
| If your links do not seem to work, try one of the other delicious flavors:
|
| 'AUTO'			Default - auto detects
| 'PATH_INFO'		Uses the PATH_INFO
| 'QUERY_STRING'	Uses the QUERY_STRING
| 'REQUEST_URI'		Uses the REQUEST_URI
| 'ORIG_PATH_INFO'	Uses the ORIG_PATH_INFO
|
*/
$config['uri_protocol']	= 'PATH_INFO';

/*
|--------------------------------------------------------------------------
| Default Character Set
|--------------------------------------------------------------------------
|
| This determines which character set is used by default in various methods
| that require a character set to be provided.
|
*/
$config['charset'] = 'UTF-8';



/*
|--------------------------------------------------------------------------
| Enable Query Strings
|--------------------------------------------------------------------------
|
| By default CodeIgniter uses search-engine friendly segment based URLs:
| example.com/who/what/where/
|
| By default CodeIgniter enables access to the $_GET array.  If for some
| reason you would like to disable it, set 'allow_get_array' to FALSE.
|
| You can optionally enable standard query string based URLs:
| example.com?who=me&what=something&where=here
|
| Options are: TRUE or FALSE (boolean)
|
| The other items let you set the query string 'words' that will
| invoke your controllers and its functions:
| example.com/index.php?c=controller&m=function
|
| Please note that some of the helpers won't work as expected when
| this feature is enabled, since CodeIgniter is designed primarily to
| use segment based URLs.
|
*/
$config['allow_get_array']		= TRUE;
$config['enable_query_strings'] = FALSE;
$config['controller_trigger']	= 'c';
$config['function_trigger']		= 'm';
$config['directory_trigger']	= 'd'; // experimental not currently in use






/*
 * alipay configuration
 */
//签名方式 不需修改
$config['alipay']['sign_type']    = ' ';
//字符编码格式 目前支持 gbk 或 utf-8
$config['alipay']['input_charset']= 'utf-8';
//访问模式,根据自己的服务器是否支持ssl访问，若支持请选择https；若不支持请选择http
$config['alipay']['transport']    = 'https';

//↓↓↓↓↓↓↓↓↓↓配置基本信息↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓
//合作身份者id，以2088开头的16位纯数字
$config['alipay']['partner']      = '';
//安全检验码，以数字和字母组成的32位字符
$config['alipay']['key']          = '';
//签约支付宝账号或卖家支付宝帐户
$config['alipay']['seller_email'] = ' ';
//页面跳转同步通知页面路径，要用 http://格式的完整路径，不允许加?id=123这类自定义参数
//return_url的域名不能写成http://localhost/create_direct_pay_by_user_php_utf8/return_url.php ，否则会导致return_url执行无效
$config['alipay']['return_url']   = 'http://wwww.xxxxx.com/index.php/pay/revals';
//服务器异步通知页面路径，要用 http://格式的完整路径，不允许加?id=123这类自定义参数
$config['alipay']['notify_url']   = 'http://wwww.xxxxx.com/index.php/pay/notify';
//支付宝支付服务器地址
$config['alipay']['server_url'] = 'https://mapi.alipay.com/gateway.do?_input_charset='.$config['alipay']['input_charset'];
//↑↑↑↑↑↑↑↑↑↑配置基本信息↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑


/* End of file config.php */
/* Location: ./application/config/config.php */
