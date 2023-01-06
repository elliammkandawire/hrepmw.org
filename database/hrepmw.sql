-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2023 at 02:33 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hrepmw`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `slug` varchar(200) NOT NULL,
  `shortname` varchar(200) NOT NULL,
  `fullname` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `location` text NOT NULL,
  `logo` varchar(200) NOT NULL,
  `mission` text NOT NULL,
  `motto` text NOT NULL,
  `vision` text NOT NULL,
  `background` text NOT NULL,
  `twitter` text NOT NULL,
  `facebook` text NOT NULL,
  `postal_address` text NOT NULL,
  `phone` text NOT NULL,
  `about_picture` text NOT NULL,
  `map_src` text NOT NULL,
  `instagram` text NOT NULL,
  `youtube` text NOT NULL,
  `goal` text NOT NULL,
  `preview_video` text NOT NULL,
  `short_aboutus` text NOT NULL,
  `home_about_picture` text NOT NULL,
  `logo_big` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`slug`, `shortname`, `fullname`, `email`, `location`, `logo`, `mission`, `motto`, `vision`, `background`, `twitter`, `facebook`, `postal_address`, `phone`, `about_picture`, `map_src`, `instagram`, `youtube`, `goal`, `preview_video`, `short_aboutus`, `home_about_picture`, `logo_big`) VALUES
('hrep', 'HREP', 'Health and Rights Education Programme', 'edirector@hrepmw.org', 'Blantyre, Malawi', 'http://127.0.0.1:8080/hrepmw.org/website/assets/images/loader.png', 'Our mission is promoting good health and equal rights for all through civic education, lobbying, advocacy, research and documentation. ', 'Good health and Health Rights for all', 'Our vision is to have A healthy society that is actively and effectively participating in the development of the country and the world.', 'Healthy and Rights Education Program(HREP) is a registered non profit making, non governmental organization that was formed in 2006.   Our mission is to provide good healthy and equal rights for all through civic education. lobbying, advocancy, research and documentation. <br>Healthy and Rights Education Program(HREP) is a registered non profit making, non governmental organization that was formed in 2006.   Our mission is to provide good healthy and equal rights for all through civic education. lobbying, advocancy, research and documentation. ', 'https://twitter.com/malawihrep', 'https://web.facebook.com/HREP-Malawi-943473982347414/?paipv=0&eav=AfbjyYrO89s17VDAFYDWOfcPRIom-WO_6iah4Y4mEKjqCc9zT9f36JDBvraGN1IjvUc&_rdc=1&_rdr', 'Health and Rights Education Programme \r\nP.O Box 30322\r\nChichiri,\r\nBlantyre 3.\r\nMalawi\r\n', '(+265) 999 951 274', 'http://127.0.0.1:8080/hrepmw.org/website/assets/images/backgrounds/slider_1.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30713.37395080002!2d35.007655423673825!3d-15.794895649247023!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x18d8459a8a02d1e3%3A0xfba7e71cc0820904!2sChichiri%2C%20Blantyre!5e0!3m2!1sen!2smw!4v1672919440377!5m2!1sen!2smw\" width=\"100%\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '', '', 'Overall goal is to consolidate health and human rights initiatives to empower citizens to participate actively and effectively in socioeconomic and cultural affairs in Malawi and the world by building a healthy society', 'https://www.youtube.com/watch?v=Get7rqXYrbQ', 'Healthy and Rights Education Program(HREP) is a registered non profit making, non governmental organization that was formed in 2006.   Our mission is to provide good healthy and equal rights for all through civic education. lobbying, advocancy, research and documentation.', 'http://127.0.0.1:8080/hrepmw.org/website/assets/images/resources/about_preview.jpg', 'http://127.0.0.1:8080/hrepmw.org/website/assets/images/resources/logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `downloads`
--

CREATE TABLE `downloads` (
  `slug` varchar(500) NOT NULL,
  `name` text NOT NULL,
  `url` text NOT NULL,
  `download_count` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `icon` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `downloads`
--

INSERT INTO `downloads` (`slug`, `name`, `url`, `download_count`, `date`, `status`, `icon`) VALUES
('bronchure', 'Health and Rights Education Programme Bronchure', 'http://127.0.0.1:8080/hrepmw.org/website/assets/doc/HREP%20HREP%20BROCHURE.pdf', 300, '2023-01-06 10:46:56', 1, 'fa fa-file-pdf-o'),
('our_profile', 'Health and Rights Education Programme Profile', 'http://127.0.0.1:8080/hrepmw.org/website/assets/doc/Health%20and%20Rights%20Education%20Programme%20info.docx', 200, '2023-01-06 10:44:13', 1, 'fa fa-file-word-o');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `slug` varchar(500) NOT NULL,
  `title` text NOT NULL,
  `date` date NOT NULL,
  `content` text NOT NULL,
  `time` time NOT NULL,
  `phone` varchar(20) NOT NULL,
  `location` text NOT NULL,
  `picture` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `place` text NOT NULL,
  `category` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`slug`, `title`, `date`, `content`, `time`, `phone`, `location`, `picture`, `status`, `place`, `category`) VALUES
('chagas-day', 'World Chagas Disease Day', '2023-04-14', 'Chagas disease, also known as \"silent or silenced disease\", affects mainly poor people without access to health care or people without a political voice. The disease progress slowly and often shows an asymptomatic clinical course. Without treatment, Chagas disease can lead to severe cardiac and digestive alterations and become fatal. Raising awareness of the disease is essential to improve the rates of early treatment and cure, together with the interruption of its transmission.\r\n\r\nThe World Chagas Disease Day was celebrated for the first time in 2020.', '00:00:00', '', '', 'http://127.0.0.1:8080/hrepmw.org/website/assets/images/events/changas.jpg', 1, '', ''),
('help', 'World Health Day', '2023-04-07', 'It is celebrated annually and each year draws attention to a specific health topic of concern to people all over the world.\r\n\r\nThe date of 7 April marks the anniversary of the founding of WHO in 1948.', '14:35:37', '0882784684', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd', 'http://127.0.0.1:8080/hrepmw.org/website/assets/images/events/world-healthy-day.jpg', 1, 'Mzuzu', 'Healthy'),
('immunization-week', 'World Immunisation Week', '2023-04-24', 'World Immunization Week, celebrated in the last week of April, aims to highlight the collective action needed and to promote the use of vaccines to protect people of all ages against disease.\r\n\r\nThrough its convening power, WHO works with countries across the globe to raise awareness of the value of vaccines and immunization and ensures that governments obtain the necessary guidance and technical support to implement high quality immunization programmes.\r\n\r\nThe ultimate goal of World Immunization Week is for more people – and their communities – to be protected from vaccine-preventable diseases.', '00:00:00', '', '', 'http://127.0.0.1:8080/hrepmw.org/website/assets/images/events/immunation.png', 1, '', ''),
('malaria', 'World Malaria Day', '2023-04-25', 'World Malaria Day is an occasion to highlight the need for continued investment and sustained political commitment for malaria prevention and control. It was instituted by WHO Member States during the World Health Assembly of 2007.', '00:00:00', '', '', 'http://127.0.0.1:8080/hrepmw.org/website/assets/images/events/malaria.jpg', 1, '', ''),
('play-for-the-world', 'World TB Days', '2023-03-24', 'Each year we commemorate World TB Day to raise public awareness about the devastating health, social and economic consequences of tuberculosis (TB) and to step up efforts to end the global TB epidemic.\r\n\r\nThe date marks the day in 1882 when Dr. Robert Koch announced that he had discovered the bacterium that causes TB, which opened the way towards diagnosing and curing this disease.', '14:35:37', '0996021167', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd', 'http://127.0.0.1:8080/hrepmw.org/website/assets/images/events/tb.png', 1, 'Lilongwe', 'TB'),
('World-AIDS-Day', 'World AIDS Day', '2023-12-01', 'World AIDS Day brings together people from around the world to raise awareness about HIV/AIDS and demonstrate international solidarity in the face of the pandemic.\r\n<br>\r\n\r\nThe day is an opportunity for public and private partners to spread awareness about the status of the pandemic and encourage progress in HIV/AIDS prevention, treatment and care around the world. It has become one of the most widely recognized international health days and a key opportunity to raise awareness, commemorate those who have died, and celebrate victories such as increased access to treatment and prevention services.', '00:00:00', '', '', 'http://127.0.0.1:8080/hrepmw.org/website/assets/images/events/bls20397-who-wad-2020-web-banner-003.tmb-1024v.jpg', 1, '', ''),
('World-Antimicrobial-Awareness-Week', 'World Antimicrobial Awareness Week', '2023-11-18', 'Antimicrobial resistance (AMR) occurs when bacteria, viruses, fungi and parasites change over time and no longer respond to medicines, making infections harder to treat and increasing the risk of disease spread, severe illness and death. As a result of drug resistance, antibiotics and other antimicrobial medicines become ineffective and infections become increasingly difficult or impossible to treat.\r\n<br>\r\n\r\nA global action plan to tackle the growing problem of resistance to antibiotics and other antimicrobial medicines was endorsed at the Sixty-eighth World Health Assembly in May 2015. One of the key objectives of the plan is to improve awareness and understanding of AMR through effective communication, education and training.\r\n\r\n<br>\r\nWorld Antimicrobial Awareness Week (WAAW) is a global campaign that is celebrated annually to improve awareness and understanding of AMR and encourage best practices among the public, One Health stakeholders and policymakers, who all play a critical role in reducing the further emergence and spread of AMR. ', '00:00:00', '', '', 'http://127.0.0.1:8080/hrepmw.org/website/assets/images/events/who_20210301_nga-383-min.tmb-1024v.jpg', 1, '', ''),
('World-Blood-Donor-Day', 'World Blood Donor Day', '2023-06-14', 'Every year countries around the world celebrate World Blood Donor Day (WBDD). The event serves to raise awareness of the need for safe blood and blood products and to thank voluntary, unpaid blood donors for their life-saving gifts of blood.\r\n<br>\r\nA blood service that gives patients access to safe blood and blood products in sufficient quantity is a key component of an effective health system. The global theme of World Blood Donor Day changes each year in recognition of the selfless individuals who donate their blood for people unknown to them.', '00:00:00', '', '', 'http://127.0.0.1:8080/hrepmw.org/website/assets/images/events/blood.jpg', 1, '', ''),
('World-Hepatitis-Day', 'World Hepatitis Day', '2023-07-28', 'World Hepatitis Day, 28 July, is an opportunity to step up national and international efforts on hepatitis, encourage actions and engagement by individuals, partners and the public and highlight the need for a greater global response as outlined in the WHO\'s Global hepatitis report of 2017.\r\n<br>\r\nThe date of 28 July was chosen because it is the birthday of Nobel-prize winning scientist Dr Baruch Blumberg, who discovered hepatitis B virus (HBV) and developed a diagnostic test and vaccine for the virus. \r\n<br>\r\nLow coverage of testing and treatment is the most important gap to be addressed in order to achieve the global elimination goals by 2030.', '00:00:00', '', '', 'http://127.0.0.1:8080/hrepmw.org/website/assets/images/events/hepati.jpg', 1, '', ''),
('world-negleted-tropical-diseases-day', 'world negleted tropical diseases day', '2023-01-30', 'On 31 May 2021, the World Health Assembly (WHA) recognized 30 January as World Neglected Tropical Disease (NTD) Day through decision WHA74(18).\r\n\r\nThis decision formalized 30 January as a day to create better awareness on the devastating impact of NTDs on the poorest populations around the world. The day is also an opportunity to call on everyone to support the growing momentum for the control, elimination and eradication of these diseases.\r\n\r\nGlobal NTD partners had marked the celebration in January 2021 by organizing various virtual events and also by lighting up landmark monuments and buildings.\r\n\r\nFollowing last year’s WHA decision, WHO joins the NTD community in adding its voice to the global call.\r\n\r\n30 January commemorates several events, such as the launch of the first NTD road map in 2012; the London Declaration on NTDs; and the launch, in January 2021, of the current road map.', '08:46:45', '', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd', 'http://127.0.0.1:8080/hrepmw.org/website/assets/images/events/world-negleted.jpg', 1, 'Malawi', ''),
('World-Patient-Safety-Day', 'World Patient Safety Day', '2023-09-17', 'The Day brings together patients, families, caregivers, communities, health workers, health care leaders and policy-makers to show their commitment to patient safety.\r\n<br>\r\nThe resolution WHA 72.6 ‘Global action on patient safety’ recognizes patient safety as a global health priority and endorses the establishment of World Patient Safety Day to be observed annually on 17 September.', '00:00:00', '', '', 'http://127.0.0.1:8080/hrepmw.org/website/assets/images/events/wpsd-cover-image.tmb-1024v.jpg', 1, '', ''),
('world-tobacco-day', 'World Tobacco Day', '2023-05-31', 'This yearly celebration informs the public on the dangers of using tobacco, the business practices of tobacco companies, what WHO is doing to fight the tobacco epidemic, and what people around the world can do to claim their right to health and healthy living and to protect future generations.\r\n\r\n<br>\r\nThe Member States of the World Health Organization created World No Tobacco Day in 1987 to draw global attention to the tobacco epidemic and the preventable death and disease it causes. In 1987, the World Health Assembly passed Resolution WHA40.38, calling for 7 April 1988 to be a \"a world no-smoking day.\" In 1988, Resolution WHA42.19 was passed, calling for the celebration of World No Tobacco Day, every year on 31 May.', '00:00:00', '', '', 'http://127.0.0.1:8080/hrepmw.org/website/assets/images/events/tobacco.jpg', 1, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `feature`
--

CREATE TABLE `feature` (
  `slug` varchar(500) NOT NULL,
  `title` text NOT NULL,
  `newspaper_screenshot` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feature`
--

INSERT INTO `feature` (`slug`, `title`, `newspaper_screenshot`, `status`, `date`) VALUES
('feature1', 'Calls for pneumonia vaccine review grow', 'http://127.0.0.1:8080/hrepmw.org/website/assets/images/feature/feature1.jpeg', 1, '2023-01-05 14:10:44'),
('feature2', 'Universal Healthy', 'http://127.0.0.1:8080/hrepmw.org/website/assets/images/feature/feature2.jpeg', 1, '2023-01-05 14:10:44'),
('feature3', 'patients panic', 'http://127.0.0.1:8080/hrepmw.org/website/assets/images/feature/feature3.jpeg', 1, '2023-01-05 14:11:28'),
('feature4', 'Feature 1', 'http://127.0.0.1:8080/hrepmw.org/website/assets/images/feature/feature1.jpeg', 1, '2023-01-05 14:24:40');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `slug` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `picture` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`slug`, `date`, `status`, `picture`) VALUES
('header2', '2023-01-05 14:02:18', 1, 'http://127.0.0.1:8080/hrepmw.org/website/assets/images/headers/header_2.jpg'),
('slider1', '2023-01-05 14:01:31', 1, 'http://127.0.0.1:8080/hrepmw.org/website/assets/images/backgrounds/slider_1.jpg'),
('slider2', '2023-01-05 14:01:56', 1, 'http://127.0.0.1:8080/hrepmw.org/website/assets/images/backgrounds/slider_2.jpg'),
('slider3', '2023-01-05 14:01:31', 1, 'http://127.0.0.1:8080/hrepmw.org/website/assets/images/backgrounds/slider_3.jpg'),
('slider4', '2023-01-05 14:01:56', 1, 'http://127.0.0.1:8080/hrepmw.org/website/assets/images/headers/header_2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `headers`
--

CREATE TABLE `headers` (
  `slug` varchar(500) NOT NULL,
  `menu_name` text NOT NULL,
  `image_url` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `headers`
--

INSERT INTO `headers` (`slug`, `menu_name`, `image_url`, `status`, `date`) VALUES
('announcements', 'announcements', 'http://127.0.0.1:8080/hrepmw.org/website/assets/images/headers/header_2.jpg', 1, '2023-01-06 13:15:55'),
('contact', 'contact', 'http://127.0.0.1:8080/hrepmw.org/website/assets/images/headers/header_2.jpg', 1, '2023-01-05 11:45:02'),
('downloads', 'downloads', 'http://127.0.0.1:8080/hrepmw.org/website/assets/images/headers/header_2.jpg', 1, '2023-01-06 11:02:38'),
('events', 'events', 'http://127.0.0.1:8080/hrepmw.org/website/assets/images/headers/header_2.jpg', 1, '2023-01-05 08:01:07'),
('gallery', 'gallery', 'http://127.0.0.1:8080/hrepmw.org/website/assets/images/headers/header_2.jpg', 1, '2023-01-05 14:39:02'),
('news', 'news', 'http://127.0.0.1:8080/hrepmw.org/website/assets/images/headers/header_2.jpg', 1, '2023-01-05 11:38:46'),
('partners', 'partners', 'http://127.0.0.1:8080/hrepmw.org/website/assets/images/brand/partners.jpg', 1, '2023-01-06 07:11:32'),
('programs', 'programs', 'http://127.0.0.1:8080/hrepmw.org/website/assets/images/headers/header_2.jpg', 1, '2023-01-05 15:11:13'),
('team', 'team', 'http://127.0.0.1:8080/hrepmw.org/website/assets/images/headers/header_2.jpg', 1, '2023-01-05 11:25:51'),
('vacancies', 'vacancies', 'http://127.0.0.1:8080/hrepmw.org/website/assets/images/headers/header_2.jpg', 1, '2023-01-06 11:21:27');

-- --------------------------------------------------------

--
-- Table structure for table `moh_announcements`
--

CREATE TABLE `moh_announcements` (
  `slug` varchar(500) NOT NULL,
  `picture` text NOT NULL,
  `url` text NOT NULL,
  `title` text NOT NULL,
  `icon` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `moh_announcements`
--

INSERT INTO `moh_announcements` (`slug`, `picture`, `url`, `title`, `icon`, `status`, `date`) VALUES
('cholera1', 'http://127.0.0.1:8080/hrepmw.org/website/assets/images/moh/ch1.jpg', 'http://www.health.gov.mw/', 'Cholera', '', 1, '2023-01-05 05:27:09'),
('cholera2', 'http://127.0.0.1:8080/hrepmw.org/website/assets/images/moh/ch2.jpg', 'http://www.health.gov.mw/', 'Cholera', '', 1, '2023-01-05 05:27:09'),
('cholera3', 'http://127.0.0.1:8080/hrepmw.org/website/assets/images/moh/ch3.jpg', 'http://www.health.gov.mw/', 'Cholera', '', 1, '2023-01-05 05:27:09');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `slug` varchar(500) NOT NULL,
  `content` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `picture` text NOT NULL,
  `author` text NOT NULL,
  `title` varchar(400) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `tags` text NOT NULL,
  `short_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`slug`, `content`, `status`, `picture`, `author`, `title`, `date`, `tags`, `short_description`) VALUES
('community', 'Malawi healthy workers at HREP malawi community event Malawi healthy workers at HREP malawi community event Malawi healthy workers at HREP malawi community event Malawi healthy workers at HREP malawi community event Malawi healthy workers at HREP malawi community event Malawi healthy workers at HREP malawi community event Malawi healthy workers at HREP malawi community event Malawi healthy workers at HREP malawi community event Malawi healthy workers at HREP malawi community event Malawi healthy workers at HREP malawi community event Malawi healthy workers at HREP malawi community event Malawi healthy workers at HREP malawi community event Malawi healthy workers at HREP malawi community event ', 1, 'http://127.0.0.1:8080/hrepmw.org/website/assets/images/blog/community-event.png', 'hrep', 'Community event', '2022-12-17 06:09:53', 'community,healthy', 'Short description'),
('communitys', 'HREP Malawi conducting community led monitoring at healthy centre in rural Malawi HREP Malawi conducting community led monitoring at healthy centre in rural Malawi HREP Malawi conducting community led monitoring at healthy centre in rural Malawi HREP Malawi conducting community led monitoring at healthy centre in rural Malawi HREP Malawi conducting community led monitoring at healthy centre in rural Malawi HREP Malawi conducting community led monitoring at healthy centre in rural Malawi HREP Malawi conducting community led monitoring at healthy centre in rural Malawi HREP Malawi conducting community led monitoring at healthy centre in rural Malawi', 1, 'http://127.0.0.1:8080/hrepmw.org/website/assets/images/blog/community-healthy.png', 'HREP', 'Monitoring at healthy centre in rural Malawi', '2022-12-16 06:09:53', 'monitoring,community', 'Short description'),
('healthy', 'HREP Malawi advancing healthy financing reforms for community benefit HREP Malawi advancing healthy financing reforms for community benefit HREP Malawi advancing healthy financing reforms for community benefit HREP Malawi advancing healthy financing reforms for community benefit HREP Malawi advancing healthy financing reforms for community benefit HREP Malawi advancing healthy financing reforms for community benefit HREP Malawi advancing healthy financing reforms for community benefit HREP Malawi advancing healthy financing reforms for community benefit HREP Malawi advancing healthy financing reforms for community benefit HREP Malawi advancing healthy financing reforms for community benefit HREP Malawi advancing healthy financing reforms for community benefit ', 1, 'http://127.0.0.1:8080/hrepmw.org/website/assets/images/blog/event.jpg', 'HREP', 'Financing reforms', '2022-12-16 06:15:01', 'financing, community', 'Short description'),
('media', 'HREP Malawi on behalf of CSO\'s and media making statement at National Healthy HREP Malawi on behalf of CSO\'s and media making statement at National Healthy Financing Dialogue HREP Malawi on behalf of CSO\'s and media making statement at National Healthy Financing Dialogue HREP Malawi on behalf of CSO\'s and media making statement at National Healthy Financing Dialogue HREP Malawi on behalf of CSO\'s and media making statement at National Healthy Financing Dialogue HREP Malawi on behalf of CSO\'s and media making statement at National Healthy Financing Dialogue HREP Malawi on behalf of CSO\'s and media making statement at National Healthy Financing Dialogue HREP Malawi on behalf of CSO\'s and media making statement at National Healthy Financing Dialogue HREP Malawi on behalf of CSO\'s and media making statement at National Healthy Financing Dialogue HREP Malawi on behalf of CSO\'s and media making statement at National Healthy Financing Dialogue HREP Malawi on behalf of CSO\'s and media making statement at National Healthy Financing Dialogue Financing Dialogue', 1, 'http://127.0.0.1:8080/hrepmw.org/website/assets/images/blog/press.jpg', 'HREP', 'Media briefing', '2022-12-16 06:11:33', 'media,HREP', 'Short description');

-- --------------------------------------------------------

--
-- Table structure for table `news_letter`
--

CREATE TABLE `news_letter` (
  `slug` varchar(500) NOT NULL,
  `title` text NOT NULL,
  `short_description` text NOT NULL,
  `link` text NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `our_activities`
--

CREATE TABLE `our_activities` (
  `slug` varchar(500) NOT NULL,
  `title` text NOT NULL,
  `short_description` text NOT NULL,
  `content` text NOT NULL,
  `icon` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `delay` varchar(11) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `our_activities`
--

INSERT INTO `our_activities` (`slug`, `title`, `short_description`, `content`, `icon`, `status`, `date`, `delay`, `image`) VALUES
('community', 'Community Health', 'Community and non-state actors advocacy engagement program', 'Community and non-state actors advocacy engagement program Community and non-state actors advocacy engagement program Community and non-state actors advocacy engagement program Community and non-state actors advocacy engagement program Community and non-state actors advocacy engagement program Community and non-state actors advocacy engagement program Community and non-state actors advocacy engagement program Community and non-state actors advocacy engagement program Community and non-state actors advocacy engagement program Community and non-state actors advocacy engagement program', 'icon-peace', 1, '2022-12-16 17:52:41', '100ms', 'http://127.0.0.1:8080/hrepmw.org/website/assets/images/headers/header_2.jpg'),
('healthy', 'Health Policy', 'Healthy Policy, Financing and Research advocacy program', 'Healthy Policy, Financing and Research advocacy program Healthy Policy, Financing and Research advocacy program Healthy Policy, Financing and Research advocacy program Healthy Policy, Financing and Research advocacy program Healthy Policy, Financing and Research advocacy program Healthy Policy, Financing and Research advocacy program', 'icon-praying', 1, '2022-12-16 17:52:41', '200ms', 'http://127.0.0.1:8080/hrepmw.org/website/assets/images/headers/header_2.jpg'),
('mentorship', 'Mentorship and Trainings', 'Mentorship and training advocancy engagement program', 'Mentorship and training advocancy engagement program Mentorship and training advocancy engagement program Mentorship and training advocancy engagement program Mentorship and training advocancy engagement program Mentorship and training advocancy engagement program Mentorship and training advocancy engagement program ', 'icon-peace-1', 1, '2022-12-16 17:52:41', '300ms', 'http://127.0.0.1:8080/hrepmw.org/website/assets/images/headers/header_2.jpg'),
('primary-healthy', 'Primary Health Care and universal health coverage', 'Primary Healthy care and universal coverage advocacy program', 'Primary Healthy care and universal coverage advocacy program Primary Healthy care and universal coverage advocacy program Primary Healthy care and universal coverage advocacy program Primary Healthy care and universal coverage advocacy program Primary Healthy care and universal coverage advocacy program Primary Healthy care and universal coverage advocacy program', 'icon-heart', 1, '2022-12-16 17:52:41', '400ms', 'http://127.0.0.1:8080/hrepmw.org/website/assets/images/headers/header_2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `slug` varchar(100) NOT NULL,
  `picture` text NOT NULL,
  `website` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `name` text NOT NULL,
  `content` text NOT NULL,
  `tag` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`slug`, `picture`, `website`, `status`, `date`, `name`, `content`, `tag`) VALUES
('africanunion', 'http://127.0.0.1:8080/hrepmw.org/website/assets/images/brand/africanunion.png', 'https://au.int/', 1, '2022-12-17 17:25:14', 'African Union', 'Aellentesque porttitor lacus quis enim varius', 'Health'),
('usaid', 'http://127.0.0.1:8080/hrepmw.org/website/assets/images/brand/usaid.png', 'https://www.usaid.gov/', 1, '2022-12-17 17:25:14', 'USAID', 'Aellentesque porttitor lacus quis enim varius', 'Health'),
('who', 'http://127.0.0.1:8080/hrepmw.org/website/assets/images/brand/who.png', 'https://www.who.int/', 1, '2022-12-17 17:25:14', 'WHO', 'Aellentesque porttitor lacus quis enim variusAellentesque porttitor lacus quis enim variusAellentesque porttitor lacus quis enim variusAellentesque porttitor lacus quis enim varius', 'Health'),
('worldbank', 'http://127.0.0.1:8080/hrepmw.org/website/assets/images/brand/worldbank.png', 'https://www.worldbank.org/en/home', 1, '2022-12-17 17:25:14', 'World Bank', 'Aellentesque porttitor lacus quis enim varius', 'Health');

-- --------------------------------------------------------

--
-- Table structure for table `pictures`
--

CREATE TABLE `pictures` (
  `slug` varchar(500) NOT NULL,
  `picture` text NOT NULL,
  `tag` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `publications`
--

CREATE TABLE `publications` (
  `slug` varchar(500) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `short_description` text NOT NULL,
  `picture` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `publications`
--

INSERT INTO `publications` (`slug`, `title`, `content`, `date`, `status`, `short_description`, `picture`) VALUES
('Become-a-Volunteer', 'Become a Volunteer', 'Lorem Ipsum nibh vel velit auctor aliqu. Aenean sollic tudin, lorem is simply man made many people recover them free text quis bibendum.', '2023-01-06 13:17:13', 1, 'Lorem Ipsum nibh vel velit auctor aliqu. Aenean sollic tudin, lorem is simply man made many people recover them free text quis bibendum.', 'http://127.0.0.1:8080/hrepmw.org/website/assets/images/resources/about_preview.jpg'),
('Get-Inspire-and-Help', 'Get Inspire and Help', 'Lorem Ipsum nibh vel velit auctor aliqu. Aenean sollic tudin, lorem is simply man made many people recover them free text quis bibendum.', '2023-01-06 13:17:16', 1, 'Lorem Ipsum nibh vel velit auctor aliqu. Aenean sollic tudin, lorem is simply man made many people recover them free text quis bibendum.', 'http://127.0.0.1:8080/hrepmw.org/website/assets/images/resources/about_preview.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `slug` varchar(500) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `position` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`slug`, `title`, `description`, `image`, `date`, `status`, `position`) VALUES
('slider1', 'Providing good healthy and equal rights', 'We are the champions of good health', 'http://127.0.0.1:8080/hrepmw.org/website/assets/images/backgrounds/slider_1.jpg', '2022-12-18 13:13:00', 1, 3),
('slider3', 'We are the champions of good health', 'We are the champions of good health', 'http://127.0.0.1:8080/hrepmw.org/website/assets/images/backgrounds/slider_3.jpg', '2023-01-05 06:18:39', 1, 1),
('slider_2', 'Providing good healthy and equal rights', 'We are the champions of good health', 'http://127.0.0.1:8080/hrepmw.org/website/assets/images/backgrounds/slider_2.jpg', '2022-12-18 13:13:00', 1, 2),
('slider_4', 'We are the champions of good health', 'We are the champions of good health', 'http://127.0.0.1:8080/hrepmw.org/website/assets/images/headers/header_2.jpg', '2023-01-05 06:18:39', 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `slug` varchar(500) NOT NULL,
  `picture` text NOT NULL,
  `name` text NOT NULL,
  `position` text NOT NULL,
  `twitter` text NOT NULL DEFAULT '#',
  `facebook` text NOT NULL DEFAULT '#',
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `display_position` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`slug`, `picture`, `name`, `position`, `twitter`, `facebook`, `status`, `date`, `display_position`) VALUES
('ceo', 'http://127.0.0.1:8080/hrepmw.org/website/assets/images/team/ceo.jpg', 'Maziko Matemba', 'CEO', 'https://twitter.com/matemba_maziko?lang=en', 'https://web.facebook.com/maziko.matemba', 1, '2023-01-05 09:55:46', 1),
('managing_director', 'http://127.0.0.1:8080/hrepmw.org/website/assets/images/team/md.jpg', 'Chikondi Sanga', 'Managing Director', '#', '#', 1, '2023-01-05 09:55:46', 2);

-- --------------------------------------------------------

--
-- Table structure for table `vacancies`
--

CREATE TABLE `vacancies` (
  `slug` varchar(500) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vacancies`
--

INSERT INTO `vacancies` (`slug`, `title`, `content`, `status`, `date`) VALUES
('accountant', 'Accountant Grade 8', 'Healthy and Rights Education Program(HREP) is a registered non profit making, non governmental organization that was formed in 2006.   Our mission is to provide good healthy and equal rights for all through civic education. lobbying, advocancy, research and documentation. <br><br>Healthy and Rights Education Program(HREP) is a registered non profit making, non governmental organization that was formed in 2006.   Our mission is to provide good healthy and equal rights for all through civic education. lobbying, advocancy, research and documentation. ', 1, '2023-01-06 11:18:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`slug`);

--
-- Indexes for table `downloads`
--
ALTER TABLE `downloads`
  ADD PRIMARY KEY (`slug`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`slug`);

--
-- Indexes for table `feature`
--
ALTER TABLE `feature`
  ADD PRIMARY KEY (`slug`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`slug`);

--
-- Indexes for table `headers`
--
ALTER TABLE `headers`
  ADD PRIMARY KEY (`slug`);

--
-- Indexes for table `moh_announcements`
--
ALTER TABLE `moh_announcements`
  ADD PRIMARY KEY (`slug`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`slug`);

--
-- Indexes for table `news_letter`
--
ALTER TABLE `news_letter`
  ADD PRIMARY KEY (`slug`);

--
-- Indexes for table `our_activities`
--
ALTER TABLE `our_activities`
  ADD PRIMARY KEY (`slug`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`slug`);

--
-- Indexes for table `publications`
--
ALTER TABLE `publications`
  ADD PRIMARY KEY (`slug`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`slug`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`slug`);

--
-- Indexes for table `vacancies`
--
ALTER TABLE `vacancies`
  ADD PRIMARY KEY (`slug`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
