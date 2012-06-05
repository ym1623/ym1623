<?php
$_yes='是';
$_no='否';
$lang=array(

	'主站信息管理'=>array(
		'settings'=>array(
			"<a target=main href='../admin/search.php'>分类信息管理</a><br>",
			"<a target=main href='../admin/co.php'>公司黄页管理</a><br>",
			"<a target=main href='../admin/prod.php'>产品信息管理</a><br>",
			"<a target=main href='../admin/infotype.php'>信息分类管理</a><br>",
			"<a target=main href='../admin/cotype.php'>公司分类管理</a><br>",
			"<a target=main href='../admin/asktype.php'>问吧分类管理</a><br>",
			"<a target=main href='../admin/city.php'>地区管理</a><br>",
			"<a target=main href='../admin/cotype.php'>公司会员管理</a><br>",
			"<a target=main href='../admin/cotype.php'>个人会员管理</a><br>",
			"<a target=main href='../admin/ads.php'>广告管理</a><br>",
			"<a target=main href='../admin/tags.php'>标签管理</a><br>",
			"<a target=main href='../admin/bwords.php'>关键词屏蔽</a><br>",
		 ),
		 
	),

    '问吧管理'=>array(
		'settings'=>array(
			"<a target=main href='../admin/question.php'>问题管理</a><br>",
			"<a target=main href='../admin/answer.php'>答案管理</a><br>", 
		 ),
		 
	),

	'论坛核心设置'=>array(
		'settings'=>array(
			"<a target=main href='$admin_file?adminjob=settings&type=all'>所有设置</a><br>",
			"<a target=main href='$admin_file?adminjob=settings&type=bbsset'>基本参数设置</a><br>",
			"<a target=main href='$admin_file?adminjob=settings&type=basicset'>论坛资料设置</a><br>",
			"<a target=main href='$admin_file?adminjob=settings&type=coreset'>核心功能设置</a><br>",
			"<a target=main href='$admin_file?adminjob=settings&type=safe'>论坛安全控制</a><br>",
			"<a target=main href='$admin_file?adminjob=settings&type=setgd'>认证码设置</a><br>",
			"<a target=main href='$admin_file?adminjob=settings&type=pathset'>动态目录设置</a><br>",
			"<a target=main href='$admin_file?adminjob=settings&type=regset'>会员注册控制</a><br>",
			"<a target=main href='$admin_file?adminjob=settings&type=windcode'>发帖代码设置</a><br>",
			"<a target=main href='$admin_file?adminjob=settings&type=attachset'>发帖与附件设置</a><br>",
			"<a target=main href='$admin_file?adminjob=settings&type=atcset'>帖子奖惩选项</a><br>",
			"<a target=main href='$admin_file?adminjob=settings&type=indexset'>首页细节设置</a><br>",
			"<a target=main href='$admin_file?adminjob=settings&type=viewset'>各页面细节设置</a><br>",
			"<a target=main href='$admin_file?adminjob=settings&type=watermark'>图片水印设置</a><br>",
			"<a target=main href='$admin_file?adminjob=settings&type=buysign'>签名购买设置</a><br>",
			"<a target=main href='$admin_file?adminjob=settings&type=ajax'>AJAX 设置</a><br>",
			"<a target=main href='$admin_file?adminjob=settings&type=wap'>WAP 设置</a><br>",
			"<a target=main href='$admin_file?adminjob=settings&type=js'>JS 调用设置</a><br>",
			"<a target=main href='$admin_file?adminjob=settings&type=creditset'>积分名称设置</a><br>",
			"<a target=main href='$admin_file?adminjob=settings&type=mail'>发送邮件设置</a><br>",
			"<a target=main href='$admin_file?adminjob=settings&type=other'>其它设置</a><br>",
		),
	),
	'网站统筹管理'=>array(
		'sethtm'=>"<a target=main href='$admin_file?adminjob=sethtm'>静态目录部署</a><br>",
		'updatecache'=>"<a target=main href='$admin_file?adminjob=updatecache'>缓存数据管理</a><br>",
		'postcache'=>"<a target=main href='$admin_file?adminjob=postcache'>动作表情管理</a><br>",
		'credit'=>"<a target=main href='$admin_file?adminjob=credit&action=newcredit'>添加自定义积分</a>|<a target=main href='$admin_file?adminjob=credit'>管理</a><br>",
		'customcredit'=>"<a target=main href='$admin_file?adminjob=customcredit'>自定义积分管理</a><br>",
	),
	'论坛版块管理'=>array(
		'setforum'=>"<a target=main href='$admin_file?adminjob=setforum'><font color=blue>版块管理</font></a><br>",
		'uniteforum'=>"<a target=main href='$admin_file?adminjob=uniteforum'>版块合并</a><br>",
		'creathtm'=>"<a target=main href='$admin_file?adminjob=creathtm'>生成htm页面(<font color='blue'>论坛</font>)</a><br>",
	),
	'会员管理'=>array(
		'setuser'=>"<a target=main href='$admin_file?adminjob=setuser'><font color=blue>会员管理</font></a><br>",
		'ipsearch'=>"<a target=main href='$admin_file?adminjob=ipsearch'>会员 IP 检索</a><br>",
		'unituser'=>"<a target=main href='$admin_file?adminjob=unituser'>合并会员</a><br>",
		'userstats'=>"<a target=main href='$admin_file?adminjob=userstats'>用户组成员统计</a><br>",
		'upgrade'=>"<a target=main href='$admin_file?adminjob=upgrade'>会员组提升方式</a><br>",
		'editgroup'=>"<a target=main href='$admin_file?adminjob=editgroup'>批量添加用户组</a><br>",
		'level'=>"<a target=main href='$admin_file?adminjob=level'>用户组管理</a><br>",
	),
	'批量删除管理'=>array(
			'article'=>"<a target=main href='$admin_file?adminjob=superdel&a_type=article'>删除帖子</a><br>",
			'member'=>"<a target=main href='$admin_file?adminjob=superdel&a_type=member'>删除用户</a><br>",
			'message'=>"<a target=main href='$admin_file?adminjob=superdel&a_type=message'>删除短消息</a><br>",
			'recycle'=>"<a target=main href='$admin_file?adminjob=recycle'>回收站管理</a><br>",
	),
	'安全管理'=>array(
		'banuser'=>"<a target=main href='$admin_file?adminjob=banuser'>会员禁言</a><br>",
		'viewban'=>"<a target=main href='$admin_file?adminjob=viewban'>查看封禁会员</a><br>",
		'ipban'=>"<a target=main href='$admin_file?adminjob=ipban'>IP 禁止</a><br>",
		'setbwd'=>"<a target=main href='$admin_file?adminjob=setbwd'>不良词语过滤</a><br>",
	),
	'审核管理'=>array(
		'tpccheck'=>"<a target=main href='$admin_file?adminjob=tpccheck'>主题审核管理</a><br>",
		'postcheck'=>"<a target=main href='$admin_file?adminjob=postcheck'>回复审核管理</a><br>",
		'report'=>"<a target=main href='$admin_file?adminjob=report'>帖子报告管理</a><br>",
		'checkemail'=>"<a target=main href='$admin_file?adminjob=usercheck&a_type=checkemail'>Email会员审核</a><br>",
		'checkreg'=>"<a target=main href='$admin_file?adminjob=usercheck&a_type=checkreg'>注册会员审核</a><br>",
	),

	'信息管理'=>array(
		'announcement'=>"<a target=main href='$admin_file?adminjob=announcement&action=add'>发布</a> | <a target=main href='$admin_file?adminjob=announcement'>管理</a> 公告<br>",
		'mailuser'=>"<a target=main href='$admin_file?adminjob=sendmsg&a_type=mailuser'>Email 群发</a><br>",
		'send_msg'=>"<a target=main href='$admin_file?adminjob=sendmsg&a_type=send_msg'>短消息群发</a><br>",
		'giveuser'=>"<a target=main href='$admin_file?adminjob=sendmsg&a_type=giveuser'>节日礼物赠送功能</a><br>",
	),

	'附件管理'=>array(
		'attachment'=>"<a target=main href='$admin_file?adminjob=attachment'>附件管理</a><br>",
		'attachstats'=>"<a target=main href='$admin_file?adminjob=attachstats'>附件统计</a><br>",
		'attachrenew'=>"<a target=main href='$admin_file?adminjob=attachrenew'>附件修复</a><br>",
	),
	'管理日志'=>array(
		'adminlog'=>"<a target=main href='$admin_file?adminjob=record&a_type=adminlog'>后台管理安全日志</a> <br>",
		'forumlog'=>"<a target=main href='$admin_file?adminjob=forumlog'>前台管理安全日志</a><br>",
	),
	'辅助管理'=>array(
		'setads'=>"<a target=main href='$admin_file?adminjob=setads'>论坛宣传设置</a><br>",
		'ipstates'=>"<a target=main href='$admin_file?adminjob=ipstates'>IP统计设置</a><br>",
		'share'=>"<a target=main href='$admin_file?adminjob=share'>友情链接管理</a>|<a target=main href='$admin_file?adminjob=share&action=add'>添加</a><br>",
		'viewtody'=>"<a target=main href='job.php?action=viewtody'>查看今日到访会员</a><br>",
		'chmod'=>"<a target=main href='$admin_file?adminjob=chmod'>文件属性检查</a><br>",
	),
	'数据库管理'=>array(
		'bakout'=>"<a target=main href='$admin_file?adminjob=bakup&a_type=bakout'>数据备份</a><br>",
		'bakin'=>"<a target=main href='$admin_file?adminjob=bakup&a_type=bakin'>数据恢复</a><br>",
		'repair'=>"<a target=main href='$admin_file?adminjob=repair'>数据库修复</a><br>",
	),
	'风格管理'=>array(
		'setstyles'=>"<a target=main href='$admin_file?adminjob=setstyles'>风格模版设置</a><br>",
	),
	'网上支付设置'=>array(
		'userpay'=>"<a target=main href='$admin_file?adminjob=userpay'>网上支付</a><br>",
		'orderlist'=>"<a target=main href='$admin_file?adminjob=orderlist'>订单管理</a><br>",
	),
	'论坛交易币'=>array(
		'currencyset'=>"<a target=main href='$admin_file?adminjob=currencyset'>交易币设置</a><br>",
		'currency'=>"<a target=main href='$admin_file?adminjob=currency'>交易币管理</a><br>",
		'toollog'=>"<a target=main href='$admin_file?adminjob=toollog'>交易币日志</a><br>",
	)
);
?>