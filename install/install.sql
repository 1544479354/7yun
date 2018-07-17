DROP TABLE IF EXISTS `yaofan_config`;</explode>
CREATE TABLE `yaofan_config` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `switch` int(1) NOT NULL DEFAULT '1',
  `user` varchar(250) NOT NULL,
  `pwd` varchar(250) NOT NULL,
  `sitename` varchar(50) NOT NULL,
  `keywords` text NOT NULL,
  `description` text NOT NULL,
  `panel` text NOT NULL,
  `copy` text NOT NULL,
  `liuyan` text NOT NULL,
  `kfqq` varchar(20) NOT NULL,
  `api` varchar(50) NOT NULL,
  `payid` varchar(50) NOT NULL,
  `ms` varchar(250) NOT NULL,
  `ym` varchar(250) NOT NULL,
  `gg` varchar(250) NOT NULL,
  `music` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;</explode>
INSERT INTO `yaofan_config`(`id`, `switch`, `user`, `pwd`, `sitename`, `keywords`, `description`,`panel`,`copy`,`liuyan`,`kfqq`, `api`,`payid`,`ms`,`gg`,`music`) VALUES
('1', '1', 'admin', '123456', '关于偏执', '个人介绍页带后版本偏执qq1544479354', '个人介绍页面','柒耘科技', '2017-2018', '偏执', '1544479354', 'https://weibo.com/u/5655779188', '备份变量1', '', '大家好我是偏执</br>我只想努力生活</br>为了将来能配的上心目中的女神', 'http://scqiniu.11qqle.com/yindao.mp3');</explode>