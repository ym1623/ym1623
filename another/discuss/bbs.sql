-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2012 年 01 月 01 日 15:10
-- 服务器版本: 5.5.8
-- PHP 版本: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `bbs`
--

-- --------------------------------------------------------

--
-- 表的结构 `forum_attachment`
--

CREATE TABLE IF NOT EXISTS `forum_attachment` (
  `aid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `tid` int(10) NOT NULL DEFAULT '0',
  `blogid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `filename` varchar(255) NOT NULL DEFAULT '',
  `filesize` int(10) NOT NULL DEFAULT '0',
  `filepath` varchar(255) NOT NULL DEFAULT '',
  `addtime` bigint(20) NOT NULL,
  PRIMARY KEY (`aid`),
  KEY `blogid` (`blogid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- 转存表中的数据 `forum_attachment`
--


-- --------------------------------------------------------

--
-- 表的结构 `forum_forum`
--

CREATE TABLE IF NOT EXISTS `forum_forum` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `topic` varchar(225) NOT NULL,
  `detail` text NOT NULL,
  `post` int(10) NOT NULL,
  `reply` int(10) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- 转存表中的数据 `forum_forum`
--


-- --------------------------------------------------------

--
-- 表的结构 `forum_reply`
--

CREATE TABLE IF NOT EXISTS `forum_reply` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fid` int(10) NOT NULL,
  `tid` int(10) NOT NULL DEFAULT '0',
  `rid` int(10) NOT NULL DEFAULT '0',
  `reply_name` varchar(32) NOT NULL,
  `reply_email` varchar(100) NOT NULL,
  `reply_detail` text NOT NULL,
  `reply_datetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- 转存表中的数据 `forum_reply`
--


-- --------------------------------------------------------

--
-- 表的结构 `forum_topic`
--

CREATE TABLE IF NOT EXISTS `forum_topic` (
  `tid` int(10) NOT NULL AUTO_INCREMENT,
  `fid` int(10) NOT NULL DEFAULT '0',
  `topic` varchar(225) NOT NULL,
  `detail` text NOT NULL,
  `name` varchar(32) NOT NULL,
  `email` varchar(100) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `view` int(10) NOT NULL DEFAULT '0',
  `reply` int(10) NOT NULL DEFAULT '0',
  `locked` tinyint(1) NOT NULL DEFAULT '0',
  `sticky` tinyint(1) NOT NULL DEFAULT '0',
  `filename` varchar(32) NOT NULL,
  `path` varchar(200) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- 转存表中的数据 `forum_topic`
--


-- --------------------------------------------------------

--
-- 表的结构 `forum_user`
--

CREATE TABLE IF NOT EXISTS `forum_user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(100) NOT NULL,
  `realname` varchar(50) NOT NULL,
  `qq` varchar(32) NOT NULL,
  `regdate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `path` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `forum_user`
--

INSERT INTO `forum_user` (`id`, `username`, `password`, `email`, `realname`, `qq`, `regdate`, `path`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'cheng1196@qq.com', '大牛', '372693586', '2012-01-01 18:28:48', ''),
(2, 'ccccc', '67c762276bced09ee4df0ed537d164ea', 'ccccc@qq.com', '小波', '1545216', '2012-01-01 18:30:00', ''),
(3, 'cheng', '89975c5e5d407916e8080d137c48ddd7', 'cheng@qq.com', '妹妹', '5613213513', '2012-01-01 18:34:41', '');
