-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 15, 2013 at 08:49 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dlcf`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'dlcf');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `questions` text NOT NULL,
  `option_A` varchar(255) NOT NULL,
  `option_B` varchar(255) NOT NULL,
  `option_C` varchar(255) NOT NULL,
  `option_D` varchar(255) NOT NULL,
  `answer` varchar(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=101 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `questions`, `option_A`, `option_B`, `option_C`, `option_D`, `answer`) VALUES
(1, 'The sum total of a people’s way of life is............................', 'Culture', 'Socialization', 'Ethnicity', 'Tradition', 'A'),
(2, 'Time and Clock;\r\nTemperature and...............................\r\n', 'Barometer', 'Thermometer', 'Speedometer', 'Pressure', 'B'),
(3, 'Choose the option nearest in meaning to the word or phrase in Italics.\r\nThe mistake brought the show to an ignominious end', 'a good', 'a palatable', 'a disgraceful', 'a satisfactory', 'C'),
(4, 'Choose the option nearest in meaning to the word or phrase in Italics.\r\nThe old woman is suffering from dementia\r\n', 'Lucidity', 'Sagacity', 'Senility', 'Insanity', 'C'),
(5, 'Choose the option nearest in meaning to the word CORRUGATED.\r\nTheir new house was roofed with CORRUGATED sheets\r\n', 'Corrupted', 'Alluninium', 'Iron', 'Folded', 'D'),
(6, 'Choose the option nearest in meaning to the word EXACERBATED\r\nHis problem was EXACERBATED by the loss of his godfather\r\n', 'Infuruated', 'Aggravated', 'Exerggerated', 'Solved', 'B'),
(7, 'Choose the option nearest in meaning to the word IMPENITENCE.\r\nThe teacher sent the boy out of the class for his impertinence\r\n', 'Cheating', 'Timidity', 'Rudeness', 'Indefferent', 'C'),
(8, 'Choose the word that is opposite in meaning to the word MERCENERY.\r\nHis father served as a Mercenary in the army.\r\n', 'Precher', 'Rugular', 'Officer', 'Recruit', 'C'),
(9, 'Choose the word that is opposite in meaning to the word HERCULEAN \r\nWhat you are asking me to do is a herculean task\r\n', 'A Lovely', 'A Demanding', 'A Strenous', 'An Easy', 'D'),
(10, 'Choose the word that is opposite in meaning to the word ANTIPATHY\r\nHis antipathy affected the growth of his business \r\n', 'Loyality', 'Respectful', 'Receptivity', 'Hostility', 'C'),
(11, 'Choose the word that is opposite in meaning to the word COERCED.\r\nThe warring communities were coerced into negotiating a settlement \r\n', 'Driven', 'Parsuaded', 'Compelled', 'Pressured', 'B'),
(12, 'Choose the word that is opposite in meaning to the word HOPEFUL \r\n\r\nBoth sides are very hopeful about the outcome of the peace talks, but observers are still very.....................\r\n', 'Emphatic', 'Realistic', 'Explicit', 'Pessimist', 'D'),
(13, 'A _________________ of cattle of Mr. Ojo’s cassava farm last week.  What a pity!  ', 'hard', 'horde', ' team  ', 'range', 'A'),
(14, 'This bunch of bananas belongs to my children:  Ajayi and Okwonkwo.  It is __________________ ', 'theirs ', 'theres ', ' their', 'their’s', 'A'),
(15, 'Have you heard that? The snake has ___________________ Comfort!', 'beaten   ', ' bit  ', 'bitten', 'bitten', 'C'),
(16, 'Find how “a” is choose a word from a - d that has ‘a’ similar pronounciation of ‘a’ as in pat.', 'hat', 'part', ' laid   ', 'bent', 'A'),
(17, 'The following Nigeria Geo-Political Zones has six(6) states each except.........................', 'North West', 'North East', 'South East', 'South South', 'C'),
(18, 'The ______________________ of Directors of this company met last Tuesday ', 'Group', 'Chief', 'Board', 'Lunch', 'C'),
(19, 'Which of these sentences is correct?', 'The dog has a cut on its right leg', 'The dog has a cut on it’s right leg', 'The dog has a cut on its’ right leg', 'The dog has a cut on it right leg', 'A'),
(20, 'Choose the word nearest in meaning\r\nJuxtapose __________   ', 'combine', 'complete ', 'contrast', 'comment', 'C'),
(21, 'Choose the word nearest in meaning\r\nIrksome __________    ', 'troublesome', ' combat', 'cartel', 'biocide', 'A'),
(22, 'Choose the word nearest in meaning\r\nDiagnose __________     ', 'sickness', 'avouch', 'dilation', 'discover', 'D'),
(23, 'Choose the word nearest in meaning\r\nJuvenile __________    ', 'youth', ' premature ', 'unripe', 'cagey', 'A'),
(24, 'Choose the word nearest in meaning\r\nAbduct __________      ', 'argue', 'kidnap', 'estrange ', 'surveillance  ', 'B'),
(25, 'Choose the word nearest in meaning\r\nEncourage __________ ', 'discuss ', 'exasperate ', 'support ', 'execrate', 'C'),
(26, 'Give the opposite in meaning \r\nReal     __________       ', 'virtual ', ' indecorous ', 'worst', ' competent', 'A'),
(27, 'Give the opposite in meaning\r\nExpensive     __________   ', 'realistic', ' cheap ', ' rare ', 'desirous', 'B'),
(28, 'Give the opposite in meaning\r\nInvest     __________          ', 'spend ', 'hide ', ' spoil ', ' harvest ', 'D'),
(29, 'Give the opposite in meaning\r\nMortal     __________         ', 'death ', ' ruin ', ' immortal ', 'irreparable ', 'C'),
(30, 'Give the opposite in meaning\r\nSincerity     __________     ', ' fraudulent ', 'decoy ', 'entice', 'deform', 'A'),
(31, 'Choose the word nearest in meaning\r\nEncourage.    __________ ', 'discuss ', 'exasperate ', 'support', 'execrate', 'C'),
(32, 'Choose the word nearest in meaning\r\nPrimary   __________       ', ' beginning ', 'main ', 'agreement ', ' kernel', 'B'),
(33, 'Choose the word nearest in meaning\r\nUnfold    __________         ', 'reveal ', 'demarcate', 'expunge ', 'expedite', 'A'),
(34, 'Choose the word nearest in meaning\r\nGovern    __________        ', ' guard ', 'guide ', 'guile ', ' guild', 'B'),
(35, 'Choose the word nearest in meaning\r\nWreck    __________         ', 'distort', ' destroy ', 'distinct ', 'discrete', 'B'),
(36, 'Choose the word nearest in meaning\r\nLinear     __________        ', 'listed ', 'leisure', ' stalk ', 'straight ', 'D'),
(37, 'Choose the word nearest in meaning\r\nClue     __________            ', 'idea ', ' inlet ', 'infringe ', 'ingrain', 'A'),
(38, 'Choose the word nearest in meaning\r\nAmateur     __________     ', 'athlete ', 'athirst', 'novice', ') loutish', 'C'),
(39, 'Choose the word nearest in meaning\r\nDue     __________              ', 'payment ', 'commitment ', 'levy ', 'obligation	', 'C'),
(40, 'Choose the word nearest in meaning\r\nScrutinize     __________    ', '  sources ', 'examine ', ') initiate ', 'booris', 'B'),
(41, 'Give the opposite in meaning \r\nStable     __________                ', 'strong', 'grounded', 'fluctuate', 'fluid	', 'C'),
(42, 'Give the opposite in meaning\r\nJust     __________             ', 'unfair ', 'faith ', ' crook ', ' slothful', 'A'),
(43, 'Give the opposite in meaning\r\nHardworking     _______', ' sleepy ', 'lazy ', ' rotten ', ' talkative', 'b'),
(44, 'Give the opposite in meaning\r\nCunning    __________   ', ' preferable ', 'straightforward', 'concerning ', ' watchful', 'B'),
(45, 'Give the opposite in meaning\r\nJovial     __________      ', 'friendly ', 'joking', ' shouting ', 'unfriendly ', 'D'),
(46, 'Give the opposite in meaning\r\nDeter ________________', 'encourage ', ' enrage ', 'endow ', 'enlist', 'A'),
(47, 'Give the opposite in meaning\r\nVile _______________     ', ' foul ', 'lavish', ' pleasant ', ' formidable', 'C'),
(48, 'Prevention is better than', 'cure', 'core', 'cold', ' chore', 'A'),
(49, 'Left-handedness is a form of', 'living', ' orientation', 'intelligence', ' learning', 'B'),
(50, 'A bird in hand is better than ten in the ', ' cage', 'kitchen', 'bush	', 'zoo	', 'C'),
(51, 'To whom much is given, much is ', ' lent', 'expected', 'borrowed', 'lost	', 'B'),
(52, 'The economy of the country has gone haywire, moving from pillar to pole and from frying pan ', ' water', 'pit', 'fire', 'stove', 'C'),
(53, 'From a little acorn grows the mighty', 'coke', 'oak', 'ocean', 'cold	', 'B'),
(54, 'A stitch in time saves', ' five', 'six', 'nine', 'ten', 'C'),
(55, 'The cock crows at ', 'dusk', ' dawn', 'down', 'night', 'B'),
(56, 'Expression deepens', 'expansion', 'impression', 'extension', 'selection', 'B'),
(57, 'Someone who starts an event too soon is said to be jumping the', ' gate', 'gun', 'gutter', 'rail', 'B'),
(58, 'To recommend a course of action is to', 'advice	', 'advise', 'advocate', ' advertise', 'B'),
(59, 'It is good to save for the', 'sunny day', 'rainy day', 'dry day', 'windy day', 'B'),
(60, '“It is nothing but good” means that the thing is', 'bad', 'good', 'tall', 'short', 'B'),
(61, 'In order to separate the girls the Policeman stood-----them', 'between  ', 'among  ', 'against', 'with ', 'A'),
(62, 'He asked her----- ', 'is the food ready   ', 'if the food was ready    ', 'that is the food ready     ', 'whether the food is ready                                  ', 'B'),
(63, 'Jumai was still------ bed when her mother returned from the market', '. at    ', 'in', 'on', 'by ', 'B'),
(64, 'The weather in Ilorin is very cold------- harmattan.', 'by ', 'in  ', 'at ', 'on ', 'C'),
(65, 'There is every reason for you to believe _______________ I have said', 'all that      ', 'all what     ', 'all which   ', 'all those', 'A'),
(66, 'My uncle was not sure ___________ the strange guest were', 'which ', 'who ', 'whom', 'what	', 'C'),
(67, 'It is high time you __________ crying, the woman told her daughter ', 'stop  ', 'should stop    ', 'stopped', 'must stop ', 'A'),
(68, 'If you don’t help me wash these clothes, I _____________to help with your homework  ', 'shan’t be able         ', 'shouldn’t be able     ', 'haven’t be able  ', 'couldn’t be able.', 'A'),
(69, 'You are _____________ for having that painful experience ', 'none the best    ', 'none the worst   ', 'none the worse  ', 'none the less	', 'C'),
(70, 'He is Mr. Bello’s son ______________?  ', 'isn’t he     ', 'isn’t it     ', 'is it    ', 'he is', 'A'),
(71, 'The teacher took me for one of those students who could spell such words as', 'miscelanous and maintenance', 'miscelaneous and  meintainance', 'miscellaneous and maintenance’', 'miscellaneous and  maintainance’', 'C'),
(72, 'Which of the following should appear first alphabetically?', 'Able', 'Abel', 'Abbel', 'Aply', 'C'),
(73, 'God should take control of the heart of the organizers of this Post-UME screening  	exercise, They should not make the test …………….. than  UME ', 'more tough', 'more tougher', 'much tougher', 'much more tougher', 'C'),
(74, 'Complete the following statement with the most appropriate of the options.\r\nIs this the pencil you bought for me?\r\n', 'No, it is   ', 'No, it was ', 'Yes, it is ', 'Yes, it isn’t  ', 'C'),
(75, 'Complete the following statement with the most appropriate of the options.\r\nThe statement, We have lost a gem, is best re-written as, A gem ……… lost. \r\n', 'has been   ', 'have been ', 'is being ', 'was ', 'A'),
(76, 'Choose the word that is the most appropriate to complete the statement ……………….. UMTE students are busy studying.\r\n', 'all the  ', 'one another ', 'each other ', 'themselves', 'A'),
(77, 'Fill the blank space to complete the order of arrangement.\r\n        Principal, Vice Principal Academic, Vice Administration,……………..\r\n', 'students', 'prefects', 'teachers', 'messenger', 'C'),
(78, 'choose a word which means the same or nearly the same as the word in capital letter. CLOTH', 'lace', 'wool', 'silk	', 'textile', 'D'),
(79, 'choose a word which means the same or nearly the same as the word in capital letter. OCCASSIONALLY', 'once in a while', ' never', 'often', 'always', 'A'),
(80, 'choose a word which means the same or nearly the same as the word in capital letter. HARSH', 'severe', 'kind	', 'cruel', 'gentle', 'C'),
(81, 'choose a word which means the same or nearly the same as the word in capital letter\r\n UNEASY\r\n', 'quite', 'disturbed', ' happy', 'engaged', 'B'),
(82, 'Choose the preposition which best completes each sentence.  24.	\r\nShe prides herself _______ her cooking.', 'about', 'on', 'for', ' In', 'C'),
(83, 'What is the missing number in the following 1, 3, 7 ____, 21', '10', '13', '14', '19', 'B'),
(84, 'If 3 sister share a sum of N300  in a  ratio of 2:3:5. What amount will the second sister get?', '90', '60', '50', '80', 'A'),
(85, 'If two dice were tossed, What is the probability of selecting an even number?', '2/3', '1/2', '1/3', '2/5', 'B'),
(86, 'A class consist of 100 pupils, if 50 pupils offer history, and 10 offer both History and Maths. How many pupil off Maths only?', '70', '60', '50', '40', 'A'),
(87, 'Every male and female athlete _____ for gold ', 'compete ', 'competes ', 'are competing', 'none of the above.', 'A'),
(88, 'What is the median of the following set of Numbers? 2, 1, 3, 5, 8, 6, 7, 9, 10.', '7', '5', '6', '10', 'C'),
(89, 'What is the mode of the following set of numbers? 2,2,2,3,1,1,1,2,4,5,6,2', '1', '4', '2', '6', 'C'),
(90, '10 birds are on a fence, one thought of flying to the ground. How many bird(s) will be remaining on the fence.', ' 1', '10', '9', '0', 'B'),
(91, 'Which of this is odd', 'Law', 'Science', 'Art ', 'Physics', 'D'),
(92, 'How may local government does Nigeria has', '772', '773', '774', '775', 'C'),
(93, 'The place where weapons are kept is referred to as', 'Arsenal', 'Showroom', 'Boutique', 'Danger Zone', 'A'),
(94, '4, 8, 12, _, _, 24, 28', '14, 18', '18, 20', '16, 20', '12, 16', 'C'),
(95, 'If December 25 falls on a tuesday, then January 1 will be on a ____________', 'Monday', 'Tuesday', 'Wednesday', 'Friday', 'B'),
(96, 'The smallest unit of language is _________', 'Clause', 'Phrase', 'Sentence', 'Morpheme', 'D'),
(97, 'Bill Gates is referred to as the father of Microsoft as _________is referred to as the father of electricity', 'Albert Einstein', ' Michael Faraday', 'Sir Isaac Newton', ' Lord Rutherford', 'B'),
(98, 'Red is to Law, Yellow is to science, what color is to art', ' Brown', 'Ash', ' Green', 'Purple', 'B'),
(99, '___________is a place where an aeroplane is kept', 'Park', 'Hangar', 'Safe House', 'Airport', 'B'),
(100, 'You have 5 phones and someone asks you for two, how many will remain with you', '3', '4', '5', '1', 'C');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE IF NOT EXISTS `result` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `matric_number` varchar(10) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `result` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `matric_number` (`matric_number`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `matric_number`, `fullname`, `result`) VALUES
(1, '35834012fh', 'Abioye Iyanu Damilola', 80),
(2, '391601021A', 'BAMIDELE ADEJOKE', 18),
(3, '37196317ED', 'RUTH OYIKEKE', 70),
(4, '35506731GG', 'OREOFE OLAYEMI', 60),
(5, '39110783BF', 'OMOLEYIN JANET AHOEFA', 70),
(8, '372o8911jb', 'deborah', 58),
(9, '35866645db', 'Abdulmaleek O Sherifah', 48),
(10, '1234567890', 'abiodun dairo', 53),
(11, '3333333333', 'fidelis', 0),
(13, '36565438bg', 'b', 10),
(18, '29009999py', 'ajah fidelis', 0),
(19, '35182895cc', 'ifekoya toluwani dorcas', 75),
(20, '23567658ty', 'BAMIDELE ADEJOKE', 25),
(21, '23456879we', 'ossai esther', 43),
(22, '37073455cj', 'aluko damilola dunjoye', 38),
(23, '35035120eh', 'atamamhe blessing', 38),
(24, '35666946FG', 'ekebuisi', 48),
(25, '15678559uj', 'jedidiah', 78),
(26, '', '', 0),
(31, '39160102ia', 'BAMIDELE ADEJOKE', 48);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
