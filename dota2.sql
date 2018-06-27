-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 20, 2018 lúc 03:11 AM
-- Phiên bản máy phục vụ: 10.1.31-MariaDB
-- Phiên bản PHP: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dota2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `d2_bill`
--

CREATE TABLE `d2_bill` (
  `bill_id` int(8) NOT NULL,
  `bill_date` datetime NOT NULL,
  `user_id` int(8) NOT NULL,
  `bill_total` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `d2_bill`
--

INSERT INTO `d2_bill` (`bill_id`, `bill_date`, `user_id`, `bill_total`) VALUES
(43, '2018-06-16 23:41:00', 16, '115000'),
(44, '2018-06-16 23:49:00', 16, '100000');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `d2_billdetail`
--

CREATE TABLE `d2_billdetail` (
  `detail_id` int(8) NOT NULL,
  `bill_id` int(8) NOT NULL,
  `item_id` int(8) NOT NULL,
  `detail_qty` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `detail_dongia` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `detail_thanhtien` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `d2_billdetail`
--

INSERT INTO `d2_billdetail` (`detail_id`, `bill_id`, `item_id`, `detail_qty`, `detail_dongia`, `detail_thanhtien`) VALUES
(5, 43, 145, '1', '35000', '35000'),
(6, 43, 143, '2', '40000', '80000'),
(7, 44, 131, '1', '55000', '55000'),
(8, 44, 150, '3', '15000', '45000');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `d2_item`
--

CREATE TABLE `d2_item` (
  `item_id` int(8) NOT NULL,
  `item_title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `item_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `item_price` int(16) NOT NULL,
  `item_desciption` varchar(255) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `slot_id` int(2) NOT NULL,
  `type_id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `d2_item`
--

INSERT INTO `d2_item` (`item_id`, `item_title`, `item_image`, `item_price`, `item_desciption`, `slot_id`, `type_id`) VALUES
(105, 'Vigilance of the Manticore', '2d284fe6d6145ea9f1d9e7c4b8427261.jpg', 25000, '', 13, 7),
(106, 'Timberthaw', 'f69f292870eaca9e9e03a8f1856b6642.jpg', 30000, '', 13, 7),
(119, 'Shard of the Lost Star', '7ff0c6e746b16f8556b1fc35957cc320.png', 30000, '', 13, 7),
(120, 'Mulctant Pall', '008487242358965154c0be6cd7d27fe6.jpg', 210000, 'Immortal thay đổi skill', 4, 1),
(121, 'Shatterblast Crown', 'a3dcf02c70fb8ddec6600ad19829203a.jpg', 135000, '	\r\nImmortal của Ancient Apparition, thay đổi skill ulti', 1, 1),
(122, 'Lamb to the Slaughter', '0b9a35689034dab015e9ce2eb418b57d.png', 85000, 'Immortal thay đổi skill heX', 3, 1),
(123, 'Arms of Desolation', 'c835dd0303f887454f8d8345ee28ecee.png', 80000, '	\r\nImmortal SF\r\nItem bị đổi tên thành \"MY MOST ONE\"', 5, 1),
(124, 'Flourishing Lodestar', '1ddf112e65e3cca37047697cc1066ea7.jpg', 80000, '	\r\nImmortal có thay đổi skill', 1, 1),
(125, 'Staff of Perplex', '221ee18d211606cfcd4e4bb4e788ae89.png', 75000, '', 3, 1),
(126, 'Pulsar Remnant', '889067c5b0e45456afed65777f63a0d5.jpg', 75000, '', 3, 1),
(127, 'Bitter Lineage', 'd046e7221f295dcc369737b82652953d.jpg', 65000, '', 3, 1),
(128, 'Magus Apex', 'ce8dd85f9c3c0e062d5c498ab443074e.jpg', 65000, '', 1, 1),
(129, ' Damarakan Muzzle', 'ee014798afe50f97cc0027176688932b.png', 55000, '', 1, 1),
(130, ' Origins of Faith', '28381462ca5852d170f1ebbd5d135cac.jpg', 55000, '', 2, 1),
(131, ' Floodmask', 'e77557f18cf2ac6171ce6ac820215133.jpg', 55000, '', 1, 1),
(132, 'Razzil Midas Knuckles', 'cf7445dbca0b3eaae03d56327c138db4.jpg', 55000, '', 5, 1),
(133, ' Infernal Chieftain', 'cbf973b4f9c1c935a30af74df76ac140.png', 55000, '', 1, 1),
(134, ' Muh Keen Gun', '31a7ee0c682dff541dac3a947a43f33c.png', 55000, '', 3, 1),
(135, ' Bracers of Aeons', '5f4db96919da60f927bbdb69e2a0c579.jpg', 55000, '', 5, 1),
(136, ' Paraflare Cannon', '48a4e49878bd50b40c67277b22c7815d.jpg', 45000, '', 4, 1),
(137, ' Focal Resonance', '30e76539159e3177c0a184d464c298dd.png', 45000, '', 3, 1),
(138, ' Pyrexaec Floe', '5139b88dd9733374b5831d2cc7755b7e.jpg', 40000, '', 1, 1),
(139, ' Solar Forge', 'a62d0bd0739483dfe5a112e157e4857c.png', 40000, '', 1, 1),
(140, ' Arc of Manta', '89dd911d5e9475c08c5945924d7fc573.png', 40000, '', 3, 4),
(141, 'The Lightning Orchid', 'f74e1b6dbc743b6e41d4f9024546209f.jpg', 40000, '', 1, 1),
(142, ' Piston Impaler', 'aad51564e93363794433719f6bfb3088.jpg', 40000, '', 2, 1),
(143, ' Nothlic Burden', '02a5e9298ced7f8be8f2c0920cc8f2d0.jpg', 40000, '', 2, 1),
(144, ' Fin King Charm', 'a6faa9a05d34f33e48d40c3f3420cdf2.png', 40000, '', 3, 1),
(145, 'Elixir of Dragon Breath', 'a6b565fe2c6edc4ed28801465b677794.jpg', 35000, '', 5, 1),
(146, 'Hellborn Grasp', 'b6959a5312039bcae52b03416f2d0f59.jpg', 35000, '', 3, 1),
(147, 'Genuine Moon Griffon', 'e55ffb1406f8bba8a5e6ee45f4704f9d.png', 35000, '', 12, 1),
(148, 'Genuine Fluttering Staff', '21c9ed013ac18cb3f18ad17b7b3446f2.png', 15000, '', 3, 4),
(149, 'Shearing Deposition', '81b0f6d39dce6806a668d100aa5d886f.jpg', 15000, '', 4, 1),
(150, 'Tormented Staff', 'c4f2e1a4c7a21c4d6ffe255164aca3b3.png', 15000, '', 3, 1),
(151, ' Phantom Concord', 'bb14c7dbdaeb1182f61c08b47e106071.png', 15000, '', 3, 1),
(152, 'Daughters of Hydrophiinae', '8a571f6258c14aa0a4ead628cf112ad7.png', 15000, '', 4, 1),
(153, 'Burning Spear', 'c01f984206a006ee427b8bc655241c6d.jpg', 10000, '', 3, 2),
(154, 'Fathomless Ravager', 'de84b8ec9cc78faafdb3524c5507546b.jpg', 25000, '', 13, 7),
(155, 'Hinterland Stalker', '08930871fda75d1ffd11e7bca6b4c93d.png', 10000, '', 13, 7),
(156, 'Crucible of Light', '51fc7e86ca98ad90cb6287f7242d70eb.jpg', 5000, '', 13, 7),
(157, 'Frostshard Ascendant', 'af3bac388ddd83160161a3a3687ba7b5.jpg', 25000, '', 13, 7),
(158, 'Broken Scale', '005c7f92e5c90f45e916daa67f036240.png', 15000, '', 13, 7),
(159, 'Stargazer Curiosity', '87398d4ed5b9dc5739a9c56100197fab.png', 5000, '', 13, 7),
(160, 'Armature of the Belligerent Ram', '2ab92b54755af616f46a6aa9c5a2ff36.jpg', 15000, '', 13, 7),
(161, 'Compendium Bloody Ripper', '4ec1036ddb05967674eb8238cf6adef9.jpg', 10000, '', 13, 7),
(162, 'Fire Dragon of Doom', '07d1d5d9b1cbbbe01c3b9b759e52e6d7.png', 10000, '', 13, 7),
(163, 'Sign of the Netherfrost', '9202e5798b6f49f45d792f3dd64ec184.jpg', 30000, '', 13, 7),
(164, 'Arctic Recluse', '4389e38b849dfb818314da1402cf5bb4.jpg', 15000, '', 13, 7),
(165, 'Affront of the Overseer', 'fec172bbb7d23d1358ae7597200c8fa4.jpg', 20000, '', 13, 7),
(166, 'Iron Surge', 'b0cef4ef18aa7f16ad4ede411d54e15b.jpg', 30000, '', 1, 1),
(167, 'Mentor of the High Plains', 'efb60cfaa559ca78e813599cc031d76f.jpg', 10000, '', 13, 7),
(168, 'Jade Reckoning', 'f4392581d26aa17f27f29ab98e86afb1.jpg', 10000, '', 3, 1),
(169, 'Virtuous Roar', 'd84188024165af1472b84ea827b7a83e.png', 5000, '', 13, 7),
(170, 'Peregrine Flight', 'ec5c85153fa1de9a3badad5aa72a6d49.jpg', 30000, '', 3, 1),
(171, 'Herald of Measureless Ruin', 'e27908a4f95a915aa0f811d54aa2626b.jpg', 15000, '', 13, 7),
(172, 'Merry Wanderers Brush', '113c31f796ff641ff012289f8575673d.jpg', 10000, '', 3, 1),
(173, 'Lucid Torment', '45adf18e33f21274b.jpg', 30000, '', 13, 7),
(174, 'Adoring Wingfall', 'fa8de2d43b741ce5bed4f280a1cee436.png', 10000, '', 3, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `d2_slot`
--

CREATE TABLE `d2_slot` (
  `slot_id` int(2) NOT NULL,
  `slot_title` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `d2_slot`
--

INSERT INTO `d2_slot` (`slot_id`, `slot_title`) VALUES
(1, 'Head'),
(2, 'Backpack'),
(3, 'Weapon'),
(4, 'Shoulder'),
(5, 'Arms'),
(9, 'Off-hand'),
(12, 'Pet'),
(13, 'Fullset');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `d2_type`
--

CREATE TABLE `d2_type` (
  `type_id` int(2) NOT NULL,
  `type_title` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `d2_type`
--

INSERT INTO `d2_type` (`type_id`, `type_title`) VALUES
(1, 'Immortal'),
(2, 'Rare'),
(3, 'Arcana'),
(4, 'Mythical'),
(5, 'Uncommon'),
(6, 'Common'),
(7, 'Fullset');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `d2_users`
--

CREATE TABLE `d2_users` (
  `user_id` int(8) NOT NULL,
  `user_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_login` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `d2_users`
--

INSERT INTO `d2_users` (`user_id`, `user_name`, `user_email`, `user_login`, `user_password`, `user_image`) VALUES
(14, 'Nguyễn Thế Trung', 'trungocvl@gmail.com', 'trung1379', '73717dd9132cba21cb110726e6a5fa45', 'uploads/55ad40de68a97e708e2f35bbb3d1c7eb.jpg'),
(16, 'Nhật Nguyễn', 'nhat1379@gmail.com', 'nhat1379', '9bbda34538b8a13e6acff8beec4db65f', 'uploads/45adf18e33f21274b.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `d2_bill`
--
ALTER TABLE `d2_bill`
  ADD PRIMARY KEY (`bill_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `d2_billdetail`
--
ALTER TABLE `d2_billdetail`
  ADD PRIMARY KEY (`detail_id`),
  ADD KEY `bill_id` (`bill_id`,`item_id`),
  ADD KEY `item_id` (`item_id`);

--
-- Chỉ mục cho bảng `d2_item`
--
ALTER TABLE `d2_item`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `slot_id` (`slot_id`,`type_id`),
  ADD KEY `type_id` (`type_id`);

--
-- Chỉ mục cho bảng `d2_slot`
--
ALTER TABLE `d2_slot`
  ADD PRIMARY KEY (`slot_id`);

--
-- Chỉ mục cho bảng `d2_type`
--
ALTER TABLE `d2_type`
  ADD PRIMARY KEY (`type_id`);

--
-- Chỉ mục cho bảng `d2_users`
--
ALTER TABLE `d2_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `d2_bill`
--
ALTER TABLE `d2_bill`
  MODIFY `bill_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT cho bảng `d2_billdetail`
--
ALTER TABLE `d2_billdetail`
  MODIFY `detail_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `d2_item`
--
ALTER TABLE `d2_item`
  MODIFY `item_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=177;

--
-- AUTO_INCREMENT cho bảng `d2_slot`
--
ALTER TABLE `d2_slot`
  MODIFY `slot_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `d2_type`
--
ALTER TABLE `d2_type`
  MODIFY `type_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `d2_users`
--
ALTER TABLE `d2_users`
  MODIFY `user_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `d2_bill`
--
ALTER TABLE `d2_bill`
  ADD CONSTRAINT `d2_bill_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `d2_users` (`user_id`);

--
-- Các ràng buộc cho bảng `d2_billdetail`
--
ALTER TABLE `d2_billdetail`
  ADD CONSTRAINT `d2_billdetail_ibfk_1` FOREIGN KEY (`bill_id`) REFERENCES `d2_bill` (`bill_id`),
  ADD CONSTRAINT `d2_billdetail_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `d2_item` (`item_id`);

--
-- Các ràng buộc cho bảng `d2_item`
--
ALTER TABLE `d2_item`
  ADD CONSTRAINT `d2_item_ibfk_1` FOREIGN KEY (`slot_id`) REFERENCES `d2_slot` (`slot_id`),
  ADD CONSTRAINT `d2_item_ibfk_2` FOREIGN KEY (`type_id`) REFERENCES `d2_type` (`type_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
