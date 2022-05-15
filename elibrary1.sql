-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 03, 2014 at 04:19 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `elibrary`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL auto_increment,
  `category_name` varchar(110) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `visibility` int(2) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `logo`, `visibility`) VALUES
(1, 'kiddies', '1387776387es_icon.png', 1),
(2, 'primary', '1387776403ry.png', 1),
(3, 'junior secondary school', '1387776423dary.png', 1),
(4, 'senior secondary school', '1387776436r.png', 1),
(5, 'tertiary', '13880659500130330-00562.jpg', 1),
(6, 'general', '1387776472al.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `do_you_know`
--

CREATE TABLE `do_you_know` (
  `id` int(11) NOT NULL auto_increment,
  `description` varchar(200) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `content` text character set utf8 NOT NULL,
  `logo` varchar(100) NOT NULL,
  `visibility` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `do_you_know`
--

INSERT INTO `do_you_know` (`id`, `description`, `subject`, `content`, `logo`, `visibility`) VALUES
(1, 'in the beging the earth was still until a body or a mass acted upon it', 'Geography', 'completely compiled.txt', '1387796431.jpg', 1),
(2, '12345678910 1234567890<br/>', 'latest Expendit', 'The Elecom committee began a 3 weeks voters registration in which all the voters that took part in the last minna emirate youth association elections for the year 2013/2014.\r\nIn the last election the Elecom committee made the following expenditure \r\nïƒ¼	Printing of the voters registration forms : 180 pieces of the voters registration form was printed at the cost of 20 naira per piece.\r\nThe total used in printing the voters registration form is 3,600 naira \r\nïƒ¼	Printing of the first batch of the aspiration forms: the committee printed\r\nïƒ¼	 5 presidential forms at cost of 1500 naira\r\nïƒ¼	2 welfare forms at the cost of 600 naira\r\nïƒ¼	2 asst. welfare forms at the cost of 600 naira\r\nïƒ¼	 3 vice president forms  at the cost of 900 naira\r\nïƒ¼	2 financial sectary forms at the cost of 600 naira\r\nïƒ¼	2 asst. financial sectary forms at the cost of 600 naira\r\nïƒ¼	2 sectary general  forms  at the cost of 600 naira\r\nïƒ¼	2 asst. sectary general form at the cost of 600 naira\r\nïƒ¼	2 pro1 forms at the cost of 600 naira\r\nïƒ¼	2 pro2 forms at the cost of 600 naira.\r\nïƒ¼	Transportation and airtime =500 naira\r\nThe total used in printing the first part of the aspiration form is 7,700 naira.\r\nOn the 13 of  August 2013 the Elecom committee official spent 300 naira on feeding\r\nAlso on the 14 of the same month the committee spent 300 naira on feeding \r\nOn the 15th of the same month the committee spent 800 naira on feeding \r\nOn the 16th of the above mentioned month the committee spent 800 naira on feeding\r\nAlso 250 naira was spent on the hard cover note book which was used as the register of voters in the registration venue.\r\n200 hundred naira recharge card issued out to the chairman for information dissemination before the manifestation day.\r\n800 naira was also spent on feed the committees members at registration venue\r\n200 naira recharge card was also issued out to the chairman.\r\n800 naira was used for feeding \r\nOn the election day \r\n500 naira was issued out for ballot box\r\nAlso 4000 was issued out for the feeding and refreshment of the security agencies present at the election venue\r\n6000 naira was issued out for the printing of the ballot papers used on the election day in full color separation.\r\n', '1387796441.jpg', 1),
(3, 'MINNA EMIRATE YOUTH ASSOCIATION\r\nELECOM COMMITTEE\r\nBREAK DOWN OF EXPENDITURE FOR THE 2013/2014 ELECTION YEAR.\r\nThe Elecom committee began a 3 weeks voters registration in which all the voters that too', 'ibu jpuuk', 'MINNA EMIRATE YOUTH ASSOCIATION\r\nELECOM COMMITTEE\r\nBREAK DOWN OF EXPENDITURE FOR THE 2013/2014 ELECTION YEAR.\r\nThe Elecom committee began a 3 weeks voters registration in which all the voters that took part in the last minna emirate youth association elections for the year 2013/2014.\r\nIn the last election the Elecom committee made the following expenditure \r\nïƒ¼	Printing of the voters registration forms : 180 pieces of the voters registration form was printed at the cost of 20 naira per piece.\r\nThe total used in printing the voters registration form is 3,600 naira \r\nïƒ¼	Printing of the first batch of the aspiration forms: the committee printed\r\nïƒ¼	 5 presidential forms at cost of 1500 naira\r\nïƒ¼	2 welfare forms at the cost of 600 naira\r\nïƒ¼	2 asst. welfare forms at the cost of 600 naira\r\nïƒ¼	 3 vice president forms  at the cost of 900 naira\r\nïƒ¼	2 financial sectary forms at the cost of 600 naira\r\nïƒ¼	2 asst. financial sectary forms at the cost of 600 naira\r\nïƒ¼	2 sectary general  forms  at the cost of 600 naira\r\nïƒ¼	2 asst. sectary general form at the cost of 600 naira\r\nïƒ¼	2 pro1 forms at the cost of 600 naira\r\nïƒ¼	2 pro2 forms at the cost of 600 naira.\r\nïƒ¼	Transportation and airtime =500 naira\r\nThe total used in printing the first part of the aspiration form is 7,700 naira.\r\nOn the 13 of  August 2013 the Elecom committee official spent 300 naira on feeding\r\nAlso on the 14 of the same month the committee spent 300 naira on feeding \r\nOn the 15th of the same month the committee spent 800 naira on feeding \r\nOn the 16th of the above mentioned month the committee spent 800 naira on feeding\r\nAlso 250 naira was spent on the hard cover note book which was used as the register of voters in the registration venue.\r\n200 hundred naira recharge card issued out to the chairman for information dissemination before the manifestation day.\r\n800 naira was also spent on feed the committees members at registration venue\r\n200 naira recharge card was also issued out to the chairman.\r\n800 naira was used for feeding \r\nOn the election day \r\n500 naira was issued out for ballot box\r\nAlso 4000 was issued out for the feeding and refreshment of the security agencies present at the election venue\r\n6000 naira was issued out for the printing of the ballot papers used on the election day in full color separation.\r\n', '1387796421.jpg', 1),
(4, 'hello good morning ', 'good morning', '<P>In the following steps I will show you how to create a poster theme \r\nillustration in Adobe Illustrator.&nbsp;Considering these tips can also be a \r\ngreat idea in poster printing designs. First, you will have to follow the \r\nprevious tutorial on <A href="http://skyje.com/2011/05/create-an-audio-speaker-in-illustrator/">how \r\nto create the speaker illustration</A>. Next, using various techniques and \r\neffects you will reach the final illustration shown in the image below.</P>\r\n<H3>Tutorial Details</H3>\r\n<UL>\r\n  <LI>Difficulty: Intermediate</LI>\r\n  <LI>Estimated Completion Time: 1 hour 30 minutes</LI>\r\n  <LI>Number of Steps: 27</LI></UL>\r\n<P>This is What You’ll Be Creating</P>\r\n<P><A href="Create%20a%20Poster%20Theme%20Illustration%20in%20Illustrator_files/techno00.jpg"><IMG \r\nwidth="600" title="step00" alt="step00" src="Create%20a%20Poster%20Theme%20Illustration%20in%20Illustrator_files/techno00.jpg"></A><SPAN \r\nid="more-7888"></SPAN></P>\r\n<H3>Step 1</H3>\r\n<P>Create a 610 by 660, RGB document. First, copy the speaker illustration \r\ncreated in the previous tutorial and place it in the middle of your artboard. \r\nNext, grab the Rectangle Tool(M), create a shape the size of your artboard and \r\nSend it to Back (Shift + Control + [ ). Fill it with R=45 G=45 B=45 then open \r\nthe fly-out menu of the Appearance panel and click on Add New Fill. This will \r\nadd a second fill for your shape. Select it from the Appearance, make it black, \r\nlower its opacity to 20%, change the blending mode to Multiply then go to Effect \r\n&gt; Artistic &gt; Film Grain. Enter the data shown below, click OK then add a \r\nthird fill for this shape. You will need a nice pattern for this new fill. Open \r\nthe fly-out menu of the Swatches panel and go to Open Swatch Library &gt; \r\nPattern &gt; Basic Graphics &gt; Basic Graphics_Textures. Reselect the third \r\nfill, lower its opacity to 25%, change the blending mode to Overlay then use the \r\nUSGS 20 Scrub pattern. In the end your shape should look like in the following \r\nimage. Lock it to make sure that you won''t accidentally select/move it.</P>\r\n<P><A href="Create%20a%20Poster%20Theme%20Illustration%20in%20Illustrator_files/techno01.jpg"><IMG \r\nwidth="600" title="step1" alt="step1" src="Create%20a%20Poster%20Theme%20Illustration%20in%20Illustrator_files/techno01.jpg"></A></P>\r\n<H3>Step 2</H3>\r\n<P>Select the speaker shape and make a copy in front (Control + C &gt; Control + \r\nF). Select this copy and hit the D button. This will add the default properties \r\n(white fill and black stroke) for this new shape. Remove the stroke then go to \r\nObject &gt; Path &gt; Offset Path. Enter a 16px Offset then click OK. Delete the \r\noriginal shape then select the resulting shape. First, send it backward (Control \r\n+ [ ) then go to Effect &gt; Stylize &gt; Outer Glow. Enter the data shown below \r\nimage #3 then click OK. Duplicate this shape (Control + C &gt; Control + F) then \r\nselect this copy and bring it to front (Shift + Control + ]). Now, let’s focus \r\non this fresh shape. First, remove the Outer Glow effect then replace the \r\nexisting fill color with the radial gradient shown below image #4. The yellow \r\nnumber from the gradient image stands for opacity percentage. Next, lower its \r\nopacity to 50% and change the blending mode to Overlay then go to Effect &gt; \r\nBlur &gt; Gaussian Blur. Enter a 10px radius then click OK.</P>\r\n', '1387795588.jpg', 1),
(5, 'hnguskjbgdvoy', 'jyhuikugc', 'mysql injection 1.pdf', '', 1),
(8, 'A fraction is a part of a complete or whole object. E.g. an orange sliced into two equal parts, one part is referred to as half of the orange ', 'Mathematics', 'FRACTIONS\r\nA fraction is a part of a complete or whole object. E.g. an orange sliced into two equal parts, one part is referred to as half of the orange expressed as  ½.\r\nAlso an orange could be sliced into three equal parts where one part is one-third, two is two-third.\r\nExpressed as 1/3 and 2/3\r\nFractions are divided into complex and simple fractions. i.e. ½, 1/3, 3/5, 2/5 etc as simple fractions and 10/5, 15/60, 25/100 etc\r\nIn other words the complex fractions could be reduced to their simplest forms.\r\nSimplifying a fraction\r\nMeans to reduce a fraction to its simplest form make it as simple as possible. For instance 4/8, 3/9.\r\n•	Get a whole orange slice it into 8 equal parts \r\n•	The first four forms a fraction of the 8 i.e. 4/8 (four –eight)\r\n•	Taking the four- eight and slicing them again into two you have another fraction of the remaining four i.e. 2/4 (two-fourth or two-quarter)\r\n•	Finally we could slice the two quarter into two and that gives us the final simplification where one part is a half of the other i.e. ½.\r\n\r\nRATIOS\r\nMeans for every amount of one thing, how much of another thin exists. For instance if one has 8 oranges and 6 mangoes in a bowl, the ratio of mangoes to oranges is 6:8 while the ratio of the orange to the mangoes is 8:6.\r\nRatio is expressed as 6 to 8 or 6:8\r\nRatios could also be converted into fractions\r\n8:6 = 8/6 simplified to 4/3\r\n6:8 = 6/8 simplified to ¾\r\nRatio could be used to share an object between group of persons. For instance, an amount of money can be shared between two brothers, so also jobs or food to avoid mis-understanding.\r\nExample\r\n•	If Ahmed is 15 years old and his younger brother 10 years old, the ratio of their age is 15:10 reduced/simplified to 3:2\r\nIf uncle Bala gives Ahmed and Abu 10 oranges, share the oranges between them using the ratio of their age.\r\n1st the sum of their age is 15 + 10 = 25 same as saying 3 +2 =5\r\nAhmed is 15 reduced to 3 while Abu is 10 reduced to 2\r\nAhmed will get 15/25 or 3/5 of the 10 while Abu gets 10/25 or 2/5 of the 10\r\n   \r\n\r\n\r\n\r\n\r\n\r\n\r\n•	Divide the 10 oranges into 5 equal parts and label 3 parts of ech of the oranges A for Ahmed\r\n•	From the 10 oranges you discover Ahmed gets 30 pcs\r\n•	Arrange the 30 pcs to form whole oranges of 5 parts\r\n•	Now you have 6 whole oranges for ahmed\r\nSimilarly,\r\n•	you collect every other parts lablled B for Abu\r\n•	and from the 10 oranges Abu gets 20 pieces\r\n•	arrange the 20pcs to form whole oranges of 5 parts\r\n•	you discover Abu gets 4 whole oranges\r\n\r\n3/5 of 10  3/5 * 10 =6\r\n2/5 of 10  2/5 *10 = 4\r\n\r\n\r\nPROBABILITY\r\nYou can’t predict the future but you can use mathematical probability to determine how likely it is that something will or will not take place\r\nThe study of probability helps to figure out the likelihood of something happening. For instance,when you roll a pair of dice, pick a card from a deck, the toss of coin at the start of a football game.\r\nSuppose we have a jar with 4 red balls and 6 blue balls in it. Find the probability of picking a ball at random.\r\nYou should also know that at random all the balls have equal chances of being picked\r\nTherefore the possibility of picking a red ball is the ratio of the 4 red balls to the total number of balls in the jar which is 10\r\nSimilarly, Probability =       number of favorable outcomes\r\n		              -------------------------------------------------\r\n		               Total number of possible outcomes\r\n•	A favourable outcome is actually picking a ed ball	\r\n•	The total number of possible outcomes is a set called sample space which consist of all 10 balls in the jar\r\n\r\n\r\nSET THEORY\r\nLet’s start with a simple illustration of activities which take place at home. A mother who is suppose to go the market site down to analyze what the home needed, then she writes down; tomatoes, pepper, meat, oil, magi etc on a piece of paper. We call that purchase list, to avoid walking around the market. Then she will also arrange the items in an order depending on which store she is to enter first from the entrance to exit.\r\nIn mathematics, the purchase list is also called List, however, a set is even simpler; the order of the item is not important, and each kind of product is written once, one time in a set. For instance, a purchase list could be in this form [meat, fish, pepper, tomatoes, onions, salt] while a set is just similar, {meat, fish, pepper, tomatoes, onions, salt}.\r\nFor a set we use curly brackets, to stress that a set is not a list. Because the order of the items is not important in a set, all set with other orders yet same items are the same;\r\n {meat, fish, pepper, salt, tomatoes} = {tomatoes, meat, pepper, salt, fish}\r\nWhat is called an item in a list is called an element in a set. To save writing and make reading easier we use small letters for the elements of a set. Large letters (capital) for the sets i.e. A = {m, f, p, t, s}\r\nThe symbol = means whenever we want to use A in a calculation we can also use {m, f, p, t, s}. \r\nA set theory therefore could be defined \r\n•	As a set of elements, all the elements of a set are written between curly brackets.\r\n•	Each element is different from all other elements in a set.\r\n•	The order of the elements does not matter\r\n', '1387796412.jpg', 1),
(9, ' 	A fraction is a part of a complete or whole object. E.g. an orange sliced into two equal parts, one part is referred to as half of the orange ', 'baby gal behind a hut lets go dia', 'MINNA EMIRATE YOUTH ASSOCIATION ELECOM COMMITTEE BREAK DOWN OF EXPENDITURE FOR THE 2013/2014 ELECTION YEAR. The Elecom committee began a 3 weeks voters registration in which all the voters that too', '1387797423hot_20131129_4.JPG', 1),
(10, 'A fraction is a part of a complete or whole object. E.g. an orange sliced into two equal parts, one part is referred to as half of the orange', 'vennesa', 'hnguskjbgdvoy 	0 		Turn On Visibility 	Turn Off Visibility 	Delete 	Upload Logo\r\n6 	Mathematics 	A fraction is a part of a complete or whole object. E.g. an orange sliced into two equal parts, one part is referred to as half of the orange 	1 		Turn On Visibility 	Turn Off Visibility 	Delete 	Upload Logo\r\n7 	baby gal behind a hut lets go dia 	A fraction is a part of a complete or whole object. E.g. an orange sliced into two equal parts, one part is referred to as half of the orange ', '1387797473hot_20131129_3.JPG', 1),
(11, 'A fraction is a part of a complete or whole object. E.g. an orange sliced into two equal parts, one part is referred to as half of the orang', 'kadmus', 'A fraction is a part of a complete or whole object. E.g. an orange sliced into two equal parts, one part is referred to as half of the orange 	1 		Turn On Visibility 	Turn Off Visibility 	Delete 	Upload Logo\r\n7 	baby gal behind a hut lets go dia 	A fraction is a part of a complete or whole object. E.g. an orange sliced into two equal parts, one part is referred to as half of the orange 	0 		Turn On Visibility 	Turn Off Visibility 	Delete 	Upload Logo\r\n8 	vennesa 	A fraction is a part of a complete or whole object. E.g. an orange sliced into two equal parts, one part is referred to as half of the orang', '1387797318.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `featured_image`
--

CREATE TABLE `featured_image` (
  `id` int(11) NOT NULL auto_increment,
  `featured_id` int(11) NOT NULL,
  `picture` varchar(200) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `featured_image`
--

INSERT INTO `featured_image` (`id`, `featured_id`, `picture`) VALUES
(1, 1, '1387963565re.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `featured_this_week`
--

CREATE TABLE `featured_this_week` (
  `id` int(11) NOT NULL auto_increment,
  `description` text NOT NULL,
  `subject` varchar(100) NOT NULL,
  `content` text character set utf8 NOT NULL,
  `visibility` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `featured_this_week`
--

INSERT INTO `featured_this_week` (`id`, `description`, `subject`, `content`, `visibility`) VALUES
(1, '<p>It&acute;s a concept that can be difficult to come to terms with, but like it or not our intellect (or our perceived intellect) can often work against us in life. The indications are all there once you have the eyes to see them. Have you fell into the &quot;I think I&acute;m too smart for my own good&quot; trap? Hello!!! Don&acute;t worry the big part of correcting a mistake is realizing it exists! Check out these 5 signs you are not as smart as you think you are and see if any or all apply to you. Coming quickly to terms with them and correcting this kind of self-defeating behavior can make you truly smarter fast! And perhaps more importantly, much happier too.<p>', '5 Signs You Are Not as Smart as You Think', '<center><b>PROBABILITY.</b></p><br/>\r\n<p>You can&acute;t predict the future but you can use mathematical probability to determine how likely it is that something will or will not take place</p><br/>\r\n<p>Probability is a measure or estimate of likelihood of occurrence of an event. Probabilities are given a value between 0 (0% chance or will not happen) and 1 (100% or will happen). The higher the degree of probability, the more likely the event is to happen, or, in a longer series of samples, the greater the number of times such event is expected to happen.</p><br/>\r\n<p>People often use probability to make better choices in their lives. But unfortunately, if we don&acute;t use common sense we could easily fall prey to highly unlikely get rich-quick schemes (419). Interestingly we use probability in our daily life.</p><br/>\r\n<p>Sports</p><br/>\r\n<p>When your team has a coin toss before the start of a football match to determine who play first and on which side, you have a 50/50 chance of winning it, it&acute;s either a head or tail. In a football match, your player tries for a field goal when they think the distance to the goal is close enough that he&acute;ll likely score.</p><br/>\r\n<p>Board games</p><br/>\r\n<p>If you are using a game spinner with four sections; Red, blue, green and yellow, you have 25% chance of landing on red, since one of the four sections is red.</p><br/>\r\n<p>In Ludo games, what is the possibility you will get an even number? You have 50% chance since three of the six numbers on a die are even.</p><br/>\r\n<p>Medical decision</p><br/>\r\n<p>If you are told you have a surgery, you will want to know, doctor what is our chance of survival? i.e. success rate of the operation. You may decide to have the operation or medication based on other patients’ positive outcomes or side effects.</p><br/>\r\n<p>Insurance premiums</p><br/>\r\n<p>Care insurance companies look at your age and driving record when deciding your premium rates, if they see you had several accidents, the likelihood is that you might have another one. Therefore, your rate may be higher than a safe driver.</p><br/>\r\n<p>Life expectancy</p><br/>\r\n<p>In comparisons to predecessors and most recent cases, the use of the number of years similar groups have worked together in the past could be useas guidelines by financial advisers to help workers to prepare for retirement years.</p><br/>\r\n<p>Weather</p><br/>\r\n<p>If you are planning an outdoor event such as wedding, you will want to check the probability that it will rain. Weather forecasts are based upon patterns that have occurred in previous years, temperatures and natural disasters.</p><br/>\r\n<p>The study of probability helps to figure out the likelihood of something happening. For instance, when you roll a pair of dice, pick a card from a deck, the toss of coin at the start of a football game.</p><br/>\r\n<ul>\r\n<li>The probability that an event will occur can be expressed as a fraction or a decimal from 0 to 1.</li>\r\n<li>The event that are likely will have a probability close to 1.</li>\r\n<li>The events that are unlikely will have a probability close to 0</li>\r\n</ul>\r\n<p>To calculate the probability of an event, it is</p><br/>\r\n	Important to identifyall the different outcomes that could occur.</p><br/>\r\n<p>In the question about the die, you must find out all the different ways the die could land, and all the different ways you could roll a seven.</p><br/>\r\n<p>\r\n	When you are calculating for example an infinite number say 5.0724 between 1 and 10 the probability is 0 but it could still happen</p><br/>\r\n\r\n<p>Example:</p><br/>\r\n<p>Suppose we have a jar with 4 red balls and 6 blue balls in it. Find the probability of picking a ball at random.</p><br/>\r\n<p>You should also know that at random all the balls have equal chances of being picked</p><br/>\r\n<p>Solution</p><br/>\r\n<p>Therefore the possibility of picking a red ball is the ratio of the 4 red balls to the total number of balls in the jar which is 10</p><br/>\r\n<p>Similarly, Probability =       number of favorable outcomes\r\n		<hr></hr> Total number of possible outcomes\r\n<ul>\r\n<li>A favorable outcome is actually picking a red ball</li>	\r\n<li>The total number of possible outcomes is a set called sample space which consist of all 10 balls in the jar</li>\r\n</ul>\r\n<p>Therefore, the probability P(R) of picking a red ball where all outcome are equally likely is</p><br/>\r\nP(R) = 4/10 = 2/5\r\n<p>In decimal is 0.4</p><br/>\r\n<p>In percentage 40/100 = 40%</p><br/>\r\n\r\n<p>Example:</p><br/>\r\n<p>Suppose we number the balls 1 to 10, what is the probability of picking out the number 5?</p><br/>\r\n\r\n<p>Solution</p><br/>\r\n<p>There is only one 5 ball and there are are still 10 balls in the jar so,</p><br/>\r\n<p>Favorable outcomes = 1</p><br/>\r\n<p>Total number of possible outcomes = 10</p><br/>\r\n				P (5) = 1/10 = 10%\r\n\r\n\r\n<p>Note</p><br/>\r\n<ul>\r\n<li>What is a sample space?</li>\r\n<p>A sample space is a set consisting of all the possible outcomes of an event e.g. picking a ball from a jar, or picking a card from a deck.</p><br/>\r\n\r\n<li>Total number of possible outcomes is the number of different ways you can chose something from the sample space.</li>\r\n\r\n<li>Because each probability is a fraction of the sample space, the sum of the probabilities of all the possible outcomes equals to 1.</li>\r\n\r\n</li>Therefore, the probability of the occurrence of an event P(R) is one minus the probability that it does not occur or happen.</li>\r\n\r\n<p>Example:</p><br/>\r\n			P (R) + P (B) = 1\r\n			4/10 + 6/10 = 1\r\n			P (not red) = 1 - 4/10=  6/10\r\n\r\n\r\n\r\n\r\n', 1);

-- --------------------------------------------------------

--
-- Table structure for table `forumn_reg`
--

CREATE TABLE `forumn_reg` (
  `id` int(11) NOT NULL auto_increment,
  `fname` varchar(100) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `school` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL,
  `phone_number` varchar(40) NOT NULL,
  `email` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `forumn_reg`
--

INSERT INTO `forumn_reg` (`id`, `fname`, `sname`, `school`, `location`, `phone_number`, `email`, `department`, `username`, `password`) VALUES
(1, 'mustapha', 'suleiman', 'futminna', 'minna niger state', '07068771913', 'musty4real2@gmail.com', 'css', 'mustyreal2', '12345'),
(3, 'mustapha', 'Aliyu', 'Himma international school', 'Minna', '08078193988', '', 'Nil', 'mustyaliyu', '123musty'),
(4, 'mustapha', 'Aliyu', 'Himma international school', 'Minna', '08078193988', '', 'Nil', 'mustyaliyu', '123musty'),
(5, 'mustapha', 'Aliyu', 'Himma international school', 'Minna', '08078193988', 'musty4real2@email.com', 'Nil', 'mustyaliyu', 'musty'),
(6, 'joseh', 'ihiuf', 'minna academy', 'abuja', '08099454647', 'abuja4real2@email.com', 'nil', 'abuja4real', 'abuja'),
(7, 'Opeyemi', 'Adejumo', 'FUTMINNA', 'Bosso, Minna, Niger state', '08074007450', 'yemoauthentic@yahoo.com', 'Math/Computer', 'yemoauthentic', 'morenike');

-- --------------------------------------------------------

--
-- Table structure for table `kiddies_stuff`
--

CREATE TABLE `kiddies_stuff` (
  `id` int(11) NOT NULL auto_increment,
  `description` varchar(200) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `content` text character set utf8 NOT NULL,
  `logo` varchar(100) NOT NULL,
  `visibility` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `kiddies_stuff`
--

INSERT INTO `kiddies_stuff` (`id`, `description`, `subject`, `content`, `logo`, `visibility`) VALUES
(1, '<b>36 Things Every Parent Needs to Tell Their Kids</b>', '<b>36 Things Every Parent Needs to Tell Their Kids</b>', '<p>Here is a list of  36 things every parent should say to their kid, preferably more than once. Each of these words and phrases may be simple in structure, but can be substantial when received by your kids.</p>\r\n<li><b> I love you</b><br/></li>\r\n<<p>This one is pretty self explanatory, but needs to be said. And, it can never be said too much.</p><br/>\r\n<li> <b>  How was your day? </b><br/></li>\r\nTake interest in what&acute;s going on in their daily lives and let them tell you about it. Sometimes it tends to go on and on and on, but enjoy it while those days last. Before you know it your kids will be teens and this question will evoke an answer of &quot;fine&quot;.\r\n<li> <b> I&acute;;m sorry</b><br/></li>\r\nLet your kids know that you are also sometimes to blame. Being comfortable saying you are sorry is something everyone needs to learn how to do.\r\n<li> <b> You win! </b><br/></li>\r\nCongratulate them when they win and let them know how good it feels to be a winner.\r\n<li>  <b>  I win! </b><br/></li>\r\nDon&acute;t let them win all the time. Show them the value of competition and that winning something is not easy and not something to take for granted.\r\n<li> <b> Please</b><br/></li>\r\nCommon sense and good manners, but some kids don&acute;t use this word enough.\r\n<li> <b> Need help with your homework? </b><br/></li>\r\nSome kids may not want to, or feel comfortable with asking for your help with their homework. Let them know you are there for them if they need you.\r\n<li> <b> Do you want to go with me? </b><br/></li>\r\nKids love to go random places with their parents. Next time you head out the door, ask if they want to come with you. Usually they will.\r\n<li> <b> I missed you</b><br/></li>\r\nIt&acute;s important to let them know you were thinking about them even if you weren&acute;t with them at the moment.\r\n <li> <b> Text me when you get there</b><br/></li>\r\nLet your kid know that you want to know when they&acute;ve arrived safely. It teaches responsibility and allows them an easy way to reach back (via text) to relax your nerves.\r\n<li> <b> Good job! </b><br/></li>\r\n<p>This is another no-brainer but extremely important in reinforcing good work by your kid. Who gets tired of hearing this one? NOBODY</p>\r\n<li> <b> You&acute;re so smart</b><br/></li>\r\n<p>This one boosts your kids confidence and let&acute;s them know they do offer something valuable. Let them know they are intelligent and they go into class, or any situation, with that feeling of &quote;I can do this&quote;. </p>\r\n<li> <b> It&acute;s your choice</b><br/></li>\r\n<p>Make sure you invite your kids to make decisions. If you make the decisions all the time, they won&acute;t figure out what it&acute;s like to make a bad decision or the ramifications of what they choose. </p>\r\n <li> <b>  How are your friends? </b><br/></li>\r\n<p>Take interest in their circles. You need to stay abreast of who their friends are and what they are all about. If my daughter starts hanging around with guys in black trench coats, I wanna know about it. </p>\r\n<li> <b>  Keep trying, you&acute;ll get it</b><br/></li>\r\n\r\n<p>Teach them perseverance. When they accomplish something, it will make it all the more sweeter. </p>\r\n<li> <b> Turn off the TV</b><br/></li>\r\n<p>Sometimes you need to step in and tell them to cut the TV off. Don&acute;t let them sit there and vegetate watching Honey Boo Boo nonsense. </p>\r\n<li> <b> It&acute;s ok</b><br/></li>\r\n<p>Let them know it&acute;s ok. It may seem simple, but it reinforces the fact that it&acute;s ok to try knew things or it&acute;s ok when something doesn&acute;t go exactly right. This encourages exploration and let&acute;s your kid know they can try without fear of consequences all the time. </p>\r\n<li> <b> Clean your room</b><br/></li>\r\n<p>It&acute;s important to make them clean up around the house. Their room is (sort of) their domain, so make them own it and keep it up. This is something I&acute;m still working on. </p>\r\n<li> <b>  Want to go get some ice cream? </b><br/></li>\r\n<p>From time to time, spring a trip on them to get some ice cream. Who doesn&acute;t love ice cream? And who doesn&acute;t like a spontaneous and surprising trip to get some?. </p>\r\n<li> <b> You need to take responsibility</b><br/></li>\r\n<p>Make sure they understand that they are responsible for their actions. They can&acute;t just lean on their parents all the time. </p>\r\n<li> <b> Read your book</b><br/></li>\r\n<p>Let&acute;s face it, kids aren&acute;t reading as much today due to all the electronic distractions in their life. We, as parents, need to continue to reinforce the fact they need to read. It is fundamental after all. </p>\r\n<li> <b>  Thank you</b><br/></li>\r\n<p>Again, common sense, but all too often forgotten about. Make sure they say &quote;thank you&quote;. It speaks volumes about your character. </p>\r\n<li> <b>  Chew with your mouth closed</b><br/></li>\r\n<p>Really. Teach them early. </p>\r\n<li> <b> I trust you</b><br/></li>\r\n<p>Let them know you have faith in them. It will make them take ownership more quickly knowing you have their back. </p>\r\n<li> <b> You look nice today</b><br/></li>\r\n<p>Continue to boost their self esteem by letting them know they look nice. Even adults love to get compliments on their appearance. With kids, I don&acute;t think they hear it enough. </p>\r\n<li> <b>  Stop it</b><br/></li>\r\n<p>Put your foot down, especially in public. Don&acute;t let your kids run rampant or act foolish. Put a stop to it, quickly and decisively. </p>\r\n<li>  <b> Can you help me with this? </b><br/></li>\r\n<p>Engage your kids when trying to do something. Whether it&acute;s putting together something for the house or just doing something for work, get them involved and watch how they soak it up. </p>\r\n<li> <b> Eat your vegetables</b><br/></li>\r\n<p>They don&acute;t sell vegetables at McDonalds. Stop giving them crap to eat and start getting them to eat colorful food. Teach them young so they adopt a healthy lifestyle early. </p>\r\n<li> <b> Put the phone away</b><br/></li>\r\n<p>There are times where you need to step in and just tell them to put the phone away. It&acute;s unacceptable for your tween/teen to just walk around nonstop pecking away on their phone</p>.\r\n<li> <b> You wanna play? </b><br/></li>\r\n</p>Kids love impromptu invitations to play. Out of the blue, surprise them and just ask them if they want to play. They will never turn you down and you&acute;ll both get a lot out of it. </p>\r\n <li> <b> You worked so hard on that</b><br/></li>\r\n<p>Let them know they put in work to accomplish something. They may not realize the amount of effort they put in so make sure they understand hard work pays off. </p>\r\n<li> <b>  No</b><br/></li>\r\n<p>I know. I know. But, some parents just don&acute;t use this word with their kids. And when you DO use it, make sure you mean it. </p>\r\n<li> <b>  That was so cool</b><br/></li>\r\n<p>Make sure you let your kids know when they do something cool. Your excitement is very rewarding for them and encourages them to do more of said cool thing. </p>\r\n\r\n<li> <b> Try it</b><br/></li>\r\n<p>Don&acute;t be afraid to let your kids try things. Ok, maybe not jumping off the roof onto a trampoline, but within limits, let them explore. Creativity and imagination are stoked by the act of trying. </p>\r\n<li>  <b> Good night</b><br/></li>\r\n<p>Tell your kids &quote;good night&quote; every night. It let&acute;s them know you are there for them when they close their eyes and drift off. </p>\r\n<li>  <b>  I&acute;m proud of you</b><br/></li>\r\n<p>Your kids live for your admiration. Let them know when and how proud you are of them. </p>\r\n</ol>', '1388223848.jpg', 1),
(2, '<b>10 things that parents should never say to their children.</p>', '<b>10 things that parents should never say to their children.</p>', '<p>Through my work, I&acute;ve had the privilege of speaking to and working with thousands of students, young adults and parents.\r\nTwo things have become painfully obvious to me.First, it&acute;s extraordinarily difficult to be a world-class parent.Second, a significant proportion of students and young adults&acute; frustrations are caused by their parents. I&acute;m not a parent myself, but I&acute;ve observed what many parents say to their children, which can negatively impact them—sometimes for life.\r\nFrom a child and a student&acute;s perspective, here are 10 things that parents should never say: </p>\r\n\r\n<li><b> &quote;You&acute;re useless&quote; or &quote;You&acute;re a failure&quote;</b><br></li>\r\nIt&acute;s shocking how many parents say this to their children in a fit of anger.\r\nThis is the type of phrase that can scar children deeply, and can make them doubt their worth as a human being.\r\n<li><b>&quote;I know what&acute;s best for you&quote; </b><br></li>\r\n<p>As a parent, you might feel like you really do know what&acute;s best for your children, but using this phrase is not at all effective in convincing them that you&acute;re right.Instead, parents should do all they can to empower their children to take full responsibility for their choices and their life. </p>\r\n<li><b>&quote;Because I said so!&quote;\r\n<p>This is another phrase that&acute;s unlikely to be persuasive. Parents need to establish boundaries for their children, but &quote;Because I said so&quote; isn&acute;t enough reason for children to be convinced that staying within those boundaries is a good idea. </p>\r\n<li><b>&quote;I told you so&quote; </b><br></li>\r\n<p>It&acute;s tempting for parents to say this when it turns out that their advice that their children had ignored was, in fact, correct. If you&acute;re a parent, I urge you to refrain from using this phrase. Saying &quote;I told you so&quote; is sure to annoy your children and to cause strain in the relationship. </p>\r\n<li><b>&quote;So clever!&quote; </b><br></li>\r\n<p>Here are some instances where parents might exclaim &quote;So clever!&quote;:</p>\r\n<ul>\r\n<li>A two-year-old keeps his or her toys after playing with them.</li>\r\n<li>A three-year-old says &quote;Thank you&quote; after receiving a present</li>\r\n<li>A 12-year-old decides to learn about Einstein&acute;s theory of relativity.</p>\r\n</ul>\r\n<p>Parents (and all of us, in general) have subconsciously come to associate responsibility, politeness and curiosity with &quote;cleverness&quote;.</p>\r\n<p>When they do this, however, they begin to unintentionally tell their children that intelligence is all-important, when in fact most of us would agree that integrity and morals are even more important. </p>\r\n<p>Parents should emphasize character and values, while not neglecting the worth of hard work and a love for learning. </p>\r\nWhen parents praise their child, they should be specific, rather than just saying &quote;So clever!&quote;\r\n<p>For example, they could say &quote;That was kind of you to help that lady carry her groceries&quote; or &quote;That was generous of you to share your toys with your friend&quote;. </p>\r\n<li><b>&quote;Why can&acute;t you be more like…&quote; </b><br></li>\r\n<p>It&acute;s natural for parents to draw comparisons to other children, but doing so can cause psychological damage to their own children. </p>\r\n<p>Parents ought to focus on what makes their children unique, and encourage them to be the best version of themselves that they can be, instead of merely trying to be better than others. </p>\r\n<li><b>&quote;I wish you weren&acute;t my son/daughter&quote; </b><br></li>\r\n<p>Some parents say this when they&acute;re feeling especially frustrated or upset with their children. </p>\r\n<p>I&acute;ve spoken to students whose parents had said this to them more than 10 years earlier, but they still harboured immense bitterness and resentment toward their parents for making such a hurtful statement. </p>\r\n<li><b>&quote;You&acute;re such a terrible boy/girl!&quote; </b><br></li>\r\n<p>Children have a strange way of becoming the kind of person that their parents, as well as those closest to them, imagine them to be. </p>\r\n<p>When a child misbehaves, parents could say something like this instead: &quote;This is so unlike you. You&acute;re usually such a considerate and responsible boy. You&acute;ll still be punished for misbehaving, but this is really not like you at all to do something so naughty.&quote; </p>\r\n<li><b>&quote;You always…&quote; or &quote;You never…&quote; </b><br></li>\r\n<p>When trying to correct their child&acute;s behaviour, it&acute;s much more effective for parents to point out specific instances or examples, rather than tell their child that &quote;You always forget to do your chores&quote; or &quote;You never keep your promises&quote;. </p>\r\n<li><b>&quote;Don&acute;t argue with me&quote; </b><br></li>\r\n<p>When parents say this during a disagreement, they cause their child to feel even angrier and less willing to obey or compromise. </p>\r\n<p>Parents should reason with their child and explain their perspective calmly. It&acute;s crucial that parents don&acute;t lose their cool! </p>\r\n', '13882238220130330-00558.jpg', 1),
(3, '<b>The 10 things kids need most.</p>', '<b>The 10 things kids need most.</p>', '<p>All kids need the basics of life - like food, warmth, shelter and clothing. But they also need to feel loved and secure. By giving our children all the things they need, we can help them be safe, strong and thrive.Babies and children need to know there is someone who loves them and that their needs will be met as soon as possible. This means: </p>\r\n<ul>\r\n<li>feeding them when they&acute;re hungry.</li>\r\n<li>keeping them warm, dry and safe from danger.</li>\r\n<li>helping them if they are in pain, scared or upset.</li>\r\n<li>providing family routines.</li>\r\n<li>making sure there is always someone you trust to look after them.</li>\r\n</ul>\r\n<p>A few minutes is a long time for a baby who is feeling hungry or upset.   The sooner they are comforted the safer they will feel. </p> \r\n<p>Older children might be able to wait a little longer, but they still need to know that you will feed them when they are hungry, and help them when they are sad or in pain. </p>\r\n<li><br>When I cry: </b><br></li>\r\nI&acute;m a baby. I&acute;ll cry an average of two to five hours every day, it&acute;s my way of talking. Go through this checklist when I cry and it will help you work out what&acute;s wrong (and if I won&acute;t stop, just love me anyway!).\r\n<li><b>Crying checklist: </b><br></li>\r\n•	Please check my nappy \r\n•	See if I&acute;m hungry or uncomfortable \r\n•	Make sure I&acute;m not in pain or have a fever (if I do, call a doctor) \r\n•	Wrap me safely in a soft blanket and cuddle me \r\n•	Take me for a ride in a buggy or car \r\n•	Place me in a bouncy chair or gentle infant swing \r\n•	Play soft music, sing or hum quietly \r\n•	Give me a soothing bath. \r\n<li><b>Feel safe and secure </b><br></li> \r\n<p>When children feel safe and secure, they learn to trust other people.  Children who do&acute;t feel safe can be anxious and unhappy.  This can affect their health and learning. But when they learn that they can trust the adults around them, it helps them grow up happy, healthy and to enjoy the world around them. </p>\r\n<p>Firstly, we make children feel safe by meeting their basic needs. But we also make them feel safe by showing them that we love them. </p>\r\n<li><b>Love and hugs </b><br></li>\r\n<p>Hugs and cuddles help children to feel safe and comforts them. Holding your children, picking them up, sitting them on your lap, kissing and cuddling, are all good ways to show that you care. </p> \r\n<b>Babies and toddlers</b> usually love games like bouncing them on your knee, gently tickling, and games that involve wiggling their fingers or toes can be lots of fun. \r\n<p>Holding a toddler&acute;s hand when out walking helps to protect them from danger and to feel safe and secure in the outside world. </p>\r\n<b>Older children</b> need lots of affection to remind them that you care.  You can do this with cuddles, a &acute;goodnight&acute; kiss and a pat on the shoulder.  Snuggling up close while reading a story together or watching TV is great for your child and you.\r\n<p>Think about your childhood…\r\nIf you were bought up with lots of hugs and praise from your parents, then this will be normal for you. But if you weren&acute;t bought up like that, it might feel strange to do these things. The more you do it, the more natural it will feel. Keep asking yourself: </p>\r\n<ul><li>What is good for my child?</li>\r\n<li>What kind of parent do I want to be?</li>\r\n</ul>\r\n \r\n<li><b>Plenty of praise </b><br></li>\r\n<p>Your child wants to please you. If you praise them when they do well at something or are trying hard, it will make them want to do it again. Praising your child for being good will make them want to be good, and it will help them feel good about themselves.\r\nChildren who feel good about themselves tend to: </p>\r\n<ul><li>learn more easily and make more effort to achieve.<li>\r\n<li>get into less trouble.</<li><li>\r\nget on well with others</li>\r\n<li>make friends more easily.</li>\r\n<li>feel happier and more secure.</li>\r\n</ul>\r\n<li><b>Smiles </b><br></li>\r\n<p>Give a new baby lots of smiles, and smiling will be one of the first things they learn to do for you. \r\nSmiling is one of the most simple ways of helping children feel happy and safe. When you smile at children you are telling them that: </p>\r\n<ul><li>you love them.</li>\r\n<li>you enjoy their company.</li>\r\n<li>you are pleased with them.</li>\r\n<li>you are taking notice of them.</li>\r\n<li>you are happy.</li>\r\n<li>you are good fun to be with.</li></ul>\r\n<p>Smiles work even better when you are looking into your child&acute;s eyes.  Good eye contact when smiling, listening or talking to your child helps to get their attention. </p> \r\n<li><b> Talking </b><br></li>\r\n<p>It&acute;s good to talk and sing to babies from the time they are born.  A gentle voice helps your child to feel relaxed and secure.  It helps them to get to know you, and to know that you are there to look after them. <p/>\r\n<p>When you talk to children they soon start learning words themselves.  The more you talk to them, the more they will learn. <p/> \r\n<p>They will also learn more if you use proper adult words most of the time.  Learning words helps them to communicate and to understand more about the world.  As they get older, words will become one of their most important tools. </p> \r\n<p>Children with a good use of words find it easier to express themselves, to make friends, and to learn at school and at home. </p>\r\n<b>Some ideas for talking to your children:</b>\r\n<p>It&acute;s easy to switch off when you&acute;re busy and tired, but try to put aside a few minutes a day to talk to your child. </p>\r\n<b>A quiet time together before bed:</b> This can just be a few minutes of talking about your day and it will make it a special time.\r\n<b>Name games:</b> When kids are learning words, play games like &quote;Where&acute;s your tummy?&quote;… &quote;Where&acute;s the cat?&quote;… &quote;What&acute;s that?&quote;\r\n<b>Bedtime stories:</b> Or just read books at any time. Even if kids are young, they like looking at the pictures.\r\n<b>Sing:</b> Songs and waiata are a great way to learn words.\r\n<b>Talk topic:</b> Ask them to pick a topic, and you can tell them a story about it from your own childhood.\r\n<b>Play &acute;highs and lows&acute;:</b> If your child is a bit older, talk about the best thing and worst thing that happened that day.\r\n \r\n<li><b>Listening </b><br></li>\r\n<p>As they get older and more able to use word, children begin to ask lots of questions. By listening carefully and doing your best to answer their questions, you will show them that learning is fun. Listening is another way of showing that you are interested and care about them. Even when kids are asking for something they can&acute;t have, they need an answer and a simple explanation. </p>\r\n<b>A scrapbook for your child</b>\r\n<p>Children love stories about themselves - it helps them feel loved and immportant. You could make a scrapbook or album that&acute;s all about your child from the time they were born. Put all sorts of things in it: </p>\r\n<ul><li>a handprint.</li><li>\r\nPhotos</li>\r\n<li>things they&acute;ve said</li>\r\n<li>a favourite birthday card</li></ul\r\nRead it with your child as a special reward or treat, or to comfort them.\r\n<li><b>Learn new things </b><br></li>\r\n<p>You don&acute;t need fancy toys or equipment to give your child new experiences. You can use everyday things around you, go for walks or explore the beach or park. Why not start a shell collection - or look for special stones? Or what about joining a toy library? </p>\r\n<p>It makes learning fun and teaches them about the world. </p>\r\n<p>They need other people too - other children to play with and relationships with people of all ages. </p>\r\n<p>For older children it&acute;s good to be involved in their school activities and homework, and to meet with their teacher often. </p>\r\n<p>New experiences can include simple things like:<p/>\r\n<ul><li>tell a story from your childhood<li>\r\n<li>play a game: </li>\r\n<ul><li>\r\na boardgame if they&acute;re older</li>\r\n<li>peek-a-boo if they&acute;re younger</li>\r\n<li>or naming games like &acute;I spy..&acute;</li>\r\n</ul>\r\n<li>sing a song or waiata</li>\r\n<li>explore the house and garden</li>\r\n<li>read a book (even if babies like the pictures)</li>\r\n<li>teach your kids shapes and colours</li>\r\n<li>take your kids to a friend&acute;s place to visit<li>\r\n<li>praise your children for something new they did\r\nor something they did well</li>\r\n<li>take your child for a walk to the park, beach or anywhere near by</li>\r\n<li>do some drawing, painting or colouring</li>\r\n<li>pick up stones, look at flowers…new experiences are everywhere for kids.</li></ul>\r\n<li><b>Take care of their feelings </b><br></li>\r\n<p>Sometimes it&acute;s hard for children to find the right words, or tell you when they are sad or frightened. </p>\r\n<p>Babies and small children can be frightened by anything new and different, when there is no real danger.  A stranger, a clown, or a loud noise, can all be very scary for a toddler who is not used to them.   Sometimes you might feel tempted to laugh, to tease them or or tell them &acute;not to be silly&acute;.  What they really need is for you to comfort them and give them a simple explanation. </p> \r\n<p>This will help them feel good about themselves, and feel OK about talking to you if they have a serious problem. </p>\r\n<li><b>Rewards and special treats </b><br></li>\r\n<p>All parents want their children to behave. If you give kids attention when they are good, it will make them want to be good more often. If you only notice them when they are naughty, it might make them want to be naughty more often. </p>\r\n<p>The best reward for being good is getting your time and attention. Taking time to play and have fun together doesn&acute;t have to cost money.  A picnic, a walk in the park or a trip to the beach can be lots of fun.Children love stories about themselves - it helps them feel loved and important. You could make a scrapbook or album that&acute;s all about your child from the time they were born. Put all sorts of things in it: </p>\r\n<ul><li>a handprint</li>\r\n<li>photos</li>\r\n<li>things they&acute;ve said</li>\r\n<li>a favourite birthday card.</li>\r\n</ul>\r\n', '1388223726012(003).jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL auto_increment,
  `posters_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `entry_date` datetime NOT NULL,
  `hits` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `posters_id`, `message`, `entry_date`, `hits`) VALUES
(1, 1, 'hello mr olasunki', '2013-12-31 23:36:14', 22),
(2, 1, 'hello Aminna', '2013-12-31 23:36:53', 7),
(3, 1, 'me love you meenat\r\n', '2013-12-31 23:37:39', 1000004),
(4, 1, 'un;funbisjbjs;bkj u;knbud', '2014-01-01 00:23:36', 14),
(5, 1, 'good morning Gmu360 concept hw are you today?', '2014-01-01 09:46:39', 25),
(6, 1, 'you look extremely good', '2014-01-01 11:09:02', 74),
(7, 1, 'ervfd', '2014-01-01 11:58:14', 0),
(8, 1, 'hello baby', '2014-01-01 12:01:07', 0),
(9, 1, 'baby gal besioke', '2014-01-01 12:06:26', 3),
(10, 1, 'hello', '2014-01-01 12:06:38', 0),
(11, 1, 'jnkjhkjnhklj;ijlkjlkj;lkjl;j;l', '2014-01-01 12:10:06', 0),
(12, 1, 'he;hj vfh kjhsjvhjhukvjhkhguykjvgoubv7gyugyuoyjouhuihiovhiuh uhiuh uh uvhuihuivhuoihviuhiuh iuhuhu hiu vdhiuohvouh ihuihiuhui iuhuihiuhiuhu i   uh luhio hoiu hiu h  h uih liu', '2014-01-01 12:11:04', 16),
(13, 1, 'hjlh lhlhihbkolbhduogflhdulhbljknbldhfbuidhbuihdbhlihdbjdib', '2014-01-01 12:11:16', 8),
(14, 1, 'welcome mr banks', '2014-01-01 17:49:49', 4),
(15, 1, 'motiri ayu', '2014-01-01 22:54:28', 0),
(16, 1, 'sfddhfd', '2014-01-01 22:54:32', 0),
(17, 1, 'vdfbxdbxfb', '2014-01-01 22:54:36', 23),
(18, 1, 'sbbfbsbsbb', '2014-01-01 22:54:42', 0),
(19, 1, 'bsdbsfsdggfgg', '2014-01-01 22:54:48', 6),
(20, 0, 'nklnavanvkoa', '2014-01-02 10:51:25', 1),
(21, 0, 'mnaenbklna', '2014-01-02 10:51:48', 0),
(22, 0, 'kkalvkmal''vma;l', '2014-01-02 10:51:56', 0),
(23, 1, 'loovvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv', '2014-01-02 10:56:02', 3),
(24, 1, 'jkljkhlivh siuhoish kjviduohjhulihiushlihilhi  hhioh lh  hilh lihoi h', '2014-01-02 11:05:34', 3),
(25, 1, 'i want a response to this question immediately.... pls help... Help me state newton''s first law of motion', '2014-01-02 13:22:12', 14),
(26, 1, 'muhammad Aliyu', '2014-01-02 14:11:52', 26),
(27, 1, 'sk welcome', '2014-01-02 22:25:09', 9),
(28, 1, '', '2014-01-02 22:25:11', 0),
(29, 1, '', '2014-01-02 22:25:14', 0),
(30, 1, '', '2014-01-02 22:25:24', 0),
(31, 1, '', '2014-01-02 22:25:26', 0),
(32, 1, '', '2014-01-02 22:25:27', 0),
(33, 1, '', '2014-01-02 22:25:27', 0),
(34, 1, '', '2014-01-02 22:25:28', 0),
(35, 1, '', '2014-01-02 22:25:28', 0),
(36, 1, '', '2014-01-02 22:25:29', 0),
(37, 1, 'sdcd', '2014-01-02 22:41:42', 0),
(38, 1, 'dsss', '2014-01-02 22:41:46', 21),
(39, 4, 'close up the gap betweeen the past and the future', '2014-01-03 10:31:51', 62),
(40, 1, 'zakarriyah ', '2014-01-03 13:10:31', 48),
(41, 7, 'To be whom you are is a step to discovering your true self', '2014-01-03 14:09:32', 4),
(42, 1, 'iojs;ivija;ovjij ij;ojs odjvo jso', '2014-01-03 14:21:41', 0),
(43, 7, 'deliver more than u take in', '2014-01-03 14:23:13', 2),
(44, 7, 'its right to be right you know', '2014-01-03 14:24:31', 8);

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `id` int(11) NOT NULL auto_increment,
  `post_id` int(11) NOT NULL,
  `repliers_id` int(11) NOT NULL,
  `reply_message` text NOT NULL,
  `entry_date` datetime NOT NULL,
  `hits` int(20) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=93 ;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`id`, `post_id`, `repliers_id`, `reply_message`, `entry_date`, `hits`) VALUES
(1, 26, 0, 'hggugiuiugiu  uhkuiuhiouh iuhiuh ui uhiuhiuhiuhuiuhh uhiu hui hiuh iuhi uh iouhiuohiou hoiuhiouhiu  uihiuhiuhiouhiuohoiuhiu hiu hio', '2014-01-02 19:26:18', 34),
(2, 0, 1, 'inlkjkj', '2014-01-02 20:02:44', 1),
(3, 0, 0, '', '0000-00-00 00:00:00', 0),
(4, 0, 1, 'scscfd', '2014-01-02 22:50:19', 0),
(5, 0, 1, 'mk dfnbldnbjdn dkljn,nl ', '2014-01-02 22:53:07', 0),
(6, 0, 1, 'gsgfsdfsgdcgccccccccccccccccccccccccccc', '2014-01-02 22:59:08', 0),
(7, 0, 1, 'dfxnbx cfbcx bcvnxcbxcvb c cv', '2014-01-02 23:00:37', 0),
(8, 0, 1, 'u dvgsjdfhgjsdvh khjkhji', '2014-01-02 23:30:37', 0),
(9, 38, 1, 'kl jkbf ljljl kjj  j kj;ojfigoigdjhij hlk j jklhj;odfj h;kf', '2014-01-02 23:32:05', 4),
(10, 38, 1, 'ij bsf;jbdlkjrlkgjdflkjl', '2014-01-02 23:33:49', 2),
(11, 38, 1, 'jb,jjhlkjhjkkhjkhlkjh jhlnhoijiouio', '2014-01-02 23:34:15', 2),
(12, 38, 1, 'mjpoijipojpoi', '2014-01-02 23:35:22', 2),
(13, 38, 1, 'drbsbv', '2014-01-03 09:59:22', 3),
(14, 39, 4, 'sCscd', '2014-01-03 10:37:06', 13),
(15, 39, 4, 'dvsdvsd', '2014-01-03 10:45:26', 4),
(16, 39, 4, 'jvliheuifleu', '2014-01-03 10:46:38', 0),
(17, 39, 4, 'jkjnowegkhj cg', '2014-01-03 10:46:43', 0),
(18, 39, 4, '', '2014-01-03 10:46:44', 0),
(19, 39, 4, '', '2014-01-03 10:46:45', 0),
(20, 39, 4, '', '2014-01-03 10:46:45', 0),
(21, 39, 4, '', '2014-01-03 10:46:46', 0),
(22, 39, 4, '', '2014-01-03 10:46:46', 0),
(23, 39, 4, '', '2014-01-03 10:46:47', 0),
(24, 39, 4, '', '2014-01-03 10:46:47', 0),
(25, 39, 4, '', '2014-01-03 10:46:47', 0),
(26, 39, 4, '', '2014-01-03 10:46:47', 0),
(27, 39, 4, '', '2014-01-03 10:46:48', 0),
(28, 39, 4, '', '2014-01-03 10:46:48', 0),
(29, 39, 4, '', '2014-01-03 10:46:49', 0),
(30, 39, 4, '', '2014-01-03 10:46:49', 0),
(31, 39, 4, '', '2014-01-03 10:46:49', 0),
(32, 39, 4, '', '2014-01-03 10:46:50', 0),
(33, 39, 4, '', '2014-01-03 10:46:50', 0),
(34, 39, 4, '', '2014-01-03 10:46:50', 0),
(35, 39, 4, '', '2014-01-03 10:46:51', 0),
(36, 39, 4, '', '2014-01-03 10:46:51', 0),
(37, 39, 4, '', '2014-01-03 10:46:52', 0),
(38, 39, 4, '', '2014-01-03 10:46:53', 0),
(39, 39, 4, '', '2014-01-03 10:46:54', 0),
(40, 39, 4, '', '2014-01-03 10:46:55', 0),
(41, 39, 4, '', '2014-01-03 10:46:55', 0),
(42, 39, 4, '', '2014-01-03 10:46:56', 0),
(43, 39, 4, 'fhh fffdnf  gnbdf', '2014-01-03 10:59:15', 0),
(44, 38, 4, 'grsggf', '2014-01-03 10:59:49', 2),
(45, 38, 4, 'you', '2014-01-03 11:00:03', 2),
(46, 40, 1, 'whatz up zakarriyah', '2014-01-03 13:10:50', 5),
(47, 40, 1, '', '2014-01-03 13:38:00', 0),
(48, 40, 1, '', '2014-01-03 13:38:02', 0),
(49, 40, 1, '', '2014-01-03 13:38:03', 0),
(50, 40, 1, '', '2014-01-03 13:38:03', 0),
(51, 40, 1, '', '2014-01-03 13:38:04', 0),
(52, 40, 1, '', '2014-01-03 13:38:04', 0),
(53, 40, 1, '', '2014-01-03 13:38:05', 0),
(54, 40, 1, '', '2014-01-03 13:38:05', 0),
(55, 40, 1, '', '2014-01-03 13:38:06', 0),
(56, 40, 1, '', '2014-01-03 13:38:06', 0),
(57, 40, 1, '', '2014-01-03 13:38:06', 0),
(58, 40, 1, '', '2014-01-03 13:38:07', 2),
(59, 40, 1, '', '2014-01-03 13:38:07', 0),
(60, 40, 1, '', '2014-01-03 13:38:07', 0),
(61, 40, 1, '', '2014-01-03 13:38:08', 0),
(62, 40, 1, '', '2014-01-03 13:38:08', 0),
(63, 40, 1, '', '2014-01-03 13:38:09', 0),
(64, 40, 1, '', '2014-01-03 13:38:09', 0),
(65, 40, 1, 'mcd ', '2014-01-03 13:44:16', 0),
(66, 41, 7, 'true', '2014-01-03 14:10:01', 0),
(67, 43, 7, 'lay my hands on it', '2014-01-03 14:23:40', 0),
(68, 44, 7, 'always want to prove others wrong', '2014-01-03 14:24:59', 0),
(69, 44, 1, 'klnhlvsrgjlh vjhh jhjb khiuhduilrghkvjdvlhlsd', '2014-01-03 14:29:01', 0),
(70, 44, 1, 'ilnuhsfgnldfin lininni jjoijiojdoijgisjdiov', '2014-01-03 14:30:21', 10),
(71, 44, 1, 'kh lhslkvhskd', '2014-01-03 14:31:59', 10),
(72, 42, 7, 'kunnhvhb hhh buhbbjhxdbjhskdhvshkbj hhjkh h ', '2014-01-03 14:35:00', 0),
(73, 42, 7, '', '2014-01-03 14:35:12', 0),
(74, 41, 0, 'cbxv', '2014-01-03 14:41:56', 0),
(75, 41, 0, '', '2014-01-03 14:42:27', 0),
(76, 41, 0, '', '2014-01-03 14:42:30', 0),
(77, 41, 0, '', '2014-01-03 14:42:31', 0),
(78, 41, 0, '', '2014-01-03 14:42:31', 0),
(79, 41, 0, '', '2014-01-03 14:42:32', 0),
(80, 41, 0, '', '2014-01-03 14:42:32', 0),
(81, 41, 0, '', '2014-01-03 14:42:33', 0),
(82, 41, 0, '', '2014-01-03 14:42:33', 0),
(83, 41, 0, '', '2014-01-03 14:42:33', 0),
(84, 41, 0, '', '2014-01-03 14:42:34', 0),
(85, 41, 0, '', '2014-01-03 14:42:34', 0),
(86, 41, 0, '', '2014-01-03 14:42:35', 0),
(87, 41, 0, '', '2014-01-03 14:42:35', 0),
(88, 41, 0, '', '2014-01-03 14:42:36', 0),
(89, 41, 0, 'hiv', '2014-01-03 14:43:39', 0),
(90, 41, 0, ' ', '2014-01-03 14:44:34', 0),
(91, 41, 0, 'drg f', '2014-01-03 14:45:18', 0),
(92, 44, 1, 'ef', '2014-01-03 14:46:03', 0);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(200) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `residential_state` varchar(200) NOT NULL,
  `dob` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `sex` varchar(20) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `username`, `password`, `residential_state`, `dob`, `email`, `phone_number`, `sex`) VALUES
(1, 'mustapha', 'm', '1', 'niger ', '2013-12-01', 'musty4real2@gmail.com', '0809989898', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `stuff_you_might_like`
--

CREATE TABLE `stuff_you_might_like` (
  `id` int(11) NOT NULL auto_increment,
  `description` varchar(200) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `content` text character set utf8 NOT NULL,
  `logo` varchar(100) NOT NULL,
  `visibility` int(11) NOT NULL,
  `entry_date` date NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `stuff_you_might_like`
--

INSERT INTO `stuff_you_might_like` (`id`, `description`, `subject`, `content`, `logo`, `visibility`, `entry_date`) VALUES
(2, '12345678910 1234567890<br/>', 'latest Expendit', 'The Elecom committee began a 3 weeks voters registration in which all the voters that took part in the last minna emirate youth association elections for the year 2013/2014.\r\nIn the last election the Elecom committee made the following expenditure \r\nïƒ¼	Printing of the voters registration forms : 180 pieces of the voters registration form was printed at the cost of 20 naira per piece.\r\nThe total used in printing the voters registration form is 3,600 naira \r\nïƒ¼	Printing of the first batch of the aspiration forms: the committee printed\r\nïƒ¼	 5 presidential forms at cost of 1500 naira\r\nïƒ¼	2 welfare forms at the cost of 600 naira\r\nïƒ¼	2 asst. welfare forms at the cost of 600 naira\r\nïƒ¼	 3 vice president forms  at the cost of 900 naira\r\nïƒ¼	2 financial sectary forms at the cost of 600 naira\r\nïƒ¼	2 asst. financial sectary forms at the cost of 600 naira\r\nïƒ¼	2 sectary general  forms  at the cost of 600 naira\r\nïƒ¼	2 asst. sectary general form at the cost of 600 naira\r\nïƒ¼	2 pro1 forms at the cost of 600 naira\r\nïƒ¼	2 pro2 forms at the cost of 600 naira.\r\nïƒ¼	Transportation and airtime =500 naira\r\nThe total used in printing the first part of the aspiration form is 7,700 naira.\r\nOn the 13 of  August 2013 the Elecom committee official spent 300 naira on feeding\r\nAlso on the 14 of the same month the committee spent 300 naira on feeding \r\nOn the 15th of the same month the committee spent 800 naira on feeding \r\nOn the 16th of the above mentioned month the committee spent 800 naira on feeding\r\nAlso 250 naira was spent on the hard cover note book which was used as the register of voters in the registration venue.\r\n200 hundred naira recharge card issued out to the chairman for information dissemination before the manifestation day.\r\n800 naira was also spent on feed the committees members at registration venue\r\n200 naira recharge card was also issued out to the chairman.\r\n800 naira was used for feeding \r\nOn the election day \r\n500 naira was issued out for ballot box\r\nAlso 4000 was issued out for the feeding and refreshment of the security agencies present at the election venue\r\n6000 naira was issued out for the printing of the ballot papers used on the election day in full color separation.\r\n', '1387796441.jpg', 1, '0000-00-00'),
(3, 'MINNA EMIRATE YOUTH ASSOCIATION\r\nELECOM COMMITTEE\r\nBREAK DOWN OF EXPENDITURE FOR THE 2013/2014 ELECTION YEAR.\r\nThe Elecom committee began a 3 weeks voters registration in which all the voters that too', 'ibu jpuuk', 'MINNA EMIRATE YOUTH ASSOCIATION\r\nELECOM COMMITTEE\r\nBREAK DOWN OF EXPENDITURE FOR THE 2013/2014 ELECTION YEAR.\r\nThe Elecom committee began a 3 weeks voters registration in which all the voters that took part in the last minna emirate youth association elections for the year 2013/2014.\r\nIn the last election the Elecom committee made the following expenditure \r\nïƒ¼	Printing of the voters registration forms : 180 pieces of the voters registration form was printed at the cost of 20 naira per piece.\r\nThe total used in printing the voters registration form is 3,600 naira \r\nïƒ¼	Printing of the first batch of the aspiration forms: the committee printed\r\nïƒ¼	 5 presidential forms at cost of 1500 naira\r\nïƒ¼	2 welfare forms at the cost of 600 naira\r\nïƒ¼	2 asst. welfare forms at the cost of 600 naira\r\nïƒ¼	 3 vice president forms  at the cost of 900 naira\r\nïƒ¼	2 financial sectary forms at the cost of 600 naira\r\nïƒ¼	2 asst. financial sectary forms at the cost of 600 naira\r\nïƒ¼	2 sectary general  forms  at the cost of 600 naira\r\nïƒ¼	2 asst. sectary general form at the cost of 600 naira\r\nïƒ¼	2 pro1 forms at the cost of 600 naira\r\nïƒ¼	2 pro2 forms at the cost of 600 naira.\r\nïƒ¼	Transportation and airtime =500 naira\r\nThe total used in printing the first part of the aspiration form is 7,700 naira.\r\nOn the 13 of  August 2013 the Elecom committee official spent 300 naira on feeding\r\nAlso on the 14 of the same month the committee spent 300 naira on feeding \r\nOn the 15th of the same month the committee spent 800 naira on feeding \r\nOn the 16th of the above mentioned month the committee spent 800 naira on feeding\r\nAlso 250 naira was spent on the hard cover note book which was used as the register of voters in the registration venue.\r\n200 hundred naira recharge card issued out to the chairman for information dissemination before the manifestation day.\r\n800 naira was also spent on feed the committees members at registration venue\r\n200 naira recharge card was also issued out to the chairman.\r\n800 naira was used for feeding \r\nOn the election day \r\n500 naira was issued out for ballot box\r\nAlso 4000 was issued out for the feeding and refreshment of the security agencies present at the election venue\r\n6000 naira was issued out for the printing of the ballot papers used on the election day in full color separation.\r\n', '1387796421.jpg', 1, '0000-00-00'),
(4, 'hello good morning ', 'good morning', '<P>In the following steps I will show you how to create a poster theme \r\nillustration in Adobe Illustrator.&nbsp;Considering these tips can also be a \r\ngreat idea in poster printing designs. First, you will have to follow the \r\nprevious tutorial on <A href="http://skyje.com/2011/05/create-an-audio-speaker-in-illustrator/">how \r\nto create the speaker illustration</A>. Next, using various techniques and \r\neffects you will reach the final illustration shown in the image below.</P>\r\n<H3>Tutorial Details</H3>\r\n<UL>\r\n  <LI>Difficulty: Intermediate</LI>\r\n  <LI>Estimated Completion Time: 1 hour 30 minutes</LI>\r\n  <LI>Number of Steps: 27</LI></UL>\r\n<P>This is What You’ll Be Creating</P>\r\n<P><A href="Create%20a%20Poster%20Theme%20Illustration%20in%20Illustrator_files/techno00.jpg"><IMG \r\nwidth="600" title="step00" alt="step00" src="Create%20a%20Poster%20Theme%20Illustration%20in%20Illustrator_files/techno00.jpg"></A><SPAN \r\nid="more-7888"></SPAN></P>\r\n<H3>Step 1</H3>\r\n<P>Create a 610 by 660, RGB document. First, copy the speaker illustration \r\ncreated in the previous tutorial and place it in the middle of your artboard. \r\nNext, grab the Rectangle Tool(M), create a shape the size of your artboard and \r\nSend it to Back (Shift + Control + [ ). Fill it with R=45 G=45 B=45 then open \r\nthe fly-out menu of the Appearance panel and click on Add New Fill. This will \r\nadd a second fill for your shape. Select it from the Appearance, make it black, \r\nlower its opacity to 20%, change the blending mode to Multiply then go to Effect \r\n&gt; Artistic &gt; Film Grain. Enter the data shown below, click OK then add a \r\nthird fill for this shape. You will need a nice pattern for this new fill. Open \r\nthe fly-out menu of the Swatches panel and go to Open Swatch Library &gt; \r\nPattern &gt; Basic Graphics &gt; Basic Graphics_Textures. Reselect the third \r\nfill, lower its opacity to 25%, change the blending mode to Overlay then use the \r\nUSGS 20 Scrub pattern. In the end your shape should look like in the following \r\nimage. Lock it to make sure that you won''t accidentally select/move it.</P>\r\n<P><A href="Create%20a%20Poster%20Theme%20Illustration%20in%20Illustrator_files/techno01.jpg"><IMG \r\nwidth="600" title="step1" alt="step1" src="Create%20a%20Poster%20Theme%20Illustration%20in%20Illustrator_files/techno01.jpg"></A></P>\r\n<H3>Step 2</H3>\r\n<P>Select the speaker shape and make a copy in front (Control + C &gt; Control + \r\nF). Select this copy and hit the D button. This will add the default properties \r\n(white fill and black stroke) for this new shape. Remove the stroke then go to \r\nObject &gt; Path &gt; Offset Path. Enter a 16px Offset then click OK. Delete the \r\noriginal shape then select the resulting shape. First, send it backward (Control \r\n+ [ ) then go to Effect &gt; Stylize &gt; Outer Glow. Enter the data shown below \r\nimage #3 then click OK. Duplicate this shape (Control + C &gt; Control + F) then \r\nselect this copy and bring it to front (Shift + Control + ]). Now, let’s focus \r\non this fresh shape. First, remove the Outer Glow effect then replace the \r\nexisting fill color with the radial gradient shown below image #4. The yellow \r\nnumber from the gradient image stands for opacity percentage. Next, lower its \r\nopacity to 50% and change the blending mode to Overlay then go to Effect &gt; \r\nBlur &gt; Gaussian Blur. Enter a 10px radius then click OK.</P>\r\n', '1387795588.jpg', 1, '0000-00-00'),
(5, 'hnguskjbgdvoy', 'jyhuikugc', 'mysql injection 1.pdf', '', 0, '0000-00-00'),
(8, 'A fraction is a part of a complete or whole object. E.g. an orange sliced into two equal parts, one part is referred to as half of the orange ', 'Mathematics', 'FRACTIONS\r\nA fraction is a part of a complete or whole object. E.g. an orange sliced into two equal parts, one part is referred to as half of the orange expressed as  ½.\r\nAlso an orange could be sliced into three equal parts where one part is one-third, two is two-third.\r\nExpressed as 1/3 and 2/3\r\nFractions are divided into complex and simple fractions. i.e. ½, 1/3, 3/5, 2/5 etc as simple fractions and 10/5, 15/60, 25/100 etc\r\nIn other words the complex fractions could be reduced to their simplest forms.\r\nSimplifying a fraction\r\nMeans to reduce a fraction to its simplest form make it as simple as possible. For instance 4/8, 3/9.\r\n•	Get a whole orange slice it into 8 equal parts \r\n•	The first four forms a fraction of the 8 i.e. 4/8 (four –eight)\r\n•	Taking the four- eight and slicing them again into two you have another fraction of the remaining four i.e. 2/4 (two-fourth or two-quarter)\r\n•	Finally we could slice the two quarter into two and that gives us the final simplification where one part is a half of the other i.e. ½.\r\n\r\nRATIOS\r\nMeans for every amount of one thing, how much of another thin exists. For instance if one has 8 oranges and 6 mangoes in a bowl, the ratio of mangoes to oranges is 6:8 while the ratio of the orange to the mangoes is 8:6.\r\nRatio is expressed as 6 to 8 or 6:8\r\nRatios could also be converted into fractions\r\n8:6 = 8/6 simplified to 4/3\r\n6:8 = 6/8 simplified to ¾\r\nRatio could be used to share an object between group of persons. For instance, an amount of money can be shared between two brothers, so also jobs or food to avoid mis-understanding.\r\nExample\r\n•	If Ahmed is 15 years old and his younger brother 10 years old, the ratio of their age is 15:10 reduced/simplified to 3:2\r\nIf uncle Bala gives Ahmed and Abu 10 oranges, share the oranges between them using the ratio of their age.\r\n1st the sum of their age is 15 + 10 = 25 same as saying 3 +2 =5\r\nAhmed is 15 reduced to 3 while Abu is 10 reduced to 2\r\nAhmed will get 15/25 or 3/5 of the 10 while Abu gets 10/25 or 2/5 of the 10\r\n   \r\n\r\n\r\n\r\n\r\n\r\n\r\n•	Divide the 10 oranges into 5 equal parts and label 3 parts of ech of the oranges A for Ahmed\r\n•	From the 10 oranges you discover Ahmed gets 30 pcs\r\n•	Arrange the 30 pcs to form whole oranges of 5 parts\r\n•	Now you have 6 whole oranges for ahmed\r\nSimilarly,\r\n•	you collect every other parts lablled B for Abu\r\n•	and from the 10 oranges Abu gets 20 pieces\r\n•	arrange the 20pcs to form whole oranges of 5 parts\r\n•	you discover Abu gets 4 whole oranges\r\n\r\n3/5 of 10  3/5 * 10 =6\r\n2/5 of 10  2/5 *10 = 4\r\n\r\n\r\nPROBABILITY\r\nYou can’t predict the future but you can use mathematical probability to determine how likely it is that something will or will not take place\r\nThe study of probability helps to figure out the likelihood of something happening. For instance,when you roll a pair of dice, pick a card from a deck, the toss of coin at the start of a football game.\r\nSuppose we have a jar with 4 red balls and 6 blue balls in it. Find the probability of picking a ball at random.\r\nYou should also know that at random all the balls have equal chances of being picked\r\nTherefore the possibility of picking a red ball is the ratio of the 4 red balls to the total number of balls in the jar which is 10\r\nSimilarly, Probability =       number of favorable outcomes\r\n		              -------------------------------------------------\r\n		               Total number of possible outcomes\r\n•	A favourable outcome is actually picking a ed ball	\r\n•	The total number of possible outcomes is a set called sample space which consist of all 10 balls in the jar\r\n\r\n\r\nSET THEORY\r\nLet’s start with a simple illustration of activities which take place at home. A mother who is suppose to go the market site down to analyze what the home needed, then she writes down; tomatoes, pepper, meat, oil, magi etc on a piece of paper. We call that purchase list, to avoid walking around the market. Then she will also arrange the items in an order depending on which store she is to enter first from the entrance to exit.\r\nIn mathematics, the purchase list is also called List, however, a set is even simpler; the order of the item is not important, and each kind of product is written once, one time in a set. For instance, a purchase list could be in this form [meat, fish, pepper, tomatoes, onions, salt] while a set is just similar, {meat, fish, pepper, tomatoes, onions, salt}.\r\nFor a set we use curly brackets, to stress that a set is not a list. Because the order of the items is not important in a set, all set with other orders yet same items are the same;\r\n {meat, fish, pepper, salt, tomatoes} = {tomatoes, meat, pepper, salt, fish}\r\nWhat is called an item in a list is called an element in a set. To save writing and make reading easier we use small letters for the elements of a set. Large letters (capital) for the sets i.e. A = {m, f, p, t, s}\r\nThe symbol = means whenever we want to use A in a calculation we can also use {m, f, p, t, s}. \r\nA set theory therefore could be defined \r\n•	As a set of elements, all the elements of a set are written between curly brackets.\r\n•	Each element is different from all other elements in a set.\r\n•	The order of the elements does not matter\r\n', '1387796412.jpg', 1, '0000-00-00'),
(11, 'A fraction is a part of a complete or whole object. E.g. an orange sliced into two equal parts, one part is referred to as half of the orang', 'kadmus', 'A fraction is a part of a complete or whole object. E.g. an orange sliced into two equal parts, one part is referred to as half of the orange 	1 		Turn On Visibility 	Turn Off Visibility 	Delete 	Upload Logo\r\n7 	baby gal behind a hut lets go dia 	A fraction is a part of a complete or whole object. E.g. an orange sliced into two equal parts, one part is referred to as half of the orange 	0 		Turn On Visibility 	Turn Off Visibility 	Delete 	Upload Logo\r\n8 	vennesa 	A fraction is a part of a complete or whole object. E.g. an orange sliced into two equal parts, one part is referred to as half of the orang', '1387797318.jpg', 0, '0000-00-00'),
(12, 'A fraction is a part of a complete or whole object. E.g. an orange sliced into two equal parts, one part is referred to as half of the orange', 'the sweetness of a vegetable', 'A fraction is a part of a complete or whole object. E.g. an orange sliced into two equal parts, one part is referred to as half of the orange 	0 	1387797473hot_20131129_3.JPG 	0000-00-00 	Turn On Visibility 	Turn Off Visibility 	Delete 	Upload Logo\r\n9 	kadmus 	A fraction is a part of a complete or whole object. E.g. an orange sliced into two equal parts, one part is referred to as half of the orang', '', 0, '2013-12-24');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL auto_increment,
  `subject_name` varchar(100) NOT NULL,
  `subject_category_id` int(100) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `visibility` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `subject_name`, `subject_category_id`, `logo`, `visibility`) VALUES
(1, 'CHEMISTRY', 4, '', 1),
(2, 'PHYSICS', 4, '', 1),
(3, 'MATHEMATICS', 4, '', 1),
(4, 'MATHEMATICS Jnr', 3, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `id` int(11) NOT NULL auto_increment,
  `subject_id` int(11) NOT NULL,
  `topic_name` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `visibility` int(11) NOT NULL,
  `logo` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `subject_id`, `topic_name`, `content`, `visibility`, `logo`) VALUES
(5, 11, '<center><b>PROBABILITY</b></p><br/>', '<p>You can&acute;t predict the future but you can use mathematical probability to determine how likely it is that something will or will not take place</p><br/>\r\n<p>Probability is a measure or estimate of likelihood of occurrence of an event. Probabilities are given a value between 0 (0% chance or will not happen) and 1 (100% or will happen). The higher the degree of probability, the more likely the event is to happen, or, in a longer series of samples, the greater the number of times such event is expected to happen.</p><br/>\r\n<p>People often use probability to make better choices in their lives. But unfortunately, if we don&acute;t use common sense we could easily fall prey to highly unlikely get rich-quick schemes (419). Interestingly we use probability in our daily life.</p><br/>\r\n<p>Sports</p><br/>\r\n<p>When your team has a coin toss before the start of a football match to determine who play first and on which side, you have a 50/50 chance of winning it, it&acute;s either a head or tail. In a football match, your player tries for a field goal when they think the distance to the goal is close enough that he&acute;ll likely score.</p><br/>\r\n<p>Board games</p><br/>\r\n<p>If you are using a game spinner with four sections; Red, blue, green and yellow, you have 25% chance of landing on red, since one of the four sections is red.</p><br/>\r\n<p>In Ludo games, what is the possibility you will get an even number? You have 50% chance since three of the six numbers on a die are even.</p><br/>\r\n<p>Medical decision</p><br/>\r\n<p>If you are told you have a surgery, you will want to know, doctor what is our chance of survival? i.e. success rate of the operation. You may decide to have the operation or medication based on other patientsâ€™ positive outcomes or side effects.</p><br/>\r\n<p>Insurance premiums</p><br/>\r\n<p>Care insurance companies look at your age and driving record when deciding your premium rates, if they see you had several accidents, the likelihood is that you might have another one. Therefore, your rate may be higher than a safe driver.</p><br/>\r\n<p>Life expectancy</p><br/>\r\n<p>In comparisons to predecessors and most recent cases, the use of the number of years similar groups have worked together in the past could be useas guidelines by financial advisers to help workers to prepare for retirement years.</p><br/>\r\n<p>Weather</p><br/>\r\n<p>If you are planning an outdoor event such as wedding, you will want to check the probability that it will rain. Weather forecasts are based upon patterns that have occurred in previous years, temperatures and natural disasters.</p><br/>\r\n<p>The study of probability helps to figure out the likelihood of something happening. For instance, when you roll a pair of dice, pick a card from a deck, the toss of coin at the start of a football game.</p><br/>\r\n<ul>\r\n<li>The probability that an event will occur can be expressed as a fraction or a decimal from 0 to 1.</li>\r\n<li>The event that are likely will have a probability close to 1.</li>\r\n<li>The events that are unlikely will have a probability close to 0</li>\r\n</ul>\r\n<p>To calculate the probability of an event, it is</p><br/>\r\n	Important to identifyall the different outcomes that could occur.</p><br/>\r\n<p>In the question about the die, you must find out all the different ways the die could land, and all the different ways you could roll a seven.</p><br/>\r\n<p>\r\n	When you are calculating for example an infinite number say 5.0724 between 1 and 10 the probability is 0 but it could still happen</p><br/>\r\n\r\n<p>Example:</p><br/>\r\n<p>Suppose we have a jar with 4 red balls and 6 blue balls in it. Find the probability of picking a ball at random.</p><br/>\r\n<p>You should also know that at random all the balls have equal chances of being picked</p><br/>\r\n<p>Solution</p><br/>\r\n<p>Therefore the possibility of picking a red ball is the ratio of the 4 red balls to the total number of balls in the jar which is 10</p><br/>\r\n<p>Similarly, Probability =       number of favorable outcomes\r\n		<hr></hr> Total number of possible outcomes\r\n<ul>\r\n<li>A favorable outcome is actually picking a red ball</li>	\r\n<li>The total number of possible outcomes is a set called sample space which consist of all 10 balls in the jar</li>\r\n</ul>\r\n<p>Therefore, the probability P(R) of picking a red ball where all outcome are equally likely is</p><br/>\r\nP(R) = 4/10 = 2/5\r\n<p>In decimal is 0.4</p><br/>\r\n<p>In percentage 40/100 = 40%</p><br/>\r\n\r\n<p>Example:</p><br/>\r\n<p>Suppose we number the balls 1 to 10, what is the probability of picking out the number 5?</p><br/>\r\n\r\n<p>Solution</p><br/>\r\n<p>There is only one 5 ball and there are are still 10 balls in the jar so,</p><br/>\r\n<p>Favorable outcomes = 1</p><br/>\r\n<p>Total number of possible outcomes = 10</p><br/>\r\n				P (5) = 1/10 = 10%\r\n\r\n\r\n<p>Note</p><br/>\r\n<ul>\r\n<li>What is a sample space?</li>\r\n<p>A sample space is a set consisting of all the possible outcomes of an event e.g. picking a ball from a jar, or picking a card from a deck.</p><br/>\r\n\r\n<li>Total number of possible outcomes is the number of different ways you can chose something from the sample space.</li>\r\n\r\n<li>Because each probability is a fraction of the sample space, the sum of the probabilities of all the possible outcomes equals to 1.</li>\r\n\r\n</li>Therefore, the probability of the occurrence of an event P(R) is one minus the probability that it does not occur or happen.</li>\r\n\r\n<p>Example:</p><br/>\r\n			P (R) + P (B) = 1\r\n			4/10 + 6/10 = 1\r\n			P (not red) = 1 - 4/10=  6/10\r\n\r\n\r\n', 1, '1388095012117-20130209-0536.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `topic_image`
--

CREATE TABLE `topic_image` (
  `id` int(11) NOT NULL auto_increment,
  `topic_id` int(11) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `topic_image`
--


-- --------------------------------------------------------

--
-- Table structure for table `tutorials`
--

CREATE TABLE `tutorials` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `country` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `topic` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `audio` varchar(200) NOT NULL,
  `note` text NOT NULL,
  `level` varchar(100) NOT NULL,
  `objectives` varchar(255) NOT NULL,
  `visibility` varchar(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tutorials`
--

