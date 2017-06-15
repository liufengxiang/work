-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-04-13 08:00:50
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sxtbu_jsj`
--

-- --------------------------------------------------------

--
-- 表的结构 `gs_admin`
--

CREATE TABLE IF NOT EXISTS `gs_admin` (
  `aid` int(11) NOT NULL AUTO_INCREMENT COMMENT '管理员id',
  `type` int(11) DEFAULT '0',
  `aname` varchar(50) NOT NULL,
  `apass` varchar(32) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='管理员表' AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `gs_admin`
--

INSERT INTO `gs_admin` (`aid`, `type`, `aname`, `apass`) VALUES
(2, 1, 'admin', '91183e1cb4e46961f86a2ef6287927ad'),
(4, 0, 'likai123', '06158164cdf1e6ad596056a975798fc1');

-- --------------------------------------------------------

--
-- 表的结构 `gs_category`
--

CREATE TABLE IF NOT EXISTS `gs_category` (
  `cid` int(11) NOT NULL AUTO_INCREMENT COMMENT '分类id',
  `cname` varchar(50) NOT NULL COMMENT '分类名称',
  `pid` int(11) NOT NULL COMMENT '父级分类id',
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='分类表' AUTO_INCREMENT=65 ;

--
-- 转存表中的数据 `gs_category`
--

INSERT INTO `gs_category` (`cid`, `cname`, `pid`) VALUES
(1, '无分类', 0),
(26, '学院概况', 0),
(27, '学院简介', 26),
(31, '历史沿革', 26),
(33, '师资队伍', 0),
(34, '师资概况', 33),
(35, '专业带头人', 33),
(36, '教学名师', 33),
(37, '骨干教师', 33),
(38, '科学研究', 0),
(39, '科研概况', 38),
(40, '论文发表', 38),
(41, '科研成果', 38),
(42, '教科研课题情况一览表', 38),
(43, '公开出版论著情况一览表', 38),
(44, '专业建设', 0),
(45, '精品课程', 0),
(46, '实验室建设', 0),
(47, '大赛获奖', 0),
(48, '校企合作', 0),
(49, '党建工作', 0),
(50, '学生工作', 0),
(51, '群团建设', 0),
(52, '规章制度', 0),
(53, '专业介绍', 44),
(54, '课程目录', 45),
(55, '基本情况', 46),
(56, '电子设计大赛', 47),
(57, '合作企业', 48),
(58, '党委发文', 49),
(59, '招生工作', 50),
(60, '工会工作', 51),
(61, '教学工作管理制度', 52),
(62, '课程资源', 45),
(63, '这是三级目录', 31),
(64, '这又是一个三级目录', 31);

-- --------------------------------------------------------

--
-- 表的结构 `gs_cooperation`
--

CREATE TABLE IF NOT EXISTS `gs_cooperation` (
  `coid` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id号',
  `coname` varchar(100) NOT NULL COMMENT '企业名称',
  `introduce` varchar(3000) NOT NULL COMMENT '企业介绍',
  `cotime` varchar(255) NOT NULL COMMENT '合作日期',
  `ntime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '发布时间',
  `logoimg` varchar(255) NOT NULL COMMENT '企业logo',
  `link` varchar(255) NOT NULL COMMENT '企业网址',
  `state` tinyint(8) NOT NULL COMMENT '合作状态  1 代表合作中  2代表取消合作',
  `name` varchar(50) NOT NULL COMMENT '发布人',
  PRIMARY KEY (`coid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='校企合作' AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `gs_cooperation`
--

INSERT INTO `gs_cooperation` (`coid`, `coname`, `introduce`, `cotime`, `ntime`, `logoimg`, `link`, `state`, `name`) VALUES
(1, '这是企业名称', '这是企业介绍', '0000-00-00', '2017-04-07 02:30:32', 'http://localhost/gongshang/upload/2017-04-07/14915322312016-07-01_16-25.jpg', '这是企业链接', 1, '计算机信息工程学院'),
(2, '这是企业名称2', '这是企业介绍2', '222', '2017-04-07 02:49:26', 'http://localhost/gongshang/upload/2017-04-07/14915322312016-07-01_16-25.jpg', '这是企业链接2', 1, '计算机信息工程学院2'),
(3, '这是企业名称2', '这是企业介绍2', '222', '2017-04-07 02:49:26', 'http://localhost/gongshang/upload/2017-04-07/14915322312016-07-01_16-25.jpg', '这是企业链接2', 1, '计算机信息工程学院2');

-- --------------------------------------------------------

--
-- 表的结构 `gs_course`
--

CREATE TABLE IF NOT EXISTS `gs_course` (
  `coid` int(11) NOT NULL AUTO_INCREMENT COMMENT '课程id',
  `cposition` tinyint(8) NOT NULL DEFAULT '3' COMMENT '1 表示院级精品 2表示校级精品 3表示其他',
  `label` varchar(255) NOT NULL COMMENT '标签名称',
  `title` varchar(255) NOT NULL COMMENT '标题',
  `etitle` varchar(255) NOT NULL COMMENT '英文标题',
  `con` varchar(5000) NOT NULL COMMENT '内容',
  `ntime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '发布时间',
  `hits` int(11) NOT NULL DEFAULT '0' COMMENT '点击量',
  `radios` varchar(255) NOT NULL COMMENT '视频地址',
  `summary` varchar(300) NOT NULL COMMENT '摘要',
  `name` varchar(50) NOT NULL COMMENT '发布人',
  `teacher` varchar(255) NOT NULL COMMENT '主讲人',
  `tzhicheng` varchar(255) NOT NULL COMMENT '职称',
  `timgurl` varchar(255) NOT NULL COMMENT '主讲人照片',
  `cimgurl` varchar(255) NOT NULL COMMENT '课程照片',
  PRIMARY KEY (`coid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='精品课程' AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `gs_course`
--

INSERT INTO `gs_course` (`coid`, `cposition`, `label`, `title`, `etitle`, `con`, `ntime`, `hits`, `radios`, `summary`, `name`, `teacher`, `tzhicheng`, `timgurl`, `cimgurl`) VALUES
(1, 1, '阿斯顿', '啊实打实', 'aaa', '                                    请问请问\r\n        \r\n        \r\n        ', '2017-04-04 09:11:26', 24, '', '啊实打实""""""""""', '计算机信息工程学院', '老师', 'zhicheng', 'http://localhost/gongshangs/upload/2017-04-07/14915294742016-07-01_16-25.jpg', ''),
(2, 1, '', '课程课程', '', '                        课程课程课程课程课程课程课程课程课程课程\r\n        \r\n        ', '2017-04-06 01:38:15', 108, '', '课程课程', '计算机信息工程学院', '计算机信息工程学院', '', '', ''),
(3, 3, '', '课程课程222', '', '            课程课程222课程课程222课程课程222课程课程222\r\n        ', '2017-04-06 01:38:35', 84, '', '课程课程222', '计算机信息工程学院', '计算机信息工程学院', '', '', ''),
(4, 0, '', '', '', '        ', '2017-04-07 00:37:24', 6, '', '', '计算机信息工程学院', '', '', '', ''),
(5, 0, 'java', '课程111', '', '        ', '2017-04-07 01:12:30', 9, '', '课程111', '计算机信息工程学院', '', '', '', ''),
(6, 0, '', '课程', '', '        ', '2017-04-07 01:31:49', 7, '', '课程', '计算机信息工程学院', '计算机信息工程学院', '', 'http://localhost/gongshangs/upload/2017-04-07/14915287042016-07-01_16-25.jpg', 'http://localhost/gongshangs/upload/2017-04-07/14915287082017-01-24T10-28-31.707Z.png'),
(7, 1, '', '院级精品', '', '', '2017-04-07 06:22:33', 31, '', '院级精品', '计算机信息工程学院', '计算机信息工程学院', '', '', ''),
(8, 2, '', '校级精品课程', '', '校级精品课程校级精品课程校级精品课程校级精品课程校级精品课程校级精品课程校级精品课程校级精品课程', '2017-04-07 07:33:59', 37, '', '校级精品课程校级精品课程校级精品课程', '计算机信息工程学院', '计算机信息工程学院', '', 'http://localhost/gongshangs/upload/2017-04-07/14915504382016-07-01_16-25.jpg', '');

-- --------------------------------------------------------

--
-- 表的结构 `gs_course_good`
--

CREATE TABLE IF NOT EXISTS `gs_course_good` (
  `cgid` int(11) NOT NULL AUTO_INCREMENT,
  `mid` int(11) NOT NULL COMMENT '评论id',
  `uid` int(11) NOT NULL COMMENT '谁点赞的',
  PRIMARY KEY (`cgid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `gs_course_good`
--

INSERT INTO `gs_course_good` (`cgid`, `mid`, `uid`) VALUES
(3, 128, 6),
(4, 129, 6),
(5, 130, 6),
(6, 131, 6);

-- --------------------------------------------------------

--
-- 表的结构 `gs_course_msg`
--

CREATE TABLE IF NOT EXISTS `gs_course_msg` (
  `mid` int(11) NOT NULL AUTO_INCREMENT COMMENT '留言id',
  `mcon` varchar(1000) NOT NULL COMMENT '留言内容',
  `mtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '留言时间',
  `sid` int(11) NOT NULL COMMENT '被留言的文章id',
  `good` int(11) NOT NULL COMMENT '点攒数',
  `uid` int(11) NOT NULL COMMENT '留言者id',
  PRIMARY KEY (`mid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='课程留言' AUTO_INCREMENT=152 ;

--
-- 转存表中的数据 `gs_course_msg`
--

INSERT INTO `gs_course_msg` (`mid`, `mcon`, `mtime`, `sid`, `good`, `uid`) VALUES
(114, '李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四', '2017-04-11 06:18:27', 3, 0, 10),
(115, '李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四', '2017-04-11 06:18:31', 3, 0, 10),
(116, '李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四', '2017-04-11 06:18:33', 3, 0, 10),
(117, '李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四', '2017-04-11 06:18:49', 3, 0, 10),
(118, '李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四', '2017-04-11 06:18:51', 3, 0, 10),
(119, '李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四', '2017-04-11 06:18:54', 3, 0, 10),
(120, '李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四', '2017-04-11 06:18:57', 3, 0, 10),
(121, '李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四', '2017-04-11 06:19:06', 4, 0, 10),
(122, '李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四', '2017-04-11 06:19:08', 4, 0, 10),
(123, '李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四', '2017-04-11 06:19:12', 4, 0, 10),
(124, '李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四', '2017-04-11 06:19:14', 4, 0, 10),
(125, '李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四', '2017-04-11 06:19:27', 4, 0, 10),
(126, '李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四四李四', '2017-04-11 06:19:46', 3, 0, 10),
(127, 'fasfas', '2017-04-11 06:19:57', 3, 0, 10),
(128, 'dasdas', '2017-04-11 06:20:00', 3, 1, 10),
(129, 'asdasdas', '2017-04-11 06:20:02', 3, 1, 10),
(130, 'dasdasdasd', '2017-04-11 06:20:05', 3, 1, 10),
(131, 'dasdas', '2017-04-11 06:20:10', 3, 1, 10),
(132, 'dasdas', '2017-04-11 07:16:35', 2, 0, 6),
(133, 'qwq', '2017-04-11 07:18:50', 2, 0, 6),
(134, 'wqq', '2017-04-11 07:18:53', 2, 0, 6),
(135, 'wqw', '2017-04-11 07:18:56', 2, 0, 6),
(136, 'wqwq', '2017-04-11 07:18:59', 2, 0, 6),
(137, 'dasdasda', '2017-04-11 07:55:56', 3, 0, 6),
(138, 'dasdasda', '2017-04-11 07:55:58', 3, 0, 6),
(139, 'dasdasdasd', '2017-04-11 07:56:01', 3, 0, 6),
(140, 'dasdasdasdas', '2017-04-11 07:56:03', 3, 0, 6),
(141, 'dsadasdas', '2017-04-11 07:56:05', 3, 0, 6),
(142, 'dasdasdas', '2017-04-11 07:56:07', 3, 0, 6),
(143, 'dasdsadasdas', '2017-04-11 07:56:10', 3, 0, 6),
(144, 'dasdasdas', '2017-04-11 07:56:17', 3, 0, 6),
(145, 'dsadas', '2017-04-11 07:56:43', 3, 0, 6),
(146, 'dsadasdasdas', '2017-04-11 07:56:51', 3, 0, 6),
(147, 'dsadasdas', '2017-04-11 07:56:53', 3, 0, 6),
(148, 'dsadas', '2017-04-11 07:56:57', 3, 0, 6),
(149, 'dasdas', '2017-04-11 07:56:59', 3, 0, 6),
(150, 'dasdasdas', '2017-04-11 07:57:01', 3, 0, 6),
(151, 'dsadasdas', '2017-04-11 07:57:03', 3, 0, 6);

-- --------------------------------------------------------

--
-- 表的结构 `gs_info`
--

CREATE TABLE IF NOT EXISTS `gs_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `host` varchar(255) NOT NULL,
  `imgfile` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='存头像' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `gs_info`
--

INSERT INTO `gs_info` (`id`, `host`, `imgfile`) VALUES
(1, 'localhost', 'gongshang/static/upload');

-- --------------------------------------------------------

--
-- 表的结构 `gs_news`
--

CREATE TABLE IF NOT EXISTS `gs_news` (
  `nid` int(11) NOT NULL AUTO_INCREMENT COMMENT '新闻id',
  `nposition` tinyint(8) NOT NULL DEFAULT '3' COMMENT '1表示大赛获奖，2表示院部活动，3表示其他',
  `cid` int(11) NOT NULL COMMENT '分类id',
  `title` varchar(255) NOT NULL COMMENT '文章标题',
  `etitle` varchar(255) NOT NULL COMMENT '英文标题',
  `con` varchar(5000) NOT NULL COMMENT '内容',
  `ntime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '发布时间',
  `hits` int(11) NOT NULL COMMENT '点击量',
  `summary` varchar(300) NOT NULL COMMENT '摘要',
  `name` varchar(50) NOT NULL COMMENT '发布人',
  `nimgurl` varchar(255) NOT NULL COMMENT '新闻图片',
  PRIMARY KEY (`nid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='新闻表' AUTO_INCREMENT=13 ;

--
-- 转存表中的数据 `gs_news`
--

INSERT INTO `gs_news` (`nid`, `nposition`, `cid`, `title`, `etitle`, `con`, `ntime`, `hits`, `summary`, `name`, `nimgurl`) VALUES
(9, 3, 31, '内容44445555555', '', '内容4444444444内容4444444444内容4444444444内容4444444444内容4444444444内容4444444444内容4444444444内容4444444444', '2017-04-06 07:09:22', 294, '内容44445555555', '山西工商学院', 'http://localhost/gongshang/upload/2017-04-11/1491905081ASCII.jpg'),
(10, 2, 31, '内容4422', '', '内容4444444444内容4444444444内容4444444444内容4444444444内容4444444444内容4444444444内容4444444444内容4444444444内容4444444444', '2017-04-06 07:09:29', 244, '内容4422', '山西工商学院', 'http://localhost/gongshang/upload/2017-04-07/14915477672016-07-01_16-25.jpg'),
(11, 1, 36, '这是大赛获奖', '', '内容<span style="font-size:12.8px;">内容</span><span style="font-size:12.8px;">内容</span><span style="font-size:12.8px;">内容</span><span style="font-size:12.8px;">内容</span><span style="font-size:12.8px;">内容</span><span style="font-size:12.8px;">内容</span><span style="font-size:12.8px;">内容</span><span style="font-size:12.8px;">内容</span><span style="font-size:12.8px;">内容</span><span style="font-size:12.8px;">内容</span><span style="font-size:12.8px;">内容</span><span style="font-size:12.8px;">内容</span><span style="font-size:12.8px;">内容</span><span style="font-size:12.8px;">内容</span><span style="font-size:12.8px;">内容</span><span style="font-size:12.8px;">内容</span>内容<span style="font-size:12.8px;">内容</span>', '2017-04-07 06:47:29', 15, '这是摘要', '山西工商学院', 'http://localhost/gongshang/upload/2017-04-07/14915476312016-07-01_16-25.jpg'),
(12, 1, 31, '这是欣慰222', '', '这是欣慰222', '2017-04-07 06:48:06', 224, '这是欣慰222这是欣慰222这是欣慰222这是欣慰222', '山西工商学院', '');

-- --------------------------------------------------------

--
-- 表的结构 `gs_news_good`
--

CREATE TABLE IF NOT EXISTS `gs_news_good` (
  `gid` int(11) NOT NULL AUTO_INCREMENT COMMENT '点赞id',
  `uid` int(11) NOT NULL COMMENT '点赞者的id',
  `mid` int(11) NOT NULL COMMENT '被点赞的留言id',
  PRIMARY KEY (`gid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=105 ;

--
-- 转存表中的数据 `gs_news_good`
--

INSERT INTO `gs_news_good` (`gid`, `uid`, `mid`) VALUES
(89, 1, 120),
(90, 3, 122),
(91, 3, 121),
(92, 3, 120),
(93, 1, 123),
(94, 1, 1),
(95, 6, 7),
(96, 6, 4),
(97, 7, 3),
(98, 7, 1),
(99, 6, 15),
(100, 6, 16),
(101, 6, 17),
(102, 6, 11),
(103, 6, 9),
(104, 6, 12);

-- --------------------------------------------------------

--
-- 表的结构 `gs_news_msg`
--

CREATE TABLE IF NOT EXISTS `gs_news_msg` (
  `mid` int(11) NOT NULL AUTO_INCREMENT COMMENT '留言id',
  `mcon` varchar(1000) NOT NULL COMMENT '留言内容',
  `mtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '留言时间',
  `sid` int(11) NOT NULL COMMENT '被留言的文章id',
  `good` int(11) NOT NULL COMMENT '点攒数',
  `uid` int(11) NOT NULL COMMENT '留言者id',
  PRIMARY KEY (`mid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='新闻留言' AUTO_INCREMENT=67 ;

--
-- 转存表中的数据 `gs_news_msg`
--

INSERT INTO `gs_news_msg` (`mid`, `mcon`, `mtime`, `sid`, `good`, `uid`) VALUES
(1, 'qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq', '2017-04-07 09:54:53', 6, 2, 6),
(3, '小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰小杰', '2017-04-07 09:56:06', 6, 1, 6),
(4, 'sadasdasda', '2017-04-07 11:13:42', 6, 1, 7),
(5, 'fasfasfasfasas', '2017-04-07 11:15:55', 9, 0, 7),
(6, 'safasfasf', '2017-04-07 11:16:01', 9, 0, 7),
(7, '啊啊大男大女上快速男的女的看见你看得见斯诺克', '2017-04-08 00:49:47', 6, 1, 9),
(8, 'good', '2017-04-08 02:47:52', 3, 0, 12),
(9, 'haole', '2017-04-08 03:05:30', 6, 1, 9),
(12, 'ppppppppppppppppppppppppppppp', '2017-04-11 01:24:04', 6, 1, 7),
(13, 'asdasdasdsadsa', '2017-04-11 01:25:55', 6, 0, 7),
(14, 'ssssssssssssssssssssssssssssssssssssss', '2017-04-11 01:26:27', 6, 0, 7),
(15, 'dsadasdsadas', '2017-04-11 01:27:23', 6, 1, 7),
(16, 'ddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', '2017-04-11 01:29:19', 6, 1, 7),
(17, 'wqeqwewqeqweqwewqeq', '2017-04-11 01:46:12', 6, 1, 7),
(18, 'ewqeqweqw', '2017-04-11 01:46:19', 6, 0, 7),
(19, 'ewqeqweqw', '2017-04-11 01:46:22', 6, 0, 7),
(20, 'good good study ,day day up', '2017-04-11 02:55:40', 6, 0, 6),
(21, 'asddas', '2017-04-11 03:19:30', 6, 0, 6),
(22, 'sadsadas', '2017-04-11 03:24:14', 6, 0, 6),
(23, 'aaaaaaaaaaaaaaaaaaaaaaa', '2017-04-11 03:33:52', 6, 0, 7),
(24, 'qqqqqqqqqqqqqqqqq', '2017-04-11 03:34:09', 6, 0, 7),
(25, 'ssssssssssssssssssssssssssssssssssss', '2017-04-11 05:12:52', 6, 0, 7),
(26, 'dsadas', '2017-04-11 05:13:12', 6, 0, 7),
(27, 'dasdasdasdas', '2017-04-11 05:14:41', 7, 0, 7),
(28, 'zhangyuhui', '2017-04-11 05:18:34', 6, 0, 6),
(29, '111111111111111111', '2017-04-11 05:19:06', 8, 0, 6),
(30, 'xiao', '2017-04-11 05:21:56', 6, 0, 8),
(31, 'dsadasda', '2017-04-11 05:23:28', 8, 0, 8),
(32, 'fdfs', '2017-04-11 05:24:31', 6, 0, 8),
(33, 'fdfsdsddddddddddddddddd', '2017-04-11 05:24:39', 6, 0, 8),
(34, 'qwewq', '2017-04-11 05:25:12', 8, 0, 8),
(35, 'dddddddddddddddddddddddddddddddddddddddd', '2017-04-11 05:25:35', 8, 0, 8),
(36, 'sssssssssssssssssssssssssssss', '2017-04-11 05:25:56', 8, 0, 8),
(37, 'zzzzzzzzzzzzz', '2017-04-11 05:26:09', 8, 0, 8),
(38, 'ddddddddxxxxxx', '2017-04-11 05:27:31', 8, 0, 8),
(39, 'dddddddddddddddddddasdasdasdas', '2017-04-11 05:28:02', 8, 0, 8),
(41, 'ass', '2017-04-11 05:31:50', 7, 0, 10),
(42, 'wwwwwwwwwwwwwwww', '2017-04-11 05:48:22', 7, 0, 10),
(44, 'dsadasda', '2017-04-11 05:50:05', 7, 0, 10),
(45, 'dsadas', '2017-04-11 05:50:11', 7, 0, 10),
(47, 'qqqqqqqqqqqq', '2017-04-11 05:51:00', 12, 0, 10),
(48, '段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小', '2017-04-11 05:51:59', 12, 0, 10),
(49, 'dsadasdas', '2017-04-11 05:52:08', 12, 0, 10),
(50, 'sadasdas', '2017-04-11 07:04:15', 6, 0, 6),
(51, 'sdsadas', '2017-04-11 07:06:50', 6, 0, 6),
(52, 'sdas', '2017-04-11 07:09:21', 6, 0, 6),
(53, 'asd', '2017-04-11 07:09:32', 6, 0, 6),
(54, 'dd', '2017-04-11 07:39:06', 6, 0, 6),
(55, 'dasd', '2017-04-11 07:40:06', 6, 0, 6),
(56, 'dasdas', '2017-04-11 07:40:08', 6, 0, 6),
(57, 'dasdas', '2017-04-11 07:40:11', 6, 0, 6),
(58, 'dasdas', '2017-04-11 07:40:12', 6, 0, 6),
(59, 'dasdas', '2017-04-11 07:40:14', 6, 0, 6),
(60, '段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小', '2017-04-11 11:19:24', 12, 0, 10),
(61, '段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小', '2017-04-11 11:19:27', 12, 0, 10),
(62, '段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小', '2017-04-11 11:19:28', 12, 0, 10),
(63, '段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小', '2017-04-11 11:19:34', 12, 0, 10),
(64, '段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小', '2017-04-11 11:19:38', 12, 0, 10),
(65, '段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小姐段小', '2017-04-11 11:19:42', 12, 0, 10),
(66, 'qweqwqwewq', '2017-04-11 11:27:31', 12, 0, 10);

-- --------------------------------------------------------

--
-- 表的结构 `gs_notice`
--

CREATE TABLE IF NOT EXISTS `gs_notice` (
  `nid` int(11) NOT NULL AUTO_INCREMENT COMMENT '公告id',
  `ntitle` varchar(255) NOT NULL COMMENT '公告标题',
  `ncon` varchar(5000) NOT NULL COMMENT '公告内容',
  `ntime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '发表时间',
  `nsummary` varchar(255) NOT NULL COMMENT '摘要',
  `nfile` varchar(255) NOT NULL COMMENT '公告附件',
  `nname` varchar(50) NOT NULL COMMENT '发布人名称',
  PRIMARY KEY (`nid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='公告表' AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `gs_notice`
--

INSERT INTO `gs_notice` (`nid`, `ntitle`, `ncon`, `ntime`, `nsummary`, `nfile`, `nname`) VALUES
(2, '啊啊', '啊实打实', '2017-04-05 02:31:02', '啊实打实\r\n里', '', '啊实打实'),
(3, '公告公告222', '公告公告222公告公告222公告公告222公告公告222公告公告222公告公告222公告公告222公告公告222公告公告222公告公告222', '2017-04-06 01:39:31', '公告公告222', '', '山西工商学院'),
(4, '公告公告3333', '公告公告3333公告公告3333公告公告3333公告公告3333公告公告3333', '2017-04-06 01:39:42', '公告公告3333', '', '山西工商学院'),
(5, '公告公告3333公告公告3333', '公告公告3333公告公告3333公告公告3333公告公告3333公告公告3333公告公告3333', '2017-04-06 01:39:53', '公告公告3333公告公告3333', '', '山西工商学院'),
(6, '公告', '公告公告公告公告公告公告公告公告公告公告公告公告公告公告', '2017-04-06 07:05:12', '公告', '', '山西工商学院'),
(7, '公告222222222', '公告公告公告公告公告公告公告公告', '2017-04-06 07:05:21', '公告222222222', '', '山西工商学院'),
(8, '公告3333333333', '公告公告公告公告公告公告公告公告公告公告公告公告公告', '2017-04-06 07:05:29', '公告3333333333', '', '山西工商学院'),
(9, '公告555555555', '公告555555555公告555555555公告555555555公告555555555公告555555555公告555555555公告555555555公告555555555公告555555555公告555555555', '2017-04-06 07:05:38', '公告555555555', '', '山西工商学院');

-- --------------------------------------------------------

--
-- 表的结构 `gs_position`
--

CREATE TABLE IF NOT EXISTS `gs_position` (
  `posid` int(11) NOT NULL AUTO_INCREMENT COMMENT '推荐位id',
  `posname` varchar(50) NOT NULL COMMENT '推荐位名称',
  PRIMARY KEY (`posid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='推荐位表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `gs_user`
--

CREATE TABLE IF NOT EXISTS `gs_user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT COMMENT '用户id',
  `uname` varchar(50) NOT NULL COMMENT '帐号',
  `unickname` varchar(50) NOT NULL COMMENT '用户昵称',
  `upass` varchar(32) NOT NULL COMMENT '用户密码',
  `uimage` varchar(255) NOT NULL COMMENT '头像',
  `udate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '注册时间',
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='用户表' AUTO_INCREMENT=14 ;

--
-- 转存表中的数据 `gs_user`
--

INSERT INTO `gs_user` (`uid`, `uname`, `unickname`, `upass`, `uimage`, `udate`) VALUES
(6, 'zhangyuhui', '张宇辉', 'e10adc3949ba59abbe56e057f20f883e', 'http://localhost/gongshang/static/upload/17-04/1491879279taobao.png', '2017-04-07 09:19:01'),
(7, 'likai', '李凯', 'e10adc3949ba59abbe56e057f20f883e', 'http://localhost/gongshang/static/upload/17-04/1491887523ASCII.jpg', '2017-04-07 10:55:11'),
(8, 'duanxiaojie', '段晓杰', '827ccb0eea8a706c4c34a16891f84e7b', 'http://localhost/gongshang/static/upload/17-04/14915727463.jpg', '2017-04-07 13:07:13'),
(9, 'xiaojie', '晓杰', '827ccb0eea8a706c4c34a16891f84e7b', 'http://localhost/gongshang/static/upload/17-04/14915726801.png', '2017-04-07 13:40:11'),
(10, 'lisisi', '李四四', '827ccb0eea8a706c4c34a16891f84e7b', 'http://127.0.0.1/gongshang/static/index/images/touxiang.jpg', '2017-04-07 14:05:52'),
(11, 'xiaopang', '小胖', '827ccb0eea8a706c4c34a16891f84e7b', 'http://127.0.0.1/gongshang/static/index/images/touxiang.jpg', '2017-04-07 15:06:49'),
(12, 'zhangsan', '张三', 'e10adc3949ba59abbe56e057f20f883e', 'http://localhost/gongshang/static/upload/17-04/1491619661taobao.png', '2017-04-08 02:46:59'),
(13, 'xiaoxiao', '小辉辉', '827ccb0eea8a706c4c34a16891f84e7b', 'http://localhost/gongshang/static/index/images/touxiang.jpg', '2017-04-13 03:01:59');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
