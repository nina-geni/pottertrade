-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 03, 2020 at 04:34 PM
-- Server version: 5.7.30
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `PotterTrade`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `Id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(2000) DEFAULT NULL,
  `price` decimal(6,2) NOT NULL,
  `create_date` date NOT NULL,
  `edit_date` date DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL,
  `buyer_id` int(11) DEFAULT NULL,
  `shipping` decimal(6,2) NOT NULL,
  `thumbnail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`Id`, `title`, `description`, `price`, `create_date`, `edit_date`, `category_id`, `owner_id`, `buyer_id`, `shipping`, `thumbnail`) VALUES
(1, 'Harry Potter: Complete 8-Film Collection', 'Dit is de Harry Potter - Complete 8-Film Collection, de complete boxset met alle acht delen uit de legendarische filmreeks. Beleef J.K. Rowlings Wizarding World nu opnieuw thuis met deze acht klassiekers in één volledige Happy Potter DVD box.', '19.99', '2020-10-20', NULL, 19, 4, 3, '0.00', 'movie1.jpg'),
(2, 'LEGO Harry Potter Adventkalender 2020', 'Bouw elke dag iets in aanloop naar Kerstmis met 24 LEGO® Harry Potter™ minimodellen. Open de vakjes van de kalender van 2020 en krijg 24 dagen lang elke dag een magische verrassing. De kalender bevat 6 minifiguren, plus herkenbare voorwerpen en geweldige accessoires uit de Harry Potter films. Naarmate er meer dagen verstrijken, krijg je steeds meer modellen voor een magisch Kerstbal en eindeloze feestelijke avonturen op Zweinstein­™!\r\n\r\nLEGO Harry Potter en de Vuurbeker™ sets\r\nKinderen kunnen de 24 cadeautjes uit de adventkalender combineren om hun favoriete scènes uit de Harry Potter films na te spelen of zelf nieuwe verhalen en avonturen te bedenken. De kalender bevat minifiguren – waaronder Harry Potter, Hermelien Griffel™, Ron Wemel™, Padma Patil, Parvati Patil en Cho Chang – en modellen die je zelf kunt bouwen, zoals een miniatuurkoets van Beauxbatons en een eettafel met een ijskasteel in het midden.\r\n\r\nCool bouwspeelgoed om te verzamelen\r\nHet uitgebreide assortiment LEGO Harry Potter modellen en speelsets biedt fans van de films eindeloos fantasierijk plezier en creatieve displaymogelijkheden.', '29.99', '2020-10-20', NULL, 20, 4, 3, '0.00', 'advent.jpg'),
(3, 'Cinereplicas Cloak Unisex T-shirt Maat XS', 'Wizard Robe van Harry Potter Slytherin zoals deze in de film te zien is. Eigenschappen: * Slytherin patch * Materiaal buitenkant: 100% 240gr-katoen * Materiaal binnenkant: 100% glossy polyester * Officiele Slytherin kleuren * Pointed hood * Binnenzak voor je magic wand / toverstok Voor maattabel zie afbeelding.', '89.00', '2020-10-20', NULL, 21, 4, NULL, '0.00', 'clothing1.jpg'),
(4, 'Harry Potter 1 - Harry Potter and the Philosopher\'s Stone | Illustrated Edition', 'Prepare to be spellbound by Jim Kay\'s dazzling depiction of the wizarding world and much loved characters in this full-colour illustrated hardback edition of the nation\'s favourite children\'s book - Harry Potter and the Philosopher\'s Stone. Brimming with rich detail and humour that perfectly complements J.K. Rowling\'s timeless classic, Jim Kay\'s glorious illustrations will captivate fans and new readers alike.\r\n\r\nOnderstaande tekst is vertaald vanuit de originele taal\r\n\r\nBereid je voor om betoverd te worden door Jim Kay’s fantastische weergave van de tovenaarswereld en de geliefde personages in deze hardcover editie, volledig in kleur, van iedereens favoriete kinderboek – Harry Potter and the Philosopher’s Stone. Boordevol details en humor die perfect past bij J.K. Rowling’s tijdloze klassieker, zullen de stralende illustraties van Jim Kay zowel fans als nieuwe lezers fascineren.', '25.99', '2020-10-20', NULL, 18, 4, 8, '0.00', 'book1.jpg'),
(5, 'Warner Bros LEGO Harry Potter: Collection video-game PlayStation 4 Basis Engels', 'Warner Bros LEGO Harry Potter: Collection. Game-editie: Basis, Platform: PlayStation 4, Multiplayer modus, ESRB-beoordeling: 10 jaar en ouder, PEGI-classificatie: 7, Ontwikkelaar: TT Games, Verschijningsdatum: 18/11/2011', '32.00', '2020-10-20', NULL, 22, 4, NULL, '0.00', 'game1.jpg'),
(6, 'Harry Potter Pin Badge Hedwig', 'HARRY POTTER - Pin Hedwige', '13.65', '2020-10-20', NULL, 23, 4, NULL, '0.00', 'pin1.jpg'),
(7, 'Harry Potter Potion 86 fleslamp', 'Potion 86 fleslamp van Harry Potter. Lamp van Harry Potter in de vorm van een fles Potion 86 van professor Horace Slughorn. Potion 86 uit de film Harry Potter and the Half-Blood Prince. De fles lamp is blauw met een geel etiket, maar geeft een gifgroen licht als hij aan is. De lamp heeft twee lichtstanden: continu licht of twinkelend. De Potion 86 bottle light is een officieel gelicentieerd Harry Potter product en werkt op USB. De USB-kabel wordt meegeleverd.', '17.99', '2020-10-20', NULL, 24, 4, NULL, '0.00', 'lamp1.jpg'),
(8, 'Harry Potter: Advent Calendar - Christmas in the Wizarding World 2020', 'Tel af naar kerst met een Harry Potter-thema! De adventskalender 2020 bevat 24 verrassingen waaronder een pluche sleutelhanger, een stoffen tas, een pin badge, crests, een ketting, telefoonstickers, rol tape, sticky notes, tattoos, stempels, sleutelhangers, memo blokje, markeerstiften, paperclips, een pop socket, stickers. Merk: Cinereplica\'s', '39.99', '2020-10-20', NULL, 24, 4, 3, '0.00', 'kalender1.jpg'),
(9, 'Harry Potter 1 - Harry Potter and the Philosopher\'s Stone |Hufflepuff Edition', 'Part of the bestsellerseries Harry Potter. Gryffindor, Slytherin, Hufflepuff, Ravenclaw . . . Twenty years ago these magical words and many more flowed from a young writers pen, an orphan called Harry Potter was freed from the cupboard under the stairs - and a global phenomenon started. Harry Potter and the Philosophers Stone has been read and loved by every new generation since. To mark the 20th anniversary of first publication, Bloomsbury has published four House Editions of J. K. Rowlings modern classic. these stunning editions each feature the individual house crest on the jacket and line illustrations exclusive to that house, by Kate Greenaway Medal Winner Levi Pinfold. Exciting new extra content includes fact files and profiles of favourite characters, and each book has sprayed edges in the house colours. Available for a limited period only, these highly collectable editions are a must-have for all Harry Potter fans.', '12.19', '2020-10-20', NULL, 18, 4, 9, '0.00', 'boek21.jpg'),
(10, 'RUBIES FRANCE - Harry Potter Zwadderich kostuum voor volwassenen - Volwassenen kostuums', 'Dit Zwadderig kostuum voor volwassenen heeft een officiële Harry Poitter licentie. Het bestaat uit een lang zwart gewaad met capuchon. De capuchon is gevoerd met een grijs/groen binnenkant. Op de borst van het tovenaarsgewaad is het wapen van Zwadderich aanwezig. Het sluit aan de voorkant met een metalen sluitinkje. Verkleed je als een tovenaar van huis Zwadderich in dit Harry Potter kostuum tijdens carnaval, een themafeest of Halloween!', '48.98', '2020-10-20', NULL, 21, 4, NULL, '1.23', 'clothing10.jpg'),
(20, 'Harry Potter boxset (1-7)', 'Dit is de Engelstalige versie A beautiful boxed set containing all seven Harry Potter novels. these editions of the classic and internationally Bestselling, multi-award-winning series feature instantly pick-up-able jackets, to bring Harry Potter to the next generation of readers. Its time to PASS the MAGIC ON. Harry Potter and the Philosophers Stone:Harry Potter thinks he is an ordinary boy. He lives with his Uncle Vernon, Aunt Petunia and cousin Dudley, who are mean to him and make him sleep in a cupboard under the stairs. (Dudley, however, has two bedrooms, one to sleep in and one for all his toys and games. ) then Harry starts receiving mysterious letters and his life is changed forever. He is whisked away by a beetle-eyed giant of a man and enrolled at Hogwarts School of Witchcraft and Wizardry. the reason: Harry Potter is a wizard! Harry Potter and the Chamber of Secrets:Harry Potter is a wizard. He is in his second years at Hogwarts School of Witchcraft and Wizardry. the three friends, Harry, Ron and Hermione, are soon immersed in the daily round of Potions, Herbology, Defence Against the Dark Arts and Quidditch. then mysterious and scary things start happening. First Harry hears strange voices, and then Ron’s sister, Ginny, disappears. . Harry Potter and the Prisoner of Azkaban:Harry Potter, along with his best friends, Ron and Hermione, is about to start his third year at Hogwarts School of Witchcraft and Wizardry. Harry can’t wait to get back to school after the summer holidays (who wouldn’t if they lived with the horrible Dursleys?). But when Harry arrives at Hogwarts, the atmosphere is tense. there’s an escaped mass murderer on the loose, and the sinister prison guards of Azkaban have been called in to guard the school', '47.79', '2020-11-03', NULL, 18, 5, NULL, '2.59', '5fa17edc3c748-boek.jpg'),
(21, 'LEGO Harry Potter Hedwig', 'Leg de magische persoonlijkheid en elegante vlucht van Hedwig™ vast, de populaire uil uit de Harry Potter™ films. Dit van LEGO stenen te bouwen model met 630 onderdelen heeft een vleugelwijdte van ca. 34 cm en is uitgevoerd in volle vlucht, waarbij ze Harry\'s toelatingsbrief voor Zweinstein™ aflevert. Als je het uitdagende en plezierige bouwproces voltooid hebt, kun je aan de hendel aan de achterkant draaien om de vleugels sierlijk op en neer te laten bewegen.', '34.00', '2020-11-03', NULL, 20, 5, NULL, '1.00', '5fa17f49aedf8-log1.jpg'),
(22, 'Harry Potter and the Philosopher\'s Stone', 'An irresistible new edition of Harry Potter and the Philosopher\'s Stone created with ultra-talented designers MinaLima, the design magicians behind the gorgeous visual graphic style of the Harry Potter and Fantastic Beasts films. J.K. Rowling\'s complete and unabridged text is accompanied by MinaLima\'s handsome colour illustrations on nearly every page, superb design, and eight exclusive interactive paper-engineered elements - including Harry\'s Hogwarts letter, the magical entrance to Diagon Alley, a sumptuous feast in the Great Hall of Hogwarts and more. Designed and illustrated by the iconic house of MinaLima - best known for establishing the graphic design of the Harry Potter and Fantastic Beasts films - this is the perfect gift for Harry Potter fans and a beautiful addition to any collector\'s bookshelf, enticing readers of all ages to discover the Harry Potter novels all over again.', '0.00', '2020-11-03', NULL, 18, 5, NULL, '1.00', '5fa17f87df082-boek1.jpg'),
(23, 'Harry Potter: The Marauder\'s Map Cover Puzzle', 'De Noble-collectie is verheugd om een ​​nieuwe reeks Harry Potter-puzzels van 1000 stukjes aan te kondigen.\r\n\r\nGewicht: 500 gram\r\nPakket Afmetingen: 30cm x 20cm x 10cm (LxBxH)', '28.00', '2020-11-03', NULL, 24, 5, NULL, '1.00', '5fa17fdaa767f-puzzel1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `title`) VALUES
(18, 'Books'),
(19, 'Movies'),
(20, 'Toys'),
(21, 'Clothes'),
(22, 'Games'),
(23, 'Pins'),
(24, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `picture`
--

CREATE TABLE `picture` (
  `id` int(11) NOT NULL,
  `path` varchar(500) NOT NULL,
  `article_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `picture`
--

INSERT INTO `picture` (`id`, `path`, `article_id`) VALUES
(1, 'advent1.jpg', 2),
(2, 'advent2.jpg', 2),
(3, 'book2.jpg', 4),
(4, 'clothing2.jpg', 3),
(5, 'clothing3.jpg', 3),
(6, 'kalender2.jpg', 8),
(7, 'kalender3.jpg', 8),
(8, 'lamp2.jpg', 7),
(9, 'lamp3.jpg', 7),
(10, 'movie2.jpg', 1),
(11, 'pin2.jpg', 6),
(12, '5f9af49493c0d-Unknown.jpg', 13),
(13, '5f9af4949445d-unnamed.jpg', 13),
(14, '5f9af49f58f5c-Unknown.jpg', 14),
(15, '5f9af49f5910e-unnamed.jpg', 14),
(16, '5f9af4deafb26-Unknown.jpg', 15),
(17, '5f9af4deafca5-unnamed.jpg', 15),
(20, '5fa022def35a1-Unknown.jpg', 13),
(21, '5fa022def37c3-unnamed.jpg', 13),
(22, '5fa0240e4ff6c-library.jpeg', 14),
(23, '5fa0240e508ba-wp4001476.jpg', 14),
(24, '5fa0257cc88fc-407867-blackangel.jpg', 15),
(25, '5fa0257cc8b8f-Unknown.jpg', 15),
(26, '5fa026d9665d4-407867-blackangel.jpg', 16),
(27, '5fa026d9667fa-wp4001476.jpg', 16),
(28, '5fa027242f96c-407867-blackangel.jpg', 17),
(29, '5fa027242fbd3-wp4001476.jpg', 17),
(30, '5fa027673da20-407867-blackangel.jpg', 18),
(31, '5fa027673dbe3-wp4001476.jpg', 18),
(32, '5fa028a27f421-wp4001476.jpg', 20),
(33, '5fa17bc4a5ede-chest2.jpg', 19),
(34, '5fa17bc4a66f1-chest3.jpg', 19),
(35, '5fa17d71c7678-boek2.jpg', 0),
(36, '5fa17e2f72477-boek2.jpg', 0),
(37, '5fa17e407f271-boek2.jpg', 0),
(38, '5fa17edc3cb98-boek2.jpg', 20),
(39, '5fa17f49af290-lego2.jpg', 21),
(40, '5fa17fdaa787c-puzzel2.jpg', 23),
(41, '5fa1812fae42a-chest2.jpg', 24),
(42, '5fa1812fae6f3-chest3.jpg', 24);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `create_date` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `title`, `description`, `create_date`, `user_id`, `article_id`) VALUES
(1, 'Good', 'LegoFan is a trustworthy seller. My items was fast delivered. It is also good quality and no ripoff.  I’m sure I’m gonna buy from this seller again.', '2020-10-21', 1, 1),
(27, 'nice', 'nice nice', '2020-10-26', 3, 1),
(30, 'perfect', 'I really love this', '2020-10-28', 3, 7);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `bankaccount` varchar(16) DEFAULT NULL,
  `password` varchar(200) NOT NULL,
  `street_number` varchar(50) NOT NULL,
  `zipcode` varchar(4) NOT NULL,
  `city` varchar(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `email`, `bankaccount`, `password`, `street_number`, `zipcode`, `city`, `user_name`, `admin`) VALUES
(3, 'Maria', 'Stadhouders', 'maria.stadhouders@gmail.com', 'BE65433456789876', '$2y$10$3./lEkZgyHWg3JHFDaKO2uHp1B3Qr3S//GWU3B93JcHuxlBsTsU3K', 'Oud-Smetlede 38', '9340', 'Oordegem', 'MariaST', 0),
(4, 'Loki', 'Genitello', 'loki@gmail.com', 'BE45654334565434', '$2y$10$45EAFHsVQhgwatdYe7Y0kO8u9KR80q57GClY5EuyYnrzdTHeijwEq', 'Oud-Smetlede 38', '9340', 'Oordegem', 'Lokig', 0),
(5, 'Nina', 'Genitello', 'nina1@skynet.be', 'BE34567890123456', '$2y$10$livUcR3KTm0LkS7Kgu/etuv5L6yTuBmrOq9VNpRuq85iB8VB8zswG', 'Oud-Smetlede 38', '9340', 'Oordegem', 'LegoFan', 1),
(6, 'Misty', 'Genitello', 'misty@gmail.com', 'BE34567876544567', '$2y$10$GhdaLxJeofzZF.4DudwxV.EzYYWL6FlFe/RGVFUV5oaE10WMpFUtW', 'Oud-Smetlede 38', '9340', 'Oordegem', 'mimi', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `picture`
--
ALTER TABLE `picture`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `picture`
--
ALTER TABLE `picture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
