START TRANSACTION;

DROP DATABASE IF EXISTS bdd_immo;
CREATE DATABASE bdd_immo;
USE bdd_immo;

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
    `id` int(10) NOT NULL AUTO_INCREMENT,
    `name` varchar(255) NOT NULL,
    `firstname` varchar(255) NOT NULL,
    `email` varchar(255) NOT NULL,
    `password` varchar(255) NOT NULL,
    `date_birth` DATETIME NOT NULL, 
    `date_create` DATETIME DEFAULT CURRENT_DATE,
    `date_update` DATETIME DEFAULT CURRENT_DATE,
    `date_delete` DATETIME DEFAULT CURRENT_DATE,
    `role` varchar DEFAULT 1,
    `id_address` int, 
    PRIMARY KEY (`id`),
    FOREIGN KEY (`id_adress`) references address(id)
)ENGINE=innoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `property`;
CREATE TABLE `property` (
    `id` int(10) NOT NULL AUTO_INCREMENT,
    `name` varchar(255) NOT NULL,
    `description` varchar(255) NOT NULL,
    `nb_bedroom` INT NOT NULL,
    `nb_room` INT NOT NULL,
    `nb_bathroom` INT NOT NULL,
    `surface` INT NOT NULL, 
    `garden` INT NOT NULL, 
    `energy_class` varchar(255) NOT NULL,
    `type_heating` varchar(255) NOT NULL,
    `garage` BOOLEAN,
    `isActive` BOOLEAN,
    `isTop` BOOLEAN,
    `isVIsible` BOOLEAN,
    `date_create` DATETIME DEFAULT CURRENT_DATE,
    `date_update` DATETIME DEFAULT CURRENT_DATE,
    `date_delete` DATETIME DEFAULT CURRENT_DATE,
    `id_user` INT,
    `id_cat` INT,
    `id_address` INT,
    FOREIGN KEY(`id_user`) REFERENCES users(id), 
    FOREIGN KEY(`id_cat`) REFERENCES category(id), 
    FOREIGN KEY(`id_address`) REFERENCES address(id)
)ENGINE=innoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

COMMIT;