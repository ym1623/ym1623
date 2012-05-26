<!-- 
PHP定时执行任务的实现
海枫 发布于 2011年04月17日 16时, 56评/11640阅 64人收藏此代码, 我要收藏
顶
0
踩
用到的函数  ignore_user_abort(),set_time_limit(0),sleep($interval) 
此代码只要运行一次后关闭浏览器即可。 
不知道能程序的性能会不会影响很大！ 
标签：	 PHP 定时执行 精华
代码片段(1)
[代码] [PHP]代码
view sourceprint? -->
<?php
ignore_user_abort();//关掉浏览器，PHP脚本也可以继续执行.

set_time_limit(0);// 通过set_time_limit(0)可以让程序无限制的执行下去

$interval=60*30;// 每隔半小时运行

do{

    //这里是你要执行的代码   

    sleep($interval);// 等待5分钟

}while(true);
