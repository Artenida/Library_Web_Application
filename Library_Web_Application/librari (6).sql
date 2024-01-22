-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:4306
-- Generation Time: Jan 17, 2024 at 11:40 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `librari`
--

-- --------------------------------------------------------

--
-- Table structure for table `autoret`
--

CREATE TABLE `autoret` (
  `ID_Autor` int(11) NOT NULL,
  `Emri` varchar(20) NOT NULL,
  `Mbiemri` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `autoret`
--

INSERT INTO `autoret` (`ID_Autor`, `Emri`, `Mbiemri`) VALUES
(1, 'J.R.R', 'Tolkien'),
(2, 'Jane', 'Austen'),
(3, 'Helen', 'Fielding'),
(4, 'Veronica ', 'Roth'),
(5, 'Alexandre', 'Dumas'),
(6, 'Colleen', 'Hoover'),
(7, 'Anne', 'Frank'),
(8, 'Arthur Conan', 'Doyle'),
(36, 'Une', 'Une'),
(37, 'Une', 'Une'),
(38, 'Une', 'Une'),
(39, 'Une', 'Une'),
(40, 'Une', 'Une'),
(41, '', ''),
(42, 'une', 'une'),
(43, 'Prove', 'Prove'),
(44, 'Prove3', 'Prove3');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `ID_Cart_Item` int(11) NOT NULL,
  `ID_User` int(11) NOT NULL,
  `ID_Lib` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`ID_Cart_Item`, `ID_User`, `ID_Lib`) VALUES
(11, 31, 6),
(12, 31, 3),
(14, 31, 4);

-- --------------------------------------------------------

--
-- Table structure for table `donate`
--

CREATE TABLE `donate` (
  `donate_id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `author` varchar(30) NOT NULL,
  `category` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donate`
--

INSERT INTO `donate` (`donate_id`, `title`, `author`, `category`, `date`, `user_id`) VALUES
(3, 'Keshtjella', 'Kadare', 'Roman', '2024-01-20', 31),
(4, 'I ri', 'Erisa', 'Pa rendesi', '2024-01-20', 27);

-- --------------------------------------------------------

--
-- Table structure for table `kategorite`
--

CREATE TABLE `kategorite` (
  `ID_Kat` int(11) NOT NULL,
  `Kategoria` varchar(20) NOT NULL,
  `FotoPath` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `kategorite`
--

INSERT INTO `kategorite` (`ID_Kat`, `Kategoria`, `FotoPath`) VALUES
(1, 'Romance', 'Romance.webp'),
(2, 'Komedi', 'Komedi.jpg'),
(3, 'Thriller', 'Thriller.jpg'),
(4, 'Aventure', 'Aventure.webp'),
(5, 'Best Seller', 'BestSeller.jpg'),
(6, 'Historik', 'Historik.jpg'),
(7, 'Mister', 'mister.jpg'),
(8, 'Fantazi', 'fantazi.png'),
(11, 'Teknologji', 'Teknologji.jpg'),
(12, 'Prove', '0'),
(13, 'Prove3', '0');

-- --------------------------------------------------------

--
-- Table structure for table `librat`
--

CREATE TABLE `librat` (
  `ID_Lib` int(20) NOT NULL,
  `Titulli` varchar(100) NOT NULL,
  `Pershkrimi` varchar(3000) NOT NULL,
  `Nr_Faqeve` int(11) NOT NULL,
  `Sasia` int(11) NOT NULL,
  `FotoPath` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `librat`
--

INSERT INTO `librat` (`ID_Lib`, `Titulli`, `Pershkrimi`, `Nr_Faqeve`, `Sasia`, `FotoPath`) VALUES
(1, 'Zoti i Unazave', '<p>Zoti i unazave është një roman fantazi  nga autori dhe studiuesi anglez J. R. R. Tolkien. E vendosur në Tokën e Mesme, historia filloi si një vazhdim i librit të Tolkien-it, Hobbit, por përfundimisht u zhvillua në një vepër shumë më të madhe. I shkruar në disa faza midis 1937 dhe 1949, Zoti i unazave është një nga librat më të shitur të shkruar ndonjëherë, me mbi 150 milionë kopje të shitura.</p>  ', 1178, 50, ''),
(2, 'Krenari dhe Paragjykim', '<p>Krenari dhe Paragjykim është romani i dytë i autores angleze Jane Austen, botuar në 1813. Një roman sjelljesh, ai ndjek zhvillimin e personazhit të Elizabeth Bennet, protagonistes së librit, e cila mëson për pasojat e gjykimeve të nxituara dhe arrin të vlerësojë ndryshimin midis mirësisë sipërfaqësore dhe mirësisë aktuale.</p>', 496, 43, ''),
(3, 'Ditari i Bridget Jones', '<p>Ditari i Bridget Jones është një roman i vitit 1996 nga Helen Fielding. I shkruar në formën e një ditari personal, romani tregon një vit në jetën e Bridget Jones, një grua tridhjetë e ca vjeçe, beqare që jeton në Londër. Ajo shkruan për karrierën e saj, imazhin për veten, veset, familjen, miqtë dhe marrëdhëniet romantike.</p>', 310, 45, ''),
(4, 'Besnikja', '<p>Besnikja është një roman shkruar nga autorja amerikane Veronica Roth. Ai plotëson trilogjinë që Roth filloi me romanin e saj debutues Divergjentja në 2011.Libri është shkruar nga këndvështrimi i Beatrice (Tris) dhe Tobias (Katër).[8Pas zbulimeve të romanit të mëparshëm, ata udhëtojnë përtej kufijve të qytetit për të zbuluar se çfarë qëndron përtej.</p>', 526, 100, ''),
(5, 'Tre Musketierët', '<p>Tre Musketierët është një roman aventure francez i shkruar në 1844 nga autori francez Alexandre Dumas. Ashtu si me disa nga veprat e tij të tjera, ai e shkroi atë në bashkëpunim me shkrimtarin Auguste Maquet. Është në zhanrin swashbuckler, i cili ka shpata dhe kalorës që luftojnë për drejtësi.\r\n\r\nI vendosur midis viteve 1625 dhe 1628, ai rrëfen aventurat e një të riu të quajtur d\'Artagnan (një personazh i bazuar në Charles de Batz-Castelmore d\'Artagnan) pasi ai largohet nga shtëpia për të udhëtuar në Paris, me shpresën për t\'u bashkuar me Musketierët e Gardës. Edhe pse d\'Artagnan nuk është në gjendje të bashkohet menjëherë me këtë trupë elitare, ai miqësohet nga tre nga musketierët më të frikshëm të epokës - Athos, Porthos dhe Aramis, \"tre musketierët\" ose \"tre të pandashmit\" .</p>', 700, 150, ''),
(6, 'Mbaron Me Ne', '<p>Mbaron Me Ne është një roman romantik nga Colleen Hoover. Bazuar në marrëdhënien mes nënës dhe babait të saj, Hoover e përshkroi atë si \"libri më i vështirë që kam shkruar ndonjëherë\".\r\nPersonazhi kryesor Lily nuk e ka pasur gjithmonë të lehtë, por kjo nuk e ka penguar kurrë që të punojë shumë për jetën që dëshiron. Ajo ka bërë një rrugë të gjatë nga qyteti i vogël në Maine ku u rrit - ajo u diplomua nga kolegji, u transferua në Boston dhe filloi biznesin e saj. Por kur ajo ndjen një shkëndijë me një neurokirurg të mrekullueshëm të quajtur Ryle Kincaid, gjithçka në jetën e Lily papritur duket pothuajse shumë e mirë për të qenë e vërtetë.</p>', 376, 100, ''),
(7, 'Ditari i Anne Frank', '<p>Ditari i Anne Frankut është një libër me shkrime nga ditari në gjuhën holandeze i mbajtur nga Ana Frank ndërsa ishte fshehur për dy vjet me familjen e saj gjatë pushtimit nazist të Holandës. Familja u kap në vitin 1944 dhe Ana Frank vdiq nga tifoja në kampin e përqendrimit Bergen-Belsen në vitin 1945. Ditarët e Anës u morën nga Miep Gies dhe Bep Voskuijl. Miep ia dha ato babait të Anës, Otto Frank, të mbijetuarit të vetëm të familjes, menjëherë pas përfundimit të Luftës së Dytë Botërore.\r\n\r\nQë atëherë ditari është botuar në më shumë se 70 gjuhë. Botuar së pari me titullin Het Achterhuis, ditari mori një vëmendje të gjerë kritike dhe popullore për paraqitjen e përkthimit të tij në gjuhën angleze.Libri është përfshirë në disa lista të librave më të mirë të shekullit të 20-të.</p>', 714, 25, ''),
(8, 'Aventurat e Sherlock Holmes', '<p>Aventurat e Sherlock Holmes është një përmbledhje me dymbëdhjetë tregime të shkurtra nga shkrimtari britanik Arthur Conan Doyle, botuar për herë të parë më 14 tetor 1892. Ai përmban tregimet e shkurtra më të hershme që paraqesin detektivin Sherlock Holmes, të cilat ishin botuar në dymbëdhjetë numra mujorë të revistës The Strand nga korriku 1891 deri në qershor 1892. Tregimet janë mbledhur në të njëjtën sekuencë, e cila nuk mbështetet nga asnjë kronologji fiktive. Personazhet e vetëm të përbashkët për të dymbëdhjetët janë Holmes dhe Dr. Watson dhe të gjithë janë të rrëfyera në vetën e parë nga këndvështrimi i Watson.\r\n\r\nNë përgjithësi, tregimet në Aventurat e Sherlock Holmes identifikojnë dhe përpiqen të korrigjojnë padrejtësitë sociale. Holmes është portretizuar  duke ofruar një ndjenjë të re, më të drejtë drejtësie. Historitë u pritën mirë dhe rritën shifrat e abonimeve të revistës The Strand, duke e shtyrë Doyle të ishte në gjendje të kërkonte më shumë para për grupin e tij të ardhshëm të tregimeve. Historia e parë, \"Një skandal në Bohemi\", përfshin personazhin e Irene Adler, e cila, pavarësisht se është paraqitur vetëm në këtë histori nga Doyle, është një personazh i spikatur në përshtatjet moderne të Sherlock Holmes, përgjithësisht si një interes dashurie për Holmes. Doyle përfshiu katër nga dymbëdhjetë tregimet nga ky koleksion në dymbëdhjetë tregimet e tij të preferuara të Sherlock Holmes, duke zgjedhur \"Aventurën e Bandës me pika\" si të preferuarin e tij të përgjithshëm.</p>', 307, 150, ''),
(1590595727, 'Keshtjella', 'Prove', 23, 2, 'Besnikja.jpg'),
(1590595729, 'Robots', 'Bejme prove', 234, 4, ''),
(1590595730, 'I ri', 'azsxdcfgvbhjnkl', 6, 2, ''),
(1590595731, 'Prove3', 'Testojme databazen', 123, 4, 'WhatsApp Image 2024-01-08 at 1.50.39 PM.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `libra_autor`
--

CREATE TABLE `libra_autor` (
  `ID_Autor` int(11) NOT NULL,
  `ID_Lib` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `libra_autor`
--

INSERT INTO `libra_autor` (`ID_Autor`, `ID_Lib`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(41, 1590595729),
(43, 1590595730),
(44, 1590595731);

-- --------------------------------------------------------

--
-- Table structure for table `libra_kategori`
--

CREATE TABLE `libra_kategori` (
  `ID_Kat` int(11) NOT NULL,
  `ID_Lib` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `libra_kategori`
--

INSERT INTO `libra_kategori` (`ID_Kat`, `ID_Lib`) VALUES
(8, 1),
(1, 2),
(2, 3),
(3, 4),
(4, 5),
(5, 6),
(6, 7),
(7, 8),
(11, 1590595729),
(12, 1590595730),
(13, 1590595731);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_id` int(11) NOT NULL,
  `pyetja1` text NOT NULL,
  `pyetja2` text NOT NULL,
  `pyetja3` text NOT NULL,
  `pyetja4` text NOT NULL,
  `pyetja5` text NOT NULL,
  `Vleresimi_pergjithshem` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`review_id`, `pyetja1`, `pyetja2`, `pyetja3`, `pyetja4`, `pyetja5`, `Vleresimi_pergjithshem`, `user_id`) VALUES
(7, 'Mire', 'Po', 'Po', 'Po', 'Po', 3, 27);

-- --------------------------------------------------------

--
-- Table structure for table `takimet`
--

CREATE TABLE `takimet` (
  `date_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `takimet`
--

INSERT INTO `takimet` (`date_id`, `user_id`, `title`, `date`, `time`) VALUES
(6, 31, 'Besnikja', '2024-01-20', '00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id_User` int(30) NOT NULL,
  `role` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id_User`, `role`, `username`, `password`, `name`, `lastname`, `email`, `phone`) VALUES
(26, 'admin', 'Artenida', 'Artenida1?', 'Artenida', 'Daci', 'artenidadaci@gmail.com', '12345678'),
(27, 'user', 'Erisa', 'Erisa123!', 'Erisa', 'Ahmeti', 'erisa@gmail.com', '12345678'),
(30, 'admin', 'Erisa', 'Erisa1234!', 'Erisa', 'Ahmeti', 'erisaAhmeti@gmail.com', '12345678'),
(31, 'user', 'Artenida', 'Artenida123!', 'Artenida', 'Daci', 'artenida@gmail.com', '12345678'),
(33, 'admin', 'Nexhi', 'Nexhi1?', 'Nexhi', 'Nexhi', 'nexhi@gmail.com', '3y456789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `autoret`
--
ALTER TABLE `autoret`
  ADD PRIMARY KEY (`ID_Autor`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`ID_Cart_Item`),
  ADD KEY `ID_Lib` (`ID_Lib`),
  ADD KEY `ID_User` (`ID_User`);

--
-- Indexes for table `donate`
--
ALTER TABLE `donate`
  ADD PRIMARY KEY (`donate_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `kategorite`
--
ALTER TABLE `kategorite`
  ADD PRIMARY KEY (`ID_Kat`);

--
-- Indexes for table `librat`
--
ALTER TABLE `librat`
  ADD PRIMARY KEY (`ID_Lib`);

--
-- Indexes for table `libra_autor`
--
ALTER TABLE `libra_autor`
  ADD KEY `libra_autor_ibfk_1` (`ID_Autor`),
  ADD KEY `libra_autor_ibfk_2` (`ID_Lib`);

--
-- Indexes for table `libra_kategori`
--
ALTER TABLE `libra_kategori`
  ADD KEY `libra_kategori_ibfk_1` (`ID_Kat`),
  ADD KEY `libra_kategori_ibfk_2` (`ID_Lib`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `takimet`
--
ALTER TABLE `takimet`
  ADD PRIMARY KEY (`date_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id_User`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `autoret`
--
ALTER TABLE `autoret`
  MODIFY `ID_Autor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `ID_Cart_Item` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `donate`
--
ALTER TABLE `donate`
  MODIFY `donate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kategorite`
--
ALTER TABLE `kategorite`
  MODIFY `ID_Kat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `librat`
--
ALTER TABLE `librat`
  MODIFY `ID_Lib` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1590595732;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `takimet`
--
ALTER TABLE `takimet`
  MODIFY `date_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id_User` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`ID_Lib`) REFERENCES `librat` (`ID_Lib`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`ID_User`) REFERENCES `users` (`ID_User`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `donate`
--
ALTER TABLE `donate`
  ADD CONSTRAINT `donate_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`ID_User`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `libra_autor`
--
ALTER TABLE `libra_autor`
  ADD CONSTRAINT `libra_autor_ibfk_1` FOREIGN KEY (`ID_Autor`) REFERENCES `autoret` (`ID_Autor`) ON UPDATE CASCADE,
  ADD CONSTRAINT `libra_autor_ibfk_2` FOREIGN KEY (`ID_Lib`) REFERENCES `librat` (`ID_Lib`) ON UPDATE CASCADE;

--
-- Constraints for table `libra_kategori`
--
ALTER TABLE `libra_kategori`
  ADD CONSTRAINT `libra_kategori_ibfk_1` FOREIGN KEY (`ID_Kat`) REFERENCES `kategorite` (`ID_Kat`) ON UPDATE CASCADE,
  ADD CONSTRAINT `libra_kategori_ibfk_2` FOREIGN KEY (`ID_Lib`) REFERENCES `librat` (`ID_Lib`) ON UPDATE CASCADE;

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`ID_User`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `takimet`
--
ALTER TABLE `takimet`
  ADD CONSTRAINT `takimet_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`ID_User`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
