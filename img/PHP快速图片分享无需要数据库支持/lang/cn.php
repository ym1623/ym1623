<?

/* -----------------------------------------

  Chevereto - Script de hosting de imagenes
  Nightly Build 1.9 (11/04/2010)
  http://www.chevereto.com/

  Released under the GPL 2.0
  Copyright (C) 2008 by Rodolfo Berrios
  <inbox at rodolfoberrios dot com>

  ----------------------------------------- */
  
  /* LENGUAJE CN */

// TITLES
define('欢迎', '欢迎来');

// MENSAJES CRITICOS
define('ERROR_REF', '访问无效, 请用正确的页面 <a href="'.URL_SCRIPT.'" style="color: #FFF;">'.APP_NAME.'</a> 上传图片.');
define('CANT_RUN', '无法上传图片, Chevereto没有配置好或服务器有问题.');
define('CRITIC_ERROR_INPUT', '致命错误, 检查你的数据');
define('ERROR_UPLOADING', '上传图片错误');

// MISC
define('ANDTEXT', '与');
define('AT', '在');

// TITLE HTTP ERRORS
define('TITLE_400', '错误请求 (400)');
define('TITLE_401', '未经认可的 (401)');
define('TITLE_403', '不允许的 (403)');
define('TITLE_404', '没有找到 (404)');
define('TITLE_500', '内部服务器错误 (500)');
define('TITLE_503', '服务不可用 (503)');
// DESC HTTP ERRORS
define('DESC_400', '服务器不理解的要求');
define('DESC_401', '所要求的网页需要用户名和密码');
define('DESC_403', '请求的网页禁止访问 ');
define('DESC_404', '服务器找不到请求的页面 ');
define('DESC_500', '请求未完成. 服务器遇到一个意外状况');
define('DESC_503', '要求没有完成. 服务器暂时超载或当机');
// ACCESO A DIRECTORIOS
define('TITLE_DIR_NO', '访问被拒绝在 "'.$page.'"');
define('DESC_DIR_NO', '对不起, 你不能访问这个目录');

// SPLIT ERRORS + SPLIT TITLES
define('FORM_INCOMPLETE', '你必须填写表格的一部分以继续');
define('TITLE_FORM_INCOMPLETE', '表格不完整');
define('DOBLE_POSTED', '不能同时发送本地和远程链接文件');
define('FATAL_ERROR_TITLE', '致命错误');
define('INVALID_EXT', '无效的文件类型, 允许的类型 JPG, PNG, GIF, BMP');
define('INVALID_TITLE', '无效的文件类型');
define('INVALID_CORRUPT', '无效或损坏的文件');
define('NOTHING_TO_RESIZE', '注意调整大小');
define('INPUT_ERROR', '输入错误');
define('NO_ID', '无指定的编号');
define('NO_ID_TITLE', '无特定的图片编号');
define('NO_SELF_UPLOAD', '不能上传图片, 这个域名已经无效');
define('CANT_UPLOAD_TITLE', '无法上传');
define('TOO_HEAVY', '这个文件太难获取了');
define('JUST_NUMBERS', '只需输入理想的宽度');
define('UPLOADED_BUT_NOT_RESIZED', '图片已上传 (但是没有调整大小)');
define('OVER_RESIZE_ERROR', '不能调整到大于原始图片的宽度');
define('RESIZE_LIMITS', '只能在上传前调整大小');

// INPUT TEXT
define('ENTER_WIDTH', '输入你希望的图片宽度');

// OK MESSAGES
define('UPLOAD_OK', '图片上传成功');
define('UPLOAD_AND_RESIZED', '图片上传成功并调整了大小');

// VIEWVING
define('SEEING', '查看图片中');
define('NOT_EXISTS', '图片不存在');
define('NOT_EXISTS_TITLE', '被请求的图片不存在');
define('FULL_SIZE', '全尺寸');

// TXT
define('TXT_PREFERENCES', '参数');
define('TXT_TINYURL', '用'.$tiny_service.'建立一个短网址');
define('TXT_CLOSE_PREF', '关闭参数.');
define('TXT_LOCAL', '从你的计算机中选择要上传的图片');
define('TXT_REMOTE', '输入你要上传的图片<abbr title="http://where-is-the-image.com/image.jpg">链接地址</abbr>');
define('TXT_UPLOADING', '上传图片中...');
define('TXT_REMOTE_RR', '这是你要上传的图片<abbr title="http://where-is-the-image.com/image.jpg">链接地址</abbr>');
define('TXT_TEMP_SAVE', '我们将 <abbr title="我们将稍候删除这个文件">临时</abbr> 储存你的图片, 便于你调整大小');
define('TXT_REZ_AGAIN', '再次调整中...');
define('TXT_TEMP_PLACE', '这是你的图片 <span>只是临时的</span>');
define('TXT_SEEING', '查看中');
define('TXT_AND_RESIZE', '和调整');
define('TXT_DID', '你上传了');
// SHARE
define('SHARE_THUMB_VIEWER', '缩略图 + <u>查看</u> 链接');
define('SHARE_FORUMS', 'BBS');
define('SHARE_DIRECT', '直接显示这张图片');
define('SHARE_VIEWER', '查看');
define('SHARE_SOCIAL', '让大家看看这张图片');
define('SHARE_NETWORKS', '社交网络');
define('SHARE_TWITTER', 'Twitt这张图片');
define('SHARE', '分享');
// RESIZE
define('RESIZE_DSC', '重新设置大小并上传图片');
define('RESIZE_WIDTH', '合适的宽度');
define('RESIZE_PIXELS', '像素');
define('RESIZE_KEEP', '*我们将保持图片比例');

?>