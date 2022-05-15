-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 08, 2014 at 04:55 PM
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
-- Table structure for table `animal_stuff`
--

CREATE TABLE `animal_stuff` (
  `id` int(11) NOT NULL auto_increment,
  `description` varchar(200) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `content` text character set utf8 NOT NULL,
  `logo` varchar(100) NOT NULL,
  `visibility` int(11) NOT NULL,
  `entry_date` date NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `animal_stuff`
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `do_you_know`
--

INSERT INTO `do_you_know` (`id`, `description`, `subject`, `content`, `logo`, `visibility`) VALUES
(1, 'If you start counting at one and spell out the numbers as you go, you won''t use the letter "A" until you reach 1,000', 'Do You know ', 'If you start counting at one and spell out the numbers as you go, you won''t use the letter "A" until you reach 1,000', '1389161137l.jpg', 1),
(2, '12+1 = 11+2, and &quot;twelve plus one&quot; is an anagram of &quot;eleven plus two. &quot;', 'Do You Know ?', '12+1 = 11+2, and &quot;twelve plus one&quot; is an anagram of &quot;eleven plus two. &quot;', '1389183526.jpg', 0),
(3, 'Giraffes have no vocal cords', 'Do You Know ?', 'Giraffes have no vocal cords', '1389183589.jpg', 1),
(4, 'People with higher IQ&acute;s dream more', 'Do You Know', 'People with higher IQ&acute;s dream more', '1389183749l.jpg', 1),
(5, 'Adding salt to pineapple will actually cause it to taste sweeter', 'Do you Knoe', 'Adding salt to pineapple will actually cause it to taste sweeter', '1389184010.jpg', 1),
(6, 'Have you ever wondered why when someone yawns, the other person follows suit? Yawning is caused due to low levels of oxygen in the air, which makes the body intake large amounts of oxygen. The rea', 'Do You Know?', 'Have you ever wondered why when someone yawns, the other person follows suit? Yawning is caused due to low levels of oxygen in the air, which makes the body intake large amounts of oxygen. The reason why yawning is said to be contagious is because when we do so, we are actually activating our nervous system. This has something to do with the survival instinct we have inherited in the course of evolutionary past. In the primitive years, when someone would yawn, the whole group would become alert and get better at sensing danger', '1389184159.jpg', 1);

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
(1, 1, '1389159166re.PNG');

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
(1, '<p>It&acute;s a concept that can be difficult to come to terms with, but like it or not our intellect (or our perceived intellect) can often work against us in life. The indications are all there once you have the eyes to see them. Have you fell into the &quot;I think Iâ€™m too smart for my own good&quot; trap? Hello!!! Don&acute;t worry the big part of correcting a mistake is realizing it exists! Check out these 5 signs you are not as smart as you think you are and see if any or all apply to you. Coming quickly to terms with them and correcting this kind of self-defeating behavior can make you truly smarter fast! And perhaps more importantly, much happier too.<p>', '<h2>5 Signs You Are Not as Smart as You Think</h2>', '<p>It&acute;s a concept that can be difficult to come to terms with, but like it or not our intellect (or our perceived intellect) can often work against us in life. The indications are all there once you have the eyes to see them. Have you fell into the &quot;I think Iâ€™m too smart for my own good&quot; trap? Hello!!! Don&acute;t worry the big part of correcting a mistake is realizing it exists! Check out these 5 signs you are not as smart as you think you are and see if any or all apply to you. Coming quickly to terms with them and correcting this kind of self-defeating behavior can make you truly smarter fast! And perhaps more importantly, much happier too.<p>\r\n<ol>\r\n<li>\r\n<br/><p><b>Lack of Professional Success</b></p><br/>\r\n<p><b>Opinions are by their nature subjective</b> â€“ think of beauty as being in the eyes of the beholder as a classic example â€“ while end results, like numbers in a pay check are very much objective and impossible to argue with. Smart people leverage their intelligence into professional success. If you are thirty five years old, consider yourself brilliant yet are living at your parentâ€™s apartment it&acute;s pretty clear you are not as smart as you think you are. Smart people figure out a way to make money not make excuses!</p><br/>\r\n</li>\r\n<li>\r\n<br/><p><b>Always Being in the Center of Conflict.</b></p><br/>\r\n<p><b>Smart people, truly smart people that is, don&acute;t spend every waking moment wasted in argument, conflict and debate.</b> The need to prove how correct you are at the expense of co-workers, friends, family and the majority of people you meet on the street reveals an insecurity that truly intelligent people rarely have. It&acute;s a flashing neon sign that tells the world you are not nearly as smart as you think you are! Avoid unneeded conflict and watch the energy you save get utilized for positive projects and to fuel constructive behavior. Now that&acute;s a sign you are getting smarter!</p><br/>\r\n</li>\r\n<li>\r\n<br/><b><p> You Are Always Rushing Around and Way too Busy</b></p><br/>\r\n<p>Do you find most of your days fighting the clock and running from crisis to crisis? Time and energy management is a skill all truly smart people quickly learn to manage to make the most out of life, minimize stress and out produce their less smart peers. Ask yourself if you are so intelligent why are you always running around in a panic like a chicken without a head? Occasional bouts of overwork may be unavoidable aspects of our professional or home lives, certainly, but if this is a reoccurring nightmare you are hardly as smart as you may like to think you are. Smart people know this is hardly a way to live or to produce up to a person&acute;s true highest potential!<p><br/>\r\n</li>\r\n<li>\r\n<br/><b><p>You Talk Much More than You Listen</p></b><br/>\r\n<p>What do you think of when you are around someone who just won&acute;t stop talking to even catch a breath? Don&acute;t images of scam artists, unscrupulous used car salesmen and high school air heads flash to mind? Certainly not people with true intelligence who understand there&acute;s much more benefit and lasting power in the sometimes lost art of listening rather than talking. Which category do you most often fall it â€“ the endless babbler or the active listener? The answer says a great deal about just how smart you really are. Listen more and talk less.</p>\r\n</li>\r\n<li>\r\n<br/><b><p>Your Reading Habits are Hardly Challenging</p></b><br/>\r\n<p>If you needed to find one top quality shared by all truly intelligent people you could do much worse than focusing on the love of reading. Real reading about difficult and thought provoking subjects â€“ not escapist low brow entertainment. Reading is an essential tool in the quest for continued self development and it&acute;s embraced by all the truly smart. If you consider yourself in this category, but spend your free time zoned out in front of the television or wasting time reading foolish crime novels it may be time to reconsider. A few hours of challenging reading a night can help expand your intelligence and creativity in astoundingly magical ways and move you quickly towards being smart for real. Adopting this habit alone can be a true game changer you will have no choice, but to thank yourself for a year from now. Don&acute;t hesitate to act on it if youâ€™d like to be smart rather than just think you are smart!</p><br/>\r\n<p>Ooooooooops you just discovered you are not that smart right? So its either you burst the idea of being smart or act like a smart one and mend your ways.</p>\r\n</li>\r\n</ol>\r\n', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `forumn_reg`
--

INSERT INTO `forumn_reg` (`id`, `fname`, `sname`, `school`, `location`, `phone_number`, `email`, `department`, `username`, `password`) VALUES
(1, 'McDonald', 'Ehiwe', 'Nil', 'Minna', '07030619859', 'infocoreconcept@gmail.com', 'Nil', 'KingMcd', 'youare');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL auto_increment,
  `description` varchar(200) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `content` text character set utf8 NOT NULL,
  `logo` varchar(100) NOT NULL,
  `visibility` int(11) NOT NULL,
  `entry_date` date NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `history`
--


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
(1, '<p>Here is a list of  36 things every parent should say to their kid, preferably more than once. Each of these words and phrases may be simple in structure, but can be substantial when received by you', '<b>36 Things Every Parent Needs to Tell Their Kids</b>', '<b>36 Things Every Parent Needs to Tell Their Kids</b>\r\n<ol>\r\n<p>Here is a list of  36 things every parent should say to their kid, preferably more than once. Each of these words and phrases may be simple in structure, but can be substantial when received by your kids.</p>\r\n<li><b> I love you</b><br/></li>\r\n<p>This one is pretty self explanatory, but needs to be said. And, it can never be said too much.</p><br/>\r\n<li> <b>  How was your day? </b><br/></li>\r\nTake interest in what&acute;s going on in their daily lives and let them tell you about it. Sometimes it tends to go on and on and on, but enjoy it while those days last. Before you know it your kids will be teens and this question will evoke an answer of &quot;fine&quot;.\r\n<li> <b> I&acute;m sorry</b><br/></li>\r\nLet your kids know that you are also sometimes to blame. Being comfortable saying you are sorry is something everyone needs to learn how to do.\r\n<li> <b> You win! </b><br/></li>\r\nCongratulate them when they win and let them know how good it feels to be a winner.\r\n<li>  <b>  I win! </b><br/></li>\r\nDon&acute;t let them win all the time. Show them the value of competition and that winning something is not easy and not something to take for granted.\r\n<li> <b> Please</b><br/></li>\r\nCommon sense and good manners, but some kids don&acute;t use this word enough.\r\n<li> <b> Need help with your homework? </b><br/></li>\r\nSome kids may not want to, or feel comfortable with asking for your help with their homework. Let them know you are there for them if they need you.\r\n<li> <b> Do you want to go with me? </b><br/></li>\r\nKids love to go random places with their parents. Next time you head out the door, ask if they want to come with you. Usually they will.\r\n<li> <b> I missed you</b><br/></li>\r\nIt&acute;s important to let them know you were thinking about them even if you weren&acute;t with them at the moment.\r\n <li> <b> Text me when you get there</b><br/></li>\r\nLet your kid know that you want to know when they&acute;ve arrived safely. It teaches responsibility and allows them an easy way to reach back (via text) to relax your nerves.\r\n<li> <b> Good job! </b><br/></li>\r\n<p>This is another no-brainer but extremely important in reinforcing good work by your kid. Who gets tired of hearing this one? NOBODY</p>\r\n<li> <b> You&acute;re so smart</b><br/></li>\r\n<p>This one boosts your kids confidence and let&acute;s them know they do offer something valuable. Let them know they are intelligent and they go into class, or any situation, with that feeling of &quote;I can do this&quote;. </p>\r\n<li> <b> It&acute;s your choice</b><br/></li>\r\n<p>Make sure you invite your kids to make decisions. If you make the decisions all the time, they won&acute;t figure out what it&acute;s like to make a bad decision or the ramifications of what they choose. </p>\r\n <li> <b>  How are your friends? </b><br/></li>\r\n<p>Take interest in their circles. You need to stay abreast of who their friends are and what they are all about. If my daughter starts hanging around with guys in black trench coats, I wanna know about it. </p>\r\n<li> <b>  Keep trying, you&acute;ll get it</b><br/></li>\r\n\r\n<p>Teach them perseverance. When they accomplish something, it will make it all the more sweeter. </p>\r\n<li> <b> Turn off the TV</b><br/></li>\r\n<p>Sometimes you need to step in and tell them to cut the TV off. Don&acute;t let them sit there and vegetate watching Honey Boo Boo nonsense. </p>\r\n<li> <b> It&acute;s ok</b><br/></li>\r\n<p>Let them know it&acute;s ok. It may seem simple, but it reinforces the fact that it&acute;s ok to try knew things or it&acute;s ok when something doesn&acute;t go exactly right. This encourages exploration and let&acute;s your kid know they can try without fear of consequences all the time. </p>\r\n<li> <b> Clean your room</b><br/></li>\r\n<p>It&acute;s important to make them clean up around the house. Their room is (sort of) their domain, so make them own it and keep it up. This is something I&acute;m still working on. </p>\r\n<li> <b>  Want to go get some ice cream? </b><br/></li>\r\n<p>From time to time, spring a trip on them to get some ice cream. Who doesn&acute;t love ice cream? And who doesn&acute;t like a spontaneous and surprising trip to get some?. </p>\r\n<li> <b> You need to take responsibility</b><br/></li>\r\n<p>Make sure they understand that they are responsible for their actions. They can&acute;t just lean on their parents all the time. </p>\r\n<li> <b> Read your book</b><br/></li>\r\n<p>Let&acute;s face it, kids aren&acute;t reading as much today due to all the electronic distractions in their life. We, as parents, need to continue to reinforce the fact they need to read. It is fundamental after all. </p>\r\n<li> <b>  Thank you</b><br/></li>\r\n<p>Again, common sense, but all too often forgotten about. Make sure they say &quote;thank you&quote;. It speaks volumes about your character. </p>\r\n<li> <b>  Chew with your mouth closed</b><br/></li>\r\n<p>Really. Teach them early. </p>\r\n<li> <b> I trust you</b><br/></li>\r\n<p>Let them know you have faith in them. It will make them take ownership more quickly knowing you have their back. </p>\r\n<li> <b> You look nice today</b><br/></li>\r\n<p>Continue to boost their self esteem by letting them know they look nice. Even adults love to get compliments on their appearance. With kids, I don&acute;t think they hear it enough. </p>\r\n<li> <b>  Stop it</b><br/></li>\r\n<p>Put your foot down, especially in public. Don&acute;t let your kids run rampant or act foolish. Put a stop to it, quickly and decisively. </p>\r\n<li>  <b> Can you help me with this? </b><br/></li>\r\n<p>Engage your kids when trying to do something. Whether it&acute;s putting together something for the house or just doing something for work, get them involved and watch how they soak it up. </p>\r\n<li> <b> Eat your vegetables</b><br/></li>\r\n<p>They don&acute;t sell vegetables at McDonalds. Stop giving them crap to eat and start getting them to eat colorful food. Teach them young so they adopt a healthy lifestyle early. </p>\r\n<li> <b> Put the phone away</b><br/></li>\r\n<p>There are times where you need to step in and just tell them to put the phone away. It&acute;s unacceptable for your tween/teen to just walk around nonstop pecking away on their phone</p>.\r\n<li> <b> You wanna play? </b><br/></li>\r\n</p>Kids love impromptu invitations to play. Out of the blue, surprise them and just ask them if they want to play. They will never turn you down and you&acute;ll both get a lot out of it. </p>\r\n <li> <b> You worked so hard on that</b><br/></li>\r\n<p>Let them know they put in work to accomplish something. They may not realize the amount of effort they put in so make sure they understand hard work pays off. </p>\r\n<li> <b>  No</b><br/></li>\r\n<p>I know. I know. But, some parents just don&acute;t use this word with their kids. And when you DO use it, make sure you mean it. </p>\r\n<li> <b>  That was so cool</b><br/></li>\r\n<p>Make sure you let your kids know when they do something cool. Your excitement is very rewarding for them and encourages them to do more of said cool thing. </p>\r\n\r\n<li> <b> Try it</b><br/></li>\r\n<p>Don&acute;t be afraid to let your kids try things. Ok, maybe not jumping off the roof onto a trampoline, but within limits, let them explore. Creativity and imagination are stoked by the act of trying. </p>\r\n<li>  <b> Good night</b><br/></li>\r\n<p>Tell your kids &quote;good night&quote; every night. It let&acute;s them know you are there for them when they close their eyes and drift off. </p>\r\n<li>  <b>  I&acute;m proud of you</b><br/></li>\r\n<p>Your kids live for your admiration. Let them know when and how proud you are of them. </p>\r\n', '1389159793.jpg', 1),
(2, 'Do you spend time with your kids ?  if you don''t here is a reason for you to start spending little time with your kids.Remember it is said kids time with the parent is the best time ever .....', '<b>10 things that parents should never say to their children.</b>', '<p>Through my work, I&acute;ve had the privilege of speaking to and working with thousands of students, young adults and parents.\r\nTwo things have become painfully obvious to me.First, it&acute;s extraordinarily difficult to be a world-class parent.Second, a significant proportion of students and young adults&acute; frustrations are caused by their parents. I&acute;m not a parent myself, but I&acute;ve observed what many parents say to their children, which can negatively impact themâ€”sometimes for life.\r\nFrom a child and a student&acute;s perspective, here are 10 things that parents should never say: </p>\r\n\r\n<li><b> &quot;You&acute;re useless&quot; or &quot;You&acute;re a failure&quot;</b><br></li>\r\nIt&acute;s shocking how many parents say this to their children in a fit of anger.\r\nThis is the type of phrase that can scar children deeply, and can make them doubt their worth as a human being.\r\n<li><b>&quot;I know what&acute;s best for you&quot; </b><br></li>\r\n<p>As a parent, you might feel like you really do know what&acute;s best for your children, but using this phrase is not at all effective in convincing them that you&acute;re right.Instead, parents should do all they can to empower their children to take full responsibility for their choices and their life. </p>\r\n<li><b>&quot;Because I said so!&quot;\r\n<p>This is another phrase that&acute;s unlikely to be persuasive. Parents need to establish boundaries for their children, but &quot;Because I said so&quot; isn&acute;t enough reason for children to be convinced that staying within those boundaries is a good idea. </p>\r\n<li><b>&quot;I told you so&quot; </b><br></li>\r\n<p>It&acute;s tempting for parents to say this when it turns out that their advice that their children had ignored was, in fact, correct. If you&acute;re a parent, I urge you to refrain from using this phrase. Saying &quot;I told you so&quot; is sure to annoy your children and to cause strain in the relationship. </p>\r\n<li><b>&quot;So clever!&quot; </b><br></li>\r\n<p>Here are some instances where parents might exclaim &quot;So clever!&quot;:</p>\r\n<ul>\r\n<li>A two-year-old keeps his or her toys after playing with them.</li>\r\n<li>A three-year-old says &quot;Thank you&quot; after receiving a present</li>\r\n<li>A 12-year-old decides to learn about Einstein&acute;s theory of relativity.</p>\r\n</ul>\r\n<p>Parents (and all of us, in general) have subconsciously come to associate responsibility, politeness and curiosity with &quot;cleverness&quot;.</p>\r\n<p>When they do this, however, they begin to unintentionally tell their children that intelligence is all-important, when in fact most of us would agree that integrity and morals are even more important. </p>\r\n<p>Parents should emphasize character and values, while not neglecting the worth of hard work and a love for learning. </p>\r\nWhen parents praise their child, they should be specific, rather than just saying &quot;So clever!&quot;\r\n<p>For example, they could say &quot;That was kind of you to help that lady carry her groceries&quot; or &quot;That was generous of you to share your toys with your friend&quot;. </p>\r\n<li><b>&quot;Why can&acute;t you be more likeâ€¦&quot; </b><br></li>\r\n<p>It&acute;s natural for parents to draw comparisons to other children, but doing so can cause psychological damage to their own children. </p>\r\n<p>Parents ought to focus on what makes their children unique, and encourage them to be the best version of themselves that they can be, instead of merely trying to be better than others. </p>\r\n<li><b>&quot;I wish you weren&acute;t my son/daughter&quot; </b><br></li>\r\n<p>Some parents say this when they&acute;re feeling especially frustrated or upset with their children. </p>\r\n<p>I&acute;ve spoken to students whose parents had said this to them more than 10 years earlier, but they still harboured immense bitterness and resentment toward their parents for making such a hurtful statement. </p>\r\n<li><b>&quot;You&acute;re such a terrible boy/girl!&quot; </b><br></li>\r\n<p>Children have a strange way of becoming the kind of person that their parents, as well as those closest to them, imagine them to be. </p>\r\n<p>When a child misbehaves, parents could say something like this instead: &quot;This is so unlike you. You&acute;re usually such a considerate and responsible boy. You&acute;ll still be punished for misbehaving, but this is really not like you at all to do something so naughty.&quot; </p>\r\n<li><b>&quot;You alwaysâ€¦&quot; or &quot;You neverâ€¦&quot; </b><br></li>\r\n<p>When trying to correct their child&acute;s behaviour, it&acute;s much more effective for parents to point out specific instances or examples, rather than tell their child that &quot;You always forget to do your chores&quot; or &quot;You never keep your promises&quot;. </p>\r\n<li><b>&quot;Don&acute;t argue with me&quot; </b><br></li>\r\n<p>When parents say this during a disagreement, they cause their child to feel even angrier and less willing to obey or compromise. </p>\r\n<p>Parents should reason with their child and explain their perspective calmly. It&acute;s crucial that parents don&acute;t lose their cool! </p>', '1389160250re3.PNG', 1),
(3, '<p>All kids need the basics of life - like food, warmth, shelter and clothing. But they also need to feel loved and secure. By giving our children all the things they need, we can help them be safe, s', '<b>The 10 things kids need most.</b>', '<p>All kids need the basics of life - like food, warmth, shelter and clothing. But they also need to feel loved and secure. By giving our children all the things they need, we can help them be safe, strong and thrive.Babies and children need to know there is someone who loves them and that their needs will be met as soon as possible. This means: </p>', '1389160646re.PNG', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `posters_id`, `message`, `entry_date`, `hits`) VALUES
(1, 1, 'Please i want someone to help me with this question asap: What is the first law of issac newton??', '2014-01-08 09:10:39', 9);

-- --------------------------------------------------------

--
-- Table structure for table `post_like_tbl`
--

CREATE TABLE `post_like_tbl` (
  `id` int(11) NOT NULL auto_increment,
  `post_id` int(11) NOT NULL,
  `likers_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `post_like_tbl`
--

INSERT INTO `post_like_tbl` (`id`, `post_id`, `likers_id`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `quick_grab`
--

CREATE TABLE `quick_grab` (
  `id` int(11) NOT NULL auto_increment,
  `description` varchar(200) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `content` text character set utf8 NOT NULL,
  `logo` varchar(100) NOT NULL,
  `visibility` int(11) NOT NULL,
  `entry_date` date NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `quick_grab`
--


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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`id`, `post_id`, `repliers_id`, `reply_message`, `entry_date`, `hits`) VALUES
(1, 1, 1, 'The first law of sir isaac newton states: Every object remains in a state of rest until an unbalanced force acts on it.', '2014-01-08 09:11:56', 3),
(2, 1, 1, 'Second  comments', '2014-01-08 10:32:41', 1),
(3, 1, 1, 'jhx sdhjvhjvg,j', '2014-01-08 11:56:00', 0),
(4, 1, 1, 'helooo', '2014-01-08 11:57:19', 1),
(5, 1, 1, 'blvushldiuv', '2014-01-08 12:47:04', 0),
(6, 1, 1, 'jhv sdjlvhsdjvhjhfjhfliuhvih jh', '2014-01-08 16:15:17', 0);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `signup`
--


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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `stuff_you_might_like`
--


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
-- Table structure for table `tech_stuff`
--

CREATE TABLE `tech_stuff` (
  `id` int(11) NOT NULL auto_increment,
  `description` varchar(200) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `content` text character set utf8 NOT NULL,
  `logo` varchar(100) NOT NULL,
  `visibility` int(11) NOT NULL,
  `entry_date` date NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tech_stuff`
--


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
(5, 3, '<center><b>PROBABILITY</b></p><br/>', '<p>You can&acute;t predict the future but you can use mathematical probability to determine how likely it is that something will or will not take place</p><br/>\r\n<p>Probability is a measure or estimate of likelihood of occurrence of an event. Probabilities are given a value between 0 (0% chance or will not happen) and 1 (100% or will happen). The higher the degree of probability, the more likely the event is to happen, or, in a longer series of samples, the greater the number of times such event is expected to happen.</p><br/>\r\n<p>People often use probability to make better choices in their lives. But unfortunately, if we don&acute;t use common sense we could easily fall prey to highly unlikely get rich-quick schemes (419). Interestingly we use probability in our daily life.</p><br/>\r\n<p>Sports</p><br/>\r\n<p>When your team has a coin toss before the start of a football match to determine who play first and on which side, you have a 50/50 chance of winning it, it&acute;s either a head or tail. In a football match, your player tries for a field goal when they think the distance to the goal is close enough that he&acute;ll likely score.</p><br/>\r\n<p>Board games</p><br/>\r\n<p>If you are using a game spinner with four sections; Red, blue, green and yellow, you have 25% chance of landing on red, since one of the four sections is red.</p><br/>\r\n<p>In Ludo games, what is the possibility you will get an even number? You have 50% chance since three of the six numbers on a die are even.</p><br/>\r\n<p>Medical decision</p><br/>\r\n<p>If you are told you have a surgery, you will want to know, doctor what is our chance of survival? i.e. success rate of the operation. You may decide to have the operation or medication based on other patientsâ€™ positive outcomes or side effects.</p><br/>\r\n<p>Insurance premiums</p><br/>\r\n<p>Care insurance companies look at your age and driving record when deciding your premium rates, if they see you had several accidents, the likelihood is that you might have another one. Therefore, your rate may be higher than a safe driver.</p><br/>\r\n<p>Life expectancy</p><br/>\r\n<p>In comparisons to predecessors and most recent cases, the use of the number of years similar groups have worked together in the past could be useas guidelines by financial advisers to help workers to prepare for retirement years.</p><br/>\r\n<p>Weather</p><br/>\r\n<p>If you are planning an outdoor event such as wedding, you will want to check the probability that it will rain. Weather forecasts are based upon patterns that have occurred in previous years, temperatures and natural disasters.</p><br/>\r\n<p>The study of probability helps to figure out the likelihood of something happening. For instance, when you roll a pair of dice, pick a card from a deck, the toss of coin at the start of a football game.</p><br/>\r\n<ul>\r\n<li>The probability that an event will occur can be expressed as a fraction or a decimal from 0 to 1.</li>\r\n<li>The event that are likely will have a probability close to 1.</li>\r\n<li>The events that are unlikely will have a probability close to 0</li>\r\n</ul>\r\n<p>To calculate the probability of an event, it is</p><br/>\r\n	Important to identifyall the different outcomes that could occur.</p><br/>\r\n<p>In the question about the die, you must find out all the different ways the die could land, and all the different ways you could roll a seven.</p><br/>\r\n<p>\r\n	When you are calculating for example an infinite number say 5.0724 between 1 and 10 the probability is 0 but it could still happen</p><br/>\r\n\r\n<p>Example:</p><br/>\r\n<p>Suppose we have a jar with 4 red balls and 6 blue balls in it. Find the probability of picking a ball at random.</p><br/>\r\n<p>You should also know that at random all the balls have equal chances of being picked</p><br/>\r\n<p>Solution</p><br/>\r\n<p>Therefore the possibility of picking a red ball is the ratio of the 4 red balls to the total number of balls in the jar which is 10</p><br/>\r\n<p>Similarly, Probability =       number of favorable outcomes\r\n		<hr></hr> Total number of possible outcomes\r\n<ul>\r\n<li>A favorable outcome is actually picking a red ball</li>	\r\n<li>The total number of possible outcomes is a set called sample space which consist of all 10 balls in the jar</li>\r\n</ul>\r\n<p>Therefore, the probability P(R) of picking a red ball where all outcome are equally likely is</p><br/>\r\nP(R) = 4/10 = 2/5\r\n<p>In decimal is 0.4</p><br/>\r\n<p>In percentage 40/100 = 40%</p><br/>\r\n\r\n<p>Example:</p><br/>\r\n<p>Suppose we number the balls 1 to 10, what is the probability of picking out the number 5?</p><br/>\r\n\r\n<p>Solution</p><br/>\r\n<p>There is only one 5 ball and there are are still 10 balls in the jar so,</p><br/>\r\n<p>Favorable outcomes = 1</p><br/>\r\n<p>Total number of possible outcomes = 10</p><br/>\r\n				P (5) = 1/10 = 10%\r\n\r\n\r\n<p>Note</p><br/>\r\n<ul>\r\n<li>What is a sample space?</li>\r\n<p>A sample space is a set consisting of all the possible outcomes of an event e.g. picking a ball from a jar, or picking a card from a deck.</p><br/>\r\n\r\n<li>Total number of possible outcomes is the number of different ways you can chose something from the sample space.</li>\r\n\r\n<li>Because each probability is a fraction of the sample space, the sum of the probabilities of all the possible outcomes equals to 1.</li>\r\n\r\n</li>Therefore, the probability of the occurrence of an event P(R) is one minus the probability that it does not occur or happen.</li>\r\n\r\n<p>Example:</p><br/>\r\n			P (R) + P (B) = 1\r\n			4/10 + 6/10 = 1\r\n			P (not red) = 1 - 4/10=  6/10\r\n\r\n\r\n', 1, '1388095012117-20130209-0536.jpg');

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

