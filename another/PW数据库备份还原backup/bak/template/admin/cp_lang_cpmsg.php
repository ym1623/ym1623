<?php

$lang = array (

'check_error'				=>'认证码错误',
'undefine_action'			=>'您没有权限进行此项操作或此功能未完成',
'login_out'					=>"成 功 退 出 管 理<br><br><a href=index.php target=_blank>进 入 首 页</a>",
'operate_error'				=>"没有选择操作对象",
'operate_success'			=>"完成相应操作",
'operate_fail'				=>"操作失败，请检查数据完整性",
'upgrade_error'				=>'无此提升方式',
'forumid_error'				=>'版块ID错误,请重试！',
'noenough_condition'		=>'没有提供足够的条件',
'manager_right'				=>'只有创始人才能管理和编辑管理员帐号',
'admin_right'				=>'只有管理员才能管理和编辑总版主或版主的帐号',
'forum_right'				=>'您无权对此版块的帖子进行操作',
'password_confirm'			=>'两次输入密码不一致，请重新输入',
'username_exists'			=>"该用户名已经被注册了,请返回重新填写.",
'illegal_username'			=>"用户名太长或包含不可接受字符",
'illegal_password'			=>"密码包含不可接受字符",
'illegal_email'				=>"email格式错误",
'illegal_fid'				=>'非法版块ID',
'forum_havesub'				=>"该版块含有子版块，请先转移所有子版块，再进行此操作",
'forum_descrip'				=>'版块描述字节数不得大于 255',
'recycle_del'				=>"不能删除回收站，取消回收站功能请到核心设置里取消此功能。",
'user_not_exists'			=>"用户{$errorname}不存在",
'log_min'					=>"管理日志少于100不允许删除!!",
'log_del'					=>"已删除多余的管理日志",
'have_banned'				=>"用户{$username}已经被禁言,要解除禁言请到会员禁言处设置",
'ban_error'					=>"禁言失败，{$username}不为会员组，只能禁言会员组",
'ban_limit'					=>"请输入禁言时间",
'not_banned'				=>"用户{$username}没有被禁言",
'credit_error'				=>'无效积分ID',
'login_error'				=>"密码错误,您还可以尝试{$L_left}次",
'login_fail'				=>"已经连续 $F_count 次进行无效登陆,您将在 20 分钟内无法正常登陆后台<br>还剩余 $L_T 秒",
'sql_config'				=>"论坛管理员信息错误不存在，请重新上传 sql_config.php文件",
'installfile_exists'		=>"install.php 文件仍然在您的服务器上，请马上利用 FTP 来将其删除！！ 当您删除之后，刷新本页面重新进入管理中心。",

'hack_error'					=>'未安装此插件',

'viewban_free'				=>"完成解除禁言",

'updatecache_step'			=>"正在更新{$start}到{$next}项",

'unite_type'				=>"合并操作只能在版块之间进行(不包括分类和回收站)",
'unite_same'				=>"源论坛和目标论坛不能相同",

'template_noforum'			=>"目前还没有使用静态模版功能的版块，请先设置需要使用静态模版功能的版块",
'template_error'			=>"该版块没有启用静态模版功能，请先启用",

'setuser_forumadmin'		=>"设置或取消会员的版主权限，请到<font color='red'>论坛版块管理</font>处设置",
'setuser_ban'				=>"封禁用户和解除禁言请到会员禁言处设置",
'setuser_empty'				=>"用户名,密码或email为空",
'setuser_img'				=>"头像网址必须以 'http' 开头.",

'setting_http'				=>"使用跨台图片链必须以http开头",
'config_777'				=>"<font color=red>无法修改论坛核心,请将 data/bbscache/config.php 文件属性设为可写模式(777)</font>",
'setting_777'				=>'<font color=red>无法更改图片或附件目录名,请设置其属性为可写模式(777)</font>',
'setting_direrror'			=>"<font color=red>图片或附件目录{$errordir}不存在</font>",
'setting_recycle_type'		=>"不能将分类设置为回收站",
'setting_recycle_error'		=>"设置的回收站版块ID不存在，请先建立一个版块，再把回收站ID设为新建版块的ID",
'setting_gd_error'          =>'图片水印功能开启失败: PHP编译时需要同时支持gd jpeg freetype',

'style_add_success'			=>"添加风格完成,请速到images目录下建立{$setting[0]}并放上相应的图片",
'style_exists'				=>"此名称已存在，请另选名称",
'style_empty'				=>"名称不能为空",
'style_not_exists'			=>"此风格不存在",
'style_del_error'			=>"不能删除默认风格,请先更换默认风格",
'style_777'					=>"请将此文件(template/$tplpath/header.htm)属性设置为 777 可写模式",

'setforum_empty'			=>"版块名称为空，请填写",
'setforum_cms'				=>"CMS分类的上级分类或子分类只能是CMS分类",
'setforum_fupsame'			=>'不能将所属上级分类设为自己.',

'sendmsg_step'				=>"正在发送,一共要发送 $count 个用户，目前已经发送了 $havesend 个用户",
'sendmsg_success'			=>"发送完成:一共发送了{$count}个用户",
'sendmsg_empty'				=>"主题和内容不能为空！！",

'postcache_emmpty'			=>"动作或表情内容为空，请完整填写",

'level_del'					=>"不能删除默认组",
'level_credit_error'		=>"评分设置错误,请返回重新设置!",

'hackcenter_empty'			=>"插件信息不完整，请重新填写！",
'hackcenter_sign_exists'	=>"插件标识符{$hacksign}已经存在，请另外选择标识符",

'hackcenter_del'			=>'卸载失败，插件不存在或已经被卸载',
'hackcenter_del_success'	=>"插件卸载完成删除以下文件失败，请手动删除<br>{$faildelfile}",

'bakup_in'					=>"正在导入第{$i}卷备份文件，程序将自动导入余下备份文件...",
'bakup_out'					=>"已全部备份,备份文件保存在data目录下，备份文件为<br>$bakfile",
'bakup_step'				=>"正在备份数据库表 $t_name: 共 $rows 条记录，已经备份至 $c_n  条记录<br><br>已生成 $f_num 个备份文件，程序将自动备份余下部分",

'attachstats_del'			=>"共删除{$count}条记录，{$delnum}个附件<br>已删除:<br>$delname",
'attach_renew'				=>"附件修复完成,共{$count}处附件被修复",

'annouce_right'				=>'您没有权限编辑该公告',
'annouce_empty'				=>"标题和内容为空，请完整填写",
'annouce_all'				=>"您没有发表'论坛公告'的权限",
'annouce_category'			=>"您没有发表'分类公告'的权限",
'annouce_forum'				=>"您没有发表'版块公告'的权限",

'bankset_rate_error'		=>'转换率设置错误，应为大零的整数',
'bankset_rate_bug'          =>'<font color="red">积分I到积分积分II</font> 的转换比例应该小于或等于 <font color="red">积分I到积分积分II</font> 的转换比例',
'bankset_exists'			=>"{$c_types[$jifen1]}与{$c_types[$jifen2]}之间的转化已经存在",
'bankset_save'				=>"同种积分之间不能转换",

'forum_name'				=>'版块名称字节数不得大于 50',
'session_error'				=>'登陆后台失败, 请先登陆服务器设置 data/bbscache 目录属性为可写(777模式)',

'htm_error'					=>"分类：“{$f_name}” 没有启用静态模版功能，请先启用",

'atc_error'					=>"主题或内容为空",

'no_cmscate'				=>"目前还没有设置文章分类,请先到 \"<a href=\"admin.php?adminjob=c_forum\"><font color=\"red\">文章分类管理</font></a>\" 中设置文章分类",

'ipsearch_username'			=>'请输入要搜索的用户名.',
'ipsearch_userip'			=>'请输入要搜索的IP',

'attach_step'				=>"已经搜索了 $num 个文件, 程序在自动搜索更多的结果,请耐心等待...",
'attach_success'			=>'已经完成搜索,正在进入搜索结果列表.',
'attach_delfile'			=>"附件删除成功.",	

'forum_not_exists'			=>"版块不存在。",
'forum_hidden'				=>'将版块设置为隐藏版块，需要同时设置允许‘浏览版块’的用户组',

'numerics_checkfailed'		=>'您提交的数据中包含非法数据,请返回重新操作.',
'record_aminonly'			=>'只有管理员才能删除日志记录',
'member_only'				=>'批量添加用户组功能只允许对普通用户进行操作。',
'chiefadmin_right'			=>'只有论坛创始人和管理员能添加总版主。',
'word_error'				=>'您提交的内容中含有‘&lt;iframe’‘&lt;script’‘&lt;meta’等系统禁用的HTML标签，请联系论坛创始人解决。',

'msg_managerright'			=>'您没有权限查看或删除创始人的短消息！',
'msg_adminright'			=>'您没有权限查看或删除管理员的短消息！',

'colonyset_empty'=>'分类名称不能为空',
'colonyset_same'=>'该分类名已经存在，请另外选择一个分类名。',
'colonyset_addsuccess'=>'分类添加成功。',
'colonyset_delname'=>"请输入要删除的{$cn_name}名称。",
'colonyset_noclass'=>"您要删除的{$cn_name}不存在。",
'colonyset_delsuccess'=>"{$cn_name}删除成功。",
'currrate_error'=>'<font color="red">交易币到论坛积分</font> 的转换比例要小于或等于 <font color="red">论坛积分到交易币</font> 的转换比例',
'cecode_error'=>"访问域名出错，请使用合法的后台管理域名访问该页面，如果疑问请联系论坛创始人<br><br>论坛创始人帐号：{$manager}",

'unituser_newname_error' => "目标用户不存在，请检查您输入是目标用户是否正确！",
'unituser_username_error' => "原用户ID ‘{$value}’ 不存在，请检查您输入是原用户ID是否正确！",
'unituser_username_empty' => "原用户ID不能为空！",
'unituser_newname_empty' => "目标用户ID不能为空！",
'unituser_samename'=>'原用户ID不能和目标用户ID相同',
'delattach_step'=>"正在删除论坛冗余附件，已经删除 $deltotal 个附件，程序将自动完成整个过程，请耐心等待...",
'ip_ban'=>'系统限制了允许进入后台的IP，您的IP无权访问该页面。',

'module_id_error'=>'模块ID错误，该模块不存在！',
'module_adderror'=>'调用变量名和模块标题不能为空',
'advert_code_error'=>'广告代码不能为空',
'advert_txt_error'=>'文字内容和文字链接不能为空',
'advert_img_error'=>'图片地址和图片链接不能为空',
'advert_flash_error'=>'flash 链接不能为空',
'attachrenew_forbidden'=>'您的网站使用了远程附件功能，附件修复功能失效。',
);
?>