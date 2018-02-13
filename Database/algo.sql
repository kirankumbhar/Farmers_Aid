-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2017 at 09:33 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `algo`
--

-- --------------------------------------------------------

--
-- Table structure for table `club`
--

CREATE TABLE `club` (
  `FarmerEmail` varchar(100) NOT NULL,
  `Type of Product` varchar(100) NOT NULL,
  `Area` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `club`
--

INSERT INTO `club` (`FarmerEmail`, `Type of Product`, `Area`) VALUES
('akashmhatre@gmail.com', 'Rice,Sugarcane', 244),
('farmer@gmail.com', 'wheat', 123),
('test@test.com', 'ggg', 4000),
('vinaypatil@gmail.com', 'Okra', 123);

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `FarmerEmail` varchar(100) NOT NULL,
  `Need` varchar(500) NOT NULL,
  `Contact` int(10) NOT NULL,
  `Name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`FarmerEmail`, `Need`, `Contact`, `Name`) VALUES
('akashmhatre@gmail.com', 'Need money to dig a borewell', 2147483647, 'Akash Mhatre'),
('vinaypatil@gmail.com', 'Need of money for fertlizers', 1234567890, 'Vinay Patil');

-- --------------------------------------------------------

--
-- Table structure for table `fertilizer`
--

CREATE TABLE `fertilizer` (
  `Name` varchar(500) NOT NULL,
  `Type` varchar(500) NOT NULL,
  `Description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fertilizer`
--

INSERT INTO `fertilizer` (`Name`, `Type`, `Description`) VALUES
('Sodium Nitrates', 'Chemical Fertilizers', '	Sodium nitrate is also referred to as chilates or Chilean nitrate and contains refined nitrogen in amounts up to 16 percent. This makes the nitrogen immediately available to the plants and is one of the most valuable sources of plant nitrogen. Using sodium nitrate in the soil is particularly beneficial for young plants and garden vegetables. Acidic soils benefit the most with the addition of sodium nitrate. Sodium nitrate should not be used in excess as it can damage plants.'),
('Ammonia', 'Chemical Fertilizers', 'Ammonia is a liquid gas form of chemical fertilizer consisting of 80 percent nitrogen. The fertilizer is available as a liquid since, under optimal pressure and temperature, ammonia becomes liquid. Aqueous ammonia is another form of ammonia fertilizer obtained from mixing ammonia with water. Both forms of ammonia fertilizer are used by adding to irrigation water or into the soil with specially devised containers. Ammonia is not recommended for use by the home gardener as its use and application is cost effective only when used on a larger scale.'),
('Urea', 'Chemical fertilizer', 'This type of fertilizer usually is available to the public in a white, crystalline, organic form. It is a highly concentrated nitrogenous fertilizer and fairly hygroscopic. This also means that this fertilizer can be quite difficult to apply. Urea is also produced in granular or pellet forms and is coated with a non-hygroscopic inert material. It is highly soluble in water and therefore, subject to rapid leaching. It is, however, quick-acting and produces quick results. When applied to the soil, its nitrogen is rapidly changed into ammonia. Similar to ammonium nitrate, urea supplies nothing but nitrogen and the application of Urea as fertilizer can be done at sowing time or as a top-dressing, but should not be allowed to come into contact with the seed.'),
('Rock Phosphate', 'Organic Fertilizer', 'As a type of fertilizer, rock phosphate occurs as natural deposits in some countries. This fertilizer type has its advantages and disadvantages. The advantage is that with adequate rainfall this fertilizer results in a long growing period which can enhance crops. Powdered phosphate fertilizer is an excellent remedy for soils that are acidic and has a phosphorous deficiency and requires soil amendments.\r\nHowever, the disadvantage is that although phosphate fertilizer such as rock phosphate contains 25 to 35% phosphoric acid, the phosphorous is insoluble in water. It has to be pulverized to be used as a type of fertilizer before rendering satisfactory results in garden soil. Thus it is not surprising that Rock Phosphate is used to manufacture superphosphate which makes the Phosphoric acid water soluble.\r\n'),
('Bonemeal', 'Organic Fertilizer', 'Bonemeal as a fertilizer type needs no introduction. Bone-meal is used as a phosphate fertilizer type and is available in two types: raw and steamed. The raw bone-meal contains 4% organic Nitrogen that is slow acting, and 20 to 25% phosphoric acid that is not soluble in water. The steamed bone-meal on the other hand has all the fats, greases, nitrogen and glue-making substances removed as a result of high pressure steaming. But it is more brittle and can be ground into a powder form. In powder form this fertilizer is of great advantage to the gardener in that the rate of availability of the phosphoric acid depends on its pulverization. This fertilizer is particularly suitable as a soil amendment for acid soil and should be applied either at sowing time or even a few days prior to sowing. '),
('Sulphate Of Potash', 'Chemical Fertlizer', 'Sulphate of potash is a fertilizer type manufactured when potassium chloride is treated with magnesium sulphate. It dissolves readily in water and can be applied to the garden soil at any time up to sowing. Some gardeners prefer using sulphate of potash over muriate of potash.');

-- --------------------------------------------------------

--
-- Table structure for table `pesticides`
--

CREATE TABLE `pesticides` (
  `Name` varchar(500) NOT NULL,
  `Type` varchar(500) NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesticides`
--

INSERT INTO `pesticides` (`Name`, `Type`, `Description`) VALUES
('Azoxystrobin', 'Fungicide', 'An experimental compound used on cereals, vegetables, fruit crops, peanuts, turf, ornamentals, stone fruit, bananas, rice, apples, grapes, and potatoes. This chemical does not leach and is unlikely to contaminate water bodies. It is found to exhibit very low ecological risks, to aquatic life, birds, and mammals. Other names include Abound, Amistar, Bankit, Heritage, and Quadris.'),
('Atrazine', 'Herbicide', 'A commonly used, effective and inexpensive herbicide used to eliminate noxious weeds in major crops. It frequently contaminates groundwater and is can causes male amphibians (frogs) to change gender. It is restricted in Europe.'),
('Aldicarb sulfone', 'Insecticide', 'Active ingredient in pesticide Temik. It is effective against thrips, aphids, spider mites, lygus, fleahoppers, and leafminers, but is primarily used as a nematicide in potato crops. Its weakness is its high level of solubility, which restricts its use in certain areas where the water table is close to the surface.'),
('Dieldrin', 'Insecticide', 'Banned insecticide as of 1987 and no longer produced in the US. used to control insects on cotton, corn and citrus crops. Used to control locusts and mosquitoes, as a wood preserve, and for termite control. (EPA)'),
('Trifluralin', 'Herbicide', 'Herbicide on used on grass, to control broadleaf weeds and on some fruit and vegetable crops, flowers and shrubs such as cotton, alfalfa, sunflowers and soybeans are examples. Insoluble in water but does not leave residues on crops so residues only occur in root tissues. Considered a pre-emergence herbicide');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Product Type` varchar(100) NOT NULL,
  `Product Name` varchar(100) NOT NULL,
  `Description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rent`
--

CREATE TABLE `rent` (
  `SellerEmail` varchar(100) NOT NULL,
  `Area` int(11) NOT NULL,
  `Rent/Month` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rent`
--

INSERT INTO `rent` (`SellerEmail`, `Area`, `Rent/Month`) VALUES
('farmer@gmail.com', 300, 5000),
('sachinjadhav@gmail.com', 345, 35),
('vinaypatil@gmail.com', 100, 10000);

-- --------------------------------------------------------

--
-- Table structure for table `seeds`
--

CREATE TABLE `seeds` (
  `Type` varchar(500) NOT NULL,
  `Name` varchar(500) NOT NULL,
  `Description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seeds`
--

INSERT INTO `seeds` (`Type`, `Name`, `Description`) VALUES
('Cereals ', 'Paddy (dhan)	', 'Paddy, also called rice paddy, small, level, flooded field used to cultivate rice in southern and eastern Asia. Wet-rice cultivation is the most prevalent method of farming in the Far East, where it utilizes a small fraction of the total land yet feeds the majority of the rural population. Rice was domesticated as early as 3500 bc, and by about 2,000 years ago it was grown in almost all of the present-day cultivation areas, predominantly deltas, floodplains and coastal plains, and some terraced valley slopes.\r\n'),
('Cereals	', 'Wheat (Gehon)', 'Wheat species possess an erect smooth stem with linear leaves that grow in two rows on either side of the stem with larger ''flag'' leaves at the top of the stem. The stem terminates in a spike that is made up on individual spikelets, each possessing 3 to 9 florets. The wheat fruit develops within the spikelets, maturing to a seed (kernel). Wheat can reach 1.2 m (4 ft) in height and like other cereals, has been developed into different varieties that are adapted to planting at different times of the year. Spring wheat is planted for a late summer harvest, whereas Winter wheat is planted for harvesting in early to mid summer. Overwintering varieties are more commonly grown in regions with mild winters. Wheat may be referred to by variety and these include durum or macaroni wheat (Triticum durum), club wheat (Triticum compactum), spelt wheat (Triticum spelta) and bread wheat (Triticum aestivum). Wheat originated in the Fertile Crescent of the Middle East.'),
('Millets', 'Maize(Makka)', 'Corn (Zea mays), also called Indian corn or maize, cereal plant of the grass family (Poaceae) and its edible grain. The domesticated crop originated in the Americas and is one of the most widely distributed of the worlds food crops. Corn is used as livestock feed, as human food, as biofuel, and as raw material in industry. In the United States the colourful variegated strains known as Indian corn are traditionally used in autumn harvest decorations.\r\nCommercial classifications, based mainly on kernel texture, include dent corn, flint corn, flour corn, sweet corn, and popcorn. Dent corn is characterized by a depression in the crown of the kernel caused by unequal drying of the hard and soft starch making up the kernel. Flint corn, containing little soft starch, has no depression. Flour corn, composed largely of soft starch, has soft, mealy, easily ground kernels. Sweet corn has wrinkled translucent seeds; the plant sugar is not converted to starch as in other types. Popcorn, an extreme type of flint corn characterized by small hard kernels, is devoid of soft starch, and heating causes the moisture in the cells to expand, making the kernels explode. Improvements in corn have resulted from hybridization, based on crossbreeding of superior inbred strains.\r\n\r\n'),
('Millets', 'Sorghum (Jowar)', 'Sorghum is a genus of numerous species of grasses, some of which are raised for grain and many of which are used as fodder plants either cultivated or as part of pasture. The plants are cultivated in warmer climates worldwide. Species are native to tropical and subtropical regions of all continents in addition to Oceania and Australasia. Sorghum is in the subfamily Panicoideae and the tribe Andropogoneae (the tribe of big bluestem and sugar cane). Sorghum is known as great millet and guinea corn in West Africa, kafir corn in South Africa, dura in Sudan, mtama in eastern Africa, jowar in India and kaoliang in China.\r\n\r\nIn Arab cuisine, the unmilled grain is often cooked to make cous-cous, porridges, soups, and cakes. Many poor use it, along with other flours or starches, to make bread. The seeds and stalks are fed to cattle and poultry. Some varieties have been used for thatch, fencing, baskets, brushes and brooms, and stalks have been used as fuel. Medieval Islamic texts list medical uses for the plant.\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Name` varchar(100) NOT NULL,
  `Category` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `District` varchar(100) NOT NULL,
  `Address` varchar(500) NOT NULL,
  `Contact` int(10) NOT NULL,
  `City` varchar(100) NOT NULL,
  `Pincode` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Name`, `Category`, `Email`, `Password`, `District`, `Address`, `Contact`, `City`, `Pincode`) VALUES
('akash Mhatre', 'farmer', 'akashmhatre@gmail.com', '123', '1102', 'Uran', 2147483647, 'Uran', 543216),
('Vinay Patil', 'farmer', 'farmer@gmail.com', '123', 'thane', 'thane station', 1234567890, '', 0),
('Sachin Jadhav', 'seller', 'sachinjadhav@gmail.com', '123', '1102', 'near saibaba mandir,Ghansoli', 2147483647, 'Ghansoli', 433211),
('Ad', 'donor', 'test@test.com', '123', '', 'we', 2147483647, 'wer', 400086),
('Vinay Patil', 'farmer', 'vinaypatil@gmail.com', '123', '1102', 'Khadakpada,Kalyan', 2147483647, 'Kalyan', 421306);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `club`
--
ALTER TABLE `club`
  ADD PRIMARY KEY (`FarmerEmail`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`FarmerEmail`);

--
-- Indexes for table `rent`
--
ALTER TABLE `rent`
  ADD PRIMARY KEY (`SellerEmail`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Email`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `club`
--
ALTER TABLE `club`
  ADD CONSTRAINT `club_ibfk_1` FOREIGN KEY (`FarmerEmail`) REFERENCES `user` (`Email`);

--
-- Constraints for table `donation`
--
ALTER TABLE `donation`
  ADD CONSTRAINT `donation_ibfk_1` FOREIGN KEY (`FarmerEmail`) REFERENCES `user` (`Email`);

--
-- Constraints for table `rent`
--
ALTER TABLE `rent`
  ADD CONSTRAINT `rent_ibfk_1` FOREIGN KEY (`SellerEmail`) REFERENCES `user` (`Email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
