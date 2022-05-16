SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";



CREATE TABLE `bet` (
  `id_bet` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_lot` int(11) NOT NULL,
  `bet_date` datetime NOT NULL,
  `sum` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



CREATE TABLE `category` (
  `id_category` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



CREATE TABLE `lots` (
  `id_lot` int(11) NOT NULL,
  `id_winner` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `data_create` datetime NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `start_price` varchar(50) NOT NULL,
  `end_date` datetime NOT NULL,
  `bet_step` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `reg_data` datetime NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `avatar` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



ALTER TABLE `bet`
  ADD PRIMARY KEY (`id_bet`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_lot` (`id_lot`);



ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);



ALTER TABLE `lots`
  ADD PRIMARY KEY (`id_lot`),
  ADD UNIQUE KEY `id_winner` (`id_winner`),
  ADD UNIQUE KEY `id_category` (`id_category`),
  ADD UNIQUE KEY `id_user` (`id_user`);



ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);



ALTER TABLE `bet`
  MODIFY `id_bet` int(11) NOT NULL AUTO_INCREMENT;



ALTER TABLE `category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT;



ALTER TABLE `lots`
  MODIFY `id_lot` int(11) NOT NULL AUTO_INCREMENT;



ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;



ALTER TABLE `bet`
  ADD CONSTRAINT `bet_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `bet_ibfk_2` FOREIGN KEY (`id_lot`) REFERENCES `lots` (`id_lot`);



ALTER TABLE `lots`
  ADD CONSTRAINT `lots_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `category` (`id_category`),
  ADD CONSTRAINT `lots_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;