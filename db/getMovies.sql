-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 05, 2018 at 05:38 AM
-- Server version: 5.6.35
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `getMovies`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_movies`
--

CREATE TABLE `tbl_movies` (
  `movie_id` int(11) NOT NULL,
  `movie_cover` varchar(250) NOT NULL,
  `movie_title` varchar(50) NOT NULL,
  `movie_trailer` varchar(400) NOT NULL,
  `movie_genre` varchar(50) NOT NULL,
  `movie_rating` varchar(10) NOT NULL,
  `movie_desc` varchar(500) NOT NULL,
  `movie_grades` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_movies`
--

INSERT INTO `tbl_movies` (`movie_id`, `movie_cover`, `movie_title`, `movie_trailer`, `movie_genre`, `movie_rating`, `movie_desc`, `movie_grades`) VALUES
(1, 'images/1.jpg', 'Guardians of the Galaxy', 'videos/1.mp4', 'action', '8.7/10', 'Brash space adventurer Peter Quill (Chris Pratt) finds himself the quarry of relentless bounty hunters after he steals an orb coveted by Ronan, a powerful villain. To evade Ronan, Quill is forced into an uneasy truce with four disparate misfits: gun-toting Rocket Raccoon, treelike-humanoid Groot, enigmatic Gamora, and vengeance-driven Drax the Destroyer. But when he discovers the orb\'s true power and the cosmic threat it poses, Quill must rally his ragtag group to save the universe.', 'pnk'),
(2, 'images/2.jpg', 'Guardians of the Galaxy Vol. 2', 'videos/2.mp4', 'action', '8.2/10', 'Peter Quill and his fellow Guardians are hired by a powerful alien race, the Sovereign, to protect their precious batteries from invaders. When it is discovered that Rocket has stolen the items they were sent to guard, the Sovereign dispatch their armada to search for vengeance. As the Guardians try to escape, the mystery of Peter\'s parentage is revealed.', 'pnk'),
(3, 'images/3.jpg', 'Thor: Ragnarok', 'videos/3.mp4', 'action', '8.5/10', 'Imprisoned on the other side of the universe, the mighty Thor finds himself in a deadly gladiatorial contest that pits him against the Hulk, his former ally and fellow Avenger. Thor\'s quest for survival leads him in a race against time to prevent the all-powerful Hela from destroying his home world and the Asgardian civilization.', 'pnk'),
(4, 'images/4.jpg', 'War for the Planet of the Apes', 'videos/4.mp4', 'action', '8.4/10', 'Caesar (Andy Serkis) and his apes are forced into a deadly conflict with an army of humans led by a ruthless colonel (Woody Harrelson). After the apes suffer unimaginable losses, Caesar wrestles with his darker instincts and begins his own mythic quest to avenge his kind. As the journey finally brings them face to face, Caesar and the colonel are pitted against each other in an epic battle that will determine the fate of both of their species and the future of the planet.', 'p'),
(5, 'images/5.jpg', 'Coco', 'videos/5.mp4', 'animation', '9.1/10', 'Despite his family\'s generations-old ban on music, young Miguel dreams of becoming an accomplished musician like his idol Ernesto de la Cruz. Desperate to prove his talent, Miguel finds himself in the stunning and colorful Land of the Dead. After meeting a charming trickster named Héctor, the two new friends embark on an extraordinary journey to unlock the real story behind Miguel\'s family history.', 'pnk'),
(6, 'images/6.jpg', 'The Lego Batman Movie', 'videos/6.mp4', 'animation', '8.7/10', 'There are big changes brewing in Gotham, but if Batman (Will Arnett) wants to save the city from the Joker\'s (Zach Galifianakis) hostile takeover, he may have to drop the lone vigilante thing, try to work with others and maybe, just maybe, learn to lighten up. Maybe his superhero sidekick Robin (Michael Cera) and loyal butler Alfred (Ralph Fiennes) can show him a thing or two.', 'pnk'),
(7, 'images/7.jpg', 'Despicable Me 3', 'videos/7.mp4', 'animation', '6.3/10', 'The mischievous Minions hope that Gru will return to a life of crime after the new boss of the Anti-Villain League fires him. Instead, Gru decides to remain retired and travel to Freedonia to meet his long-lost twin brother for the first time. The reunited siblings soon find themselves in an uneasy alliance to take down the elusive Balthazar Bratt, a former 1980s child star who seeks revenge against the world.', 'pnk'),
(8, 'images/8.jpg', 'The Boss Baby', 'videos/8.mp4', 'animation', '6.3/10', 'A new baby\'s arrival impacts a family, told from the point of view of a delightfully unreliable narrator -- a wildly imaginative 7-year-old named Tim. The most unusual Boss Baby (Alec Baldwin) arrives at Tim\'s home in a taxi, wearing a suit and carrying a briefcase. The instant sibling rivalry must soon be put aside when Tim discovers that Boss Baby is actually a spy on a secret mission, and only he can help thwart a dastardly plot that involves an epic battle between puppies and babies.', 'p'),
(9, 'images/9.jpg', 'Beauty and the Beast', 'videos/9.mp4', 'fantasy', '7.3/10', 'Belle (Emma Watson), a bright, beautiful and independent young woman, is taken prisoner by a beast (Dan Stevens) in its castle. Despite her fears, she befriends the castle\'s enchanted staff and learns to look beyond the beast\'s hideous exterior, allowing her to recognize the kind heart and soul of the true prince that hides on the inside.', 'pnk'),
(10, 'images/10.jpg', 'Jumanji: Welcome to the Jungle', 'videos/10.mp4', 'fantasy', '7.2/10', 'Four high school kids discover an old video game console and are drawn into the game\'s jungle setting, literally becoming the adult avatars they chose. What they discover is that you don\'t just play Jumanji - you must survive it. To beat the game and return to the real world, they\'ll have to go on the most dangerous adventure of their lives, discover what Alan Parrish left 20 years ago, and change the way they think about themselves - or they\'ll be stuck in the game forever.', 'pnk'),
(11, 'images/11.jpg', 'Paddington 2', 'videos/11.mp4', 'fantasy', '8.2/10', 'Settled in with the Brown family, Paddington the bear is a popular member of the community who spreads joy and marmalade wherever he goes. One fine day, he spots a pop-up book in an antique shop -- the perfect present for his beloved aunt\'s 100th birthday. When a thief steals the prized book, Paddington embarks on an epic quest to unmask the culprit before Aunt Lucy\'s big celebration.', 'pnk'),
(12, 'images/12.jpg', 'Ferdinand', 'videos/12.mp4', 'fantasy', '6.7/10', 'Ferdinand is a young bull who escapes from a training camp in rural Spain after his father never returns from a showdown with a matador. Adopted by a girl who lives on a farm, Ferdinand\'s peaceful existence comes crashing down when the authorities return him to his former captors. With help from a wisecracking goat and three hedgehogs, the giant but gentle bovine must find a way to break free before he squares off against El Primero, the famous bullfighter who never loses.', 'p'),
(13, 'images/13.jpg', 'Wonder', 'videos/13.mp4', 'family', '8.1/10', 'Based on the New York Times bestseller, WONDER tells the incredibly inspiring and heartwarming story of August Pullman, a boy with facial differences who enters fifth grade, attending a mainstream elementary school for the first time.', 'pnk'),
(14, 'images/14.jpg', 'Diary of a Wimpy Kid: The Long Haul', 'videos/14.mp4', 'family', '4.3/10', 'Young Greg Heffley is looking forward to a long summer of just hanging out, but his mother throws a monkey wrench into his plans when she forces the entire family to take a road trip for a relative\'s birthday celebration. His eyes soon light up after he realizes that the excursion is his ticket to a gaming convention to meet YouTube sensation Mac Digby. Greg\'s imagination then kicks into overdrive as he sneakily hatches a scheme to attend the expo and gain some much-deserved fame.', 'pnk'),
(15, 'images/15.jpg', 'Goodbye Christopher Robin', 'videos/15.mp4', 'family', '7.1/10', 'After leaving London for the English countryside, writer A.A. Milne starts to spin fanciful yarns about his son\'s growing collection of stuffed animals. These stories form the basis for \"Winnie-the-Pooh\" and \"The House at Pooh Corner,\" published respectively in 1926 and 1928. Milne and his family soon become swept up in the instant success of the books, while the enchanting tales bring hope and comfort to the rest of postwar England.', 'pnk'),
(16, 'images/16.jpg', 'Call Me by Your Name', 'videos/16.mp4', 'family', '8.1/10', 'It\'s the summer of 1983, and precocious 17-year-old Elio Perlman is spending the days with his family at their 17th-century villa in Lombardy, Italy. He soon meets Oliver, a handsome doctoral student who\'s working as an intern for Elio\'s father. Amid the sun-drenched splendor of their surroundings, Elio and Oliver discover the heady beauty of awakening desire over the course of a summer that will alter their lives forever.', 'p'),
(17, 'images/17.jpg', 'Ready Player One', 'videos/17.mp4', 'Sci-fi', '8/10', 'From filmmaker Steven Spielberg comes the science fiction action adventure “Ready Player One,” based on Ernest Cline’s bestseller of the same name, which has become a worldwide phenomenon. The film is set in 2045, with the world on the brink of chaos and collapse. But the people have found salvation in the OASIS, an expansive virtual reality universe created by the brilliant and eccentric James Halliday (Mark Rylance). ', 'pnk'),
(18, 'images/18.jpg', 'Annihilation', 'videos/18.mp4', 'Sci-fi', '7.1/10', 'Based on Jeff VanderMeer’s best-selling Southern Reach Trilogy, Annihilation stars Natalie Portman, Jennifer Jason Leigh, Gina Rodriguez, Tessa Thompson, Tuva Novotny and Oscar Isaac. It was written and directed by Alex Garland (Ex Machina, 28 Days Later).', 'pnk'),
(19, 'images/19.jpg', 'Black Panther', 'videos/19.mp4', 'Sci-fi', '7.8/10', 'After the death of his father, T\'Challa returns home to the African nation of Wakanda to take his rightful place as king. When a powerful enemy suddenly reappears, T\'Challa\'s mettle as king -- and as Black Panther -- gets tested when he\'s drawn into a conflict that puts the fate of Wakanda and the entire world at risk. Faced with treachery and danger, the young king must rally his allies and release the full power of Black Panther to defeat his foes and secure the safety of his people.', 'pnk'),
(20, 'images/20.jpg', 'Pacific Rim Uprising', 'videos/20.mp4', 'Sci-fi', '6/10', 'Jake Pentecost is a once-promising Jaeger pilot whose legendary father gave his life to secure humanity\'s victory against the monstrous Kaiju. Jake has since abandoned his training only to become caught up in a criminal underworld. But when an even more unstoppable threat is unleashed to tear through cities and bring the world to its knees, Jake is given one last chance by his estranged sister, Mako Mori, to live up to his father\'s legacy.', 'p'),
(21, 'images/21.jpg', 'Love, Simon', 'videos/21.mp4', 'Drama', '8.1/10', 'Everyone deserves a great love story, but for 17-year-old Simon Spier, it\'s a little more complicated. He hasn\'t told his family or friends that he\'s gay, and he doesn\'t know the identity of the anonymous classmate that he\'s fallen for online. Resolving both issues proves hilarious, terrifying and life-changing.', 'p'),
(22, 'images/22.jpg', '12 Strong', 'videos/22.mp4', 'Drama', '7/10', 'In the wake of Sept. 11, Capt. Mitch Nelson leads a U.S. Special Forces team into Afghanistan for an extremely dangerous mission. Once there, the soldiers develop an uneasy partnership with the Northern Alliance to take down the Taliban and its al-Qaida allies. Outgunned and outnumbered, Nelson and his forces face overwhelming odds in a fight against a ruthless enemy that takes no prisoners.', 'pnk'),
(23, 'images/23.jpg', 'Tully', 'videos/23.mp4', 'Drama', '6.8/10', 'Marlo, a mother of three, is gifted a night nanny by her brother. Hesitant to the extravagance at first, Marlo comes to form a unique bond with the thoughtful, surprising, and sometimes challenging young nanny named Tully.', 'p'),
(24, 'images/24.jpg', 'The Catcher Was a Spy', 'videos/24.mp4', 'Drama', '7.2/10', 'It will star Paul Rudd as Moe Berg, a former baseball player who joined the war effort during World War II and partook in espionage for the U.S. Government. The film premiered at the 2018 Sundance Film Festival. It is scheduled to be released on June 22, 2018 by IFC Films.', 'p'),
(25, 'images/25.jpg', 'It', 'videos/25.mp4', 'Thriller', '7.5/10', 'Seven young outcasts in Derry, Maine, are about to face their worst nightmare -- an ancient, shape-shifting evil that emerges from the sewer every 27 years to prey on the town\'s children. Banding together over the course of one horrifying summer, the friends must overcome their own personal fears to battle the murderous, bloodthirsty clown known as Pennywise.', 'p'),
(26, 'images/26.jpg', 'Red Sparrow', 'videos/26.mp4', 'Thriller', '6.8/10', 'Prima ballerina Dominika Egorova faces a bleak and uncertain future after she suffers an injury that ends her career. She soon turns to Sparrow School, a secret intelligence service that trains exceptional young people to use their minds and bodies as weapons. Egorova emerges as the most dangerous Sparrow after completing the sadistic training process. As she comes to terms with her new abilities, Dominika meets a CIA agent who tries to convince her that he is the only person she can trust.', ''),
(27, 'images/27.jpg', 'A Quiet Place', 'videos/27.mp4', 'Thriller', '8.4/10', 'If they hear you, they hunt you.', ''),
(28, 'images/28.jpg', 'Get Out', 'videos/28.mp4', 'Thriller', '7.7/10', 'Now that Chris (Daniel Kaluuya) and his girlfriend, Rose (Allison Williams), have reached the meet-the-parents milestone of dating, she invites him for a weekend getaway upstate with Missy and Dean. At first, Chris reads the family\'s overly accommodating behavior as nervous attempts to deal with their daughter\'s interracial relationship, but as the weekend progresses, a series of increasingly disturbing discoveries lead him to a truth that he never could have imagined.', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` mediumint(9) NOT NULL,
  `user_fname` varchar(250) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `user_pass` varchar(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `user_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_ip` varchar(50) NOT NULL,
  `user_level` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_movies`
--
ALTER TABLE `tbl_movies`
  ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_movies`
--
ALTER TABLE `tbl_movies`
  MODIFY `movie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` mediumint(9) NOT NULL AUTO_INCREMENT;