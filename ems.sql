-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2023 at 05:17 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ems`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(255) NOT NULL,
  `aname` varchar(255) NOT NULL,
  `alname` varchar(255) NOT NULL,
  `aemail` varchar(255) NOT NULL,
  `apswd` varchar(255) NOT NULL,
  `cpswd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `aname`, `alname`, `aemail`, `apswd`, `cpswd`) VALUES
(4, 'Muhammad Ahsan', 'Zulfiqar Ali', 'ahsanzulfiqar0302@gmail.com', '@Ahsan123', '@Ahsan123');

-- --------------------------------------------------------

--
-- Table structure for table `a_users`
--

CREATE TABLE `a_users` (
  `u_id` bigint(255) NOT NULL,
  `u_fname` varchar(255) NOT NULL,
  `u_lname` varchar(255) NOT NULL,
  `u_email` varchar(255) NOT NULL,
  `u_dob` varchar(255) NOT NULL,
  `u_gender` varchar(255) NOT NULL,
  `u_phone` varchar(255) NOT NULL,
  `u_city` varchar(255) NOT NULL,
  `u_exp` varchar(255) NOT NULL,
  `u_achieve` varchar(255) NOT NULL,
  `u_skill` varchar(255) NOT NULL,
  `u_partners` varchar(255) NOT NULL,
  `u_order_design` varchar(255) NOT NULL,
  `u_description` varchar(255) NOT NULL,
  `u_company` varchar(255) NOT NULL,
  `u_prefer_color` varchar(255) NOT NULL,
  `u_tools` varchar(255) NOT NULL,
  `u_written_content` varchar(255) NOT NULL,
  `u_designs_no` varchar(255) NOT NULL,
  `u_occasions` varchar(255) NOT NULL,
  `u_pswd` varchar(255) NOT NULL,
  `u_address` varchar(255) NOT NULL,
  `u_role` varchar(255) NOT NULL,
  `u_status` varchar(255) NOT NULL,
  `u_enrolled_by` varchar(255) NOT NULL,
  `u_enrolled_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `a_users`
--

INSERT INTO `a_users` (`u_id`, `u_fname`, `u_lname`, `u_email`, `u_dob`, `u_gender`, `u_phone`, `u_city`, `u_exp`, `u_achieve`, `u_skill`, `u_partners`, `u_order_design`, `u_description`, `u_company`, `u_prefer_color`, `u_tools`, `u_written_content`, `u_designs_no`, `u_occasions`, `u_pswd`, `u_address`, `u_role`, `u_status`, `u_enrolled_by`, `u_enrolled_date`) VALUES
(55, 'Muhammad Ahsan', 'Zulfiqar Ali', 'ahsan@gmail.com', '2001-03-05', 'Male', '03027027954', 'Faisalabad', '3-5 Years', 'Birthday Party,Conferenced managed,wedding', 'Creativity,Problem solving,Time Management', 'Event Planning ,Wedding Planning ,Conference Planning ', '', '', '', '', '', '', '', '', '@Ahsan7954', 'Samanabad,Faisalabad', 'Planner', 'Pending', '', ''),
(56, 'Faizan Tanveer', 'Tanveer Ali', 'faizan123@gmail.com', '1998-12-27', 'Male', '03009876543', 'Multan', '0-1 Years', 'Birthday Party,Conferenced managed,wedding', 'Creativity,Problem solving,Time Management', 'Event Planning,Event Timeline,Conference Planning,Wedding Planning', '', '', '', '', '', '', '', '', '@Faizan123', 'Dhali gat,Multan.', 'Planner', 'Pending', '', ''),
(57, 'Maryam', 'Hassan', 'maryam@gmail.com', '2003-02-28', 'Female', '03123456876', 'Lahore', '1-2 Years', 'Birthday Party,Conferenced managed,wedding', 'Creativity,Problem solving,Time Management', 'Event Planning,Event Timeline,Conference Planning,Wedding Planning', '', '', '', '', '', '', '', '', '@Maryam123', 'four season,lahore', 'Planner', 'Confirmed', '', ''),
(58, 'Abubakar Ali', 'Ejaz Ahmad', 'abubakar@gmail.com', '1995-10-30', 'Male', '03198767987', 'faisalabad', 'More than 5 Years', 'Birthday Party,Conferenced managed,wedding', 'Creativity,Problem solving,Time Management', 'Event Planning,Event Timeline,Conference Planning,Wedding Planning', '', '', '', '', '', '', '', '', '@Abubakar123', 'jhang road,faisalabad.', 'Planner', 'Confirmed', '', ''),
(59, 'Umair Zafar', 'Zafar Iqbal', 'umair@gmail.com', '2002-06-30', 'Male', '03019812432', 'Faisalabad', '1-2 Years', 'Birthday Party,Conferenced managed,wedding', 'Creativity,Problem solving,Time Management', 'Event Planning,Event Timeline,Conference Planning,Wedding Planning', '', '', '', '', '', '', '', '', '@Umair123', 'jawalanager,faisalabad', 'Planner', 'Pending', '', ''),
(60, 'Esha', 'Rashid Ali', 'esha@gmail.com', '2005-01-30', 'Female', '03029834854', 'Faisalabad', '0-1 Years', 'Birthday Party,Conferenced managed,wedding', 'Creativity,Problem solving,Time Management', 'Event Planning,Event Timeline,Conference Planning,Wedding Planning', '', '', '', '', '', '', '', '', '@Esha123', 'canal road,faisalabad', 'Planner', 'Confirmed', '', ''),
(61, 'Junaid Ali', 'Hammed Ali', 'junaid@gmail.com', '1997-08-08', 'Male', '03016171771', 'Faisalabad', 'More than 5 Years', 'Birthday Party,Conferenced managed,wedding', 'Creativity,Problem solving,Time Management', 'Event Planning,Event Timeline,Conference Planning,Wedding Planning', '', '', '', '', '', '', '', '', '@Junaid123', 'nazamabd,faisalabad', 'Planner', 'Pending', '', ''),
(62, 'Muhammad Ali', 'Tahir Hassan', 'ali@gmail.com', '1991-10-30', 'Male', '03457634654', 'Faisalabad', '3-5 Years', 'Birthday Party,Conferenced managed,wedding', 'Creativity,Problem solving,Time Management', 'Event Planning,Event Timeline,Conference Planning,Wedding Planning', '', '', '', '', '', '', '', '', '@Ali123', 'samanabad,faisalabad', 'Planner', 'Pending', '', ''),
(63, 'Muhammad Umar', 'Khalid Ali', 'umar@gmail.com', '2003-06-30', 'Male', '03203263699', 'Faisalabad', '1-2 Years', 'Birthday Party,Conferenced managed,wedding', 'Creativity,Problem solving,Time Management', 'Event Planning,Event Timeline,Conference Planning,Wedding Planning', '', '', '', '', '', '', '', '', '@Umar123', 'satara colony,faisalabad', 'Planner', 'Pending', '', ''),
(64, 'Muhammad Ibrahim', 'Waheed Ahmad', 'ibrahim@gmail.com', '2004-11-30', 'Male', '03118768745', 'Faisalabad', '0-1 Years', 'Birthday Party,Conferenced managed,wedding', 'Creativity,Problem solving,Time Management', 'Event Planning,Event Timeline,Conference Planning,Wedding Planning', '', '', '', '', '', '', '', '', '@Ibrahim123', 'islam nager,faisalabad', 'Planner', 'Pending', '', ''),
(65, 'Ahsan Ejaz', 'Ejaz Ahmad', 'ahsanejaz@gmail.com', '1999-05-31', 'Male', '03028842274', 'Faisalabad', '3-5 Years', '', '', '', 'Branding Design', 'Branding design is the process of creating a visual identity that represents a company, product, service, or event. It involves crafting a consistent and recognizable image that communicates the essence, values, and uniqueness of the entity it represents.', 'Complex creative', '#121212', 'Adobe Photoshop,Adobe Illustrator,Canva', 'Logo Design', '10', '', '@Ahsan123', 'gulastan colony, faisalabad', 'Designer', 'Pending', '', ''),
(66, 'Muhamamad Asad', 'Zulfiqar Ali', 'asad@gmail.com', '2002-06-30', 'Male', '03110172818', 'Faisalabad', '0-1 Years', '', '', '', 'Business Design', 'Our design extends beyond screens and paper. We specialize in creating immersive environmental graphics that transform physical spaces. From office interiors to event displays, our designs leave a strong impression on anyone who walks through your doors.', 'Domani Studios', '#1597a8', 'Adobe Photoshop,Adobe Illustrator,Canva', 'Environmental Graphics', '20', '', '@Asad123', 'samanabad,faisalabad', 'Designer', 'Pending', '', ''),
(67, 'Haider Ali', 'Muhammad Ali', 'haider@gmail.com', '2001-02-01', 'Male', '03456754321', 'Lahore', '3-5 Years', '', '', '', 'Products Design', 'Designed with your comfort in mind, the LuminaDesk Lamp features an adjustable arm and head, allowing you to direct light precisely where you need it. Its sturdy base ensures stability while the sleek design saves valuable desk space', 'Graphic Design', '#0dc910', 'Adobe Photoshop,Adobe Illustrator,Canva', 'Premium Quality Materials', '20', '', '@Ali123', 'gulfishan colony,lahore', 'Designer', 'Pending', '', ''),
(68, 'Fatima ', 'Hassan Ali', 'fatima@gmail.com', '2005-01-31', 'Female', '03238798654', 'Faisalabad', '0-1 Years', '', '', '', 'Animation Design', 'This animation design unfolds as a narrative journey, beginning with the origins of ancient civilizations and progressing through key historical events. Viewers will be immersed in the stories of remarkable individuals, monumental achievements, and the ev', 'Graphic Lab ', '#2e33dc', 'Adobe Photoshop,Adobe Illustrator,Canva', 'Dynamic Visuals', '5', '', '@Fatima123', 'sagal city,faisalabad', 'Designer', 'Confirmed', '', ''),
(69, 'Faiq Hassan', 'Sarfaraz Ahmad', 'faiq@gmail.com', '2006-07-31', 'Male', '03298767543', 'Faisalabad', '0-1 Years', '', '', '', 'Environmental Design', 'This project envisions a multi-functional park that serves as an educational hub, a recreational haven, and an inspiring model for environmental stewardship', 'Designocracy', '#000000', 'Adobe Photoshop,Adobe Illustrator,Canva', 'Educational Interpretive Zones', '4', '', '@Faiq123', 'canal road,faisalabad', 'Designer', 'Confirmed', '', ''),
(70, 'Arslan Freed', 'Zulfiqar Ali', 'arslan@gmail.com', '1997-06-30', 'Male', '03478768754', 'Faisalabad', 'More than 5 Years', '', '', '', 'Publishing Design', 'The layout ensures a harmonious flow of text and images, guiding readers through the narrative. Typography choices enhance the reading experience, with fonts that evoke the mood of each story.', 'Lure design', '#e73313', 'Adobe Photoshop,Adobe Illustrator,Canva', 'Layout and Typography', '50', '', '@Aslan123', 'jhang road, faisalabad', 'Designer', 'Pending', '', ''),
(71, 'Minahil', 'Waheed Ali', 'minahil@gmail.com', '2002-10-31', 'Female', '03286754342', 'Faisalabad', '1-2 Years', '', '', '', 'Print Design', 'A soft color palette of pastel shades sets the tone for the event, exuding a sense of grace and joy. The use of high-quality paper enhances the tactile experience, offering recipients a glimpse of the elegance to come.', 'Four Fin creative', '#b311ee', 'Adobe Photoshop,Adobe Illustrator,Canva', 'Invitation Design', '12', '', '@Minahil123', 'nisar colony,faisalabad ', 'Designer', 'Confirmed', '', ''),
(72, 'Muhammad Mohsin', 'Waheed Ahmad', 'mohsin@gmail.com', '2000-05-04', 'Male', '03427655435', 'Faisalabad', '1-2 Years', 'Conference Hosted,Event Hosted', 'Creativity,Problem solving,Time Management', '', '', '', '', '', '', '', '', 'Birthday Party,Conference,wedding', '@Mohsin123', 'islannager,faisalabad', 'Volunteer', 'Pending', '', ''),
(73, 'Abduallha', 'Naveed Ahmad', 'abduallha@gmail.com', '1999-12-31', 'Male', '03123212987', 'Faisalabad', '3-5 Years', 'Conference Hosted,Event Hosted', 'Creativity,Problem solving,Time Management', '', '', '', '', '', '', '', '', 'Birthday Party,Conference,wedding', '@Abd123', 'near iqbal stadium, faisalabad', 'Volunteer', 'Confirmed', '', ''),
(74, 'Zeeshan Ali', 'Zulfiqar Ali', 'zeeshan@gmail.com', '2003-11-30', 'Male', '03029987678', 'Faisalabad', '1-2 Years', 'Conference Hosted,Event Hosted', 'Creativity,Problem solving,Time Management', '', '', '', '', '', '', '', '', 'Birthday Party,Conference,wedding', '@Zeeeshan123', 'samanabad,faisalabad', 'Volunteer', 'Pending', '', ''),
(75, 'Muhammad Zain', 'Yaqoob Ali', 'zain@gmail.com', '1993-06-30', 'Male', '03287654678', 'Faisalabad', 'More than 5 Years', 'Conference Hosted,Event Hosted', 'Creativity,Problem solving,Time Management', '', '', '', '', '', '', '', '', 'Birthday Party,Conference,wedding', '@Zain123', 'milat road, faisalabad', 'Volunteer', 'Confirmed', '', ''),
(76, 'Mubeen', 'Khalid ', 'mubeen@gmail.com', '2002-02-26', 'Male', '03109878092', 'Faisalabad', '3-5 Years', 'Conference Hosted,Event Hosted', 'Creativity,Problem solving,Time Management', '', '', '', '', '', '', '', '', 'Birthday Party,Conference,wedding', '@Mubeen123', 'depty wala interchange,faisalabad', 'Volunteer', 'Pending', '', ''),
(77, 'Junaid Hassan', 'Hassan Ali', 'junaid@gmail.com', '2001-01-31', 'Male', '03465876452', 'Faisalabad', '0-1 Years', 'Conference Hosted,Event Hosted', 'Creativity,Problem solving,Time Management', '', '', '', '', '', '', '', '', 'Birthday Party,Conference,wedding', '@Juniad123', 'jhang road, faisalabad', 'Volunteer', 'Pending', '', ''),
(78, 'Mhuammad Bilal', 'Qasair ALi ', 'bilal@gmail.com', '2004-08-31', 'Male', '03046754234', 'Faisalabad', '1-2 Years', 'Conference Hosted,Event Hosted', 'Creativity,Problem solving,Time Management', '', '', '', '', '', '', '', '', 'Birthday Party,Conference,wedding', '@Bilal123', 'mahala nazmabad,faisalabad', 'Volunteer', 'Pending', '', ''),
(79, 'Abrar Ahmad', 'Muhammad Ahmad', 'abrar@gmail.com', '2004-10-19', 'Male', '03049988998', 'Faisalabad', '0-1 Years', 'Conference Hosted,Event Hosted', 'Creativity,Problem solving,Time Management', '', '', '', '', '', '', '', '', 'Birthday Party,Conference,wedding', '@Abrar123', 'akbar choke,satyana road,faisalabad', 'Volunteer', 'Pending', '', ''),
(80, 'Muhammad Faheem', 'Muhammad Ashraf', 'faheem@gmail.com', '1999-09-30', 'Male', '03029933321', 'Faisalabad', '3-5 Years', 'Conference Hosted,Event Hosted', 'Creativity,Problem solving,Time Management', '', '', '', '', '', '', '', '', 'Birthday Party,Conference,wedding', '@Faheem123', 'madina town, faisalabad', 'Volunteer', 'Confirmed', '', ''),
(81, 'Muhammad Umar', 'Waleed Ali', 'umar@gmail.com', '1998-01-31', 'Male', '03029838456', 'Faisalabad', '0-1 Years', 'Conference Hosted,Event Hosted', 'Creativity,Problem solving,Time Management', '', '', '', '', '', '', '', '', 'Birthday Party,Conference,wedding', '@umar123', 'khalidbad,faisalabad', 'Volunteer', 'Confirmed', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `b_id` bigint(255) NOT NULL,
  `b_cate` varchar(255) NOT NULL,
  `b_client_name` varchar(255) NOT NULL,
  `b_client_email` varchar(255) NOT NULL,
  `b_client_phone` varchar(255) NOT NULL,
  `b_occasion_title` varchar(255) NOT NULL,
  `b_occasion_sdate` varchar(255) NOT NULL,
  `b_occasion_stime` varchar(255) NOT NULL,
  `b_occasion_edate` varchar(255) NOT NULL,
  `b_occasion_etime` varchar(255) NOT NULL,
  `b_seats` varchar(255) NOT NULL,
  `b_vanue_host` varchar(255) NOT NULL,
  `b_vanue_city` varchar(255) NOT NULL,
  `b_descrip` varchar(255) NOT NULL,
  `b_type` varchar(255) NOT NULL,
  `b_date` varchar(255) NOT NULL,
  `b_invoice` varchar(255) NOT NULL,
  `b_booked_by` varchar(255) NOT NULL,
  `b_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`b_id`, `b_cate`, `b_client_name`, `b_client_email`, `b_client_phone`, `b_occasion_title`, `b_occasion_sdate`, `b_occasion_stime`, `b_occasion_edate`, `b_occasion_etime`, `b_seats`, `b_vanue_host`, `b_vanue_city`, `b_descrip`, `b_type`, `b_date`, `b_invoice`, `b_booked_by`, `b_status`) VALUES
(13, '19', 'Ahsan', 'vexobem@mailinator.com', '+1 (317) 607-5028', 'Non maxime in commod', '2022-10-12', '01:00 AM', '', '', '12', '7', 'Faisalbad', 'Qui ex ex labore nat', 'Public', '2023-07-18', '', 'Admin', 'Pending'),
(15, '18', 'Zeeshan', 'voxihoca@mailinator.com', '+1 (299) 508-6959', 'Error vero quam aliq', '1998-03-17', '01:00 AM', '', '', '42', '10', 'Faisalbad', 'Qui quia dolor quo s', 'Public', '2023-07-17', '', 'Admin', 'Pending'),
(18, '30', 'Muhammad Ahsan', 'ahsanzulfiqar0302@gmail.com', '03027027954', ' Corporate Networking Symposium', '2023-09-13', '08:00 PM', '', '', '50', '15', 'Faisalbad', 'Join us for an enriching day of strategic connections, innovative insights, and professional growth at Elevate: A Corporate Networking Symposium. This symposium is designed to provide a platform for executives, entrepreneurs, and professionals from divers', 'Private', '2023-08-31', '', 'Admin', 'Pending'),
(19, '31', 'Haider Ali', 'ali123@gmail.com', '03276672662', 'Barat ', '2023-09-26', '02:00 PM', '', '', '100', '20', 'Faisalbad', 'A journey of timeless tradition and enchanting celebrations at \"Elegance Unveiled: The Grand Barat Celebration.\" This extraordinary event is a culmination of cultural heritage, love, and joy.', 'Public', '2023-08-31', '', 'Admin', 'Pending'),
(20, '32', 'Noor Fatima', 'noor@gmail.com', '03008897762', 'Birthday party', '2023-09-10', '12:00 AM', '', '', '20', '17', 'Faisalbad', 'Step into a world of joy, laughter, and cherished memories as we come together to celebrate fatima journey through the years. Radiant Moments is a heartfelt tribute to a life well-lived and a future filled with promise', 'Private', '2023-08-31', '', 'Admin', 'Pending'),
(21, '33', 'Junaid Hassan', 'junaid@gmail.com', '03298876564', 'Forever United', '2023-07-25', '01:00 AM', '', '', '15', '16', 'Faisalbad', 'Join us in a heartfelt celebration as we commemorate years of enduring love, unwavering commitment, and countless cherished memories. Forever United is a testament to the journey we was shared,', 'Private', '2023-08-31', '', 'Admin', 'Confirmed'),
(22, '37', 'Umair Zafar', 'umair123@gmail.com', '03072289765', 'WepEax', '2023-08-27', '01:00 AM', '', '', '20', '15', 'Faisalbad', 'Welcome to an evening of triumphant celebration and meaningful connections at our  Business Jubilation party. This exclusive event is dedicated to honoring the milestones, partnerships, and collective achievements.', 'Private', '2023-08-31', '', 'Admin', 'Confirmed'),
(23, '38', 'Muhammad Ibrahim', 'ibrahim@gmail.com', '03126765478', 'Qawali Night', '2023-09-20', '10:00 PM', '', '', '100', '25', 'Faisalbad', ' A journey through diverse genres and styles, from classical compositions to modern hits, promising an enriching musical experience for all.', 'Public', '2023-08-31', '', 'Admin', 'Pending'),
(24, '32', 'Zain Ali', 'zain123@gmail.com', '03019876543', 'Birthday ', '2023-09-05', '10:30 PM', '', '', '30', '18', 'Faisalbad', 'a world of joy, laughter, and cherished memories as we come together to celebrate  journey through the years. Radiant Moments is a heartfelt tribute to a life well lived and a future filled with promise.', 'Private', '2023-08-31', '', 'Admin', 'Pending'),
(25, '33', 'Irtaza Naveed', 'irtaza@gmail.com', '03029982123', 'Forever United', '2023-09-09', '01:30 PM', '', '', '200', '25', 'Faisalbad', 'Join us in a heartfelt celebration as we commemorate years of enduring love, unwavering commitment, and countless cherished memories.  is a testament to the journey we are shared, the trials we overcome, and the beautiful moments that have defined our par', 'Public', '2023-08-31', '', 'Admin', 'Pending'),
(28, '35', 'Ciara Fuller', 'ahsanzulfiqar0302@gmail.com', '+1 (916) 789-4433', 'Corporate Networking Symposium', '1977-08-18', '12:19 AM', '', '', '46', '20', 'Faisalabad', 'Ut aspernatur ipsam ', 'Public', '2023-09-04', '', 'user', 'Pending'),
(29, '38', 'Arden Dixon', 'ahsanzulfiqar0302@gmail.com', '+1 (662) 388-3412', 'Corporate Networking ', '1984-05-12', '12:56 AM', '', '', '54', '28', 'Faisalabad', 'Voluptas do voluptas', 'Public', '2023-09-04', '', 'user', 'Pending'),
(30, '33', 'Haley Stone', 'xeqyligup@mailinator.com', '+1 (472) 765-7745', 'Repellendus Quod as', '1995-12-24', '09:59 PM', '', '', '48', '20', 'Faisalabad', 'Mollit labore molest', 'Private', '2023-09-04', '', 'user', 'Pending'),
(31, '30', 'Adrienne Galloway', 'mevusys@mailinator.com', '+1 (168) 881-7548', 'Nihil facilis veniam', '1983-04-26', '06:35 PM', '', '', '36', '18', 'Faisalabad', 'Rerum magna quam dol', 'Public', '2023-09-04', '', 'user', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cid` bigint(255) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `cdesc` varchar(255) NOT NULL,
  `cstatus` varchar(255) NOT NULL,
  `cdate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cid`, `cname`, `cdesc`, `cstatus`, `cdate`) VALUES
(30, 'Corporate Events', 'Corporate events are gatherings organized by businesses, companies, or organizations for specific purposes related to their operations, branding, or networking.', '', '2023-08-30'),
(31, 'Weddings', 'Weddings are special events that celebrate the union of two individuals in marriage. They are deeply personal occasions that involve cultural, emotional, and social significance.', '', '2023-08-30'),
(32, 'Birthday Parties', 'Birthday parties are fun and festive gatherings held to celebrate an individual\'s special day, marking the anniversary of their birth. These events bring friends and family together to commemorate the passage of another year.', '', '2023-08-30'),
(33, 'Anniversary Celebrations', 'Anniversary celebrations are events held to commemorate a specific milestone or date that holds significance to individuals, couples, or organizations', '', '2023-08-30'),
(34, 'Graduation Parties', 'Graduation parties are festive gatherings that celebrate the academic achievements of students who have successfully completed a level of education, such as high school, college, or university.', '', '2023-08-30'),
(35, 'Sporting Events', 'Sporting events are organized competitions where athletes or teams participate in various sports or games to showcase their skills and compete for victory.', '', '2023-09-04'),
(36, 'Business Luncheons or Dinners', 'Business luncheons or dinners are professional gatherings held within a corporate context to facilitate discussions, networking, and relationship-building among business professionals.', '', '2023-08-30'),
(37, 'Business Events', 'Business events encompass a range of gatherings organized within the professional world to achieve various objectives related to networking, knowledge exchange, promotion, and collaboration', '', '2023-08-30'),
(38, 'Music Concerts', 'Music concerts are live performances where artists or bands showcase their musical talents to an audience in a lively and engaging setting. Concerts provide a platform for artists to connect with fans and deliver their music in a dynamic and memorable way', '', '2023-08-30'),
(39, 'Cultural Festivals', 'Cultural festivals are festive events that celebrate the heritage, traditions, art, music, and customs of a particular culture or community. These festivals provide a platform for people to come together, learn about different cultures, and enjoy various ', '', '2023-08-30');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` bigint(255) NOT NULL,
  `contact_name` varchar(255) NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `contact_phone` varchar(255) NOT NULL,
  `contact_subject` varchar(255) NOT NULL,
  `contact_msg` varchar(255) NOT NULL,
  `contact_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `contact_name`, `contact_email`, `contact_phone`, `contact_subject`, `contact_msg`, `contact_date`) VALUES
(1, 'Talha Riaz', 'talhariazg786@gmail.com', '+1 (798) 375-4846', 'Labore quis ad totam', 'Voluptates odit qui ', '05-04-2023'),
(5, 'Ruth Watts', 'doxomesix@mailinator.com', '+1 (224) 678-2859', 'Consectetur et volu', 'Numquam officiis qua', '21-07-2023'),
(6, 'Muhammad Ahsan', 'ahsanzulfiqar0302@gmail.com', '03027027954', 'Wedding Events', 'Wedding Events', '21-07-2023');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `e_id` bigint(255) NOT NULL,
  `e_cate` bigint(255) NOT NULL,
  `e_name` varchar(255) NOT NULL,
  `e_sdate` varchar(255) NOT NULL,
  `e_edate` varchar(255) NOT NULL,
  `e_vanue` varchar(255) NOT NULL,
  `e_city` varchar(255) NOT NULL,
  `e_planner` varchar(255) NOT NULL,
  `e_pic` varchar(255) NOT NULL,
  `e_seats` varchar(255) NOT NULL,
  `e_descrip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`e_id`, `e_cate`, `e_name`, `e_sdate`, `e_edate`, `e_vanue`, `e_city`, `e_planner`, `e_pic`, `e_seats`, `e_descrip`) VALUES
(13, 30, 'Workshops And Training Sessions', '2023-08-09', '', '', '', '', '6060.jpg', '', 'Corporate events are gatherings organized by businesses, companies, or organizations for specific purposes related to their operations, branding, or networking.'),
(14, 30, 'Workshops ', '2023-08-26', '', '', '', '', '2368.jpeg', '', 'Corporate events are gatherings organized by businesses, companies, or organizations for specific purposes related to their operations, branding, or networking.'),
(15, 30, ' Training Sessions', '2023-08-06', '', '', '', '', '8512.jpeg', '', 'Corporate events are gatherings organized by businesses, companies, or organizations for specific purposes related to their operations, branding, or networking.'),
(16, 31, 'Barat Function', '2023-08-10', '', '', '', '', '3234.jpeg', '', 'Weddings are special events that celebrate the union of two individuals in marriage. They are deeply personal occasions that involve cultural, emotional, and social significance.'),
(17, 31, 'Mehandi Function', '2023-08-15', '', '', '', '', '3224.jpeg', '', 'Weddings are special events that celebrate the union of two individuals in marriage. They are deeply personal occasions that involve cultural, emotional, and social significance.'),
(18, 31, 'Walima Function', '2023-08-18', '', '', '', '', '7965.jpeg', '', 'Weddings are special events that celebrate the union of two individuals in marriage. They are deeply personal occasions that involve cultural, emotional, and social significance.'),
(19, 32, 'Birthday', '2023-08-21', '', '', '', '', '1673.jpeg', '', 'Birthday parties are fun and festive gatherings held to celebrate an individual\'s special day, marking the anniversary of their birth. These events bring friends and family together to commemorate the passage of another year.'),
(20, 32, 'Birthday Function', '2023-08-31', '', '', '', '', '2056.jpeg', '', 'Birthday parties are fun and festive gatherings held to celebrate an individual\'s special day, marking the anniversary of their birth. These events bring friends and family together to commemorate the passage of another year.'),
(21, 33, 'Anniversary', '2023-09-01', '', '', '', '', '4856.jpeg', '', 'Anniversary celebrations are events held to commemorate a specific milestone or date that holds significance to individuals, couples, or organizations'),
(22, 33, 'Anniversary Function', '2023-07-14', '', '', '', '', '5791.jpeg', '', 'Anniversary celebrations are events held to commemorate a specific milestone or date that holds significance to individuals, couples, or organizations'),
(23, 34, 'Graduation Parties For Last Year Students', '2023-08-19', '', '', '', '', '8063.jpeg', '', 'Graduation parties are festive gatherings that celebrate the academic achievements of students who have successfully completed a level of education, such as high school, college, or university.'),
(24, 34, 'Graduation Down Parties', '2023-08-09', '', '', '', '', '8554.jpeg', '', 'Graduation parties are festive gatherings that celebrate the academic achievements of students who have successfully completed a level of education, such as high school, college, or university.'),
(25, 34, 'Graduation Parties ', '2023-08-31', '', '', '', '', '6538.jpeg', '', 'Graduation parties are festive gatherings that celebrate the academic achievements of students who have successfully completed a level of education, such as high school, college, or university.'),
(26, 35, 'Sport Festival', '2023-08-06', '', '', '', '', '6613.jpeg', '', 'Sporting events are organized competitions where athletes or teams participate in various sports or games to showcase their skills and compete for victory.'),
(27, 35, 'Sport Festival For Child', '2023-08-14', '', '', '', '', '4278.jpeg', '', 'Sporting events are organized competitions where athletes or teams participate in various sports or games to showcase their skills and compete for victory.'),
(28, 35, 'Sport Festival For Child', '2023-08-14', '', '', '', '', '2640.jpeg', '', 'Sporting events are organized competitions where athletes or teams participate in various sports or games to showcase their skills and compete for victory.'),
(29, 35, 'Sport Festival For Child', '2023-08-14', '', '', '', '', '5073.jpeg', '', 'Sporting events are organized competitions where athletes or teams participate in various sports or games to showcase their skills and compete for victory.'),
(30, 36, 'Business Luncheons or Dinners', '2023-08-15', '', '', '', '', '5180.jpeg', '', 'Business luncheons or dinners are professional gatherings held within a corporate context to facilitate discussions, networking, and relationship building among business professionals.'),
(31, 36, 'Business Luncheon', '2023-08-09', '', '', '', '', '6724.jpeg', '', 'Business luncheons or dinners are professional gatherings held within a corporate context to facilitate discussions, networking, and relationship building among business professionals.'),
(32, 36, 'Business  Dinners', '2023-08-28', '', '', '', '', '2563.jpeg', '', 'Business luncheons or dinners are professional gatherings held within a corporate context to facilitate discussions, networking, and relationship building among business professionals.'),
(33, 37, 'Business Meetings', '2023-08-31', '', '', '', '', '8216.jpeg', '', 'Business events encompass a range of gatherings organized within the professional world to achieve various objectives related to networking, knowledge exchange, promotion, and collaboration'),
(34, 37, 'Business Workshops ', '2023-07-04', '', '', '', '', '6562.jpeg', '', 'Business events encompass a range of gatherings organized within the professional world to achieve various objectives related to networking, knowledge exchange, promotion, and collaboration'),
(35, 37, 'Business Dinners Training Programs                   ', '2023-08-31', '', '', '', '', '2856.jpeg', '', 'Business events encompass a range of gatherings organized within the professional world to achieve various objectives related to networking, knowledge exchange, promotion, and collaboration'),
(36, 38, 'Qawali Night Concerts', '2023-06-15', '', '', '', '', '8964.jpeg', '', 'Music concerts are live performances where artists or bands showcase their musical talents to an audience in a lively and engaging setting. Concerts provide a platform for artists to connect with fans and deliver their music in a dynamic and memorable way'),
(37, 38, 'Music Concert', '2023-08-20', '', '', '', '', '5115.jpeg', '', 'Music concerts are live performances where artists or bands showcase their musical talents to an audience in a lively and engaging setting. Concerts provide a platform for artists to connect with fans and deliver their music in a dynamic and memorable way'),
(38, 39, 'Folk Festival', '2023-08-11', '', '', '', '', '6873.jpeg', '', 'Cultural festivals are festive events that celebrate the heritage, traditions, art, music, and customs of a particular culture or community. These festivals provide a platform for people to come together, learn about different cultures, and enjoy various'),
(39, 39, 'Punjab Cultural Party', '2023-08-28', '', '', '', '', '1563.jpeg', '', 'Cultural festivals are festive events that celebrate the heritage, traditions, art, music, and customs of a particular culture or community. These festivals provide a platform for people to come together, learn about different cultures, and enjoy various');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `n_id` bigint(255) NOT NULL,
  `n_cate` bigint(255) NOT NULL,
  `n_title` varchar(255) NOT NULL,
  `n_pic` varchar(255) NOT NULL,
  `n_desc` varchar(255) NOT NULL,
  `n_date` varchar(255) NOT NULL,
  `n_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`n_id`, `n_cate`, `n_title`, `n_pic`, `n_desc`, `n_date`, `n_status`) VALUES
(1, 16, 'www', '739426.jpg', 'Hello World!\r\n', '2023-08-09', 'ON'),
(2, 30, 'Workshops and Training Sessions', '71925.jpeg', 'Corporate events are gatherings organized by businesses, companies, or organizations for specific purposes related to their operations, branding, or networking.', '2023-09-03', 'ON'),
(3, 39, 'Folk Festiva', '37844.jpeg', 'Cultural festivals are festive events that celebrate the heritage, traditions, art, music, and customs of a particular culture or community. These festivals provide a platform for people to come together, learn about different cultures, and enjoy various', '2023-09-03', 'ON'),
(4, 38, 'Qawali Night Concerts', '30378.jpeg', 'Music concerts are live performances where artists or bands showcase their musical talents to an audience in a lively and engaging setting. Concerts provide a platform for artists to connect with fans and deliver their music in a dynamic and memorable way', '2023-09-03', 'ON'),
(5, 37, 'Business Dinners', '86256.jpeg', 'Business events encompass a range of gatherings organized within the professional world to achieve various objectives related to networking, knowledge exchange, promotion, and collaboration', '2023-09-03', 'ON'),
(6, 36, 'Product Demonstrations', '44738.jpeg', 'Business luncheons or dinners are professional gatherings held within a corporate context to facilitate discussions, networking, and relationship-building among business professionals.', '2023-09-03', 'ON'),
(7, 35, 'Sport Festival', '51129.jpeg', 'Sporting events are organized competitions where athletes or teams participate in various sports or games to showcase their skills and compete for victory.', '2023-09-03', 'ON'),
(8, 34, ' Graduation Parties For Last year Students', '37433.jpeg', 'Graduation parties are festive gatherings that celebrate the academic achievements of students who have successfully completed a level of education, such as high school, college, or university.', '2023-09-03', 'ON'),
(9, 33, 'Anniversary ', '11746.jpeg', 'Anniversary celebrations are events held to commemorate a specific milestone or date that holds significance to individuals, couples, or organizations', '2023-09-03', 'ON'),
(10, 32, 'Birthday', '10580.jpeg', 'Birthday parties are fun and festive gatherings held to celebrate an individual\'s special day, marking the anniversary of their birth. These events bring friends and family together to commemorate the passage of another year.', '2023-09-03', 'ON'),
(11, 32, 'Birthday party', '40660.jpeg', 'Birthday parties are fun and festive gatherings held to celebrate an individual\'s special day, marking the anniversary of their birth. These events bring friends and family together to commemorate the passage of another year.', '2023-09-03', 'ON'),
(12, 31, 'Barat Function', '55418.jpeg', 'Weddings are special events that celebrate the union of two individuals in marriage. They are deeply personal occasions that involve cultural, emotional, and social significance.', '2023-09-03', 'ON'),
(13, 31, 'Ut aperiam nihil inc', '78151.jpg', 'Consequat Corporis ', '2023-09-04', 'ON');

-- --------------------------------------------------------

--
-- Table structure for table `vanue`
--

CREATE TABLE `vanue` (
  `v_id` bigint(255) NOT NULL,
  `v_name` varchar(255) NOT NULL,
  `v_price` varchar(255) NOT NULL,
  `v_desc` varchar(255) NOT NULL,
  `v_date` varchar(255) NOT NULL,
  `v_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vanue`
--

INSERT INTO `vanue` (`v_id`, `v_name`, `v_price`, `v_desc`, `v_date`, `v_status`) VALUES
(15, 'Grace Hotel and Restaurant', '', 'Qadimi Shehar, Circular Rd, Chiniot Bazar, Faisalabad', '2023-09-04', ''),
(16, 'Avari Xpress Hotel', '', '12C Jaranwala Rd, Kohinoor City Faisalabad', '2023-08-30', ''),
(17, 'Canal View Hotel', '', 'E Canal Rd, near PSO petrol station, Al Hamra Town, Faisalabad', '2023-08-30', ''),
(18, 'Royalton Hotel Faisalabad', '', 'P-1270 West Canal Road, Abdullahpur, Faisalabad', '2023-08-30', ''),
(19, 'New Madina Hotel', '', 'Satayana Rd, Usman Abad Block B People\'s Colony No 1, Faisalabad', '2023-08-30', ''),
(20, 'Royal Palm Marquee', '', 'West Canal Road, Opp.Honda Showroom, Faisalabad.', '2023-08-30', ''),
(21, 'Canal Palace Marquee', '', 'Canal road, faisalabad', '2023-08-30', ''),
(22, 'Victoria Marquee', '', 'Address: 16 W Canal Rd, Amin Town, Faisalabad', '2023-08-30', ''),
(23, 'Al Madinah Marquee', '', 'samanabad road, faisalabad', '2023-08-30', ''),
(24, 'Quilim Marquee', '', '137-C People Colony Faisalabad, Punjab, Pakistan', '2023-08-30', ''),
(25, 'Crown Palace Marquee', '', '204 Chak Bridge, West Canal Road, Faisalabad, Punjab, Pakistan', '2023-08-30', ''),
(26, 'The Sheraton Marquee', '', 'Sahianwala Expy, Muhammad Khan Town Mansoorabad, Faisalabad, Punjab', '2023-08-30', ''),
(27, 'Victoria Marquee Faisalabad', '', '16 W Canal Rd, Amin Town, Faisalabad, Punjab', '2023-08-30', ''),
(28, 'Paradise Marquee Faisalabad', '', 'Masjid Ismail Rd, Faisalabad, Punjab ', '2023-08-30', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `a_users`
--
ALTER TABLE `a_users`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`n_id`);

--
-- Indexes for table `vanue`
--
ALTER TABLE `vanue`
  ADD PRIMARY KEY (`v_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `a_users`
--
ALTER TABLE `a_users`
  MODIFY `u_id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `b_id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cid` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `e_id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `n_id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `vanue`
--
ALTER TABLE `vanue`
  MODIFY `v_id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
