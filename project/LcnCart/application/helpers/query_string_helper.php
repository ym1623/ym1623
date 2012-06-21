<?php

/**
 * 返回当前 query string.
 *
 * @return string
 */
function query_string()
{
    return $_SERVER['QUERY_STRING'];
}

/**
 * 把当前 QUERY_STRING分解成数组
 *
 * @return array
 */
function query_string_to_array()
{
    $params = array();
    $query_string = explode('&', query_string());
    foreach ($query_string as $string){
        if (strpos($string, '=')){
            list($key, $value) = explode('=', $string);
            $params[$key] = $value;
        }
    }
    return $params;
}

?>