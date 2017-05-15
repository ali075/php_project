-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2016 at 08:55 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `leisureguide`
--

-- --------------------------------------------------------

--
-- Table structure for table `catagory`
--

CREATE TABLE `catagory` (
  `id` int(11) NOT NULL,
  `cname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catagory`
--

INSERT INTO `catagory` (`id`, `cname`) VALUES
(1, 'Action'),
(2, 'Animation'),
(3, 'Drama'),
(4, 'Romance');

-- --------------------------------------------------------

--
-- Table structure for table `cinema`
--

CREATE TABLE `cinema` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `catagory_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `r_date` date NOT NULL,
  `ylink` varchar(500) NOT NULL,
  `imdb` text NOT NULL,
  `photoref` varchar(200) NOT NULL,
  `hid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cinema`
--

INSERT INTO `cinema` (`id`, `title`, `catagory_id`, `status`, `r_date`, `ylink`, `imdb`, `photoref`, `hid`) VALUES
(1, 'Star Wars', 1, 2, '2016-09-28', '<iframe width="560" height="315" src="https://www.youtube.com/embed/sGbxmsDFVnE" frameborder="0" allowfullscreen></iframe>', '<span class="imdbRatingPlugin" data-user="ur50794634" data-title="tt2820852" data-style="p3"><a href="http://www.imdb.com/title/tt2820852/?ref_=plg_rt_1"><img src="http://g-ecx.images-amazon.com/images/G/01/imdb/plugins/rating/images/imdb_37x18.png" alt=" Furious 7 (2015) on IMDb" /> </a></span><script>(function(d,s,id){var js,stags=d.getElementsByTagName(s)[0];if(d.getElementById(id)){return;}js=d.createElement(s);js.id=id;js.src="http://g-ec2.images-amazon.com/images/G/01/imdb/plugins/rating/js/rating.min.js";stags.parentNode.insertBefore(js,stags);})(document,''script'',''imdb-rating-api'');</script>', 'star-wars-force-awakens-official-poster.jpg', 1),
(2, 'Furious 8', 1, 2, '2016-10-20', '<iframe width="560" height="315" src="https://www.youtube.com/embed/gJ2sO1W-ZLI" frameborder="0" allowfullscreen></iframe>', '<span class="imdbRatingPlugin" data-user="ur50794634" data-title="tt2820852" data-style="p3"><a href="http://www.imdb.com/title/tt2820852/?ref_=plg_rt_1"><img src="http://g-ecx.images-amazon.com/images/G/01/imdb/plugins/rating/images/imdb_37x18.png" alt=" Furious 7 (2015) on IMDb" /> </a></span><script>(function(d,s,id){var js,stags=d.getElementsByTagName(s)[0];if(d.getElementById(id)){return;}js=d.createElement(s);js.id=id;js.src="http://g-ec2.images-amazon.com/images/G/01/imdb/plugins/rating/js/rating.min.js";stags.parentNode.insertBefore(js,stags);})(document,''script'',''imdb-rating-api'');</script>', 'furious-8-poster-full.jpg', 2),
(3, 'Finding Dory', 2, 2, '2016-08-18', '<iframe width="560" height="315" src="https://www.youtube.com/embed/3JNLwlcPBPI" frameborder="0" allowfullscreen></iframe>', '<span class="imdbRatingPlugin" data-user="ur50794634" data-title="tt2820852" data-style="p3"><a href="http://www.imdb.com/title/tt2820852/?ref_=plg_rt_1"><img src="http://g-ecx.images-amazon.com/images/G/01/imdb/plugins/rating/images/imdb_37x18.png" alt=" Furious 7 (2015) on IMDb" /> </a></span><script>(function(d,s,id){var js,stags=d.getElementsByTagName(s)[0];if(d.getElementById(id)){return;}js=d.createElement(s);js.id=id;js.src="http://g-ec2.images-amazon.com/images/G/01/imdb/plugins/rating/js/rating.min.js";stags.parentNode.insertBefore(js,stags);})(document,''script'',''imdb-rating-api'');</script>', 'Finding-Dory-France-International-Poster_Pixar-Post.jpg', 3),
(4, 'X-Men :Apocalypse ', 1, 2, '2016-08-18', '<iframe width="560" height="315" src="https://www.youtube.com/embed/Jer8XjMrUB4" frameborder="0" allowfullscreen></iframe>', '<span class="imdbRatingPlugin" data-user="ur50794634" data-title="tt2820852" data-style="p3"><a href="http://www.imdb.com/title/tt2820852/?ref_=plg_rt_1"><img src="http://g-ecx.images-amazon.com/images/G/01/imdb/plugins/rating/images/imdb_37x18.png" alt=" Furious 7 (2015) on IMDb" /> </a></span><script>(function(d,s,id){var js,stags=d.getElementsByTagName(s)[0];if(d.getElementById(id)){return;}js=d.createElement(s);js.id=id;js.src="http://g-ec2.images-amazon.com/images/G/01/imdb/plugins/rating/js/rating.min.js";stags.parentNode.insertBefore(js,stags);})(document,''script'',''imdb-rating-api'');</script>', '_1450048116.jpg', 4),
(5, 'Ice Cream', 4, 2, '2016-09-21', '<iframe width="560" height="315" src="https://www.youtube.com/embed/N8w_Zt718xA" frameborder="0" allowfullscreen></iframe>', '<span class="imdbRatingPlugin" data-user="ur50794634" data-title="tt2820852" data-style="p3"><a href="http://www.imdb.com/title/tt2820852/?ref_=plg_rt_1"><img src="http://g-ecx.images-amazon.com/images/G/01/imdb/plugins/rating/images/imdb_37x18.png" alt=" Furious 7 (2015) on IMDb" /> </a></span><script>(function(d,s,id){var js,stags=d.getElementsByTagName(s)[0];if(d.getElementById(id)){return;}js=d.createElement(s);js.id=id;js.src="http://g-ec2.images-amazon.com/images/G/01/imdb/plugins/rating/js/rating.min.js";stags.parentNode.insertBefore(js,stags);})(document,''script'',''imdb-rating-api'');</script>', '12991011_10207417483728829_8553940553600429964_n.jpg', 5),
(6, 'TMT 2', 1, 2, '2016-07-14', '<iframe width="560" height="315" src="https://www.youtube.com/embed/HeaugHGd1Kw" frameborder="0" allowfullscreen></iframe>', '<span class="imdbRatingPlugin" data-user="ur50794634" data-title="tt2820852" data-style="p3"><a href="http://www.imdb.com/title/tt2820852/?ref_=plg_rt_1"><img src="http://g-ecx.images-amazon.com/images/G/01/imdb/plugins/rating/images/imdb_37x18.png" alt=" Furious 7 (2015) on IMDb" /> </a></span><script>(function(d,s,id){var js,stags=d.getElementsByTagName(s)[0];if(d.getElementById(id)){return;}js=d.createElement(s);js.id=id;js.src="http://g-ec2.images-amazon.com/images/G/01/imdb/plugins/rating/js/rating.min.js";stags.parentNode.insertBefore(js,stags);})(document,''script'',''imdb-rating-api'');</script>', '10295201_335461629910940_86520950003392813_o.jpg', 6),
(7, 'Ice Age 5', 2, 2, '2016-07-14', '<iframe width="560" height="315" src="https://www.youtube.com/embed/tLE_zHc3oDE" frameborder="0" allowfullscreen></iframe>', '<span class="imdbRatingPlugin" data-user="ur50794634" data-title="tt2820852" data-style="p3"><a href="http://www.imdb.com/title/tt2820852/?ref_=plg_rt_1"><img src="http://g-ecx.images-amazon.com/images/G/01/imdb/plugins/rating/images/imdb_37x18.png" alt=" Furious 7 (2015) on IMDb" /> </a></span><script>(function(d,s,id){var js,stags=d.getElementsByTagName(s)[0];if(d.getElementById(id)){return;}js=d.createElement(s);js.id=id;js.src="http://g-ec2.images-amazon.com/images/G/01/imdb/plugins/rating/js/rating.min.js";stags.parentNode.insertBefore(js,stags);})(document,''script'',''imdb-rating-api'');</script>', 'Ice_Age_Collision_Course_poster.jpg', 7),
(8, 'Jungle Book', 3, 2, '2017-04-12', '<iframe width="560" height="315" src="https://www.youtube.com/embed/HcgJRQWxKnw" frameborder="0" allowfullscreen></iframe>', '<span class="imdbRatingPlugin" data-user="ur50794634" data-title="tt2820852" data-style="p3"><a href="http://www.imdb.com/title/tt2820852/?ref_=plg_rt_1"><img src="http://g-ecx.images-amazon.com/images/G/01/imdb/plugins/rating/images/imdb_37x18.png" alt=" Furious 7 (2015) on IMDb" /> </a></span><script>(function(d,s,id){var js,stags=d.getElementsByTagName(s)[0];if(d.getElementById(id)){return;}js=d.createElement(s);js.id=id;js.src="http://g-ec2.images-amazon.com/images/G/01/imdb/plugins/rating/js/rating.min.js";stags.parentNode.insertBefore(js,stags);})(document,''script'',''imdb-rating-api'');</script>', 'JB_Triptych_1-Sht_Center_Online_v4_lg.jpg', 8),
(9, 'Deadpool', 1, 2, '2017-03-11', '<iframe width="560" height="315" src="https://www.youtube.com/embed/ZIM1HydF9UA" frameborder="0" allowfullscreen></iframe>', '<span class="imdbRatingPlugin" data-user="ur50794634" data-title="tt2820852" data-style="p3"><a href="http://www.imdb.com/title/tt2820852/?ref_=plg_rt_1"><img src="http://g-ecx.images-amazon.com/images/G/01/imdb/plugins/rating/images/imdb_37x18.png" alt=" Furious 7 (2015) on IMDb" /> </a></span><script>(function(d,s,id){var js,stags=d.getElementsByTagName(s)[0];if(d.getElementById(id)){return;}js=d.createElement(s);js.id=id;js.src="http://g-ec2.images-amazon.com/images/G/01/imdb/plugins/rating/js/rating.min.js";stags.parentNode.insertBefore(js,stags);})(document,''script'',''imdb-rating-api'');</script>', 'deadpool-poster-8.jpg', 9),
(10, 'Captain America', 1, 2, '2017-03-15', '<iframe width="560" height="315" src="https://www.youtube.com/embed/dKrVegVI0Us" frameborder="0" allowfullscreen></iframe>', '<span class="imdbRatingPlugin" data-user="ur50794634" data-title="tt2820852" data-style="p3"><a href="http://www.imdb.com/title/tt2820852/?ref_=plg_rt_1"><img src="http://g-ecx.images-amazon.com/images/G/01/imdb/plugins/rating/images/imdb_37x18.png" alt=" Furious 7 (2015) on IMDb" /> </a></span><script>(function(d,s,id){var js,stags=d.getElementsByTagName(s)[0];if(d.getElementById(id)){return;}js=d.createElement(s);js.id=id;js.src="http://g-ec2.images-amazon.com/images/G/01/imdb/plugins/rating/js/rating.min.js";stags.parentNode.insertBefore(js,stags);})(document,''script'',''imdb-rating-api'');</script>', 'teamsvscivilwarposter.jpg', 10),
(11, 'NYSM 2', 1, 2, '2017-03-15', '<iframe width="560" height="315" src="https://www.youtube.com/embed/InqU8CLwbPg" frameborder="0" allowfullscreen></iframe>', '<span class="imdbRatingPlugin" data-user="ur50794634" data-title="tt2820852" data-style="p3"><a href="http://www.imdb.com/title/tt2820852/?ref_=plg_rt_1"><img src="http://g-ecx.images-amazon.com/images/G/01/imdb/plugins/rating/images/imdb_37x18.png" alt=" Furious 7 (2015) on IMDb" /> </a></span><script>(function(d,s,id){var js,stags=d.getElementsByTagName(s)[0];if(d.getElementById(id)){return;}js=d.createElement(s);js.id=id;js.src="http://g-ec2.images-amazon.com/images/G/01/imdb/plugins/rating/js/rating.min.js";stags.parentNode.insertBefore(js,stags);})(document,''script'',''imdb-rating-api'');</script>', 'now-you-see-me-2-poster-7.jpg', 11),
(12, 'Batman VS Superman', 1, 1, '2016-04-20', '<iframe width="560" height="315" src="https://www.youtube.com/embed/0WWzgGyAH6Y" frameborder="0" allowfullscreen></iframe>', '<span class="imdbRatingPlugin" data-user="ur50794634" data-title="tt2820852" data-style="p3"><a href="http://www.imdb.com/title/tt2820852/?ref_=plg_rt_1"><img src="http://g-ecx.images-amazon.com/images/G/01/imdb/plugins/rating/images/imdb_37x18.png" alt=" Furious 7 (2015) on IMDb" /> </a></span><script>(function(d,s,id){var js,stags=d.getElementsByTagName(s)[0];if(d.getElementById(id)){return;}js=d.createElement(s);js.id=id;js.src="http://g-ec2.images-amazon.com/images/G/01/imdb/plugins/rating/js/rating.min.js";stags.parentNode.insertBefore(js,stags);})(document,''script'',''imdb-rating-api'');</script>', 'batmanvsuperman.jpg', 12);

-- --------------------------------------------------------

--
-- Table structure for table `hallandcinema_id`
--

CREATE TABLE `hallandcinema_id` (
  `id` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `hid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hallandcinema_id`
--

INSERT INTO `hallandcinema_id` (`id`, `cid`, `hid`) VALUES
(1, 1, 1),
(2, 1, 2),
(5, 2, 1),
(6, 2, 2),
(7, 3, 2),
(8, 4, 1),
(9, 4, 2),
(10, 5, 1),
(11, 5, 2),
(12, 5, 3),
(13, 5, 4),
(14, 6, 1),
(15, 6, 2),
(16, 7, 1),
(17, 8, 1),
(18, 8, 2),
(19, 9, 1),
(20, 9, 2),
(21, 10, 1),
(22, 10, 2),
(23, 11, 1),
(24, 11, 2),
(25, 12, 1),
(26, 12, 2);

-- --------------------------------------------------------

--
-- Table structure for table `halls`
--

CREATE TABLE `halls` (
  `id` int(11) NOT NULL,
  `hname` varchar(200) NOT NULL,
  `tlink` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `halls`
--

INSERT INTO `halls` (`id`, `hname`, `tlink`) VALUES
(1, 'Star cineplex', 'http://cineplexbd.com/index.php?visit=buyticket/buytickets.online&a=1'),
(2, 'Blockbuster Cinema', 'http://www.blockbusterbd.com/index.php'),
(3, 'Balaka', ''),
(4, 'Shyamoli', '');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `details` varchar(400) NOT NULL,
  `date` date NOT NULL,
  `photoref` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `details`, `date`, `photoref`) VALUES
(1, 'Title', 'full details news kjfngjkre dgkjer lkjgtiow lkjghipoer', '2016-04-30', 'deadpool-poster-8.jpg'),
(2, 'title 2', 'sfhgyh sfhbwjihf sfjhgwf sjkfhu sjh w tg w wfg w gwtw dggege edgeg egertg etgew ete ergtewt etetertertertg eter', '2016-04-30', 'mim (265).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tv_category`
--

CREATE TABLE `tv_category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tv_category`
--

INSERT INTO `tv_category` (`id`, `category_name`) VALUES
(1, 'Telefilm'),
(2, 'natok'),
(3, 'cinema'),
(4, 'news'),
(5, 'short film'),
(6, 'magazine'),
(7, 'talk show');

-- --------------------------------------------------------

--
-- Table structure for table `tv_channel`
--

CREATE TABLE `tv_channel` (
  `id` int(11) NOT NULL,
  `channel_name` varchar(255) DEFAULT NULL,
  `channel_logo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tv_channel`
--

INSERT INTO `tv_channel` (`id`, `channel_name`, `channel_logo`) VALUES
(1, 'BTV', 'Bangladesh_Television_logo.jpg'),
(2, 'NTV', 'ntv-lgo.jpg'),
(3, 'ATN', 'atn.png'),
(4, 'ATN NEWS', 'ATN_News.gif'),
(5, 'ETV', '12.jpg'),
(6, 'Channel i', 'channel i.png'),
(7, 'Channel 9', 'channel 9.png');

-- --------------------------------------------------------

--
-- Table structure for table `tv_program`
--

CREATE TABLE `tv_program` (
  `Id` int(11) NOT NULL,
  `pid` int(11) DEFAULT NULL,
  `time` time DEFAULT NULL,
  `program_name` varchar(255) DEFAULT NULL,
  `channel_name_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `photo` varchar(255) DEFAULT 'default-book.jpg',
  `did` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tv_program`
--

INSERT INTO `tv_program` (`Id`, `pid`, `time`, `program_name`, `channel_name_id`, `category_id`, `photo`, `did`) VALUES
(1, 1, '08:00:00', 'ice age', 1, 3, 'Ice_Age_Collision_Course_poster.jpg', 1),
(2, 1, '09:00:00', 'ice-cream', 3, 5, '12991011_10207417483728829_8553940553600429964_n.jpg', 1),
(3, 2, '08:00:00', 'dead pool', 6, 3, 'deadpool-poster-8.jpg', 2),
(4, 1, '10:00:00', 'superman', 2, 3, 'batmanvsuperman.jpg', 3),
(5, 3, '09:00:00', 'x men', 5, 3, '_1450048116.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tv_program_date`
--

CREATE TABLE `tv_program_date` (
  `id` int(11) NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tv_program_date`
--

INSERT INTO `tv_program_date` (`id`, `date`) VALUES
(1, '2016-04-30'),
(2, '2016-05-01'),
(3, '2016-05-02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catagory`
--
ALTER TABLE `catagory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cinema`
--
ALTER TABLE `cinema`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hallandcinema_id`
--
ALTER TABLE `hallandcinema_id`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `halls`
--
ALTER TABLE `halls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tv_category`
--
ALTER TABLE `tv_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tv_channel`
--
ALTER TABLE `tv_channel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tv_program`
--
ALTER TABLE `tv_program`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tv_program_date`
--
ALTER TABLE `tv_program_date`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catagory`
--
ALTER TABLE `catagory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `cinema`
--
ALTER TABLE `cinema`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `hallandcinema_id`
--
ALTER TABLE `hallandcinema_id`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `halls`
--
ALTER TABLE `halls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tv_category`
--
ALTER TABLE `tv_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tv_channel`
--
ALTER TABLE `tv_channel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tv_program`
--
ALTER TABLE `tv_program`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tv_program_date`
--
ALTER TABLE `tv_program_date`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
