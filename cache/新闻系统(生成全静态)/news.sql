-- phpMyAdmin SQL Dump
-- version 2.11.2.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2010 年 12 月 09 日 07:47
-- 服务器版本: 5.0.45
-- PHP 版本: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- 数据库: `news`
--

-- --------------------------------------------------------

--
-- 表的结构 `liu`
--

CREATE TABLE `liu` (
  `id` int(12) NOT NULL auto_increment,
  `username` varchar(55) collate utf8_unicode_ci NOT NULL,
  `qq` varchar(55) collate utf8_unicode_ci NOT NULL,
  `email` varchar(55) collate utf8_unicode_ci NOT NULL,
  `homepage` varchar(55) collate utf8_unicode_ci NOT NULL,
  `myimages` varchar(55) collate utf8_unicode_ci NOT NULL,
  `leave_contents` text collate utf8_unicode_ci NOT NULL,
  `leave_title` varchar(55) collate utf8_unicode_ci NOT NULL,
  `leave_time` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- 导出表中的数据 `liu`
--


-- --------------------------------------------------------

--
-- 表的结构 `news`
--

CREATE TABLE `news` (
  `id` int(4) NOT NULL auto_increment,
  `type` varchar(50) collate utf8_unicode_ci NOT NULL,
  `editor` varchar(50) collate utf8_unicode_ci NOT NULL,
  `title` varchar(50) collate utf8_unicode_ci NOT NULL,
  `source` varchar(50) collate utf8_unicode_ci NOT NULL,
  `content` text collate utf8_unicode_ci NOT NULL,
  `pass` varchar(5) collate utf8_unicode_ci NOT NULL,
  `newsfile` varchar(50) collate utf8_unicode_ci NOT NULL,
  `time` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- 导出表中的数据 `news`
--

INSERT INTO `news` (`id`, `type`, `editor`, `title`, `source`, `content`, `pass`, `newsfile`, `time`) VALUES
(1, '北京新闻', '北京新闻', '北京新闻', '北京新闻', '北京新闻北京新闻北京新闻北京新闻北京新闻', '否', '1291879522.htm', 1291879522),
(2, '上海新闻', '上海新闻', '上海新闻', '上海新闻', '上海新闻上海新闻上海新闻上海新闻上海新闻上海新闻上海新闻上海新闻上海新闻', '否', '1291879543.htm', 1291879543),
(3, '上海新闻', '上海新闻', '上海新闻', '上海新闻', '上海新闻上海新闻上海新闻上海新闻上海新闻上海新闻上海新闻上海新闻上海新闻上海新闻上海新闻上海新闻上海新闻上海新闻上海新闻上海新闻上海新闻', '否', '1291879584.htm', 1291879584),
(4, '上海新闻', '上海新闻上海新闻', '上海新闻', '上海新闻', '上海新闻上海新闻上海新闻上海新闻上海新闻上海新闻上海新闻上海新闻上海新闻上海新闻上海新闻上海新闻上海新闻上海新闻上海新闻', '否', '1291879591.htm', 1291879591),
(5, '上海新闻', '上海新闻', '上海新闻', '上海新闻', '上海新闻上海新闻上海新闻上海新闻上海新闻上海新闻上海新闻', '否', '1291879600.htm', 1291879600),
(6, '中国新闻', '中国新闻', '中国新闻', '中国新闻', '中国新闻中国新闻中国新闻中国新闻中国新闻中国新闻中国新闻中国新闻中国新闻中国新闻中国新闻中国新闻中国新闻中国新闻中国新闻中国新闻中国新闻中国新闻中国新闻中国新闻中国新闻中国新闻中国新闻中国新闻中国新闻', '否', '1291879625.htm', 1291879625),
(7, '中国新闻', '中国新闻', '中国新闻', '中国新闻', '中国新闻中国新闻中国新闻中国新闻中国新闻中国新闻中国新闻中国新闻中国新闻中国新闻中国新闻', '否', '1291879633.htm', 1291879633),
(8, '娱乐新闻', '娱乐新闻', '娱乐新闻', '娱乐新闻', '娱乐新闻娱乐新闻娱乐新闻娱乐新闻娱乐新闻娱乐新闻娱乐新闻娱乐新闻娱乐新闻娱乐新闻娱乐新闻娱乐新闻娱乐新闻娱乐新闻娱乐新闻娱乐新闻娱乐新闻娱乐新闻娱乐新闻娱乐新闻娱乐新闻娱乐新闻娱乐新闻娱乐新闻娱乐新闻娱乐新闻娱乐新闻娱乐新闻娱乐新闻娱乐新闻娱乐新闻娱乐新闻娱乐新闻', '否', '1291879650.htm', 1291879650),
(9, '娱乐新闻', '娱乐新闻', '娱乐新闻', '娱乐新闻娱乐新闻', '娱乐新闻娱乐新闻娱乐新闻娱乐新闻娱乐新闻', '否', '1291879657.htm', 1291879657);

-- --------------------------------------------------------

--
-- 表的结构 `type`
--

CREATE TABLE `type` (
  `id` int(4) NOT NULL auto_increment,
  `type` varchar(50) collate utf8_unicode_ci NOT NULL,
  `entype` varchar(50) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- 导出表中的数据 `type`
--

INSERT INTO `type` (`id`, `type`, `entype`) VALUES
(1, '娱乐新闻', 'yulenews'),
(2, '上海新闻', 'shanghainews'),
(3, '中国新闻', 'chinanews'),
(4, '北京新闻', 'beijingnews');
