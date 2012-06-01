CI 原始的 语言解析比较单调,无法传递变量。得自己动手

参考以下代码,

此helper 实现了语言变量的解析，
变量可以以sprinf的格式传入(%s,%d)，也可以使用数组，
如果是传递关联数组，则可以在语言里面自定义变量.与key对应即可

preg_replace_callback 回调函数是系统自动调用，但又需要传递自己的参数进去，这里使用了一个use特性,

5.3版本以下应该是不支持的,5.3以下除了使用全局变量($GLOBAL测试可用)，还没想到好方法.

<?
if (!function_exists('__L')) {
 
    /**
     * 语言解析辅助函数,可以解析变量
     * @param String $line
     * @param <type> $args  可以以可变参数的方式传入，也可以使用数组.如果是关联数组,则对定义在语言里的变量用指定键值进行替换.
     * @return String
     */
    function __L($line, $args = null) {
 
        $CI = & get_instance();
        $line = $CI->lang->line($line);
 
        if ($args == null) {
            return $line;
        } else {
 
            if (!is_array($args)) { //对于以可变参数的方式调用的 将其转换为数组.
                $args = func_get_args();
                array_shift($args);
            } else if (is_assoc($args)) { //判断是否是关联数组
                return preg_replace_callback('/{(.*?)}/', function($matches) use($args) {
                            return isset($args[$matches[1]]) ? $args[$matches[1]] : '{' . $matches[1] . '}'; //存在指定key则进行替换
                        }, $line);
            }
        }
 
        return vsprintf($line, $args);
    }
 
}
 
 
 
//关联数组判断
 
function is_assoc($arr) {
    return array_keys($arr) !== range(0, count($arr) - 1);
}
 
 


// 使用方法:
// PHP
 
// $lang['hello_world1'] = "hello %s";
 
// $lang['hello_world2'] = "hello {name}";
 
// __L('hello_world1','world');
 
// __L('hello_world1',array('world'));
 
// __L('hello_world2',array('name'=>'kitty'));
 