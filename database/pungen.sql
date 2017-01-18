-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2016 at 11:53 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pungen`
--

-- --------------------------------------------------------

--
-- Table structure for table `animal`
--

CREATE TABLE IF NOT EXISTS `animal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  `rating` float NOT NULL,
  `user` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `animal`
--

INSERT INTO `animal` (`id`, `question`, `answer`, `rating`, `user`) VALUES
(1, 'What do you call a fish without an eye?', 'A Fsh', 0, 0),
(2, 'Where did the sheep go on vacation?', 'The baaaaahamas', 4, 2),
(3, ' What goes tick-tock, bow-wow, tick-tock, bow-wow?', 'A watch dog.', 0, 0),
(4, 'How does a dog stop a video?', 'He presses the paws button.', 4, 1),
(5, 'What is the snake''s favorite subject?', 'Hiss-story', 4, 1),
(6, 'What has four legs and goes "Oom, Oom"?', 'A cow walking backwards!', 0, 0),
(7, ' Where do you put barking dogs?', 'In a barking lot!', 0, 0),
(8, 'What is a cheetahs favorite food?', 'Fast food!', 4, 1),
(9, 'What is as big as an elephant but weighs nothing?', 'It''s shadow.', 0, 0),
(10, 'What does a cat say when somebody steps on\r\nits tail?', 'Me-owww!', 0, 0),
(11, 'Which day do fish hate?', 'Fry-day.', 0, 0),
(12, 'What do you call a cow in a tornado?', 'A milkshake!', 3.65217, 23);

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE IF NOT EXISTS `food` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  `rating` float NOT NULL,
  `user` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `question`, `answer`, `rating`, `user`) VALUES
(1, 'Q) What did the baby corn say to the mama corn?\r\n\r\n...\r\nWhere''s pop?', '', 3.66667, 3),
(2, 'Q) What did the nut say when it sneezed?\r\n...\r\nCashew!', '', 4, 1),
(3, 'Q) Why did the banana go to the doctor?\r\n...\r\nBecause it wasn''t peeling well!', '', 4, 1),
(4, 'Q) What do you get from a pampered cow?\r\n...\r\nSpoiled milk!', '', 4, 1),
(5, 'Q) What do you call a bear with no teeth?\r\n...\r\nA gummy bear!', '', 0, 0),
(6, 'Q) If fruit comes from a fruit tree, where does chicken come from?\r\n...\r\nA poul-tree!', '', 0, 0),
(7, 'Q) What is a frog''s favorite cold drink?\r\n...\r\nCroak-a-cola!\r\n\r\n', '', 0, 0),
(8, 'Q) What do polar bears eat for lunch?\r\n...\r\nIce berg-ers!', '', 0, 0),
(9, 'Q) When is an Irish potato not an Irish potato?\r\n...\r\nWhen it''s a French fry!', '', 0, 0),
(10, 'Q) What is a math teacher''s favorite dessert?\r\n...\r\nPi!', '', 0, 0),
(11, 'Q) Why did the kid throw the butter out the window?\r\n...\r\nTo see the butter fly!\r\n\r\n\r\n', '', 0, 0),
(12, 'Q) What do ghosts like for dessert?\r\n...\r\nI scream!', '', 0, 0),
(13, 'Q) What did the mamma tomato say to the baby tomato?\r\n...\r\nCatch up!', '', 0, 0),
(14, 'Q) What''s orange and sounds like a parrot?\r\n...\r\nA carrot!', '', 0, 0),
(15, 'Q) Which day do potatoes hate the most?\r\n...\r\nFry-day!\r\n', '', 0, 0),
(16, 'Q) What vegetables do librarians like?\r\n...\r\nQuiet peas!', '', 0, 0),
(17, 'Q) What kind of plates do they use in space?\r\n...\r\nFlying saucers!', '', 0, 0),
(18, 'Q) What do you give to a sick lemon?\r\n...\r\nLemon aid!', '', 0, 0),
(19, 'Q) What do you get when you cross a snake and a pie?\r\n...\r\nA pie-thon!', '', 0, 0),
(20, 'Q) What''s an elephant''s favorite vegetable?\r\n...\r\nSquash!', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `generated`
--

CREATE TABLE IF NOT EXISTS `generated` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `question` varchar(200) NOT NULL,
  `answer` varchar(100) NOT NULL,
  `rating` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `generated`
--

INSERT INTO `generated` (`id`, `question`, `answer`, `rating`, `user`) VALUES
(1, 'What do you get when you cross chromatic_color and leaving from a place?', 'green leaves', 0, 0),
(2, 'What do you get when you cross change_state and a weapon?', 'thin arm', 4, 1),
(3, 'What do you get when you cross a season and cruciferous_vegetable?', 'spring cabbage', 4, 1),
(4, 'What do you get when you cross stream and a secure financial institution?', 'river bank', 4, 1),
(5, 'What do you get when you cross musical_notation and a punctuation such as fullstop?', 'sharp point', 0, 0),
(6, 'What do you get when you cross precious_metal and a circular object?', 'gold ring', 0, 0),
(7, 'What do you get when you cross gliding_joint and looking at or observe something attentively?', 'wrist watch', 0, 0),
(8, 'What do you get when you cross a fruit and container?', 'orange bag', 0, 0),
(9, 'What do you get when you cross car and a polish citizen?', 'electric pole', 0, 0),
(10, 'What do you get when you cross chromatic_color and cry of a dog?', 'brown bark', 0, 0),
(11, 'What do you get when you cross a secure financial institution and draft?', 'bank cheque', 0, 0),
(12, 'What do you get when you cross bedroom_furniture and an error in program?', 'bed bug', 0, 0),
(13, 'What do you get when you cross refrain and to teach a particular skill through sustained practise?', 'fast train', 0, 0),
(14, 'What do you get when you cross a strong wind and appliance?', 'blow dryer', 0, 0),
(15, 'What do you get when you cross court_game and  type of dance for couples?', 'tennis ball', 0, 0),
(16, 'What do you get when you cross being restricted for appearing for some event  and visual_communication?', 'bar graph', 0, 0),
(17, 'What do you get when you cross being restricted for appearing for some event  and device?', 'bar magnet', 0, 0),
(18, 'What do you get when you cross vertebrate_foot and  type of dance for couples?', 'foot ball', 0, 0),
(19, 'What do you get when you cross placental and  type of dance for couples?', 'bat ball', 0, 0),
(20, 'What do you get when you cross navigational_instrument and a fight with gloves on fists?', 'compass box', 0, 0),
(21, 'What do you get when you cross limb and a young bovine animal?', 'leg calf', 0, 0),
(22, 'What do you get when you cross alloy and an act of throwing a ball to batsman in cricket?', 'steel bowl', 0, 0),
(23, 'What do you get when you cross reservation in advance and protective_covering?', 'book cover', 0, 0),
(24, 'What do you get when you cross reservation in advance and mercantile_establishment?', 'book store', 0, 0),
(25, 'What do you get when you cross bending down towards someone showing respect and mark?', 'bow arrow', 0, 0),
(26, 'What do you get when you cross food_product and capable of doing something?', 'juice can', 0, 0),
(27, 'What do you get when you cross commencement and  day of the month or year specified by a number?', 'birth date', 0, 0),
(28, 'What do you get when you cross a person with lighter complexion  and commerce?', 'fair trade', 0, 0),
(29, 'What do you get when you cross tense and  day of the month or year specified by a number?', 'perfect date', 0, 0),
(30, 'What do you get when you cross movie and group of musicians?', 'musical band', 0, 0),
(31, 'What do you get when you cross weapon and destructive burning?', 'gun fire', 0, 0),
(32, 'What do you get when you cross plain and being exhausted?', 'flat tire', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `generated1`
--

CREATE TABLE IF NOT EXISTS `generated1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(200) NOT NULL,
  `answer` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=634 ;

--
-- Dumping data for table `generated1`
--

INSERT INTO `generated1` (`id`, `question`, `answer`) VALUES
(141, 'What do you call a breezy eagle''s nest? ', 'An airy aerie.'),
(142, 'When is a stuff we breathe like a 1/100th of a hectare? ', 'When it is an are.'),
(143, 'When is a 1/100th of a hectare like a stuff we breathe? ', 'When it is an air.'),
(144, 'When is an insect like a parent''s sister? ', 'When it is an aunt.'),
(145, 'When is a parent''s sister like an insect? ', 'When it is an ant.'),
(146, 'When is a portion of a circle like a vessel? ', 'When it is an ark.'),
(147, 'When is a vessel like a portion of a circle? ', 'When it is an arc.'),
(148, 'When is a the climb like a to agree? ', 'When it is an assent.'),
(149, 'When is a to agree like a the climb? ', 'When it is an ascent.'),
(150, 'When is an external part of the ear like a seer? ', 'When it is an oracle.'),
(151, 'When is a seer like an external part of the ear? ', 'When it is an auricle.'),
(152, 'When is a bucket handle like a bundle of hay? ', 'When it is a bale.'),
(153, 'When is a bundle of hay like a bucket handle? ', 'When it is a bail.'),
(154, 'When is a person to whom goods are committed for custody or repair like a the outer wall of a castle? ', 'When it is a bailey.'),
(155, 'When is a the outer wall of a castle like a person to whom goods are committed for custody or repair? ', 'When it is a bailee.'),
(156, 'When is a green felt like an one or more enclosed arms of the ocean? ', 'When it is a bays.'),
(157, 'When is an one or more enclosed arms of the ocean like a green felt? ', 'When it is a baize.'),
(158, 'What do you call an unable to bear children minor royalty? ', 'A barren baron.'),
(159, 'What do you call a man''s name small fruit? ', 'A Barry berry.'),
(160, 'What do you call a forming the base an herb? ', 'A basal basil.'),
(161, 'When is a the bottom support for anything like a the lowest musical pitch or range? ', 'When it is a bass.'),
(162, 'When is a the lowest musical pitch or range like a the bottom support for anything? ', 'When it is a base.'),
(163, 'When is a what baseball players like to steal like a principal constituent of anything? ', 'When it is a basis.'),
(164, 'When is a principal constituent of anything like a what baseball players like to steal? ', 'When it is a bases.'),
(165, 'When is a blind, flying rodent like a flat pad? ', 'When it is a batt.'),
(166, 'When is a flat pad like a blind, flying rodent? ', 'When it is a bat.'),
(167, 'When is a bits per second like a brothel manager? ', 'When it is a bawd.'),
(168, 'When is a brothel manager like a bits per second? ', 'When it is a baud.'),
(169, 'When is an enclosed arm of the ocean like a Turkish official? ', 'When it is a bey.'),
(170, 'When is a Turkish official like an enclosed arm of the ocean? ', 'When it is a bay.'),
(171, 'When is a where i want to be like a type of tree? ', 'When it is a beech.'),
(172, 'When is a type of tree like a where i want to be? ', 'When it is a beach.'),
(173, 'When is a male friend like a curve or bend; double-slipped reef knot? ', 'When it is a bow.'),
(174, 'When is a curve or bend; double-slipped reef knot like a male friend? ', 'When it is a beau.'),
(175, 'When is a slang for beauty, beautiful like a steep sided hill? ', 'When it is a butte.'),
(176, 'When is a steep sided hill like a slang for beauty, beautiful? ', 'When it is a beaut.'),
(177, 'When is an universally brewed comfort food like a temporary frame for a coffin? ', 'When it is a bier.'),
(178, 'When is a temporary frame for a coffin like an universally brewed comfort food? ', 'When it is a beer.'),
(179, 'When is an indian thorn tree like a Babylonian god? ', 'When it is a Bel.'),
(180, 'When is a Babylonian god like an indian thorn tree? ', 'When it is a bel.'),
(181, 'When is an anchorage like a your method of arrival? ', 'When it is a birth.'),
(182, 'When is a your method of arrival like an anchorage? ', 'When it is a berth.'),
(183, 'What do you call a superior one who bets? ', 'A better bettor.'),
(184, 'When is a past tense of bite like a large cleat for tying up ships? ', 'When it is a bitt.'),
(185, 'When is a large cleat for tying up ships like a past tense of bite? ', 'When it is a bit.'),
(186, 'When is an alliance like a square object? ', 'When it is a block.'),
(187, 'When is a square object like an alliance? ', 'When it is a bloc.'),
(188, 'When is a wild pig like a South African of Dutch descent? ', 'When it is a Boer.'),
(189, 'When is a South African of Dutch descent like a wild pig? ', 'When it is a boar.'),
(190, 'What do you call a not interested a plank? ', 'A bored board.'),
(191, 'When is a lodger who gets meals, too like a perimeter? ', 'When it is a border.'),
(192, 'When is a perimeter like a lodger who gets meals, too? ', 'When it is a boarder.'),
(193, 'What do you call a more courageous large rock? ', 'A bolder boulder.'),
(194, 'When is a trunk like a round seed pod? ', 'When it is a boll.'),
(195, 'When is a round seed pod like a trunk? ', 'When it is a bole.'),
(196, 'When is a disparaging sounds from fans like a whiskey? ', 'When it is a booze.'),
(197, 'When is a whiskey like a disparaging sounds from fans? ', 'When it is a boos.'),
(198, 'When is a township like a dig into the ground? ', 'When it is a burrow.'),
(199, 'When is a dig into the ground like a township? ', 'When it is a borough.'),
(200, 'When is a tree branch like a front of a ship; respectful bend? ', 'When it is a bow.'),
(201, 'When is a front of a ship; respectful bend like a tree branch? ', 'When it is a bough.'),
(202, 'What do you call a well-groomed brassiere? ', 'A braw bra.'),
(203, 'When is a to break through like a the back part? ', 'When it is a breech.'),
(204, 'When is a the back part like a to break through? ', 'When it is a breach.'),
(205, 'What do you call a past tense of breed a loaf? ', 'A bred bread.'),
(206, 'What do you call a pertaining to brides horse''s headgear? ', 'A bridal bridle.'),
(207, 'When is a meat sandwich like a merchant? ', 'When it is a burgher.'),
(208, 'When is a merchant like a meat sandwich? ', 'When it is a burger.'),
(209, 'When is a large multi-passenger vehicle like a kiss? ', 'When it is a buss.'),
(210, 'When is a kiss like a large multi-passenger vehicle? ', 'When it is a bus.'),
(211, 'When is an one who purchases like a cow barn? ', 'When it is a byre.'),
(212, 'When is a cow barn like an one who purchases? ', 'When it is a buyer.'),
(213, 'When is a hidden storage like a legal tender? ', 'When it is a cash.'),
(214, 'When is a legal tender like a hidden storage? ', 'When it is a cache.'),
(215, 'When is a chart of days like a paper press? ', 'When it is a calender.'),
(216, 'When is a paper press like a chart of days? ', 'When it is a calendar.'),
(217, 'When is an one who calls like a my cat has collar ID? ', 'When it is a collar.'),
(218, 'When is a my cat has collar ID like an one who calls? ', 'When it is a caller.'),
(219, 'When is a big gun like a body of law? ', 'When it is a canon.'),
(220, 'When is a body of law like a big gun? ', 'When it is a cannon.'),
(221, 'When is a moderate gallop like a singer? ', 'When it is a cantor.'),
(222, 'When is a singer like a moderate gallop? ', 'When it is a canter.'),
(223, 'When is an unit of weight for precious stones, equal to 200 milligrams like a proofreader''s insertion mark? ', 'When it is a caret.'),
(224, 'When is a proofreader''s insertion mark like an unit of weight for precious stones, equal to 200 milligrams? ', 'When it is a carat.'),
(225, 'When is a Christmas song like a study enclosure? ', 'When it is a carrel.'),
(226, 'When is a study enclosure like a Christmas song? ', 'When it is a carol.'),
(227, 'When is a bone of the carpus like a pistil? ', 'When it is a carpel.'),
(228, 'When is a pistil like a bone of the carpus? ', 'When it is a carpal.'),
(229, 'When is an one who throws like a beaver''s smelly gland? ', 'When it is a castor.'),
(230, 'When is a beaver''s smelly gland like an one who throws? ', 'When it is a caster.'),
(231, 'When is a generative force like a sounds of crows? ', 'When it is a caws.'),
(232, 'When is a sounds of crows like a generative force? ', 'When it is a cause.'),
(233, 'When is a low island like an opens locks? ', 'When it is a key.'),
(234, 'When is an opens locks like a low island? ', 'When it is a cay.'),
(235, 'When is an evergreen tree like an one who broadcasts seeds? ', 'When it is a seeder.'),
(236, 'When is an one who broadcasts seeds like an evergreen tree? ', 'When it is a cedar.'),
(237, 'When is an under a house like an one who sells? ', 'When it is a seller.'),
(238, 'When is an one who sells like an under a house? ', 'When it is a cellar.'),
(239, 'When is an incense dish like a bad people who fear knowledge? ', 'When it is a censor.'),
(240, 'When is a bad people who fear knowledge like an incense dish? ', 'When it is a censer.'),
(241, 'When is a numbering like a faculties? ', 'When it is a senses.'),
(242, 'When is a faculties like a numbering? ', 'When it is a census.'),
(243, 'When is an one hundredth of a dollar like an aroma? ', 'When it is a scent.'),
(244, 'When is an aroma like an one hundredth of a dollar? ', 'When it is a cent.'),
(245, 'When is a hundredths of a dollar like a many things to smell? ', 'When it is a scents.'),
(246, 'When is a many things to smell like a hundredths of a dollar? ', 'When it is a cents.'),
(247, 'What do you call a numbers in sequence grains? ', 'A serial cereal.'),
(248, 'When is a giving up like a group sitting? ', 'When it is a session.'),
(249, 'When is a group sitting like a giving up? ', 'When it is a cession.'),
(250, 'When is a calcareous earthy substance like a wedge to keep wheels from rolling? ', 'When it is a chock.'),
(251, 'When is a wedge to keep wheels from rolling like a calcareous earthy substance? ', 'When it is a chalk.'),
(252, 'When is a happenstance like a more than one litany? ', 'When it is a chants.'),
(253, 'When is a more than one litany like a happenstance? ', 'When it is a chance.'),
(254, 'When is a church singers like a the twentieth part of a ream of paper? ', 'When it is a quire.'),
(255, 'When is a the twentieth part of a ream of paper like a church singers? ', 'When it is a choir.'),
(256, 'When is a yellow bile like an around your neck? ', 'When it is a collar.'),
(257, 'When is an around your neck like a yellow bile? ', 'When it is a choler.'),
(258, 'What do you call a by a chorus marine polyp skeleton? ', 'A choral coral.'),
(259, 'When is a choir like a pen for horses? ', 'When it is a corral.'),
(260, 'When is a pen for horses like a choir? ', 'When it is a chorale.'),
(261, 'When is a three tones in harmony like a very light rope? ', 'When it is a cord.'),
(262, 'When is a very light rope like a three tones in harmony? ', 'When it is a chord.'),
(263, 'When is a sheet cringle on a sail like a hint? ', 'When it is a clue.'),
(264, 'When is a hint like a sheet cringle on a sail? ', 'When it is a clew.'),
(265, 'When is a ticking noise like an exclusive group? ', 'When it is a clique.'),
(266, 'When is an exclusive group like a ticking noise? ', 'When it is a click.'),
(267, 'When is a black mineral like a plants in the crucifer family? ', 'When it is a cole.'),
(268, 'When is a plants in the crucifer family like a black mineral? ', 'When it is a coal.'),
(269, 'What do you call a rough path of travel? ', 'A coarse course.'),
(270, 'When is a wear it for warmth like a small animal shed? ', 'When it is a cote.'),
(271, 'When is a small animal shed like a wear it for warmth? ', 'When it is a coat.'),
(272, 'When is a more than one male bird like a coxswain? ', 'When it is a cox.'),
(273, 'When is a coxswain like a more than one male bird? ', 'When it is a cocks.'),
(274, 'When is a money like a corner stone? ', 'When it is a quoin.'),
(275, 'When is a corner stone like a money? ', 'When it is a coin.'),
(276, 'When is a military officer like a seed? ', 'When it is a kernel.'),
(277, 'When is a seed like a military officer? ', 'When it is a colonel.'),
(278, 'When is an allotment like an encomium? ', 'When it is a compliment.'),
(279, 'When is an encomium like an allotment? ', 'When it is a complement.'),
(280, 'When is a police officers like a small wood? ', 'When it is a copse.'),
(281, 'When is a small wood like a police officers? ', 'When it is a cops.'),
(282, 'When is an inner part like a body? ', 'When it is a corps.'),
(283, 'When is a body like an inner part? ', 'When it is a core.'),
(284, 'When is a group of leaders like an advisor? ', 'When it is a counsel.'),
(285, 'When is an advisor like a group of leaders? ', 'When it is a council.'),
(286, 'When is a manual occupation like a strong paper made from wood pulp? ', 'When it is a kraft.'),
(287, 'When is a strong paper made from wood pulp like a manual occupation? ', 'When it is a craft.'),
(288, 'What do you call a merciless embroidery yarn? ', 'A cruel crewel.'),
(289, 'What do you call an of the present small berry? ', 'A current currant.'),
(290, 'When is a young swan like an authenticating seal? ', 'When it is a signet.'),
(291, 'When is an authenticating seal like a young swan? ', 'When it is a cygnet.'),
(292, 'When is a percussive brass dish like a representation? ', 'When it is a symbol.'),
(293, 'When is a representation like a percussive brass dish? ', 'When it is a cymbal.'),
(294, 'What do you call a beloved Bambi? ', 'A dear deer.'),
(295, 'What do you call a desperate one who dyes? ', 'A dire dyer.'),
(296, 'What do you call a two things a fight between two over honor? ', 'A dual duel.'),
(297, 'When is a narrative poem or story like a noteworthy period in history? ', 'When it is an epoch.'),
(298, 'When is a noteworthy period in history like a narrative poem or story? ', 'When it is an epic.'),
(299, 'When is a men unable to serve all of humanity like an operating system unable to serve all of humanity? ', 'When it is an Unix.'),
(300, 'When is an operating system unable to serve all of humanity like a men unable to serve all of humanity? ', 'When it is an eunuchs.'),
(301, 'When is a female sheep like a type of tree? ', 'When it is a yew.'),
(302, 'When is a type of tree like a female sheep? ', 'When it is an ewe.'),
(303, 'When is a small hole for laces like a small island? ', 'When it is an islet.'),
(304, 'When is a small island like a small hole for laces? ', 'When it is an eyelet.'),
(305, 'When is an objective things like an obsolete, but widespread, image transmission technology? ', 'When it is a fax.'),
(306, 'When is an obsolete, but widespread, image transmission technology like an objective things? ', 'When it is a facts.'),
(307, 'What do you call a pass out a weak, misdirected attack to confuse the enemy? ', 'A faint feint.'),
(308, 'What do you call an even-handed payment? ', 'A fair fare.'),
(309, 'When is an imaginary magic person like a river-crossing boat? ', 'When it is a ferry.'),
(310, 'When is a river-crossing boat like an imaginary magic person? ', 'When it is a fairy.'),
(311, 'What do you call a fake enemy? ', 'A faux foe.'),
(312, 'When is an accomplishment like a look down? ', 'When it is a feet.'),
(313, 'When is a look down like an accomplishment? ', 'When it is a feat.'),
(314, 'When is a salt containing iron and oxygen like a domesticated polecat? ', 'When it is a ferret.'),
(315, 'When is a domesticated polecat like a salt containing iron and oxygen? ', 'When it is a ferrate.'),
(316, 'When is a keep the bad stuff from passing through like a love potion? ', 'When it is a philter.'),
(317, 'When is a love potion like a keep the bad stuff from passing through? ', 'When it is a filter.'),
(318, 'When is an evergreen tree like an animal hair? ', 'When it is a fur.'),
(319, 'When is an animal hair like an evergreen tree? ', 'When it is a fir.'),
(320, 'When is an one who fishes like a crack? ', 'When it is a fissure.'),
(321, 'When is a crack like an one who fishes? ', 'When it is a fisher.'),
(322, 'When is a verve like a to spread? ', 'When it is a flare.'),
(323, 'When is a to spread like a verve? ', 'When it is a flair.'),
(324, 'When is a more than one group of birds like a scented plant? ', 'When it is a phlox.'),
(325, 'When is a scented plant like a more than one group of birds? ', 'When it is a flocks.'),
(326, 'When is a powdered grain like a bloom? ', 'When it is a flower.'),
(327, 'When is a bloom like a powdered grain? ', 'When it is a flour.'),
(328, 'When is a fortification like a person''s strong point? ', 'When it is a forte.'),
(329, 'When is a person''s strong point like a fortification? ', 'When it is a fort.'),
(330, 'What do you call a grossly offensive to the senses domestic hen or rooster? ', 'A foul fowl.'),
(331, 'When is a monk like a small chicken? ', 'When it is a fryer.'),
(332, 'When is a small chicken like a monk? ', 'When it is a friar.'),
(333, 'When is a barbed spear like a mistake? ', 'When it is a gaffe.'),
(334, 'When is a mistake like a barbed spear? ', 'When it is a gaff.'),
(335, 'When is a pledge or security deposit like an instrument for measuring? ', 'When it is a gauge.'),
(336, 'When is an instrument for measuring like a pledge or security deposit? ', 'When it is a gage.'),
(337, 'When is a manner of walking or running like a fence door? ', 'When it is a gate.'),
(338, 'When is a fence door like a manner of walking or running? ', 'When it is a gait.'),
(339, 'When is a horse''s fastest gait like a round dance? ', 'When it is a galop.'),
(340, 'When is a round dance like a horse''s fastest gait? ', 'When it is a gallop.'),
(341, 'When is a chromosome like a cotton twill? ', 'When it is a jean.'),
(342, 'When is a cotton twill like a chromosome? ', 'When it is a gene.'),
(343, 'What do you call a gold-plated culpable? ', 'A gilt guilt.'),
(344, 'When is an alcoholic beverage like a plural of jinni, a Muslim spirit or demon? ', 'When it is a jinn.'),
(345, 'When is a plural of jinni, a Muslim spirit or demon like an alcoholic beverage? ', 'When it is a gin.'),
(346, 'What do you call a pleasant coarse-grained metamorphic rock of feldspar, quartz and mica? ', 'A nice gneiss.'),
(347, 'When is a several antelope like a timely information? ', 'When it is a news.'),
(348, 'When is a timely information like a several antelope? ', 'When it is a gnus.'),
(349, 'When is a large ape like an irregular soldier? ', 'When it is a guerrilla.'),
(350, 'When is an irregular soldier like a large ape? ', 'When it is a gorilla.'),
(351, 'When is a to sear cook like an iron gate or door? ', 'When it is a grille.'),
(352, 'When is an iron gate or door like a to sear cook? ', 'When it is a grill.'),
(353, 'When is an appearance like a Garrison Keillor''s obsession? ', 'When it is a guys.'),
(354, 'When is a Garrison Keillor''s obsession like an appearance? ', 'When it is a guise.'),
(355, 'When is a small, eel-shaped marine fish; butterfish like an upper part of sides of a boat? ', 'When it is a gunwale.'),
(356, 'When is an upper part of sides of a boat like a small, eel-shaped marine fish; butterfish? ', 'When it is a gunnel.'),
(357, 'What do you call a robust health frozen rain? ', 'A hale hail.'),
(358, 'When is a grows from your head like a rabbit? ', 'When it is a hare.'),
(359, 'When is a rabbit like a grows from your head? ', 'When it is a hair.'),
(360, 'When is a rope bed like a low, rounded hill? ', 'When it is a hummock.'),
(361, 'When is a low, rounded hill like a rope bed? ', 'When it is a hammock.'),
(362, 'When is a garage for airplanes like a from which things hang? ', 'When it is a hanger.'),
(363, 'When is a from which things hang like a garage for airplanes? ', 'When it is a hangar.'),
(364, 'When is a stag like a blood pump? ', 'When it is a heart.'),
(365, 'When is a blood pump like a stag? ', 'When it is a hart.'),
(366, 'When is a more than one type of hay like an atmospheric obscuration due to water or dust? ', 'When it is a haze.'),
(367, 'When is an atmospheric obscuration due to water or dust like a more than one type of hay? ', 'When it is a hays.'),
(368, 'When is a narcotic like a female hero? ', 'When it is a heroine.'),
(369, 'When is a female hero like a narcotic? ', 'When it is a heroin.'),
(370, 'What do you call a white frost a prostitute? ', 'A hoar whore.'),
(371, 'When is a great stash like a great many people? ', 'When it is a horde.'),
(372, 'When is a great many people like a great stash? ', 'When it is a hoard.'),
(373, 'What do you call a rough voice equine? ', 'A hoarse horse.'),
(374, 'When is a more than one garden weeding tool like a tube for watering garden weeds? ', 'When it is a hose.'),
(375, 'When is a tube for watering garden weeds like a more than one garden weeding tool? ', 'When it is a hoes.'),
(376, 'What do you call an entirety round opening? ', 'A whole hole.'),
(377, 'What do you call an unfriendly inexpensive lodging for travelers? ', 'A hostile hostel.'),
(378, 'What do you call a funny funny bone? ', 'A humorous humerus.'),
(379, 'When is a state without guilt like a more than one innocent? ', 'When it is an innocents.'),
(380, 'When is a more than one innocent like a state without guilt? ', 'When it is an innocence.'),
(381, 'When is a precious stone like an unit of energy measure? ', 'When it is a joule.'),
(382, 'When is an unit of energy measure like a precious stone? ', 'When it is a jewel.'),
(383, 'When is a chivalrous man like a darkness? ', 'When it is a night.'),
(384, 'When is a darkness like a chivalrous man? ', 'When it is a knight.'),
(385, 'When is a handle like a rich person? ', 'When it is a nob.'),
(386, 'When is a rich person like a handle? ', 'When it is a knob.'),
(387, 'When is a fastening in cord like a nothing? ', 'When it is a naught.'),
(388, 'When is a nothing like a fastening in cord? ', 'When it is a knot.'),
(389, 'What do you call a loose discipline does not have? ', 'A lax lacks.'),
(390, 'When is a meadow like a downwind? ', 'When it is a lee.'),
(391, 'When is a downwind like a meadow? ', 'When it is a lea.'),
(392, 'When is a tells falsehoods like a stringed instrument? ', 'When it is a lyre.'),
(393, 'When is a stringed instrument like a tells falsehoods? ', 'When it is a liar.'),
(394, 'When is an instead like a British toilet? ', 'When it is a loo.'),
(395, 'When is a British toilet like an instead? ', 'When it is a lieu.'),
(396, 'When is a removing weight or darkness like a static electricity from the sky? ', 'When it is a lightning.'),
(397, 'When is a static electricity from the sky like a removing weight or darkness? ', 'When it is a lightening.'),
(398, 'When is a cargo like a mineral vein? ', 'When it is a lode.'),
(399, 'When is a mineral vein like a cargo? ', 'When it is a load.'),
(400, 'What do you call a by itself allow to borrow? ', 'A lone loan.'),
(401, 'When is a lake like a security device? ', 'When it is a lock.'),
(402, 'When is a security device like a lake? ', 'When it is a loch.'),
(403, 'When is a more than one lake like a more than one security device? ', 'When it is a locks.'),
(404, 'When is a more than one security device like a more than one lake? ', 'When it is a lochs.'),
(405, 'When is a water fowl like a crescent shape? ', 'When it is a lune.'),
(406, 'When is a crescent shape like a water fowl? ', 'When it is a loon.'),
(407, 'When is a circular pattern like a jeweler''s monocular magnifier? ', 'When it is a loupe.'),
(408, 'When is a jeweler''s monocular magnifier like a circular pattern? ', 'When it is a loop.'),
(409, 'When is an ill-gotten gains like a stringed instrument? ', 'When it is a lute.'),
(410, 'When is a stringed instrument like an ill-gotten gains? ', 'When it is a loot.'),
(411, 'What do you call an accomplished young woman? ', 'A made maid.'),
(412, 'What do you call a masculine person postal delivery? ', 'A male mail.'),
(413, 'What do you call a primary back hair? ', 'A main mane.'),
(414, 'When is a method like a lord''s house? ', 'When it is a manor.'),
(415, 'When is a lord''s house like a method? ', 'When it is a manner.'),
(416, 'When is a coarse brandy like a sign? ', 'When it is a mark.'),
(417, 'When is a sign like a coarse brandy? ', 'When it is a marc.'),
(418, 'When is a rooflike projection over a theatre entrance like a nobleman ranking between a duke and a count? ', 'When it is a marquis.'),
(419, 'When is a nobleman ranking between a duke and a count like a rooflike projection over a theatre entrance? ', 'When it is a marquee.'),
(420, 'What do you call a warlike to gather? ', 'A martial marshal.'),
(421, 'When is a ductile element like a moxie? ', 'When it is a mettle.'),
(422, 'When is a moxie like a ductile element? ', 'When it is a metal.'),
(423, 'What do you call a small one who digs? ', 'A minor miner.'),
(424, 'When is a hymn book like a projectile? ', 'When it is a missile.'),
(425, 'When is a projectile like a hymn book? ', 'When it is a missal.'),
(426, 'When is a water around a castle like a speck? ', 'When it is a mote.'),
(427, 'When is a speck like a water around a castle? ', 'When it is a moat.'),
(428, 'When is a large elk like a dessert of whipped cream and eggs? ', 'When it is a mousse.'),
(429, 'When is a dessert of whipped cream and eggs like a large elk? ', 'When it is a moose.'),
(430, 'What do you call a social imperative a mushroom? ', 'A moral morel.'),
(431, 'When is an AM like a remembering the dead? ', 'When it is a mourning.'),
(432, 'When is a remembering the dead like an AM? ', 'When it is a morning.'),
(433, 'When is a fibrous, contracting tissue like a bivalve mollusc? ', 'When it is a mussel.'),
(434, 'When is a bivalve mollusc like a fibrous, contracting tissue? ', 'When it is a muscle.'),
(435, 'When is a more than one muscle like a more than one mussel? ', 'When it is a mussels.'),
(436, 'When is a more than one mussel like a more than one muscle? ', 'When it is a muscles.'),
(437, 'What do you call a pertaining to ships and the sea pertaining to the belly button? ', 'A naval navel.'),
(438, 'When is a votes against like a horse vocalizes? ', 'When it is a neighs.'),
(439, 'When is a horse vocalizes like a votes against? ', 'When it is a nays.'),
(440, 'When is a the lowest tide like a turnip? ', 'When it is a neep.'),
(441, 'When is a turnip like a the lowest tide? ', 'When it is a neap.'),
(442, 'When is a decree like an artillery? ', 'When it is an ordnance.'),
(443, 'When is an artillery like a decree? ', 'When it is an ordinance.'),
(444, 'What do you call a light colored bucket? ', 'A pale pail.'),
(445, 'When is an it hurts like a single panel of glass? ', 'When it is a pane.'),
(446, 'When is a single panel of glass like an it hurts? ', 'When it is a pain.'),
(447, 'When is a taste like a platform for transporting goods; bed? ', 'When it is a pallet.'),
(448, 'When is a platform for transporting goods; bed like a taste? ', 'When it is a palate.'),
(449, 'When is a being willing to wait like a being willing to wait? ', 'When it is a patients.'),
(450, 'When is a being willing to wait like a being willing to wait? ', 'When it is a patience.'),
(451, 'When is a to hesitate like a cat transportation? ', 'When it is a paws.'),
(452, 'When is a cat transportation like a to hesitate? ', 'When it is a pause.'),
(453, 'When is a what hippies want like a what hippies want? ', 'When it is a piece.'),
(454, 'When is a what hippies want like a what hippies want? ', 'When it is a peace.'),
(455, 'What do you call a to edge with a chain of small loops round, luminescent gem from an oyster? ', 'A purl pearl.'),
(456, 'When is a something of value made from an irritant like a something of value made from an irritant? ', 'When it is a Perl.'),
(457, 'When is a something of value made from an irritant like a something of value made from an irritant? ', 'When it is a pearl.'),
(458, 'When is a 3.1416 like a good eating? ', 'When it is a pie.'),
(459, 'When is a good eating like a 3.1416? ', 'When it is a pi.'),
(460, 'What do you call a physiological type with thick neck, large abdomen and short limbs outdoor meal? ', 'A pyknic picnic.'),
(461, 'When is a seed-bearing organ of a flower like a hand gun? ', 'When it is a pistol.'),
(462, 'When is a hand gun like a seed-bearing organ of a flower? ', 'When it is a pistil.'),
(463, 'When is a location like a flounder? ', 'When it is a plaice.'),
(464, 'When is a flounder like a location? ', 'When it is a place.'),
(465, 'What do you call a not fancy a surface? ', 'A plain plane.'),
(466, 'When is a braid like a dish? ', 'When it is a plate.'),
(467, 'When is a dish like a braid? ', 'When it is a plait.'),
(468, 'When is a person from Poland like a big stick? ', 'When it is a pole.'),
(469, 'When is a big stick like a person from Poland? ', 'When it is a Pole.'),
(470, 'When is a the dealer''s opponent in two-handed card games like a small horse? ', 'When it is a pony.'),
(471, 'When is a small horse like a the dealer''s opponent in two-handed card games? ', 'When it is a pone.'),
(472, 'What do you call a no money careful study; microscopic hole? ', 'A poor pore.'),
(473, 'When is a disparaging term for Catholics like a miscellaneous collection? ', 'When it is a potpourri.'),
(474, 'When is a miscellaneous collection like a disparaging term for Catholics? ', 'When it is a popery.'),
(475, 'When is a priority like an established course of action? ', 'When it is a precedents.'),
(476, 'When is an established course of action like a priority? ', 'When it is a precedence.'),
(477, 'What do you call a head of school causative force? ', 'A principal principle.'),
(478, 'When is a money earned like a seer? ', 'When it is a prophet.'),
(479, 'When is a seer like a money earned? ', 'When it is a profit.'),
(480, 'When is a multiple experts like an ordinary language? ', 'When it is a prose.'),
(481, 'When is an ordinary language like a multiple experts? ', 'When it is a pros.'),
(482, 'When is a several fourths-of-gallons like a crystalline rock? ', 'When it is a quartz.'),
(483, 'When is a crystalline rock like a several fourths-of-gallons? ', 'When it is a quarts.'),
(484, 'When is a small, round fruit like a multiple quintuplets? ', 'When it is a quints.'),
(485, 'When is a multiple quintuplets like a small, round fruit? ', 'When it is a quince.'),
(486, 'When is a groove cut in a board like a small mammal? ', 'When it is a rabbit.'),
(487, 'When is a small mammal like a groove cut in a board? ', 'When it is a rabbet.'),
(488, 'When is a shelf like a wreckage? ', 'When it is a wrack.'),
(489, 'When is a wreckage like a shelf? ', 'When it is a rack.'),
(490, 'When is a what you are doing now like a small semicylindrical moulding or ornamentation? ', 'When it is a reeding.'),
(491, 'When is a small semicylindrical moulding or ornamentation like a what you are doing now? ', 'When it is a reading.'),
(492, 'What do you call an authentic armature for winding? ', 'A real reel.'),
(493, 'When is a general survey or assessment like a series of theatrical sketches or songs? ', 'When it is a revue.'),
(494, 'When is a series of theatrical sketches or songs like a general survey or assessment? ', 'When it is a review.'),
(495, 'When is a watery discharge of mucous like a partitioned space? ', 'When it is a room.'),
(496, 'When is a partitioned space like a watery discharge of mucous? ', 'When it is a rheum.'),
(497, 'What do you call a having a watery discharge of mucous colloquialism for "roommate"? ', 'A rheumy roomie.'),
(498, 'When is a seventeenth letter of Greek alphabet like a fish eggs? ', 'When it is a roe.'),
(499, 'When is a fish eggs like a seventeenth letter of Greek alphabet? ', 'When it is a rho.'),
(500, 'When is a constant compass direction like a liquor distilled from sugar cane? ', 'When it is a rum.'),
(501, 'When is a liquor distilled from sugar cane like a constant compass direction? ', 'When it is a rhumb.'),
(502, 'When is a verse with regular recurrence of sounds like a frost? ', 'When it is a rime.'),
(503, 'When is a frost like a verse with regular recurrence of sounds? ', 'When it is a rhyme.'),
(504, 'When is an one who rigs like a discipline? ', 'When it is a rigor.'),
(505, 'When is a discipline like an one who rigs? ', 'When it is a rigger.'),
(506, 'What do you call a correct ritual? ', 'A right rite.'),
(507, 'What do you call a coarse a cross? ', 'A rude rood.'),
(508, 'When is a tenant like a gossip? ', 'When it is a rumor.'),
(509, 'When is a gossip like a tenant? ', 'When it is a roomer.'),
(510, 'When is a subterranean part of a plant like a path of travel? ', 'When it is a route.'),
(511, 'When is a path of travel like a subterranean part of a plant? ', 'When it is a root.'),
(512, 'When is a pretty flower like a linear arrangement? ', 'When it is a rows.'),
(513, 'When is a linear arrangement like a pretty flower? ', 'When it is a rose.'),
(514, 'What do you call a coarse pleated collar? ', 'A rough ruff.'),
(515, 'When is a to force out like a path of travel? ', 'When it is a route.'),
(516, 'When is a path of travel like a to force out? ', 'When it is a rout.'),
(517, 'What do you call a twisted grain? ', 'A wry rye.'),
(518, 'When is a bags like a short for saxophone? ', 'When it is a sax.'),
(519, 'When is a short for saxophone like a bags? ', 'When it is a sacks.'),
(520, 'When is a wind powered water travel like a the act of selling? ', 'When it is a sale.'),
(521, 'When is a the act of selling like a wind powered water travel? ', 'When it is a sail.'),
(522, 'What do you call a mentally normal fishing net? ', 'A sane seine.'),
(523, 'When is a rowing motion like a head bone? ', 'When it is a skull.'),
(524, 'When is a head bone like a rowing motion? ', 'When it is a scull.'),
(525, 'When is a sailors like a male discharge? ', 'When it is a semen.'),
(526, 'When is a male discharge like a sailors? ', 'When it is a seamen.'),
(527, 'When is a religious factions like an if you have to ask, you''re too young? ', 'When it is a sex.'),
(528, 'When is an if you have to ask, you''re too young like a religious factions? ', 'When it is a sects.'),
(529, 'When is a slave like a breaking waves? ', 'When it is a surf.'),
(530, 'When is a breaking waves like a slave? ', 'When it is a serf.'),
(531, 'When is a strong twilled fabric like a forceful push? ', 'When it is a surge.'),
(532, 'When is a forceful push like a strong twilled fabric? ', 'When it is a serge.'),
(533, 'When is a pulley like a knife? ', 'When it is a shiv.'),
(534, 'When is a knife like a pulley? ', 'When it is a sheave.'),
(535, 'When is a displayed board bearing information like a reciprocal of the cosecant? ', 'When it is a sine.'),
(536, 'When is a reciprocal of the cosecant like a displayed board bearing information? ', 'When it is a sign.'),
(537, 'What do you call a tribe of native Americans French coin worth five centimes? ', 'A Sioux sou.'),
(538, 'What do you call a not much cunning skill? ', 'A slight sleight.'),
(539, 'What do you call a not fast blackthorn berries? ', 'A slow sloe.'),
(540, 'What do you call a lacking a soul comfort? ', 'A soulless solace.'),
(541, 'When is an only like an immortal part of a person? ', 'When it is a soul.'),
(542, 'When is an immortal part of a person like an only? ', 'When it is a sole.'),
(543, 'When is a male child like a star? ', 'When it is a sun.'),
(544, 'When is a star like a male child? ', 'When it is a son.'),
(545, 'What do you call a lit by the sun diminutive for male child? ', 'A sunny sonny.'),
(546, 'When is a black residue of burning like a clothes? ', 'When it is a suit.'),
(547, 'When is a clothes like a black residue of burning? ', 'When it is a soot.'),
(548, 'When is a trail of an animal like a single cell reproductive body? ', 'When it is a spore.'),
(549, 'When is a single cell reproductive body like a trail of an animal? ', 'When it is a spoor.'),
(550, 'When is a wooden pole like a slice of meat? ', 'When it is a steak.'),
(551, 'When is a slice of meat like a wooden pole? ', 'When it is a stake.'),
(552, 'What do you call a not moving writing paper? ', 'A stationary stationery.'),
(553, 'When is a measure taken like a level, grassy, unforested plain? ', 'When it is a steppe.'),
(554, 'When is a level, grassy, unforested plain like a measure taken? ', 'When it is a step.'),
(555, 'When is a narrow passage like a mode? ', 'When it is a style.'),
(556, 'When is a mode like a narrow passage? ', 'When it is a stile.'),
(557, 'What do you call a not crooked narrow waterway? ', 'A straight strait.'),
(558, 'When is a relief like an one who sucks? ', 'When it is a sucker.'),
(559, 'When is an one who sucks like a relief? ', 'When it is a succor.'),
(560, 'What do you call a sugary ensemble? ', 'A sweet suite.'),
(561, 'When is an ice cream with syrup on it like a first day of the week? ', 'When it is a Sunday.'),
(562, 'When is a first day of the week like an ice cream with syrup on it? ', 'When it is a sundae.'),
(563, 'When is a small nails like a governmental tithe? ', 'When it is a tax.'),
(564, 'When is a governmental tithe like a small nails? ', 'When it is a tacks.'),
(565, 'When is a spinal appendage like a story? ', 'When it is a tale.'),
(566, 'When is a story like a spinal appendage? ', 'When it is a tail.'),
(567, 'When is a wedge-shaped like a hoglike, Malaysian mammal? ', 'When it is a tapir.'),
(568, 'When is a hoglike, Malaysian mammal like a wedge-shaped? ', 'When it is a taper.'),
(569, 'When is a herbal infusion like a golfball prop? ', 'When it is a tee.'),
(570, 'When is a golfball prop like a herbal infusion? ', 'When it is a tea.'),
(571, 'When is an English slang for a ten pound note like a tendency? ', 'When it is a tenor.'),
(572, 'When is a tendency like an English slang for a ten pound note? ', 'When it is a tenner.'),
(573, 'What do you call a nervous more than one temporary shelter? ', 'A tense tents.'),
(574, 'When is a shorebird like an alloy of lead and tin? ', 'When it is a terne.'),
(575, 'When is an alloy of lead and tin like a shorebird? ', 'When it is a tern.'),
(576, 'When is a herb like a natures way of keeping everything from happening at once? ', 'When it is a time.'),
(577, 'When is a natures way of keeping everything from happening at once like a herb? ', 'When it is a thyme.'),
(578, 'When is a twitch like a small noise; parasitic bug? ', 'When it is a tick.'),
(579, 'When is a small noise; parasitic bug like a twitch? ', 'When it is a tic.'),
(580, 'When is a the sounds of a clock like a more than one twitch? ', 'When it is a tics.'),
(581, 'When is a more than one twitch like a the sounds of a clock? ', 'When it is a ticks.'),
(582, 'When is a wood for building like a musical quality? ', 'When it is a timbre.'),
(583, 'When is a musical quality like a wood for building? ', 'When it is a timber.'),
(584, 'When is an alarm like a poison? ', 'When it is a toxin.'),
(585, 'When is a poison like an alarm? ', 'When it is a tocsin.'),
(586, 'When is a more than one alarm like a more than one poisons? ', 'When it is a toxins.'),
(587, 'When is a more than one poisons like a more than one alarm? ', 'When it is a tocsins.'),
(588, 'When is a lacquered metalware like a tax or charge? ', 'When it is a toll.'),
(589, 'When is a tax or charge like a lacquered metalware? ', 'When it is a tole.'),
(590, 'When is a 2000 lbs. like a large cask? ', 'When it is a Tun.'),
(591, 'When is a large cask like a 2000 lbs.? ', 'When it is a ton.'),
(592, 'When is a cartoon personality like a song? ', 'When it is a tune.'),
(593, 'When is a song like a cartoon personality? ', 'When it is a toon.'),
(594, 'When is a sweet cake for lawyers like a sweet cake for kids? ', 'When it is a torte.'),
(595, 'When is a sweet cake for kids like a sweet cake for lawyers? ', 'When it is a tort.'),
(596, 'What do you call a difficult a stratified, porous rock? ', 'A tough tuff.'),
(597, 'When is a platter like a three; Bill Gates'' nickname? ', 'When it is a trey.'),
(598, 'When is a three; Bill Gates'' nickname like a platter? ', 'When it is a tray.'),
(599, 'When is a private soldier like a staunch colleague? ', 'When it is a trouper.'),
(600, 'When is a staunch colleague like a private soldier? ', 'When it is a trooper.'),
(601, 'When is a several soldiers like a multiple actors? ', 'When it is a troupers.'),
(602, 'When is a multiple actors like a several soldiers? ', 'When it is a troopers.'),
(603, 'What do you call a worthless flat piece moving with the air? ', 'A vain vane.'),
(604, 'When is a valley like a gauzy fabric? ', 'When it is a veil.'),
(605, 'When is a gauzy fabric like a valley? ', 'When it is a vale.'),
(606, 'What do you call a despicable narrow glass container? ', 'A vile vial.'),
(607, 'When is a bad habit like a bench-mounted clamp? ', 'When it is a vise.'),
(608, 'When is a bench-mounted clamp like a bad habit? ', 'When it is a vice.'),
(609, 'When is a cry like a welt; corduroy ridge? ', 'When it is a wale.'),
(610, 'When is a welt; corduroy ridge like a cry? ', 'When it is a wail.'),
(611, 'When is an one who is protected by a guarantee like a guarantee? ', 'When it is a warranty.'),
(612, 'When is a guarantee like an one who is protected by a guarantee? ', 'When it is a warrantee.'),
(613, 'When is a naval implement of destruction like a revere in a religious manner? ', 'When it is a worship.'),
(614, 'When is a revere in a religious manner like a naval implement of destruction? ', 'When it is a warship.'),
(615, 'What do you call a cautious light row boat? ', 'A wary wherry.'),
(616, 'What do you call a not strong seven days? ', 'A weak week.'),
(617, 'When is a skin welt like a what we in Silicon Valley continually reinvent? ', 'When it is a wheel.'),
(618, 'When is a what we in Silicon Valley continually reinvent like a skin welt? ', 'When it is a weal.'),
(619, 'When is a meteorological conditions like a castrated ram? ', 'When it is a wether.'),
(620, 'When is a castrated ram like a meteorological conditions? ', 'When it is a weather.'),
(621, 'When is a supporter of American revolution like a false hairpiece? ', 'When it is a wig.'),
(622, 'When is a false hairpiece like a supporter of American revolution? ', 'When it is a whig.'),
(623, 'When is a during like a craft? ', 'When it is a wile.'),
(624, 'When is a craft like a during? ', 'When it is a while.'),
(625, 'When is an annoying cry like a fermented grape juice? ', 'When it is a wine.'),
(626, 'When is a fermented grape juice like an annoying cry? ', 'When it is a whine.'),
(627, 'When is an insignificant amount like a cleverness; sense of humor? ', 'When it is a wit.'),
(628, 'When is a cleverness; sense of humor like an insignificant amount? ', 'When it is a whit.'),
(629, 'What do you call a least best sausage? ', 'A worst wurst.'),
(630, 'When is an oxen harness like a yellow egg center? ', 'When it is a yolk.'),
(631, 'When is a yellow egg center like an oxen harness? ', 'When it is a yoke.'),
(632, 'When is a more than one harness like an omelet? ', 'When it is a yolks.'),
(633, 'When is an omelet like a more than one harness? ', 'When it is a yokes.');

-- --------------------------------------------------------

--
-- Table structure for table `knock`
--

CREATE TABLE IF NOT EXISTS `knock` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  `rating` float NOT NULL,
  `user` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `knock`
--

INSERT INTO `knock` (`id`, `question`, `answer`, `rating`, `user`) VALUES
(1, 'Knock Knock \nWho''s there? \nOpportunity.\nDon''t be silly - opportunity doesn''t knock twice! \n\n', '', 4, 3),
(2, 'Knock knock! \nWho''s there? \nYah! \nYah who? \nNaaah, bro, I prefer google. \n\n', '', 3.66667, 3),
(3, 'Knock knock! \nWho''s there? \nAch! \nAch who? \nSounds like your coming down with a cold \n', '', 2.75, 4),
(4, 'Knock knock \nWho''s there? \nMoustache! \nMoustache who? \nI moustache you a question, but I''ll shave it for later. ', '', 0, 0),
(5, 'Knock knock!\nWho''s there?\nAnee.\nAnee,who?\nAnee one you like!', '', 0, 0),
(6, 'Knock knock!\nWho''s there?\nDozen.\nDozen who?\nDozen anybody want to let me in?', '', 0, 0),
(7, 'Knock knock\nWho''s there?\nMerry.\nMerry who?\nMerry Christmas!', '', 0, 0),
(8, 'Knock knock!\nWho''s there?\nHarry.\nHarry who?\nHarry up, it''s cold out here!', '', 3.5, 2),
(9, 'Will you remember me in 2 minutes?\nYes\nKnock knock!\nWho''s there?\nHey, you didn’t remember me!', '', 3.33333, 3),
(10, 'Knock knock\nWho''s there?\nJustin.\nJustin who?\nJustin time for dinner.', '', 2, 1),
(11, 'Knock knock!\nWho''s there?\nLuke.\nLuke who?\nLuke through the the peep hole and find out.', '', 0, 0),
(12, 'Knock knock!\nWho''s there?\nNana.\nNana who?\nNana your business.', '', 4, 7);

-- --------------------------------------------------------

--
-- Table structure for table `lol`
--

CREATE TABLE IF NOT EXISTS `lol` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  `rating` float NOT NULL,
  `user` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `lol`
--

INSERT INTO `lol` (`id`, `question`, `answer`, `rating`, `user`) VALUES
(1, 'Who says sticks and stones may break my bones, but words will never hurt me?', 'A guy who has never been hit with a dictionary.', 4, 1),
(2, 'How do you make a fire with two sticks?', 'Make sure one is a match!', 0, 0),
(3, 'Why did the banana go to the hospital?', 'Because he wasn''t peeling well !', 0, 0),
(4, 'What''s the slipperiest country?', 'Greece', 4, 2),
(5, 'Why can''t you say a joke while standing on ice?', 'Because it might crack up.', 0, 0),
(6, 'Why did the orange stop in the middle of the hill?', 'It ran out of juice!', 4, 1),
(7, 'What starts with E, ends with E and only has one letter?', 'An envelope', 0, 0),
(8, ' What nails do carpenters hate to hit?', 'Fingernails', 0, 0),
(9, 'Why is tennis such a loud game?', 'Because each player raises a racquet.', 0, 0),
(10, 'Who earns a living by driving his customers away?', 'A taxi driver.', 0, 0),
(11, 'Why was Cinderella thrown off the basketball team?', ' She ran away from the ball.', 4, 1),
(12, 'Why was the math book sad?', 'It had too many problems.', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `riddles`
--

CREATE TABLE IF NOT EXISTS `riddles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  `rating` int(11) NOT NULL,
  `user` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `riddles`
--

INSERT INTO `riddles` (`id`, `question`, `answer`, `rating`, `user`) VALUES
(1, ' Poor people have it. Rich people need it. If you eat it you die. What is it?', 'Nothing.', 4, 2),
(2, 'What comes down but never goes up?', 'Rains.', 4, 1),
(3, ' I am tall when I am young and I am short when I am old. What am I?', 'A candle.', 0, 0),
(4, 'How can a pants pocket be empty and still have something in it?', 'It can still have a hole in it.', 4, 1),
(5, 'In a one-story pink house, there was a pink person, a pink cat, a pink fish, a pink computer, a pink chair, a pink table, a pink telephone, a pink shower... everything was pink!\nWhat color were the stairs?', 'There weren''t any stairs...it was a one story house!', 0, 0),
(6, 'What is the longest word in the dictionary?', 'Smiles, because there is a mile between each ‘s’', 0, 0),
(7, 'If I drink, I die. If i eat, I am fine. What am I?', 'Fire.', 4, 1),
(8, 'What word becomes shorter when you add two letters to it?', 'Short.', 4, 1),
(9, 'What travels around the world but stays in one spot?', 'A stamp', 0, 0),
(10, ' What occurs once in a minute, twice in a moment and never in one thousand years?', 'Letter ''M''', 0, 0),
(11, 'What has 4 eyes but can''t see?', 'Mississippi', 0, 0),
(12, 'What has hands but can not clap?', 'A clock.', 0, 0),
(13, 'What can you catch but not throw?', 'A cold.', 0, 0),
(14, 'What is as light as a feather, but even the world''s strongest man couldn''t hold it for more than a minute?', 'His breath!', 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `trial`
--

CREATE TABLE IF NOT EXISTS `trial` (
  `question` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wordpair`
--

CREATE TABLE IF NOT EXISTS `wordpair` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `word` varchar(50) NOT NULL,
  `user` bigint(20) NOT NULL,
  `inserted` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `wordpair`
--

INSERT INTO `wordpair` (`id`, `word`, `user`, `inserted`) VALUES
(1, 'spring cabbage', 0, 1),
(2, 'river bank', 0, 1),
(3, 'perfect date', 0, 1),
(4, 'sharp point', 0, 1),
(5, 'green leaves', 0, 1),
(6, 'long book', 0, 0),
(7, 'gold ring', 0, 1),
(8, 'wrist watch', 0, 1),
(9, 'fast train', 0, 1),
(10, 'orange bag', 0, 1),
(11, 'musical band', 0, 1),
(12, 'electric pole', 0, 1),
(13, 'brown bark', 0, 1),
(14, 'thin arm', 0, 1),
(15, 'bank cheque', 0, 1),
(16, 'bed bug', 0, 1),
(17, 'blow dryer', 0, 1),
(18, 'tennis ball', 0, 1),
(19, 'bar graph', 0, 1),
(20, 'bar magnet', 0, 1),
(21, 'foot ball', 0, 1),
(22, 'compass box', 0, 1),
(23, 'leg calf', 0, 1),
(24, 'steel bowl', 0, 1),
(25, 'book cover', 0, 1),
(26, 'book store', 0, 1),
(27, 'bow arrow', 0, 1),
(28, 'juice can', 0, 1),
(29, 'cricket match', 0, 0),
(30, 'birth date', 0, 1),
(31, 'fair trade', 0, 1),
(32, 'cricket bat', 0, 0),
(33, 'gun fire', 0, 1),
(34, 'flat tire', 0, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
