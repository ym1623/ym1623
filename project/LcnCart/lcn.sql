-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- 主机: localhost
-- 生成日期: 2010 年 05 月 13 日 09:54
-- 服务器版本: 5.0.51
-- PHP 版本: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- 数据库: `lcn`
-- 

-- --------------------------------------------------------

-- 
-- 表的结构 `lcn_admin_action`
-- 

CREATE TABLE `lcn_admin_action` (
  `id` smallint(6) NOT NULL auto_increment,
  `parent_id` smallint(6) NOT NULL,
  `action_code` varchar(32) collate utf8_bin NOT NULL,
  `cn_name` varchar(64) collate utf8_bin NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=27 ;

-- 
-- 导出表中的数据 `lcn_admin_action`
-- 

INSERT INTO `lcn_admin_action` VALUES (1, 0, 0x70726f64756374, 0xe59586e59381);
INSERT INTO `lcn_admin_action` VALUES (2, 0, 0x637573746f6d6572, 0xe9a1bee5aea2);
INSERT INTO `lcn_admin_action` VALUES (4, 0, 0x73797374656d, 0xe7b3bbe7bb9f);
INSERT INTO `lcn_admin_action` VALUES (8, 1, 0x70726f647563745f6d616e616765, 0xe59586e59381e6b7bbe58aa02fe7bc96e8be91);
INSERT INTO `lcn_admin_action` VALUES (9, 1, 0x70726f647563745f64656c657465, 0xe59586e59381e588a0e999a42fe681a2e5a48d);
INSERT INTO `lcn_admin_action` VALUES (10, 1, 0x6361745f6d616e616765, 0xe58886e7b1bbe6b7bbe58aa02fe7bc96e8be91);
INSERT INTO `lcn_admin_action` VALUES (11, 1, 0x6361745f64656c657465, 0xe58886e7b1bbe588a0e999a4);
INSERT INTO `lcn_admin_action` VALUES (12, 1, 0x617474725f6d616e616765, 0xe5b19ee680a7e6b7bbe58aa02fe7bc96e8be91);
INSERT INTO `lcn_admin_action` VALUES (13, 1, 0x617474725f64656c657465, 0xe5b19ee680a7e588a0e999a4);
INSERT INTO `lcn_admin_action` VALUES (14, 1, 0x617474725f7365745f6d616e616765, 0xe5b19ee680a7e58886e7bb84e6b7bbe58aa02fe7bc96e8be91);
INSERT INTO `lcn_admin_action` VALUES (15, 1, 0x617474725f7365745f64656c657465, 0xe5b19ee680a7e58886e7bb84e588a0e999a4);
INSERT INTO `lcn_admin_action` VALUES (16, 1, 0x6272616e645f6d616e616765, 0xe59381e7898ce6b7bbe58aa02fe7bc96e8be91);
INSERT INTO `lcn_admin_action` VALUES (17, 1, 0x6272616e645f64656c657465, 0xe59381e7898ce588a0e999a4);
INSERT INTO `lcn_admin_action` VALUES (18, 2, 0x637573746f6d65725f6d616e616765, 0xe9a1bee5aea2e6b7bbe58aa02fe7bc96e8be91);
INSERT INTO `lcn_admin_action` VALUES (19, 2, 0x637573746f6d65725f64656c657465, 0xe9a1bee5aea2e588a0e999a4);
INSERT INTO `lcn_admin_action` VALUES (20, 4, 0x7061796d656e745f6d616e616765, 0xe694afe4bb98e696b9e5bc8fe8a385e8bdbd);
INSERT INTO `lcn_admin_action` VALUES (21, 4, 0x7061796d656e745f756e696e7374616c6c, 0xe694afe4bb98e696b9e5bc8fe58db8e8bdbd);
INSERT INTO `lcn_admin_action` VALUES (22, 4, 0x61646d696e5f757365725f6d616e616765, 0xe7aea1e79086e59198e6b7bbe58aa02fe7bc96e8be91);
INSERT INTO `lcn_admin_action` VALUES (23, 4, 0x61646d696e5f757365725f64656c657465, 0xe7aea1e79086e59198e588a0e999a4);
INSERT INTO `lcn_admin_action` VALUES (24, 4, 0x726f6c655f6d616e616765, 0xe8a792e889b2e6b7bbe58aa02fe7bc96e8be91);
INSERT INTO `lcn_admin_action` VALUES (25, 4, 0x726f6c655f64656c657465, 0xe8a792e889b2e588a0e999a4);
INSERT INTO `lcn_admin_action` VALUES (26, 4, 0x7368697070696e675f6d616e616765, 0xe9858de98081e696b9e5bc8f);

-- --------------------------------------------------------

-- 
-- 表的结构 `lcn_admin_user`
-- 

CREATE TABLE `lcn_admin_user` (
  `id` smallint(6) unsigned NOT NULL auto_increment,
  `name` varchar(32) collate utf8_bin NOT NULL,
  `email` varchar(32) collate utf8_bin NOT NULL,
  `password` varchar(32) collate utf8_bin NOT NULL,
  `role_id` smallint(6) default NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

-- 
-- 导出表中的数据 `lcn_admin_user`
-- 

INSERT INTO `lcn_admin_user` VALUES (1, 0x61646d696e, '', 0x3936653739323138393635656237326339326135343964643561333330313132, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

-- 
-- 表的结构 `lcn_area_region`
-- 

CREATE TABLE `lcn_area_region` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `shipping_area_id` smallint(6) unsigned NOT NULL,
  `region_id` smallint(6) unsigned NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=27 ;

-- 
-- 导出表中的数据 `lcn_area_region`
-- 

INSERT INTO `lcn_area_region` VALUES (22, 1, 6);
INSERT INTO `lcn_area_region` VALUES (25, 3, 1);
INSERT INTO `lcn_area_region` VALUES (21, 2, 1);
INSERT INTO `lcn_area_region` VALUES (16, 5, 1);
INSERT INTO `lcn_area_region` VALUES (26, 4, 1);

-- --------------------------------------------------------

-- 
-- 表的结构 `lcn_customer`
-- 

CREATE TABLE `lcn_customer` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(32) collate utf8_bin NOT NULL,
  `email` varchar(32) collate utf8_bin NOT NULL,
  `password` varchar(32) collate utf8_bin NOT NULL,
  `password_auto` varchar(32) collate utf8_bin default NULL,
  `dob` date default NULL,
  `is_active` tinyint(1) NOT NULL default '0',
  `priority_shipping_id` int(11) default NULL,
  `priority_payment_id` smallint(6) default NULL,
  `login_count` smallint(6) NOT NULL default '0',
  `last_login_at` datetime NOT NULL default '0000-00-00 00:00:00',
  `Last_login_ip` text collate utf8_bin,
  `is_lock` tinyint(1) NOT NULL default '0',
  `is_sendemail` tinyint(1) NOT NULL default '0',
  `registry_at` datetime NOT NULL default '0000-00-00 00:00:00',
  `updated_at` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

-- 
-- 导出表中的数据 `lcn_customer`
-- 

INSERT INTO `lcn_customer` VALUES (1, 0x74657374, 0x6c636e70687031403132332e636f6d, 0x3936653739323138393635656237326339326135343964643561333330313132, NULL, NULL, 0, NULL, NULL, 0, '2010-05-13 09:31:12', NULL, 0, 0, '2010-05-13 09:07:43', '2010-05-13 09:16:33');

-- --------------------------------------------------------

-- 
-- 表的结构 `lcn_customer_address`
-- 

CREATE TABLE `lcn_customer_address` (
  `id` int(11) NOT NULL auto_increment,
  `customer_id` varchar(255) collate utf8_bin NOT NULL,
  `address_name` varchar(64) collate utf8_bin default NULL,
  `consignee` varchar(64) collate utf8_bin default NULL,
  `phone` varchar(16) collate utf8_bin default NULL,
  `mobile` varchar(16) collate utf8_bin default NULL,
  `fax` varchar(16) collate utf8_bin default NULL,
  `postcode` varchar(16) collate utf8_bin default NULL,
  `address` varchar(255) collate utf8_bin default NULL,
  `province_id` smallint(6) default NULL,
  `city_id` smallint(6) default NULL,
  `district_id` smallint(6) default NULL,
  `is_default` tinyint(1) NOT NULL default '0',
  `invoice_head` varchar(255) collate utf8_bin default NULL,
  `remark` text collate utf8_bin,
  `created_at` datetime NOT NULL default '0000-00-00 00:00:00',
  `updated_at` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

-- 
-- 导出表中的数据 `lcn_customer_address`
-- 

INSERT INTO `lcn_customer_address` VALUES (1, 0x31, NULL, 0x74657374, 0x313131, '', NULL, '', 0x313131, 6, 77, 706, 1, NULL, NULL, '2010-05-13 09:07:43', '2010-05-13 09:16:33');

-- --------------------------------------------------------

-- 
-- 表的结构 `lcn_order`
-- 

CREATE TABLE `lcn_order` (
  `id` int(11) NOT NULL auto_increment,
  `order_sn` varchar(32) default NULL,
  `customer_id` int(11) NOT NULL,
  `payment_id` smallint(6) NOT NULL,
  `shipping_id` smallint(6) NOT NULL,
  `total_product_price` decimal(9,2) NOT NULL,
  `total_weight` mediumint(9) NOT NULL,
  `auto_freight_fee` decimal(6,2) NOT NULL,
  `actual_freight_fee` decimal(6,2) default NULL,
  `payment_fee` decimal(6,2) default NULL,
  `total_cost` decimal(9,2) default NULL,
  `total_price` decimal(9,2) NOT NULL,
  `need_pay` decimal(9,2) default NULL,
  `already_pay` decimal(9,2) default NULL,
  `is_need_invoice` tinyint(1) NOT NULL default '0',
  `customer_remark` text,
  `status` tinyint(4) NOT NULL,
  `is_delete` tinyint(1) NOT NULL default '0',
  `place_at` datetime NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `IDX_ORDER_SN` (`order_sn`),
  KEY `IDX_CUSTOMER_ID` (`customer_id`),
  KEY `IDX_PAYMENT_ID` (`payment_id`),
  KEY `IDX_SHIPPING_ID` (`shipping_id`),
  KEY `IDX_IS_DELETE` (`is_delete`),
  KEY `IDX_IS_NEED_INVOICE` (`is_need_invoice`),
  KEY `IDX_STATUS` (`status`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- 
-- 导出表中的数据 `lcn_order`
-- 

INSERT INTO `lcn_order` VALUES (1, '2010051361516', 1, 1, 2, 0.00, 0, 15.00, 0.00, 0.00, 0.00, 15.00, 0.00, 0.00, 0, '', 1, 0, '2010-05-13 09:16:37');

-- --------------------------------------------------------

-- 
-- 表的结构 `lcn_order_delivery`
-- 

CREATE TABLE `lcn_order_delivery` (
  `id` int(11) NOT NULL auto_increment,
  `order_id` int(11) NOT NULL,
  `consignee` varchar(32) NOT NULL,
  `contact_name` varchar(32) default NULL,
  `contact_mobile` varchar(11) default NULL,
  `contact_phone` varchar(32) default NULL,
  `address` varchar(255) NOT NULL,
  `province` varchar(32) NOT NULL,
  `city` varchar(32) NOT NULL,
  `district` varchar(32) NOT NULL,
  `province_id` smallint(6) NOT NULL,
  `city_id` smallint(6) NOT NULL,
  `district_id` smallint(6) NOT NULL,
  `postcode` varchar(16) default NULL,
  `shipping_remark` text,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `IDX_ORDER_ID` (`order_id`),
  KEY `IDX_PROVINCE_ID` (`province_id`),
  KEY `IDX_CITY_ID` (`city_id`),
  KEY `IDX_DISTRICT_ID` (`district_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- 
-- 导出表中的数据 `lcn_order_delivery`
-- 

INSERT INTO `lcn_order_delivery` VALUES (1, 1, 'test', NULL, '', '111', '111', '', '', '', 6, 77, 706, '', '');

-- --------------------------------------------------------

-- 
-- 表的结构 `lcn_order_feedback`
-- 

CREATE TABLE `lcn_order_feedback` (
  `id` int(11) NOT NULL auto_increment,
  `order_id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `content` mediumtext NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `IDX_ORDER_ID` (`order_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- 导出表中的数据 `lcn_order_feedback`
-- 


-- --------------------------------------------------------

-- 
-- 表的结构 `lcn_order_item`
-- 

CREATE TABLE `lcn_order_item` (
  `id` int(11) NOT NULL auto_increment,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(128) NOT NULL,
  `quantity` mediumint(9) NOT NULL,
  `price` decimal(9,2) NOT NULL,
  `weight` mediumint(9) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `IDX_ORDER_ID` (`order_id`),
  KEY `IDX_PRODUCT_ID` (`product_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- 
-- 导出表中的数据 `lcn_order_item`
-- 

INSERT INTO `lcn_order_item` VALUES (1, 1, 2, 'iPod Touch', 1, 0.00, 0);

-- --------------------------------------------------------

-- 
-- 表的结构 `lcn_payment`
-- 

CREATE TABLE `lcn_payment` (
  `id` tinyint(3) unsigned NOT NULL auto_increment,
  `code` varchar(20) collate utf8_bin NOT NULL,
  `name` varchar(120) collate utf8_bin NOT NULL,
  `fee` varchar(10) collate utf8_bin NOT NULL default '0',
  `desc` text collate utf8_bin NOT NULL,
  `charge_date` varchar(32) collate utf8_bin default NULL,
  `account` varchar(64) collate utf8_bin default NULL,
  `order` tinyint(3) unsigned default '0',
  `pay_config` text collate utf8_bin NOT NULL,
  `enabled` tinyint(1) unsigned NOT NULL default '0',
  `is_cod` tinyint(1) unsigned NOT NULL default '0',
  `is_online` tinyint(1) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=5 ;

-- 
-- 导出表中的数据 `lcn_payment`
-- 

INSERT INTO `lcn_payment` VALUES (1, 0x616c69706179, 0xe694afe4bb98e5ae9d, 0x30, 0xe694afe4bb98e5ae9de7bd91e7ab99287777772e616c697061792e636f6d2920e698afe59bbde58685e58588e8bf9be79a84e7bd91e4b88ae694afe4bb98e5b9b3e58fb0e380823c62722f3e454353686f70e88194e59088e694afe4bb98e5ae9de68ea8e587bae4bc98e683a0e5a597e9a490efbc9a3c62722f3ee697a0e9a284e4bb982fe5b9b4e8b4b9efbc8ce58d95e7ac94e8b4b9e78e87312e3525efbc8ce697a0e6b581e9878fe99990e588b6e380823c62722f3e3c6120687265663d2268747470733a2f2f7777772e616c697061792e636f6d2f68696d616c617961732f70726163746963616c6974795f70726f66696c655f656469742e68746d3f6d61726b65745f747970653d66726f6d5f6167656e745f636f6e747261637426637573746f6d65725f65787465726e616c5f69643d433433333533313939343536373234363431313322207461726765743d225f626c616e6b223e3c666f6e7420636f6c6f723d22726564223ee7ab8be58db3e59ca8e7babfe794b3e8afb73c2f666f6e743e3c2f613e, 0x313131, NULL, NULL, 0x613a343a7b693a303b613a333a7b733a343a226e616d65223b733a31343a22616c697061795f6163636f756e74223b733a343a2274797065223b733a343a2274657874223b733a353a2276616c7565223b733a31313a223133363630343734363932223b7d693a313b613a333a7b733a343a226e616d65223b733a31303a22616c697061795f6b6579223b733a343a2274797065223b733a343a2274657874223b733a353a2276616c7565223b733a33323a2267336f656276633573636c7675667861393161396f337032637273776b657874223b7d693a323b613a333a7b733a343a226e616d65223b733a31343a22616c697061795f706172746e6572223b733a343a2274797065223b733a343a2274657874223b733a353a2276616c7565223b733a31363a2232303838313032363330303032313334223b7d693a333b613a333a7b733a343a226e616d65223b733a31373a22616c697061795f7061795f6d6574686f64223b733a343a2274797065223b733a363a2273656c656374223b733a353a2276616c7565223b733a313a2231223b7d7d, 1, 0, 1);
INSERT INTO `lcn_payment` VALUES (4, 0x6368696e6162616e6b, 0xe7bd91e993b6e59ca8e7babf, 0x3125, 0xe7bd91e993b6e59ca8e7babfe4b88ee4b8ade59bbde5b7a5e59586e993b6e8a18ce38081e68b9be59586e993b6e8a18ce38081e4b8ade59bbde5bbbae8aebee993b6e8a18ce380813c62722f3ee5869ce4b89ae993b6e8a18ce38081e6b091e7949fe993b6e8a18ce7ad89e695b0e58d81e5aeb6e98791e89e8de69cbae69e84e8bebee68890e58d8fe8aeaee380823c62722f3ee585a8e99da2e694afe68c81e585a8e59bbd3139e5aeb6e993b6e8a18ce79a84e4bfa1e794a8e58da1e58f8ae5809fe8aeb0e58da1e5ae9ee78eb0e7bd91e4b88ae694afe4bb98e380823c62722f3eefbc88e7bd91e59d80efbc9a687474703a2f2f7777772e6368696e6162616e6b2e636f6d2e636eefbc89, 0x313131, NULL, NULL, 0x613a323a7b693a303b613a333a7b733a343a226e616d65223b733a31373a226368696e6162616e6b5f6163636f756e74223b733a343a2274797065223b733a343a2274657874223b733a353a2276616c7565223b733a333a22313131223b7d693a313b613a333a7b733a343a226e616d65223b733a31333a226368696e6162616e6b5f6b6579223b733a343a2274797065223b733a343a2274657874223b733a353a2276616c7565223b733a333a22313131223b7d7d, 0, 0, 1);

-- --------------------------------------------------------

-- 
-- 表的结构 `lcn_product`
-- 

CREATE TABLE `lcn_product` (
  `id` int(11) unsigned NOT NULL auto_increment COMMENT 'ID',
  `cat_id` int(11) default NULL COMMENT '分类ID',
  `brand_id` mediumint(9) default NULL COMMENT '品牌ID',
  `attr_set_id` smallint(6) default NULL COMMENT '属性组ID',
  `price` decimal(9,2) NOT NULL default '0.00' COMMENT '价格',
  `market_price` decimal(9,2) default '0.00' COMMENT '市场价格',
  `special_price` decimal(9,2) default '0.00' COMMENT '特价',
  `name` varchar(255) collate utf8_bin NOT NULL COMMENT '商品名称',
  `short_name` varchar(255) collate utf8_bin default NULL,
  `url_alias` varchar(255) collate utf8_bin default NULL COMMENT 'URL别名',
  `short_desc` tinytext collate utf8_bin COMMENT '简短描述',
  `desc` text collate utf8_bin COMMENT '详细描述',
  `weight` int(9) unsigned NOT NULL default '0' COMMENT '重量',
  `stock` mediumint(9) unsigned default NULL COMMENT '库存',
  `is_on_sale` tinyint(1) NOT NULL default '0' COMMENT '上架',
  `on_sale_at` datetime NOT NULL default '0000-00-00 00:00:00' COMMENT '上架日期',
  `tag` varchar(255) collate utf8_bin default NULL COMMENT '标签',
  `meta_title` varchar(255) collate utf8_bin default NULL COMMENT 'Meta标题',
  `meta_keywords` varchar(255) collate utf8_bin default NULL COMMENT 'Meta关键字',
  `meta_desc` text collate utf8_bin COMMENT 'Meta描述',
  `is_new` tinyint(1) NOT NULL default '1' COMMENT '新品？',
  `is_hot` tinyint(1) NOT NULL default '0' COMMENT '热销？',
  `is_special_price` tinyint(1) NOT NULL default '0' COMMENT '特价？',
  `special_price_start_at` datetime default NULL COMMENT '特价日期开始',
  `special_price_end_at` datetime default NULL COMMENT '特价日期结束',
  `is_commend` tinyint(1) NOT NULL default '0' COMMENT '推荐?',
  `is_delete` tinyint(1) NOT NULL default '0' COMMENT '删除？',
  `created_at` datetime NOT NULL default '0000-00-00 00:00:00' COMMENT '添加日期',
  `updated_at` datetime NOT NULL default '0000-00-00 00:00:00' COMMENT '更新日期',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='商品表' AUTO_INCREMENT=8 ;

-- 
-- 导出表中的数据 `lcn_product`
-- 

INSERT INTO `lcn_product` VALUES (1, 149, 2, 0, 0.00, 0.00, 0.00, 0xe5ae8fe7a281efbc8841636572efbc89415334373431472d3433324735304d6e, '', '', '', '', 0, 0, 1, '2010-05-13 08:50:40', NULL, '', '', '', 1, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, '2010-05-13 08:50:40', '2010-05-13 08:53:29');
INSERT INTO `lcn_product` VALUES (2, 102, 2, 0, 0.00, 0.00, 0.00, 0x69506f6420546f756368, '', '', '', '', 0, 0, 1, '2010-05-13 08:54:25', NULL, '', '', '', 1, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '2010-05-13 08:54:25', '2010-05-13 08:54:48');
INSERT INTO `lcn_product` VALUES (3, 29, 12, 0, 0.00, 0.00, 0.00, 0xe6b5b7e5b094efbc884861696572efbc89e6b497e8a1a3e69cba, 0xe6b5b7e5b0942058514235302d37323838, '', '', '', 0, 0, 1, '2010-05-13 08:56:27', NULL, '', '', '', 0, 1, 1, NULL, NULL, 0, 0, '2010-05-13 08:56:27', '2010-05-13 08:56:27');
INSERT INTO `lcn_product` VALUES (4, 149, 7, 0, 0.00, 0.00, 0.00, 0xe683a0e699aeefbc886870efbc893434313173, '', '', '', '', 0, 0, 1, '2010-05-13 08:58:22', NULL, '', '', '', 1, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, '2010-05-13 08:58:22', '2010-05-13 08:58:52');
INSERT INTO `lcn_product` VALUES (5, 30, 5, 0, 0.00, 0.00, 0.00, 0xe5a48fe699aeefbc885348415250efbc893430e88bb1e5afb8, '', '', '', '', 0, 0, 1, '2010-05-13 08:59:46', NULL, '', '', '', 1, 0, 1, NULL, NULL, 0, 0, '2010-05-13 08:59:46', '2010-05-13 08:59:46');
INSERT INTO `lcn_product` VALUES (6, 258, 6, 0, 0.00, 0.00, 0.00, 0xe5a4a9e6a2ad28544953534f5429e88595e8a1a8, '', '', '', '', 0, 0, 0, '2010-05-13 09:03:11', NULL, '', '', '', 1, 1, 1, NULL, NULL, 1, 0, '2010-05-13 09:03:11', '2010-05-13 09:03:11');
INSERT INTO `lcn_product` VALUES (7, 258, 4, 0, 0.00, 0.00, 0.00, 0xe5a5a5e699aeefbc8841555055efbc89, '', '', '', '', 0, 0, 1, '2010-05-13 09:05:05', NULL, '', '', '', 1, 1, 1, NULL, NULL, 1, 0, '2010-05-13 09:05:05', '2010-05-13 09:05:05');

-- --------------------------------------------------------

-- 
-- 表的结构 `lcn_product_attr`
-- 

CREATE TABLE `lcn_product_attr` (
  `id` mediumint(9) NOT NULL auto_increment COMMENT 'ID',
  `attr_set_id` smallint(6) unsigned default NULL COMMENT '分组ID',
  `attr_name` varchar(32) collate utf8_bin NOT NULL COMMENT '名称',
  `attr_type` varchar(16) collate utf8_bin default NULL COMMENT '类型',
  `option_values` varchar(255) collate utf8_bin default NULL COMMENT '可选值',
  `default_value` varchar(96) collate utf8_bin default NULL COMMENT '默认值',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='商品属性表' AUTO_INCREMENT=1 ;

-- 
-- 导出表中的数据 `lcn_product_attr`
-- 


-- --------------------------------------------------------

-- 
-- 表的结构 `lcn_product_attr_set`
-- 

CREATE TABLE `lcn_product_attr_set` (
  `id` smallint(6) NOT NULL auto_increment COMMENT 'ID',
  `name` varchar(255) collate utf8_bin NOT NULL COMMENT '分组名',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='商品属性分组表' AUTO_INCREMENT=1 ;

-- 
-- 导出表中的数据 `lcn_product_attr_set`
-- 


-- --------------------------------------------------------

-- 
-- 表的结构 `lcn_product_attr_value`
-- 

CREATE TABLE `lcn_product_attr_value` (
  `id` int(11) NOT NULL auto_increment COMMENT 'ID',
  `product_id` int(11) NOT NULL COMMENT '商品ID',
  `attr_id` mediumint(9) NOT NULL COMMENT '属性ID',
  `attr_value` varchar(255) collate utf8_bin NOT NULL COMMENT '属性值',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='商品-属性值表' AUTO_INCREMENT=1 ;

-- 
-- 导出表中的数据 `lcn_product_attr_value`
-- 


-- --------------------------------------------------------

-- 
-- 表的结构 `lcn_product_brand`
-- 

CREATE TABLE `lcn_product_brand` (
  `id` mediumint(1) NOT NULL auto_increment,
  `name` varchar(32) collate utf8_bin NOT NULL COMMENT '名称',
  `byname` varchar(32) collate utf8_bin default NULL,
  `logo_path` varchar(255) collate utf8_bin default NULL COMMENT 'Logo路径',
  `logo` varchar(255) collate utf8_bin default NULL,
  `desc` text collate utf8_bin COMMENT '描述',
  `sort_order` tinyint(1) NOT NULL default '0' COMMENT '排序',
  `website` varchar(32) collate utf8_bin default NULL COMMENT '官方网址',
  `created_at` datetime NOT NULL default '0000-00-00 00:00:00' COMMENT '添加日期',
  `updated_at` datetime NOT NULL default '0000-00-00 00:00:00' COMMENT '更新日期',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=38 ;

-- 
-- 导出表中的数据 `lcn_product_brand`
-- 

INSERT INTO `lcn_product_brand` VALUES (2, 0xe5a881e5ae9d, '', '', 0x6272616e642f323031303033312e676966, '', 0, '', '2010-03-31 11:30:35', '2010-05-12 17:41:52');
INSERT INTO `lcn_product_brand` VALUES (3, 0xe58f8be8aeaf, '', '', 0x6272616e642f323031303033322e676966, '', 0, '', '2010-03-31 12:04:20', '2010-03-31 12:04:20');
INSERT INTO `lcn_product_brand` VALUES (4, 0xe69c97e7a791, '', '', 0x6272616e642f323031303033332e676966, '', 0, '', '2010-03-31 12:26:56', '2010-03-31 12:27:12');
INSERT INTO `lcn_product_brand` VALUES (5, 0xe5bf86e68db7, '', '', 0x6272616e642f323031303033342e676966, '', 0, '', '2010-03-31 12:34:47', '2010-03-31 12:34:47');
INSERT INTO `lcn_product_brand` VALUES (6, 0x53414e4449534b, '', '', 0x6272616e642f323031303033352e676966, '', 0, '', '2010-03-31 12:35:59', '2010-03-31 12:36:06');
INSERT INTO `lcn_product_brand` VALUES (7, 0xe88bb9e69e9c, '', '', 0x6272616e642f323031303033362e676966, '', 0, '', '2010-03-31 12:40:22', '2010-03-31 12:40:34');
INSERT INTO `lcn_product_brand` VALUES (8, 0xe5889be696b0e7a791e68a80, '', '', 0x6272616e642f3230313030332e6a7067, '', 0, '', '2010-03-31 12:47:12', '2010-03-31 12:47:17');
INSERT INTO `lcn_product_brand` VALUES (9, 0xe8afbae59fbae4ba9a, '', '', 0x6272616e642f323031303033372e676966, '', 0, '', '2010-03-31 12:47:49', '2010-03-31 12:47:54');
INSERT INTO `lcn_product_brand` VALUES (10, 0xe4b99de998b3, '', '', 0x6272616e642f323031303033332e6a7067, '', 0, '', '2010-03-31 13:14:52', '2010-03-31 13:41:09');
INSERT INTO `lcn_product_brand` VALUES (11, 0xe5af8ce5a3abe696bde4b990, '', '', 0x6272616e642f323031303033312e6a7067, '', 0, '', '2010-03-31 13:34:04', '2010-03-31 13:34:04');
INSERT INTO `lcn_product_brand` VALUES (12, 0xe6b5b7e5b094, '', '', 0x6272616e642f323031303033322e6a7067, '', 0, '', '2010-03-31 13:35:18', '2010-03-31 13:35:18');
INSERT INTO `lcn_product_brand` VALUES (13, 0x414d44, '', '', 0x6272616e642f323031303033382e676966, '', 0, '', '2010-03-31 13:35:45', '2010-03-31 13:35:45');
INSERT INTO `lcn_product_brand` VALUES (14, 0xe6aca7e58d97e5a49a, '', '', 0x6272616e642f323031303033392e676966, '', 0, '', '2010-03-31 13:36:35', '2010-03-31 13:36:35');
INSERT INTO `lcn_product_brand` VALUES (15, 0xe985b7e586b7e887b3e5b08a, '', '', 0x6272616e642f32303130303331302e676966, '', 0, '', '2010-03-31 13:38:58', '2010-03-31 13:39:26');
INSERT INTO `lcn_product_brand` VALUES (16, 0xe6bcabe6ada5e88085, '', '', 0x6272616e642f32303130303331312e676966, '', 0, '', '2010-03-31 13:40:14', '2010-03-31 13:40:14');
INSERT INTO `lcn_product_brand` VALUES (17, 0xe8a5bfe997a8e5ad90, '', '', 0x6272616e642f32303130303331322e676966, '', 0, '', '2010-03-31 13:42:03', '2010-03-31 13:42:03');
INSERT INTO `lcn_product_brand` VALUES (18, 0x4c47, '', '', 0x6272616e642f323031303033342e6a7067, '', 0, '', '2010-03-31 13:42:33', '2010-03-31 13:42:33');
INSERT INTO `lcn_product_brand` VALUES (19, 0xe69dbee4b88b, '', '', 0x6272616e642f32303130303331332e676966, '', 0, '', '2010-03-31 13:43:07', '2010-03-31 13:43:07');
INSERT INTO `lcn_product_brand` VALUES (20, 0xe7b4a2e5b0bc, '', '', 0x6272616e642f32303130303331342e676966, '', 0, '', '2010-03-31 13:43:58', '2010-03-31 13:43:58');
INSERT INTO `lcn_product_brand` VALUES (21, 0xe6a0bce585b0e4bb95, '', '', 0x6272616e642f323031303033352e6a7067, '', 0, '', '2010-03-31 13:45:10', '2010-03-31 13:45:10');
INSERT INTO `lcn_product_brand` VALUES (22, 0xe5889be7bbb4, '', '', 0x6272616e642f323031303033362e6a7067, '', 0, '', '2010-03-31 13:45:42', '2010-03-31 13:45:42');
INSERT INTO `lcn_product_brand` VALUES (23, 0xe7be8ee79a84, '', '', 0x6272616e642f323031303033372e6a7067, '', 0, '', '2010-03-31 13:47:08', '2010-03-31 13:47:08');
INSERT INTO `lcn_product_brand` VALUES (24, 0xe691a9e68998e7bd97e68b89, '', '', 0x6272616e642f32303130303331352e676966, '', 0, '', '2010-03-31 13:47:42', '2010-03-31 13:47:42');
INSERT INTO `lcn_product_brand` VALUES (25, 0xe7b4a2e788b1, '', '', 0x6272616e642f32303130303331362e676966, '', 0, '', '2010-03-31 13:48:40', '2010-03-31 13:48:40');
INSERT INTO `lcn_product_brand` VALUES (26, 0xe4b889e6989f, '', '', 0x6272616e642f323031303033382e6a7067, '', 0, '', '2010-03-31 13:49:01', '2010-03-31 13:49:01');
INSERT INTO `lcn_product_brand` VALUES (27, 0xe9a39ee588a9e6b5a6, '', '', 0x6272616e642f32303130303331372e676966, '', 0, '', '2010-03-31 13:49:43', '2010-03-31 13:49:43');
INSERT INTO `lcn_product_brand` VALUES (28, 0xe58d8ee7a195, '', '', 0x6272616e642f32303130303331382e676966, '', 0, '', '2010-03-31 13:50:25', '2010-03-31 13:50:25');
INSERT INTO `lcn_product_brand` VALUES (29, 0xe88194e683b3, '', '', 0x6272616e642f323031303033392e6a7067, '', 0, '', '2010-03-31 13:50:52', '2010-03-31 13:51:24');
INSERT INTO `lcn_product_brand` VALUES (30, 0xe688b4e5b094, '', '', 0x6272616e642f32303130303331302e6a7067, '', 0, '', '2010-03-31 13:52:12', '2010-03-31 13:52:12');
INSERT INTO `lcn_product_brand` VALUES (31, 0xe88bb1e789b9e5b094, '', '', 0x6272616e642f32303130303331392e676966, '', 0, '', '2010-03-31 13:52:39', '2010-03-31 13:52:39');
INSERT INTO `lcn_product_brand` VALUES (32, 0xe98791e5a3abe9a1bf, '', '', 0x6272616e642f32303130303332302e676966, '', 0, '', '2010-03-31 13:53:04', '2010-03-31 13:53:04');
INSERT INTO `lcn_product_brand` VALUES (33, 0x5468696e6b506164, '', '', 0x6272616e642f32303130303331312e6a7067, '', 0, '', '2010-03-31 13:54:12', '2010-03-31 13:54:12');
INSERT INTO `lcn_product_brand` VALUES (34, 0xe5beaee8bdaf, '', '', 0x6272616e642f32303130303332312e676966, '', 0, '', '2010-03-31 13:54:44', '2010-03-31 13:54:44');
INSERT INTO `lcn_product_brand` VALUES (35, 0xe58da1e8a5bfe6aca7, '', '', 0x6272616e642f32303130303331322e6a7067, '', 0, '', '2010-03-31 13:56:03', '2010-03-31 13:56:03');
INSERT INTO `lcn_product_brand` VALUES (36, 0xe88b8fe6b38ae5b094, '', '', 0x6272616e642f32303130303331332e6a7067, '', 0, '', '2010-03-31 13:56:32', '2010-03-31 13:56:32');
INSERT INTO `lcn_product_brand` VALUES (37, 0xe5b0bce5bab7, '', '', 0x6272616e642f323031303034312e676966, '', 0, '', '2010-04-14 08:46:28', '2010-04-14 08:48:15');

-- --------------------------------------------------------

-- 
-- 表的结构 `lcn_product_cat`
-- 

CREATE TABLE `lcn_product_cat` (
  `id` int(11) NOT NULL auto_increment COMMENT 'ID',
  `name` varchar(255) collate utf8_bin NOT NULL COMMENT '分类名',
  `parent_id` int(11) NOT NULL default '0' COMMENT '父ID',
  `level` tinyint(3) NOT NULL default '1' COMMENT '层次',
  `path` varchar(255) collate utf8_bin default NULL COMMENT '路径',
  `is_root` tinyint(1) NOT NULL default '1' COMMENT '根节点?',
  `is_leaf` tinyint(1) NOT NULL default '1' COMMENT '叶节点?',
  `sort_order` tinyint(1) NOT NULL default '0' COMMENT '排序',
  `created_at` datetime NOT NULL default '0000-00-00 00:00:00' COMMENT '添加日期',
  `updated_at` datetime NOT NULL default '0000-00-00 00:00:00' COMMENT '更新日期',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='商品分类表' AUTO_INCREMENT=327 ;

-- 
-- 导出表中的数据 `lcn_product_cat`
-- 

INSERT INTO `lcn_product_cat` VALUES (1, 0xe5aeb6e794a8e794b5e599a8, 0, 1, 0x31, 1, 0, 0, '2010-03-29 17:27:16', '2010-03-29 17:27:16');
INSERT INTO `lcn_product_cat` VALUES (2, 0xe6898be69cbae695b0e7a081, 0, 1, 0x32, 1, 0, 0, '2010-03-29 17:27:24', '2010-03-29 17:27:24');
INSERT INTO `lcn_product_cat` VALUES (3, 0xe794b5e88491e4baa7e59381, 0, 1, 0x33, 1, 0, 0, '2010-03-29 17:27:31', '2010-03-29 17:27:31');
INSERT INTO `lcn_product_cat` VALUES (4, 0xe697a5e794a8e799bee8b4a7, 0, 1, 0x34, 1, 0, 0, '2010-03-29 17:27:38', '2010-03-29 17:27:38');
INSERT INTO `lcn_product_cat` VALUES (5, 0xe5a4a7e5aeb6e794b5, 1, 2, 0x312c35, 0, 0, 0, '2010-03-29 17:27:57', '2010-03-29 17:27:57');
INSERT INTO `lcn_product_cat` VALUES (29, 0xe6b497e8a1a3e69cba, 5, 3, 0x312c352c3239, 0, 1, 0, '2010-03-29 17:52:46', '2010-03-29 17:52:46');
INSERT INTO `lcn_product_cat` VALUES (6, 0xe7949fe6b4bbe794b5e599a8, 1, 2, 0x312c36, 0, 0, 0, '2010-03-29 17:28:23', '2010-03-29 17:28:23');
INSERT INTO `lcn_product_cat` VALUES (7, 0xe58ea8e688bfe794b5e599a8, 1, 2, 0x312c37, 0, 0, 0, '2010-03-29 17:28:37', '2010-03-29 17:28:37');
INSERT INTO `lcn_product_cat` VALUES (8, 0xe4b8aae4babae68aa4e79086, 1, 2, 0x312c38, 0, 0, 0, '2010-03-29 17:28:47', '2010-03-29 17:28:47');
INSERT INTO `lcn_product_cat` VALUES (9, 0xe6b1bde8bda6e794a8e59381, 1, 2, 0x312c39, 0, 0, 0, '2010-03-29 17:28:55', '2010-03-29 17:28:55');
INSERT INTO `lcn_product_cat` VALUES (10, 0xe6898be69cbae9809ae8aeaf, 2, 2, 0x322c3130, 0, 0, 0, '2010-03-29 17:29:36', '2010-03-29 17:29:36');
INSERT INTO `lcn_product_cat` VALUES (98, 0x47534de6898be69cba, 10, 3, 0x322c31302c3938, 0, 1, 0, '2010-03-29 18:20:49', '2010-03-29 18:22:43');
INSERT INTO `lcn_product_cat` VALUES (11, 0xe6898be69cbae9858de4bbb6, 2, 2, 0x322c3131, 0, 0, 0, '2010-03-29 17:29:48', '2010-03-29 17:29:48');
INSERT INTO `lcn_product_cat` VALUES (106, 0xe6898be69cbae794b5e6b1a0, 11, 3, 0x322c31312c313036, 0, 1, 0, '2010-03-29 18:24:23', '2010-03-29 18:24:23');
INSERT INTO `lcn_product_cat` VALUES (12, 0xe695b0e7a081e5bdb1e5838f, 2, 2, 0x322c3132, 0, 0, 0, '2010-03-29 17:29:57', '2010-03-29 17:36:21');
INSERT INTO `lcn_product_cat` VALUES (116, 0xe4bebfe690bae79bb8e69cba, 12, 3, 0x322c31322c313136, 0, 1, 0, '2010-03-29 18:29:51', '2010-03-29 18:29:51');
INSERT INTO `lcn_product_cat` VALUES (13, 0xe695b0e7a081e9858de4bbb6, 2, 2, 0x322c3133, 0, 0, 0, '2010-03-29 17:37:07', '2010-03-29 17:37:24');
INSERT INTO `lcn_product_cat` VALUES (123, 0xe5ad98e582a8e58da1, 13, 3, 0x322c31332c313233, 0, 1, 0, '2010-03-29 18:35:48', '2010-03-29 18:35:48');
INSERT INTO `lcn_product_cat` VALUES (14, 0xe697b6e5b09ae5bdb1e99fb3, 2, 2, 0x322c3134, 0, 0, 0, '2010-03-29 17:39:50', '2010-03-29 17:39:50');
INSERT INTO `lcn_product_cat` VALUES (134, 0x4d50332f4d5034, 14, 3, 0x322c31342c313334, 0, 1, 0, '2010-03-29 18:41:33', '2010-03-29 18:41:33');
INSERT INTO `lcn_product_cat` VALUES (15, 0xe794b5e88491e695b4e69cba, 3, 2, 0x332c3135, 0, 0, 0, '2010-03-29 17:40:02', '2010-03-29 17:40:02');
INSERT INTO `lcn_product_cat` VALUES (149, 0xe7ac94e8aeb0e69cac, 15, 3, 0x332c31352c313439, 0, 1, 0, '2010-03-30 02:04:30', '2010-03-30 02:04:30');
INSERT INTO `lcn_product_cat` VALUES (16, 0xe6a0b8e5bf83e9858de4bbb6, 3, 2, 0x332c3136, 0, 0, 0, '2010-03-29 17:40:19', '2010-03-29 17:40:19');
INSERT INTO `lcn_product_cat` VALUES (154, 0x435055, 16, 3, 0x332c31362c313534, 0, 1, 0, '2010-03-30 02:05:22', '2010-03-30 02:05:22');
INSERT INTO `lcn_product_cat` VALUES (17, 0xe5a496e8aebee4baa7e59381, 3, 2, 0x332c3137, 0, 0, 0, '2010-03-29 17:40:31', '2010-03-29 17:40:31');
INSERT INTO `lcn_product_cat` VALUES (162, 0xe698bee7a4bae599a8, 17, 3, 0x332c31372c313632, 0, 1, 0, '2010-03-30 02:06:35', '2010-03-30 02:06:35');
INSERT INTO `lcn_product_cat` VALUES (18, 0xe7bd91e7bb9ce4baa7e59381, 3, 2, 0x332c3138, 0, 0, 0, '2010-03-29 17:40:46', '2010-03-29 17:40:46');
INSERT INTO `lcn_product_cat` VALUES (193, 0xe8b7afe794b1e599a8, 18, 3, 0x332c31382c313933, 0, 1, 0, '2010-03-30 02:14:55', '2010-03-30 02:14:55');
INSERT INTO `lcn_product_cat` VALUES (19, 0xe794b5e88491e8bdafe4bbb6, 3, 2, 0x332c3139, 0, 0, 0, '2010-03-29 17:40:56', '2010-03-29 17:40:56');
INSERT INTO `lcn_product_cat` VALUES (198, 0xe4baace4b89ce69c8de58aa1, 19, 3, 0x332c31392c313938, 0, 1, 0, '2010-03-30 02:16:02', '2010-03-30 02:16:02');
INSERT INTO `lcn_product_cat` VALUES (20, 0xe58a9ee585ace88097e69d90, 3, 2, 0x332c3230, 0, 0, 0, '2010-03-29 17:41:04', '2010-03-29 17:41:04');
INSERT INTO `lcn_product_cat` VALUES (207, 0xe7a192e9bc93, 20, 3, 0x332c32302c323037, 0, 1, 0, '2010-03-30 02:18:37', '2010-03-30 02:18:37');
INSERT INTO `lcn_product_cat` VALUES (21, 0xe5aeb6e5b185e794a8e59381, 4, 2, 0x342c3231, 0, 0, 0, '2010-03-29 17:41:29', '2010-03-30 02:22:42');
INSERT INTO `lcn_product_cat` VALUES (212, 0xe5ba8ae59381e5a597e4bbb6, 21, 3, 0x342c32312c323132, 0, 1, 0, '2010-03-30 02:20:04', '2010-03-30 02:20:04');
INSERT INTO `lcn_product_cat` VALUES (22, 0xe69c8de8a385e99e8be5b8bd, 4, 2, 0x342c3232, 0, 0, 0, '2010-03-29 17:41:55', '2010-03-29 17:41:55');
INSERT INTO `lcn_product_cat` VALUES (230, 0xe794b7e8a385, 22, 3, 0x342c32322c323330, 0, 1, 0, '2010-03-30 02:34:56', '2010-03-30 02:34:56');
INSERT INTO `lcn_product_cat` VALUES (23, 0xe58ea8e688bfe794a8e585b7, 4, 2, 0x342c3233, 0, 0, 0, '2010-03-29 17:47:49', '2010-03-29 17:47:49');
INSERT INTO `lcn_product_cat` VALUES (244, 0xe6b299e99485, 23, 3, 0x342c32332c323434, 0, 1, 0, '2010-03-30 02:38:03', '2010-03-30 02:38:03');
INSERT INTO `lcn_product_cat` VALUES (24, 0xe9929fe8a1a8e9a696e9a5b0, 4, 2, 0x342c3234, 0, 0, 0, '2010-03-29 17:48:51', '2010-03-29 17:48:51');
INSERT INTO `lcn_product_cat` VALUES (25, 0xe7a4bce59381e7aeb1e58c85, 4, 2, 0x342c3235, 0, 0, 0, '2010-03-29 17:49:03', '2010-03-29 17:49:03');
INSERT INTO `lcn_product_cat` VALUES (269, 0xe781abe69cbae7839fe585b7, 25, 3, 0x342c32352c323639, 0, 1, 0, '2010-03-30 02:45:10', '2010-03-30 02:45:10');
INSERT INTO `lcn_product_cat` VALUES (26, 0xe8bf90e58aa8e581a5e5bab7, 4, 2, 0x342c3236, 0, 0, 0, '2010-03-29 17:49:19', '2010-03-29 17:49:19');
INSERT INTO `lcn_product_cat` VALUES (289, 0xe8bf90e58aa8e599a8e69d90, 26, 3, 0x342c32362c323839, 0, 1, 0, '2010-03-30 02:49:43', '2010-03-30 02:49:43');
INSERT INTO `lcn_product_cat` VALUES (27, 0xe4b8aae4babae58c96e5a686, 4, 2, 0x342c3237, 0, 0, 0, '2010-03-29 17:49:30', '2010-03-29 17:49:30');
INSERT INTO `lcn_product_cat` VALUES (303, 0xe4b9b3e6b6b22fe99da2e99c9c, 27, 3, 0x342c32372c333033, 0, 1, 0, '2010-03-30 03:02:53', '2010-03-30 03:03:22');
INSERT INTO `lcn_product_cat` VALUES (28, 0xe78ea9e585b7e4b990e599a8, 4, 2, 0x342c3238, 0, 0, 0, '2010-03-29 17:49:39', '2010-03-29 17:49:39');
INSERT INTO `lcn_product_cat` VALUES (317, 0xe8b7b3e8889ee6afaf, 28, 3, 0x342c32382c333137, 0, 1, 0, '2010-03-30 03:06:41', '2010-03-30 03:06:41');
INSERT INTO `lcn_product_cat` VALUES (30, 0xe5b9b3e69dbfe794b5e8a786, 5, 3, 0x312c352c3330, 0, 1, 0, '2010-03-29 17:52:57', '2010-03-29 17:52:57');
INSERT INTO `lcn_product_cat` VALUES (31, 0xe794b5e783ade6b0b4e599a8, 5, 3, 0x312c352c3331, 0, 1, 0, '2010-03-29 17:53:21', '2010-03-29 17:53:21');
INSERT INTO `lcn_product_cat` VALUES (32, 0xe5aeb6e5baade5bdb1e999a2, 5, 3, 0x312c352c3332, 0, 1, 0, '2010-03-29 17:54:10', '2010-03-29 17:54:10');
INSERT INTO `lcn_product_cat` VALUES (33, 0xe78783e6b094e783ade6b0b4e599a8, 5, 3, 0x312c352c3333, 0, 1, 0, '2010-03-29 17:54:29', '2010-03-29 17:54:29');
INSERT INTO `lcn_product_cat` VALUES (34, 0xe7a9bae8b083, 5, 3, 0x312c352c3334, 0, 1, 0, '2010-03-29 17:54:34', '2010-03-29 17:54:34');
INSERT INTO `lcn_product_cat` VALUES (35, 0xe586b0e7aeb1, 5, 3, 0x312c352c3335, 0, 1, 0, '2010-03-29 17:54:44', '2010-03-29 17:54:44');
INSERT INTO `lcn_product_cat` VALUES (36, 0xe586b7e69f9c, 5, 3, 0x312c352c3336, 0, 1, 0, '2010-03-29 17:54:48', '2010-03-29 17:54:48');
INSERT INTO `lcn_product_cat` VALUES (37, 0x445644e692ade694bee69cba, 5, 3, 0x312c352c3337, 0, 1, 0, '2010-03-29 17:55:14', '2010-03-29 17:55:14');
INSERT INTO `lcn_product_cat` VALUES (38, 0xe794b5e8a786e99984e4bbb6, 5, 3, 0x312c352c3338, 0, 1, 0, '2010-03-29 17:55:19', '2010-03-29 17:55:19');
INSERT INTO `lcn_product_cat` VALUES (39, 0xe5aeb6e794b5e69c8de58aa1, 5, 3, 0x312c352c3339, 0, 1, 0, '2010-03-29 17:55:32', '2010-03-29 17:55:32');
INSERT INTO `lcn_product_cat` VALUES (40, 0xe5aeb6e794b5e4b88be4b9a1, 5, 3, 0x312c352c3430, 0, 1, 0, '2010-03-29 17:55:37', '2010-03-29 17:55:37');
INSERT INTO `lcn_product_cat` VALUES (41, 0xe8bfb7e4bda0e5bdb1e5838f, 5, 3, 0x312c352c3431, 0, 1, 0, '2010-03-29 17:55:45', '2010-03-29 17:55:45');
INSERT INTO `lcn_product_cat` VALUES (42, 0xe794b5e9a38ee68987, 6, 3, 0x312c362c3432, 0, 1, 0, '2010-03-29 17:57:07', '2010-03-29 17:57:07');
INSERT INTO `lcn_product_cat` VALUES (43, 0xe9a5aee6b0b4e69cba, 6, 3, 0x312c362c3433, 0, 1, 0, '2010-03-29 17:57:20', '2010-03-29 17:57:20');
INSERT INTO `lcn_product_cat` VALUES (44, 0xe58780e6b0b4e8aebee5a487, 6, 3, 0x312c362c3434, 0, 1, 0, '2010-03-29 17:57:36', '2010-03-29 17:57:36');
INSERT INTO `lcn_product_cat` VALUES (45, 0xe58780e58c96e599a8, 6, 3, 0x312c362c3435, 0, 1, 0, '2010-03-29 17:57:41', '2010-03-29 17:57:41');
INSERT INTO `lcn_product_cat` VALUES (46, 0xe590b8e5b098e599a8, 6, 3, 0x312c362c3436, 0, 1, 0, '2010-03-29 17:57:57', '2010-03-29 17:57:57');
INSERT INTO `lcn_product_cat` VALUES (47, 0xe6b885e6b481e69cba, 6, 3, 0x312c362c3437, 0, 1, 0, '2010-03-29 17:58:03', '2010-03-29 17:58:03');
INSERT INTO `lcn_product_cat` VALUES (48, 0xe6b5b4e99cb8, 6, 3, 0x312c362c3438, 0, 1, 0, '2010-03-29 17:58:14', '2010-03-29 17:58:14');
INSERT INTO `lcn_product_cat` VALUES (49, 0xe8b6b3e6b5b4e79b86, 6, 3, 0x312c362c3439, 0, 1, 0, '2010-03-29 17:58:22', '2010-03-29 17:58:22');
INSERT INTO `lcn_product_cat` VALUES (50, 0xe58aa0e6b9bfe599a8, 6, 3, 0x312c362c3530, 0, 1, 0, '2010-03-29 17:58:47', '2010-03-29 17:58:47');
INSERT INTO `lcn_product_cat` VALUES (51, 0xe58f96e69a96e794b5e599a8, 6, 3, 0x312c362c3531, 0, 1, 0, '2010-03-29 18:00:56', '2010-03-29 18:00:56');
INSERT INTO `lcn_product_cat` VALUES (52, 0xe794b5e8af9de69cba, 6, 3, 0x312c362c3532, 0, 1, 0, '2010-03-29 18:01:09', '2010-03-29 18:01:34');
INSERT INTO `lcn_product_cat` VALUES (53, 0xe794b5e786a8e69697, 6, 3, 0x312c362c3533, 0, 1, 0, '2010-03-29 18:01:48', '2010-03-29 18:01:48');
INSERT INTO `lcn_product_cat` VALUES (54, 0xe694b62f20e5bd95e99fb3e69cba, 6, 3, 0x312c362c3534, 0, 1, 0, '2010-03-29 18:02:31', '2010-03-29 18:02:31');
INSERT INTO `lcn_product_cat` VALUES (55, 0xe794b5e6b1a0, 6, 3, 0x312c362c3535, 0, 1, 0, '2010-03-29 18:02:40', '2010-03-29 18:02:40');
INSERT INTO `lcn_product_cat` VALUES (56, 0xe794b5e58aa8e5b7a5e585b7, 6, 3, 0x312c362c3536, 0, 1, 0, '2010-03-29 18:02:45', '2010-03-29 18:02:45');
INSERT INTO `lcn_product_cat` VALUES (57, 0xe794b5e599a8e5bc80e585b3, 6, 3, 0x312c362c3537, 0, 1, 0, '2010-03-29 18:03:25', '2010-03-29 18:03:25');
INSERT INTO `lcn_product_cat` VALUES (58, 0xe585b6e4bb96e7949fe6b4bbe794b5e599a8, 6, 3, 0x312c362c3538, 0, 1, 0, '2010-03-29 18:03:36', '2010-03-29 18:03:36');
INSERT INTO `lcn_product_cat` VALUES (59, 0xe794b5e9a5ade785b2, 7, 3, 0x312c372c3539, 0, 1, 0, '2010-03-29 18:04:03', '2010-03-29 18:04:28');
INSERT INTO `lcn_product_cat` VALUES (60, 0xe794b5e7a381e78289, 7, 3, 0x312c372c3630, 0, 1, 0, '2010-03-29 18:04:10', '2010-03-29 18:04:49');
INSERT INTO `lcn_product_cat` VALUES (61, 0xe78783e6b094e781b6, 7, 3, 0x312c372c3631, 0, 1, 0, '2010-03-29 18:05:12', '2010-03-29 18:05:12');
INSERT INTO `lcn_product_cat` VALUES (62, 0xe6b2b9e7839fe69cbae28094e781b6e585b7, 7, 3, 0x312c372c3632, 0, 1, 0, '2010-03-29 18:05:47', '2010-03-29 18:05:47');
INSERT INTO `lcn_product_cat` VALUES (63, 0xe794b5e58e8be58a9be99485, 7, 3, 0x312c372c3633, 0, 1, 0, '2010-03-29 18:06:05', '2010-03-29 18:06:05');
INSERT INTO `lcn_product_cat` VALUES (64, 0xe794b5e9a5bce9939b, 7, 3, 0x312c372c3634, 0, 1, 0, '2010-03-29 18:06:24', '2010-03-29 18:06:24');
INSERT INTO `lcn_product_cat` VALUES (65, 0xe6a6a8e6b1812fe69085e68b8ce69cba, 7, 3, 0x312c372c3635, 0, 1, 0, '2010-03-29 18:06:45', '2010-03-29 18:06:45');
INSERT INTO `lcn_product_cat` VALUES (66, 0xe8b186e6b586e69cba, 7, 3, 0x312c372c3636, 0, 1, 0, '2010-03-29 18:08:31', '2010-03-29 18:08:31');
INSERT INTO `lcn_product_cat` VALUES (67, 0xe794b5e6b0b4e5a3b6, 7, 3, 0x312c372c3637, 0, 1, 0, '2010-03-29 18:08:50', '2010-03-29 18:08:50');
INSERT INTO `lcn_product_cat` VALUES (68, 0xe59296e595a1e69cba, 7, 3, 0x312c372c3638, 0, 1, 0, '2010-03-29 18:08:55', '2010-03-29 18:08:55');
INSERT INTO `lcn_product_cat` VALUES (69, 0xe5beaee6b3a2e78289, 7, 3, 0x312c372c3639, 0, 1, 0, '2010-03-29 18:09:05', '2010-03-29 18:09:05');
INSERT INTO `lcn_product_cat` VALUES (70, 0xe794b5e783a4e7aeb1, 7, 3, 0x312c372c3730, 0, 1, 0, '2010-03-29 18:09:09', '2010-03-29 18:09:09');
INSERT INTO `lcn_product_cat` VALUES (71, 0xe5a49ae794a8e98094e99485, 7, 3, 0x312c372c3731, 0, 1, 0, '2010-03-29 18:09:48', '2010-03-29 18:09:48');
INSERT INTO `lcn_product_cat` VALUES (72, 0xe6b688e6af92e69f9c, 7, 3, 0x312c372c3732, 0, 1, 0, '2010-03-29 18:09:53', '2010-03-29 18:09:53');
INSERT INTO `lcn_product_cat` VALUES (73, 0xe6b497e7a297e69cba, 7, 3, 0x312c372c3733, 0, 1, 0, '2010-03-29 18:10:03', '2010-03-29 18:10:03');
INSERT INTO `lcn_product_cat` VALUES (74, 0xe99da2e58c85e69cba, 7, 3, 0x312c372c3734, 0, 1, 0, '2010-03-29 18:11:06', '2010-03-29 18:11:06');
INSERT INTO `lcn_product_cat` VALUES (75, 0xe69e9ce6a091e8a7a3e6af92e599a8, 7, 3, 0x312c372c3735, 0, 1, 0, '2010-03-29 18:11:44', '2010-03-29 18:11:44');
INSERT INTO `lcn_product_cat` VALUES (76, 0xe785aee89b8be599a8, 7, 3, 0x312c372c3736, 0, 1, 0, '2010-03-29 18:11:53', '2010-03-29 18:11:53');
INSERT INTO `lcn_product_cat` VALUES (77, 0xe985b8e5a5b6e69cba, 7, 3, 0x312c372c3737, 0, 1, 0, '2010-03-29 18:12:08', '2010-03-29 18:12:08');
INSERT INTO `lcn_product_cat` VALUES (78, 0xe585b6e4bb96e58ea8e688bfe794b5e599a8, 7, 3, 0x312c372c3738, 0, 1, 0, '2010-03-29 18:12:14', '2010-03-29 18:12:14');
INSERT INTO `lcn_product_cat` VALUES (79, 0xe58983e9a1bbe58880, 8, 3, 0x312c382c3739, 0, 1, 0, '2010-03-29 18:14:34', '2010-03-29 18:14:58');
INSERT INTO `lcn_product_cat` VALUES (80, 0xe794b5e590b9e9a38e, 8, 3, 0x312c382c3830, 0, 1, 0, '2010-03-29 18:15:13', '2010-03-29 18:15:13');
INSERT INTO `lcn_product_cat` VALUES (81, 0xe8a180e58e8be8aea1, 8, 3, 0x312c382c3831, 0, 1, 0, '2010-03-29 18:15:21', '2010-03-29 18:15:21');
INSERT INTO `lcn_product_cat` VALUES (82, 0xe68c89e691a9e599a8, 8, 3, 0x312c382c3832, 0, 1, 0, '2010-03-29 18:15:28', '2010-03-29 18:15:28');
INSERT INTO `lcn_product_cat` VALUES (83, 0xe794b5e58aa8e78999e588b7, 8, 3, 0x312c382c3833, 0, 1, 0, '2010-03-29 18:15:40', '2010-03-29 18:15:40');
INSERT INTO `lcn_product_cat` VALUES (84, 0xe589832fe884b1e6af9be599a8, 8, 3, 0x312c382c3834, 0, 1, 0, '2010-03-29 18:16:03', '2010-03-29 18:16:03');
INSERT INTO `lcn_product_cat` VALUES (85, 0xe7be8ee5aeb9e7be8ee58f91e599a8, 8, 3, 0x312c382c3835, 0, 1, 0, '2010-03-29 18:16:17', '2010-03-29 18:16:17');
INSERT INTO `lcn_product_cat` VALUES (86, 0xe581a5e5bab7e794b5e599a8, 8, 3, 0x312c382c3836, 0, 1, 0, '2010-03-29 18:16:27', '2010-03-29 18:16:27');
INSERT INTO `lcn_product_cat` VALUES (87, 0xe585b6e4bb96e68aa4e79086e794b5e599a8, 8, 3, 0x312c382c3837, 0, 1, 0, '2010-03-29 18:16:53', '2010-03-29 18:16:53');
INSERT INTO `lcn_product_cat` VALUES (88, 0x475053e5afbce888aa, 9, 3, 0x312c392c3838, 0, 1, 0, '2010-03-29 18:17:14', '2010-03-29 18:17:36');
INSERT INTO `lcn_product_cat` VALUES (89, 0xe6b1bde8bda6e68aa4e79086, 9, 3, 0x312c392c3839, 0, 1, 0, '2010-03-29 18:17:50', '2010-03-29 18:17:50');
INSERT INTO `lcn_product_cat` VALUES (90, 0xe8bda6e58685e9a5b0e59381, 9, 3, 0x312c392c3930, 0, 1, 0, '2010-03-29 18:18:01', '2010-03-29 18:18:01');
INSERT INTO `lcn_product_cat` VALUES (91, 0xe8bda6e8bdbde794b5e6ba90, 9, 3, 0x312c392c3931, 0, 1, 0, '2010-03-29 18:18:09', '2010-03-29 18:18:09');
INSERT INTO `lcn_product_cat` VALUES (92, 0xe8bda6e8bdbde68c89e691a9e599a8, 9, 3, 0x312c392c3932, 0, 1, 0, '2010-03-29 18:18:32', '2010-03-29 18:18:32');
INSERT INTO `lcn_product_cat` VALUES (93, 0xe586b7e69a96e7aeb1, 9, 3, 0x312c392c3933, 0, 1, 0, '2010-03-29 18:18:40', '2010-03-29 18:18:40');
INSERT INTO `lcn_product_cat` VALUES (94, 0xe8bda6e8bdbde590b8e5b098e599a8, 9, 3, 0x312c392c3934, 0, 1, 0, '2010-03-29 18:18:52', '2010-03-29 18:18:52');
INSERT INTO `lcn_product_cat` VALUES (95, 0xe58585e6b094e6b3b5, 9, 3, 0x312c392c3935, 0, 1, 0, '2010-03-29 18:19:00', '2010-03-29 18:19:00');
INSERT INTO `lcn_product_cat` VALUES (96, 0xe8bda6e8bdbde99fb3e8a786, 9, 3, 0x312c392c3936, 0, 1, 0, '2010-03-29 18:19:23', '2010-03-29 18:19:23');
INSERT INTO `lcn_product_cat` VALUES (97, 0xe585b6e4bb96e8bda6e8bdbde794a8e59381, 9, 3, 0x312c392c3937, 0, 1, 0, '2010-03-29 18:19:30', '2010-03-29 18:19:30');
INSERT INTO `lcn_product_cat` VALUES (99, 0xe5afb9e8aeb2e69cba, 10, 3, 0x322c31302c3939, 0, 1, 0, '2010-03-29 18:21:28', '2010-03-29 18:21:51');
INSERT INTO `lcn_product_cat` VALUES (100, 0x43444d41e6898be69cba, 10, 3, 0x322c31302c313030, 0, 1, 0, '2010-03-29 18:23:00', '2010-03-29 18:23:00');
INSERT INTO `lcn_product_cat` VALUES (101, 0xe58f8ce6a8a1e6898be69cba, 10, 3, 0x322c31302c313031, 0, 1, 0, '2010-03-29 18:23:06', '2010-03-29 18:23:06');
INSERT INTO `lcn_product_cat` VALUES (102, 0x3347e6898be69cba, 10, 3, 0x322c31302c313032, 0, 1, 0, '2010-03-29 18:23:16', '2010-03-29 18:23:16');
INSERT INTO `lcn_product_cat` VALUES (103, 0xe58f8ce58da1e6898be69cba, 10, 3, 0x322c31302c313033, 0, 1, 0, '2010-03-29 18:23:21', '2010-03-29 18:23:21');
INSERT INTO `lcn_product_cat` VALUES (104, 0xe88081e4babae6898be69cba, 10, 3, 0x322c31302c313034, 0, 1, 0, '2010-03-29 18:23:37', '2010-03-29 18:23:37');
INSERT INTO `lcn_product_cat` VALUES (105, 0xe98089e5a5bde585a5e7bd91, 10, 3, 0x322c31302c313035, 0, 1, 0, '2010-03-29 18:23:43', '2010-03-29 18:23:43');
INSERT INTO `lcn_product_cat` VALUES (107, 0xe8939de78999e880b3e69cba, 11, 3, 0x322c31312c313037, 0, 1, 0, '2010-03-29 18:24:29', '2010-03-29 18:26:17');
INSERT INTO `lcn_product_cat` VALUES (108, 0xe6898be69cbae880b3e69cba, 11, 3, 0x322c31312c313038, 0, 1, 0, '2010-03-29 18:24:44', '2010-03-29 18:26:51');
INSERT INTO `lcn_product_cat` VALUES (109, 0xe6898be69cbae58585e794b5e599a8, 11, 3, 0x322c31312c313039, 0, 1, 0, '2010-03-29 18:24:49', '2010-03-29 18:27:19');
INSERT INTO `lcn_product_cat` VALUES (110, 0xe6898be69cbae5ad98e582a8e58da1, 11, 3, 0x322c31312c313130, 0, 1, 0, '2010-03-29 18:25:17', '2010-03-29 18:27:35');
INSERT INTO `lcn_product_cat` VALUES (111, 0xe8bda6e8bdbde9858de4bbb6, 11, 3, 0x322c31312c313131, 0, 1, 0, '2010-03-29 18:25:22', '2010-03-29 18:28:03');
INSERT INTO `lcn_product_cat` VALUES (112, 0xe695b0e68daee9858de4bbb6, 11, 3, 0x322c31312c313132, 0, 1, 0, '2010-03-29 18:28:52', '2010-03-29 18:28:52');
INSERT INTO `lcn_product_cat` VALUES (113, 0xe6898be69cbae4bf9de68aa4e5a597, 11, 3, 0x322c31312c313133, 0, 1, 0, '2010-03-29 18:28:58', '2010-03-29 18:28:58');
INSERT INTO `lcn_product_cat` VALUES (114, 0xe6898be69cbae8b4b4e8869c, 11, 3, 0x322c31312c313134, 0, 1, 0, '2010-03-29 18:29:22', '2010-03-29 18:29:22');
INSERT INTO `lcn_product_cat` VALUES (115, 0xe585b6e4bb96e4bf9de68aa4e5a597, 11, 3, 0x322c31312c313135, 0, 1, 0, '2010-03-29 18:29:27', '2010-03-29 18:29:27');
INSERT INTO `lcn_product_cat` VALUES (117, 0xe58d95e58f8de79bb8e69cba, 12, 3, 0x322c31322c313137, 0, 1, 0, '2010-03-29 18:30:04', '2010-03-29 18:31:32');
INSERT INTO `lcn_product_cat` VALUES (118, 0xe695b0e7a081e69184e5838fe69cba, 12, 3, 0x322c31322c313138, 0, 1, 0, '2010-03-29 18:30:20', '2010-03-29 18:32:24');
INSERT INTO `lcn_product_cat` VALUES (119, 0xe58d95e58f8de9959ce5a4b4, 12, 3, 0x322c31322c313139, 0, 1, 0, '2010-03-29 18:30:28', '2010-03-29 18:32:10');
INSERT INTO `lcn_product_cat` VALUES (120, 0xe9959ce5a4b4e6bba4e9959c, 12, 3, 0x322c31322c313230, 0, 1, 0, '2010-03-29 18:33:12', '2010-03-29 18:33:56');
INSERT INTO `lcn_product_cat` VALUES (121, 0xe997aae58589e781af2fe6898be69f84, 12, 3, 0x322c31322c313231, 0, 1, 0, '2010-03-29 18:34:46', '2010-03-29 18:34:46');
INSERT INTO `lcn_product_cat` VALUES (122, 0xe69184e5bdb1e9858de4bbb6, 12, 3, 0x322c31322c313232, 0, 1, 0, '2010-03-29 18:34:59', '2010-03-29 18:34:59');
INSERT INTO `lcn_product_cat` VALUES (124, 0xe794b5e6b1a02fe58585e794b5e599a8, 13, 3, 0x322c31332c313234, 0, 1, 0, '2010-03-29 18:36:22', '2010-03-29 18:36:22');
INSERT INTO `lcn_product_cat` VALUES (125, 0xe7a7bbe58aa8e794b5e6ba90, 13, 3, 0x322c31332c313235, 0, 1, 0, '2010-03-29 18:37:57', '2010-03-29 18:37:57');
INSERT INTO `lcn_product_cat` VALUES (126, 0xe8afbbe58da1e599a8, 13, 3, 0x322c31332c313236, 0, 1, 0, '2010-03-29 18:38:43', '2010-03-29 18:38:43');
INSERT INTO `lcn_product_cat` VALUES (127, 0xe695b0e7a081e58c85, 13, 3, 0x322c31332c313237, 0, 1, 0, '2010-03-29 18:39:01', '2010-03-29 18:39:01');
INSERT INTO `lcn_product_cat` VALUES (128, 0xe4b889e8a792e69eb62fe4ba91e58fb0, 13, 3, 0x322c31332c313238, 0, 1, 0, '2010-03-29 18:39:12', '2010-03-29 18:39:12');
INSERT INTO `lcn_product_cat` VALUES (129, 0xe5bd95e5838fe5b8a6, 13, 3, 0x322c31332c313239, 0, 1, 0, '2010-03-29 18:39:33', '2010-03-29 18:39:33');
INSERT INTO `lcn_product_cat` VALUES (130, 0xe695b0e7a081e8b4b4e8869c, 13, 3, 0x322c31332c313330, 0, 1, 0, '2010-03-29 18:39:41', '2010-03-29 18:39:41');
INSERT INTO `lcn_product_cat` VALUES (131, 0xe6b885e6b481e794a8e599a8, 13, 3, 0x322c31332c313331, 0, 1, 0, '2010-03-29 18:40:05', '2010-03-29 18:40:05');
INSERT INTO `lcn_product_cat` VALUES (132, 0x4d50332f4d5034e9858de4bbb6, 13, 3, 0x322c31332c313332, 0, 1, 0, '2010-03-29 18:40:21', '2010-03-29 18:40:21');
INSERT INTO `lcn_product_cat` VALUES (133, 0xe785a7e78987e68993e58db0e69cba, 13, 3, 0x322c31332c313333, 0, 1, 0, '2010-03-29 18:40:30', '2010-03-29 18:40:30');
INSERT INTO `lcn_product_cat` VALUES (135, 0xe88bb9e69e9ce9858de4bbb6, 14, 3, 0x322c31342c313335, 0, 1, 0, '2010-03-29 18:41:54', '2010-03-29 18:41:54');
INSERT INTO `lcn_product_cat` VALUES (136, 0xe99fb3e7aeb1, 14, 3, 0x322c31342c313336, 0, 1, 0, '2010-03-29 18:42:13', '2010-03-29 18:42:13');
INSERT INTO `lcn_product_cat` VALUES (137, 0xe880b3e69cba, 14, 3, 0x322c31342c313337, 0, 1, 0, '2010-03-29 18:42:19', '2010-03-29 18:42:19');
INSERT INTO `lcn_product_cat` VALUES (138, 0xe794b5e5ad90e8af8de585b8, 14, 3, 0x322c31342c313338, 0, 1, 0, '2010-03-29 18:42:56', '2010-03-29 18:42:56');
INSERT INTO `lcn_product_cat` VALUES (139, 0xe794b5e5ad90e69599e882b2, 14, 3, 0x322c31342c313339, 0, 1, 0, '2010-03-29 18:43:03', '2010-03-29 18:43:03');
INSERT INTO `lcn_product_cat` VALUES (140, 0xe5bd95e99fb3e7ac94, 14, 3, 0x322c31342c313430, 0, 1, 0, '2010-03-29 18:43:15', '2010-03-29 18:43:15');
INSERT INTO `lcn_product_cat` VALUES (141, 0x504441, 14, 3, 0x322c31342c313431, 0, 1, 0, '2010-03-29 18:43:21', '2010-03-29 18:43:21');
INSERT INTO `lcn_product_cat` VALUES (142, 0xe695b0e7a081e79bb8e6a186, 14, 3, 0x322c31342c313432, 0, 1, 0, '2010-03-29 18:43:34', '2010-03-29 18:43:34');
INSERT INTO `lcn_product_cat` VALUES (143, 0xe9baa6e5858be9a38e, 14, 3, 0x322c31342c313433, 0, 1, 0, '2010-03-29 18:43:41', '2010-03-29 18:43:41');
INSERT INTO `lcn_product_cat` VALUES (144, 0xe9ab98e6b885e692ade694bee599a8, 14, 3, 0x322c31342c313434, 0, 1, 0, '2010-03-29 18:44:08', '2010-03-29 18:44:08');
INSERT INTO `lcn_product_cat` VALUES (145, 0xe4b893e4b89ae99fb3e9a291, 14, 3, 0x322c31342c313435, 0, 1, 0, '2010-03-29 18:44:17', '2010-03-29 18:44:17');
INSERT INTO `lcn_product_cat` VALUES (146, 0xe5a8b1e4b990e8aebee5a487, 14, 3, 0x322c31342c313436, 0, 1, 0, '2010-03-29 18:44:30', '2010-03-29 18:44:30');
INSERT INTO `lcn_product_cat` VALUES (147, 0xe695b0e5ad97e794b5e8a786, 14, 3, 0x322c31342c313437, 0, 1, 0, '2010-03-29 18:44:36', '2010-03-29 18:44:36');
INSERT INTO `lcn_product_cat` VALUES (148, 0xe794b5e7bab8e4b9a6, 14, 3, 0x322c31342c313438, 0, 1, 0, '2010-03-29 18:44:52', '2010-03-29 18:44:52');
INSERT INTO `lcn_product_cat` VALUES (150, 0xe4b88ae7bd91e69cac, 15, 3, 0x332c31352c313530, 0, 1, 0, '2010-03-30 02:04:35', '2010-03-30 02:04:35');
INSERT INTO `lcn_product_cat` VALUES (151, 0xe58fb0e5bc8fe69cba, 15, 3, 0x332c31352c313531, 0, 1, 0, '2010-03-30 02:04:42', '2010-03-30 02:04:42');
INSERT INTO `lcn_product_cat` VALUES (152, 0xe69c8de58aa1e599a8, 15, 3, 0x332c31352c313532, 0, 1, 0, '2010-03-30 02:04:46', '2010-03-30 02:04:46');
INSERT INTO `lcn_product_cat` VALUES (153, 0xe7ac94e8aeb0e69cace9858de4bbb6, 15, 3, 0x332c31352c313533, 0, 1, 0, '2010-03-30 02:05:01', '2010-03-30 02:05:01');
INSERT INTO `lcn_product_cat` VALUES (155, 0xe7a1ace79b98, 16, 3, 0x332c31362c313535, 0, 1, 0, '2010-03-30 02:05:26', '2010-03-30 02:05:26');
INSERT INTO `lcn_product_cat` VALUES (156, 0xe58685e5ad98, 16, 3, 0x332c31362c313536, 0, 1, 0, '2010-03-30 02:05:33', '2010-03-30 02:05:33');
INSERT INTO `lcn_product_cat` VALUES (157, 0xe698bee58da1, 16, 3, 0x332c31362c313537, 0, 1, 0, '2010-03-30 02:05:37', '2010-03-30 02:05:37');
INSERT INTO `lcn_product_cat` VALUES (158, 0xe4b8bbe69dbf, 16, 3, 0x332c31362c313538, 0, 1, 0, '2010-03-30 02:05:46', '2010-03-30 02:05:46');
INSERT INTO `lcn_product_cat` VALUES (159, 0xe695a3e783ade599a8, 16, 3, 0x332c31362c313539, 0, 1, 0, '2010-03-30 02:05:53', '2010-03-30 02:05:53');
INSERT INTO `lcn_product_cat` VALUES (160, 0xe588bbe5bd95e69cba2fe58589e9a9b1, 16, 3, 0x332c31362c313630, 0, 1, 0, '2010-03-30 02:06:05', '2010-03-30 02:06:05');
INSERT INTO `lcn_product_cat` VALUES (161, 0xe5a3b0e58da12fe689a9e5b195e58da1, 16, 3, 0x332c31362c313631, 0, 1, 0, '2010-03-30 02:06:17', '2010-03-30 02:06:17');
INSERT INTO `lcn_product_cat` VALUES (163, 0xe9bca0e6a087, 17, 3, 0x332c31372c313633, 0, 1, 0, '2010-03-30 02:06:39', '2010-03-30 02:06:39');
INSERT INTO `lcn_product_cat` VALUES (164, 0xe69cbae7aeb1, 17, 3, 0x332c31372c313634, 0, 1, 0, '2010-03-30 02:06:50', '2010-03-30 02:06:50');
INSERT INTO `lcn_product_cat` VALUES (165, 0xe994aee79b98, 17, 3, 0x332c31372c313635, 0, 1, 0, '2010-03-30 02:06:56', '2010-03-30 02:06:56');
INSERT INTO `lcn_product_cat` VALUES (166, 0xe794b5e6ba90, 17, 3, 0x332c31372c313636, 0, 1, 0, '2010-03-30 02:07:05', '2010-03-30 02:07:05');
INSERT INTO `lcn_product_cat` VALUES (167, 0xe7a7bbe58aa8e7a1ace79b98, 17, 3, 0x332c31372c313637, 0, 1, 0, '2010-03-30 02:07:12', '2010-03-30 02:07:12');
INSERT INTO `lcn_product_cat` VALUES (168, 0xe997aae5ad98e79b98, 17, 3, 0x332c31372c313638, 0, 1, 0, '2010-03-30 02:07:30', '2010-03-30 02:07:30');
INSERT INTO `lcn_product_cat` VALUES (169, 0xe69184e5838fe5a4b4, 17, 3, 0x332c31372c313639, 0, 1, 0, '2010-03-30 02:07:57', '2010-03-30 02:07:57');
INSERT INTO `lcn_product_cat` VALUES (170, 0xe5a496e7bdaee79b92, 17, 3, 0x332c31372c313730, 0, 1, 0, '2010-03-30 02:08:04', '2010-03-30 02:08:04');
INSERT INTO `lcn_product_cat` VALUES (171, 0xe6b8b8e6888fe8aebee5a487, 17, 3, 0x332c31372c313731, 0, 1, 0, '2010-03-30 02:08:08', '2010-03-30 02:08:08');
INSERT INTO `lcn_product_cat` VALUES (172, 0xe794b5e8a786e79b92, 17, 3, 0x332c31372c313732, 0, 1, 0, '2010-03-30 02:08:24', '2010-03-30 02:08:24');
INSERT INTO `lcn_product_cat` VALUES (173, 0xe6898be58699e69dbf, 17, 3, 0x332c31372c313733, 0, 1, 0, '2010-03-30 02:08:32', '2010-03-30 02:08:32');
INSERT INTO `lcn_product_cat` VALUES (174, 0xe9bca0e6a087e59eab, 17, 3, 0x332c31372c313734, 0, 1, 0, '2010-03-30 02:08:44', '2010-03-30 02:08:44');
INSERT INTO `lcn_product_cat` VALUES (175, 0xe68f92e5baa7, 17, 3, 0x332c31372c313735, 0, 1, 0, '2010-03-30 02:08:48', '2010-03-30 02:08:48');
INSERT INTO `lcn_product_cat` VALUES (176, 0x555053e794b5e6ba90, 17, 3, 0x332c31372c313736, 0, 1, 0, '2010-03-30 02:09:04', '2010-03-30 02:09:04');
INSERT INTO `lcn_product_cat` VALUES (177, 0xe7babfe7bc86, 17, 3, 0x332c31372c313737, 0, 1, 0, '2010-03-30 02:09:10', '2010-03-30 02:09:10');
INSERT INTO `lcn_product_cat` VALUES (178, 0xe794b5e88491e5b7a5e585b7, 17, 3, 0x332c31372c313738, 0, 1, 0, '2010-03-30 02:09:38', '2010-03-30 02:09:38');
INSERT INTO `lcn_product_cat` VALUES (179, 0xe794b5e88491e6b885e6b481, 17, 3, 0x332c31372c313739, 0, 1, 0, '2010-03-30 02:09:43', '2010-03-30 02:09:43');
INSERT INTO `lcn_product_cat` VALUES (180, 0xe58a9ee585ace8aebee5a487, 3, 2, 0x332c313830, 0, 0, 0, '2010-03-30 02:09:54', '2010-03-30 02:11:29');
INSERT INTO `lcn_product_cat` VALUES (181, 0xe68993e58db0e69cba, 180, 3, 0x332c3138302c313831, 0, 1, 0, '2010-03-30 02:10:03', '2010-03-30 02:11:57');
INSERT INTO `lcn_product_cat` VALUES (182, 0xe4b880e4bd93e69cba, 180, 3, 0x332c3138302c313832, 0, 1, 0, '2010-03-30 02:10:07', '2010-03-30 02:12:20');
INSERT INTO `lcn_product_cat` VALUES (183, 0xe68a95e5bdb1e69cba, 180, 3, 0x332c3138302c313833, 0, 1, 0, '2010-03-30 02:12:37', '2010-03-30 02:12:37');
INSERT INTO `lcn_product_cat` VALUES (184, 0xe4bca0e79c9fe69cba, 180, 3, 0x332c3138302c313834, 0, 1, 0, '2010-03-30 02:12:41', '2010-03-30 02:12:41');
INSERT INTO `lcn_product_cat` VALUES (185, 0xe5a48de58db0e69cba, 180, 3, 0x332c3138302c313835, 0, 1, 0, '2010-03-30 02:12:56', '2010-03-30 02:12:56');
INSERT INTO `lcn_product_cat` VALUES (186, 0xe689abe68f8fe4bbaa, 180, 3, 0x332c3138302c313836, 0, 1, 0, '2010-03-30 02:13:04', '2010-03-30 02:13:04');
INSERT INTO `lcn_product_cat` VALUES (187, 0xe7a28ee7bab8e69cba, 180, 3, 0x332c3138302c313837, 0, 1, 0, '2010-03-30 02:13:48', '2010-03-30 02:13:48');
INSERT INTO `lcn_product_cat` VALUES (188, 0xe88083e58ba4e69cba, 180, 3, 0x332c3138302c313838, 0, 1, 0, '2010-03-30 02:13:52', '2010-03-30 02:13:52');
INSERT INTO `lcn_product_cat` VALUES (189, 0xe9aa8ce9929ee69cba, 180, 3, 0x332c3138302c313839, 0, 1, 0, '2010-03-30 02:14:03', '2010-03-30 02:14:03');
INSERT INTO `lcn_product_cat` VALUES (190, 0xe5a191e5b081e69cba, 180, 3, 0x332c3138302c313930, 0, 1, 0, '2010-03-30 02:14:13', '2010-03-30 02:14:13');
INSERT INTO `lcn_product_cat` VALUES (191, 0xe794b5e5ad90e799bde69dbf, 180, 3, 0x332c3138302c313931, 0, 1, 0, '2010-03-30 02:14:28', '2010-03-30 02:14:28');
INSERT INTO `lcn_product_cat` VALUES (192, 0xe8aea1e7ae97e599a8, 180, 3, 0x332c3138302c313932, 0, 1, 0, '2010-03-30 02:14:33', '2010-03-30 02:14:33');
INSERT INTO `lcn_product_cat` VALUES (194, 0xe7bd91e58da1, 18, 3, 0x332c31382c313934, 0, 1, 0, '2010-03-30 02:15:00', '2010-03-30 02:15:00');
INSERT INTO `lcn_product_cat` VALUES (195, 0xe4baa4e68da2e69cba, 18, 3, 0x332c31382c313935, 0, 1, 0, '2010-03-30 02:15:05', '2010-03-30 02:15:05');
INSERT INTO `lcn_product_cat` VALUES (196, 0xe7bd91e7bb9ce5ad98e582a8, 18, 3, 0x332c31382c313936, 0, 1, 0, '2010-03-30 02:15:24', '2010-03-30 02:15:24');
INSERT INTO `lcn_product_cat` VALUES (197, 0x3347e697a0e7babfe7bd91e7bb9c, 18, 3, 0x332c31382c313937, 0, 1, 0, '2010-03-30 02:15:36', '2010-03-30 02:15:36');
INSERT INTO `lcn_product_cat` VALUES (199, 0xe7b3bbe7bb9fe8bdafe4bbb6, 19, 3, 0x332c31392c313939, 0, 1, 0, '2010-03-30 02:16:08', '2010-03-30 02:16:08');
INSERT INTO `lcn_product_cat` VALUES (200, 0xe69d80e6af92e8bdafe4bbb6, 19, 3, 0x332c31392c323030, 0, 1, 0, '2010-03-30 02:16:18', '2010-03-30 02:16:18');
INSERT INTO `lcn_product_cat` VALUES (201, 0xe6b8b8e6888fe8bdafe4bbb6, 19, 3, 0x332c31392c323031, 0, 1, 0, '2010-03-30 02:16:24', '2010-03-30 02:16:24');
INSERT INTO `lcn_product_cat` VALUES (202, 0xe58a9ee585ace8bdafe4bbb6, 19, 3, 0x332c31392c323032, 0, 1, 0, '2010-03-30 02:16:43', '2010-03-30 02:16:43');
INSERT INTO `lcn_product_cat` VALUES (203, 0xe69599e882b2e8bdafe4bbb6, 19, 3, 0x332c31392c323033, 0, 1, 0, '2010-03-30 02:16:49', '2010-03-30 02:16:49');
INSERT INTO `lcn_product_cat` VALUES (204, 0xe5b7a5e585b7e8bdafe4bbb6, 19, 3, 0x332c31392c323034, 0, 1, 0, '2010-03-30 02:17:07', '2010-03-30 02:17:07');
INSERT INTO `lcn_product_cat` VALUES (205, 0xe5a2a8e79b92, 20, 3, 0x332c32302c323035, 0, 1, 0, '2010-03-30 02:17:23', '2010-03-30 02:18:18');
INSERT INTO `lcn_product_cat` VALUES (206, 0xe588bbe5bd95e7a29fe78987, 20, 3, 0x332c32302c323036, 0, 1, 0, '2010-03-30 02:17:28', '2010-03-30 02:18:00');
INSERT INTO `lcn_product_cat` VALUES (208, 0xe5a2a8e7b289, 20, 3, 0x332c32302c323038, 0, 1, 0, '2010-03-30 02:18:48', '2010-03-30 02:18:48');
INSERT INTO `lcn_product_cat` VALUES (209, 0xe889b2e5b8a6, 20, 3, 0x332c32302c323039, 0, 1, 0, '2010-03-30 02:18:53', '2010-03-30 02:18:53');
INSERT INTO `lcn_product_cat` VALUES (210, 0xe58589e79b98e99984e4bbb6, 20, 3, 0x332c32302c323130, 0, 1, 0, '2010-03-30 02:19:06', '2010-03-30 02:19:06');
INSERT INTO `lcn_product_cat` VALUES (211, 0xe7bab8e7b1bb, 20, 3, 0x332c32302c323131, 0, 1, 0, '2010-03-30 02:19:25', '2010-03-30 02:19:25');
INSERT INTO `lcn_product_cat` VALUES (213, 0xe59b9be5ada3e8838ce5bf83, 21, 3, 0x342c32312c323133, 0, 1, 0, '2010-03-30 02:20:25', '2010-03-30 02:20:25');
INSERT INTO `lcn_product_cat` VALUES (214, 0xe5ba8ae58d95e8a2abe7bda9, 21, 3, 0x342c32312c323134, 0, 1, 0, '2010-03-30 02:20:43', '2010-03-30 02:20:43');
INSERT INTO `lcn_product_cat` VALUES (215, 0xe5ba8ae59381e58d95e4bbb6, 21, 3, 0x342c32312c323135, 0, 1, 0, '2010-03-30 02:20:51', '2010-03-30 02:20:51');
INSERT INTO `lcn_product_cat` VALUES (216, 0xe88892e98082e69e95e88aaf, 21, 3, 0x342c32312c323136, 0, 1, 0, '2010-03-30 02:21:06', '2010-03-30 02:21:06');
INSERT INTO `lcn_product_cat` VALUES (217, 0xe89a8ae5b890e58789e5b8ad, 21, 3, 0x342c32312c323137, 0, 1, 0, '2010-03-30 02:21:19', '2010-03-30 02:21:19');
INSERT INTO `lcn_product_cat` VALUES (218, 0xe6af9be5b7bee5aeb6e7baba, 21, 3, 0x342c32312c323138, 0, 1, 0, '2010-03-30 02:21:40', '2010-03-30 02:21:40');
INSERT INTO `lcn_product_cat` VALUES (219, 0xe584bfe7aba5e5aeb6e5b185, 21, 3, 0x342c32312c323139, 0, 1, 0, '2010-03-30 02:23:04', '2010-03-30 02:23:04');
INSERT INTO `lcn_product_cat` VALUES (220, 0xe5ae9ee794a8e5aeb6e585b7, 21, 3, 0x342c32312c323230, 0, 1, 0, '2010-03-30 02:23:47', '2010-03-30 02:23:47');
INSERT INTO `lcn_product_cat` VALUES (221, 0xe785a7e6988ee781afe585b7, 21, 3, 0x342c32312c323231, 0, 1, 0, '2010-03-30 02:24:14', '2010-03-30 02:24:14');
INSERT INTO `lcn_product_cat` VALUES (222, 0xe694b6e7bab3e7a9bae997b4, 21, 3, 0x342c32312c323232, 0, 1, 0, '2010-03-30 02:24:26', '2010-03-30 02:24:26');
INSERT INTO `lcn_product_cat` VALUES (223, 0xe697b6e5b09ae5aeb6e9a5b0, 21, 3, 0x342c32312c323233, 0, 1, 0, '2010-03-30 02:24:34', '2010-03-30 02:32:46');
INSERT INTO `lcn_product_cat` VALUES (224, 0xe99ba8e4bc9ee99ba8e585b7, 21, 3, 0x342c32312c323234, 0, 1, 0, '2010-03-30 02:33:28', '2010-03-30 02:33:28');
INSERT INTO `lcn_product_cat` VALUES (225, 0xe58dabe6b5b4e794a8e59381, 21, 3, 0x342c32312c323235, 0, 1, 0, '2010-03-30 02:33:35', '2010-03-30 02:33:35');
INSERT INTO `lcn_product_cat` VALUES (226, 0xe4ba94e98791e5b7a5e585b7, 21, 3, 0x342c32312c323236, 0, 1, 0, '2010-03-30 02:33:46', '2010-03-30 02:33:46');
INSERT INTO `lcn_product_cat` VALUES (227, 0xe6b885e6b481e794a8e59381, 21, 3, 0x342c32312c323237, 0, 1, 0, '2010-03-30 02:33:52', '2010-03-30 02:33:52');
INSERT INTO `lcn_product_cat` VALUES (228, 0xe999a4e591b3e4b893e5aeb6, 21, 3, 0x342c32312c323238, 0, 1, 0, '2010-03-30 02:34:06', '2010-03-30 02:34:06');
INSERT INTO `lcn_product_cat` VALUES (229, 0xe7bc9de7baabe794a8e59381, 21, 3, 0x342c32312c323239, 0, 1, 0, '2010-03-30 02:34:13', '2010-03-30 02:34:13');
INSERT INTO `lcn_product_cat` VALUES (231, 0xe5a5b3e8a385, 22, 3, 0x342c32322c323331, 0, 1, 0, '2010-03-30 02:35:01', '2010-03-30 02:35:01');
INSERT INTO `lcn_product_cat` VALUES (232, 0xe8bf90e58aa8e8a385, 22, 3, 0x342c32322c323332, 0, 1, 0, '2010-03-30 02:35:05', '2010-03-30 02:35:05');
INSERT INTO `lcn_product_cat` VALUES (233, 0xe8bf90e58aa8e99e8b, 22, 3, 0x342c32322c323333, 0, 1, 0, '2010-03-30 02:35:10', '2010-03-30 02:35:10');
INSERT INTO `lcn_product_cat` VALUES (234, 0xe885b0e5b8a6, 22, 3, 0x342c32322c323334, 0, 1, 0, '2010-03-30 02:35:28', '2010-03-30 02:35:28');
INSERT INTO `lcn_product_cat` VALUES (235, 0xe4bc91e997b2e99e8b, 22, 3, 0x342c32322c323335, 0, 1, 0, '2010-03-30 02:35:34', '2010-03-30 02:35:34');
INSERT INTO `lcn_product_cat` VALUES (236, 0xe58685e8a1a3, 22, 3, 0x342c32322c323336, 0, 1, 0, '2010-03-30 02:35:38', '2010-03-30 02:35:38');
INSERT INTO `lcn_product_cat` VALUES (237, 0xe58685e8a3a4, 22, 3, 0x342c32322c323337, 0, 1, 0, '2010-03-30 02:35:43', '2010-03-30 02:35:43');
INSERT INTO `lcn_product_cat` VALUES (238, 0xe69687e883b8, 22, 3, 0x342c32322c323338, 0, 1, 0, '2010-03-30 02:35:51', '2010-03-30 02:35:51');
INSERT INTO `lcn_product_cat` VALUES (239, 0xe8a29ce59381, 22, 3, 0x342c32322c323339, 0, 1, 0, '2010-03-30 02:35:59', '2010-03-30 02:35:59');
INSERT INTO `lcn_product_cat` VALUES (240, 0xe79cbce9959c, 22, 3, 0x342c32322c323430, 0, 1, 0, '2010-03-30 02:36:09', '2010-03-30 02:36:09');
INSERT INTO `lcn_product_cat` VALUES (241, 0xe9858de9a5b0, 22, 3, 0x342c32322c323431, 0, 1, 0, '2010-03-30 02:36:14', '2010-03-30 02:36:14');
INSERT INTO `lcn_product_cat` VALUES (242, 0xe5aeb6e5b185e69c8d, 22, 3, 0x342c32322c323432, 0, 1, 0, '2010-03-30 02:36:54', '2010-03-30 02:36:54');
INSERT INTO `lcn_product_cat` VALUES (243, 0xe998b2e8be90e5b084e69c8de9a5b0, 22, 3, 0x342c32322c323433, 0, 1, 0, '2010-03-30 02:37:05', '2010-03-30 02:37:05');
INSERT INTO `lcn_product_cat` VALUES (245, 0xe58e8be58a9be99485, 23, 3, 0x342c32332c323435, 0, 1, 0, '2010-03-30 02:38:09', '2010-03-30 02:38:09');
INSERT INTO `lcn_product_cat` VALUES (246, 0xe5a5b6e99485, 23, 3, 0x342c32332c323436, 0, 1, 0, '2010-03-30 02:38:18', '2010-03-30 02:38:18');
INSERT INTO `lcn_product_cat` VALUES (247, 0xe6b1a4e99485, 23, 3, 0x342c32332c323437, 0, 1, 0, '2010-03-30 02:38:23', '2010-03-30 02:38:23');
INSERT INTO `lcn_product_cat` VALUES (248, 0xe892b8e99485, 23, 3, 0x342c32332c323438, 0, 1, 0, '2010-03-30 02:38:37', '2010-03-30 02:38:37');
INSERT INTO `lcn_product_cat` VALUES (249, 0xe7858ee99485, 23, 3, 0x342c32332c323439, 0, 1, 0, '2010-03-30 02:38:43', '2010-03-30 02:38:43');
INSERT INTO `lcn_product_cat` VALUES (250, 0xe6b0b4e5a3b6, 23, 3, 0x342c32332c323530, 0, 1, 0, '2010-03-30 02:38:52', '2010-03-30 02:38:52');
INSERT INTO `lcn_product_cat` VALUES (251, 0xe5a597e99485, 23, 3, 0x342c32332c323531, 0, 1, 0, '2010-03-30 02:38:56', '2010-03-30 02:38:56');
INSERT INTO `lcn_product_cat` VALUES (252, 0xe6b0b4e585b7, 23, 3, 0x342c32332c323532, 0, 1, 0, '2010-03-30 02:39:11', '2010-03-30 02:39:11');
INSERT INTO `lcn_product_cat` VALUES (253, 0xe58880e585b7, 23, 3, 0x342c32332c323533, 0, 1, 0, '2010-03-30 02:39:18', '2010-03-30 02:39:18');
INSERT INTO `lcn_product_cat` VALUES (254, 0xe4b990e689a3e4bf9de9b29ce79b92, 23, 3, 0x342c32332c323534, 0, 1, 0, '2010-03-30 02:39:49', '2010-03-30 02:39:49');
INSERT INTO `lcn_product_cat` VALUES (255, 0xe4b990e689a3e4bf9de9b29ce79b92, 23, 3, 0x342c32332c323535, 0, 1, 0, '2010-03-30 02:40:29', '2010-03-30 02:40:29');
INSERT INTO `lcn_product_cat` VALUES (256, 0xe4bf9de9b29ce8869c2fe5b8a6, 23, 3, 0x342c32332c323536, 0, 1, 0, '2010-03-30 02:40:44', '2010-03-30 02:40:44');
INSERT INTO `lcn_product_cat` VALUES (257, 0xe7828ae585b72fe9a490e585b7, 23, 3, 0x342c32332c323537, 0, 1, 0, '2010-03-30 02:40:56', '2010-03-30 02:41:42');
INSERT INTO `lcn_product_cat` VALUES (258, 0xe7919ee5a3abe8a1a8e5ba97, 24, 3, 0x342c32342c323538, 0, 1, 0, '2010-03-30 02:41:02', '2010-03-30 02:42:45');
INSERT INTO `lcn_product_cat` VALUES (259, 0xe697a5e69cace8a1a8e5ba97, 24, 3, 0x342c32342c323539, 0, 1, 0, '2010-03-30 02:42:54', '2010-03-30 02:42:54');
INSERT INTO `lcn_product_cat` VALUES (260, 0xe59bbde4baa7e8a1a8e5ba97, 24, 3, 0x342c32342c323630, 0, 1, 0, '2010-03-30 02:43:04', '2010-03-30 02:43:04');
INSERT INTO `lcn_product_cat` VALUES (261, 0xe697b6e5b09ae8a1a8e5ba97, 24, 3, 0x342c32342c323631, 0, 1, 0, '2010-03-30 02:43:10', '2010-03-30 02:43:10');
INSERT INTO `lcn_product_cat` VALUES (262, 0xe997b9e9929fe68c82e9929f, 24, 3, 0x342c32342c323632, 0, 1, 0, '2010-03-30 02:43:23', '2010-03-30 02:43:23');
INSERT INTO `lcn_product_cat` VALUES (263, 0xe992bbe79fb3e9a5b0e59381, 24, 3, 0x342c32342c323633, 0, 1, 0, '2010-03-30 02:43:37', '2010-03-30 02:43:37');
INSERT INTO `lcn_product_cat` VALUES (264, 0xe9bb84e98791e99382e98791, 24, 3, 0x342c32342c323634, 0, 1, 0, '2010-03-30 02:43:57', '2010-03-30 02:43:57');
INSERT INTO `lcn_product_cat` VALUES (265, 0x4be98791e9a5b0e59381, 24, 3, 0x342c32342c323635, 0, 1, 0, '2010-03-30 02:44:10', '2010-03-30 02:44:10');
INSERT INTO `lcn_product_cat` VALUES (266, 0xe7bfa1e7bfa0e78e89e79fb3, 24, 3, 0x342c32342c323636, 0, 1, 0, '2010-03-30 02:44:25', '2010-03-30 02:44:25');
INSERT INTO `lcn_product_cat` VALUES (267, 0xe7baafe993b6e9a5b0e59381, 24, 3, 0x342c32342c323637, 0, 1, 0, '2010-03-30 02:44:36', '2010-03-30 02:44:36');
INSERT INTO `lcn_product_cat` VALUES (268, 0xe6b581e8a18ce9a5b0e59381, 24, 3, 0x342c32342c323638, 0, 1, 0, '2010-03-30 02:44:46', '2010-03-30 02:44:46');
INSERT INTO `lcn_product_cat` VALUES (270, 0xe9ab98e6a1a3e7ac94e585b7, 25, 3, 0x342c32352c323730, 0, 1, 0, '2010-03-30 02:45:30', '2010-03-30 02:45:30');
INSERT INTO `lcn_product_cat` VALUES (271, 0xe7919ee5a3abe5869be58880, 25, 3, 0x342c32352c323731, 0, 1, 0, '2010-03-30 02:45:43', '2010-03-30 02:45:43');
INSERT INTO `lcn_product_cat` VALUES (272, 0xe5b7a5e889bae4baa7e59381, 25, 3, 0x342c32352c323732, 0, 1, 0, '2010-03-30 02:45:49', '2010-03-30 02:45:49');
INSERT INTO `lcn_product_cat` VALUES (273, 0xe7a4bce59381e7a4bce588b8, 25, 3, 0x342c32352c323733, 0, 1, 0, '2010-03-30 02:46:23', '2010-03-30 02:46:23');
INSERT INTO `lcn_product_cat` VALUES (274, 0xe789b9e8aeb8e59586e59381, 25, 3, 0x342c32352c323734, 0, 1, 0, '2010-03-30 02:46:32', '2010-03-30 02:46:32');
INSERT INTO `lcn_product_cat` VALUES (275, 0xe58a9ee585ace69687e585b7, 25, 3, 0x342c32352c323735, 0, 1, 0, '2010-03-30 02:46:41', '2010-03-30 02:46:41');
INSERT INTO `lcn_product_cat` VALUES (276, 0xe5ada6e7949fe69687e585b7, 25, 3, 0x342c32352c323736, 0, 1, 0, '2010-03-30 02:46:46', '2010-03-30 02:46:46');
INSERT INTO `lcn_product_cat` VALUES (277, 0xe7b2bee59381e992b1e58c85, 25, 3, 0x342c32352c323737, 0, 1, 0, '2010-03-30 02:47:20', '2010-03-30 02:47:20');
INSERT INTO `lcn_product_cat` VALUES (278, 0xe7bb8fe585b8e6898be58c85, 25, 3, 0x342c32352c323738, 0, 1, 0, '2010-03-30 02:47:27', '2010-03-30 02:47:27');
INSERT INTO `lcn_product_cat` VALUES (279, 0xe6bdaee6b581e5a5b3e58c85, 25, 3, 0x342c32352c323739, 0, 1, 0, '2010-03-30 02:47:38', '2010-03-30 02:47:38');
INSERT INTO `lcn_product_cat` VALUES (280, 0xe5ada6e7949fe4b9a6e58c85, 25, 3, 0x342c32352c323830, 0, 1, 0, '2010-03-30 02:47:44', '2010-03-30 02:47:44');
INSERT INTO `lcn_product_cat` VALUES (281, 0xe688b7e5a496e799bbe5b1b1e58c85, 25, 3, 0x342c32352c323831, 0, 1, 0, '2010-03-30 02:47:57', '2010-03-30 02:47:57');
INSERT INTO `lcn_product_cat` VALUES (282, 0xe59381e7898ce8bf90e58aa8e58c85, 25, 3, 0x342c32352c323832, 0, 1, 0, '2010-03-30 02:48:05', '2010-03-30 02:48:05');
INSERT INTO `lcn_product_cat` VALUES (283, 0xe697b6e5b09ae4bc91e997b2e58c85, 25, 3, 0x342c32352c323833, 0, 1, 0, '2010-03-30 02:48:24', '2010-03-30 02:48:24');
INSERT INTO `lcn_product_cat` VALUES (284, 0xe59586e58aa1e585ace69687e58c85, 25, 3, 0x342c32352c323834, 0, 1, 0, '2010-03-30 02:48:32', '2010-03-30 02:48:32');
INSERT INTO `lcn_product_cat` VALUES (285, 0xe4b893e4b89ae794b5e88491e58c85, 25, 3, 0x342c32352c323835, 0, 1, 0, '2010-03-30 02:48:46', '2010-03-30 02:48:46');
INSERT INTO `lcn_product_cat` VALUES (286, 0xe695b0e7a081e69184e5838fe58c85, 25, 3, 0x342c32352c323836, 0, 1, 0, '2010-03-30 02:48:54', '2010-03-30 02:48:54');
INSERT INTO `lcn_product_cat` VALUES (287, 0xe69785e8a18ce68b89e69d86e58c85, 25, 3, 0x342c32352c323837, 0, 1, 0, '2010-03-30 02:49:15', '2010-03-30 02:49:15');
INSERT INTO `lcn_product_cat` VALUES (288, 0xe585b6e4bb96e58a9fe883bde58c85, 25, 3, 0x342c32352c323838, 0, 1, 0, '2010-03-30 02:49:21', '2010-03-30 02:49:21');
INSERT INTO `lcn_product_cat` VALUES (290, 0xe688b7e5a496e8a385e5a487, 26, 3, 0x342c32362c323930, 0, 1, 0, '2010-03-30 02:49:51', '2010-03-30 02:49:51');
INSERT INTO `lcn_product_cat` VALUES (291, 0xe7919ce4bcbd, 26, 3, 0x342c32362c323931, 0, 1, 0, '2010-03-30 02:50:03', '2010-03-30 02:50:03');
INSERT INTO `lcn_product_cat` VALUES (292, 0xe5aea4e58685e79083e7b1bb, 26, 3, 0x342c32362c323932, 0, 1, 0, '2010-03-30 02:50:10', '2010-03-30 02:50:10');
INSERT INTO `lcn_product_cat` VALUES (293, 0xe688b7e5a496e79083e7b1bb, 26, 3, 0x342c32362c323933, 0, 1, 0, '2010-03-30 02:50:31', '2010-03-30 02:50:31');
INSERT INTO `lcn_product_cat` VALUES (294, 0xe6b8b8e6b3b3e794a8e59381, 26, 3, 0x342c32362c323934, 0, 1, 0, '2010-03-30 02:50:38', '2010-03-30 02:50:38');
INSERT INTO `lcn_product_cat` VALUES (295, 0xe59084e7b1bbe6a38be7898c, 26, 3, 0x342c32362c323935, 0, 1, 0, '2010-03-30 02:50:54', '2010-03-30 02:50:54');
INSERT INTO `lcn_product_cat` VALUES (296, 0xe99293e9b1bce794a8e585b7, 26, 3, 0x342c32362c323936, 0, 1, 0, '2010-03-30 02:51:01', '2010-03-30 02:51:01');
INSERT INTO `lcn_product_cat` VALUES (297, 0xe69c9be8bf9ce9959c, 26, 3, 0x342c32362c323937, 0, 1, 0, '2010-03-30 02:51:11', '2010-03-30 02:51:11');
INSERT INTO `lcn_product_cat` VALUES (298, 0xe581a5e5bab7e9a39fe59381, 26, 3, 0x342c32362c323938, 0, 1, 0, '2010-03-30 02:58:45', '2010-03-30 02:58:45');
INSERT INTO `lcn_product_cat` VALUES (299, 0xe4bf9de581a5e794a8e59381, 26, 3, 0x342c32362c323939, 0, 1, 0, '2010-03-30 03:00:16', '2010-03-30 03:00:16');
INSERT INTO `lcn_product_cat` VALUES (300, 0xe585bbe7949fe599a8e6a2b0, 26, 3, 0x342c32362c333030, 0, 1, 0, '2010-03-30 03:00:41', '2010-03-30 03:00:41');
INSERT INTO `lcn_product_cat` VALUES (301, 0xe58dabe7949fe68aa4e79086, 26, 3, 0x342c32362c333031, 0, 1, 0, '2010-03-30 03:00:56', '2010-03-30 03:00:56');
INSERT INTO `lcn_product_cat` VALUES (302, 0xe68890e4babae794a8e59381, 26, 3, 0x342c32362c333032, 0, 1, 0, '2010-03-30 03:01:44', '2010-03-30 03:01:44');
INSERT INTO `lcn_product_cat` VALUES (304, 0xe8baabe4bd93e68aa4e79086, 27, 3, 0x342c32372c333034, 0, 1, 0, '2010-03-30 03:03:32', '2010-03-30 03:03:32');
INSERT INTO `lcn_product_cat` VALUES (305, 0xe5bda9e5a686, 27, 3, 0x342c32372c333035, 0, 1, 0, '2010-03-30 03:03:47', '2010-03-30 03:03:47');
INSERT INTO `lcn_product_cat` VALUES (306, 0xe9a699e6b0b4, 27, 3, 0x342c32372c333036, 0, 1, 0, '2010-03-30 03:03:52', '2010-03-30 03:03:52');
INSERT INTO `lcn_product_cat` VALUES (307, 0xe59487e8868fe59487e5bda9, 27, 3, 0x342c32372c333037, 0, 1, 0, '2010-03-30 03:04:04', '2010-03-30 03:04:04');
INSERT INTO `lcn_product_cat` VALUES (308, 0xe99da2e8869c, 27, 3, 0x342c32372c333038, 0, 1, 0, '2010-03-30 03:04:09', '2010-03-30 03:04:09');
INSERT INTO `lcn_product_cat` VALUES (309, 0xe6b481e99da2, 27, 3, 0x342c32372c333039, 0, 1, 0, '2010-03-30 03:04:31', '2010-03-30 03:04:31');
INSERT INTO `lcn_product_cat` VALUES (310, 0xe6b290e6b5b4e4b9b32fe99cb2, 27, 3, 0x342c32372c333130, 0, 1, 0, '2010-03-30 03:04:46', '2010-03-30 03:05:02');
INSERT INTO `lcn_product_cat` VALUES (311, 0xe7b2bee6b2b9e9a699e6b09b, 27, 3, 0x342c32372c333131, 0, 1, 0, '2010-03-30 03:05:17', '2010-03-30 03:05:17');
INSERT INTO `lcn_product_cat` VALUES (312, 0xe6b497e58f91e68aa4e58f91, 27, 3, 0x342c32372c333132, 0, 1, 0, '2010-03-30 03:05:26', '2010-03-30 03:05:26');
INSERT INTO `lcn_product_cat` VALUES (313, 0xe788bde882a4e6b0b4, 27, 3, 0x342c32372c333133, 0, 1, 0, '2010-03-30 03:05:35', '2010-03-30 03:05:35');
INSERT INTO `lcn_product_cat` VALUES (314, 0xe79cbce983a8e68aa4e79086, 27, 3, 0x342c32372c333134, 0, 1, 0, '2010-03-30 03:05:46', '2010-03-30 03:05:46');
INSERT INTO `lcn_product_cat` VALUES (315, 0x54e58cbae68aa4e79086, 27, 3, 0x342c32372c333135, 0, 1, 0, '2010-03-30 03:05:59', '2010-03-30 03:05:59');
INSERT INTO `lcn_product_cat` VALUES (316, 0xe794b7e5a3abe4b893e58cba, 27, 3, 0x342c32372c333136, 0, 1, 0, '2010-03-30 03:06:10', '2010-03-30 03:06:10');
INSERT INTO `lcn_product_cat` VALUES (318, 0xe79b8ae699bae78ea9e585b7, 28, 3, 0x342c32382c333138, 0, 1, 0, '2010-03-30 03:06:52', '2010-03-30 03:06:52');
INSERT INTO `lcn_product_cat` VALUES (319, 0xe7a7afe69ca82fe68bbce68f92e78ea9e585b7, 28, 3, 0x342c32382c333139, 0, 1, 0, '2010-03-30 03:07:19', '2010-03-30 03:07:19');
INSERT INTO `lcn_product_cat` VALUES (320, 0xe6b8b8e6888fe59eab, 28, 3, 0x342c32382c333230, 0, 1, 0, '2010-03-30 03:07:33', '2010-03-30 03:07:33');
INSERT INTO `lcn_product_cat` VALUES (321, 0xe6af9be7bb92e78ea9e585b7, 28, 3, 0x342c32382c333231, 0, 1, 0, '2010-03-30 03:07:41', '2010-03-30 03:07:41');
INSERT INTO `lcn_product_cat` VALUES (322, 0xe58aa8e6bcabe4babae789a9, 28, 3, 0x342c32382c333232, 0, 1, 0, '2010-03-30 03:07:59', '2010-03-30 03:07:59');
INSERT INTO `lcn_product_cat` VALUES (323, 0xe981a5e68ea7e78ea9e585b7, 28, 3, 0x342c32382c333233, 0, 1, 0, '2010-03-30 03:08:08', '2010-03-30 03:08:08');
INSERT INTO `lcn_product_cat` VALUES (324, 0xe882b2e584bfe78ea9e585b72fe7aba5e8bda6, 28, 3, 0x342c32382c333234, 0, 1, 0, '2010-03-30 03:08:23', '2010-03-30 03:08:59');
INSERT INTO `lcn_product_cat` VALUES (325, 0xe4b990e599a8, 28, 3, 0x342c32382c333235, 0, 1, 0, '2010-03-30 03:09:07', '2010-03-30 03:09:07');
INSERT INTO `lcn_product_cat` VALUES (326, 0xe688b7e5a496e78ea9e585b7, 28, 3, 0x342c32382c333236, 0, 1, 0, '2010-03-30 03:09:13', '2010-03-30 03:09:13');

-- --------------------------------------------------------

-- 
-- 表的结构 `lcn_product_image`
-- 

CREATE TABLE `lcn_product_image` (
  `id` int(11) NOT NULL auto_increment COMMENT 'ID',
  `product_id` int(11) NOT NULL COMMENT '商品ID',
  `image_name` varchar(64) collate utf8_bin NOT NULL COMMENT '图片名称',
  `file` varchar(64) collate utf8_bin NOT NULL COMMENT '文件',
  `file_ext` varchar(8) collate utf8_bin NOT NULL COMMENT '文件后缀',
  `file_mime` varchar(32) collate utf8_bin NOT NULL COMMENT '文件MIME类型',
  `width` smallint(6) NOT NULL COMMENT '宽',
  `height` smallint(6) NOT NULL COMMENT '高',
  `file_size` mediumint(9) NOT NULL COMMENT '大小',
  `is_base` tinyint(1) NOT NULL default '0' COMMENT '主图？',
  `sort_order` tinyint(3) default '0' COMMENT '排序',
  `created_at` datetime NOT NULL default '0000-00-00 00:00:00' COMMENT '添加日期',
  `updated_at` datetime NOT NULL default '0000-00-00 00:00:00' COMMENT '更新日期',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='商品图片表' AUTO_INCREMENT=9 ;

-- 
-- 导出表中的数据 `lcn_product_image`
-- 

INSERT INTO `lcn_product_image` VALUES (1, 1, 0x70726f647563742f312f323031303035, 0x70726f647563742f312f3230313030352e6a7067, 0x2e6a7067, 0x696d6167652f6a706567, 800, 600, 31, 0, 0, '2010-05-13 08:51:18', '2010-05-13 08:51:18');
INSERT INTO `lcn_product_image` VALUES (2, 2, 0x70726f647563742f322f323031303035, 0x70726f647563742f322f3230313030352e6a7067, 0x2e6a7067, 0x696d6167652f6a706567, 800, 600, 34, 0, 0, '2010-05-13 08:54:48', '2010-05-13 08:54:48');
INSERT INTO `lcn_product_image` VALUES (3, 2, 0x70726f647563742f322f32303130303531, 0x70726f647563742f322f323031303035312e6a7067, 0x2e6a7067, 0x696d6167652f6a706567, 800, 600, 39, 0, 0, '2010-05-13 08:54:49', '2010-05-13 08:54:49');
INSERT INTO `lcn_product_image` VALUES (4, 3, 0x70726f647563742f332f323031303035, 0x70726f647563742f332f3230313030352e6a7067, 0x2e6a7067, 0x696d6167652f6a706567, 800, 600, 24, 0, 0, '2010-05-13 08:56:27', '2010-05-13 08:56:27');
INSERT INTO `lcn_product_image` VALUES (5, 4, 0x70726f647563742f342f323031303035, 0x70726f647563742f342f3230313030352e6a7067, 0x2e6a7067, 0x696d6167652f6a706567, 800, 600, 55, 0, 0, '2010-05-13 08:58:32', '2010-05-13 08:58:32');
INSERT INTO `lcn_product_image` VALUES (6, 5, 0x70726f647563742f352f323031303035, 0x70726f647563742f352f3230313030352e6a7067, 0x2e6a7067, 0x696d6167652f6a706567, 800, 600, 63, 1, 0, '2010-05-13 08:59:46', '2010-05-13 08:59:46');
INSERT INTO `lcn_product_image` VALUES (7, 6, 0x70726f647563742f362f323031303035, 0x70726f647563742f362f3230313030352e6a7067, 0x2e6a7067, 0x696d6167652f6a706567, 800, 600, 24, 1, 0, '2010-05-13 09:03:11', '2010-05-13 09:03:11');
INSERT INTO `lcn_product_image` VALUES (8, 7, 0x70726f647563742f372f323031303035, 0x70726f647563742f372f3230313030352e6a7067, 0x2e6a7067, 0x696d6167652f6a706567, 800, 600, 37, 1, 0, '2010-05-13 09:05:05', '2010-05-13 09:05:05');

-- --------------------------------------------------------

-- 
-- 表的结构 `lcn_product_related`
-- 

CREATE TABLE `lcn_product_related` (
  `owner_id` int(11) NOT NULL COMMENT '主商品',
  `target_id` int(11) NOT NULL COMMENT '关联商品'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='商品关联表';

-- 
-- 导出表中的数据 `lcn_product_related`
-- 


-- --------------------------------------------------------

-- 
-- 表的结构 `lcn_region`
-- 

CREATE TABLE `lcn_region` (
  `region_id` smallint(5) unsigned NOT NULL auto_increment,
  `parent_id` smallint(5) unsigned NOT NULL default '0',
  `region_name` varchar(120) NOT NULL default '',
  `region_type` tinyint(1) NOT NULL default '2',
  PRIMARY KEY  (`region_id`),
  KEY `parent_id` (`parent_id`),
  KEY `region_type` (`region_type`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3409 ;

-- 
-- 导出表中的数据 `lcn_region`
-- 

INSERT INTO `lcn_region` VALUES (1, 0, '中国', 0);
INSERT INTO `lcn_region` VALUES (2, 1, '北京', 1);
INSERT INTO `lcn_region` VALUES (3, 1, '安徽', 1);
INSERT INTO `lcn_region` VALUES (4, 1, '福建', 1);
INSERT INTO `lcn_region` VALUES (5, 1, '甘肃', 1);
INSERT INTO `lcn_region` VALUES (6, 1, '广东', 1);
INSERT INTO `lcn_region` VALUES (7, 1, '广西', 1);
INSERT INTO `lcn_region` VALUES (8, 1, '贵州', 1);
INSERT INTO `lcn_region` VALUES (9, 1, '海南', 1);
INSERT INTO `lcn_region` VALUES (10, 1, '河北', 1);
INSERT INTO `lcn_region` VALUES (11, 1, '河南', 1);
INSERT INTO `lcn_region` VALUES (12, 1, '黑龙江', 1);
INSERT INTO `lcn_region` VALUES (13, 1, '湖北', 1);
INSERT INTO `lcn_region` VALUES (14, 1, '湖南', 1);
INSERT INTO `lcn_region` VALUES (15, 1, '吉林', 1);
INSERT INTO `lcn_region` VALUES (16, 1, '江苏', 1);
INSERT INTO `lcn_region` VALUES (17, 1, '江西', 1);
INSERT INTO `lcn_region` VALUES (18, 1, '辽宁', 1);
INSERT INTO `lcn_region` VALUES (19, 1, '内蒙古', 1);
INSERT INTO `lcn_region` VALUES (20, 1, '宁夏', 1);
INSERT INTO `lcn_region` VALUES (21, 1, '青海', 1);
INSERT INTO `lcn_region` VALUES (22, 1, '山东', 1);
INSERT INTO `lcn_region` VALUES (23, 1, '山西', 1);
INSERT INTO `lcn_region` VALUES (24, 1, '陕西', 1);
INSERT INTO `lcn_region` VALUES (25, 1, '上海', 1);
INSERT INTO `lcn_region` VALUES (26, 1, '四川', 1);
INSERT INTO `lcn_region` VALUES (27, 1, '天津', 1);
INSERT INTO `lcn_region` VALUES (28, 1, '西藏', 1);
INSERT INTO `lcn_region` VALUES (29, 1, '新疆', 1);
INSERT INTO `lcn_region` VALUES (30, 1, '云南', 1);
INSERT INTO `lcn_region` VALUES (31, 1, '浙江', 1);
INSERT INTO `lcn_region` VALUES (32, 1, '重庆', 1);
INSERT INTO `lcn_region` VALUES (33, 1, '香港', 1);
INSERT INTO `lcn_region` VALUES (34, 1, '澳门', 1);
INSERT INTO `lcn_region` VALUES (35, 1, '台湾', 1);
INSERT INTO `lcn_region` VALUES (36, 3, '安庆', 2);
INSERT INTO `lcn_region` VALUES (37, 3, '蚌埠', 2);
INSERT INTO `lcn_region` VALUES (38, 3, '巢湖', 2);
INSERT INTO `lcn_region` VALUES (39, 3, '池州', 2);
INSERT INTO `lcn_region` VALUES (40, 3, '滁州', 2);
INSERT INTO `lcn_region` VALUES (41, 3, '阜阳', 2);
INSERT INTO `lcn_region` VALUES (42, 3, '淮北', 2);
INSERT INTO `lcn_region` VALUES (43, 3, '淮南', 2);
INSERT INTO `lcn_region` VALUES (44, 3, '黄山', 2);
INSERT INTO `lcn_region` VALUES (45, 3, '六安', 2);
INSERT INTO `lcn_region` VALUES (46, 3, '马鞍山', 2);
INSERT INTO `lcn_region` VALUES (47, 3, '宿州', 2);
INSERT INTO `lcn_region` VALUES (48, 3, '铜陵', 2);
INSERT INTO `lcn_region` VALUES (49, 3, '芜湖', 2);
INSERT INTO `lcn_region` VALUES (50, 3, '宣城', 2);
INSERT INTO `lcn_region` VALUES (51, 3, '亳州', 2);
INSERT INTO `lcn_region` VALUES (52, 2, '北京', 2);
INSERT INTO `lcn_region` VALUES (53, 4, '福州', 2);
INSERT INTO `lcn_region` VALUES (54, 4, '龙岩', 2);
INSERT INTO `lcn_region` VALUES (55, 4, '南平', 2);
INSERT INTO `lcn_region` VALUES (56, 4, '宁德', 2);
INSERT INTO `lcn_region` VALUES (57, 4, '莆田', 2);
INSERT INTO `lcn_region` VALUES (58, 4, '泉州', 2);
INSERT INTO `lcn_region` VALUES (59, 4, '三明', 2);
INSERT INTO `lcn_region` VALUES (60, 4, '厦门', 2);
INSERT INTO `lcn_region` VALUES (61, 4, '漳州', 2);
INSERT INTO `lcn_region` VALUES (62, 5, '兰州', 2);
INSERT INTO `lcn_region` VALUES (63, 5, '白银', 2);
INSERT INTO `lcn_region` VALUES (64, 5, '定西', 2);
INSERT INTO `lcn_region` VALUES (65, 5, '甘南', 2);
INSERT INTO `lcn_region` VALUES (66, 5, '嘉峪关', 2);
INSERT INTO `lcn_region` VALUES (67, 5, '金昌', 2);
INSERT INTO `lcn_region` VALUES (68, 5, '酒泉', 2);
INSERT INTO `lcn_region` VALUES (69, 5, '临夏', 2);
INSERT INTO `lcn_region` VALUES (70, 5, '陇南', 2);
INSERT INTO `lcn_region` VALUES (71, 5, '平凉', 2);
INSERT INTO `lcn_region` VALUES (72, 5, '庆阳', 2);
INSERT INTO `lcn_region` VALUES (73, 5, '天水', 2);
INSERT INTO `lcn_region` VALUES (74, 5, '武威', 2);
INSERT INTO `lcn_region` VALUES (75, 5, '张掖', 2);
INSERT INTO `lcn_region` VALUES (76, 6, '广州', 2);
INSERT INTO `lcn_region` VALUES (77, 6, '深圳', 2);
INSERT INTO `lcn_region` VALUES (78, 6, '潮州', 2);
INSERT INTO `lcn_region` VALUES (79, 6, '东莞', 2);
INSERT INTO `lcn_region` VALUES (80, 6, '佛山', 2);
INSERT INTO `lcn_region` VALUES (81, 6, '河源', 2);
INSERT INTO `lcn_region` VALUES (82, 6, '惠州', 2);
INSERT INTO `lcn_region` VALUES (83, 6, '江门', 2);
INSERT INTO `lcn_region` VALUES (84, 6, '揭阳', 2);
INSERT INTO `lcn_region` VALUES (85, 6, '茂名', 2);
INSERT INTO `lcn_region` VALUES (86, 6, '梅州', 2);
INSERT INTO `lcn_region` VALUES (87, 6, '清远', 2);
INSERT INTO `lcn_region` VALUES (88, 6, '汕头', 2);
INSERT INTO `lcn_region` VALUES (89, 6, '汕尾', 2);
INSERT INTO `lcn_region` VALUES (90, 6, '韶关', 2);
INSERT INTO `lcn_region` VALUES (91, 6, '阳江', 2);
INSERT INTO `lcn_region` VALUES (92, 6, '云浮', 2);
INSERT INTO `lcn_region` VALUES (93, 6, '湛江', 2);
INSERT INTO `lcn_region` VALUES (94, 6, '肇庆', 2);
INSERT INTO `lcn_region` VALUES (95, 6, '中山', 2);
INSERT INTO `lcn_region` VALUES (96, 6, '珠海', 2);
INSERT INTO `lcn_region` VALUES (97, 7, '南宁', 2);
INSERT INTO `lcn_region` VALUES (98, 7, '桂林', 2);
INSERT INTO `lcn_region` VALUES (99, 7, '百色', 2);
INSERT INTO `lcn_region` VALUES (100, 7, '北海', 2);
INSERT INTO `lcn_region` VALUES (101, 7, '崇左', 2);
INSERT INTO `lcn_region` VALUES (102, 7, '防城港', 2);
INSERT INTO `lcn_region` VALUES (103, 7, '贵港', 2);
INSERT INTO `lcn_region` VALUES (104, 7, '河池', 2);
INSERT INTO `lcn_region` VALUES (105, 7, '贺州', 2);
INSERT INTO `lcn_region` VALUES (106, 7, '来宾', 2);
INSERT INTO `lcn_region` VALUES (107, 7, '柳州', 2);
INSERT INTO `lcn_region` VALUES (108, 7, '钦州', 2);
INSERT INTO `lcn_region` VALUES (109, 7, '梧州', 2);
INSERT INTO `lcn_region` VALUES (110, 7, '玉林', 2);
INSERT INTO `lcn_region` VALUES (111, 8, '贵阳', 2);
INSERT INTO `lcn_region` VALUES (112, 8, '安顺', 2);
INSERT INTO `lcn_region` VALUES (113, 8, '毕节', 2);
INSERT INTO `lcn_region` VALUES (114, 8, '六盘水', 2);
INSERT INTO `lcn_region` VALUES (115, 8, '黔东南', 2);
INSERT INTO `lcn_region` VALUES (116, 8, '黔南', 2);
INSERT INTO `lcn_region` VALUES (117, 8, '黔西南', 2);
INSERT INTO `lcn_region` VALUES (118, 8, '铜仁', 2);
INSERT INTO `lcn_region` VALUES (119, 8, '遵义', 2);
INSERT INTO `lcn_region` VALUES (120, 9, '海口', 2);
INSERT INTO `lcn_region` VALUES (121, 9, '三亚', 2);
INSERT INTO `lcn_region` VALUES (122, 9, '白沙', 2);
INSERT INTO `lcn_region` VALUES (123, 9, '保亭', 2);
INSERT INTO `lcn_region` VALUES (124, 9, '昌江', 2);
INSERT INTO `lcn_region` VALUES (125, 9, '澄迈县', 2);
INSERT INTO `lcn_region` VALUES (126, 9, '定安县', 2);
INSERT INTO `lcn_region` VALUES (127, 9, '东方', 2);
INSERT INTO `lcn_region` VALUES (128, 9, '乐东', 2);
INSERT INTO `lcn_region` VALUES (129, 9, '临高县', 2);
INSERT INTO `lcn_region` VALUES (130, 9, '陵水', 2);
INSERT INTO `lcn_region` VALUES (131, 9, '琼海', 2);
INSERT INTO `lcn_region` VALUES (132, 9, '琼中', 2);
INSERT INTO `lcn_region` VALUES (133, 9, '屯昌县', 2);
INSERT INTO `lcn_region` VALUES (134, 9, '万宁', 2);
INSERT INTO `lcn_region` VALUES (135, 9, '文昌', 2);
INSERT INTO `lcn_region` VALUES (136, 9, '五指山', 2);
INSERT INTO `lcn_region` VALUES (137, 9, '儋州', 2);
INSERT INTO `lcn_region` VALUES (138, 10, '石家庄', 2);
INSERT INTO `lcn_region` VALUES (139, 10, '保定', 2);
INSERT INTO `lcn_region` VALUES (140, 10, '沧州', 2);
INSERT INTO `lcn_region` VALUES (141, 10, '承德', 2);
INSERT INTO `lcn_region` VALUES (142, 10, '邯郸', 2);
INSERT INTO `lcn_region` VALUES (143, 10, '衡水', 2);
INSERT INTO `lcn_region` VALUES (144, 10, '廊坊', 2);
INSERT INTO `lcn_region` VALUES (145, 10, '秦皇岛', 2);
INSERT INTO `lcn_region` VALUES (146, 10, '唐山', 2);
INSERT INTO `lcn_region` VALUES (147, 10, '邢台', 2);
INSERT INTO `lcn_region` VALUES (148, 10, '张家口', 2);
INSERT INTO `lcn_region` VALUES (149, 11, '郑州', 2);
INSERT INTO `lcn_region` VALUES (150, 11, '洛阳', 2);
INSERT INTO `lcn_region` VALUES (151, 11, '开封', 2);
INSERT INTO `lcn_region` VALUES (152, 11, '安阳', 2);
INSERT INTO `lcn_region` VALUES (153, 11, '鹤壁', 2);
INSERT INTO `lcn_region` VALUES (154, 11, '济源', 2);
INSERT INTO `lcn_region` VALUES (155, 11, '焦作', 2);
INSERT INTO `lcn_region` VALUES (156, 11, '南阳', 2);
INSERT INTO `lcn_region` VALUES (157, 11, '平顶山', 2);
INSERT INTO `lcn_region` VALUES (158, 11, '三门峡', 2);
INSERT INTO `lcn_region` VALUES (159, 11, '商丘', 2);
INSERT INTO `lcn_region` VALUES (160, 11, '新乡', 2);
INSERT INTO `lcn_region` VALUES (161, 11, '信阳', 2);
INSERT INTO `lcn_region` VALUES (162, 11, '许昌', 2);
INSERT INTO `lcn_region` VALUES (163, 11, '周口', 2);
INSERT INTO `lcn_region` VALUES (164, 11, '驻马店', 2);
INSERT INTO `lcn_region` VALUES (165, 11, '漯河', 2);
INSERT INTO `lcn_region` VALUES (166, 11, '濮阳', 2);
INSERT INTO `lcn_region` VALUES (167, 12, '哈尔滨', 2);
INSERT INTO `lcn_region` VALUES (168, 12, '大庆', 2);
INSERT INTO `lcn_region` VALUES (169, 12, '大兴安岭', 2);
INSERT INTO `lcn_region` VALUES (170, 12, '鹤岗', 2);
INSERT INTO `lcn_region` VALUES (171, 12, '黑河', 2);
INSERT INTO `lcn_region` VALUES (172, 12, '鸡西', 2);
INSERT INTO `lcn_region` VALUES (173, 12, '佳木斯', 2);
INSERT INTO `lcn_region` VALUES (174, 12, '牡丹江', 2);
INSERT INTO `lcn_region` VALUES (175, 12, '七台河', 2);
INSERT INTO `lcn_region` VALUES (176, 12, '齐齐哈尔', 2);
INSERT INTO `lcn_region` VALUES (177, 12, '双鸭山', 2);
INSERT INTO `lcn_region` VALUES (178, 12, '绥化', 2);
INSERT INTO `lcn_region` VALUES (179, 12, '伊春', 2);
INSERT INTO `lcn_region` VALUES (180, 13, '武汉', 2);
INSERT INTO `lcn_region` VALUES (181, 13, '仙桃', 2);
INSERT INTO `lcn_region` VALUES (182, 13, '鄂州', 2);
INSERT INTO `lcn_region` VALUES (183, 13, '黄冈', 2);
INSERT INTO `lcn_region` VALUES (184, 13, '黄石', 2);
INSERT INTO `lcn_region` VALUES (185, 13, '荆门', 2);
INSERT INTO `lcn_region` VALUES (186, 13, '荆州', 2);
INSERT INTO `lcn_region` VALUES (187, 13, '潜江', 2);
INSERT INTO `lcn_region` VALUES (188, 13, '神农架林区', 2);
INSERT INTO `lcn_region` VALUES (189, 13, '十堰', 2);
INSERT INTO `lcn_region` VALUES (190, 13, '随州', 2);
INSERT INTO `lcn_region` VALUES (191, 13, '天门', 2);
INSERT INTO `lcn_region` VALUES (192, 13, '咸宁', 2);
INSERT INTO `lcn_region` VALUES (193, 13, '襄樊', 2);
INSERT INTO `lcn_region` VALUES (194, 13, '孝感', 2);
INSERT INTO `lcn_region` VALUES (195, 13, '宜昌', 2);
INSERT INTO `lcn_region` VALUES (196, 13, '恩施', 2);
INSERT INTO `lcn_region` VALUES (197, 14, '长沙', 2);
INSERT INTO `lcn_region` VALUES (198, 14, '张家界', 2);
INSERT INTO `lcn_region` VALUES (199, 14, '常德', 2);
INSERT INTO `lcn_region` VALUES (200, 14, '郴州', 2);
INSERT INTO `lcn_region` VALUES (201, 14, '衡阳', 2);
INSERT INTO `lcn_region` VALUES (202, 14, '怀化', 2);
INSERT INTO `lcn_region` VALUES (203, 14, '娄底', 2);
INSERT INTO `lcn_region` VALUES (204, 14, '邵阳', 2);
INSERT INTO `lcn_region` VALUES (205, 14, '湘潭', 2);
INSERT INTO `lcn_region` VALUES (206, 14, '湘西', 2);
INSERT INTO `lcn_region` VALUES (207, 14, '益阳', 2);
INSERT INTO `lcn_region` VALUES (208, 14, '永州', 2);
INSERT INTO `lcn_region` VALUES (209, 14, '岳阳', 2);
INSERT INTO `lcn_region` VALUES (210, 14, '株洲', 2);
INSERT INTO `lcn_region` VALUES (211, 15, '长春', 2);
INSERT INTO `lcn_region` VALUES (212, 15, '吉林', 2);
INSERT INTO `lcn_region` VALUES (213, 15, '白城', 2);
INSERT INTO `lcn_region` VALUES (214, 15, '白山', 2);
INSERT INTO `lcn_region` VALUES (215, 15, '辽源', 2);
INSERT INTO `lcn_region` VALUES (216, 15, '四平', 2);
INSERT INTO `lcn_region` VALUES (217, 15, '松原', 2);
INSERT INTO `lcn_region` VALUES (218, 15, '通化', 2);
INSERT INTO `lcn_region` VALUES (219, 15, '延边', 2);
INSERT INTO `lcn_region` VALUES (220, 16, '南京', 2);
INSERT INTO `lcn_region` VALUES (221, 16, '苏州', 2);
INSERT INTO `lcn_region` VALUES (222, 16, '无锡', 2);
INSERT INTO `lcn_region` VALUES (223, 16, '常州', 2);
INSERT INTO `lcn_region` VALUES (224, 16, '淮安', 2);
INSERT INTO `lcn_region` VALUES (225, 16, '连云港', 2);
INSERT INTO `lcn_region` VALUES (226, 16, '南通', 2);
INSERT INTO `lcn_region` VALUES (227, 16, '宿迁', 2);
INSERT INTO `lcn_region` VALUES (228, 16, '泰州', 2);
INSERT INTO `lcn_region` VALUES (229, 16, '徐州', 2);
INSERT INTO `lcn_region` VALUES (230, 16, '盐城', 2);
INSERT INTO `lcn_region` VALUES (231, 16, '扬州', 2);
INSERT INTO `lcn_region` VALUES (232, 16, '镇江', 2);
INSERT INTO `lcn_region` VALUES (233, 17, '南昌', 2);
INSERT INTO `lcn_region` VALUES (234, 17, '抚州', 2);
INSERT INTO `lcn_region` VALUES (235, 17, '赣州', 2);
INSERT INTO `lcn_region` VALUES (236, 17, '吉安', 2);
INSERT INTO `lcn_region` VALUES (237, 17, '景德镇', 2);
INSERT INTO `lcn_region` VALUES (238, 17, '九江', 2);
INSERT INTO `lcn_region` VALUES (239, 17, '萍乡', 2);
INSERT INTO `lcn_region` VALUES (240, 17, '上饶', 2);
INSERT INTO `lcn_region` VALUES (241, 17, '新余', 2);
INSERT INTO `lcn_region` VALUES (242, 17, '宜春', 2);
INSERT INTO `lcn_region` VALUES (243, 17, '鹰潭', 2);
INSERT INTO `lcn_region` VALUES (244, 18, '沈阳', 2);
INSERT INTO `lcn_region` VALUES (245, 18, '大连', 2);
INSERT INTO `lcn_region` VALUES (246, 18, '鞍山', 2);
INSERT INTO `lcn_region` VALUES (247, 18, '本溪', 2);
INSERT INTO `lcn_region` VALUES (248, 18, '朝阳', 2);
INSERT INTO `lcn_region` VALUES (249, 18, '丹东', 2);
INSERT INTO `lcn_region` VALUES (250, 18, '抚顺', 2);
INSERT INTO `lcn_region` VALUES (251, 18, '阜新', 2);
INSERT INTO `lcn_region` VALUES (252, 18, '葫芦岛', 2);
INSERT INTO `lcn_region` VALUES (253, 18, '锦州', 2);
INSERT INTO `lcn_region` VALUES (254, 18, '辽阳', 2);
INSERT INTO `lcn_region` VALUES (255, 18, '盘锦', 2);
INSERT INTO `lcn_region` VALUES (256, 18, '铁岭', 2);
INSERT INTO `lcn_region` VALUES (257, 18, '营口', 2);
INSERT INTO `lcn_region` VALUES (258, 19, '呼和浩特', 2);
INSERT INTO `lcn_region` VALUES (259, 19, '阿拉善盟', 2);
INSERT INTO `lcn_region` VALUES (260, 19, '巴彦淖尔盟', 2);
INSERT INTO `lcn_region` VALUES (261, 19, '包头', 2);
INSERT INTO `lcn_region` VALUES (262, 19, '赤峰', 2);
INSERT INTO `lcn_region` VALUES (263, 19, '鄂尔多斯', 2);
INSERT INTO `lcn_region` VALUES (264, 19, '呼伦贝尔', 2);
INSERT INTO `lcn_region` VALUES (265, 19, '通辽', 2);
INSERT INTO `lcn_region` VALUES (266, 19, '乌海', 2);
INSERT INTO `lcn_region` VALUES (267, 19, '乌兰察布市', 2);
INSERT INTO `lcn_region` VALUES (268, 19, '锡林郭勒盟', 2);
INSERT INTO `lcn_region` VALUES (269, 19, '兴安盟', 2);
INSERT INTO `lcn_region` VALUES (270, 20, '银川', 2);
INSERT INTO `lcn_region` VALUES (271, 20, '固原', 2);
INSERT INTO `lcn_region` VALUES (272, 20, '石嘴山', 2);
INSERT INTO `lcn_region` VALUES (273, 20, '吴忠', 2);
INSERT INTO `lcn_region` VALUES (274, 20, '中卫', 2);
INSERT INTO `lcn_region` VALUES (275, 21, '西宁', 2);
INSERT INTO `lcn_region` VALUES (276, 21, '果洛', 2);
INSERT INTO `lcn_region` VALUES (277, 21, '海北', 2);
INSERT INTO `lcn_region` VALUES (278, 21, '海东', 2);
INSERT INTO `lcn_region` VALUES (279, 21, '海南', 2);
INSERT INTO `lcn_region` VALUES (280, 21, '海西', 2);
INSERT INTO `lcn_region` VALUES (281, 21, '黄南', 2);
INSERT INTO `lcn_region` VALUES (282, 21, '玉树', 2);
INSERT INTO `lcn_region` VALUES (283, 22, '济南', 2);
INSERT INTO `lcn_region` VALUES (284, 22, '青岛', 2);
INSERT INTO `lcn_region` VALUES (285, 22, '滨州', 2);
INSERT INTO `lcn_region` VALUES (286, 22, '德州', 2);
INSERT INTO `lcn_region` VALUES (287, 22, '东营', 2);
INSERT INTO `lcn_region` VALUES (288, 22, '菏泽', 2);
INSERT INTO `lcn_region` VALUES (289, 22, '济宁', 2);
INSERT INTO `lcn_region` VALUES (290, 22, '莱芜', 2);
INSERT INTO `lcn_region` VALUES (291, 22, '聊城', 2);
INSERT INTO `lcn_region` VALUES (292, 22, '临沂', 2);
INSERT INTO `lcn_region` VALUES (293, 22, '日照', 2);
INSERT INTO `lcn_region` VALUES (294, 22, '泰安', 2);
INSERT INTO `lcn_region` VALUES (295, 22, '威海', 2);
INSERT INTO `lcn_region` VALUES (296, 22, '潍坊', 2);
INSERT INTO `lcn_region` VALUES (297, 22, '烟台', 2);
INSERT INTO `lcn_region` VALUES (298, 22, '枣庄', 2);
INSERT INTO `lcn_region` VALUES (299, 22, '淄博', 2);
INSERT INTO `lcn_region` VALUES (300, 23, '太原', 2);
INSERT INTO `lcn_region` VALUES (301, 23, '长治', 2);
INSERT INTO `lcn_region` VALUES (302, 23, '大同', 2);
INSERT INTO `lcn_region` VALUES (303, 23, '晋城', 2);
INSERT INTO `lcn_region` VALUES (304, 23, '晋中', 2);
INSERT INTO `lcn_region` VALUES (305, 23, '临汾', 2);
INSERT INTO `lcn_region` VALUES (306, 23, '吕梁', 2);
INSERT INTO `lcn_region` VALUES (307, 23, '朔州', 2);
INSERT INTO `lcn_region` VALUES (308, 23, '忻州', 2);
INSERT INTO `lcn_region` VALUES (309, 23, '阳泉', 2);
INSERT INTO `lcn_region` VALUES (310, 23, '运城', 2);
INSERT INTO `lcn_region` VALUES (311, 24, '西安', 2);
INSERT INTO `lcn_region` VALUES (312, 24, '安康', 2);
INSERT INTO `lcn_region` VALUES (313, 24, '宝鸡', 2);
INSERT INTO `lcn_region` VALUES (314, 24, '汉中', 2);
INSERT INTO `lcn_region` VALUES (315, 24, '商洛', 2);
INSERT INTO `lcn_region` VALUES (316, 24, '铜川', 2);
INSERT INTO `lcn_region` VALUES (317, 24, '渭南', 2);
INSERT INTO `lcn_region` VALUES (318, 24, '咸阳', 2);
INSERT INTO `lcn_region` VALUES (319, 24, '延安', 2);
INSERT INTO `lcn_region` VALUES (320, 24, '榆林', 2);
INSERT INTO `lcn_region` VALUES (321, 25, '上海', 2);
INSERT INTO `lcn_region` VALUES (322, 26, '成都', 2);
INSERT INTO `lcn_region` VALUES (323, 26, '绵阳', 2);
INSERT INTO `lcn_region` VALUES (324, 26, '阿坝', 2);
INSERT INTO `lcn_region` VALUES (325, 26, '巴中', 2);
INSERT INTO `lcn_region` VALUES (326, 26, '达州', 2);
INSERT INTO `lcn_region` VALUES (327, 26, '德阳', 2);
INSERT INTO `lcn_region` VALUES (328, 26, '甘孜', 2);
INSERT INTO `lcn_region` VALUES (329, 26, '广安', 2);
INSERT INTO `lcn_region` VALUES (330, 26, '广元', 2);
INSERT INTO `lcn_region` VALUES (331, 26, '乐山', 2);
INSERT INTO `lcn_region` VALUES (332, 26, '凉山', 2);
INSERT INTO `lcn_region` VALUES (333, 26, '眉山', 2);
INSERT INTO `lcn_region` VALUES (334, 26, '南充', 2);
INSERT INTO `lcn_region` VALUES (335, 26, '内江', 2);
INSERT INTO `lcn_region` VALUES (336, 26, '攀枝花', 2);
INSERT INTO `lcn_region` VALUES (337, 26, '遂宁', 2);
INSERT INTO `lcn_region` VALUES (338, 26, '雅安', 2);
INSERT INTO `lcn_region` VALUES (339, 26, '宜宾', 2);
INSERT INTO `lcn_region` VALUES (340, 26, '资阳', 2);
INSERT INTO `lcn_region` VALUES (341, 26, '自贡', 2);
INSERT INTO `lcn_region` VALUES (342, 26, '泸州', 2);
INSERT INTO `lcn_region` VALUES (343, 27, '天津', 2);
INSERT INTO `lcn_region` VALUES (344, 28, '拉萨', 2);
INSERT INTO `lcn_region` VALUES (345, 28, '阿里', 2);
INSERT INTO `lcn_region` VALUES (346, 28, '昌都', 2);
INSERT INTO `lcn_region` VALUES (347, 28, '林芝', 2);
INSERT INTO `lcn_region` VALUES (348, 28, '那曲', 2);
INSERT INTO `lcn_region` VALUES (349, 28, '日喀则', 2);
INSERT INTO `lcn_region` VALUES (350, 28, '山南', 2);
INSERT INTO `lcn_region` VALUES (351, 29, '乌鲁木齐', 2);
INSERT INTO `lcn_region` VALUES (352, 29, '阿克苏', 2);
INSERT INTO `lcn_region` VALUES (353, 29, '阿拉尔', 2);
INSERT INTO `lcn_region` VALUES (354, 29, '巴音郭楞', 2);
INSERT INTO `lcn_region` VALUES (355, 29, '博尔塔拉', 2);
INSERT INTO `lcn_region` VALUES (356, 29, '昌吉', 2);
INSERT INTO `lcn_region` VALUES (357, 29, '哈密', 2);
INSERT INTO `lcn_region` VALUES (358, 29, '和田', 2);
INSERT INTO `lcn_region` VALUES (359, 29, '喀什', 2);
INSERT INTO `lcn_region` VALUES (360, 29, '克拉玛依', 2);
INSERT INTO `lcn_region` VALUES (361, 29, '克孜勒苏', 2);
INSERT INTO `lcn_region` VALUES (362, 29, '石河子', 2);
INSERT INTO `lcn_region` VALUES (363, 29, '图木舒克', 2);
INSERT INTO `lcn_region` VALUES (364, 29, '吐鲁番', 2);
INSERT INTO `lcn_region` VALUES (365, 29, '五家渠', 2);
INSERT INTO `lcn_region` VALUES (366, 29, '伊犁', 2);
INSERT INTO `lcn_region` VALUES (367, 30, '昆明', 2);
INSERT INTO `lcn_region` VALUES (368, 30, '怒江', 2);
INSERT INTO `lcn_region` VALUES (369, 30, '普洱', 2);
INSERT INTO `lcn_region` VALUES (370, 30, '丽江', 2);
INSERT INTO `lcn_region` VALUES (371, 30, '保山', 2);
INSERT INTO `lcn_region` VALUES (372, 30, '楚雄', 2);
INSERT INTO `lcn_region` VALUES (373, 30, '大理', 2);
INSERT INTO `lcn_region` VALUES (374, 30, '德宏', 2);
INSERT INTO `lcn_region` VALUES (375, 30, '迪庆', 2);
INSERT INTO `lcn_region` VALUES (376, 30, '红河', 2);
INSERT INTO `lcn_region` VALUES (377, 30, '临沧', 2);
INSERT INTO `lcn_region` VALUES (378, 30, '曲靖', 2);
INSERT INTO `lcn_region` VALUES (379, 30, '文山', 2);
INSERT INTO `lcn_region` VALUES (380, 30, '西双版纳', 2);
INSERT INTO `lcn_region` VALUES (381, 30, '玉溪', 2);
INSERT INTO `lcn_region` VALUES (382, 30, '昭通', 2);
INSERT INTO `lcn_region` VALUES (383, 31, '杭州', 2);
INSERT INTO `lcn_region` VALUES (384, 31, '湖州', 2);
INSERT INTO `lcn_region` VALUES (385, 31, '嘉兴', 2);
INSERT INTO `lcn_region` VALUES (386, 31, '金华', 2);
INSERT INTO `lcn_region` VALUES (387, 31, '丽水', 2);
INSERT INTO `lcn_region` VALUES (388, 31, '宁波', 2);
INSERT INTO `lcn_region` VALUES (389, 31, '绍兴', 2);
INSERT INTO `lcn_region` VALUES (390, 31, '台州', 2);
INSERT INTO `lcn_region` VALUES (391, 31, '温州', 2);
INSERT INTO `lcn_region` VALUES (392, 31, '舟山', 2);
INSERT INTO `lcn_region` VALUES (393, 31, '衢州', 2);
INSERT INTO `lcn_region` VALUES (394, 32, '重庆', 2);
INSERT INTO `lcn_region` VALUES (395, 33, '香港', 2);
INSERT INTO `lcn_region` VALUES (396, 34, '澳门', 2);
INSERT INTO `lcn_region` VALUES (397, 35, '台湾', 2);
INSERT INTO `lcn_region` VALUES (398, 36, '迎江区', 3);
INSERT INTO `lcn_region` VALUES (399, 36, '大观区', 3);
INSERT INTO `lcn_region` VALUES (400, 36, '宜秀区', 3);
INSERT INTO `lcn_region` VALUES (401, 36, '桐城市', 3);
INSERT INTO `lcn_region` VALUES (402, 36, '怀宁县', 3);
INSERT INTO `lcn_region` VALUES (403, 36, '枞阳县', 3);
INSERT INTO `lcn_region` VALUES (404, 36, '潜山县', 3);
INSERT INTO `lcn_region` VALUES (405, 36, '太湖县', 3);
INSERT INTO `lcn_region` VALUES (406, 36, '宿松县', 3);
INSERT INTO `lcn_region` VALUES (407, 36, '望江县', 3);
INSERT INTO `lcn_region` VALUES (408, 36, '岳西县', 3);
INSERT INTO `lcn_region` VALUES (409, 37, '中市区', 3);
INSERT INTO `lcn_region` VALUES (410, 37, '东市区', 3);
INSERT INTO `lcn_region` VALUES (411, 37, '西市区', 3);
INSERT INTO `lcn_region` VALUES (412, 37, '郊区', 3);
INSERT INTO `lcn_region` VALUES (413, 37, '怀远县', 3);
INSERT INTO `lcn_region` VALUES (414, 37, '五河县', 3);
INSERT INTO `lcn_region` VALUES (415, 37, '固镇县', 3);
INSERT INTO `lcn_region` VALUES (416, 38, '居巢区', 3);
INSERT INTO `lcn_region` VALUES (417, 38, '庐江县', 3);
INSERT INTO `lcn_region` VALUES (418, 38, '无为县', 3);
INSERT INTO `lcn_region` VALUES (419, 38, '含山县', 3);
INSERT INTO `lcn_region` VALUES (420, 38, '和县', 3);
INSERT INTO `lcn_region` VALUES (421, 39, '贵池区', 3);
INSERT INTO `lcn_region` VALUES (422, 39, '东至县', 3);
INSERT INTO `lcn_region` VALUES (423, 39, '石台县', 3);
INSERT INTO `lcn_region` VALUES (424, 39, '青阳县', 3);
INSERT INTO `lcn_region` VALUES (425, 40, '琅琊区', 3);
INSERT INTO `lcn_region` VALUES (426, 40, '南谯区', 3);
INSERT INTO `lcn_region` VALUES (427, 40, '天长市', 3);
INSERT INTO `lcn_region` VALUES (428, 40, '明光市', 3);
INSERT INTO `lcn_region` VALUES (429, 40, '来安县', 3);
INSERT INTO `lcn_region` VALUES (430, 40, '全椒县', 3);
INSERT INTO `lcn_region` VALUES (431, 40, '定远县', 3);
INSERT INTO `lcn_region` VALUES (432, 40, '凤阳县', 3);
INSERT INTO `lcn_region` VALUES (433, 41, '蚌山区', 3);
INSERT INTO `lcn_region` VALUES (434, 41, '龙子湖区', 3);
INSERT INTO `lcn_region` VALUES (435, 41, '禹会区', 3);
INSERT INTO `lcn_region` VALUES (436, 41, '淮上区', 3);
INSERT INTO `lcn_region` VALUES (437, 41, '颍州区', 3);
INSERT INTO `lcn_region` VALUES (438, 41, '颍东区', 3);
INSERT INTO `lcn_region` VALUES (439, 41, '颍泉区', 3);
INSERT INTO `lcn_region` VALUES (440, 41, '界首市', 3);
INSERT INTO `lcn_region` VALUES (441, 41, '临泉县', 3);
INSERT INTO `lcn_region` VALUES (442, 41, '太和县', 3);
INSERT INTO `lcn_region` VALUES (443, 41, '阜南县', 3);
INSERT INTO `lcn_region` VALUES (444, 41, '颖上县', 3);
INSERT INTO `lcn_region` VALUES (445, 42, '相山区', 3);
INSERT INTO `lcn_region` VALUES (446, 42, '杜集区', 3);
INSERT INTO `lcn_region` VALUES (447, 42, '烈山区', 3);
INSERT INTO `lcn_region` VALUES (448, 42, '濉溪县', 3);
INSERT INTO `lcn_region` VALUES (449, 43, '田家庵区', 3);
INSERT INTO `lcn_region` VALUES (450, 43, '大通区', 3);
INSERT INTO `lcn_region` VALUES (451, 43, '谢家集区', 3);
INSERT INTO `lcn_region` VALUES (452, 43, '八公山区', 3);
INSERT INTO `lcn_region` VALUES (453, 43, '潘集区', 3);
INSERT INTO `lcn_region` VALUES (454, 43, '凤台县', 3);
INSERT INTO `lcn_region` VALUES (455, 44, '屯溪区', 3);
INSERT INTO `lcn_region` VALUES (456, 44, '黄山区', 3);
INSERT INTO `lcn_region` VALUES (457, 44, '徽州区', 3);
INSERT INTO `lcn_region` VALUES (458, 44, '歙县', 3);
INSERT INTO `lcn_region` VALUES (459, 44, '休宁县', 3);
INSERT INTO `lcn_region` VALUES (460, 44, '黟县', 3);
INSERT INTO `lcn_region` VALUES (461, 44, '祁门县', 3);
INSERT INTO `lcn_region` VALUES (462, 45, '金安区', 3);
INSERT INTO `lcn_region` VALUES (463, 45, '裕安区', 3);
INSERT INTO `lcn_region` VALUES (464, 45, '寿县', 3);
INSERT INTO `lcn_region` VALUES (465, 45, '霍邱县', 3);
INSERT INTO `lcn_region` VALUES (466, 45, '舒城县', 3);
INSERT INTO `lcn_region` VALUES (467, 45, '金寨县', 3);
INSERT INTO `lcn_region` VALUES (468, 45, '霍山县', 3);
INSERT INTO `lcn_region` VALUES (469, 46, '雨山区', 3);
INSERT INTO `lcn_region` VALUES (470, 46, '花山区', 3);
INSERT INTO `lcn_region` VALUES (471, 46, '金家庄区', 3);
INSERT INTO `lcn_region` VALUES (472, 46, '当涂县', 3);
INSERT INTO `lcn_region` VALUES (473, 47, '埇桥区', 3);
INSERT INTO `lcn_region` VALUES (474, 47, '砀山县', 3);
INSERT INTO `lcn_region` VALUES (475, 47, '萧县', 3);
INSERT INTO `lcn_region` VALUES (476, 47, '灵璧县', 3);
INSERT INTO `lcn_region` VALUES (477, 47, '泗县', 3);
INSERT INTO `lcn_region` VALUES (478, 48, '铜官山区', 3);
INSERT INTO `lcn_region` VALUES (479, 48, '狮子山区', 3);
INSERT INTO `lcn_region` VALUES (480, 48, '郊区', 3);
INSERT INTO `lcn_region` VALUES (481, 48, '铜陵县', 3);
INSERT INTO `lcn_region` VALUES (482, 49, '镜湖区', 3);
INSERT INTO `lcn_region` VALUES (483, 49, '弋江区', 3);
INSERT INTO `lcn_region` VALUES (484, 49, '鸠江区', 3);
INSERT INTO `lcn_region` VALUES (485, 49, '三山区', 3);
INSERT INTO `lcn_region` VALUES (486, 49, '芜湖县', 3);
INSERT INTO `lcn_region` VALUES (487, 49, '繁昌县', 3);
INSERT INTO `lcn_region` VALUES (488, 49, '南陵县', 3);
INSERT INTO `lcn_region` VALUES (489, 50, '宣州区', 3);
INSERT INTO `lcn_region` VALUES (490, 50, '宁国市', 3);
INSERT INTO `lcn_region` VALUES (491, 50, '郎溪县', 3);
INSERT INTO `lcn_region` VALUES (492, 50, '广德县', 3);
INSERT INTO `lcn_region` VALUES (493, 50, '泾县', 3);
INSERT INTO `lcn_region` VALUES (494, 50, '绩溪县', 3);
INSERT INTO `lcn_region` VALUES (495, 50, '旌德县', 3);
INSERT INTO `lcn_region` VALUES (496, 51, '涡阳县', 3);
INSERT INTO `lcn_region` VALUES (497, 51, '蒙城县', 3);
INSERT INTO `lcn_region` VALUES (498, 51, '利辛县', 3);
INSERT INTO `lcn_region` VALUES (499, 51, '谯城区', 3);
INSERT INTO `lcn_region` VALUES (500, 52, '东城区', 3);
INSERT INTO `lcn_region` VALUES (501, 52, '西城区', 3);
INSERT INTO `lcn_region` VALUES (502, 52, '海淀区', 3);
INSERT INTO `lcn_region` VALUES (503, 52, '朝阳区', 3);
INSERT INTO `lcn_region` VALUES (504, 52, '崇文区', 3);
INSERT INTO `lcn_region` VALUES (505, 52, '宣武区', 3);
INSERT INTO `lcn_region` VALUES (506, 52, '丰台区', 3);
INSERT INTO `lcn_region` VALUES (507, 52, '石景山区', 3);
INSERT INTO `lcn_region` VALUES (508, 52, '房山区', 3);
INSERT INTO `lcn_region` VALUES (509, 52, '门头沟区', 3);
INSERT INTO `lcn_region` VALUES (510, 52, '通州区', 3);
INSERT INTO `lcn_region` VALUES (511, 52, '顺义区', 3);
INSERT INTO `lcn_region` VALUES (512, 52, '昌平区', 3);
INSERT INTO `lcn_region` VALUES (513, 52, '怀柔区', 3);
INSERT INTO `lcn_region` VALUES (514, 52, '平谷区', 3);
INSERT INTO `lcn_region` VALUES (515, 52, '大兴区', 3);
INSERT INTO `lcn_region` VALUES (516, 52, '密云县', 3);
INSERT INTO `lcn_region` VALUES (517, 52, '延庆县', 3);
INSERT INTO `lcn_region` VALUES (518, 53, '鼓楼区', 3);
INSERT INTO `lcn_region` VALUES (519, 53, '台江区', 3);
INSERT INTO `lcn_region` VALUES (520, 53, '仓山区', 3);
INSERT INTO `lcn_region` VALUES (521, 53, '马尾区', 3);
INSERT INTO `lcn_region` VALUES (522, 53, '晋安区', 3);
INSERT INTO `lcn_region` VALUES (523, 53, '福清市', 3);
INSERT INTO `lcn_region` VALUES (524, 53, '长乐市', 3);
INSERT INTO `lcn_region` VALUES (525, 53, '闽侯县', 3);
INSERT INTO `lcn_region` VALUES (526, 53, '连江县', 3);
INSERT INTO `lcn_region` VALUES (527, 53, '罗源县', 3);
INSERT INTO `lcn_region` VALUES (528, 53, '闽清县', 3);
INSERT INTO `lcn_region` VALUES (529, 53, '永泰县', 3);
INSERT INTO `lcn_region` VALUES (530, 53, '平潭县', 3);
INSERT INTO `lcn_region` VALUES (531, 54, '新罗区', 3);
INSERT INTO `lcn_region` VALUES (532, 54, '漳平市', 3);
INSERT INTO `lcn_region` VALUES (533, 54, '长汀县', 3);
INSERT INTO `lcn_region` VALUES (534, 54, '永定县', 3);
INSERT INTO `lcn_region` VALUES (535, 54, '上杭县', 3);
INSERT INTO `lcn_region` VALUES (536, 54, '武平县', 3);
INSERT INTO `lcn_region` VALUES (537, 54, '连城县', 3);
INSERT INTO `lcn_region` VALUES (538, 55, '延平区', 3);
INSERT INTO `lcn_region` VALUES (539, 55, '邵武市', 3);
INSERT INTO `lcn_region` VALUES (540, 55, '武夷山市', 3);
INSERT INTO `lcn_region` VALUES (541, 55, '建瓯市', 3);
INSERT INTO `lcn_region` VALUES (542, 55, '建阳市', 3);
INSERT INTO `lcn_region` VALUES (543, 55, '顺昌县', 3);
INSERT INTO `lcn_region` VALUES (544, 55, '浦城县', 3);
INSERT INTO `lcn_region` VALUES (545, 55, '光泽县', 3);
INSERT INTO `lcn_region` VALUES (546, 55, '松溪县', 3);
INSERT INTO `lcn_region` VALUES (547, 55, '政和县', 3);
INSERT INTO `lcn_region` VALUES (548, 56, '蕉城区', 3);
INSERT INTO `lcn_region` VALUES (549, 56, '福安市', 3);
INSERT INTO `lcn_region` VALUES (550, 56, '福鼎市', 3);
INSERT INTO `lcn_region` VALUES (551, 56, '霞浦县', 3);
INSERT INTO `lcn_region` VALUES (552, 56, '古田县', 3);
INSERT INTO `lcn_region` VALUES (553, 56, '屏南县', 3);
INSERT INTO `lcn_region` VALUES (554, 56, '寿宁县', 3);
INSERT INTO `lcn_region` VALUES (555, 56, '周宁县', 3);
INSERT INTO `lcn_region` VALUES (556, 56, '柘荣县', 3);
INSERT INTO `lcn_region` VALUES (557, 57, '城厢区', 3);
INSERT INTO `lcn_region` VALUES (558, 57, '涵江区', 3);
INSERT INTO `lcn_region` VALUES (559, 57, '荔城区', 3);
INSERT INTO `lcn_region` VALUES (560, 57, '秀屿区', 3);
INSERT INTO `lcn_region` VALUES (561, 57, '仙游县', 3);
INSERT INTO `lcn_region` VALUES (562, 58, '鲤城区', 3);
INSERT INTO `lcn_region` VALUES (563, 58, '丰泽区', 3);
INSERT INTO `lcn_region` VALUES (564, 58, '洛江区', 3);
INSERT INTO `lcn_region` VALUES (565, 58, '清濛开发区', 3);
INSERT INTO `lcn_region` VALUES (566, 58, '泉港区', 3);
INSERT INTO `lcn_region` VALUES (567, 58, '石狮市', 3);
INSERT INTO `lcn_region` VALUES (568, 58, '晋江市', 3);
INSERT INTO `lcn_region` VALUES (569, 58, '南安市', 3);
INSERT INTO `lcn_region` VALUES (570, 58, '惠安县', 3);
INSERT INTO `lcn_region` VALUES (571, 58, '安溪县', 3);
INSERT INTO `lcn_region` VALUES (572, 58, '永春县', 3);
INSERT INTO `lcn_region` VALUES (573, 58, '德化县', 3);
INSERT INTO `lcn_region` VALUES (574, 58, '金门县', 3);
INSERT INTO `lcn_region` VALUES (575, 59, '梅列区', 3);
INSERT INTO `lcn_region` VALUES (576, 59, '三元区', 3);
INSERT INTO `lcn_region` VALUES (577, 59, '永安市', 3);
INSERT INTO `lcn_region` VALUES (578, 59, '明溪县', 3);
INSERT INTO `lcn_region` VALUES (579, 59, '清流县', 3);
INSERT INTO `lcn_region` VALUES (580, 59, '宁化县', 3);
INSERT INTO `lcn_region` VALUES (581, 59, '大田县', 3);
INSERT INTO `lcn_region` VALUES (582, 59, '尤溪县', 3);
INSERT INTO `lcn_region` VALUES (583, 59, '沙县', 3);
INSERT INTO `lcn_region` VALUES (584, 59, '将乐县', 3);
INSERT INTO `lcn_region` VALUES (585, 59, '泰宁县', 3);
INSERT INTO `lcn_region` VALUES (586, 59, '建宁县', 3);
INSERT INTO `lcn_region` VALUES (587, 60, '思明区', 3);
INSERT INTO `lcn_region` VALUES (588, 60, '海沧区', 3);
INSERT INTO `lcn_region` VALUES (589, 60, '湖里区', 3);
INSERT INTO `lcn_region` VALUES (590, 60, '集美区', 3);
INSERT INTO `lcn_region` VALUES (591, 60, '同安区', 3);
INSERT INTO `lcn_region` VALUES (592, 60, '翔安区', 3);
INSERT INTO `lcn_region` VALUES (593, 61, '芗城区', 3);
INSERT INTO `lcn_region` VALUES (594, 61, '龙文区', 3);
INSERT INTO `lcn_region` VALUES (595, 61, '龙海市', 3);
INSERT INTO `lcn_region` VALUES (596, 61, '云霄县', 3);
INSERT INTO `lcn_region` VALUES (597, 61, '漳浦县', 3);
INSERT INTO `lcn_region` VALUES (598, 61, '诏安县', 3);
INSERT INTO `lcn_region` VALUES (599, 61, '长泰县', 3);
INSERT INTO `lcn_region` VALUES (600, 61, '东山县', 3);
INSERT INTO `lcn_region` VALUES (601, 61, '南靖县', 3);
INSERT INTO `lcn_region` VALUES (602, 61, '平和县', 3);
INSERT INTO `lcn_region` VALUES (603, 61, '华安县', 3);
INSERT INTO `lcn_region` VALUES (604, 62, '皋兰县', 3);
INSERT INTO `lcn_region` VALUES (605, 62, '城关区', 3);
INSERT INTO `lcn_region` VALUES (606, 62, '七里河区', 3);
INSERT INTO `lcn_region` VALUES (607, 62, '西固区', 3);
INSERT INTO `lcn_region` VALUES (608, 62, '安宁区', 3);
INSERT INTO `lcn_region` VALUES (609, 62, '红古区', 3);
INSERT INTO `lcn_region` VALUES (610, 62, '永登县', 3);
INSERT INTO `lcn_region` VALUES (611, 62, '榆中县', 3);
INSERT INTO `lcn_region` VALUES (612, 63, '白银区', 3);
INSERT INTO `lcn_region` VALUES (613, 63, '平川区', 3);
INSERT INTO `lcn_region` VALUES (614, 63, '会宁县', 3);
INSERT INTO `lcn_region` VALUES (615, 63, '景泰县', 3);
INSERT INTO `lcn_region` VALUES (616, 63, '靖远县', 3);
INSERT INTO `lcn_region` VALUES (617, 64, '临洮县', 3);
INSERT INTO `lcn_region` VALUES (618, 64, '陇西县', 3);
INSERT INTO `lcn_region` VALUES (619, 64, '通渭县', 3);
INSERT INTO `lcn_region` VALUES (620, 64, '渭源县', 3);
INSERT INTO `lcn_region` VALUES (621, 64, '漳县', 3);
INSERT INTO `lcn_region` VALUES (622, 64, '岷县', 3);
INSERT INTO `lcn_region` VALUES (623, 64, '安定区', 3);
INSERT INTO `lcn_region` VALUES (624, 64, '安定区', 3);
INSERT INTO `lcn_region` VALUES (625, 65, '合作市', 3);
INSERT INTO `lcn_region` VALUES (626, 65, '临潭县', 3);
INSERT INTO `lcn_region` VALUES (627, 65, '卓尼县', 3);
INSERT INTO `lcn_region` VALUES (628, 65, '舟曲县', 3);
INSERT INTO `lcn_region` VALUES (629, 65, '迭部县', 3);
INSERT INTO `lcn_region` VALUES (630, 65, '玛曲县', 3);
INSERT INTO `lcn_region` VALUES (631, 65, '碌曲县', 3);
INSERT INTO `lcn_region` VALUES (632, 65, '夏河县', 3);
INSERT INTO `lcn_region` VALUES (633, 66, '嘉峪关市', 3);
INSERT INTO `lcn_region` VALUES (634, 67, '金川区', 3);
INSERT INTO `lcn_region` VALUES (635, 67, '永昌县', 3);
INSERT INTO `lcn_region` VALUES (636, 68, '肃州区', 3);
INSERT INTO `lcn_region` VALUES (637, 68, '玉门市', 3);
INSERT INTO `lcn_region` VALUES (638, 68, '敦煌市', 3);
INSERT INTO `lcn_region` VALUES (639, 68, '金塔县', 3);
INSERT INTO `lcn_region` VALUES (640, 68, '瓜州县', 3);
INSERT INTO `lcn_region` VALUES (641, 68, '肃北', 3);
INSERT INTO `lcn_region` VALUES (642, 68, '阿克塞', 3);
INSERT INTO `lcn_region` VALUES (643, 69, '临夏市', 3);
INSERT INTO `lcn_region` VALUES (644, 69, '临夏县', 3);
INSERT INTO `lcn_region` VALUES (645, 69, '康乐县', 3);
INSERT INTO `lcn_region` VALUES (646, 69, '永靖县', 3);
INSERT INTO `lcn_region` VALUES (647, 69, '广河县', 3);
INSERT INTO `lcn_region` VALUES (648, 69, '和政县', 3);
INSERT INTO `lcn_region` VALUES (649, 69, '东乡族自治县', 3);
INSERT INTO `lcn_region` VALUES (650, 69, '积石山', 3);
INSERT INTO `lcn_region` VALUES (651, 70, '成县', 3);
INSERT INTO `lcn_region` VALUES (652, 70, '徽县', 3);
INSERT INTO `lcn_region` VALUES (653, 70, '康县', 3);
INSERT INTO `lcn_region` VALUES (654, 70, '礼县', 3);
INSERT INTO `lcn_region` VALUES (655, 70, '两当县', 3);
INSERT INTO `lcn_region` VALUES (656, 70, '文县', 3);
INSERT INTO `lcn_region` VALUES (657, 70, '西和县', 3);
INSERT INTO `lcn_region` VALUES (658, 70, '宕昌县', 3);
INSERT INTO `lcn_region` VALUES (659, 70, '武都区', 3);
INSERT INTO `lcn_region` VALUES (660, 71, '崇信县', 3);
INSERT INTO `lcn_region` VALUES (661, 71, '华亭县', 3);
INSERT INTO `lcn_region` VALUES (662, 71, '静宁县', 3);
INSERT INTO `lcn_region` VALUES (663, 71, '灵台县', 3);
INSERT INTO `lcn_region` VALUES (664, 71, '崆峒区', 3);
INSERT INTO `lcn_region` VALUES (665, 71, '庄浪县', 3);
INSERT INTO `lcn_region` VALUES (666, 71, '泾川县', 3);
INSERT INTO `lcn_region` VALUES (667, 72, '合水县', 3);
INSERT INTO `lcn_region` VALUES (668, 72, '华池县', 3);
INSERT INTO `lcn_region` VALUES (669, 72, '环县', 3);
INSERT INTO `lcn_region` VALUES (670, 72, '宁县', 3);
INSERT INTO `lcn_region` VALUES (671, 72, '庆城县', 3);
INSERT INTO `lcn_region` VALUES (672, 72, '西峰区', 3);
INSERT INTO `lcn_region` VALUES (673, 72, '镇原县', 3);
INSERT INTO `lcn_region` VALUES (674, 72, '正宁县', 3);
INSERT INTO `lcn_region` VALUES (675, 73, '甘谷县', 3);
INSERT INTO `lcn_region` VALUES (676, 73, '秦安县', 3);
INSERT INTO `lcn_region` VALUES (677, 73, '清水县', 3);
INSERT INTO `lcn_region` VALUES (678, 73, '秦州区', 3);
INSERT INTO `lcn_region` VALUES (679, 73, '麦积区', 3);
INSERT INTO `lcn_region` VALUES (680, 73, '武山县', 3);
INSERT INTO `lcn_region` VALUES (681, 73, '张家川', 3);
INSERT INTO `lcn_region` VALUES (682, 74, '古浪县', 3);
INSERT INTO `lcn_region` VALUES (683, 74, '民勤县', 3);
INSERT INTO `lcn_region` VALUES (684, 74, '天祝', 3);
INSERT INTO `lcn_region` VALUES (685, 74, '凉州区', 3);
INSERT INTO `lcn_region` VALUES (686, 75, '高台县', 3);
INSERT INTO `lcn_region` VALUES (687, 75, '临泽县', 3);
INSERT INTO `lcn_region` VALUES (688, 75, '民乐县', 3);
INSERT INTO `lcn_region` VALUES (689, 75, '山丹县', 3);
INSERT INTO `lcn_region` VALUES (690, 75, '肃南', 3);
INSERT INTO `lcn_region` VALUES (691, 75, '甘州区', 3);
INSERT INTO `lcn_region` VALUES (692, 76, '从化市', 3);
INSERT INTO `lcn_region` VALUES (693, 76, '天河区', 3);
INSERT INTO `lcn_region` VALUES (694, 76, '东山区', 3);
INSERT INTO `lcn_region` VALUES (695, 76, '白云区', 3);
INSERT INTO `lcn_region` VALUES (696, 76, '海珠区', 3);
INSERT INTO `lcn_region` VALUES (697, 76, '荔湾区', 3);
INSERT INTO `lcn_region` VALUES (698, 76, '越秀区', 3);
INSERT INTO `lcn_region` VALUES (699, 76, '黄埔区', 3);
INSERT INTO `lcn_region` VALUES (700, 76, '番禺区', 3);
INSERT INTO `lcn_region` VALUES (701, 76, '花都区', 3);
INSERT INTO `lcn_region` VALUES (702, 76, '增城区', 3);
INSERT INTO `lcn_region` VALUES (703, 76, '从化区', 3);
INSERT INTO `lcn_region` VALUES (704, 76, '市郊', 3);
INSERT INTO `lcn_region` VALUES (705, 77, '福田区', 3);
INSERT INTO `lcn_region` VALUES (706, 77, '罗湖区', 3);
INSERT INTO `lcn_region` VALUES (707, 77, '南山区', 3);
INSERT INTO `lcn_region` VALUES (708, 77, '宝安区', 3);
INSERT INTO `lcn_region` VALUES (709, 77, '龙岗区', 3);
INSERT INTO `lcn_region` VALUES (710, 77, '盐田区', 3);
INSERT INTO `lcn_region` VALUES (711, 78, '湘桥区', 3);
INSERT INTO `lcn_region` VALUES (712, 78, '潮安县', 3);
INSERT INTO `lcn_region` VALUES (713, 78, '饶平县', 3);
INSERT INTO `lcn_region` VALUES (714, 79, '南城区', 3);
INSERT INTO `lcn_region` VALUES (715, 79, '东城区', 3);
INSERT INTO `lcn_region` VALUES (716, 79, '万江区', 3);
INSERT INTO `lcn_region` VALUES (717, 79, '莞城区', 3);
INSERT INTO `lcn_region` VALUES (718, 79, '石龙镇', 3);
INSERT INTO `lcn_region` VALUES (719, 79, '虎门镇', 3);
INSERT INTO `lcn_region` VALUES (720, 79, '麻涌镇', 3);
INSERT INTO `lcn_region` VALUES (721, 79, '道滘镇', 3);
INSERT INTO `lcn_region` VALUES (722, 79, '石碣镇', 3);
INSERT INTO `lcn_region` VALUES (723, 79, '沙田镇', 3);
INSERT INTO `lcn_region` VALUES (724, 79, '望牛墩镇', 3);
INSERT INTO `lcn_region` VALUES (725, 79, '洪梅镇', 3);
INSERT INTO `lcn_region` VALUES (726, 79, '茶山镇', 3);
INSERT INTO `lcn_region` VALUES (727, 79, '寮步镇', 3);
INSERT INTO `lcn_region` VALUES (728, 79, '大岭山镇', 3);
INSERT INTO `lcn_region` VALUES (729, 79, '大朗镇', 3);
INSERT INTO `lcn_region` VALUES (730, 79, '黄江镇', 3);
INSERT INTO `lcn_region` VALUES (731, 79, '樟木头', 3);
INSERT INTO `lcn_region` VALUES (732, 79, '凤岗镇', 3);
INSERT INTO `lcn_region` VALUES (733, 79, '塘厦镇', 3);
INSERT INTO `lcn_region` VALUES (734, 79, '谢岗镇', 3);
INSERT INTO `lcn_region` VALUES (735, 79, '厚街镇', 3);
INSERT INTO `lcn_region` VALUES (736, 79, '清溪镇', 3);
INSERT INTO `lcn_region` VALUES (737, 79, '常平镇', 3);
INSERT INTO `lcn_region` VALUES (738, 79, '桥头镇', 3);
INSERT INTO `lcn_region` VALUES (739, 79, '横沥镇', 3);
INSERT INTO `lcn_region` VALUES (740, 79, '东坑镇', 3);
INSERT INTO `lcn_region` VALUES (741, 79, '企石镇', 3);
INSERT INTO `lcn_region` VALUES (742, 79, '石排镇', 3);
INSERT INTO `lcn_region` VALUES (743, 79, '长安镇', 3);
INSERT INTO `lcn_region` VALUES (744, 79, '中堂镇', 3);
INSERT INTO `lcn_region` VALUES (745, 79, '高埗镇', 3);
INSERT INTO `lcn_region` VALUES (746, 80, '禅城区', 3);
INSERT INTO `lcn_region` VALUES (747, 80, '南海区', 3);
INSERT INTO `lcn_region` VALUES (748, 80, '顺德区', 3);
INSERT INTO `lcn_region` VALUES (749, 80, '三水区', 3);
INSERT INTO `lcn_region` VALUES (750, 80, '高明区', 3);
INSERT INTO `lcn_region` VALUES (751, 81, '东源县', 3);
INSERT INTO `lcn_region` VALUES (752, 81, '和平县', 3);
INSERT INTO `lcn_region` VALUES (753, 81, '源城区', 3);
INSERT INTO `lcn_region` VALUES (754, 81, '连平县', 3);
INSERT INTO `lcn_region` VALUES (755, 81, '龙川县', 3);
INSERT INTO `lcn_region` VALUES (756, 81, '紫金县', 3);
INSERT INTO `lcn_region` VALUES (757, 82, '惠阳区', 3);
INSERT INTO `lcn_region` VALUES (758, 82, '惠城区', 3);
INSERT INTO `lcn_region` VALUES (759, 82, '大亚湾', 3);
INSERT INTO `lcn_region` VALUES (760, 82, '博罗县', 3);
INSERT INTO `lcn_region` VALUES (761, 82, '惠东县', 3);
INSERT INTO `lcn_region` VALUES (762, 82, '龙门县', 3);
INSERT INTO `lcn_region` VALUES (763, 83, '江海区', 3);
INSERT INTO `lcn_region` VALUES (764, 83, '蓬江区', 3);
INSERT INTO `lcn_region` VALUES (765, 83, '新会区', 3);
INSERT INTO `lcn_region` VALUES (766, 83, '台山市', 3);
INSERT INTO `lcn_region` VALUES (767, 83, '开平市', 3);
INSERT INTO `lcn_region` VALUES (768, 83, '鹤山市', 3);
INSERT INTO `lcn_region` VALUES (769, 83, '恩平市', 3);
INSERT INTO `lcn_region` VALUES (770, 84, '榕城区', 3);
INSERT INTO `lcn_region` VALUES (771, 84, '普宁市', 3);
INSERT INTO `lcn_region` VALUES (772, 84, '揭东县', 3);
INSERT INTO `lcn_region` VALUES (773, 84, '揭西县', 3);
INSERT INTO `lcn_region` VALUES (774, 84, '惠来县', 3);
INSERT INTO `lcn_region` VALUES (775, 85, '茂南区', 3);
INSERT INTO `lcn_region` VALUES (776, 85, '茂港区', 3);
INSERT INTO `lcn_region` VALUES (777, 85, '高州市', 3);
INSERT INTO `lcn_region` VALUES (778, 85, '化州市', 3);
INSERT INTO `lcn_region` VALUES (779, 85, '信宜市', 3);
INSERT INTO `lcn_region` VALUES (780, 85, '电白县', 3);
INSERT INTO `lcn_region` VALUES (781, 86, '梅县', 3);
INSERT INTO `lcn_region` VALUES (782, 86, '梅江区', 3);
INSERT INTO `lcn_region` VALUES (783, 86, '兴宁市', 3);
INSERT INTO `lcn_region` VALUES (784, 86, '大埔县', 3);
INSERT INTO `lcn_region` VALUES (785, 86, '丰顺县', 3);
INSERT INTO `lcn_region` VALUES (786, 86, '五华县', 3);
INSERT INTO `lcn_region` VALUES (787, 86, '平远县', 3);
INSERT INTO `lcn_region` VALUES (788, 86, '蕉岭县', 3);
INSERT INTO `lcn_region` VALUES (789, 87, '清城区', 3);
INSERT INTO `lcn_region` VALUES (790, 87, '英德市', 3);
INSERT INTO `lcn_region` VALUES (791, 87, '连州市', 3);
INSERT INTO `lcn_region` VALUES (792, 87, '佛冈县', 3);
INSERT INTO `lcn_region` VALUES (793, 87, '阳山县', 3);
INSERT INTO `lcn_region` VALUES (794, 87, '清新县', 3);
INSERT INTO `lcn_region` VALUES (795, 87, '连山', 3);
INSERT INTO `lcn_region` VALUES (796, 87, '连南', 3);
INSERT INTO `lcn_region` VALUES (797, 88, '南澳县', 3);
INSERT INTO `lcn_region` VALUES (798, 88, '潮阳区', 3);
INSERT INTO `lcn_region` VALUES (799, 88, '澄海区', 3);
INSERT INTO `lcn_region` VALUES (800, 88, '龙湖区', 3);
INSERT INTO `lcn_region` VALUES (801, 88, '金平区', 3);
INSERT INTO `lcn_region` VALUES (802, 88, '濠江区', 3);
INSERT INTO `lcn_region` VALUES (803, 88, '潮南区', 3);
INSERT INTO `lcn_region` VALUES (804, 89, '城区', 3);
INSERT INTO `lcn_region` VALUES (805, 89, '陆丰市', 3);
INSERT INTO `lcn_region` VALUES (806, 89, '海丰县', 3);
INSERT INTO `lcn_region` VALUES (807, 89, '陆河县', 3);
INSERT INTO `lcn_region` VALUES (808, 90, '曲江县', 3);
INSERT INTO `lcn_region` VALUES (809, 90, '浈江区', 3);
INSERT INTO `lcn_region` VALUES (810, 90, '武江区', 3);
INSERT INTO `lcn_region` VALUES (811, 90, '曲江区', 3);
INSERT INTO `lcn_region` VALUES (812, 90, '乐昌市', 3);
INSERT INTO `lcn_region` VALUES (813, 90, '南雄市', 3);
INSERT INTO `lcn_region` VALUES (814, 90, '始兴县', 3);
INSERT INTO `lcn_region` VALUES (815, 90, '仁化县', 3);
INSERT INTO `lcn_region` VALUES (816, 90, '翁源县', 3);
INSERT INTO `lcn_region` VALUES (817, 90, '新丰县', 3);
INSERT INTO `lcn_region` VALUES (818, 90, '乳源', 3);
INSERT INTO `lcn_region` VALUES (819, 91, '江城区', 3);
INSERT INTO `lcn_region` VALUES (820, 91, '阳春市', 3);
INSERT INTO `lcn_region` VALUES (821, 91, '阳西县', 3);
INSERT INTO `lcn_region` VALUES (822, 91, '阳东县', 3);
INSERT INTO `lcn_region` VALUES (823, 92, '云城区', 3);
INSERT INTO `lcn_region` VALUES (824, 92, '罗定市', 3);
INSERT INTO `lcn_region` VALUES (825, 92, '新兴县', 3);
INSERT INTO `lcn_region` VALUES (826, 92, '郁南县', 3);
INSERT INTO `lcn_region` VALUES (827, 92, '云安县', 3);
INSERT INTO `lcn_region` VALUES (828, 93, '赤坎区', 3);
INSERT INTO `lcn_region` VALUES (829, 93, '霞山区', 3);
INSERT INTO `lcn_region` VALUES (830, 93, '坡头区', 3);
INSERT INTO `lcn_region` VALUES (831, 93, '麻章区', 3);
INSERT INTO `lcn_region` VALUES (832, 93, '廉江市', 3);
INSERT INTO `lcn_region` VALUES (833, 93, '雷州市', 3);
INSERT INTO `lcn_region` VALUES (834, 93, '吴川市', 3);
INSERT INTO `lcn_region` VALUES (835, 93, '遂溪县', 3);
INSERT INTO `lcn_region` VALUES (836, 93, '徐闻县', 3);
INSERT INTO `lcn_region` VALUES (837, 94, '肇庆市', 3);
INSERT INTO `lcn_region` VALUES (838, 94, '高要市', 3);
INSERT INTO `lcn_region` VALUES (839, 94, '四会市', 3);
INSERT INTO `lcn_region` VALUES (840, 94, '广宁县', 3);
INSERT INTO `lcn_region` VALUES (841, 94, '怀集县', 3);
INSERT INTO `lcn_region` VALUES (842, 94, '封开县', 3);
INSERT INTO `lcn_region` VALUES (843, 94, '德庆县', 3);
INSERT INTO `lcn_region` VALUES (844, 95, '石岐街道', 3);
INSERT INTO `lcn_region` VALUES (845, 95, '东区街道', 3);
INSERT INTO `lcn_region` VALUES (846, 95, '西区街道', 3);
INSERT INTO `lcn_region` VALUES (847, 95, '环城街道', 3);
INSERT INTO `lcn_region` VALUES (848, 95, '中山港街道', 3);
INSERT INTO `lcn_region` VALUES (849, 95, '五桂山街道', 3);
INSERT INTO `lcn_region` VALUES (850, 96, '香洲区', 3);
INSERT INTO `lcn_region` VALUES (851, 96, '斗门区', 3);
INSERT INTO `lcn_region` VALUES (852, 96, '金湾区', 3);
INSERT INTO `lcn_region` VALUES (853, 97, '邕宁区', 3);
INSERT INTO `lcn_region` VALUES (854, 97, '青秀区', 3);
INSERT INTO `lcn_region` VALUES (855, 97, '兴宁区', 3);
INSERT INTO `lcn_region` VALUES (856, 97, '良庆区', 3);
INSERT INTO `lcn_region` VALUES (857, 97, '西乡塘区', 3);
INSERT INTO `lcn_region` VALUES (858, 97, '江南区', 3);
INSERT INTO `lcn_region` VALUES (859, 97, '武鸣县', 3);
INSERT INTO `lcn_region` VALUES (860, 97, '隆安县', 3);
INSERT INTO `lcn_region` VALUES (861, 97, '马山县', 3);
INSERT INTO `lcn_region` VALUES (862, 97, '上林县', 3);
INSERT INTO `lcn_region` VALUES (863, 97, '宾阳县', 3);
INSERT INTO `lcn_region` VALUES (864, 97, '横县', 3);
INSERT INTO `lcn_region` VALUES (865, 98, '秀峰区', 3);
INSERT INTO `lcn_region` VALUES (866, 98, '叠彩区', 3);
INSERT INTO `lcn_region` VALUES (867, 98, '象山区', 3);
INSERT INTO `lcn_region` VALUES (868, 98, '七星区', 3);
INSERT INTO `lcn_region` VALUES (869, 98, '雁山区', 3);
INSERT INTO `lcn_region` VALUES (870, 98, '阳朔县', 3);
INSERT INTO `lcn_region` VALUES (871, 98, '临桂县', 3);
INSERT INTO `lcn_region` VALUES (872, 98, '灵川县', 3);
INSERT INTO `lcn_region` VALUES (873, 98, '全州县', 3);
INSERT INTO `lcn_region` VALUES (874, 98, '平乐县', 3);
INSERT INTO `lcn_region` VALUES (875, 98, '兴安县', 3);
INSERT INTO `lcn_region` VALUES (876, 98, '灌阳县', 3);
INSERT INTO `lcn_region` VALUES (877, 98, '荔浦县', 3);
INSERT INTO `lcn_region` VALUES (878, 98, '资源县', 3);
INSERT INTO `lcn_region` VALUES (879, 98, '永福县', 3);
INSERT INTO `lcn_region` VALUES (880, 98, '龙胜', 3);
INSERT INTO `lcn_region` VALUES (881, 98, '恭城', 3);
INSERT INTO `lcn_region` VALUES (882, 99, '右江区', 3);
INSERT INTO `lcn_region` VALUES (883, 99, '凌云县', 3);
INSERT INTO `lcn_region` VALUES (884, 99, '平果县', 3);
INSERT INTO `lcn_region` VALUES (885, 99, '西林县', 3);
INSERT INTO `lcn_region` VALUES (886, 99, '乐业县', 3);
INSERT INTO `lcn_region` VALUES (887, 99, '德保县', 3);
INSERT INTO `lcn_region` VALUES (888, 99, '田林县', 3);
INSERT INTO `lcn_region` VALUES (889, 99, '田阳县', 3);
INSERT INTO `lcn_region` VALUES (890, 99, '靖西县', 3);
INSERT INTO `lcn_region` VALUES (891, 99, '田东县', 3);
INSERT INTO `lcn_region` VALUES (892, 99, '那坡县', 3);
INSERT INTO `lcn_region` VALUES (893, 99, '隆林', 3);
INSERT INTO `lcn_region` VALUES (894, 100, '海城区', 3);
INSERT INTO `lcn_region` VALUES (895, 100, '银海区', 3);
INSERT INTO `lcn_region` VALUES (896, 100, '铁山港区', 3);
INSERT INTO `lcn_region` VALUES (897, 100, '合浦县', 3);
INSERT INTO `lcn_region` VALUES (898, 101, '江州区', 3);
INSERT INTO `lcn_region` VALUES (899, 101, '凭祥市', 3);
INSERT INTO `lcn_region` VALUES (900, 101, '宁明县', 3);
INSERT INTO `lcn_region` VALUES (901, 101, '扶绥县', 3);
INSERT INTO `lcn_region` VALUES (902, 101, '龙州县', 3);
INSERT INTO `lcn_region` VALUES (903, 101, '大新县', 3);
INSERT INTO `lcn_region` VALUES (904, 101, '天等县', 3);
INSERT INTO `lcn_region` VALUES (905, 102, '港口区', 3);
INSERT INTO `lcn_region` VALUES (906, 102, '防城区', 3);
INSERT INTO `lcn_region` VALUES (907, 102, '东兴市', 3);
INSERT INTO `lcn_region` VALUES (908, 102, '上思县', 3);
INSERT INTO `lcn_region` VALUES (909, 103, '港北区', 3);
INSERT INTO `lcn_region` VALUES (910, 103, '港南区', 3);
INSERT INTO `lcn_region` VALUES (911, 103, '覃塘区', 3);
INSERT INTO `lcn_region` VALUES (912, 103, '桂平市', 3);
INSERT INTO `lcn_region` VALUES (913, 103, '平南县', 3);
INSERT INTO `lcn_region` VALUES (914, 104, '金城江区', 3);
INSERT INTO `lcn_region` VALUES (915, 104, '宜州市', 3);
INSERT INTO `lcn_region` VALUES (916, 104, '天峨县', 3);
INSERT INTO `lcn_region` VALUES (917, 104, '凤山县', 3);
INSERT INTO `lcn_region` VALUES (918, 104, '南丹县', 3);
INSERT INTO `lcn_region` VALUES (919, 104, '东兰县', 3);
INSERT INTO `lcn_region` VALUES (920, 104, '都安', 3);
INSERT INTO `lcn_region` VALUES (921, 104, '罗城', 3);
INSERT INTO `lcn_region` VALUES (922, 104, '巴马', 3);
INSERT INTO `lcn_region` VALUES (923, 104, '环江', 3);
INSERT INTO `lcn_region` VALUES (924, 104, '大化', 3);
INSERT INTO `lcn_region` VALUES (925, 105, '八步区', 3);
INSERT INTO `lcn_region` VALUES (926, 105, '钟山县', 3);
INSERT INTO `lcn_region` VALUES (927, 105, '昭平县', 3);
INSERT INTO `lcn_region` VALUES (928, 105, '富川', 3);
INSERT INTO `lcn_region` VALUES (929, 106, '兴宾区', 3);
INSERT INTO `lcn_region` VALUES (930, 106, '合山市', 3);
INSERT INTO `lcn_region` VALUES (931, 106, '象州县', 3);
INSERT INTO `lcn_region` VALUES (932, 106, '武宣县', 3);
INSERT INTO `lcn_region` VALUES (933, 106, '忻城县', 3);
INSERT INTO `lcn_region` VALUES (934, 106, '金秀', 3);
INSERT INTO `lcn_region` VALUES (935, 107, '城中区', 3);
INSERT INTO `lcn_region` VALUES (936, 107, '鱼峰区', 3);
INSERT INTO `lcn_region` VALUES (937, 107, '柳北区', 3);
INSERT INTO `lcn_region` VALUES (938, 107, '柳南区', 3);
INSERT INTO `lcn_region` VALUES (939, 107, '柳江县', 3);
INSERT INTO `lcn_region` VALUES (940, 107, '柳城县', 3);
INSERT INTO `lcn_region` VALUES (941, 107, '鹿寨县', 3);
INSERT INTO `lcn_region` VALUES (942, 107, '融安县', 3);
INSERT INTO `lcn_region` VALUES (943, 107, '融水', 3);
INSERT INTO `lcn_region` VALUES (944, 107, '三江', 3);
INSERT INTO `lcn_region` VALUES (945, 108, '钦南区', 3);
INSERT INTO `lcn_region` VALUES (946, 108, '钦北区', 3);
INSERT INTO `lcn_region` VALUES (947, 108, '灵山县', 3);
INSERT INTO `lcn_region` VALUES (948, 108, '浦北县', 3);
INSERT INTO `lcn_region` VALUES (949, 109, '万秀区', 3);
INSERT INTO `lcn_region` VALUES (950, 109, '蝶山区', 3);
INSERT INTO `lcn_region` VALUES (951, 109, '长洲区', 3);
INSERT INTO `lcn_region` VALUES (952, 109, '岑溪市', 3);
INSERT INTO `lcn_region` VALUES (953, 109, '苍梧县', 3);
INSERT INTO `lcn_region` VALUES (954, 109, '藤县', 3);
INSERT INTO `lcn_region` VALUES (955, 109, '蒙山县', 3);
INSERT INTO `lcn_region` VALUES (956, 110, '玉州区', 3);
INSERT INTO `lcn_region` VALUES (957, 110, '北流市', 3);
INSERT INTO `lcn_region` VALUES (958, 110, '容县', 3);
INSERT INTO `lcn_region` VALUES (959, 110, '陆川县', 3);
INSERT INTO `lcn_region` VALUES (960, 110, '博白县', 3);
INSERT INTO `lcn_region` VALUES (961, 110, '兴业县', 3);
INSERT INTO `lcn_region` VALUES (962, 111, '南明区', 3);
INSERT INTO `lcn_region` VALUES (963, 111, '云岩区', 3);
INSERT INTO `lcn_region` VALUES (964, 111, '花溪区', 3);
INSERT INTO `lcn_region` VALUES (965, 111, '乌当区', 3);
INSERT INTO `lcn_region` VALUES (966, 111, '白云区', 3);
INSERT INTO `lcn_region` VALUES (967, 111, '小河区', 3);
INSERT INTO `lcn_region` VALUES (968, 111, '金阳新区', 3);
INSERT INTO `lcn_region` VALUES (969, 111, '新天园区', 3);
INSERT INTO `lcn_region` VALUES (970, 111, '清镇市', 3);
INSERT INTO `lcn_region` VALUES (971, 111, '开阳县', 3);
INSERT INTO `lcn_region` VALUES (972, 111, '修文县', 3);
INSERT INTO `lcn_region` VALUES (973, 111, '息烽县', 3);
INSERT INTO `lcn_region` VALUES (974, 112, '西秀区', 3);
INSERT INTO `lcn_region` VALUES (975, 112, '关岭', 3);
INSERT INTO `lcn_region` VALUES (976, 112, '镇宁', 3);
INSERT INTO `lcn_region` VALUES (977, 112, '紫云', 3);
INSERT INTO `lcn_region` VALUES (978, 112, '平坝县', 3);
INSERT INTO `lcn_region` VALUES (979, 112, '普定县', 3);
INSERT INTO `lcn_region` VALUES (980, 113, '毕节市', 3);
INSERT INTO `lcn_region` VALUES (981, 113, '大方县', 3);
INSERT INTO `lcn_region` VALUES (982, 113, '黔西县', 3);
INSERT INTO `lcn_region` VALUES (983, 113, '金沙县', 3);
INSERT INTO `lcn_region` VALUES (984, 113, '织金县', 3);
INSERT INTO `lcn_region` VALUES (985, 113, '纳雍县', 3);
INSERT INTO `lcn_region` VALUES (986, 113, '赫章县', 3);
INSERT INTO `lcn_region` VALUES (987, 113, '威宁', 3);
INSERT INTO `lcn_region` VALUES (988, 114, '钟山区', 3);
INSERT INTO `lcn_region` VALUES (989, 114, '六枝特区', 3);
INSERT INTO `lcn_region` VALUES (990, 114, '水城县', 3);
INSERT INTO `lcn_region` VALUES (991, 114, '盘县', 3);
INSERT INTO `lcn_region` VALUES (992, 115, '凯里市', 3);
INSERT INTO `lcn_region` VALUES (993, 115, '黄平县', 3);
INSERT INTO `lcn_region` VALUES (994, 115, '施秉县', 3);
INSERT INTO `lcn_region` VALUES (995, 115, '三穗县', 3);
INSERT INTO `lcn_region` VALUES (996, 115, '镇远县', 3);
INSERT INTO `lcn_region` VALUES (997, 115, '岑巩县', 3);
INSERT INTO `lcn_region` VALUES (998, 115, '天柱县', 3);
INSERT INTO `lcn_region` VALUES (999, 115, '锦屏县', 3);
INSERT INTO `lcn_region` VALUES (1000, 115, '剑河县', 3);
INSERT INTO `lcn_region` VALUES (1001, 115, '台江县', 3);
INSERT INTO `lcn_region` VALUES (1002, 115, '黎平县', 3);
INSERT INTO `lcn_region` VALUES (1003, 115, '榕江县', 3);
INSERT INTO `lcn_region` VALUES (1004, 115, '从江县', 3);
INSERT INTO `lcn_region` VALUES (1005, 115, '雷山县', 3);
INSERT INTO `lcn_region` VALUES (1006, 115, '麻江县', 3);
INSERT INTO `lcn_region` VALUES (1007, 115, '丹寨县', 3);
INSERT INTO `lcn_region` VALUES (1008, 116, '都匀市', 3);
INSERT INTO `lcn_region` VALUES (1009, 116, '福泉市', 3);
INSERT INTO `lcn_region` VALUES (1010, 116, '荔波县', 3);
INSERT INTO `lcn_region` VALUES (1011, 116, '贵定县', 3);
INSERT INTO `lcn_region` VALUES (1012, 116, '瓮安县', 3);
INSERT INTO `lcn_region` VALUES (1013, 116, '独山县', 3);
INSERT INTO `lcn_region` VALUES (1014, 116, '平塘县', 3);
INSERT INTO `lcn_region` VALUES (1015, 116, '罗甸县', 3);
INSERT INTO `lcn_region` VALUES (1016, 116, '长顺县', 3);
INSERT INTO `lcn_region` VALUES (1017, 116, '龙里县', 3);
INSERT INTO `lcn_region` VALUES (1018, 116, '惠水县', 3);
INSERT INTO `lcn_region` VALUES (1019, 116, '三都', 3);
INSERT INTO `lcn_region` VALUES (1020, 117, '兴义市', 3);
INSERT INTO `lcn_region` VALUES (1021, 117, '兴仁县', 3);
INSERT INTO `lcn_region` VALUES (1022, 117, '普安县', 3);
INSERT INTO `lcn_region` VALUES (1023, 117, '晴隆县', 3);
INSERT INTO `lcn_region` VALUES (1024, 117, '贞丰县', 3);
INSERT INTO `lcn_region` VALUES (1025, 117, '望谟县', 3);
INSERT INTO `lcn_region` VALUES (1026, 117, '册亨县', 3);
INSERT INTO `lcn_region` VALUES (1027, 117, '安龙县', 3);
INSERT INTO `lcn_region` VALUES (1028, 118, '铜仁市', 3);
INSERT INTO `lcn_region` VALUES (1029, 118, '江口县', 3);
INSERT INTO `lcn_region` VALUES (1030, 118, '石阡县', 3);
INSERT INTO `lcn_region` VALUES (1031, 118, '思南县', 3);
INSERT INTO `lcn_region` VALUES (1032, 118, '德江县', 3);
INSERT INTO `lcn_region` VALUES (1033, 118, '玉屏', 3);
INSERT INTO `lcn_region` VALUES (1034, 118, '印江', 3);
INSERT INTO `lcn_region` VALUES (1035, 118, '沿河', 3);
INSERT INTO `lcn_region` VALUES (1036, 118, '松桃', 3);
INSERT INTO `lcn_region` VALUES (1037, 118, '万山特区', 3);
INSERT INTO `lcn_region` VALUES (1038, 119, '红花岗区', 3);
INSERT INTO `lcn_region` VALUES (1039, 119, '务川县', 3);
INSERT INTO `lcn_region` VALUES (1040, 119, '道真县', 3);
INSERT INTO `lcn_region` VALUES (1041, 119, '汇川区', 3);
INSERT INTO `lcn_region` VALUES (1042, 119, '赤水市', 3);
INSERT INTO `lcn_region` VALUES (1043, 119, '仁怀市', 3);
INSERT INTO `lcn_region` VALUES (1044, 119, '遵义县', 3);
INSERT INTO `lcn_region` VALUES (1045, 119, '桐梓县', 3);
INSERT INTO `lcn_region` VALUES (1046, 119, '绥阳县', 3);
INSERT INTO `lcn_region` VALUES (1047, 119, '正安县', 3);
INSERT INTO `lcn_region` VALUES (1048, 119, '凤冈县', 3);
INSERT INTO `lcn_region` VALUES (1049, 119, '湄潭县', 3);
INSERT INTO `lcn_region` VALUES (1050, 119, '余庆县', 3);
INSERT INTO `lcn_region` VALUES (1051, 119, '习水县', 3);
INSERT INTO `lcn_region` VALUES (1052, 119, '道真', 3);
INSERT INTO `lcn_region` VALUES (1053, 119, '务川', 3);
INSERT INTO `lcn_region` VALUES (1054, 120, '秀英区', 3);
INSERT INTO `lcn_region` VALUES (1055, 120, '龙华区', 3);
INSERT INTO `lcn_region` VALUES (1056, 120, '琼山区', 3);
INSERT INTO `lcn_region` VALUES (1057, 120, '美兰区', 3);
INSERT INTO `lcn_region` VALUES (1058, 137, '市区', 3);
INSERT INTO `lcn_region` VALUES (1059, 137, '洋浦开发区', 3);
INSERT INTO `lcn_region` VALUES (1060, 137, '那大镇', 3);
INSERT INTO `lcn_region` VALUES (1061, 137, '王五镇', 3);
INSERT INTO `lcn_region` VALUES (1062, 137, '雅星镇', 3);
INSERT INTO `lcn_region` VALUES (1063, 137, '大成镇', 3);
INSERT INTO `lcn_region` VALUES (1064, 137, '中和镇', 3);
INSERT INTO `lcn_region` VALUES (1065, 137, '峨蔓镇', 3);
INSERT INTO `lcn_region` VALUES (1066, 137, '南丰镇', 3);
INSERT INTO `lcn_region` VALUES (1067, 137, '白马井镇', 3);
INSERT INTO `lcn_region` VALUES (1068, 137, '兰洋镇', 3);
INSERT INTO `lcn_region` VALUES (1069, 137, '和庆镇', 3);
INSERT INTO `lcn_region` VALUES (1070, 137, '海头镇', 3);
INSERT INTO `lcn_region` VALUES (1071, 137, '排浦镇', 3);
INSERT INTO `lcn_region` VALUES (1072, 137, '东成镇', 3);
INSERT INTO `lcn_region` VALUES (1073, 137, '光村镇', 3);
INSERT INTO `lcn_region` VALUES (1074, 137, '木棠镇', 3);
INSERT INTO `lcn_region` VALUES (1075, 137, '新州镇', 3);
INSERT INTO `lcn_region` VALUES (1076, 137, '三都镇', 3);
INSERT INTO `lcn_region` VALUES (1077, 137, '其他', 3);
INSERT INTO `lcn_region` VALUES (1078, 138, '长安区', 3);
INSERT INTO `lcn_region` VALUES (1079, 138, '桥东区', 3);
INSERT INTO `lcn_region` VALUES (1080, 138, '桥西区', 3);
INSERT INTO `lcn_region` VALUES (1081, 138, '新华区', 3);
INSERT INTO `lcn_region` VALUES (1082, 138, '裕华区', 3);
INSERT INTO `lcn_region` VALUES (1083, 138, '井陉矿区', 3);
INSERT INTO `lcn_region` VALUES (1084, 138, '高新区', 3);
INSERT INTO `lcn_region` VALUES (1085, 138, '辛集市', 3);
INSERT INTO `lcn_region` VALUES (1086, 138, '藁城市', 3);
INSERT INTO `lcn_region` VALUES (1087, 138, '晋州市', 3);
INSERT INTO `lcn_region` VALUES (1088, 138, '新乐市', 3);
INSERT INTO `lcn_region` VALUES (1089, 138, '鹿泉市', 3);
INSERT INTO `lcn_region` VALUES (1090, 138, '井陉县', 3);
INSERT INTO `lcn_region` VALUES (1091, 138, '正定县', 3);
INSERT INTO `lcn_region` VALUES (1092, 138, '栾城县', 3);
INSERT INTO `lcn_region` VALUES (1093, 138, '行唐县', 3);
INSERT INTO `lcn_region` VALUES (1094, 138, '灵寿县', 3);
INSERT INTO `lcn_region` VALUES (1095, 138, '高邑县', 3);
INSERT INTO `lcn_region` VALUES (1096, 138, '深泽县', 3);
INSERT INTO `lcn_region` VALUES (1097, 138, '赞皇县', 3);
INSERT INTO `lcn_region` VALUES (1098, 138, '无极县', 3);
INSERT INTO `lcn_region` VALUES (1099, 138, '平山县', 3);
INSERT INTO `lcn_region` VALUES (1100, 138, '元氏县', 3);
INSERT INTO `lcn_region` VALUES (1101, 138, '赵县', 3);
INSERT INTO `lcn_region` VALUES (1102, 139, '新市区', 3);
INSERT INTO `lcn_region` VALUES (1103, 139, '南市区', 3);
INSERT INTO `lcn_region` VALUES (1104, 139, '北市区', 3);
INSERT INTO `lcn_region` VALUES (1105, 139, '涿州市', 3);
INSERT INTO `lcn_region` VALUES (1106, 139, '定州市', 3);
INSERT INTO `lcn_region` VALUES (1107, 139, '安国市', 3);
INSERT INTO `lcn_region` VALUES (1108, 139, '高碑店市', 3);
INSERT INTO `lcn_region` VALUES (1109, 139, '满城县', 3);
INSERT INTO `lcn_region` VALUES (1110, 139, '清苑县', 3);
INSERT INTO `lcn_region` VALUES (1111, 139, '涞水县', 3);
INSERT INTO `lcn_region` VALUES (1112, 139, '阜平县', 3);
INSERT INTO `lcn_region` VALUES (1113, 139, '徐水县', 3);
INSERT INTO `lcn_region` VALUES (1114, 139, '定兴县', 3);
INSERT INTO `lcn_region` VALUES (1115, 139, '唐县', 3);
INSERT INTO `lcn_region` VALUES (1116, 139, '高阳县', 3);
INSERT INTO `lcn_region` VALUES (1117, 139, '容城县', 3);
INSERT INTO `lcn_region` VALUES (1118, 139, '涞源县', 3);
INSERT INTO `lcn_region` VALUES (1119, 139, '望都县', 3);
INSERT INTO `lcn_region` VALUES (1120, 139, '安新县', 3);
INSERT INTO `lcn_region` VALUES (1121, 139, '易县', 3);
INSERT INTO `lcn_region` VALUES (1122, 139, '曲阳县', 3);
INSERT INTO `lcn_region` VALUES (1123, 139, '蠡县', 3);
INSERT INTO `lcn_region` VALUES (1124, 139, '顺平县', 3);
INSERT INTO `lcn_region` VALUES (1125, 139, '博野县', 3);
INSERT INTO `lcn_region` VALUES (1126, 139, '雄县', 3);
INSERT INTO `lcn_region` VALUES (1127, 140, '运河区', 3);
INSERT INTO `lcn_region` VALUES (1128, 140, '新华区', 3);
INSERT INTO `lcn_region` VALUES (1129, 140, '泊头市', 3);
INSERT INTO `lcn_region` VALUES (1130, 140, '任丘市', 3);
INSERT INTO `lcn_region` VALUES (1131, 140, '黄骅市', 3);
INSERT INTO `lcn_region` VALUES (1132, 140, '河间市', 3);
INSERT INTO `lcn_region` VALUES (1133, 140, '沧县', 3);
INSERT INTO `lcn_region` VALUES (1134, 140, '青县', 3);
INSERT INTO `lcn_region` VALUES (1135, 140, '东光县', 3);
INSERT INTO `lcn_region` VALUES (1136, 140, '海兴县', 3);
INSERT INTO `lcn_region` VALUES (1137, 140, '盐山县', 3);
INSERT INTO `lcn_region` VALUES (1138, 140, '肃宁县', 3);
INSERT INTO `lcn_region` VALUES (1139, 140, '南皮县', 3);
INSERT INTO `lcn_region` VALUES (1140, 140, '吴桥县', 3);
INSERT INTO `lcn_region` VALUES (1141, 140, '献县', 3);
INSERT INTO `lcn_region` VALUES (1142, 140, '孟村', 3);
INSERT INTO `lcn_region` VALUES (1143, 141, '双桥区', 3);
INSERT INTO `lcn_region` VALUES (1144, 141, '双滦区', 3);
INSERT INTO `lcn_region` VALUES (1145, 141, '鹰手营子矿区', 3);
INSERT INTO `lcn_region` VALUES (1146, 141, '承德县', 3);
INSERT INTO `lcn_region` VALUES (1147, 141, '兴隆县', 3);
INSERT INTO `lcn_region` VALUES (1148, 141, '平泉县', 3);
INSERT INTO `lcn_region` VALUES (1149, 141, '滦平县', 3);
INSERT INTO `lcn_region` VALUES (1150, 141, '隆化县', 3);
INSERT INTO `lcn_region` VALUES (1151, 141, '丰宁', 3);
INSERT INTO `lcn_region` VALUES (1152, 141, '宽城', 3);
INSERT INTO `lcn_region` VALUES (1153, 141, '围场', 3);
INSERT INTO `lcn_region` VALUES (1154, 142, '从台区', 3);
INSERT INTO `lcn_region` VALUES (1155, 142, '复兴区', 3);
INSERT INTO `lcn_region` VALUES (1156, 142, '邯山区', 3);
INSERT INTO `lcn_region` VALUES (1157, 142, '峰峰矿区', 3);
INSERT INTO `lcn_region` VALUES (1158, 142, '武安市', 3);
INSERT INTO `lcn_region` VALUES (1159, 142, '邯郸县', 3);
INSERT INTO `lcn_region` VALUES (1160, 142, '临漳县', 3);
INSERT INTO `lcn_region` VALUES (1161, 142, '成安县', 3);
INSERT INTO `lcn_region` VALUES (1162, 142, '大名县', 3);
INSERT INTO `lcn_region` VALUES (1163, 142, '涉县', 3);
INSERT INTO `lcn_region` VALUES (1164, 142, '磁县', 3);
INSERT INTO `lcn_region` VALUES (1165, 142, '肥乡县', 3);
INSERT INTO `lcn_region` VALUES (1166, 142, '永年县', 3);
INSERT INTO `lcn_region` VALUES (1167, 142, '邱县', 3);
INSERT INTO `lcn_region` VALUES (1168, 142, '鸡泽县', 3);
INSERT INTO `lcn_region` VALUES (1169, 142, '广平县', 3);
INSERT INTO `lcn_region` VALUES (1170, 142, '馆陶县', 3);
INSERT INTO `lcn_region` VALUES (1171, 142, '魏县', 3);
INSERT INTO `lcn_region` VALUES (1172, 142, '曲周县', 3);
INSERT INTO `lcn_region` VALUES (1173, 143, '桃城区', 3);
INSERT INTO `lcn_region` VALUES (1174, 143, '冀州市', 3);
INSERT INTO `lcn_region` VALUES (1175, 143, '深州市', 3);
INSERT INTO `lcn_region` VALUES (1176, 143, '枣强县', 3);
INSERT INTO `lcn_region` VALUES (1177, 143, '武邑县', 3);
INSERT INTO `lcn_region` VALUES (1178, 143, '武强县', 3);
INSERT INTO `lcn_region` VALUES (1179, 143, '饶阳县', 3);
INSERT INTO `lcn_region` VALUES (1180, 143, '安平县', 3);
INSERT INTO `lcn_region` VALUES (1181, 143, '故城县', 3);
INSERT INTO `lcn_region` VALUES (1182, 143, '景县', 3);
INSERT INTO `lcn_region` VALUES (1183, 143, '阜城县', 3);
INSERT INTO `lcn_region` VALUES (1184, 144, '安次区', 3);
INSERT INTO `lcn_region` VALUES (1185, 144, '广阳区', 3);
INSERT INTO `lcn_region` VALUES (1186, 144, '霸州市', 3);
INSERT INTO `lcn_region` VALUES (1187, 144, '三河市', 3);
INSERT INTO `lcn_region` VALUES (1188, 144, '固安县', 3);
INSERT INTO `lcn_region` VALUES (1189, 144, '永清县', 3);
INSERT INTO `lcn_region` VALUES (1190, 144, '香河县', 3);
INSERT INTO `lcn_region` VALUES (1191, 144, '大城县', 3);
INSERT INTO `lcn_region` VALUES (1192, 144, '文安县', 3);
INSERT INTO `lcn_region` VALUES (1193, 144, '大厂', 3);
INSERT INTO `lcn_region` VALUES (1194, 145, '海港区', 3);
INSERT INTO `lcn_region` VALUES (1195, 145, '山海关区', 3);
INSERT INTO `lcn_region` VALUES (1196, 145, '北戴河区', 3);
INSERT INTO `lcn_region` VALUES (1197, 145, '昌黎县', 3);
INSERT INTO `lcn_region` VALUES (1198, 145, '抚宁县', 3);
INSERT INTO `lcn_region` VALUES (1199, 145, '卢龙县', 3);
INSERT INTO `lcn_region` VALUES (1200, 145, '青龙', 3);
INSERT INTO `lcn_region` VALUES (1201, 146, '路北区', 3);
INSERT INTO `lcn_region` VALUES (1202, 146, '路南区', 3);
INSERT INTO `lcn_region` VALUES (1203, 146, '古冶区', 3);
INSERT INTO `lcn_region` VALUES (1204, 146, '开平区', 3);
INSERT INTO `lcn_region` VALUES (1205, 146, '丰南区', 3);
INSERT INTO `lcn_region` VALUES (1206, 146, '丰润区', 3);
INSERT INTO `lcn_region` VALUES (1207, 146, '遵化市', 3);
INSERT INTO `lcn_region` VALUES (1208, 146, '迁安市', 3);
INSERT INTO `lcn_region` VALUES (1209, 146, '滦县', 3);
INSERT INTO `lcn_region` VALUES (1210, 146, '滦南县', 3);
INSERT INTO `lcn_region` VALUES (1211, 146, '乐亭县', 3);
INSERT INTO `lcn_region` VALUES (1212, 146, '迁西县', 3);
INSERT INTO `lcn_region` VALUES (1213, 146, '玉田县', 3);
INSERT INTO `lcn_region` VALUES (1214, 146, '唐海县', 3);
INSERT INTO `lcn_region` VALUES (1215, 147, '桥东区', 3);
INSERT INTO `lcn_region` VALUES (1216, 147, '桥西区', 3);
INSERT INTO `lcn_region` VALUES (1217, 147, '南宫市', 3);
INSERT INTO `lcn_region` VALUES (1218, 147, '沙河市', 3);
INSERT INTO `lcn_region` VALUES (1219, 147, '邢台县', 3);
INSERT INTO `lcn_region` VALUES (1220, 147, '临城县', 3);
INSERT INTO `lcn_region` VALUES (1221, 147, '内丘县', 3);
INSERT INTO `lcn_region` VALUES (1222, 147, '柏乡县', 3);
INSERT INTO `lcn_region` VALUES (1223, 147, '隆尧县', 3);
INSERT INTO `lcn_region` VALUES (1224, 147, '任县', 3);
INSERT INTO `lcn_region` VALUES (1225, 147, '南和县', 3);
INSERT INTO `lcn_region` VALUES (1226, 147, '宁晋县', 3);
INSERT INTO `lcn_region` VALUES (1227, 147, '巨鹿县', 3);
INSERT INTO `lcn_region` VALUES (1228, 147, '新河县', 3);
INSERT INTO `lcn_region` VALUES (1229, 147, '广宗县', 3);
INSERT INTO `lcn_region` VALUES (1230, 147, '平乡县', 3);
INSERT INTO `lcn_region` VALUES (1231, 147, '威县', 3);
INSERT INTO `lcn_region` VALUES (1232, 147, '清河县', 3);
INSERT INTO `lcn_region` VALUES (1233, 147, '临西县', 3);
INSERT INTO `lcn_region` VALUES (1234, 148, '桥西区', 3);
INSERT INTO `lcn_region` VALUES (1235, 148, '桥东区', 3);
INSERT INTO `lcn_region` VALUES (1236, 148, '宣化区', 3);
INSERT INTO `lcn_region` VALUES (1237, 148, '下花园区', 3);
INSERT INTO `lcn_region` VALUES (1238, 148, '宣化县', 3);
INSERT INTO `lcn_region` VALUES (1239, 148, '张北县', 3);
INSERT INTO `lcn_region` VALUES (1240, 148, '康保县', 3);
INSERT INTO `lcn_region` VALUES (1241, 148, '沽源县', 3);
INSERT INTO `lcn_region` VALUES (1242, 148, '尚义县', 3);
INSERT INTO `lcn_region` VALUES (1243, 148, '蔚县', 3);
INSERT INTO `lcn_region` VALUES (1244, 148, '阳原县', 3);
INSERT INTO `lcn_region` VALUES (1245, 148, '怀安县', 3);
INSERT INTO `lcn_region` VALUES (1246, 148, '万全县', 3);
INSERT INTO `lcn_region` VALUES (1247, 148, '怀来县', 3);
INSERT INTO `lcn_region` VALUES (1248, 148, '涿鹿县', 3);
INSERT INTO `lcn_region` VALUES (1249, 148, '赤城县', 3);
INSERT INTO `lcn_region` VALUES (1250, 148, '崇礼县', 3);
INSERT INTO `lcn_region` VALUES (1251, 149, '金水区', 3);
INSERT INTO `lcn_region` VALUES (1252, 149, '邙山区', 3);
INSERT INTO `lcn_region` VALUES (1253, 149, '二七区', 3);
INSERT INTO `lcn_region` VALUES (1254, 149, '管城区', 3);
INSERT INTO `lcn_region` VALUES (1255, 149, '中原区', 3);
INSERT INTO `lcn_region` VALUES (1256, 149, '上街区', 3);
INSERT INTO `lcn_region` VALUES (1257, 149, '惠济区', 3);
INSERT INTO `lcn_region` VALUES (1258, 149, '郑东新区', 3);
INSERT INTO `lcn_region` VALUES (1259, 149, '经济技术开发区', 3);
INSERT INTO `lcn_region` VALUES (1260, 149, '高新开发区', 3);
INSERT INTO `lcn_region` VALUES (1261, 149, '出口加工区', 3);
INSERT INTO `lcn_region` VALUES (1262, 149, '巩义市', 3);
INSERT INTO `lcn_region` VALUES (1263, 149, '荥阳市', 3);
INSERT INTO `lcn_region` VALUES (1264, 149, '新密市', 3);
INSERT INTO `lcn_region` VALUES (1265, 149, '新郑市', 3);
INSERT INTO `lcn_region` VALUES (1266, 149, '登封市', 3);
INSERT INTO `lcn_region` VALUES (1267, 149, '中牟县', 3);
INSERT INTO `lcn_region` VALUES (1268, 150, '西工区', 3);
INSERT INTO `lcn_region` VALUES (1269, 150, '老城区', 3);
INSERT INTO `lcn_region` VALUES (1270, 150, '涧西区', 3);
INSERT INTO `lcn_region` VALUES (1271, 150, '瀍河回族区', 3);
INSERT INTO `lcn_region` VALUES (1272, 150, '洛龙区', 3);
INSERT INTO `lcn_region` VALUES (1273, 150, '吉利区', 3);
INSERT INTO `lcn_region` VALUES (1274, 150, '偃师市', 3);
INSERT INTO `lcn_region` VALUES (1275, 150, '孟津县', 3);
INSERT INTO `lcn_region` VALUES (1276, 150, '新安县', 3);
INSERT INTO `lcn_region` VALUES (1277, 150, '栾川县', 3);
INSERT INTO `lcn_region` VALUES (1278, 150, '嵩县', 3);
INSERT INTO `lcn_region` VALUES (1279, 150, '汝阳县', 3);
INSERT INTO `lcn_region` VALUES (1280, 150, '宜阳县', 3);
INSERT INTO `lcn_region` VALUES (1281, 150, '洛宁县', 3);
INSERT INTO `lcn_region` VALUES (1282, 150, '伊川县', 3);
INSERT INTO `lcn_region` VALUES (1283, 151, '鼓楼区', 3);
INSERT INTO `lcn_region` VALUES (1284, 151, '龙亭区', 3);
INSERT INTO `lcn_region` VALUES (1285, 151, '顺河回族区', 3);
INSERT INTO `lcn_region` VALUES (1286, 151, '金明区', 3);
INSERT INTO `lcn_region` VALUES (1287, 151, '禹王台区', 3);
INSERT INTO `lcn_region` VALUES (1288, 151, '杞县', 3);
INSERT INTO `lcn_region` VALUES (1289, 151, '通许县', 3);
INSERT INTO `lcn_region` VALUES (1290, 151, '尉氏县', 3);
INSERT INTO `lcn_region` VALUES (1291, 151, '开封县', 3);
INSERT INTO `lcn_region` VALUES (1292, 151, '兰考县', 3);
INSERT INTO `lcn_region` VALUES (1293, 152, '北关区', 3);
INSERT INTO `lcn_region` VALUES (1294, 152, '文峰区', 3);
INSERT INTO `lcn_region` VALUES (1295, 152, '殷都区', 3);
INSERT INTO `lcn_region` VALUES (1296, 152, '龙安区', 3);
INSERT INTO `lcn_region` VALUES (1297, 152, '林州市', 3);
INSERT INTO `lcn_region` VALUES (1298, 152, '安阳县', 3);
INSERT INTO `lcn_region` VALUES (1299, 152, '汤阴县', 3);
INSERT INTO `lcn_region` VALUES (1300, 152, '滑县', 3);
INSERT INTO `lcn_region` VALUES (1301, 152, '内黄县', 3);
INSERT INTO `lcn_region` VALUES (1302, 153, '淇滨区', 3);
INSERT INTO `lcn_region` VALUES (1303, 153, '山城区', 3);
INSERT INTO `lcn_region` VALUES (1304, 153, '鹤山区', 3);
INSERT INTO `lcn_region` VALUES (1305, 153, '浚县', 3);
INSERT INTO `lcn_region` VALUES (1306, 153, '淇县', 3);
INSERT INTO `lcn_region` VALUES (1307, 154, '济源市', 3);
INSERT INTO `lcn_region` VALUES (1308, 155, '解放区', 3);
INSERT INTO `lcn_region` VALUES (1309, 155, '中站区', 3);
INSERT INTO `lcn_region` VALUES (1310, 155, '马村区', 3);
INSERT INTO `lcn_region` VALUES (1311, 155, '山阳区', 3);
INSERT INTO `lcn_region` VALUES (1312, 155, '沁阳市', 3);
INSERT INTO `lcn_region` VALUES (1313, 155, '孟州市', 3);
INSERT INTO `lcn_region` VALUES (1314, 155, '修武县', 3);
INSERT INTO `lcn_region` VALUES (1315, 155, '博爱县', 3);
INSERT INTO `lcn_region` VALUES (1316, 155, '武陟县', 3);
INSERT INTO `lcn_region` VALUES (1317, 155, '温县', 3);
INSERT INTO `lcn_region` VALUES (1318, 156, '卧龙区', 3);
INSERT INTO `lcn_region` VALUES (1319, 156, '宛城区', 3);
INSERT INTO `lcn_region` VALUES (1320, 156, '邓州市', 3);
INSERT INTO `lcn_region` VALUES (1321, 156, '南召县', 3);
INSERT INTO `lcn_region` VALUES (1322, 156, '方城县', 3);
INSERT INTO `lcn_region` VALUES (1323, 156, '西峡县', 3);
INSERT INTO `lcn_region` VALUES (1324, 156, '镇平县', 3);
INSERT INTO `lcn_region` VALUES (1325, 156, '内乡县', 3);
INSERT INTO `lcn_region` VALUES (1326, 156, '淅川县', 3);
INSERT INTO `lcn_region` VALUES (1327, 156, '社旗县', 3);
INSERT INTO `lcn_region` VALUES (1328, 156, '唐河县', 3);
INSERT INTO `lcn_region` VALUES (1329, 156, '新野县', 3);
INSERT INTO `lcn_region` VALUES (1330, 156, '桐柏县', 3);
INSERT INTO `lcn_region` VALUES (1331, 157, '新华区', 3);
INSERT INTO `lcn_region` VALUES (1332, 157, '卫东区', 3);
INSERT INTO `lcn_region` VALUES (1333, 157, '湛河区', 3);
INSERT INTO `lcn_region` VALUES (1334, 157, '石龙区', 3);
INSERT INTO `lcn_region` VALUES (1335, 157, '舞钢市', 3);
INSERT INTO `lcn_region` VALUES (1336, 157, '汝州市', 3);
INSERT INTO `lcn_region` VALUES (1337, 157, '宝丰县', 3);
INSERT INTO `lcn_region` VALUES (1338, 157, '叶县', 3);
INSERT INTO `lcn_region` VALUES (1339, 157, '鲁山县', 3);
INSERT INTO `lcn_region` VALUES (1340, 157, '郏县', 3);
INSERT INTO `lcn_region` VALUES (1341, 158, '湖滨区', 3);
INSERT INTO `lcn_region` VALUES (1342, 158, '义马市', 3);
INSERT INTO `lcn_region` VALUES (1343, 158, '灵宝市', 3);
INSERT INTO `lcn_region` VALUES (1344, 158, '渑池县', 3);
INSERT INTO `lcn_region` VALUES (1345, 158, '陕县', 3);
INSERT INTO `lcn_region` VALUES (1346, 158, '卢氏县', 3);
INSERT INTO `lcn_region` VALUES (1347, 159, '梁园区', 3);
INSERT INTO `lcn_region` VALUES (1348, 159, '睢阳区', 3);
INSERT INTO `lcn_region` VALUES (1349, 159, '永城市', 3);
INSERT INTO `lcn_region` VALUES (1350, 159, '民权县', 3);
INSERT INTO `lcn_region` VALUES (1351, 159, '睢县', 3);
INSERT INTO `lcn_region` VALUES (1352, 159, '宁陵县', 3);
INSERT INTO `lcn_region` VALUES (1353, 159, '虞城县', 3);
INSERT INTO `lcn_region` VALUES (1354, 159, '柘城县', 3);
INSERT INTO `lcn_region` VALUES (1355, 159, '夏邑县', 3);
INSERT INTO `lcn_region` VALUES (1356, 160, '卫滨区', 3);
INSERT INTO `lcn_region` VALUES (1357, 160, '红旗区', 3);
INSERT INTO `lcn_region` VALUES (1358, 160, '凤泉区', 3);
INSERT INTO `lcn_region` VALUES (1359, 160, '牧野区', 3);
INSERT INTO `lcn_region` VALUES (1360, 160, '卫辉市', 3);
INSERT INTO `lcn_region` VALUES (1361, 160, '辉县市', 3);
INSERT INTO `lcn_region` VALUES (1362, 160, '新乡县', 3);
INSERT INTO `lcn_region` VALUES (1363, 160, '获嘉县', 3);
INSERT INTO `lcn_region` VALUES (1364, 160, '原阳县', 3);
INSERT INTO `lcn_region` VALUES (1365, 160, '延津县', 3);
INSERT INTO `lcn_region` VALUES (1366, 160, '封丘县', 3);
INSERT INTO `lcn_region` VALUES (1367, 160, '长垣县', 3);
INSERT INTO `lcn_region` VALUES (1368, 161, '浉河区', 3);
INSERT INTO `lcn_region` VALUES (1369, 161, '平桥区', 3);
INSERT INTO `lcn_region` VALUES (1370, 161, '罗山县', 3);
INSERT INTO `lcn_region` VALUES (1371, 161, '光山县', 3);
INSERT INTO `lcn_region` VALUES (1372, 161, '新县', 3);
INSERT INTO `lcn_region` VALUES (1373, 161, '商城县', 3);
INSERT INTO `lcn_region` VALUES (1374, 161, '固始县', 3);
INSERT INTO `lcn_region` VALUES (1375, 161, '潢川县', 3);
INSERT INTO `lcn_region` VALUES (1376, 161, '淮滨县', 3);
INSERT INTO `lcn_region` VALUES (1377, 161, '息县', 3);
INSERT INTO `lcn_region` VALUES (1378, 162, '魏都区', 3);
INSERT INTO `lcn_region` VALUES (1379, 162, '禹州市', 3);
INSERT INTO `lcn_region` VALUES (1380, 162, '长葛市', 3);
INSERT INTO `lcn_region` VALUES (1381, 162, '许昌县', 3);
INSERT INTO `lcn_region` VALUES (1382, 162, '鄢陵县', 3);
INSERT INTO `lcn_region` VALUES (1383, 162, '襄城县', 3);
INSERT INTO `lcn_region` VALUES (1384, 163, '川汇区', 3);
INSERT INTO `lcn_region` VALUES (1385, 163, '项城市', 3);
INSERT INTO `lcn_region` VALUES (1386, 163, '扶沟县', 3);
INSERT INTO `lcn_region` VALUES (1387, 163, '西华县', 3);
INSERT INTO `lcn_region` VALUES (1388, 163, '商水县', 3);
INSERT INTO `lcn_region` VALUES (1389, 163, '沈丘县', 3);
INSERT INTO `lcn_region` VALUES (1390, 163, '郸城县', 3);
INSERT INTO `lcn_region` VALUES (1391, 163, '淮阳县', 3);
INSERT INTO `lcn_region` VALUES (1392, 163, '太康县', 3);
INSERT INTO `lcn_region` VALUES (1393, 163, '鹿邑县', 3);
INSERT INTO `lcn_region` VALUES (1394, 164, '驿城区', 3);
INSERT INTO `lcn_region` VALUES (1395, 164, '西平县', 3);
INSERT INTO `lcn_region` VALUES (1396, 164, '上蔡县', 3);
INSERT INTO `lcn_region` VALUES (1397, 164, '平舆县', 3);
INSERT INTO `lcn_region` VALUES (1398, 164, '正阳县', 3);
INSERT INTO `lcn_region` VALUES (1399, 164, '确山县', 3);
INSERT INTO `lcn_region` VALUES (1400, 164, '泌阳县', 3);
INSERT INTO `lcn_region` VALUES (1401, 164, '汝南县', 3);
INSERT INTO `lcn_region` VALUES (1402, 164, '遂平县', 3);
INSERT INTO `lcn_region` VALUES (1403, 164, '新蔡县', 3);
INSERT INTO `lcn_region` VALUES (1404, 165, '郾城区', 3);
INSERT INTO `lcn_region` VALUES (1405, 165, '源汇区', 3);
INSERT INTO `lcn_region` VALUES (1406, 165, '召陵区', 3);
INSERT INTO `lcn_region` VALUES (1407, 165, '舞阳县', 3);
INSERT INTO `lcn_region` VALUES (1408, 165, '临颍县', 3);
INSERT INTO `lcn_region` VALUES (1409, 166, '华龙区', 3);
INSERT INTO `lcn_region` VALUES (1410, 166, '清丰县', 3);
INSERT INTO `lcn_region` VALUES (1411, 166, '南乐县', 3);
INSERT INTO `lcn_region` VALUES (1412, 166, '范县', 3);
INSERT INTO `lcn_region` VALUES (1413, 166, '台前县', 3);
INSERT INTO `lcn_region` VALUES (1414, 166, '濮阳县', 3);
INSERT INTO `lcn_region` VALUES (1415, 167, '道里区', 3);
INSERT INTO `lcn_region` VALUES (1416, 167, '南岗区', 3);
INSERT INTO `lcn_region` VALUES (1417, 167, '动力区', 3);
INSERT INTO `lcn_region` VALUES (1418, 167, '平房区', 3);
INSERT INTO `lcn_region` VALUES (1419, 167, '香坊区', 3);
INSERT INTO `lcn_region` VALUES (1420, 167, '太平区', 3);
INSERT INTO `lcn_region` VALUES (1421, 167, '道外区', 3);
INSERT INTO `lcn_region` VALUES (1422, 167, '阿城区', 3);
INSERT INTO `lcn_region` VALUES (1423, 167, '呼兰区', 3);
INSERT INTO `lcn_region` VALUES (1424, 167, '松北区', 3);
INSERT INTO `lcn_region` VALUES (1425, 167, '尚志市', 3);
INSERT INTO `lcn_region` VALUES (1426, 167, '双城市', 3);
INSERT INTO `lcn_region` VALUES (1427, 167, '五常市', 3);
INSERT INTO `lcn_region` VALUES (1428, 167, '方正县', 3);
INSERT INTO `lcn_region` VALUES (1429, 167, '宾县', 3);
INSERT INTO `lcn_region` VALUES (1430, 167, '依兰县', 3);
INSERT INTO `lcn_region` VALUES (1431, 167, '巴彦县', 3);
INSERT INTO `lcn_region` VALUES (1432, 167, '通河县', 3);
INSERT INTO `lcn_region` VALUES (1433, 167, '木兰县', 3);
INSERT INTO `lcn_region` VALUES (1434, 167, '延寿县', 3);
INSERT INTO `lcn_region` VALUES (1435, 168, '萨尔图区', 3);
INSERT INTO `lcn_region` VALUES (1436, 168, '红岗区', 3);
INSERT INTO `lcn_region` VALUES (1437, 168, '龙凤区', 3);
INSERT INTO `lcn_region` VALUES (1438, 168, '让胡路区', 3);
INSERT INTO `lcn_region` VALUES (1439, 168, '大同区', 3);
INSERT INTO `lcn_region` VALUES (1440, 168, '肇州县', 3);
INSERT INTO `lcn_region` VALUES (1441, 168, '肇源县', 3);
INSERT INTO `lcn_region` VALUES (1442, 168, '林甸县', 3);
INSERT INTO `lcn_region` VALUES (1443, 168, '杜尔伯特', 3);
INSERT INTO `lcn_region` VALUES (1444, 169, '呼玛县', 3);
INSERT INTO `lcn_region` VALUES (1445, 169, '漠河县', 3);
INSERT INTO `lcn_region` VALUES (1446, 169, '塔河县', 3);
INSERT INTO `lcn_region` VALUES (1447, 170, '兴山区', 3);
INSERT INTO `lcn_region` VALUES (1448, 170, '工农区', 3);
INSERT INTO `lcn_region` VALUES (1449, 170, '南山区', 3);
INSERT INTO `lcn_region` VALUES (1450, 170, '兴安区', 3);
INSERT INTO `lcn_region` VALUES (1451, 170, '向阳区', 3);
INSERT INTO `lcn_region` VALUES (1452, 170, '东山区', 3);
INSERT INTO `lcn_region` VALUES (1453, 170, '萝北县', 3);
INSERT INTO `lcn_region` VALUES (1454, 170, '绥滨县', 3);
INSERT INTO `lcn_region` VALUES (1455, 171, '爱辉区', 3);
INSERT INTO `lcn_region` VALUES (1456, 171, '五大连池市', 3);
INSERT INTO `lcn_region` VALUES (1457, 171, '北安市', 3);
INSERT INTO `lcn_region` VALUES (1458, 171, '嫩江县', 3);
INSERT INTO `lcn_region` VALUES (1459, 171, '逊克县', 3);
INSERT INTO `lcn_region` VALUES (1460, 171, '孙吴县', 3);
INSERT INTO `lcn_region` VALUES (1461, 172, '鸡冠区', 3);
INSERT INTO `lcn_region` VALUES (1462, 172, '恒山区', 3);
INSERT INTO `lcn_region` VALUES (1463, 172, '城子河区', 3);
INSERT INTO `lcn_region` VALUES (1464, 172, '滴道区', 3);
INSERT INTO `lcn_region` VALUES (1465, 172, '梨树区', 3);
INSERT INTO `lcn_region` VALUES (1466, 172, '虎林市', 3);
INSERT INTO `lcn_region` VALUES (1467, 172, '密山市', 3);
INSERT INTO `lcn_region` VALUES (1468, 172, '鸡东县', 3);
INSERT INTO `lcn_region` VALUES (1469, 173, '前进区', 3);
INSERT INTO `lcn_region` VALUES (1470, 173, '郊区', 3);
INSERT INTO `lcn_region` VALUES (1471, 173, '向阳区', 3);
INSERT INTO `lcn_region` VALUES (1472, 173, '东风区', 3);
INSERT INTO `lcn_region` VALUES (1473, 173, '同江市', 3);
INSERT INTO `lcn_region` VALUES (1474, 173, '富锦市', 3);
INSERT INTO `lcn_region` VALUES (1475, 173, '桦南县', 3);
INSERT INTO `lcn_region` VALUES (1476, 173, '桦川县', 3);
INSERT INTO `lcn_region` VALUES (1477, 173, '汤原县', 3);
INSERT INTO `lcn_region` VALUES (1478, 173, '抚远县', 3);
INSERT INTO `lcn_region` VALUES (1479, 174, '爱民区', 3);
INSERT INTO `lcn_region` VALUES (1480, 174, '东安区', 3);
INSERT INTO `lcn_region` VALUES (1481, 174, '阳明区', 3);
INSERT INTO `lcn_region` VALUES (1482, 174, '西安区', 3);
INSERT INTO `lcn_region` VALUES (1483, 174, '绥芬河市', 3);
INSERT INTO `lcn_region` VALUES (1484, 174, '海林市', 3);
INSERT INTO `lcn_region` VALUES (1485, 174, '宁安市', 3);
INSERT INTO `lcn_region` VALUES (1486, 174, '穆棱市', 3);
INSERT INTO `lcn_region` VALUES (1487, 174, '东宁县', 3);
INSERT INTO `lcn_region` VALUES (1488, 174, '林口县', 3);
INSERT INTO `lcn_region` VALUES (1489, 175, '桃山区', 3);
INSERT INTO `lcn_region` VALUES (1490, 175, '新兴区', 3);
INSERT INTO `lcn_region` VALUES (1491, 175, '茄子河区', 3);
INSERT INTO `lcn_region` VALUES (1492, 175, '勃利县', 3);
INSERT INTO `lcn_region` VALUES (1493, 176, '龙沙区', 3);
INSERT INTO `lcn_region` VALUES (1494, 176, '昂昂溪区', 3);
INSERT INTO `lcn_region` VALUES (1495, 176, '铁峰区', 3);
INSERT INTO `lcn_region` VALUES (1496, 176, '建华区', 3);
INSERT INTO `lcn_region` VALUES (1497, 176, '富拉尔基区', 3);
INSERT INTO `lcn_region` VALUES (1498, 176, '碾子山区', 3);
INSERT INTO `lcn_region` VALUES (1499, 176, '梅里斯达斡尔区', 3);
INSERT INTO `lcn_region` VALUES (1500, 176, '讷河市', 3);
INSERT INTO `lcn_region` VALUES (1501, 176, '龙江县', 3);
INSERT INTO `lcn_region` VALUES (1502, 176, '依安县', 3);
INSERT INTO `lcn_region` VALUES (1503, 176, '泰来县', 3);
INSERT INTO `lcn_region` VALUES (1504, 176, '甘南县', 3);
INSERT INTO `lcn_region` VALUES (1505, 176, '富裕县', 3);
INSERT INTO `lcn_region` VALUES (1506, 176, '克山县', 3);
INSERT INTO `lcn_region` VALUES (1507, 176, '克东县', 3);
INSERT INTO `lcn_region` VALUES (1508, 176, '拜泉县', 3);
INSERT INTO `lcn_region` VALUES (1509, 177, '尖山区', 3);
INSERT INTO `lcn_region` VALUES (1510, 177, '岭东区', 3);
INSERT INTO `lcn_region` VALUES (1511, 177, '四方台区', 3);
INSERT INTO `lcn_region` VALUES (1512, 177, '宝山区', 3);
INSERT INTO `lcn_region` VALUES (1513, 177, '集贤县', 3);
INSERT INTO `lcn_region` VALUES (1514, 177, '友谊县', 3);
INSERT INTO `lcn_region` VALUES (1515, 177, '宝清县', 3);
INSERT INTO `lcn_region` VALUES (1516, 177, '饶河县', 3);
INSERT INTO `lcn_region` VALUES (1517, 178, '北林区', 3);
INSERT INTO `lcn_region` VALUES (1518, 178, '安达市', 3);
INSERT INTO `lcn_region` VALUES (1519, 178, '肇东市', 3);
INSERT INTO `lcn_region` VALUES (1520, 178, '海伦市', 3);
INSERT INTO `lcn_region` VALUES (1521, 178, '望奎县', 3);
INSERT INTO `lcn_region` VALUES (1522, 178, '兰西县', 3);
INSERT INTO `lcn_region` VALUES (1523, 178, '青冈县', 3);
INSERT INTO `lcn_region` VALUES (1524, 178, '庆安县', 3);
INSERT INTO `lcn_region` VALUES (1525, 178, '明水县', 3);
INSERT INTO `lcn_region` VALUES (1526, 178, '绥棱县', 3);
INSERT INTO `lcn_region` VALUES (1527, 179, '伊春区', 3);
INSERT INTO `lcn_region` VALUES (1528, 179, '带岭区', 3);
INSERT INTO `lcn_region` VALUES (1529, 179, '南岔区', 3);
INSERT INTO `lcn_region` VALUES (1530, 179, '金山屯区', 3);
INSERT INTO `lcn_region` VALUES (1531, 179, '西林区', 3);
INSERT INTO `lcn_region` VALUES (1532, 179, '美溪区', 3);
INSERT INTO `lcn_region` VALUES (1533, 179, '乌马河区', 3);
INSERT INTO `lcn_region` VALUES (1534, 179, '翠峦区', 3);
INSERT INTO `lcn_region` VALUES (1535, 179, '友好区', 3);
INSERT INTO `lcn_region` VALUES (1536, 179, '上甘岭区', 3);
INSERT INTO `lcn_region` VALUES (1537, 179, '五营区', 3);
INSERT INTO `lcn_region` VALUES (1538, 179, '红星区', 3);
INSERT INTO `lcn_region` VALUES (1539, 179, '新青区', 3);
INSERT INTO `lcn_region` VALUES (1540, 179, '汤旺河区', 3);
INSERT INTO `lcn_region` VALUES (1541, 179, '乌伊岭区', 3);
INSERT INTO `lcn_region` VALUES (1542, 179, '铁力市', 3);
INSERT INTO `lcn_region` VALUES (1543, 179, '嘉荫县', 3);
INSERT INTO `lcn_region` VALUES (1544, 180, '江岸区', 3);
INSERT INTO `lcn_region` VALUES (1545, 180, '武昌区', 3);
INSERT INTO `lcn_region` VALUES (1546, 180, '江汉区', 3);
INSERT INTO `lcn_region` VALUES (1547, 180, '硚口区', 3);
INSERT INTO `lcn_region` VALUES (1548, 180, '汉阳区', 3);
INSERT INTO `lcn_region` VALUES (1549, 180, '青山区', 3);
INSERT INTO `lcn_region` VALUES (1550, 180, '洪山区', 3);
INSERT INTO `lcn_region` VALUES (1551, 180, '东西湖区', 3);
INSERT INTO `lcn_region` VALUES (1552, 180, '汉南区', 3);
INSERT INTO `lcn_region` VALUES (1553, 180, '蔡甸区', 3);
INSERT INTO `lcn_region` VALUES (1554, 180, '江夏区', 3);
INSERT INTO `lcn_region` VALUES (1555, 180, '黄陂区', 3);
INSERT INTO `lcn_region` VALUES (1556, 180, '新洲区', 3);
INSERT INTO `lcn_region` VALUES (1557, 180, '经济开发区', 3);
INSERT INTO `lcn_region` VALUES (1558, 181, '仙桃市', 3);
INSERT INTO `lcn_region` VALUES (1559, 182, '鄂城区', 3);
INSERT INTO `lcn_region` VALUES (1560, 182, '华容区', 3);
INSERT INTO `lcn_region` VALUES (1561, 182, '梁子湖区', 3);
INSERT INTO `lcn_region` VALUES (1562, 183, '黄州区', 3);
INSERT INTO `lcn_region` VALUES (1563, 183, '麻城市', 3);
INSERT INTO `lcn_region` VALUES (1564, 183, '武穴市', 3);
INSERT INTO `lcn_region` VALUES (1565, 183, '团风县', 3);
INSERT INTO `lcn_region` VALUES (1566, 183, '红安县', 3);
INSERT INTO `lcn_region` VALUES (1567, 183, '罗田县', 3);
INSERT INTO `lcn_region` VALUES (1568, 183, '英山县', 3);
INSERT INTO `lcn_region` VALUES (1569, 183, '浠水县', 3);
INSERT INTO `lcn_region` VALUES (1570, 183, '蕲春县', 3);
INSERT INTO `lcn_region` VALUES (1571, 183, '黄梅县', 3);
INSERT INTO `lcn_region` VALUES (1572, 184, '黄石港区', 3);
INSERT INTO `lcn_region` VALUES (1573, 184, '西塞山区', 3);
INSERT INTO `lcn_region` VALUES (1574, 184, '下陆区', 3);
INSERT INTO `lcn_region` VALUES (1575, 184, '铁山区', 3);
INSERT INTO `lcn_region` VALUES (1576, 184, '大冶市', 3);
INSERT INTO `lcn_region` VALUES (1577, 184, '阳新县', 3);
INSERT INTO `lcn_region` VALUES (1578, 185, '东宝区', 3);
INSERT INTO `lcn_region` VALUES (1579, 185, '掇刀区', 3);
INSERT INTO `lcn_region` VALUES (1580, 185, '钟祥市', 3);
INSERT INTO `lcn_region` VALUES (1581, 185, '京山县', 3);
INSERT INTO `lcn_region` VALUES (1582, 185, '沙洋县', 3);
INSERT INTO `lcn_region` VALUES (1583, 186, '沙市区', 3);
INSERT INTO `lcn_region` VALUES (1584, 186, '荆州区', 3);
INSERT INTO `lcn_region` VALUES (1585, 186, '石首市', 3);
INSERT INTO `lcn_region` VALUES (1586, 186, '洪湖市', 3);
INSERT INTO `lcn_region` VALUES (1587, 186, '松滋市', 3);
INSERT INTO `lcn_region` VALUES (1588, 186, '公安县', 3);
INSERT INTO `lcn_region` VALUES (1589, 186, '监利县', 3);
INSERT INTO `lcn_region` VALUES (1590, 186, '江陵县', 3);
INSERT INTO `lcn_region` VALUES (1591, 187, '潜江市', 3);
INSERT INTO `lcn_region` VALUES (1592, 188, '神农架林区', 3);
INSERT INTO `lcn_region` VALUES (1593, 189, '张湾区', 3);
INSERT INTO `lcn_region` VALUES (1594, 189, '茅箭区', 3);
INSERT INTO `lcn_region` VALUES (1595, 189, '丹江口市', 3);
INSERT INTO `lcn_region` VALUES (1596, 189, '郧县', 3);
INSERT INTO `lcn_region` VALUES (1597, 189, '郧西县', 3);
INSERT INTO `lcn_region` VALUES (1598, 189, '竹山县', 3);
INSERT INTO `lcn_region` VALUES (1599, 189, '竹溪县', 3);
INSERT INTO `lcn_region` VALUES (1600, 189, '房县', 3);
INSERT INTO `lcn_region` VALUES (1601, 190, '曾都区', 3);
INSERT INTO `lcn_region` VALUES (1602, 190, '广水市', 3);
INSERT INTO `lcn_region` VALUES (1603, 191, '天门市', 3);
INSERT INTO `lcn_region` VALUES (1604, 192, '咸安区', 3);
INSERT INTO `lcn_region` VALUES (1605, 192, '赤壁市', 3);
INSERT INTO `lcn_region` VALUES (1606, 192, '嘉鱼县', 3);
INSERT INTO `lcn_region` VALUES (1607, 192, '通城县', 3);
INSERT INTO `lcn_region` VALUES (1608, 192, '崇阳县', 3);
INSERT INTO `lcn_region` VALUES (1609, 192, '通山县', 3);
INSERT INTO `lcn_region` VALUES (1610, 193, '襄城区', 3);
INSERT INTO `lcn_region` VALUES (1611, 193, '樊城区', 3);
INSERT INTO `lcn_region` VALUES (1612, 193, '襄阳区', 3);
INSERT INTO `lcn_region` VALUES (1613, 193, '老河口市', 3);
INSERT INTO `lcn_region` VALUES (1614, 193, '枣阳市', 3);
INSERT INTO `lcn_region` VALUES (1615, 193, '宜城市', 3);
INSERT INTO `lcn_region` VALUES (1616, 193, '南漳县', 3);
INSERT INTO `lcn_region` VALUES (1617, 193, '谷城县', 3);
INSERT INTO `lcn_region` VALUES (1618, 193, '保康县', 3);
INSERT INTO `lcn_region` VALUES (1619, 194, '孝南区', 3);
INSERT INTO `lcn_region` VALUES (1620, 194, '应城市', 3);
INSERT INTO `lcn_region` VALUES (1621, 194, '安陆市', 3);
INSERT INTO `lcn_region` VALUES (1622, 194, '汉川市', 3);
INSERT INTO `lcn_region` VALUES (1623, 194, '孝昌县', 3);
INSERT INTO `lcn_region` VALUES (1624, 194, '大悟县', 3);
INSERT INTO `lcn_region` VALUES (1625, 194, '云梦县', 3);
INSERT INTO `lcn_region` VALUES (1626, 195, '长阳', 3);
INSERT INTO `lcn_region` VALUES (1627, 195, '五峰', 3);
INSERT INTO `lcn_region` VALUES (1628, 195, '西陵区', 3);
INSERT INTO `lcn_region` VALUES (1629, 195, '伍家岗区', 3);
INSERT INTO `lcn_region` VALUES (1630, 195, '点军区', 3);
INSERT INTO `lcn_region` VALUES (1631, 195, '猇亭区', 3);
INSERT INTO `lcn_region` VALUES (1632, 195, '夷陵区', 3);
INSERT INTO `lcn_region` VALUES (1633, 195, '宜都市', 3);
INSERT INTO `lcn_region` VALUES (1634, 195, '当阳市', 3);
INSERT INTO `lcn_region` VALUES (1635, 195, '枝江市', 3);
INSERT INTO `lcn_region` VALUES (1636, 195, '远安县', 3);
INSERT INTO `lcn_region` VALUES (1637, 195, '兴山县', 3);
INSERT INTO `lcn_region` VALUES (1638, 195, '秭归县', 3);
INSERT INTO `lcn_region` VALUES (1639, 196, '恩施市', 3);
INSERT INTO `lcn_region` VALUES (1640, 196, '利川市', 3);
INSERT INTO `lcn_region` VALUES (1641, 196, '建始县', 3);
INSERT INTO `lcn_region` VALUES (1642, 196, '巴东县', 3);
INSERT INTO `lcn_region` VALUES (1643, 196, '宣恩县', 3);
INSERT INTO `lcn_region` VALUES (1644, 196, '咸丰县', 3);
INSERT INTO `lcn_region` VALUES (1645, 196, '来凤县', 3);
INSERT INTO `lcn_region` VALUES (1646, 196, '鹤峰县', 3);
INSERT INTO `lcn_region` VALUES (1647, 197, '岳麓区', 3);
INSERT INTO `lcn_region` VALUES (1648, 197, '芙蓉区', 3);
INSERT INTO `lcn_region` VALUES (1649, 197, '天心区', 3);
INSERT INTO `lcn_region` VALUES (1650, 197, '开福区', 3);
INSERT INTO `lcn_region` VALUES (1651, 197, '雨花区', 3);
INSERT INTO `lcn_region` VALUES (1652, 197, '开发区', 3);
INSERT INTO `lcn_region` VALUES (1653, 197, '浏阳市', 3);
INSERT INTO `lcn_region` VALUES (1654, 197, '长沙县', 3);
INSERT INTO `lcn_region` VALUES (1655, 197, '望城县', 3);
INSERT INTO `lcn_region` VALUES (1656, 197, '宁乡县', 3);
INSERT INTO `lcn_region` VALUES (1657, 198, '永定区', 3);
INSERT INTO `lcn_region` VALUES (1658, 198, '武陵源区', 3);
INSERT INTO `lcn_region` VALUES (1659, 198, '慈利县', 3);
INSERT INTO `lcn_region` VALUES (1660, 198, '桑植县', 3);
INSERT INTO `lcn_region` VALUES (1661, 199, '武陵区', 3);
INSERT INTO `lcn_region` VALUES (1662, 199, '鼎城区', 3);
INSERT INTO `lcn_region` VALUES (1663, 199, '津市市', 3);
INSERT INTO `lcn_region` VALUES (1664, 199, '安乡县', 3);
INSERT INTO `lcn_region` VALUES (1665, 199, '汉寿县', 3);
INSERT INTO `lcn_region` VALUES (1666, 199, '澧县', 3);
INSERT INTO `lcn_region` VALUES (1667, 199, '临澧县', 3);
INSERT INTO `lcn_region` VALUES (1668, 199, '桃源县', 3);
INSERT INTO `lcn_region` VALUES (1669, 199, '石门县', 3);
INSERT INTO `lcn_region` VALUES (1670, 200, '北湖区', 3);
INSERT INTO `lcn_region` VALUES (1671, 200, '苏仙区', 3);
INSERT INTO `lcn_region` VALUES (1672, 200, '资兴市', 3);
INSERT INTO `lcn_region` VALUES (1673, 200, '桂阳县', 3);
INSERT INTO `lcn_region` VALUES (1674, 200, '宜章县', 3);
INSERT INTO `lcn_region` VALUES (1675, 200, '永兴县', 3);
INSERT INTO `lcn_region` VALUES (1676, 200, '嘉禾县', 3);
INSERT INTO `lcn_region` VALUES (1677, 200, '临武县', 3);
INSERT INTO `lcn_region` VALUES (1678, 200, '汝城县', 3);
INSERT INTO `lcn_region` VALUES (1679, 200, '桂东县', 3);
INSERT INTO `lcn_region` VALUES (1680, 200, '安仁县', 3);
INSERT INTO `lcn_region` VALUES (1681, 201, '雁峰区', 3);
INSERT INTO `lcn_region` VALUES (1682, 201, '珠晖区', 3);
INSERT INTO `lcn_region` VALUES (1683, 201, '石鼓区', 3);
INSERT INTO `lcn_region` VALUES (1684, 201, '蒸湘区', 3);
INSERT INTO `lcn_region` VALUES (1685, 201, '南岳区', 3);
INSERT INTO `lcn_region` VALUES (1686, 201, '耒阳市', 3);
INSERT INTO `lcn_region` VALUES (1687, 201, '常宁市', 3);
INSERT INTO `lcn_region` VALUES (1688, 201, '衡阳县', 3);
INSERT INTO `lcn_region` VALUES (1689, 201, '衡南县', 3);
INSERT INTO `lcn_region` VALUES (1690, 201, '衡山县', 3);
INSERT INTO `lcn_region` VALUES (1691, 201, '衡东县', 3);
INSERT INTO `lcn_region` VALUES (1692, 201, '祁东县', 3);
INSERT INTO `lcn_region` VALUES (1693, 202, '鹤城区', 3);
INSERT INTO `lcn_region` VALUES (1694, 202, '靖州', 3);
INSERT INTO `lcn_region` VALUES (1695, 202, '麻阳', 3);
INSERT INTO `lcn_region` VALUES (1696, 202, '通道', 3);
INSERT INTO `lcn_region` VALUES (1697, 202, '新晃', 3);
INSERT INTO `lcn_region` VALUES (1698, 202, '芷江', 3);
INSERT INTO `lcn_region` VALUES (1699, 202, '沅陵县', 3);
INSERT INTO `lcn_region` VALUES (1700, 202, '辰溪县', 3);
INSERT INTO `lcn_region` VALUES (1701, 202, '溆浦县', 3);
INSERT INTO `lcn_region` VALUES (1702, 202, '中方县', 3);
INSERT INTO `lcn_region` VALUES (1703, 202, '会同县', 3);
INSERT INTO `lcn_region` VALUES (1704, 202, '洪江市', 3);
INSERT INTO `lcn_region` VALUES (1705, 203, '娄星区', 3);
INSERT INTO `lcn_region` VALUES (1706, 203, '冷水江市', 3);
INSERT INTO `lcn_region` VALUES (1707, 203, '涟源市', 3);
INSERT INTO `lcn_region` VALUES (1708, 203, '双峰县', 3);
INSERT INTO `lcn_region` VALUES (1709, 203, '新化县', 3);
INSERT INTO `lcn_region` VALUES (1710, 204, '城步', 3);
INSERT INTO `lcn_region` VALUES (1711, 204, '双清区', 3);
INSERT INTO `lcn_region` VALUES (1712, 204, '大祥区', 3);
INSERT INTO `lcn_region` VALUES (1713, 204, '北塔区', 3);
INSERT INTO `lcn_region` VALUES (1714, 204, '武冈市', 3);
INSERT INTO `lcn_region` VALUES (1715, 204, '邵东县', 3);
INSERT INTO `lcn_region` VALUES (1716, 204, '新邵县', 3);
INSERT INTO `lcn_region` VALUES (1717, 204, '邵阳县', 3);
INSERT INTO `lcn_region` VALUES (1718, 204, '隆回县', 3);
INSERT INTO `lcn_region` VALUES (1719, 204, '洞口县', 3);
INSERT INTO `lcn_region` VALUES (1720, 204, '绥宁县', 3);
INSERT INTO `lcn_region` VALUES (1721, 204, '新宁县', 3);
INSERT INTO `lcn_region` VALUES (1722, 205, '岳塘区', 3);
INSERT INTO `lcn_region` VALUES (1723, 205, '雨湖区', 3);
INSERT INTO `lcn_region` VALUES (1724, 205, '湘乡市', 3);
INSERT INTO `lcn_region` VALUES (1725, 205, '韶山市', 3);
INSERT INTO `lcn_region` VALUES (1726, 205, '湘潭县', 3);
INSERT INTO `lcn_region` VALUES (1727, 206, '吉首市', 3);
INSERT INTO `lcn_region` VALUES (1728, 206, '泸溪县', 3);
INSERT INTO `lcn_region` VALUES (1729, 206, '凤凰县', 3);
INSERT INTO `lcn_region` VALUES (1730, 206, '花垣县', 3);
INSERT INTO `lcn_region` VALUES (1731, 206, '保靖县', 3);
INSERT INTO `lcn_region` VALUES (1732, 206, '古丈县', 3);
INSERT INTO `lcn_region` VALUES (1733, 206, '永顺县', 3);
INSERT INTO `lcn_region` VALUES (1734, 206, '龙山县', 3);
INSERT INTO `lcn_region` VALUES (1735, 207, '赫山区', 3);
INSERT INTO `lcn_region` VALUES (1736, 207, '资阳区', 3);
INSERT INTO `lcn_region` VALUES (1737, 207, '沅江市', 3);
INSERT INTO `lcn_region` VALUES (1738, 207, '南县', 3);
INSERT INTO `lcn_region` VALUES (1739, 207, '桃江县', 3);
INSERT INTO `lcn_region` VALUES (1740, 207, '安化县', 3);
INSERT INTO `lcn_region` VALUES (1741, 208, '江华', 3);
INSERT INTO `lcn_region` VALUES (1742, 208, '冷水滩区', 3);
INSERT INTO `lcn_region` VALUES (1743, 208, '零陵区', 3);
INSERT INTO `lcn_region` VALUES (1744, 208, '祁阳县', 3);
INSERT INTO `lcn_region` VALUES (1745, 208, '东安县', 3);
INSERT INTO `lcn_region` VALUES (1746, 208, '双牌县', 3);
INSERT INTO `lcn_region` VALUES (1747, 208, '道县', 3);
INSERT INTO `lcn_region` VALUES (1748, 208, '江永县', 3);
INSERT INTO `lcn_region` VALUES (1749, 208, '宁远县', 3);
INSERT INTO `lcn_region` VALUES (1750, 208, '蓝山县', 3);
INSERT INTO `lcn_region` VALUES (1751, 208, '新田县', 3);
INSERT INTO `lcn_region` VALUES (1752, 209, '岳阳楼区', 3);
INSERT INTO `lcn_region` VALUES (1753, 209, '君山区', 3);
INSERT INTO `lcn_region` VALUES (1754, 209, '云溪区', 3);
INSERT INTO `lcn_region` VALUES (1755, 209, '汨罗市', 3);
INSERT INTO `lcn_region` VALUES (1756, 209, '临湘市', 3);
INSERT INTO `lcn_region` VALUES (1757, 209, '岳阳县', 3);
INSERT INTO `lcn_region` VALUES (1758, 209, '华容县', 3);
INSERT INTO `lcn_region` VALUES (1759, 209, '湘阴县', 3);
INSERT INTO `lcn_region` VALUES (1760, 209, '平江县', 3);
INSERT INTO `lcn_region` VALUES (1761, 210, '天元区', 3);
INSERT INTO `lcn_region` VALUES (1762, 210, '荷塘区', 3);
INSERT INTO `lcn_region` VALUES (1763, 210, '芦淞区', 3);
INSERT INTO `lcn_region` VALUES (1764, 210, '石峰区', 3);
INSERT INTO `lcn_region` VALUES (1765, 210, '醴陵市', 3);
INSERT INTO `lcn_region` VALUES (1766, 210, '株洲县', 3);
INSERT INTO `lcn_region` VALUES (1767, 210, '攸县', 3);
INSERT INTO `lcn_region` VALUES (1768, 210, '茶陵县', 3);
INSERT INTO `lcn_region` VALUES (1769, 210, '炎陵县', 3);
INSERT INTO `lcn_region` VALUES (1770, 211, '朝阳区', 3);
INSERT INTO `lcn_region` VALUES (1771, 211, '宽城区', 3);
INSERT INTO `lcn_region` VALUES (1772, 211, '二道区', 3);
INSERT INTO `lcn_region` VALUES (1773, 211, '南关区', 3);
INSERT INTO `lcn_region` VALUES (1774, 211, '绿园区', 3);
INSERT INTO `lcn_region` VALUES (1775, 211, '双阳区', 3);
INSERT INTO `lcn_region` VALUES (1776, 211, '净月潭开发区', 3);
INSERT INTO `lcn_region` VALUES (1777, 211, '高新技术开发区', 3);
INSERT INTO `lcn_region` VALUES (1778, 211, '经济技术开发区', 3);
INSERT INTO `lcn_region` VALUES (1779, 211, '汽车产业开发区', 3);
INSERT INTO `lcn_region` VALUES (1780, 211, '德惠市', 3);
INSERT INTO `lcn_region` VALUES (1781, 211, '九台市', 3);
INSERT INTO `lcn_region` VALUES (1782, 211, '榆树市', 3);
INSERT INTO `lcn_region` VALUES (1783, 211, '农安县', 3);
INSERT INTO `lcn_region` VALUES (1784, 212, '船营区', 3);
INSERT INTO `lcn_region` VALUES (1785, 212, '昌邑区', 3);
INSERT INTO `lcn_region` VALUES (1786, 212, '龙潭区', 3);
INSERT INTO `lcn_region` VALUES (1787, 212, '丰满区', 3);
INSERT INTO `lcn_region` VALUES (1788, 212, '蛟河市', 3);
INSERT INTO `lcn_region` VALUES (1789, 212, '桦甸市', 3);
INSERT INTO `lcn_region` VALUES (1790, 212, '舒兰市', 3);
INSERT INTO `lcn_region` VALUES (1791, 212, '磐石市', 3);
INSERT INTO `lcn_region` VALUES (1792, 212, '永吉县', 3);
INSERT INTO `lcn_region` VALUES (1793, 213, '洮北区', 3);
INSERT INTO `lcn_region` VALUES (1794, 213, '洮南市', 3);
INSERT INTO `lcn_region` VALUES (1795, 213, '大安市', 3);
INSERT INTO `lcn_region` VALUES (1796, 213, '镇赉县', 3);
INSERT INTO `lcn_region` VALUES (1797, 213, '通榆县', 3);
INSERT INTO `lcn_region` VALUES (1798, 214, '江源区', 3);
INSERT INTO `lcn_region` VALUES (1799, 214, '八道江区', 3);
INSERT INTO `lcn_region` VALUES (1800, 214, '长白', 3);
INSERT INTO `lcn_region` VALUES (1801, 214, '临江市', 3);
INSERT INTO `lcn_region` VALUES (1802, 214, '抚松县', 3);
INSERT INTO `lcn_region` VALUES (1803, 214, '靖宇县', 3);
INSERT INTO `lcn_region` VALUES (1804, 215, '龙山区', 3);
INSERT INTO `lcn_region` VALUES (1805, 215, '西安区', 3);
INSERT INTO `lcn_region` VALUES (1806, 215, '东丰县', 3);
INSERT INTO `lcn_region` VALUES (1807, 215, '东辽县', 3);
INSERT INTO `lcn_region` VALUES (1808, 216, '铁西区', 3);
INSERT INTO `lcn_region` VALUES (1809, 216, '铁东区', 3);
INSERT INTO `lcn_region` VALUES (1810, 216, '伊通', 3);
INSERT INTO `lcn_region` VALUES (1811, 216, '公主岭市', 3);
INSERT INTO `lcn_region` VALUES (1812, 216, '双辽市', 3);
INSERT INTO `lcn_region` VALUES (1813, 216, '梨树县', 3);
INSERT INTO `lcn_region` VALUES (1814, 217, '前郭尔罗斯', 3);
INSERT INTO `lcn_region` VALUES (1815, 217, '宁江区', 3);
INSERT INTO `lcn_region` VALUES (1816, 217, '长岭县', 3);
INSERT INTO `lcn_region` VALUES (1817, 217, '乾安县', 3);
INSERT INTO `lcn_region` VALUES (1818, 217, '扶余县', 3);
INSERT INTO `lcn_region` VALUES (1819, 218, '东昌区', 3);
INSERT INTO `lcn_region` VALUES (1820, 218, '二道江区', 3);
INSERT INTO `lcn_region` VALUES (1821, 218, '梅河口市', 3);
INSERT INTO `lcn_region` VALUES (1822, 218, '集安市', 3);
INSERT INTO `lcn_region` VALUES (1823, 218, '通化县', 3);
INSERT INTO `lcn_region` VALUES (1824, 218, '辉南县', 3);
INSERT INTO `lcn_region` VALUES (1825, 218, '柳河县', 3);
INSERT INTO `lcn_region` VALUES (1826, 219, '延吉市', 3);
INSERT INTO `lcn_region` VALUES (1827, 219, '图们市', 3);
INSERT INTO `lcn_region` VALUES (1828, 219, '敦化市', 3);
INSERT INTO `lcn_region` VALUES (1829, 219, '珲春市', 3);
INSERT INTO `lcn_region` VALUES (1830, 219, '龙井市', 3);
INSERT INTO `lcn_region` VALUES (1831, 219, '和龙市', 3);
INSERT INTO `lcn_region` VALUES (1832, 219, '安图县', 3);
INSERT INTO `lcn_region` VALUES (1833, 219, '汪清县', 3);
INSERT INTO `lcn_region` VALUES (1834, 220, '玄武区', 3);
INSERT INTO `lcn_region` VALUES (1835, 220, '鼓楼区', 3);
INSERT INTO `lcn_region` VALUES (1836, 220, '白下区', 3);
INSERT INTO `lcn_region` VALUES (1837, 220, '建邺区', 3);
INSERT INTO `lcn_region` VALUES (1838, 220, '秦淮区', 3);
INSERT INTO `lcn_region` VALUES (1839, 220, '雨花台区', 3);
INSERT INTO `lcn_region` VALUES (1840, 220, '下关区', 3);
INSERT INTO `lcn_region` VALUES (1841, 220, '栖霞区', 3);
INSERT INTO `lcn_region` VALUES (1842, 220, '浦口区', 3);
INSERT INTO `lcn_region` VALUES (1843, 220, '江宁区', 3);
INSERT INTO `lcn_region` VALUES (1844, 220, '六合区', 3);
INSERT INTO `lcn_region` VALUES (1845, 220, '溧水县', 3);
INSERT INTO `lcn_region` VALUES (1846, 220, '高淳县', 3);
INSERT INTO `lcn_region` VALUES (1847, 221, '沧浪区', 3);
INSERT INTO `lcn_region` VALUES (1848, 221, '金阊区', 3);
INSERT INTO `lcn_region` VALUES (1849, 221, '平江区', 3);
INSERT INTO `lcn_region` VALUES (1850, 221, '虎丘区', 3);
INSERT INTO `lcn_region` VALUES (1851, 221, '吴中区', 3);
INSERT INTO `lcn_region` VALUES (1852, 221, '相城区', 3);
INSERT INTO `lcn_region` VALUES (1853, 221, '园区', 3);
INSERT INTO `lcn_region` VALUES (1854, 221, '新区', 3);
INSERT INTO `lcn_region` VALUES (1855, 221, '常熟市', 3);
INSERT INTO `lcn_region` VALUES (1856, 221, '张家港市', 3);
INSERT INTO `lcn_region` VALUES (1857, 221, '玉山镇', 3);
INSERT INTO `lcn_region` VALUES (1858, 221, '巴城镇', 3);
INSERT INTO `lcn_region` VALUES (1859, 221, '周市镇', 3);
INSERT INTO `lcn_region` VALUES (1860, 221, '陆家镇', 3);
INSERT INTO `lcn_region` VALUES (1861, 221, '花桥镇', 3);
INSERT INTO `lcn_region` VALUES (1862, 221, '淀山湖镇', 3);
INSERT INTO `lcn_region` VALUES (1863, 221, '张浦镇', 3);
INSERT INTO `lcn_region` VALUES (1864, 221, '周庄镇', 3);
INSERT INTO `lcn_region` VALUES (1865, 221, '千灯镇', 3);
INSERT INTO `lcn_region` VALUES (1866, 221, '锦溪镇', 3);
INSERT INTO `lcn_region` VALUES (1867, 221, '开发区', 3);
INSERT INTO `lcn_region` VALUES (1868, 221, '吴江市', 3);
INSERT INTO `lcn_region` VALUES (1869, 221, '太仓市', 3);
INSERT INTO `lcn_region` VALUES (1870, 222, '崇安区', 3);
INSERT INTO `lcn_region` VALUES (1871, 222, '北塘区', 3);
INSERT INTO `lcn_region` VALUES (1872, 222, '南长区', 3);
INSERT INTO `lcn_region` VALUES (1873, 222, '锡山区', 3);
INSERT INTO `lcn_region` VALUES (1874, 222, '惠山区', 3);
INSERT INTO `lcn_region` VALUES (1875, 222, '滨湖区', 3);
INSERT INTO `lcn_region` VALUES (1876, 222, '新区', 3);
INSERT INTO `lcn_region` VALUES (1877, 222, '江阴市', 3);
INSERT INTO `lcn_region` VALUES (1878, 222, '宜兴市', 3);
INSERT INTO `lcn_region` VALUES (1879, 223, '天宁区', 3);
INSERT INTO `lcn_region` VALUES (1880, 223, '钟楼区', 3);
INSERT INTO `lcn_region` VALUES (1881, 223, '戚墅堰区', 3);
INSERT INTO `lcn_region` VALUES (1882, 223, '郊区', 3);
INSERT INTO `lcn_region` VALUES (1883, 223, '新北区', 3);
INSERT INTO `lcn_region` VALUES (1884, 223, '武进区', 3);
INSERT INTO `lcn_region` VALUES (1885, 223, '溧阳市', 3);
INSERT INTO `lcn_region` VALUES (1886, 223, '金坛市', 3);
INSERT INTO `lcn_region` VALUES (1887, 224, '清河区', 3);
INSERT INTO `lcn_region` VALUES (1888, 224, '清浦区', 3);
INSERT INTO `lcn_region` VALUES (1889, 224, '楚州区', 3);
INSERT INTO `lcn_region` VALUES (1890, 224, '淮阴区', 3);
INSERT INTO `lcn_region` VALUES (1891, 224, '涟水县', 3);
INSERT INTO `lcn_region` VALUES (1892, 224, '洪泽县', 3);
INSERT INTO `lcn_region` VALUES (1893, 224, '盱眙县', 3);
INSERT INTO `lcn_region` VALUES (1894, 224, '金湖县', 3);
INSERT INTO `lcn_region` VALUES (1895, 225, '新浦区', 3);
INSERT INTO `lcn_region` VALUES (1896, 225, '连云区', 3);
INSERT INTO `lcn_region` VALUES (1897, 225, '海州区', 3);
INSERT INTO `lcn_region` VALUES (1898, 225, '赣榆县', 3);
INSERT INTO `lcn_region` VALUES (1899, 225, '东海县', 3);
INSERT INTO `lcn_region` VALUES (1900, 225, '灌云县', 3);
INSERT INTO `lcn_region` VALUES (1901, 225, '灌南县', 3);
INSERT INTO `lcn_region` VALUES (1902, 226, '崇川区', 3);
INSERT INTO `lcn_region` VALUES (1903, 226, '港闸区', 3);
INSERT INTO `lcn_region` VALUES (1904, 226, '经济开发区', 3);
INSERT INTO `lcn_region` VALUES (1905, 226, '启东市', 3);
INSERT INTO `lcn_region` VALUES (1906, 226, '如皋市', 3);
INSERT INTO `lcn_region` VALUES (1907, 226, '通州市', 3);
INSERT INTO `lcn_region` VALUES (1908, 226, '海门市', 3);
INSERT INTO `lcn_region` VALUES (1909, 226, '海安县', 3);
INSERT INTO `lcn_region` VALUES (1910, 226, '如东县', 3);
INSERT INTO `lcn_region` VALUES (1911, 227, '宿城区', 3);
INSERT INTO `lcn_region` VALUES (1912, 227, '宿豫区', 3);
INSERT INTO `lcn_region` VALUES (1913, 227, '宿豫县', 3);
INSERT INTO `lcn_region` VALUES (1914, 227, '沭阳县', 3);
INSERT INTO `lcn_region` VALUES (1915, 227, '泗阳县', 3);
INSERT INTO `lcn_region` VALUES (1916, 227, '泗洪县', 3);
INSERT INTO `lcn_region` VALUES (1917, 228, '海陵区', 3);
INSERT INTO `lcn_region` VALUES (1918, 228, '高港区', 3);
INSERT INTO `lcn_region` VALUES (1919, 228, '兴化市', 3);
INSERT INTO `lcn_region` VALUES (1920, 228, '靖江市', 3);
INSERT INTO `lcn_region` VALUES (1921, 228, '泰兴市', 3);
INSERT INTO `lcn_region` VALUES (1922, 228, '姜堰市', 3);
INSERT INTO `lcn_region` VALUES (1923, 229, '云龙区', 3);
INSERT INTO `lcn_region` VALUES (1924, 229, '鼓楼区', 3);
INSERT INTO `lcn_region` VALUES (1925, 229, '九里区', 3);
INSERT INTO `lcn_region` VALUES (1926, 229, '贾汪区', 3);
INSERT INTO `lcn_region` VALUES (1927, 229, '泉山区', 3);
INSERT INTO `lcn_region` VALUES (1928, 229, '新沂市', 3);
INSERT INTO `lcn_region` VALUES (1929, 229, '邳州市', 3);
INSERT INTO `lcn_region` VALUES (1930, 229, '丰县', 3);
INSERT INTO `lcn_region` VALUES (1931, 229, '沛县', 3);
INSERT INTO `lcn_region` VALUES (1932, 229, '铜山县', 3);
INSERT INTO `lcn_region` VALUES (1933, 229, '睢宁县', 3);
INSERT INTO `lcn_region` VALUES (1934, 230, '城区', 3);
INSERT INTO `lcn_region` VALUES (1935, 230, '亭湖区', 3);
INSERT INTO `lcn_region` VALUES (1936, 230, '盐都区', 3);
INSERT INTO `lcn_region` VALUES (1937, 230, '盐都县', 3);
INSERT INTO `lcn_region` VALUES (1938, 230, '东台市', 3);
INSERT INTO `lcn_region` VALUES (1939, 230, '大丰市', 3);
INSERT INTO `lcn_region` VALUES (1940, 230, '响水县', 3);
INSERT INTO `lcn_region` VALUES (1941, 230, '滨海县', 3);
INSERT INTO `lcn_region` VALUES (1942, 230, '阜宁县', 3);
INSERT INTO `lcn_region` VALUES (1943, 230, '射阳县', 3);
INSERT INTO `lcn_region` VALUES (1944, 230, '建湖县', 3);
INSERT INTO `lcn_region` VALUES (1945, 231, '广陵区', 3);
INSERT INTO `lcn_region` VALUES (1946, 231, '维扬区', 3);
INSERT INTO `lcn_region` VALUES (1947, 231, '邗江区', 3);
INSERT INTO `lcn_region` VALUES (1948, 231, '仪征市', 3);
INSERT INTO `lcn_region` VALUES (1949, 231, '高邮市', 3);
INSERT INTO `lcn_region` VALUES (1950, 231, '江都市', 3);
INSERT INTO `lcn_region` VALUES (1951, 231, '宝应县', 3);
INSERT INTO `lcn_region` VALUES (1952, 232, '京口区', 3);
INSERT INTO `lcn_region` VALUES (1953, 232, '润州区', 3);
INSERT INTO `lcn_region` VALUES (1954, 232, '丹徒区', 3);
INSERT INTO `lcn_region` VALUES (1955, 232, '丹阳市', 3);
INSERT INTO `lcn_region` VALUES (1956, 232, '扬中市', 3);
INSERT INTO `lcn_region` VALUES (1957, 232, '句容市', 3);
INSERT INTO `lcn_region` VALUES (1958, 233, '东湖区', 3);
INSERT INTO `lcn_region` VALUES (1959, 233, '西湖区', 3);
INSERT INTO `lcn_region` VALUES (1960, 233, '青云谱区', 3);
INSERT INTO `lcn_region` VALUES (1961, 233, '湾里区', 3);
INSERT INTO `lcn_region` VALUES (1962, 233, '青山湖区', 3);
INSERT INTO `lcn_region` VALUES (1963, 233, '红谷滩新区', 3);
INSERT INTO `lcn_region` VALUES (1964, 233, '昌北区', 3);
INSERT INTO `lcn_region` VALUES (1965, 233, '高新区', 3);
INSERT INTO `lcn_region` VALUES (1966, 233, '南昌县', 3);
INSERT INTO `lcn_region` VALUES (1967, 233, '新建县', 3);
INSERT INTO `lcn_region` VALUES (1968, 233, '安义县', 3);
INSERT INTO `lcn_region` VALUES (1969, 233, '进贤县', 3);
INSERT INTO `lcn_region` VALUES (1970, 234, '临川区', 3);
INSERT INTO `lcn_region` VALUES (1971, 234, '南城县', 3);
INSERT INTO `lcn_region` VALUES (1972, 234, '黎川县', 3);
INSERT INTO `lcn_region` VALUES (1973, 234, '南丰县', 3);
INSERT INTO `lcn_region` VALUES (1974, 234, '崇仁县', 3);
INSERT INTO `lcn_region` VALUES (1975, 234, '乐安县', 3);
INSERT INTO `lcn_region` VALUES (1976, 234, '宜黄县', 3);
INSERT INTO `lcn_region` VALUES (1977, 234, '金溪县', 3);
INSERT INTO `lcn_region` VALUES (1978, 234, '资溪县', 3);
INSERT INTO `lcn_region` VALUES (1979, 234, '东乡县', 3);
INSERT INTO `lcn_region` VALUES (1980, 234, '广昌县', 3);
INSERT INTO `lcn_region` VALUES (1981, 235, '章贡区', 3);
INSERT INTO `lcn_region` VALUES (1982, 235, '于都县', 3);
INSERT INTO `lcn_region` VALUES (1983, 235, '瑞金市', 3);
INSERT INTO `lcn_region` VALUES (1984, 235, '南康市', 3);
INSERT INTO `lcn_region` VALUES (1985, 235, '赣县', 3);
INSERT INTO `lcn_region` VALUES (1986, 235, '信丰县', 3);
INSERT INTO `lcn_region` VALUES (1987, 235, '大余县', 3);
INSERT INTO `lcn_region` VALUES (1988, 235, '上犹县', 3);
INSERT INTO `lcn_region` VALUES (1989, 235, '崇义县', 3);
INSERT INTO `lcn_region` VALUES (1990, 235, '安远县', 3);
INSERT INTO `lcn_region` VALUES (1991, 235, '龙南县', 3);
INSERT INTO `lcn_region` VALUES (1992, 235, '定南县', 3);
INSERT INTO `lcn_region` VALUES (1993, 235, '全南县', 3);
INSERT INTO `lcn_region` VALUES (1994, 235, '宁都县', 3);
INSERT INTO `lcn_region` VALUES (1995, 235, '兴国县', 3);
INSERT INTO `lcn_region` VALUES (1996, 235, '会昌县', 3);
INSERT INTO `lcn_region` VALUES (1997, 235, '寻乌县', 3);
INSERT INTO `lcn_region` VALUES (1998, 235, '石城县', 3);
INSERT INTO `lcn_region` VALUES (1999, 236, '安福县', 3);
INSERT INTO `lcn_region` VALUES (2000, 236, '吉州区', 3);
INSERT INTO `lcn_region` VALUES (2001, 236, '青原区', 3);
INSERT INTO `lcn_region` VALUES (2002, 236, '井冈山市', 3);
INSERT INTO `lcn_region` VALUES (2003, 236, '吉安县', 3);
INSERT INTO `lcn_region` VALUES (2004, 236, '吉水县', 3);
INSERT INTO `lcn_region` VALUES (2005, 236, '峡江县', 3);
INSERT INTO `lcn_region` VALUES (2006, 236, '新干县', 3);
INSERT INTO `lcn_region` VALUES (2007, 236, '永丰县', 3);
INSERT INTO `lcn_region` VALUES (2008, 236, '泰和县', 3);
INSERT INTO `lcn_region` VALUES (2009, 236, '遂川县', 3);
INSERT INTO `lcn_region` VALUES (2010, 236, '万安县', 3);
INSERT INTO `lcn_region` VALUES (2011, 236, '永新县', 3);
INSERT INTO `lcn_region` VALUES (2012, 237, '珠山区', 3);
INSERT INTO `lcn_region` VALUES (2013, 237, '昌江区', 3);
INSERT INTO `lcn_region` VALUES (2014, 237, '乐平市', 3);
INSERT INTO `lcn_region` VALUES (2015, 237, '浮梁县', 3);
INSERT INTO `lcn_region` VALUES (2016, 238, '浔阳区', 3);
INSERT INTO `lcn_region` VALUES (2017, 238, '庐山区', 3);
INSERT INTO `lcn_region` VALUES (2018, 238, '瑞昌市', 3);
INSERT INTO `lcn_region` VALUES (2019, 238, '九江县', 3);
INSERT INTO `lcn_region` VALUES (2020, 238, '武宁县', 3);
INSERT INTO `lcn_region` VALUES (2021, 238, '修水县', 3);
INSERT INTO `lcn_region` VALUES (2022, 238, '永修县', 3);
INSERT INTO `lcn_region` VALUES (2023, 238, '德安县', 3);
INSERT INTO `lcn_region` VALUES (2024, 238, '星子县', 3);
INSERT INTO `lcn_region` VALUES (2025, 238, '都昌县', 3);
INSERT INTO `lcn_region` VALUES (2026, 238, '湖口县', 3);
INSERT INTO `lcn_region` VALUES (2027, 238, '彭泽县', 3);
INSERT INTO `lcn_region` VALUES (2028, 239, '安源区', 3);
INSERT INTO `lcn_region` VALUES (2029, 239, '湘东区', 3);
INSERT INTO `lcn_region` VALUES (2030, 239, '莲花县', 3);
INSERT INTO `lcn_region` VALUES (2031, 239, '芦溪县', 3);
INSERT INTO `lcn_region` VALUES (2032, 239, '上栗县', 3);
INSERT INTO `lcn_region` VALUES (2033, 240, '信州区', 3);
INSERT INTO `lcn_region` VALUES (2034, 240, '德兴市', 3);
INSERT INTO `lcn_region` VALUES (2035, 240, '上饶县', 3);
INSERT INTO `lcn_region` VALUES (2036, 240, '广丰县', 3);
INSERT INTO `lcn_region` VALUES (2037, 240, '玉山县', 3);
INSERT INTO `lcn_region` VALUES (2038, 240, '铅山县', 3);
INSERT INTO `lcn_region` VALUES (2039, 240, '横峰县', 3);
INSERT INTO `lcn_region` VALUES (2040, 240, '弋阳县', 3);
INSERT INTO `lcn_region` VALUES (2041, 240, '余干县', 3);
INSERT INTO `lcn_region` VALUES (2042, 240, '波阳县', 3);
INSERT INTO `lcn_region` VALUES (2043, 240, '万年县', 3);
INSERT INTO `lcn_region` VALUES (2044, 240, '婺源县', 3);
INSERT INTO `lcn_region` VALUES (2045, 241, '渝水区', 3);
INSERT INTO `lcn_region` VALUES (2046, 241, '分宜县', 3);
INSERT INTO `lcn_region` VALUES (2047, 242, '袁州区', 3);
INSERT INTO `lcn_region` VALUES (2048, 242, '丰城市', 3);
INSERT INTO `lcn_region` VALUES (2049, 242, '樟树市', 3);
INSERT INTO `lcn_region` VALUES (2050, 242, '高安市', 3);
INSERT INTO `lcn_region` VALUES (2051, 242, '奉新县', 3);
INSERT INTO `lcn_region` VALUES (2052, 242, '万载县', 3);
INSERT INTO `lcn_region` VALUES (2053, 242, '上高县', 3);
INSERT INTO `lcn_region` VALUES (2054, 242, '宜丰县', 3);
INSERT INTO `lcn_region` VALUES (2055, 242, '靖安县', 3);
INSERT INTO `lcn_region` VALUES (2056, 242, '铜鼓县', 3);
INSERT INTO `lcn_region` VALUES (2057, 243, '月湖区', 3);
INSERT INTO `lcn_region` VALUES (2058, 243, '贵溪市', 3);
INSERT INTO `lcn_region` VALUES (2059, 243, '余江县', 3);
INSERT INTO `lcn_region` VALUES (2060, 244, '沈河区', 3);
INSERT INTO `lcn_region` VALUES (2061, 244, '皇姑区', 3);
INSERT INTO `lcn_region` VALUES (2062, 244, '和平区', 3);
INSERT INTO `lcn_region` VALUES (2063, 244, '大东区', 3);
INSERT INTO `lcn_region` VALUES (2064, 244, '铁西区', 3);
INSERT INTO `lcn_region` VALUES (2065, 244, '苏家屯区', 3);
INSERT INTO `lcn_region` VALUES (2066, 244, '东陵区', 3);
INSERT INTO `lcn_region` VALUES (2067, 244, '沈北新区', 3);
INSERT INTO `lcn_region` VALUES (2068, 244, '于洪区', 3);
INSERT INTO `lcn_region` VALUES (2069, 244, '浑南新区', 3);
INSERT INTO `lcn_region` VALUES (2070, 244, '新民市', 3);
INSERT INTO `lcn_region` VALUES (2071, 244, '辽中县', 3);
INSERT INTO `lcn_region` VALUES (2072, 244, '康平县', 3);
INSERT INTO `lcn_region` VALUES (2073, 244, '法库县', 3);
INSERT INTO `lcn_region` VALUES (2074, 245, '西岗区', 3);
INSERT INTO `lcn_region` VALUES (2075, 245, '中山区', 3);
INSERT INTO `lcn_region` VALUES (2076, 245, '沙河口区', 3);
INSERT INTO `lcn_region` VALUES (2077, 245, '甘井子区', 3);
INSERT INTO `lcn_region` VALUES (2078, 245, '旅顺口区', 3);
INSERT INTO `lcn_region` VALUES (2079, 245, '金州区', 3);
INSERT INTO `lcn_region` VALUES (2080, 245, '开发区', 3);
INSERT INTO `lcn_region` VALUES (2081, 245, '瓦房店市', 3);
INSERT INTO `lcn_region` VALUES (2082, 245, '普兰店市', 3);
INSERT INTO `lcn_region` VALUES (2083, 245, '庄河市', 3);
INSERT INTO `lcn_region` VALUES (2084, 245, '长海县', 3);
INSERT INTO `lcn_region` VALUES (2085, 246, '铁东区', 3);
INSERT INTO `lcn_region` VALUES (2086, 246, '铁西区', 3);
INSERT INTO `lcn_region` VALUES (2087, 246, '立山区', 3);
INSERT INTO `lcn_region` VALUES (2088, 246, '千山区', 3);
INSERT INTO `lcn_region` VALUES (2089, 246, '岫岩', 3);
INSERT INTO `lcn_region` VALUES (2090, 246, '海城市', 3);
INSERT INTO `lcn_region` VALUES (2091, 246, '台安县', 3);
INSERT INTO `lcn_region` VALUES (2092, 247, '本溪', 3);
INSERT INTO `lcn_region` VALUES (2093, 247, '平山区', 3);
INSERT INTO `lcn_region` VALUES (2094, 247, '明山区', 3);
INSERT INTO `lcn_region` VALUES (2095, 247, '溪湖区', 3);
INSERT INTO `lcn_region` VALUES (2096, 247, '南芬区', 3);
INSERT INTO `lcn_region` VALUES (2097, 247, '桓仁', 3);
INSERT INTO `lcn_region` VALUES (2098, 248, '双塔区', 3);
INSERT INTO `lcn_region` VALUES (2099, 248, '龙城区', 3);
INSERT INTO `lcn_region` VALUES (2100, 248, '喀喇沁左翼蒙古族自治县', 3);
INSERT INTO `lcn_region` VALUES (2101, 248, '北票市', 3);
INSERT INTO `lcn_region` VALUES (2102, 248, '凌源市', 3);
INSERT INTO `lcn_region` VALUES (2103, 248, '朝阳县', 3);
INSERT INTO `lcn_region` VALUES (2104, 248, '建平县', 3);
INSERT INTO `lcn_region` VALUES (2105, 249, '振兴区', 3);
INSERT INTO `lcn_region` VALUES (2106, 249, '元宝区', 3);
INSERT INTO `lcn_region` VALUES (2107, 249, '振安区', 3);
INSERT INTO `lcn_region` VALUES (2108, 249, '宽甸', 3);
INSERT INTO `lcn_region` VALUES (2109, 249, '东港市', 3);
INSERT INTO `lcn_region` VALUES (2110, 249, '凤城市', 3);
INSERT INTO `lcn_region` VALUES (2111, 250, '顺城区', 3);
INSERT INTO `lcn_region` VALUES (2112, 250, '新抚区', 3);
INSERT INTO `lcn_region` VALUES (2113, 250, '东洲区', 3);
INSERT INTO `lcn_region` VALUES (2114, 250, '望花区', 3);
INSERT INTO `lcn_region` VALUES (2115, 250, '清原', 3);
INSERT INTO `lcn_region` VALUES (2116, 250, '新宾', 3);
INSERT INTO `lcn_region` VALUES (2117, 250, '抚顺县', 3);
INSERT INTO `lcn_region` VALUES (2118, 251, '阜新', 3);
INSERT INTO `lcn_region` VALUES (2119, 251, '海州区', 3);
INSERT INTO `lcn_region` VALUES (2120, 251, '新邱区', 3);
INSERT INTO `lcn_region` VALUES (2121, 251, '太平区', 3);
INSERT INTO `lcn_region` VALUES (2122, 251, '清河门区', 3);
INSERT INTO `lcn_region` VALUES (2123, 251, '细河区', 3);
INSERT INTO `lcn_region` VALUES (2124, 251, '彰武县', 3);
INSERT INTO `lcn_region` VALUES (2125, 252, '龙港区', 3);
INSERT INTO `lcn_region` VALUES (2126, 252, '南票区', 3);
INSERT INTO `lcn_region` VALUES (2127, 252, '连山区', 3);
INSERT INTO `lcn_region` VALUES (2128, 252, '兴城市', 3);
INSERT INTO `lcn_region` VALUES (2129, 252, '绥中县', 3);
INSERT INTO `lcn_region` VALUES (2130, 252, '建昌县', 3);
INSERT INTO `lcn_region` VALUES (2131, 253, '太和区', 3);
INSERT INTO `lcn_region` VALUES (2132, 253, '古塔区', 3);
INSERT INTO `lcn_region` VALUES (2133, 253, '凌河区', 3);
INSERT INTO `lcn_region` VALUES (2134, 253, '凌海市', 3);
INSERT INTO `lcn_region` VALUES (2135, 253, '北镇市', 3);
INSERT INTO `lcn_region` VALUES (2136, 253, '黑山县', 3);
INSERT INTO `lcn_region` VALUES (2137, 253, '义县', 3);
INSERT INTO `lcn_region` VALUES (2138, 254, '白塔区', 3);
INSERT INTO `lcn_region` VALUES (2139, 254, '文圣区', 3);
INSERT INTO `lcn_region` VALUES (2140, 254, '宏伟区', 3);
INSERT INTO `lcn_region` VALUES (2141, 254, '太子河区', 3);
INSERT INTO `lcn_region` VALUES (2142, 254, '弓长岭区', 3);
INSERT INTO `lcn_region` VALUES (2143, 254, '灯塔市', 3);
INSERT INTO `lcn_region` VALUES (2144, 254, '辽阳县', 3);
INSERT INTO `lcn_region` VALUES (2145, 255, '双台子区', 3);
INSERT INTO `lcn_region` VALUES (2146, 255, '兴隆台区', 3);
INSERT INTO `lcn_region` VALUES (2147, 255, '大洼县', 3);
INSERT INTO `lcn_region` VALUES (2148, 255, '盘山县', 3);
INSERT INTO `lcn_region` VALUES (2149, 256, '银州区', 3);
INSERT INTO `lcn_region` VALUES (2150, 256, '清河区', 3);
INSERT INTO `lcn_region` VALUES (2151, 256, '调兵山市', 3);
INSERT INTO `lcn_region` VALUES (2152, 256, '开原市', 3);
INSERT INTO `lcn_region` VALUES (2153, 256, '铁岭县', 3);
INSERT INTO `lcn_region` VALUES (2154, 256, '西丰县', 3);
INSERT INTO `lcn_region` VALUES (2155, 256, '昌图县', 3);
INSERT INTO `lcn_region` VALUES (2156, 257, '站前区', 3);
INSERT INTO `lcn_region` VALUES (2157, 257, '西市区', 3);
INSERT INTO `lcn_region` VALUES (2158, 257, '鲅鱼圈区', 3);
INSERT INTO `lcn_region` VALUES (2159, 257, '老边区', 3);
INSERT INTO `lcn_region` VALUES (2160, 257, '盖州市', 3);
INSERT INTO `lcn_region` VALUES (2161, 257, '大石桥市', 3);
INSERT INTO `lcn_region` VALUES (2162, 258, '回民区', 3);
INSERT INTO `lcn_region` VALUES (2163, 258, '玉泉区', 3);
INSERT INTO `lcn_region` VALUES (2164, 258, '新城区', 3);
INSERT INTO `lcn_region` VALUES (2165, 258, '赛罕区', 3);
INSERT INTO `lcn_region` VALUES (2166, 258, '清水河县', 3);
INSERT INTO `lcn_region` VALUES (2167, 258, '土默特左旗', 3);
INSERT INTO `lcn_region` VALUES (2168, 258, '托克托县', 3);
INSERT INTO `lcn_region` VALUES (2169, 258, '和林格尔县', 3);
INSERT INTO `lcn_region` VALUES (2170, 258, '武川县', 3);
INSERT INTO `lcn_region` VALUES (2171, 259, '阿拉善左旗', 3);
INSERT INTO `lcn_region` VALUES (2172, 259, '阿拉善右旗', 3);
INSERT INTO `lcn_region` VALUES (2173, 259, '额济纳旗', 3);
INSERT INTO `lcn_region` VALUES (2174, 260, '临河区', 3);
INSERT INTO `lcn_region` VALUES (2175, 260, '五原县', 3);
INSERT INTO `lcn_region` VALUES (2176, 260, '磴口县', 3);
INSERT INTO `lcn_region` VALUES (2177, 260, '乌拉特前旗', 3);
INSERT INTO `lcn_region` VALUES (2178, 260, '乌拉特中旗', 3);
INSERT INTO `lcn_region` VALUES (2179, 260, '乌拉特后旗', 3);
INSERT INTO `lcn_region` VALUES (2180, 260, '杭锦后旗', 3);
INSERT INTO `lcn_region` VALUES (2181, 261, '昆都仑区', 3);
INSERT INTO `lcn_region` VALUES (2182, 261, '青山区', 3);
INSERT INTO `lcn_region` VALUES (2183, 261, '东河区', 3);
INSERT INTO `lcn_region` VALUES (2184, 261, '九原区', 3);
INSERT INTO `lcn_region` VALUES (2185, 261, '石拐区', 3);
INSERT INTO `lcn_region` VALUES (2186, 261, '白云矿区', 3);
INSERT INTO `lcn_region` VALUES (2187, 261, '土默特右旗', 3);
INSERT INTO `lcn_region` VALUES (2188, 261, '固阳县', 3);
INSERT INTO `lcn_region` VALUES (2189, 261, '达尔罕茂明安联合旗', 3);
INSERT INTO `lcn_region` VALUES (2190, 262, '红山区', 3);
INSERT INTO `lcn_region` VALUES (2191, 262, '元宝山区', 3);
INSERT INTO `lcn_region` VALUES (2192, 262, '松山区', 3);
INSERT INTO `lcn_region` VALUES (2193, 262, '阿鲁科尔沁旗', 3);
INSERT INTO `lcn_region` VALUES (2194, 262, '巴林左旗', 3);
INSERT INTO `lcn_region` VALUES (2195, 262, '巴林右旗', 3);
INSERT INTO `lcn_region` VALUES (2196, 262, '林西县', 3);
INSERT INTO `lcn_region` VALUES (2197, 262, '克什克腾旗', 3);
INSERT INTO `lcn_region` VALUES (2198, 262, '翁牛特旗', 3);
INSERT INTO `lcn_region` VALUES (2199, 262, '喀喇沁旗', 3);
INSERT INTO `lcn_region` VALUES (2200, 262, '宁城县', 3);
INSERT INTO `lcn_region` VALUES (2201, 262, '敖汉旗', 3);
INSERT INTO `lcn_region` VALUES (2202, 263, '东胜区', 3);
INSERT INTO `lcn_region` VALUES (2203, 263, '达拉特旗', 3);
INSERT INTO `lcn_region` VALUES (2204, 263, '准格尔旗', 3);
INSERT INTO `lcn_region` VALUES (2205, 263, '鄂托克前旗', 3);
INSERT INTO `lcn_region` VALUES (2206, 263, '鄂托克旗', 3);
INSERT INTO `lcn_region` VALUES (2207, 263, '杭锦旗', 3);
INSERT INTO `lcn_region` VALUES (2208, 263, '乌审旗', 3);
INSERT INTO `lcn_region` VALUES (2209, 263, '伊金霍洛旗', 3);
INSERT INTO `lcn_region` VALUES (2210, 264, '海拉尔区', 3);
INSERT INTO `lcn_region` VALUES (2211, 264, '莫力达瓦', 3);
INSERT INTO `lcn_region` VALUES (2212, 264, '满洲里市', 3);
INSERT INTO `lcn_region` VALUES (2213, 264, '牙克石市', 3);
INSERT INTO `lcn_region` VALUES (2214, 264, '扎兰屯市', 3);
INSERT INTO `lcn_region` VALUES (2215, 264, '额尔古纳市', 3);
INSERT INTO `lcn_region` VALUES (2216, 264, '根河市', 3);
INSERT INTO `lcn_region` VALUES (2217, 264, '阿荣旗', 3);
INSERT INTO `lcn_region` VALUES (2218, 264, '鄂伦春自治旗', 3);
INSERT INTO `lcn_region` VALUES (2219, 264, '鄂温克族自治旗', 3);
INSERT INTO `lcn_region` VALUES (2220, 264, '陈巴尔虎旗', 3);
INSERT INTO `lcn_region` VALUES (2221, 264, '新巴尔虎左旗', 3);
INSERT INTO `lcn_region` VALUES (2222, 264, '新巴尔虎右旗', 3);
INSERT INTO `lcn_region` VALUES (2223, 265, '科尔沁区', 3);
INSERT INTO `lcn_region` VALUES (2224, 265, '霍林郭勒市', 3);
INSERT INTO `lcn_region` VALUES (2225, 265, '科尔沁左翼中旗', 3);
INSERT INTO `lcn_region` VALUES (2226, 265, '科尔沁左翼后旗', 3);
INSERT INTO `lcn_region` VALUES (2227, 265, '开鲁县', 3);
INSERT INTO `lcn_region` VALUES (2228, 265, '库伦旗', 3);
INSERT INTO `lcn_region` VALUES (2229, 265, '奈曼旗', 3);
INSERT INTO `lcn_region` VALUES (2230, 265, '扎鲁特旗', 3);
INSERT INTO `lcn_region` VALUES (2231, 266, '海勃湾区', 3);
INSERT INTO `lcn_region` VALUES (2232, 266, '乌达区', 3);
INSERT INTO `lcn_region` VALUES (2233, 266, '海南区', 3);
INSERT INTO `lcn_region` VALUES (2234, 267, '化德县', 3);
INSERT INTO `lcn_region` VALUES (2235, 267, '集宁区', 3);
INSERT INTO `lcn_region` VALUES (2236, 267, '丰镇市', 3);
INSERT INTO `lcn_region` VALUES (2237, 267, '卓资县', 3);
INSERT INTO `lcn_region` VALUES (2238, 267, '商都县', 3);
INSERT INTO `lcn_region` VALUES (2239, 267, '兴和县', 3);
INSERT INTO `lcn_region` VALUES (2240, 267, '凉城县', 3);
INSERT INTO `lcn_region` VALUES (2241, 267, '察哈尔右翼前旗', 3);
INSERT INTO `lcn_region` VALUES (2242, 267, '察哈尔右翼中旗', 3);
INSERT INTO `lcn_region` VALUES (2243, 267, '察哈尔右翼后旗', 3);
INSERT INTO `lcn_region` VALUES (2244, 267, '四子王旗', 3);
INSERT INTO `lcn_region` VALUES (2245, 268, '二连浩特市', 3);
INSERT INTO `lcn_region` VALUES (2246, 268, '锡林浩特市', 3);
INSERT INTO `lcn_region` VALUES (2247, 268, '阿巴嘎旗', 3);
INSERT INTO `lcn_region` VALUES (2248, 268, '苏尼特左旗', 3);
INSERT INTO `lcn_region` VALUES (2249, 268, '苏尼特右旗', 3);
INSERT INTO `lcn_region` VALUES (2250, 268, '东乌珠穆沁旗', 3);
INSERT INTO `lcn_region` VALUES (2251, 268, '西乌珠穆沁旗', 3);
INSERT INTO `lcn_region` VALUES (2252, 268, '太仆寺旗', 3);
INSERT INTO `lcn_region` VALUES (2253, 268, '镶黄旗', 3);
INSERT INTO `lcn_region` VALUES (2254, 268, '正镶白旗', 3);
INSERT INTO `lcn_region` VALUES (2255, 268, '正蓝旗', 3);
INSERT INTO `lcn_region` VALUES (2256, 268, '多伦县', 3);
INSERT INTO `lcn_region` VALUES (2257, 269, '乌兰浩特市', 3);
INSERT INTO `lcn_region` VALUES (2258, 269, '阿尔山市', 3);
INSERT INTO `lcn_region` VALUES (2259, 269, '科尔沁右翼前旗', 3);
INSERT INTO `lcn_region` VALUES (2260, 269, '科尔沁右翼中旗', 3);
INSERT INTO `lcn_region` VALUES (2261, 269, '扎赉特旗', 3);
INSERT INTO `lcn_region` VALUES (2262, 269, '突泉县', 3);
INSERT INTO `lcn_region` VALUES (2263, 270, '西夏区', 3);
INSERT INTO `lcn_region` VALUES (2264, 270, '金凤区', 3);
INSERT INTO `lcn_region` VALUES (2265, 270, '兴庆区', 3);
INSERT INTO `lcn_region` VALUES (2266, 270, '灵武市', 3);
INSERT INTO `lcn_region` VALUES (2267, 270, '永宁县', 3);
INSERT INTO `lcn_region` VALUES (2268, 270, '贺兰县', 3);
INSERT INTO `lcn_region` VALUES (2269, 271, '原州区', 3);
INSERT INTO `lcn_region` VALUES (2270, 271, '海原县', 3);
INSERT INTO `lcn_region` VALUES (2271, 271, '西吉县', 3);
INSERT INTO `lcn_region` VALUES (2272, 271, '隆德县', 3);
INSERT INTO `lcn_region` VALUES (2273, 271, '泾源县', 3);
INSERT INTO `lcn_region` VALUES (2274, 271, '彭阳县', 3);
INSERT INTO `lcn_region` VALUES (2275, 272, '惠农县', 3);
INSERT INTO `lcn_region` VALUES (2276, 272, '大武口区', 3);
INSERT INTO `lcn_region` VALUES (2277, 272, '惠农区', 3);
INSERT INTO `lcn_region` VALUES (2278, 272, '陶乐县', 3);
INSERT INTO `lcn_region` VALUES (2279, 272, '平罗县', 3);
INSERT INTO `lcn_region` VALUES (2280, 273, '利通区', 3);
INSERT INTO `lcn_region` VALUES (2281, 273, '中卫县', 3);
INSERT INTO `lcn_region` VALUES (2282, 273, '青铜峡市', 3);
INSERT INTO `lcn_region` VALUES (2283, 273, '中宁县', 3);
INSERT INTO `lcn_region` VALUES (2284, 273, '盐池县', 3);
INSERT INTO `lcn_region` VALUES (2285, 273, '同心县', 3);
INSERT INTO `lcn_region` VALUES (2286, 274, '沙坡头区', 3);
INSERT INTO `lcn_region` VALUES (2287, 274, '海原县', 3);
INSERT INTO `lcn_region` VALUES (2288, 274, '中宁县', 3);
INSERT INTO `lcn_region` VALUES (2289, 275, '城中区', 3);
INSERT INTO `lcn_region` VALUES (2290, 275, '城东区', 3);
INSERT INTO `lcn_region` VALUES (2291, 275, '城西区', 3);
INSERT INTO `lcn_region` VALUES (2292, 275, '城北区', 3);
INSERT INTO `lcn_region` VALUES (2293, 275, '湟中县', 3);
INSERT INTO `lcn_region` VALUES (2294, 275, '湟源县', 3);
INSERT INTO `lcn_region` VALUES (2295, 275, '大通', 3);
INSERT INTO `lcn_region` VALUES (2296, 276, '玛沁县', 3);
INSERT INTO `lcn_region` VALUES (2297, 276, '班玛县', 3);
INSERT INTO `lcn_region` VALUES (2298, 276, '甘德县', 3);
INSERT INTO `lcn_region` VALUES (2299, 276, '达日县', 3);
INSERT INTO `lcn_region` VALUES (2300, 276, '久治县', 3);
INSERT INTO `lcn_region` VALUES (2301, 276, '玛多县', 3);
INSERT INTO `lcn_region` VALUES (2302, 277, '海晏县', 3);
INSERT INTO `lcn_region` VALUES (2303, 277, '祁连县', 3);
INSERT INTO `lcn_region` VALUES (2304, 277, '刚察县', 3);
INSERT INTO `lcn_region` VALUES (2305, 277, '门源', 3);
INSERT INTO `lcn_region` VALUES (2306, 278, '平安县', 3);
INSERT INTO `lcn_region` VALUES (2307, 278, '乐都县', 3);
INSERT INTO `lcn_region` VALUES (2308, 278, '民和', 3);
INSERT INTO `lcn_region` VALUES (2309, 278, '互助', 3);
INSERT INTO `lcn_region` VALUES (2310, 278, '化隆', 3);
INSERT INTO `lcn_region` VALUES (2311, 278, '循化', 3);
INSERT INTO `lcn_region` VALUES (2312, 279, '共和县', 3);
INSERT INTO `lcn_region` VALUES (2313, 279, '同德县', 3);
INSERT INTO `lcn_region` VALUES (2314, 279, '贵德县', 3);
INSERT INTO `lcn_region` VALUES (2315, 279, '兴海县', 3);
INSERT INTO `lcn_region` VALUES (2316, 279, '贵南县', 3);
INSERT INTO `lcn_region` VALUES (2317, 280, '德令哈市', 3);
INSERT INTO `lcn_region` VALUES (2318, 280, '格尔木市', 3);
INSERT INTO `lcn_region` VALUES (2319, 280, '乌兰县', 3);
INSERT INTO `lcn_region` VALUES (2320, 280, '都兰县', 3);
INSERT INTO `lcn_region` VALUES (2321, 280, '天峻县', 3);
INSERT INTO `lcn_region` VALUES (2322, 281, '同仁县', 3);
INSERT INTO `lcn_region` VALUES (2323, 281, '尖扎县', 3);
INSERT INTO `lcn_region` VALUES (2324, 281, '泽库县', 3);
INSERT INTO `lcn_region` VALUES (2325, 281, '河南蒙古族自治县', 3);
INSERT INTO `lcn_region` VALUES (2326, 282, '玉树县', 3);
INSERT INTO `lcn_region` VALUES (2327, 282, '杂多县', 3);
INSERT INTO `lcn_region` VALUES (2328, 282, '称多县', 3);
INSERT INTO `lcn_region` VALUES (2329, 282, '治多县', 3);
INSERT INTO `lcn_region` VALUES (2330, 282, '囊谦县', 3);
INSERT INTO `lcn_region` VALUES (2331, 282, '曲麻莱县', 3);
INSERT INTO `lcn_region` VALUES (2332, 283, '市中区', 3);
INSERT INTO `lcn_region` VALUES (2333, 283, '历下区', 3);
INSERT INTO `lcn_region` VALUES (2334, 283, '天桥区', 3);
INSERT INTO `lcn_region` VALUES (2335, 283, '槐荫区', 3);
INSERT INTO `lcn_region` VALUES (2336, 283, '历城区', 3);
INSERT INTO `lcn_region` VALUES (2337, 283, '长清区', 3);
INSERT INTO `lcn_region` VALUES (2338, 283, '章丘市', 3);
INSERT INTO `lcn_region` VALUES (2339, 283, '平阴县', 3);
INSERT INTO `lcn_region` VALUES (2340, 283, '济阳县', 3);
INSERT INTO `lcn_region` VALUES (2341, 283, '商河县', 3);
INSERT INTO `lcn_region` VALUES (2342, 284, '市南区', 3);
INSERT INTO `lcn_region` VALUES (2343, 284, '市北区', 3);
INSERT INTO `lcn_region` VALUES (2344, 284, '城阳区', 3);
INSERT INTO `lcn_region` VALUES (2345, 284, '四方区', 3);
INSERT INTO `lcn_region` VALUES (2346, 284, '李沧区', 3);
INSERT INTO `lcn_region` VALUES (2347, 284, '黄岛区', 3);
INSERT INTO `lcn_region` VALUES (2348, 284, '崂山区', 3);
INSERT INTO `lcn_region` VALUES (2349, 284, '胶州市', 3);
INSERT INTO `lcn_region` VALUES (2350, 284, '即墨市', 3);
INSERT INTO `lcn_region` VALUES (2351, 284, '平度市', 3);
INSERT INTO `lcn_region` VALUES (2352, 284, '胶南市', 3);
INSERT INTO `lcn_region` VALUES (2353, 284, '莱西市', 3);
INSERT INTO `lcn_region` VALUES (2354, 285, '滨城区', 3);
INSERT INTO `lcn_region` VALUES (2355, 285, '惠民县', 3);
INSERT INTO `lcn_region` VALUES (2356, 285, '阳信县', 3);
INSERT INTO `lcn_region` VALUES (2357, 285, '无棣县', 3);
INSERT INTO `lcn_region` VALUES (2358, 285, '沾化县', 3);
INSERT INTO `lcn_region` VALUES (2359, 285, '博兴县', 3);
INSERT INTO `lcn_region` VALUES (2360, 285, '邹平县', 3);
INSERT INTO `lcn_region` VALUES (2361, 286, '德城区', 3);
INSERT INTO `lcn_region` VALUES (2362, 286, '陵县', 3);
INSERT INTO `lcn_region` VALUES (2363, 286, '乐陵市', 3);
INSERT INTO `lcn_region` VALUES (2364, 286, '禹城市', 3);
INSERT INTO `lcn_region` VALUES (2365, 286, '宁津县', 3);
INSERT INTO `lcn_region` VALUES (2366, 286, '庆云县', 3);
INSERT INTO `lcn_region` VALUES (2367, 286, '临邑县', 3);
INSERT INTO `lcn_region` VALUES (2368, 286, '齐河县', 3);
INSERT INTO `lcn_region` VALUES (2369, 286, '平原县', 3);
INSERT INTO `lcn_region` VALUES (2370, 286, '夏津县', 3);
INSERT INTO `lcn_region` VALUES (2371, 286, '武城县', 3);
INSERT INTO `lcn_region` VALUES (2372, 287, '东营区', 3);
INSERT INTO `lcn_region` VALUES (2373, 287, '河口区', 3);
INSERT INTO `lcn_region` VALUES (2374, 287, '垦利县', 3);
INSERT INTO `lcn_region` VALUES (2375, 287, '利津县', 3);
INSERT INTO `lcn_region` VALUES (2376, 287, '广饶县', 3);
INSERT INTO `lcn_region` VALUES (2377, 288, '牡丹区', 3);
INSERT INTO `lcn_region` VALUES (2378, 288, '曹县', 3);
INSERT INTO `lcn_region` VALUES (2379, 288, '单县', 3);
INSERT INTO `lcn_region` VALUES (2380, 288, '成武县', 3);
INSERT INTO `lcn_region` VALUES (2381, 288, '巨野县', 3);
INSERT INTO `lcn_region` VALUES (2382, 288, '郓城县', 3);
INSERT INTO `lcn_region` VALUES (2383, 288, '鄄城县', 3);
INSERT INTO `lcn_region` VALUES (2384, 288, '定陶县', 3);
INSERT INTO `lcn_region` VALUES (2385, 288, '东明县', 3);
INSERT INTO `lcn_region` VALUES (2386, 289, '市中区', 3);
INSERT INTO `lcn_region` VALUES (2387, 289, '任城区', 3);
INSERT INTO `lcn_region` VALUES (2388, 289, '曲阜市', 3);
INSERT INTO `lcn_region` VALUES (2389, 289, '兖州市', 3);
INSERT INTO `lcn_region` VALUES (2390, 289, '邹城市', 3);
INSERT INTO `lcn_region` VALUES (2391, 289, '微山县', 3);
INSERT INTO `lcn_region` VALUES (2392, 289, '鱼台县', 3);
INSERT INTO `lcn_region` VALUES (2393, 289, '金乡县', 3);
INSERT INTO `lcn_region` VALUES (2394, 289, '嘉祥县', 3);
INSERT INTO `lcn_region` VALUES (2395, 289, '汶上县', 3);
INSERT INTO `lcn_region` VALUES (2396, 289, '泗水县', 3);
INSERT INTO `lcn_region` VALUES (2397, 289, '梁山县', 3);
INSERT INTO `lcn_region` VALUES (2398, 290, '莱城区', 3);
INSERT INTO `lcn_region` VALUES (2399, 290, '钢城区', 3);
INSERT INTO `lcn_region` VALUES (2400, 291, '东昌府区', 3);
INSERT INTO `lcn_region` VALUES (2401, 291, '临清市', 3);
INSERT INTO `lcn_region` VALUES (2402, 291, '阳谷县', 3);
INSERT INTO `lcn_region` VALUES (2403, 291, '莘县', 3);
INSERT INTO `lcn_region` VALUES (2404, 291, '茌平县', 3);
INSERT INTO `lcn_region` VALUES (2405, 291, '东阿县', 3);
INSERT INTO `lcn_region` VALUES (2406, 291, '冠县', 3);
INSERT INTO `lcn_region` VALUES (2407, 291, '高唐县', 3);
INSERT INTO `lcn_region` VALUES (2408, 292, '兰山区', 3);
INSERT INTO `lcn_region` VALUES (2409, 292, '罗庄区', 3);
INSERT INTO `lcn_region` VALUES (2410, 292, '河东区', 3);
INSERT INTO `lcn_region` VALUES (2411, 292, '沂南县', 3);
INSERT INTO `lcn_region` VALUES (2412, 292, '郯城县', 3);
INSERT INTO `lcn_region` VALUES (2413, 292, '沂水县', 3);
INSERT INTO `lcn_region` VALUES (2414, 292, '苍山县', 3);
INSERT INTO `lcn_region` VALUES (2415, 292, '费县', 3);
INSERT INTO `lcn_region` VALUES (2416, 292, '平邑县', 3);
INSERT INTO `lcn_region` VALUES (2417, 292, '莒南县', 3);
INSERT INTO `lcn_region` VALUES (2418, 292, '蒙阴县', 3);
INSERT INTO `lcn_region` VALUES (2419, 292, '临沭县', 3);
INSERT INTO `lcn_region` VALUES (2420, 293, '东港区', 3);
INSERT INTO `lcn_region` VALUES (2421, 293, '岚山区', 3);
INSERT INTO `lcn_region` VALUES (2422, 293, '五莲县', 3);
INSERT INTO `lcn_region` VALUES (2423, 293, '莒县', 3);
INSERT INTO `lcn_region` VALUES (2424, 294, '泰山区', 3);
INSERT INTO `lcn_region` VALUES (2425, 294, '岱岳区', 3);
INSERT INTO `lcn_region` VALUES (2426, 294, '新泰市', 3);
INSERT INTO `lcn_region` VALUES (2427, 294, '肥城市', 3);
INSERT INTO `lcn_region` VALUES (2428, 294, '宁阳县', 3);
INSERT INTO `lcn_region` VALUES (2429, 294, '东平县', 3);
INSERT INTO `lcn_region` VALUES (2430, 295, '荣成市', 3);
INSERT INTO `lcn_region` VALUES (2431, 295, '乳山市', 3);
INSERT INTO `lcn_region` VALUES (2432, 295, '环翠区', 3);
INSERT INTO `lcn_region` VALUES (2433, 295, '文登市', 3);
INSERT INTO `lcn_region` VALUES (2434, 296, '潍城区', 3);
INSERT INTO `lcn_region` VALUES (2435, 296, '寒亭区', 3);
INSERT INTO `lcn_region` VALUES (2436, 296, '坊子区', 3);
INSERT INTO `lcn_region` VALUES (2437, 296, '奎文区', 3);
INSERT INTO `lcn_region` VALUES (2438, 296, '青州市', 3);
INSERT INTO `lcn_region` VALUES (2439, 296, '诸城市', 3);
INSERT INTO `lcn_region` VALUES (2440, 296, '寿光市', 3);
INSERT INTO `lcn_region` VALUES (2441, 296, '安丘市', 3);
INSERT INTO `lcn_region` VALUES (2442, 296, '高密市', 3);
INSERT INTO `lcn_region` VALUES (2443, 296, '昌邑市', 3);
INSERT INTO `lcn_region` VALUES (2444, 296, '临朐县', 3);
INSERT INTO `lcn_region` VALUES (2445, 296, '昌乐县', 3);
INSERT INTO `lcn_region` VALUES (2446, 297, '芝罘区', 3);
INSERT INTO `lcn_region` VALUES (2447, 297, '福山区', 3);
INSERT INTO `lcn_region` VALUES (2448, 297, '牟平区', 3);
INSERT INTO `lcn_region` VALUES (2449, 297, '莱山区', 3);
INSERT INTO `lcn_region` VALUES (2450, 297, '开发区', 3);
INSERT INTO `lcn_region` VALUES (2451, 297, '龙口市', 3);
INSERT INTO `lcn_region` VALUES (2452, 297, '莱阳市', 3);
INSERT INTO `lcn_region` VALUES (2453, 297, '莱州市', 3);
INSERT INTO `lcn_region` VALUES (2454, 297, '蓬莱市', 3);
INSERT INTO `lcn_region` VALUES (2455, 297, '招远市', 3);
INSERT INTO `lcn_region` VALUES (2456, 297, '栖霞市', 3);
INSERT INTO `lcn_region` VALUES (2457, 297, '海阳市', 3);
INSERT INTO `lcn_region` VALUES (2458, 297, '长岛县', 3);
INSERT INTO `lcn_region` VALUES (2459, 298, '市中区', 3);
INSERT INTO `lcn_region` VALUES (2460, 298, '山亭区', 3);
INSERT INTO `lcn_region` VALUES (2461, 298, '峄城区', 3);
INSERT INTO `lcn_region` VALUES (2462, 298, '台儿庄区', 3);
INSERT INTO `lcn_region` VALUES (2463, 298, '薛城区', 3);
INSERT INTO `lcn_region` VALUES (2464, 298, '滕州市', 3);
INSERT INTO `lcn_region` VALUES (2465, 299, '张店区', 3);
INSERT INTO `lcn_region` VALUES (2466, 299, '临淄区', 3);
INSERT INTO `lcn_region` VALUES (2467, 299, '淄川区', 3);
INSERT INTO `lcn_region` VALUES (2468, 299, '博山区', 3);
INSERT INTO `lcn_region` VALUES (2469, 299, '周村区', 3);
INSERT INTO `lcn_region` VALUES (2470, 299, '桓台县', 3);
INSERT INTO `lcn_region` VALUES (2471, 299, '高青县', 3);
INSERT INTO `lcn_region` VALUES (2472, 299, '沂源县', 3);
INSERT INTO `lcn_region` VALUES (2473, 300, '杏花岭区', 3);
INSERT INTO `lcn_region` VALUES (2474, 300, '小店区', 3);
INSERT INTO `lcn_region` VALUES (2475, 300, '迎泽区', 3);
INSERT INTO `lcn_region` VALUES (2476, 300, '尖草坪区', 3);
INSERT INTO `lcn_region` VALUES (2477, 300, '万柏林区', 3);
INSERT INTO `lcn_region` VALUES (2478, 300, '晋源区', 3);
INSERT INTO `lcn_region` VALUES (2479, 300, '高新开发区', 3);
INSERT INTO `lcn_region` VALUES (2480, 300, '民营经济开发区', 3);
INSERT INTO `lcn_region` VALUES (2481, 300, '经济技术开发区', 3);
INSERT INTO `lcn_region` VALUES (2482, 300, '清徐县', 3);
INSERT INTO `lcn_region` VALUES (2483, 300, '阳曲县', 3);
INSERT INTO `lcn_region` VALUES (2484, 300, '娄烦县', 3);
INSERT INTO `lcn_region` VALUES (2485, 300, '古交市', 3);
INSERT INTO `lcn_region` VALUES (2486, 301, '城区', 3);
INSERT INTO `lcn_region` VALUES (2487, 301, '郊区', 3);
INSERT INTO `lcn_region` VALUES (2488, 301, '沁县', 3);
INSERT INTO `lcn_region` VALUES (2489, 301, '潞城市', 3);
INSERT INTO `lcn_region` VALUES (2490, 301, '长治县', 3);
INSERT INTO `lcn_region` VALUES (2491, 301, '襄垣县', 3);
INSERT INTO `lcn_region` VALUES (2492, 301, '屯留县', 3);
INSERT INTO `lcn_region` VALUES (2493, 301, '平顺县', 3);
INSERT INTO `lcn_region` VALUES (2494, 301, '黎城县', 3);
INSERT INTO `lcn_region` VALUES (2495, 301, '壶关县', 3);
INSERT INTO `lcn_region` VALUES (2496, 301, '长子县', 3);
INSERT INTO `lcn_region` VALUES (2497, 301, '武乡县', 3);
INSERT INTO `lcn_region` VALUES (2498, 301, '沁源县', 3);
INSERT INTO `lcn_region` VALUES (2499, 302, '城区', 3);
INSERT INTO `lcn_region` VALUES (2500, 302, '矿区', 3);
INSERT INTO `lcn_region` VALUES (2501, 302, '南郊区', 3);
INSERT INTO `lcn_region` VALUES (2502, 302, '新荣区', 3);
INSERT INTO `lcn_region` VALUES (2503, 302, '阳高县', 3);
INSERT INTO `lcn_region` VALUES (2504, 302, '天镇县', 3);
INSERT INTO `lcn_region` VALUES (2505, 302, '广灵县', 3);
INSERT INTO `lcn_region` VALUES (2506, 302, '灵丘县', 3);
INSERT INTO `lcn_region` VALUES (2507, 302, '浑源县', 3);
INSERT INTO `lcn_region` VALUES (2508, 302, '左云县', 3);
INSERT INTO `lcn_region` VALUES (2509, 302, '大同县', 3);
INSERT INTO `lcn_region` VALUES (2510, 303, '城区', 3);
INSERT INTO `lcn_region` VALUES (2511, 303, '高平市', 3);
INSERT INTO `lcn_region` VALUES (2512, 303, '沁水县', 3);
INSERT INTO `lcn_region` VALUES (2513, 303, '阳城县', 3);
INSERT INTO `lcn_region` VALUES (2514, 303, '陵川县', 3);
INSERT INTO `lcn_region` VALUES (2515, 303, '泽州县', 3);
INSERT INTO `lcn_region` VALUES (2516, 304, '榆次区', 3);
INSERT INTO `lcn_region` VALUES (2517, 304, '介休市', 3);
INSERT INTO `lcn_region` VALUES (2518, 304, '榆社县', 3);
INSERT INTO `lcn_region` VALUES (2519, 304, '左权县', 3);
INSERT INTO `lcn_region` VALUES (2520, 304, '和顺县', 3);
INSERT INTO `lcn_region` VALUES (2521, 304, '昔阳县', 3);
INSERT INTO `lcn_region` VALUES (2522, 304, '寿阳县', 3);
INSERT INTO `lcn_region` VALUES (2523, 304, '太谷县', 3);
INSERT INTO `lcn_region` VALUES (2524, 304, '祁县', 3);
INSERT INTO `lcn_region` VALUES (2525, 304, '平遥县', 3);
INSERT INTO `lcn_region` VALUES (2526, 304, '灵石县', 3);
INSERT INTO `lcn_region` VALUES (2527, 305, '尧都区', 3);
INSERT INTO `lcn_region` VALUES (2528, 305, '侯马市', 3);
INSERT INTO `lcn_region` VALUES (2529, 305, '霍州市', 3);
INSERT INTO `lcn_region` VALUES (2530, 305, '曲沃县', 3);
INSERT INTO `lcn_region` VALUES (2531, 305, '翼城县', 3);
INSERT INTO `lcn_region` VALUES (2532, 305, '襄汾县', 3);
INSERT INTO `lcn_region` VALUES (2533, 305, '洪洞县', 3);
INSERT INTO `lcn_region` VALUES (2534, 305, '吉县', 3);
INSERT INTO `lcn_region` VALUES (2535, 305, '安泽县', 3);
INSERT INTO `lcn_region` VALUES (2536, 305, '浮山县', 3);
INSERT INTO `lcn_region` VALUES (2537, 305, '古县', 3);
INSERT INTO `lcn_region` VALUES (2538, 305, '乡宁县', 3);
INSERT INTO `lcn_region` VALUES (2539, 305, '大宁县', 3);
INSERT INTO `lcn_region` VALUES (2540, 305, '隰县', 3);
INSERT INTO `lcn_region` VALUES (2541, 305, '永和县', 3);
INSERT INTO `lcn_region` VALUES (2542, 305, '蒲县', 3);
INSERT INTO `lcn_region` VALUES (2543, 305, '汾西县', 3);
INSERT INTO `lcn_region` VALUES (2544, 306, '离石市', 3);
INSERT INTO `lcn_region` VALUES (2545, 306, '离石区', 3);
INSERT INTO `lcn_region` VALUES (2546, 306, '孝义市', 3);
INSERT INTO `lcn_region` VALUES (2547, 306, '汾阳市', 3);
INSERT INTO `lcn_region` VALUES (2548, 306, '文水县', 3);
INSERT INTO `lcn_region` VALUES (2549, 306, '交城县', 3);
INSERT INTO `lcn_region` VALUES (2550, 306, '兴县', 3);
INSERT INTO `lcn_region` VALUES (2551, 306, '临县', 3);
INSERT INTO `lcn_region` VALUES (2552, 306, '柳林县', 3);
INSERT INTO `lcn_region` VALUES (2553, 306, '石楼县', 3);
INSERT INTO `lcn_region` VALUES (2554, 306, '岚县', 3);
INSERT INTO `lcn_region` VALUES (2555, 306, '方山县', 3);
INSERT INTO `lcn_region` VALUES (2556, 306, '中阳县', 3);
INSERT INTO `lcn_region` VALUES (2557, 306, '交口县', 3);
INSERT INTO `lcn_region` VALUES (2558, 307, '朔城区', 3);
INSERT INTO `lcn_region` VALUES (2559, 307, '平鲁区', 3);
INSERT INTO `lcn_region` VALUES (2560, 307, '山阴县', 3);
INSERT INTO `lcn_region` VALUES (2561, 307, '应县', 3);
INSERT INTO `lcn_region` VALUES (2562, 307, '右玉县', 3);
INSERT INTO `lcn_region` VALUES (2563, 307, '怀仁县', 3);
INSERT INTO `lcn_region` VALUES (2564, 308, '忻府区', 3);
INSERT INTO `lcn_region` VALUES (2565, 308, '原平市', 3);
INSERT INTO `lcn_region` VALUES (2566, 308, '定襄县', 3);
INSERT INTO `lcn_region` VALUES (2567, 308, '五台县', 3);
INSERT INTO `lcn_region` VALUES (2568, 308, '代县', 3);
INSERT INTO `lcn_region` VALUES (2569, 308, '繁峙县', 3);
INSERT INTO `lcn_region` VALUES (2570, 308, '宁武县', 3);
INSERT INTO `lcn_region` VALUES (2571, 308, '静乐县', 3);
INSERT INTO `lcn_region` VALUES (2572, 308, '神池县', 3);
INSERT INTO `lcn_region` VALUES (2573, 308, '五寨县', 3);
INSERT INTO `lcn_region` VALUES (2574, 308, '岢岚县', 3);
INSERT INTO `lcn_region` VALUES (2575, 308, '河曲县', 3);
INSERT INTO `lcn_region` VALUES (2576, 308, '保德县', 3);
INSERT INTO `lcn_region` VALUES (2577, 308, '偏关县', 3);
INSERT INTO `lcn_region` VALUES (2578, 309, '城区', 3);
INSERT INTO `lcn_region` VALUES (2579, 309, '矿区', 3);
INSERT INTO `lcn_region` VALUES (2580, 309, '郊区', 3);
INSERT INTO `lcn_region` VALUES (2581, 309, '平定县', 3);
INSERT INTO `lcn_region` VALUES (2582, 309, '盂县', 3);
INSERT INTO `lcn_region` VALUES (2583, 310, '盐湖区', 3);
INSERT INTO `lcn_region` VALUES (2584, 310, '永济市', 3);
INSERT INTO `lcn_region` VALUES (2585, 310, '河津市', 3);
INSERT INTO `lcn_region` VALUES (2586, 310, '临猗县', 3);
INSERT INTO `lcn_region` VALUES (2587, 310, '万荣县', 3);
INSERT INTO `lcn_region` VALUES (2588, 310, '闻喜县', 3);
INSERT INTO `lcn_region` VALUES (2589, 310, '稷山县', 3);
INSERT INTO `lcn_region` VALUES (2590, 310, '新绛县', 3);
INSERT INTO `lcn_region` VALUES (2591, 310, '绛县', 3);
INSERT INTO `lcn_region` VALUES (2592, 310, '垣曲县', 3);
INSERT INTO `lcn_region` VALUES (2593, 310, '夏县', 3);
INSERT INTO `lcn_region` VALUES (2594, 310, '平陆县', 3);
INSERT INTO `lcn_region` VALUES (2595, 310, '芮城县', 3);
INSERT INTO `lcn_region` VALUES (2596, 311, '莲湖区', 3);
INSERT INTO `lcn_region` VALUES (2597, 311, '新城区', 3);
INSERT INTO `lcn_region` VALUES (2598, 311, '碑林区', 3);
INSERT INTO `lcn_region` VALUES (2599, 311, '雁塔区', 3);
INSERT INTO `lcn_region` VALUES (2600, 311, '灞桥区', 3);
INSERT INTO `lcn_region` VALUES (2601, 311, '未央区', 3);
INSERT INTO `lcn_region` VALUES (2602, 311, '阎良区', 3);
INSERT INTO `lcn_region` VALUES (2603, 311, '临潼区', 3);
INSERT INTO `lcn_region` VALUES (2604, 311, '长安区', 3);
INSERT INTO `lcn_region` VALUES (2605, 311, '蓝田县', 3);
INSERT INTO `lcn_region` VALUES (2606, 311, '周至县', 3);
INSERT INTO `lcn_region` VALUES (2607, 311, '户县', 3);
INSERT INTO `lcn_region` VALUES (2608, 311, '高陵县', 3);
INSERT INTO `lcn_region` VALUES (2609, 312, '汉滨区', 3);
INSERT INTO `lcn_region` VALUES (2610, 312, '汉阴县', 3);
INSERT INTO `lcn_region` VALUES (2611, 312, '石泉县', 3);
INSERT INTO `lcn_region` VALUES (2612, 312, '宁陕县', 3);
INSERT INTO `lcn_region` VALUES (2613, 312, '紫阳县', 3);
INSERT INTO `lcn_region` VALUES (2614, 312, '岚皋县', 3);
INSERT INTO `lcn_region` VALUES (2615, 312, '平利县', 3);
INSERT INTO `lcn_region` VALUES (2616, 312, '镇坪县', 3);
INSERT INTO `lcn_region` VALUES (2617, 312, '旬阳县', 3);
INSERT INTO `lcn_region` VALUES (2618, 312, '白河县', 3);
INSERT INTO `lcn_region` VALUES (2619, 313, '陈仓区', 3);
INSERT INTO `lcn_region` VALUES (2620, 313, '渭滨区', 3);
INSERT INTO `lcn_region` VALUES (2621, 313, '金台区', 3);
INSERT INTO `lcn_region` VALUES (2622, 313, '凤翔县', 3);
INSERT INTO `lcn_region` VALUES (2623, 313, '岐山县', 3);
INSERT INTO `lcn_region` VALUES (2624, 313, '扶风县', 3);
INSERT INTO `lcn_region` VALUES (2625, 313, '眉县', 3);
INSERT INTO `lcn_region` VALUES (2626, 313, '陇县', 3);
INSERT INTO `lcn_region` VALUES (2627, 313, '千阳县', 3);
INSERT INTO `lcn_region` VALUES (2628, 313, '麟游县', 3);
INSERT INTO `lcn_region` VALUES (2629, 313, '凤县', 3);
INSERT INTO `lcn_region` VALUES (2630, 313, '太白县', 3);
INSERT INTO `lcn_region` VALUES (2631, 314, '汉台区', 3);
INSERT INTO `lcn_region` VALUES (2632, 314, '南郑县', 3);
INSERT INTO `lcn_region` VALUES (2633, 314, '城固县', 3);
INSERT INTO `lcn_region` VALUES (2634, 314, '洋县', 3);
INSERT INTO `lcn_region` VALUES (2635, 314, '西乡县', 3);
INSERT INTO `lcn_region` VALUES (2636, 314, '勉县', 3);
INSERT INTO `lcn_region` VALUES (2637, 314, '宁强县', 3);
INSERT INTO `lcn_region` VALUES (2638, 314, '略阳县', 3);
INSERT INTO `lcn_region` VALUES (2639, 314, '镇巴县', 3);
INSERT INTO `lcn_region` VALUES (2640, 314, '留坝县', 3);
INSERT INTO `lcn_region` VALUES (2641, 314, '佛坪县', 3);
INSERT INTO `lcn_region` VALUES (2642, 315, '商州区', 3);
INSERT INTO `lcn_region` VALUES (2643, 315, '洛南县', 3);
INSERT INTO `lcn_region` VALUES (2644, 315, '丹凤县', 3);
INSERT INTO `lcn_region` VALUES (2645, 315, '商南县', 3);
INSERT INTO `lcn_region` VALUES (2646, 315, '山阳县', 3);
INSERT INTO `lcn_region` VALUES (2647, 315, '镇安县', 3);
INSERT INTO `lcn_region` VALUES (2648, 315, '柞水县', 3);
INSERT INTO `lcn_region` VALUES (2649, 316, '耀州区', 3);
INSERT INTO `lcn_region` VALUES (2650, 316, '王益区', 3);
INSERT INTO `lcn_region` VALUES (2651, 316, '印台区', 3);
INSERT INTO `lcn_region` VALUES (2652, 316, '宜君县', 3);
INSERT INTO `lcn_region` VALUES (2653, 317, '临渭区', 3);
INSERT INTO `lcn_region` VALUES (2654, 317, '韩城市', 3);
INSERT INTO `lcn_region` VALUES (2655, 317, '华阴市', 3);
INSERT INTO `lcn_region` VALUES (2656, 317, '华县', 3);
INSERT INTO `lcn_region` VALUES (2657, 317, '潼关县', 3);
INSERT INTO `lcn_region` VALUES (2658, 317, '大荔县', 3);
INSERT INTO `lcn_region` VALUES (2659, 317, '合阳县', 3);
INSERT INTO `lcn_region` VALUES (2660, 317, '澄城县', 3);
INSERT INTO `lcn_region` VALUES (2661, 317, '蒲城县', 3);
INSERT INTO `lcn_region` VALUES (2662, 317, '白水县', 3);
INSERT INTO `lcn_region` VALUES (2663, 317, '富平县', 3);
INSERT INTO `lcn_region` VALUES (2664, 318, '秦都区', 3);
INSERT INTO `lcn_region` VALUES (2665, 318, '渭城区', 3);
INSERT INTO `lcn_region` VALUES (2666, 318, '杨陵区', 3);
INSERT INTO `lcn_region` VALUES (2667, 318, '兴平市', 3);
INSERT INTO `lcn_region` VALUES (2668, 318, '三原县', 3);
INSERT INTO `lcn_region` VALUES (2669, 318, '泾阳县', 3);
INSERT INTO `lcn_region` VALUES (2670, 318, '乾县', 3);
INSERT INTO `lcn_region` VALUES (2671, 318, '礼泉县', 3);
INSERT INTO `lcn_region` VALUES (2672, 318, '永寿县', 3);
INSERT INTO `lcn_region` VALUES (2673, 318, '彬县', 3);
INSERT INTO `lcn_region` VALUES (2674, 318, '长武县', 3);
INSERT INTO `lcn_region` VALUES (2675, 318, '旬邑县', 3);
INSERT INTO `lcn_region` VALUES (2676, 318, '淳化县', 3);
INSERT INTO `lcn_region` VALUES (2677, 318, '武功县', 3);
INSERT INTO `lcn_region` VALUES (2678, 319, '吴起县', 3);
INSERT INTO `lcn_region` VALUES (2679, 319, '宝塔区', 3);
INSERT INTO `lcn_region` VALUES (2680, 319, '延长县', 3);
INSERT INTO `lcn_region` VALUES (2681, 319, '延川县', 3);
INSERT INTO `lcn_region` VALUES (2682, 319, '子长县', 3);
INSERT INTO `lcn_region` VALUES (2683, 319, '安塞县', 3);
INSERT INTO `lcn_region` VALUES (2684, 319, '志丹县', 3);
INSERT INTO `lcn_region` VALUES (2685, 319, '甘泉县', 3);
INSERT INTO `lcn_region` VALUES (2686, 319, '富县', 3);
INSERT INTO `lcn_region` VALUES (2687, 319, '洛川县', 3);
INSERT INTO `lcn_region` VALUES (2688, 319, '宜川县', 3);
INSERT INTO `lcn_region` VALUES (2689, 319, '黄龙县', 3);
INSERT INTO `lcn_region` VALUES (2690, 319, '黄陵县', 3);
INSERT INTO `lcn_region` VALUES (2691, 320, '榆阳区', 3);
INSERT INTO `lcn_region` VALUES (2692, 320, '神木县', 3);
INSERT INTO `lcn_region` VALUES (2693, 320, '府谷县', 3);
INSERT INTO `lcn_region` VALUES (2694, 320, '横山县', 3);
INSERT INTO `lcn_region` VALUES (2695, 320, '靖边县', 3);
INSERT INTO `lcn_region` VALUES (2696, 320, '定边县', 3);
INSERT INTO `lcn_region` VALUES (2697, 320, '绥德县', 3);
INSERT INTO `lcn_region` VALUES (2698, 320, '米脂县', 3);
INSERT INTO `lcn_region` VALUES (2699, 320, '佳县', 3);
INSERT INTO `lcn_region` VALUES (2700, 320, '吴堡县', 3);
INSERT INTO `lcn_region` VALUES (2701, 320, '清涧县', 3);
INSERT INTO `lcn_region` VALUES (2702, 320, '子洲县', 3);
INSERT INTO `lcn_region` VALUES (2703, 321, '长宁区', 3);
INSERT INTO `lcn_region` VALUES (2704, 321, '闸北区', 3);
INSERT INTO `lcn_region` VALUES (2705, 321, '闵行区', 3);
INSERT INTO `lcn_region` VALUES (2706, 321, '徐汇区', 3);
INSERT INTO `lcn_region` VALUES (2707, 321, '浦东新区', 3);
INSERT INTO `lcn_region` VALUES (2708, 321, '杨浦区', 3);
INSERT INTO `lcn_region` VALUES (2709, 321, '普陀区', 3);
INSERT INTO `lcn_region` VALUES (2710, 321, '静安区', 3);
INSERT INTO `lcn_region` VALUES (2711, 321, '卢湾区', 3);
INSERT INTO `lcn_region` VALUES (2712, 321, '虹口区', 3);
INSERT INTO `lcn_region` VALUES (2713, 321, '黄浦区', 3);
INSERT INTO `lcn_region` VALUES (2714, 321, '南汇区', 3);
INSERT INTO `lcn_region` VALUES (2715, 321, '松江区', 3);
INSERT INTO `lcn_region` VALUES (2716, 321, '嘉定区', 3);
INSERT INTO `lcn_region` VALUES (2717, 321, '宝山区', 3);
INSERT INTO `lcn_region` VALUES (2718, 321, '青浦区', 3);
INSERT INTO `lcn_region` VALUES (2719, 321, '金山区', 3);
INSERT INTO `lcn_region` VALUES (2720, 321, '奉贤区', 3);
INSERT INTO `lcn_region` VALUES (2721, 321, '崇明县', 3);
INSERT INTO `lcn_region` VALUES (2722, 322, '青羊区', 3);
INSERT INTO `lcn_region` VALUES (2723, 322, '锦江区', 3);
INSERT INTO `lcn_region` VALUES (2724, 322, '金牛区', 3);
INSERT INTO `lcn_region` VALUES (2725, 322, '武侯区', 3);
INSERT INTO `lcn_region` VALUES (2726, 322, '成华区', 3);
INSERT INTO `lcn_region` VALUES (2727, 322, '龙泉驿区', 3);
INSERT INTO `lcn_region` VALUES (2728, 322, '青白江区', 3);
INSERT INTO `lcn_region` VALUES (2729, 322, '新都区', 3);
INSERT INTO `lcn_region` VALUES (2730, 322, '温江区', 3);
INSERT INTO `lcn_region` VALUES (2731, 322, '高新区', 3);
INSERT INTO `lcn_region` VALUES (2732, 322, '高新西区', 3);
INSERT INTO `lcn_region` VALUES (2733, 322, '都江堰市', 3);
INSERT INTO `lcn_region` VALUES (2734, 322, '彭州市', 3);
INSERT INTO `lcn_region` VALUES (2735, 322, '邛崃市', 3);
INSERT INTO `lcn_region` VALUES (2736, 322, '崇州市', 3);
INSERT INTO `lcn_region` VALUES (2737, 322, '金堂县', 3);
INSERT INTO `lcn_region` VALUES (2738, 322, '双流县', 3);
INSERT INTO `lcn_region` VALUES (2739, 322, '郫县', 3);
INSERT INTO `lcn_region` VALUES (2740, 322, '大邑县', 3);
INSERT INTO `lcn_region` VALUES (2741, 322, '蒲江县', 3);
INSERT INTO `lcn_region` VALUES (2742, 322, '新津县', 3);
INSERT INTO `lcn_region` VALUES (2743, 322, '都江堰市', 3);
INSERT INTO `lcn_region` VALUES (2744, 322, '彭州市', 3);
INSERT INTO `lcn_region` VALUES (2745, 322, '邛崃市', 3);
INSERT INTO `lcn_region` VALUES (2746, 322, '崇州市', 3);
INSERT INTO `lcn_region` VALUES (2747, 322, '金堂县', 3);
INSERT INTO `lcn_region` VALUES (2748, 322, '双流县', 3);
INSERT INTO `lcn_region` VALUES (2749, 322, '郫县', 3);
INSERT INTO `lcn_region` VALUES (2750, 322, '大邑县', 3);
INSERT INTO `lcn_region` VALUES (2751, 322, '蒲江县', 3);
INSERT INTO `lcn_region` VALUES (2752, 322, '新津县', 3);
INSERT INTO `lcn_region` VALUES (2753, 323, '涪城区', 3);
INSERT INTO `lcn_region` VALUES (2754, 323, '游仙区', 3);
INSERT INTO `lcn_region` VALUES (2755, 323, '江油市', 3);
INSERT INTO `lcn_region` VALUES (2756, 323, '盐亭县', 3);
INSERT INTO `lcn_region` VALUES (2757, 323, '三台县', 3);
INSERT INTO `lcn_region` VALUES (2758, 323, '平武县', 3);
INSERT INTO `lcn_region` VALUES (2759, 323, '安县', 3);
INSERT INTO `lcn_region` VALUES (2760, 323, '梓潼县', 3);
INSERT INTO `lcn_region` VALUES (2761, 323, '北川县', 3);
INSERT INTO `lcn_region` VALUES (2762, 324, '马尔康县', 3);
INSERT INTO `lcn_region` VALUES (2763, 324, '汶川县', 3);
INSERT INTO `lcn_region` VALUES (2764, 324, '理县', 3);
INSERT INTO `lcn_region` VALUES (2765, 324, '茂县', 3);
INSERT INTO `lcn_region` VALUES (2766, 324, '松潘县', 3);
INSERT INTO `lcn_region` VALUES (2767, 324, '九寨沟县', 3);
INSERT INTO `lcn_region` VALUES (2768, 324, '金川县', 3);
INSERT INTO `lcn_region` VALUES (2769, 324, '小金县', 3);
INSERT INTO `lcn_region` VALUES (2770, 324, '黑水县', 3);
INSERT INTO `lcn_region` VALUES (2771, 324, '壤塘县', 3);
INSERT INTO `lcn_region` VALUES (2772, 324, '阿坝县', 3);
INSERT INTO `lcn_region` VALUES (2773, 324, '若尔盖县', 3);
INSERT INTO `lcn_region` VALUES (2774, 324, '红原县', 3);
INSERT INTO `lcn_region` VALUES (2775, 325, '巴州区', 3);
INSERT INTO `lcn_region` VALUES (2776, 325, '通江县', 3);
INSERT INTO `lcn_region` VALUES (2777, 325, '南江县', 3);
INSERT INTO `lcn_region` VALUES (2778, 325, '平昌县', 3);
INSERT INTO `lcn_region` VALUES (2779, 326, '通川区', 3);
INSERT INTO `lcn_region` VALUES (2780, 326, '万源市', 3);
INSERT INTO `lcn_region` VALUES (2781, 326, '达县', 3);
INSERT INTO `lcn_region` VALUES (2782, 326, '宣汉县', 3);
INSERT INTO `lcn_region` VALUES (2783, 326, '开江县', 3);
INSERT INTO `lcn_region` VALUES (2784, 326, '大竹县', 3);
INSERT INTO `lcn_region` VALUES (2785, 326, '渠县', 3);
INSERT INTO `lcn_region` VALUES (2786, 327, '旌阳区', 3);
INSERT INTO `lcn_region` VALUES (2787, 327, '广汉市', 3);
INSERT INTO `lcn_region` VALUES (2788, 327, '什邡市', 3);
INSERT INTO `lcn_region` VALUES (2789, 327, '绵竹市', 3);
INSERT INTO `lcn_region` VALUES (2790, 327, '罗江县', 3);
INSERT INTO `lcn_region` VALUES (2791, 327, '中江县', 3);
INSERT INTO `lcn_region` VALUES (2792, 328, '康定县', 3);
INSERT INTO `lcn_region` VALUES (2793, 328, '丹巴县', 3);
INSERT INTO `lcn_region` VALUES (2794, 328, '泸定县', 3);
INSERT INTO `lcn_region` VALUES (2795, 328, '炉霍县', 3);
INSERT INTO `lcn_region` VALUES (2796, 328, '九龙县', 3);
INSERT INTO `lcn_region` VALUES (2797, 328, '甘孜县', 3);
INSERT INTO `lcn_region` VALUES (2798, 328, '雅江县', 3);
INSERT INTO `lcn_region` VALUES (2799, 328, '新龙县', 3);
INSERT INTO `lcn_region` VALUES (2800, 328, '道孚县', 3);
INSERT INTO `lcn_region` VALUES (2801, 328, '白玉县', 3);
INSERT INTO `lcn_region` VALUES (2802, 328, '理塘县', 3);
INSERT INTO `lcn_region` VALUES (2803, 328, '德格县', 3);
INSERT INTO `lcn_region` VALUES (2804, 328, '乡城县', 3);
INSERT INTO `lcn_region` VALUES (2805, 328, '石渠县', 3);
INSERT INTO `lcn_region` VALUES (2806, 328, '稻城县', 3);
INSERT INTO `lcn_region` VALUES (2807, 328, '色达县', 3);
INSERT INTO `lcn_region` VALUES (2808, 328, '巴塘县', 3);
INSERT INTO `lcn_region` VALUES (2809, 328, '得荣县', 3);
INSERT INTO `lcn_region` VALUES (2810, 329, '广安区', 3);
INSERT INTO `lcn_region` VALUES (2811, 329, '华蓥市', 3);
INSERT INTO `lcn_region` VALUES (2812, 329, '岳池县', 3);
INSERT INTO `lcn_region` VALUES (2813, 329, '武胜县', 3);
INSERT INTO `lcn_region` VALUES (2814, 329, '邻水县', 3);
INSERT INTO `lcn_region` VALUES (2815, 330, '利州区', 3);
INSERT INTO `lcn_region` VALUES (2816, 330, '元坝区', 3);
INSERT INTO `lcn_region` VALUES (2817, 330, '朝天区', 3);
INSERT INTO `lcn_region` VALUES (2818, 330, '旺苍县', 3);
INSERT INTO `lcn_region` VALUES (2819, 330, '青川县', 3);
INSERT INTO `lcn_region` VALUES (2820, 330, '剑阁县', 3);
INSERT INTO `lcn_region` VALUES (2821, 330, '苍溪县', 3);
INSERT INTO `lcn_region` VALUES (2822, 331, '峨眉山市', 3);
INSERT INTO `lcn_region` VALUES (2823, 331, '乐山市', 3);
INSERT INTO `lcn_region` VALUES (2824, 331, '犍为县', 3);
INSERT INTO `lcn_region` VALUES (2825, 331, '井研县', 3);
INSERT INTO `lcn_region` VALUES (2826, 331, '夹江县', 3);
INSERT INTO `lcn_region` VALUES (2827, 331, '沐川县', 3);
INSERT INTO `lcn_region` VALUES (2828, 331, '峨边', 3);
INSERT INTO `lcn_region` VALUES (2829, 331, '马边', 3);
INSERT INTO `lcn_region` VALUES (2830, 332, '西昌市', 3);
INSERT INTO `lcn_region` VALUES (2831, 332, '盐源县', 3);
INSERT INTO `lcn_region` VALUES (2832, 332, '德昌县', 3);
INSERT INTO `lcn_region` VALUES (2833, 332, '会理县', 3);
INSERT INTO `lcn_region` VALUES (2834, 332, '会东县', 3);
INSERT INTO `lcn_region` VALUES (2835, 332, '宁南县', 3);
INSERT INTO `lcn_region` VALUES (2836, 332, '普格县', 3);
INSERT INTO `lcn_region` VALUES (2837, 332, '布拖县', 3);
INSERT INTO `lcn_region` VALUES (2838, 332, '金阳县', 3);
INSERT INTO `lcn_region` VALUES (2839, 332, '昭觉县', 3);
INSERT INTO `lcn_region` VALUES (2840, 332, '喜德县', 3);
INSERT INTO `lcn_region` VALUES (2841, 332, '冕宁县', 3);
INSERT INTO `lcn_region` VALUES (2842, 332, '越西县', 3);
INSERT INTO `lcn_region` VALUES (2843, 332, '甘洛县', 3);
INSERT INTO `lcn_region` VALUES (2844, 332, '美姑县', 3);
INSERT INTO `lcn_region` VALUES (2845, 332, '雷波县', 3);
INSERT INTO `lcn_region` VALUES (2846, 332, '木里', 3);
INSERT INTO `lcn_region` VALUES (2847, 333, '东坡区', 3);
INSERT INTO `lcn_region` VALUES (2848, 333, '仁寿县', 3);
INSERT INTO `lcn_region` VALUES (2849, 333, '彭山县', 3);
INSERT INTO `lcn_region` VALUES (2850, 333, '洪雅县', 3);
INSERT INTO `lcn_region` VALUES (2851, 333, '丹棱县', 3);
INSERT INTO `lcn_region` VALUES (2852, 333, '青神县', 3);
INSERT INTO `lcn_region` VALUES (2853, 334, '阆中市', 3);
INSERT INTO `lcn_region` VALUES (2854, 334, '南部县', 3);
INSERT INTO `lcn_region` VALUES (2855, 334, '营山县', 3);
INSERT INTO `lcn_region` VALUES (2856, 334, '蓬安县', 3);
INSERT INTO `lcn_region` VALUES (2857, 334, '仪陇县', 3);
INSERT INTO `lcn_region` VALUES (2858, 334, '顺庆区', 3);
INSERT INTO `lcn_region` VALUES (2859, 334, '高坪区', 3);
INSERT INTO `lcn_region` VALUES (2860, 334, '嘉陵区', 3);
INSERT INTO `lcn_region` VALUES (2861, 334, '西充县', 3);
INSERT INTO `lcn_region` VALUES (2862, 335, '市中区', 3);
INSERT INTO `lcn_region` VALUES (2863, 335, '东兴区', 3);
INSERT INTO `lcn_region` VALUES (2864, 335, '威远县', 3);
INSERT INTO `lcn_region` VALUES (2865, 335, '资中县', 3);
INSERT INTO `lcn_region` VALUES (2866, 335, '隆昌县', 3);
INSERT INTO `lcn_region` VALUES (2867, 336, '东  区', 3);
INSERT INTO `lcn_region` VALUES (2868, 336, '西  区', 3);
INSERT INTO `lcn_region` VALUES (2869, 336, '仁和区', 3);
INSERT INTO `lcn_region` VALUES (2870, 336, '米易县', 3);
INSERT INTO `lcn_region` VALUES (2871, 336, '盐边县', 3);
INSERT INTO `lcn_region` VALUES (2872, 337, '船山区', 3);
INSERT INTO `lcn_region` VALUES (2873, 337, '安居区', 3);
INSERT INTO `lcn_region` VALUES (2874, 337, '蓬溪县', 3);
INSERT INTO `lcn_region` VALUES (2875, 337, '射洪县', 3);
INSERT INTO `lcn_region` VALUES (2876, 337, '大英县', 3);
INSERT INTO `lcn_region` VALUES (2877, 338, '雨城区', 3);
INSERT INTO `lcn_region` VALUES (2878, 338, '名山县', 3);
INSERT INTO `lcn_region` VALUES (2879, 338, '荥经县', 3);
INSERT INTO `lcn_region` VALUES (2880, 338, '汉源县', 3);
INSERT INTO `lcn_region` VALUES (2881, 338, '石棉县', 3);
INSERT INTO `lcn_region` VALUES (2882, 338, '天全县', 3);
INSERT INTO `lcn_region` VALUES (2883, 338, '芦山县', 3);
INSERT INTO `lcn_region` VALUES (2884, 338, '宝兴县', 3);
INSERT INTO `lcn_region` VALUES (2885, 339, '翠屏区', 3);
INSERT INTO `lcn_region` VALUES (2886, 339, '宜宾县', 3);
INSERT INTO `lcn_region` VALUES (2887, 339, '南溪县', 3);
INSERT INTO `lcn_region` VALUES (2888, 339, '江安县', 3);
INSERT INTO `lcn_region` VALUES (2889, 339, '长宁县', 3);
INSERT INTO `lcn_region` VALUES (2890, 339, '高县', 3);
INSERT INTO `lcn_region` VALUES (2891, 339, '珙县', 3);
INSERT INTO `lcn_region` VALUES (2892, 339, '筠连县', 3);
INSERT INTO `lcn_region` VALUES (2893, 339, '兴文县', 3);
INSERT INTO `lcn_region` VALUES (2894, 339, '屏山县', 3);
INSERT INTO `lcn_region` VALUES (2895, 340, '雁江区', 3);
INSERT INTO `lcn_region` VALUES (2896, 340, '简阳市', 3);
INSERT INTO `lcn_region` VALUES (2897, 340, '安岳县', 3);
INSERT INTO `lcn_region` VALUES (2898, 340, '乐至县', 3);
INSERT INTO `lcn_region` VALUES (2899, 341, '大安区', 3);
INSERT INTO `lcn_region` VALUES (2900, 341, '自流井区', 3);
INSERT INTO `lcn_region` VALUES (2901, 341, '贡井区', 3);
INSERT INTO `lcn_region` VALUES (2902, 341, '沿滩区', 3);
INSERT INTO `lcn_region` VALUES (2903, 341, '荣县', 3);
INSERT INTO `lcn_region` VALUES (2904, 341, '富顺县', 3);
INSERT INTO `lcn_region` VALUES (2905, 342, '江阳区', 3);
INSERT INTO `lcn_region` VALUES (2906, 342, '纳溪区', 3);
INSERT INTO `lcn_region` VALUES (2907, 342, '龙马潭区', 3);
INSERT INTO `lcn_region` VALUES (2908, 342, '泸县', 3);
INSERT INTO `lcn_region` VALUES (2909, 342, '合江县', 3);
INSERT INTO `lcn_region` VALUES (2910, 342, '叙永县', 3);
INSERT INTO `lcn_region` VALUES (2911, 342, '古蔺县', 3);
INSERT INTO `lcn_region` VALUES (2912, 343, '和平区', 3);
INSERT INTO `lcn_region` VALUES (2913, 343, '河西区', 3);
INSERT INTO `lcn_region` VALUES (2914, 343, '南开区', 3);
INSERT INTO `lcn_region` VALUES (2915, 343, '河北区', 3);
INSERT INTO `lcn_region` VALUES (2916, 343, '河东区', 3);
INSERT INTO `lcn_region` VALUES (2917, 343, '红桥区', 3);
INSERT INTO `lcn_region` VALUES (2918, 343, '东丽区', 3);
INSERT INTO `lcn_region` VALUES (2919, 343, '津南区', 3);
INSERT INTO `lcn_region` VALUES (2920, 343, '西青区', 3);
INSERT INTO `lcn_region` VALUES (2921, 343, '北辰区', 3);
INSERT INTO `lcn_region` VALUES (2922, 343, '塘沽区', 3);
INSERT INTO `lcn_region` VALUES (2923, 343, '汉沽区', 3);
INSERT INTO `lcn_region` VALUES (2924, 343, '大港区', 3);
INSERT INTO `lcn_region` VALUES (2925, 343, '武清区', 3);
INSERT INTO `lcn_region` VALUES (2926, 343, '宝坻区', 3);
INSERT INTO `lcn_region` VALUES (2927, 343, '经济开发区', 3);
INSERT INTO `lcn_region` VALUES (2928, 343, '宁河县', 3);
INSERT INTO `lcn_region` VALUES (2929, 343, '静海县', 3);
INSERT INTO `lcn_region` VALUES (2930, 343, '蓟县', 3);
INSERT INTO `lcn_region` VALUES (2931, 344, '城关区', 3);
INSERT INTO `lcn_region` VALUES (2932, 344, '林周县', 3);
INSERT INTO `lcn_region` VALUES (2933, 344, '当雄县', 3);
INSERT INTO `lcn_region` VALUES (2934, 344, '尼木县', 3);
INSERT INTO `lcn_region` VALUES (2935, 344, '曲水县', 3);
INSERT INTO `lcn_region` VALUES (2936, 344, '堆龙德庆县', 3);
INSERT INTO `lcn_region` VALUES (2937, 344, '达孜县', 3);
INSERT INTO `lcn_region` VALUES (2938, 344, '墨竹工卡县', 3);
INSERT INTO `lcn_region` VALUES (2939, 345, '噶尔县', 3);
INSERT INTO `lcn_region` VALUES (2940, 345, '普兰县', 3);
INSERT INTO `lcn_region` VALUES (2941, 345, '札达县', 3);
INSERT INTO `lcn_region` VALUES (2942, 345, '日土县', 3);
INSERT INTO `lcn_region` VALUES (2943, 345, '革吉县', 3);
INSERT INTO `lcn_region` VALUES (2944, 345, '改则县', 3);
INSERT INTO `lcn_region` VALUES (2945, 345, '措勤县', 3);
INSERT INTO `lcn_region` VALUES (2946, 346, '昌都县', 3);
INSERT INTO `lcn_region` VALUES (2947, 346, '江达县', 3);
INSERT INTO `lcn_region` VALUES (2948, 346, '贡觉县', 3);
INSERT INTO `lcn_region` VALUES (2949, 346, '类乌齐县', 3);
INSERT INTO `lcn_region` VALUES (2950, 346, '丁青县', 3);
INSERT INTO `lcn_region` VALUES (2951, 346, '察雅县', 3);
INSERT INTO `lcn_region` VALUES (2952, 346, '八宿县', 3);
INSERT INTO `lcn_region` VALUES (2953, 346, '左贡县', 3);
INSERT INTO `lcn_region` VALUES (2954, 346, '芒康县', 3);
INSERT INTO `lcn_region` VALUES (2955, 346, '洛隆县', 3);
INSERT INTO `lcn_region` VALUES (2956, 346, '边坝县', 3);
INSERT INTO `lcn_region` VALUES (2957, 347, '林芝县', 3);
INSERT INTO `lcn_region` VALUES (2958, 347, '工布江达县', 3);
INSERT INTO `lcn_region` VALUES (2959, 347, '米林县', 3);
INSERT INTO `lcn_region` VALUES (2960, 347, '墨脱县', 3);
INSERT INTO `lcn_region` VALUES (2961, 347, '波密县', 3);
INSERT INTO `lcn_region` VALUES (2962, 347, '察隅县', 3);
INSERT INTO `lcn_region` VALUES (2963, 347, '朗县', 3);
INSERT INTO `lcn_region` VALUES (2964, 348, '那曲县', 3);
INSERT INTO `lcn_region` VALUES (2965, 348, '嘉黎县', 3);
INSERT INTO `lcn_region` VALUES (2966, 348, '比如县', 3);
INSERT INTO `lcn_region` VALUES (2967, 348, '聂荣县', 3);
INSERT INTO `lcn_region` VALUES (2968, 348, '安多县', 3);
INSERT INTO `lcn_region` VALUES (2969, 348, '申扎县', 3);
INSERT INTO `lcn_region` VALUES (2970, 348, '索县', 3);
INSERT INTO `lcn_region` VALUES (2971, 348, '班戈县', 3);
INSERT INTO `lcn_region` VALUES (2972, 348, '巴青县', 3);
INSERT INTO `lcn_region` VALUES (2973, 348, '尼玛县', 3);
INSERT INTO `lcn_region` VALUES (2974, 349, '日喀则市', 3);
INSERT INTO `lcn_region` VALUES (2975, 349, '南木林县', 3);
INSERT INTO `lcn_region` VALUES (2976, 349, '江孜县', 3);
INSERT INTO `lcn_region` VALUES (2977, 349, '定日县', 3);
INSERT INTO `lcn_region` VALUES (2978, 349, '萨迦县', 3);
INSERT INTO `lcn_region` VALUES (2979, 349, '拉孜县', 3);
INSERT INTO `lcn_region` VALUES (2980, 349, '昂仁县', 3);
INSERT INTO `lcn_region` VALUES (2981, 349, '谢通门县', 3);
INSERT INTO `lcn_region` VALUES (2982, 349, '白朗县', 3);
INSERT INTO `lcn_region` VALUES (2983, 349, '仁布县', 3);
INSERT INTO `lcn_region` VALUES (2984, 349, '康马县', 3);
INSERT INTO `lcn_region` VALUES (2985, 349, '定结县', 3);
INSERT INTO `lcn_region` VALUES (2986, 349, '仲巴县', 3);
INSERT INTO `lcn_region` VALUES (2987, 349, '亚东县', 3);
INSERT INTO `lcn_region` VALUES (2988, 349, '吉隆县', 3);
INSERT INTO `lcn_region` VALUES (2989, 349, '聂拉木县', 3);
INSERT INTO `lcn_region` VALUES (2990, 349, '萨嘎县', 3);
INSERT INTO `lcn_region` VALUES (2991, 349, '岗巴县', 3);
INSERT INTO `lcn_region` VALUES (2992, 350, '乃东县', 3);
INSERT INTO `lcn_region` VALUES (2993, 350, '扎囊县', 3);
INSERT INTO `lcn_region` VALUES (2994, 350, '贡嘎县', 3);
INSERT INTO `lcn_region` VALUES (2995, 350, '桑日县', 3);
INSERT INTO `lcn_region` VALUES (2996, 350, '琼结县', 3);
INSERT INTO `lcn_region` VALUES (2997, 350, '曲松县', 3);
INSERT INTO `lcn_region` VALUES (2998, 350, '措美县', 3);
INSERT INTO `lcn_region` VALUES (2999, 350, '洛扎县', 3);
INSERT INTO `lcn_region` VALUES (3000, 350, '加查县', 3);
INSERT INTO `lcn_region` VALUES (3001, 350, '隆子县', 3);
INSERT INTO `lcn_region` VALUES (3002, 350, '错那县', 3);
INSERT INTO `lcn_region` VALUES (3003, 350, '浪卡子县', 3);
INSERT INTO `lcn_region` VALUES (3004, 351, '天山区', 3);
INSERT INTO `lcn_region` VALUES (3005, 351, '沙依巴克区', 3);
INSERT INTO `lcn_region` VALUES (3006, 351, '新市区', 3);
INSERT INTO `lcn_region` VALUES (3007, 351, '水磨沟区', 3);
INSERT INTO `lcn_region` VALUES (3008, 351, '头屯河区', 3);
INSERT INTO `lcn_region` VALUES (3009, 351, '达坂城区', 3);
INSERT INTO `lcn_region` VALUES (3010, 351, '米东区', 3);
INSERT INTO `lcn_region` VALUES (3011, 351, '乌鲁木齐县', 3);
INSERT INTO `lcn_region` VALUES (3012, 352, '阿克苏市', 3);
INSERT INTO `lcn_region` VALUES (3013, 352, '温宿县', 3);
INSERT INTO `lcn_region` VALUES (3014, 352, '库车县', 3);
INSERT INTO `lcn_region` VALUES (3015, 352, '沙雅县', 3);
INSERT INTO `lcn_region` VALUES (3016, 352, '新和县', 3);
INSERT INTO `lcn_region` VALUES (3017, 352, '拜城县', 3);
INSERT INTO `lcn_region` VALUES (3018, 352, '乌什县', 3);
INSERT INTO `lcn_region` VALUES (3019, 352, '阿瓦提县', 3);
INSERT INTO `lcn_region` VALUES (3020, 352, '柯坪县', 3);
INSERT INTO `lcn_region` VALUES (3021, 353, '阿拉尔市', 3);
INSERT INTO `lcn_region` VALUES (3022, 354, '库尔勒市', 3);
INSERT INTO `lcn_region` VALUES (3023, 354, '轮台县', 3);
INSERT INTO `lcn_region` VALUES (3024, 354, '尉犁县', 3);
INSERT INTO `lcn_region` VALUES (3025, 354, '若羌县', 3);
INSERT INTO `lcn_region` VALUES (3026, 354, '且末县', 3);
INSERT INTO `lcn_region` VALUES (3027, 354, '焉耆', 3);
INSERT INTO `lcn_region` VALUES (3028, 354, '和静县', 3);
INSERT INTO `lcn_region` VALUES (3029, 354, '和硕县', 3);
INSERT INTO `lcn_region` VALUES (3030, 354, '博湖县', 3);
INSERT INTO `lcn_region` VALUES (3031, 355, '博乐市', 3);
INSERT INTO `lcn_region` VALUES (3032, 355, '精河县', 3);
INSERT INTO `lcn_region` VALUES (3033, 355, '温泉县', 3);
INSERT INTO `lcn_region` VALUES (3034, 356, '呼图壁县', 3);
INSERT INTO `lcn_region` VALUES (3035, 356, '米泉市', 3);
INSERT INTO `lcn_region` VALUES (3036, 356, '昌吉市', 3);
INSERT INTO `lcn_region` VALUES (3037, 356, '阜康市', 3);
INSERT INTO `lcn_region` VALUES (3038, 356, '玛纳斯县', 3);
INSERT INTO `lcn_region` VALUES (3039, 356, '奇台县', 3);
INSERT INTO `lcn_region` VALUES (3040, 356, '吉木萨尔县', 3);
INSERT INTO `lcn_region` VALUES (3041, 356, '木垒', 3);
INSERT INTO `lcn_region` VALUES (3042, 357, '哈密市', 3);
INSERT INTO `lcn_region` VALUES (3043, 357, '伊吾县', 3);
INSERT INTO `lcn_region` VALUES (3044, 357, '巴里坤', 3);
INSERT INTO `lcn_region` VALUES (3045, 358, '和田市', 3);
INSERT INTO `lcn_region` VALUES (3046, 358, '和田县', 3);
INSERT INTO `lcn_region` VALUES (3047, 358, '墨玉县', 3);
INSERT INTO `lcn_region` VALUES (3048, 358, '皮山县', 3);
INSERT INTO `lcn_region` VALUES (3049, 358, '洛浦县', 3);
INSERT INTO `lcn_region` VALUES (3050, 358, '策勒县', 3);
INSERT INTO `lcn_region` VALUES (3051, 358, '于田县', 3);
INSERT INTO `lcn_region` VALUES (3052, 358, '民丰县', 3);
INSERT INTO `lcn_region` VALUES (3053, 359, '喀什市', 3);
INSERT INTO `lcn_region` VALUES (3054, 359, '疏附县', 3);
INSERT INTO `lcn_region` VALUES (3055, 359, '疏勒县', 3);
INSERT INTO `lcn_region` VALUES (3056, 359, '英吉沙县', 3);
INSERT INTO `lcn_region` VALUES (3057, 359, '泽普县', 3);
INSERT INTO `lcn_region` VALUES (3058, 359, '莎车县', 3);
INSERT INTO `lcn_region` VALUES (3059, 359, '叶城县', 3);
INSERT INTO `lcn_region` VALUES (3060, 359, '麦盖提县', 3);
INSERT INTO `lcn_region` VALUES (3061, 359, '岳普湖县', 3);
INSERT INTO `lcn_region` VALUES (3062, 359, '伽师县', 3);
INSERT INTO `lcn_region` VALUES (3063, 359, '巴楚县', 3);
INSERT INTO `lcn_region` VALUES (3064, 359, '塔什库尔干', 3);
INSERT INTO `lcn_region` VALUES (3065, 360, '克拉玛依市', 3);
INSERT INTO `lcn_region` VALUES (3066, 361, '阿图什市', 3);
INSERT INTO `lcn_region` VALUES (3067, 361, '阿克陶县', 3);
INSERT INTO `lcn_region` VALUES (3068, 361, '阿合奇县', 3);
INSERT INTO `lcn_region` VALUES (3069, 361, '乌恰县', 3);
INSERT INTO `lcn_region` VALUES (3070, 362, '石河子市', 3);
INSERT INTO `lcn_region` VALUES (3071, 363, '图木舒克市', 3);
INSERT INTO `lcn_region` VALUES (3072, 364, '吐鲁番市', 3);
INSERT INTO `lcn_region` VALUES (3073, 364, '鄯善县', 3);
INSERT INTO `lcn_region` VALUES (3074, 364, '托克逊县', 3);
INSERT INTO `lcn_region` VALUES (3075, 365, '五家渠市', 3);
INSERT INTO `lcn_region` VALUES (3076, 366, '阿勒泰市', 3);
INSERT INTO `lcn_region` VALUES (3077, 366, '布克赛尔', 3);
INSERT INTO `lcn_region` VALUES (3078, 366, '伊宁市', 3);
INSERT INTO `lcn_region` VALUES (3079, 366, '布尔津县', 3);
INSERT INTO `lcn_region` VALUES (3080, 366, '奎屯市', 3);
INSERT INTO `lcn_region` VALUES (3081, 366, '乌苏市', 3);
INSERT INTO `lcn_region` VALUES (3082, 366, '额敏县', 3);
INSERT INTO `lcn_region` VALUES (3083, 366, '富蕴县', 3);
INSERT INTO `lcn_region` VALUES (3084, 366, '伊宁县', 3);
INSERT INTO `lcn_region` VALUES (3085, 366, '福海县', 3);
INSERT INTO `lcn_region` VALUES (3086, 366, '霍城县', 3);
INSERT INTO `lcn_region` VALUES (3087, 366, '沙湾县', 3);
INSERT INTO `lcn_region` VALUES (3088, 366, '巩留县', 3);
INSERT INTO `lcn_region` VALUES (3089, 366, '哈巴河县', 3);
INSERT INTO `lcn_region` VALUES (3090, 366, '托里县', 3);
INSERT INTO `lcn_region` VALUES (3091, 366, '青河县', 3);
INSERT INTO `lcn_region` VALUES (3092, 366, '新源县', 3);
INSERT INTO `lcn_region` VALUES (3093, 366, '裕民县', 3);
INSERT INTO `lcn_region` VALUES (3094, 366, '和布克赛尔', 3);
INSERT INTO `lcn_region` VALUES (3095, 366, '吉木乃县', 3);
INSERT INTO `lcn_region` VALUES (3096, 366, '昭苏县', 3);
INSERT INTO `lcn_region` VALUES (3097, 366, '特克斯县', 3);
INSERT INTO `lcn_region` VALUES (3098, 366, '尼勒克县', 3);
INSERT INTO `lcn_region` VALUES (3099, 366, '察布查尔', 3);
INSERT INTO `lcn_region` VALUES (3100, 367, '盘龙区', 3);
INSERT INTO `lcn_region` VALUES (3101, 367, '五华区', 3);
INSERT INTO `lcn_region` VALUES (3102, 367, '官渡区', 3);
INSERT INTO `lcn_region` VALUES (3103, 367, '西山区', 3);
INSERT INTO `lcn_region` VALUES (3104, 367, '东川区', 3);
INSERT INTO `lcn_region` VALUES (3105, 367, '安宁市', 3);
INSERT INTO `lcn_region` VALUES (3106, 367, '呈贡县', 3);
INSERT INTO `lcn_region` VALUES (3107, 367, '晋宁县', 3);
INSERT INTO `lcn_region` VALUES (3108, 367, '富民县', 3);
INSERT INTO `lcn_region` VALUES (3109, 367, '宜良县', 3);
INSERT INTO `lcn_region` VALUES (3110, 367, '嵩明县', 3);
INSERT INTO `lcn_region` VALUES (3111, 367, '石林县', 3);
INSERT INTO `lcn_region` VALUES (3112, 367, '禄劝', 3);
INSERT INTO `lcn_region` VALUES (3113, 367, '寻甸', 3);
INSERT INTO `lcn_region` VALUES (3114, 368, '兰坪', 3);
INSERT INTO `lcn_region` VALUES (3115, 368, '泸水县', 3);
INSERT INTO `lcn_region` VALUES (3116, 368, '福贡县', 3);
INSERT INTO `lcn_region` VALUES (3117, 368, '贡山', 3);
INSERT INTO `lcn_region` VALUES (3118, 369, '宁洱', 3);
INSERT INTO `lcn_region` VALUES (3119, 369, '思茅区', 3);
INSERT INTO `lcn_region` VALUES (3120, 369, '墨江', 3);
INSERT INTO `lcn_region` VALUES (3121, 369, '景东', 3);
INSERT INTO `lcn_region` VALUES (3122, 369, '景谷', 3);
INSERT INTO `lcn_region` VALUES (3123, 369, '镇沅', 3);
INSERT INTO `lcn_region` VALUES (3124, 369, '江城', 3);
INSERT INTO `lcn_region` VALUES (3125, 369, '孟连', 3);
INSERT INTO `lcn_region` VALUES (3126, 369, '澜沧', 3);
INSERT INTO `lcn_region` VALUES (3127, 369, '西盟', 3);
INSERT INTO `lcn_region` VALUES (3128, 370, '古城区', 3);
INSERT INTO `lcn_region` VALUES (3129, 370, '宁蒗', 3);
INSERT INTO `lcn_region` VALUES (3130, 370, '玉龙', 3);
INSERT INTO `lcn_region` VALUES (3131, 370, '永胜县', 3);
INSERT INTO `lcn_region` VALUES (3132, 370, '华坪县', 3);
INSERT INTO `lcn_region` VALUES (3133, 371, '隆阳区', 3);
INSERT INTO `lcn_region` VALUES (3134, 371, '施甸县', 3);
INSERT INTO `lcn_region` VALUES (3135, 371, '腾冲县', 3);
INSERT INTO `lcn_region` VALUES (3136, 371, '龙陵县', 3);
INSERT INTO `lcn_region` VALUES (3137, 371, '昌宁县', 3);
INSERT INTO `lcn_region` VALUES (3138, 372, '楚雄市', 3);
INSERT INTO `lcn_region` VALUES (3139, 372, '双柏县', 3);
INSERT INTO `lcn_region` VALUES (3140, 372, '牟定县', 3);
INSERT INTO `lcn_region` VALUES (3141, 372, '南华县', 3);
INSERT INTO `lcn_region` VALUES (3142, 372, '姚安县', 3);
INSERT INTO `lcn_region` VALUES (3143, 372, '大姚县', 3);
INSERT INTO `lcn_region` VALUES (3144, 372, '永仁县', 3);
INSERT INTO `lcn_region` VALUES (3145, 372, '元谋县', 3);
INSERT INTO `lcn_region` VALUES (3146, 372, '武定县', 3);
INSERT INTO `lcn_region` VALUES (3147, 372, '禄丰县', 3);
INSERT INTO `lcn_region` VALUES (3148, 373, '大理市', 3);
INSERT INTO `lcn_region` VALUES (3149, 373, '祥云县', 3);
INSERT INTO `lcn_region` VALUES (3150, 373, '宾川县', 3);
INSERT INTO `lcn_region` VALUES (3151, 373, '弥渡县', 3);
INSERT INTO `lcn_region` VALUES (3152, 373, '永平县', 3);
INSERT INTO `lcn_region` VALUES (3153, 373, '云龙县', 3);
INSERT INTO `lcn_region` VALUES (3154, 373, '洱源县', 3);
INSERT INTO `lcn_region` VALUES (3155, 373, '剑川县', 3);
INSERT INTO `lcn_region` VALUES (3156, 373, '鹤庆县', 3);
INSERT INTO `lcn_region` VALUES (3157, 373, '漾濞', 3);
INSERT INTO `lcn_region` VALUES (3158, 373, '南涧', 3);
INSERT INTO `lcn_region` VALUES (3159, 373, '巍山', 3);
INSERT INTO `lcn_region` VALUES (3160, 374, '潞西市', 3);
INSERT INTO `lcn_region` VALUES (3161, 374, '瑞丽市', 3);
INSERT INTO `lcn_region` VALUES (3162, 374, '梁河县', 3);
INSERT INTO `lcn_region` VALUES (3163, 374, '盈江县', 3);
INSERT INTO `lcn_region` VALUES (3164, 374, '陇川县', 3);
INSERT INTO `lcn_region` VALUES (3165, 375, '香格里拉县', 3);
INSERT INTO `lcn_region` VALUES (3166, 375, '德钦县', 3);
INSERT INTO `lcn_region` VALUES (3167, 375, '维西', 3);
INSERT INTO `lcn_region` VALUES (3168, 376, '泸西县', 3);
INSERT INTO `lcn_region` VALUES (3169, 376, '蒙自县', 3);
INSERT INTO `lcn_region` VALUES (3170, 376, '个旧市', 3);
INSERT INTO `lcn_region` VALUES (3171, 376, '开远市', 3);
INSERT INTO `lcn_region` VALUES (3172, 376, '绿春县', 3);
INSERT INTO `lcn_region` VALUES (3173, 376, '建水县', 3);
INSERT INTO `lcn_region` VALUES (3174, 376, '石屏县', 3);
INSERT INTO `lcn_region` VALUES (3175, 376, '弥勒县', 3);
INSERT INTO `lcn_region` VALUES (3176, 376, '元阳县', 3);
INSERT INTO `lcn_region` VALUES (3177, 376, '红河县', 3);
INSERT INTO `lcn_region` VALUES (3178, 376, '金平', 3);
INSERT INTO `lcn_region` VALUES (3179, 376, '河口', 3);
INSERT INTO `lcn_region` VALUES (3180, 376, '屏边', 3);
INSERT INTO `lcn_region` VALUES (3181, 377, '临翔区', 3);
INSERT INTO `lcn_region` VALUES (3182, 377, '凤庆县', 3);
INSERT INTO `lcn_region` VALUES (3183, 377, '云县', 3);
INSERT INTO `lcn_region` VALUES (3184, 377, '永德县', 3);
INSERT INTO `lcn_region` VALUES (3185, 377, '镇康县', 3);
INSERT INTO `lcn_region` VALUES (3186, 377, '双江', 3);
INSERT INTO `lcn_region` VALUES (3187, 377, '耿马', 3);
INSERT INTO `lcn_region` VALUES (3188, 377, '沧源', 3);
INSERT INTO `lcn_region` VALUES (3189, 378, '麒麟区', 3);
INSERT INTO `lcn_region` VALUES (3190, 378, '宣威市', 3);
INSERT INTO `lcn_region` VALUES (3191, 378, '马龙县', 3);
INSERT INTO `lcn_region` VALUES (3192, 378, '陆良县', 3);
INSERT INTO `lcn_region` VALUES (3193, 378, '师宗县', 3);
INSERT INTO `lcn_region` VALUES (3194, 378, '罗平县', 3);
INSERT INTO `lcn_region` VALUES (3195, 378, '富源县', 3);
INSERT INTO `lcn_region` VALUES (3196, 378, '会泽县', 3);
INSERT INTO `lcn_region` VALUES (3197, 378, '沾益县', 3);
INSERT INTO `lcn_region` VALUES (3198, 379, '文山县', 3);
INSERT INTO `lcn_region` VALUES (3199, 379, '砚山县', 3);
INSERT INTO `lcn_region` VALUES (3200, 379, '西畴县', 3);
INSERT INTO `lcn_region` VALUES (3201, 379, '麻栗坡县', 3);
INSERT INTO `lcn_region` VALUES (3202, 379, '马关县', 3);
INSERT INTO `lcn_region` VALUES (3203, 379, '丘北县', 3);
INSERT INTO `lcn_region` VALUES (3204, 379, '广南县', 3);
INSERT INTO `lcn_region` VALUES (3205, 379, '富宁县', 3);
INSERT INTO `lcn_region` VALUES (3206, 380, '景洪市', 3);
INSERT INTO `lcn_region` VALUES (3207, 380, '勐海县', 3);
INSERT INTO `lcn_region` VALUES (3208, 380, '勐腊县', 3);
INSERT INTO `lcn_region` VALUES (3209, 381, '红塔区', 3);
INSERT INTO `lcn_region` VALUES (3210, 381, '江川县', 3);
INSERT INTO `lcn_region` VALUES (3211, 381, '澄江县', 3);
INSERT INTO `lcn_region` VALUES (3212, 381, '通海县', 3);
INSERT INTO `lcn_region` VALUES (3213, 381, '华宁县', 3);
INSERT INTO `lcn_region` VALUES (3214, 381, '易门县', 3);
INSERT INTO `lcn_region` VALUES (3215, 381, '峨山', 3);
INSERT INTO `lcn_region` VALUES (3216, 381, '新平', 3);
INSERT INTO `lcn_region` VALUES (3217, 381, '元江', 3);
INSERT INTO `lcn_region` VALUES (3218, 382, '昭阳区', 3);
INSERT INTO `lcn_region` VALUES (3219, 382, '鲁甸县', 3);
INSERT INTO `lcn_region` VALUES (3220, 382, '巧家县', 3);
INSERT INTO `lcn_region` VALUES (3221, 382, '盐津县', 3);
INSERT INTO `lcn_region` VALUES (3222, 382, '大关县', 3);
INSERT INTO `lcn_region` VALUES (3223, 382, '永善县', 3);
INSERT INTO `lcn_region` VALUES (3224, 382, '绥江县', 3);
INSERT INTO `lcn_region` VALUES (3225, 382, '镇雄县', 3);
INSERT INTO `lcn_region` VALUES (3226, 382, '彝良县', 3);
INSERT INTO `lcn_region` VALUES (3227, 382, '威信县', 3);
INSERT INTO `lcn_region` VALUES (3228, 382, '水富县', 3);
INSERT INTO `lcn_region` VALUES (3229, 383, '西湖区', 3);
INSERT INTO `lcn_region` VALUES (3230, 383, '上城区', 3);
INSERT INTO `lcn_region` VALUES (3231, 383, '下城区', 3);
INSERT INTO `lcn_region` VALUES (3232, 383, '拱墅区', 3);
INSERT INTO `lcn_region` VALUES (3233, 383, '滨江区', 3);
INSERT INTO `lcn_region` VALUES (3234, 383, '江干区', 3);
INSERT INTO `lcn_region` VALUES (3235, 383, '萧山区', 3);
INSERT INTO `lcn_region` VALUES (3236, 383, '余杭区', 3);
INSERT INTO `lcn_region` VALUES (3237, 383, '市郊', 3);
INSERT INTO `lcn_region` VALUES (3238, 383, '建德市', 3);
INSERT INTO `lcn_region` VALUES (3239, 383, '富阳市', 3);
INSERT INTO `lcn_region` VALUES (3240, 383, '临安市', 3);
INSERT INTO `lcn_region` VALUES (3241, 383, '桐庐县', 3);
INSERT INTO `lcn_region` VALUES (3242, 383, '淳安县', 3);
INSERT INTO `lcn_region` VALUES (3243, 384, '吴兴区', 3);
INSERT INTO `lcn_region` VALUES (3244, 384, '南浔区', 3);
INSERT INTO `lcn_region` VALUES (3245, 384, '德清县', 3);
INSERT INTO `lcn_region` VALUES (3246, 384, '长兴县', 3);
INSERT INTO `lcn_region` VALUES (3247, 384, '安吉县', 3);
INSERT INTO `lcn_region` VALUES (3248, 385, '南湖区', 3);
INSERT INTO `lcn_region` VALUES (3249, 385, '秀洲区', 3);
INSERT INTO `lcn_region` VALUES (3250, 385, '海宁市', 3);
INSERT INTO `lcn_region` VALUES (3251, 385, '嘉善县', 3);
INSERT INTO `lcn_region` VALUES (3252, 385, '平湖市', 3);
INSERT INTO `lcn_region` VALUES (3253, 385, '桐乡市', 3);
INSERT INTO `lcn_region` VALUES (3254, 385, '海盐县', 3);
INSERT INTO `lcn_region` VALUES (3255, 386, '婺城区', 3);
INSERT INTO `lcn_region` VALUES (3256, 386, '金东区', 3);
INSERT INTO `lcn_region` VALUES (3257, 386, '兰溪市', 3);
INSERT INTO `lcn_region` VALUES (3258, 386, '市区', 3);
INSERT INTO `lcn_region` VALUES (3259, 386, '佛堂镇', 3);
INSERT INTO `lcn_region` VALUES (3260, 386, '上溪镇', 3);
INSERT INTO `lcn_region` VALUES (3261, 386, '义亭镇', 3);
INSERT INTO `lcn_region` VALUES (3262, 386, '大陈镇', 3);
INSERT INTO `lcn_region` VALUES (3263, 386, '苏溪镇', 3);
INSERT INTO `lcn_region` VALUES (3264, 386, '赤岸镇', 3);
INSERT INTO `lcn_region` VALUES (3265, 386, '东阳市', 3);
INSERT INTO `lcn_region` VALUES (3266, 386, '永康市', 3);
INSERT INTO `lcn_region` VALUES (3267, 386, '武义县', 3);
INSERT INTO `lcn_region` VALUES (3268, 386, '浦江县', 3);
INSERT INTO `lcn_region` VALUES (3269, 386, '磐安县', 3);
INSERT INTO `lcn_region` VALUES (3270, 387, '莲都区', 3);
INSERT INTO `lcn_region` VALUES (3271, 387, '龙泉市', 3);
INSERT INTO `lcn_region` VALUES (3272, 387, '青田县', 3);
INSERT INTO `lcn_region` VALUES (3273, 387, '缙云县', 3);
INSERT INTO `lcn_region` VALUES (3274, 387, '遂昌县', 3);
INSERT INTO `lcn_region` VALUES (3275, 387, '松阳县', 3);
INSERT INTO `lcn_region` VALUES (3276, 387, '云和县', 3);
INSERT INTO `lcn_region` VALUES (3277, 387, '庆元县', 3);
INSERT INTO `lcn_region` VALUES (3278, 387, '景宁', 3);
INSERT INTO `lcn_region` VALUES (3279, 388, '海曙区', 3);
INSERT INTO `lcn_region` VALUES (3280, 388, '江东区', 3);
INSERT INTO `lcn_region` VALUES (3281, 388, '江北区', 3);
INSERT INTO `lcn_region` VALUES (3282, 388, '镇海区', 3);
INSERT INTO `lcn_region` VALUES (3283, 388, '北仑区', 3);
INSERT INTO `lcn_region` VALUES (3284, 388, '鄞州区', 3);
INSERT INTO `lcn_region` VALUES (3285, 388, '余姚市', 3);
INSERT INTO `lcn_region` VALUES (3286, 388, '慈溪市', 3);
INSERT INTO `lcn_region` VALUES (3287, 388, '奉化市', 3);
INSERT INTO `lcn_region` VALUES (3288, 388, '象山县', 3);
INSERT INTO `lcn_region` VALUES (3289, 388, '宁海县', 3);
INSERT INTO `lcn_region` VALUES (3290, 389, '越城区', 3);
INSERT INTO `lcn_region` VALUES (3291, 389, '上虞市', 3);
INSERT INTO `lcn_region` VALUES (3292, 389, '嵊州市', 3);
INSERT INTO `lcn_region` VALUES (3293, 389, '绍兴县', 3);
INSERT INTO `lcn_region` VALUES (3294, 389, '新昌县', 3);
INSERT INTO `lcn_region` VALUES (3295, 389, '诸暨市', 3);
INSERT INTO `lcn_region` VALUES (3296, 390, '椒江区', 3);
INSERT INTO `lcn_region` VALUES (3297, 390, '黄岩区', 3);
INSERT INTO `lcn_region` VALUES (3298, 390, '路桥区', 3);
INSERT INTO `lcn_region` VALUES (3299, 390, '温岭市', 3);
INSERT INTO `lcn_region` VALUES (3300, 390, '临海市', 3);
INSERT INTO `lcn_region` VALUES (3301, 390, '玉环县', 3);
INSERT INTO `lcn_region` VALUES (3302, 390, '三门县', 3);
INSERT INTO `lcn_region` VALUES (3303, 390, '天台县', 3);
INSERT INTO `lcn_region` VALUES (3304, 390, '仙居县', 3);
INSERT INTO `lcn_region` VALUES (3305, 391, '鹿城区', 3);
INSERT INTO `lcn_region` VALUES (3306, 391, '龙湾区', 3);
INSERT INTO `lcn_region` VALUES (3307, 391, '瓯海区', 3);
INSERT INTO `lcn_region` VALUES (3308, 391, '瑞安市', 3);
INSERT INTO `lcn_region` VALUES (3309, 391, '乐清市', 3);
INSERT INTO `lcn_region` VALUES (3310, 391, '洞头县', 3);
INSERT INTO `lcn_region` VALUES (3311, 391, '永嘉县', 3);
INSERT INTO `lcn_region` VALUES (3312, 391, '平阳县', 3);
INSERT INTO `lcn_region` VALUES (3313, 391, '苍南县', 3);
INSERT INTO `lcn_region` VALUES (3314, 391, '文成县', 3);
INSERT INTO `lcn_region` VALUES (3315, 391, '泰顺县', 3);
INSERT INTO `lcn_region` VALUES (3316, 392, '定海区', 3);
INSERT INTO `lcn_region` VALUES (3317, 392, '普陀区', 3);
INSERT INTO `lcn_region` VALUES (3318, 392, '岱山县', 3);
INSERT INTO `lcn_region` VALUES (3319, 392, '嵊泗县', 3);
INSERT INTO `lcn_region` VALUES (3320, 393, '衢州市', 3);
INSERT INTO `lcn_region` VALUES (3321, 393, '江山市', 3);
INSERT INTO `lcn_region` VALUES (3322, 393, '常山县', 3);
INSERT INTO `lcn_region` VALUES (3323, 393, '开化县', 3);
INSERT INTO `lcn_region` VALUES (3324, 393, '龙游县', 3);
INSERT INTO `lcn_region` VALUES (3325, 394, '合川区', 3);
INSERT INTO `lcn_region` VALUES (3326, 394, '江津区', 3);
INSERT INTO `lcn_region` VALUES (3327, 394, '南川区', 3);
INSERT INTO `lcn_region` VALUES (3328, 394, '永川区', 3);
INSERT INTO `lcn_region` VALUES (3329, 394, '南岸区', 3);
INSERT INTO `lcn_region` VALUES (3330, 394, '渝北区', 3);
INSERT INTO `lcn_region` VALUES (3331, 394, '万盛区', 3);
INSERT INTO `lcn_region` VALUES (3332, 394, '大渡口区', 3);
INSERT INTO `lcn_region` VALUES (3333, 394, '万州区', 3);
INSERT INTO `lcn_region` VALUES (3334, 394, '北碚区', 3);
INSERT INTO `lcn_region` VALUES (3335, 394, '沙坪坝区', 3);
INSERT INTO `lcn_region` VALUES (3336, 394, '巴南区', 3);
INSERT INTO `lcn_region` VALUES (3337, 394, '涪陵区', 3);
INSERT INTO `lcn_region` VALUES (3338, 394, '江北区', 3);
INSERT INTO `lcn_region` VALUES (3339, 394, '九龙坡区', 3);
INSERT INTO `lcn_region` VALUES (3340, 394, '渝中区', 3);
INSERT INTO `lcn_region` VALUES (3341, 394, '黔江开发区', 3);
INSERT INTO `lcn_region` VALUES (3342, 394, '长寿区', 3);
INSERT INTO `lcn_region` VALUES (3343, 394, '双桥区', 3);
INSERT INTO `lcn_region` VALUES (3344, 394, '綦江县', 3);
INSERT INTO `lcn_region` VALUES (3345, 394, '潼南县', 3);
INSERT INTO `lcn_region` VALUES (3346, 394, '铜梁县', 3);
INSERT INTO `lcn_region` VALUES (3347, 394, '大足县', 3);
INSERT INTO `lcn_region` VALUES (3348, 394, '荣昌县', 3);
INSERT INTO `lcn_region` VALUES (3349, 394, '璧山县', 3);
INSERT INTO `lcn_region` VALUES (3350, 394, '垫江县', 3);
INSERT INTO `lcn_region` VALUES (3351, 394, '武隆县', 3);
INSERT INTO `lcn_region` VALUES (3352, 394, '丰都县', 3);
INSERT INTO `lcn_region` VALUES (3353, 394, '城口县', 3);
INSERT INTO `lcn_region` VALUES (3354, 394, '梁平县', 3);
INSERT INTO `lcn_region` VALUES (3355, 394, '开县', 3);
INSERT INTO `lcn_region` VALUES (3356, 394, '巫溪县', 3);
INSERT INTO `lcn_region` VALUES (3357, 394, '巫山县', 3);
INSERT INTO `lcn_region` VALUES (3358, 394, '奉节县', 3);
INSERT INTO `lcn_region` VALUES (3359, 394, '云阳县', 3);
INSERT INTO `lcn_region` VALUES (3360, 394, '忠县', 3);
INSERT INTO `lcn_region` VALUES (3361, 394, '石柱', 3);
INSERT INTO `lcn_region` VALUES (3362, 394, '彭水', 3);
INSERT INTO `lcn_region` VALUES (3363, 394, '酉阳', 3);
INSERT INTO `lcn_region` VALUES (3364, 394, '秀山', 3);
INSERT INTO `lcn_region` VALUES (3365, 395, '沙田区', 3);
INSERT INTO `lcn_region` VALUES (3366, 395, '东区', 3);
INSERT INTO `lcn_region` VALUES (3367, 395, '观塘区', 3);
INSERT INTO `lcn_region` VALUES (3368, 395, '黄大仙区', 3);
INSERT INTO `lcn_region` VALUES (3369, 395, '九龙城区', 3);
INSERT INTO `lcn_region` VALUES (3370, 395, '屯门区', 3);
INSERT INTO `lcn_region` VALUES (3371, 395, '葵青区', 3);
INSERT INTO `lcn_region` VALUES (3372, 395, '元朗区', 3);
INSERT INTO `lcn_region` VALUES (3373, 395, '深水埗区', 3);
INSERT INTO `lcn_region` VALUES (3374, 395, '西贡区', 3);
INSERT INTO `lcn_region` VALUES (3375, 395, '大埔区', 3);
INSERT INTO `lcn_region` VALUES (3376, 395, '湾仔区', 3);
INSERT INTO `lcn_region` VALUES (3377, 395, '油尖旺区', 3);
INSERT INTO `lcn_region` VALUES (3378, 395, '北区', 3);
INSERT INTO `lcn_region` VALUES (3379, 395, '南区', 3);
INSERT INTO `lcn_region` VALUES (3380, 395, '荃湾区', 3);
INSERT INTO `lcn_region` VALUES (3381, 395, '中西区', 3);
INSERT INTO `lcn_region` VALUES (3382, 395, '离岛区', 3);
INSERT INTO `lcn_region` VALUES (3383, 396, '澳门', 3);
INSERT INTO `lcn_region` VALUES (3384, 397, '台北', 3);
INSERT INTO `lcn_region` VALUES (3385, 397, '高雄', 3);
INSERT INTO `lcn_region` VALUES (3386, 397, '基隆', 3);
INSERT INTO `lcn_region` VALUES (3387, 397, '台中', 3);
INSERT INTO `lcn_region` VALUES (3388, 397, '台南', 3);
INSERT INTO `lcn_region` VALUES (3389, 397, '新竹', 3);
INSERT INTO `lcn_region` VALUES (3390, 397, '嘉义', 3);
INSERT INTO `lcn_region` VALUES (3391, 397, '宜兰县', 3);
INSERT INTO `lcn_region` VALUES (3392, 397, '桃园县', 3);
INSERT INTO `lcn_region` VALUES (3393, 397, '苗栗县', 3);
INSERT INTO `lcn_region` VALUES (3394, 397, '彰化县', 3);
INSERT INTO `lcn_region` VALUES (3395, 397, '南投县', 3);
INSERT INTO `lcn_region` VALUES (3396, 397, '云林县', 3);
INSERT INTO `lcn_region` VALUES (3397, 397, '屏东县', 3);
INSERT INTO `lcn_region` VALUES (3398, 397, '台东县', 3);
INSERT INTO `lcn_region` VALUES (3399, 397, '花莲县', 3);
INSERT INTO `lcn_region` VALUES (3400, 397, '澎湖县', 3);
INSERT INTO `lcn_region` VALUES (3401, 3, '合肥', 2);
INSERT INTO `lcn_region` VALUES (3402, 3401, '庐阳区', 3);
INSERT INTO `lcn_region` VALUES (3403, 3401, '瑶海区', 3);
INSERT INTO `lcn_region` VALUES (3404, 3401, '蜀山区', 3);
INSERT INTO `lcn_region` VALUES (3405, 3401, '包河区', 3);
INSERT INTO `lcn_region` VALUES (3406, 3401, '长丰县', 3);
INSERT INTO `lcn_region` VALUES (3407, 3401, '肥东县', 3);
INSERT INTO `lcn_region` VALUES (3408, 3401, '肥西县', 3);

-- --------------------------------------------------------

-- 
-- 表的结构 `lcn_role`
-- 

CREATE TABLE `lcn_role` (
  `id` smallint(6) NOT NULL auto_increment,
  `name` varchar(64) collate utf8_bin NOT NULL,
  `action_list` text collate utf8_bin,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

-- 
-- 导出表中的数据 `lcn_role`
-- 

INSERT INTO `lcn_role` VALUES (1, 0xe7b3bbe7bb9fe7aea1e79086e59198, 0x70726f647563745f6d616e6167652c70726f647563745f64656c6574652c6361745f6d616e6167652c6361745f64656c6574652c617474725f6d616e6167652c617474725f64656c6574652c617474725f7365745f6d616e6167652c617474725f7365745f64656c6574652c6272616e645f6d616e6167652c6272616e645f64656c6574652c637573746f6d65725f6d616e6167652c637573746f6d65725f64656c6574652c7061796d656e745f6d616e6167652c7061796d656e745f756e696e7374616c6c2c61646d696e5f757365725f6d616e6167652c61646d696e5f757365725f64656c6574652c726f6c655f6d616e6167652c726f6c655f64656c6574652c7368697070696e675f6d616e616765, '0000-00-00 00:00:00', '2010-05-13 04:09:07');

-- --------------------------------------------------------

-- 
-- 表的结构 `lcn_sessions`
-- 

CREATE TABLE `lcn_sessions` (
  `session_id` varchar(40) collate utf8_bin NOT NULL default '0',
  `ip_address` varchar(16) collate utf8_bin NOT NULL default '0',
  `user_agent` varchar(50) collate utf8_bin NOT NULL,
  `last_activity` int(10) unsigned NOT NULL default '0',
  `user_data` text collate utf8_bin,
  PRIMARY KEY  (`session_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- 
-- 导出表中的数据 `lcn_sessions`
-- 

INSERT INTO `lcn_sessions` VALUES (0x3762303333306435613235383964346632393030613335656431306338363666, 0x3132372e302e302e31, 0x4d6f7a696c6c612f352e30202857696e646f77733b20553b2057696e646f7773204e5420352e313b207a682d434e3b207276, 1273741394, 0x613a353a7b733a343a226e616d65223b733a353a2261646d696e223b733a323a226964223b733a313a2231223b733a373a22726f6c655f6964223b733a313a2231223b733a31313a22616374696f6e5f6c697374223b733a3237343a2270726f647563745f6d616e6167652c70726f647563745f64656c6574652c6361745f6d616e6167652c6361745f64656c6574652c617474725f6d616e6167652c617474725f64656c6574652c617474725f7365745f6d616e6167652c617474725f7365745f64656c6574652c6272616e645f6d616e6167652c6272616e645f64656c6574652c637573746f6d65725f6d616e6167652c637573746f6d65725f64656c6574652c7061796d656e745f6d616e6167652c7061796d656e745f756e696e7374616c6c2c61646d696e5f757365725f6d616e6167652c61646d696e5f757365725f64656c6574652c726f6c655f6d616e6167652c726f6c655f64656c6574652c7368697070696e675f6d616e616765223b733a393a226c6f676765645f696e223b733a313a2231223b7d);
INSERT INTO `lcn_sessions` VALUES (0x6662643263393265343538383232643030376161396130376139393163393333, 0x3132372e302e302e31, 0x4d6f7a696c6c612f352e30202857696e646f77733b20553b2057696e646f7773204e5420352e313b207a682d434e3b207276, 1273741698, 0x613a393a7b733a343a226e616d65223b733a353a2261646d696e223b733a323a226964223b733a313a2231223b733a373a22726f6c655f6964223b733a313a2231223b733a31313a22616374696f6e5f6c697374223b733a3237343a2270726f647563745f6d616e6167652c70726f647563745f64656c6574652c6361745f6d616e6167652c6361745f64656c6574652c617474725f6d616e6167652c617474725f64656c6574652c617474725f7365745f6d616e6167652c617474725f7365745f64656c6574652c6272616e645f6d616e6167652c6272616e645f64656c6574652c637573746f6d65725f6d616e6167652c637573746f6d65725f64656c6574652c7061796d656e745f6d616e6167652c7061796d656e745f756e696e7374616c6c2c61646d696e5f757365725f6d616e6167652c61646d696e5f757365725f64656c6574652c726f6c655f6d616e6167652c726f6c655f64656c6574652c7368697070696e675f6d616e616765223b733a393a226c6f676765645f696e223b733a313a2231223b733a393a22757365725f6e616d65223b733a343a2274657374223b733a373a22757365725f6964223b733a313a2231223b733a373a22757365725f696e223b733a313a2231223b733a31333a22636172745f636f6e74656e7473223b613a333a7b733a33323a226433643934343638303261343432353937353564333865366431363365383230223b613a373a7b733a353a22726f776964223b733a33323a226433643934343638303261343432353937353564333865366431363365383230223b733a323a226964223b733a313a2231223b733a333a22717479223b733a313a2231223b733a353a227072696365223b733a333a222e3030223b733a343a226e616d65223b733a33323a22e5ae8fe7a281efbc8841636572efbc89415334373431472d3433324735304d6e223b733a373a226f7074696f6e73223b613a313a7b733a363a22776569676874223b733a313a2230223b7d733a383a22737562746f74616c223b643a303b7d733a31313a22746f74616c5f6974656d73223b733a313a2231223b733a31303a22636172745f746f74616c223b733a313a2230223b7d7d);
INSERT INTO `lcn_sessions` VALUES (0x6366616138663966396330353331386363623336643435393932626131383666, 0x3132372e302e302e31, 0x4d6f7a696c6c612f352e30202857696e646f77733b20553b2057696e646f7773204e5420352e313b207a682d434e3b207276, 1273741712, NULL);
INSERT INTO `lcn_sessions` VALUES (0x6239306337633839616665623462363930643463623534633237323961363534, 0x3132372e302e302e31, 0x4d6f7a696c6c612f352e30202857696e646f77733b20553b2057696e646f7773204e5420352e313b207a682d434e3b207276, 1273743046, 0x613a393a7b733a343a226e616d65223b733a353a2261646d696e223b733a323a226964223b733a313a2231223b733a373a22726f6c655f6964223b733a313a2231223b733a31313a22616374696f6e5f6c697374223b733a3237343a2270726f647563745f6d616e6167652c70726f647563745f64656c6574652c6361745f6d616e6167652c6361745f64656c6574652c617474725f6d616e6167652c617474725f64656c6574652c617474725f7365745f6d616e6167652c617474725f7365745f64656c6574652c6272616e645f6d616e6167652c6272616e645f64656c6574652c637573746f6d65725f6d616e6167652c637573746f6d65725f64656c6574652c7061796d656e745f6d616e6167652c7061796d656e745f756e696e7374616c6c2c61646d696e5f757365725f6d616e6167652c61646d696e5f757365725f64656c6574652c726f6c655f6d616e6167652c726f6c655f64656c6574652c7368697070696e675f6d616e616765223b733a393a226c6f676765645f696e223b733a313a2231223b733a393a22757365725f6e616d65223b733a343a2274657374223b733a373a22757365725f6964223b733a313a2231223b733a373a22757365725f696e223b733a313a2231223b733a31353a22757365725f6c6173745f6c6f67696e223b733a31393a22323031302d30352d31332030393a31343a3131223b7d);

-- --------------------------------------------------------

-- 
-- 表的结构 `lcn_shipping`
-- 

CREATE TABLE `lcn_shipping` (
  `id` tinyint(3) unsigned NOT NULL auto_increment,
  `code` varchar(32) collate utf8_bin NOT NULL,
  `name` varchar(64) collate utf8_bin NOT NULL,
  `desc` varchar(255) collate utf8_bin NOT NULL,
  `insure` varchar(10) collate utf8_bin NOT NULL default '0',
  `enabled` tinyint(1) unsigned NOT NULL default '1',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=6 ;

-- 
-- 导出表中的数据 `lcn_shipping`
-- 

INSERT INTO `lcn_shipping` VALUES (1, 0x636f64, 0xe8b4a7e588b0e4bb98e6acbe, 0xe98089e68ba9e699aee9809ae5bfabe98092efbc8ce5b086e794b170687073686f70e59586e59f8ee6a0b9e68daee5aea2e688b7e79a84e59cb0e59d80e58f8ae8aea2e8b4ade59586e593813c62722f3e20e79a84e680a7e8b4a8e58cb9e9858de98082e59088e79a84e5bfabe98092e585ace58fb8efbc88e794b3e9809aefbc8ce59c86e9809aefbc8ce9a1bae4b8b0e7ad89efbc89e38082, 0x30, 0);
INSERT INTO `lcn_shipping` VALUES (2, 0x73746f5f65787072657373, 0xe794b3e9809ae5bfabe98092, 0xe6b19fe38081e6b599e38081e6b2aae59cb0e58cbae9a696e9878de4b8ba3135e585832f4b47efbc8ce585b6e4bb96e59cb0e58cba3138e585832f4b47efbc8c20e7bbade9878de59d873c62722f3ee4b8ba352d36e585832f4b47efbc8c20e4ba91e58d97e59cb0e58cbae4b8ba38e58583, 0x30, 1);
INSERT INTO `lcn_shipping` VALUES (3, 0x73665f65787072657373, 0xe9a1bae4b8b0e9809fe8bf90, 0xe6b19fe38081e6b599e38081e6b2aae59cb0e58cbae9a696e9878d3135e585832f4b47efbc8ce7bbade9878d32e585832f4b47efbc8ce585b6e4bd99e59f8ee5b882e9a696e9878d3230e585832f4b47, 0x30, 1);
INSERT INTO `lcn_shipping` VALUES (4, 0x706f73745f6d61696c, 0xe982aee5b180e5b9b3e982ae, 0xe982aee5b180e5b9b3e982aee79a84e68f8fe8bfb0e58685e5aeb9e38082, 0x30, 1);
INSERT INTO `lcn_shipping` VALUES (5, 0x656d73, 0x454d53e59bbde58685e982aee694bfe789b9e5bfabe4b893e98092, 0x454d5320e59bbde58685e982aee694bfe789b9e5bfabe4b893e98092e68f8fe8bfb0e58685e5aeb9, 0x30, 1);

-- --------------------------------------------------------

-- 
-- 表的结构 `lcn_shipping_area`
-- 

CREATE TABLE `lcn_shipping_area` (
  `id` smallint(6) unsigned NOT NULL auto_increment,
  `name` varchar(128) collate utf8_bin NOT NULL,
  `shipping_id` tinyint(3) unsigned NOT NULL,
  `configure` text collate utf8_bin NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=5 ;

-- 
-- 导出表中的数据 `lcn_shipping_area`
-- 

INSERT INTO `lcn_shipping_area` VALUES (1, 0xe5b9bfe4b89c, 2, 0x613a343a7b693a303b613a323a7b733a343a226e616d65223b733a383a226974656d5f666565223b733a353a2276616c7565223b733a323a223135223b7d693a313b613a323a7b733a343a226e616d65223b733a383a22626173655f666565223b733a353a2276616c7565223b733a323a223135223b7d693a323b613a323a7b733a343a226e616d65223b733a383a22737465705f666565223b733a353a2276616c7565223b733a313a2235223b7d693a333b613a323a7b733a343a226e616d65223b733a31363a226665655f636f6d707574655f6d6f6465223b733a353a2276616c7565223b733a393a2262795f776569676874223b7d7d);
INSERT INTO `lcn_shipping_area` VALUES (2, 0xe585a8e59bbd, 3, 0x613a343a7b693a303b613a323a7b733a343a226e616d65223b733a383a226974656d5f666565223b733a353a2276616c7565223b733a323a223230223b7d693a313b613a323a7b733a343a226e616d65223b733a383a22626173655f666565223b733a353a2276616c7565223b733a323a223135223b7d693a323b613a323a7b733a343a226e616d65223b733a383a22737465705f666565223b733a353a2276616c7565223b733a313a2232223b7d693a333b613a323a7b733a343a226e616d65223b733a31363a226665655f636f6d707574655f6d6f6465223b733a353a2276616c7565223b733a393a2262795f776569676874223b7d7d);
INSERT INTO `lcn_shipping_area` VALUES (3, 0xe585a8e59bbd, 4, 0x613a363a7b693a303b613a323a7b733a343a226e616d65223b733a383a226974656d5f666565223b733a353a2276616c7565223b733a313a2234223b7d693a313b613a323a7b733a343a226e616d65223b733a383a22626173655f666565223b733a353a2276616c7565223b733a333a22332e35223b7d693a323b613a323a7b733a343a226e616d65223b733a383a22737465705f666565223b733a353a2276616c7565223b733a313a2232223b7d693a333b613a323a7b733a343a226e616d65223b733a393a22737465705f66656531223b733a353a2276616c7565223b733a333a22322e35223b7d693a343b613a323a7b733a343a226e616d65223b733a383a227061636b5f666565223b733a353a2276616c7565223b733a313a2230223b7d693a353b613a323a7b733a343a226e616d65223b733a31363a226665655f636f6d707574655f6d6f6465223b733a353a2276616c7565223b733a393a2262795f776569676874223b7d7d);
INSERT INTO `lcn_shipping_area` VALUES (4, 0xe585a8e59bbd, 5, 0x613a343a7b693a303b613a323a7b733a343a226e616d65223b733a383a226974656d5f666565223b733a353a2276616c7565223b733a323a223230223b7d693a313b613a323a7b733a343a226e616d65223b733a383a22626173655f666565223b733a353a2276616c7565223b733a323a223230223b7d693a323b613a323a7b733a343a226e616d65223b733a383a22737465705f666565223b733a353a2276616c7565223b733a323a223135223b7d693a333b613a323a7b733a343a226e616d65223b733a31363a226665655f636f6d707574655f6d6f6465223b733a353a2276616c7565223b733a393a2262795f776569676874223b7d7d);
