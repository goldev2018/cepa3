-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2018 at 04:29 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cepa`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` text NOT NULL,
  `password` varchar(64) NOT NULL DEFAULT '',
  `usertype` varchar(10) NOT NULL DEFAULT '',
  `fullname` text NOT NULL,
  `image` longblob NOT NULL,
  `position` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `password`, `usertype`, `fullname`, `image`, `position`) VALUES
(1, 'admin@cepa.com', '0192023a7bbd73250516f069df18b500', 'admin', 'Admin', 0x89504e470d0a1a0a0000000d49484452000000e1000000e10803000000096d224800000048504c5445ffffffb2b1b0afaeadb3b2b1fcfcfcbab9b8f7f7f7b8b7b6f8f8f8b9b8b7f4f4f4bdbcbbf0f0efc2c1c0dcdcdbe4e4e3cdcdccc6c5c4d7d6d6ebeaeacbcac9dbdadacccdcbd3d2d2c8306879000006b949444154789ced9deb92a3380c46dbc60402983bc3fbbfe9024977874b823196647a757e4cd5ec56a5f8c6b26cc996fcf5c5300cc3300cc3300cc3300cc3300cc3300cc3300cc3300cc3300cc3300cc3300cc36ca092a6e8eafe41dde54573a3fe248724455da5611405412082c71f51744f7599378afadb1c90f53a0ac4364190b6454cfd8567504d1f4929dfe89b18feb7ce2f6ab02ac9b5f8a8ee4764f4ef82e6aab23a3491f72db22dae35902a1bccd358dfa431a8aea431abd363fa1e1adbe222b6aa72fdce79ee688cca86fae34d68da8306fa4a9afb3f8c79642d4f4ca69a502bf88c2acfe87b0ca3d7969a597898f530d6fe5a6a713f2f70d4587a6aa92a3fe162e612ab8c5acc16ea9c8ff15fa2eadc091c24a6fe49742a7090a87d93d8d96d633e48acfc723785637d23ad4f3bf1c6f5084e94feac8bc91d42a01035b5b06f540523504405b5b407aa06b151e18f432d422081e3fecd87a998548ef66a9b7860a7aa06d4274448bf2a36407ef4892ca905aa12d2464789d4cea6011638f8535a81ca4150bf07adb329e0050a4dba62a4f002697736e0b370a2251c44d0c5fe87902ebf98b98debdfd2932984ddcefc40b701571a47a108a87c4d8364a442f644bea6878a0b571099e90d2ab45f4364a60dc672ff40d21cd638cce2ef2aa4499ef6680285b8534cc41bce86e609c544449c864413b1c09b864449b71c6d351c156afc0b7ec039b6250439b7183a053527c077a6b71655a1c48f116153dd6b85f8cbc5df57986105874f85dd9f57887f5aca0a59212bfcff29ccd115fefdf5f0efefda9077de0447c10a334d234444908a428d808526b8c6879bc568098af8fe7e260a77b9a0c82682dfa47925223906767ef1f9039a24ab0f782771892c49aa8513c49d29feae74e27c15972954b731d0d67cb2ca84046d22e2a7a19e6099295d49224c99c50a4977ed0be9420de5d5bd1c655b435901a530e28b80b474a64318c494f4ba7e0c7b537f82b8fa097e26de891bd8dca0afb213244a1740d456be0a4ca905426715030f3a2c80e66b24dd05e85f146088212992886b62b80d384d7a664d0665a741e74381e5480163a744d9994d3a10819e54013f0058322461a9cc16ee4f137d2955ffc1f1c57de99dc0afc4a9440f050e124b771e55de3d14388419ce6a6864eaa5c06173e3a87d84d47e79d1171cf5c26a7d5a079734e703e2a0f66727f32479fd2757274f86e5ac882bf6c15cc7c937f30be7caa1663712324d3f25e36234cb60d6b132696d3506e92c29930df620659f1006182a7bdae4fcaa842a2a2ba71af6b3cc68a3a71f97215d27e5a4fee99328fbd957dcba2a383a1fd37e6e90c5afd3aa689ad30e23f5f27d72e1e2b3fc904639e89ba950dd4b974919d60479ef6100e71fa917ffd049d1469f7b79ff081069bd68779d2c32234185becb69d6532dea170bd9ada9f73b7a4b19b545b6b0c266756c2723e4acdb6697c4a05aba76756bfa54bc1d4939c8abf2a5bc6101da3c0d41ed87d9bef9e4cd83b0a62b433931d336fc55d75b2f24ac07f0095ec0f1a197ae7c93ff534ddeb75aa7f770e09eeaaaec8aed75ee56be9fbc58fd778b8fdb6bd97ee8911fdf463e2ce13317ba0146ffdddd4eac834fb07c07402585de714c08cd6963833077d4787c1ba2862574ff2d05f08daa61aa625a010efd706cb2b24c3f1d82fa1bf374930c746ffcd8c1307c6d68a44f0027a90ee6d3ee46220737dba68776b111d8b17072f8042688d2aacbdec7ec836fe9757838108192981c7874642eb3eaf366e9e6e3aca887b1b3cb5dc1483c7127e1b18309b46ecb894a878fff68fb8343cced5ea08b9cb6fce6fc4fb99798bcdb8a52e1daa3029e645b22ef4e977eb866c8f6b86dbd8f5bc565884cdd65a8d01ab31dc3dddd61db85101e57990d843eb3963872a8ffbc15e8e836434e2de3132e6a4d1abcfa2d2b4ea76e62bce688769c9d8a0ab3c8d08ab337a77cb75171b6b9e9cdb7fdf616a75a7f7aed47bf91a9fd201e4f5b9060dfd905b55afb0cd64d331aea2f3745569643b89762f7083b6783f1ee812bac5a632aff97c25f029b4a619cea495758345d88afb1527c63915d04b97e0fc8e130ea76ad21b418442fb36b9f381a0bc7175a0b9f1cdc80a3368172833cf4e6a583c7a7f139548c89dae5ca15474261e45eddae38d0f31bb9eba32b0e947d03d51342631e44a9fe924378201206ab7a85c6389d01dc440090c8d048af929e596368a6780dae9c6368a6384ffec160f6a4e7553de98851ab5ab4f7e220308a1233eaaf3c456ba0f04a49c435266945dc3eddae31e91572bdd8f7158389985c7a0885d87fc7fbdad350886a77225e79351cd9bfcf77cde0f797dde2a84b9dc76cb1eb6a926b86f72fecdde6436aba0ac8a203ff7fd18c7a314dbf4d520000000049454e44ae426082, 'Engineer');

-- --------------------------------------------------------

--
-- Table structure for table `newsroom`
--

CREATE TABLE `newsroom` (
  `id` int(10) UNSIGNED NOT NULL,
  `newsroom_path` longtext NOT NULL,
  `newsroom_desc` longtext NOT NULL,
  `newsroom_title` text NOT NULL,
  `newsroom_type` text NOT NULL,
  `email` text NOT NULL,
  `newsroom_datetime` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsroom`
--

INSERT INTO `newsroom` (`id`, `newsroom_path`, `newsroom_desc`, `newsroom_title`, `newsroom_type`, `email`, `newsroom_datetime`) VALUES
(13, 'newsroomfiles/5d3235d2.jpeg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'asdfghjjll', 'image/jpeg', 'admin@cepa.com', '5:34pm  Wednesday 31st October 2018'),
(14, 'newsroomfiles/234c2626.png', 'qwerty', '12345', 'image/png', 'admin@cepa.com', '10:59am  Saturday 3rd November 2018'),
(15, 'newsroomfiles/44282b72.jpeg', 'asdfgh', '67890', 'image/jpeg', 'admin@cepa.com', '11:00am  Saturday 3rd November 2018'),
(17, 'newsroomfiles/5b0a00b0.pdf', 'qqqqqqqqqqq', 'aaaaa', 'application/pdf', 'admin@cepa.com', '11:53am  Tuesday 6th November 2018');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsroom`
--
ALTER TABLE `newsroom`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `newsroom`
--
ALTER TABLE `newsroom`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;