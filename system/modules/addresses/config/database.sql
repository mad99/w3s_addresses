-- **********************************************************
-- *                                                        *
-- * IMPORTANT NOTE                                         *
-- *                                                        *
-- * Do not import this file manually but use the TYPOlight *
-- * install tool to create and maintain database tables!   *
-- *                                                        *
-- **********************************************************

-- 
-- Table `tl_iso_addresses`
-- 

CREATE TABLE `tl_address` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `pid` int(10) unsigned NOT NULL default '0',
  `tstamp` int(10) unsigned NOT NULL default '0',
  `company` varchar(255) NOT NULL default '',
  `firstname` varchar(255) NOT NULL default '',
  `lastname` varchar(255) NOT NULL default '',
  `gender` varchar(32) NOT NULL default '',
  `language` varchar(2) NOT NULL default '',
  `street` varchar(255) NOT NULL default '',
  `street_2` varchar(255) NOT NULL default '',
  `street_3` varchar(255) NOT NULL default '',
  `postal` varchar(32) NOT NULL default '',
  `city` varchar(255) NOT NULL default '',
  `state` varchar(255) NOT NULL default '',
  `country` varchar(32) NOT NULL default '',
  `email` varchar(255) NOT NULL default '',
  `secondEmail` varchar(255) NOT NULL default '',
  `phone` varchar(64) NOT NULL default '',
  `mobile` varchar(64) NOT NULL default '',
  `fax` varchar(64) NOT NULL default '',
  `website` varchar(255) NOT NULL default '',
  `isBillingAddress` char(1) NOT NULL default '',
  `isPrivateAddress` char(1) NOT NULL default '',
  `isDefaultAddress` char(1) NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
