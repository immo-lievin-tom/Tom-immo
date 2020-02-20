START TRANSACTION;

DROP DATABASE IF EXISTS bdd_immo;
CREATE DATABASE bdd_immo;
USE bdd_immo;

DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
    `id` INT(10) NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `date_create` DATETIME DEFAULT CURRENT_DATE,
    `date_update` DATETIME DEFAULT CURRENT_DATE,
    `date_delete` DATETIME DEFAULT CURRENT_DATE,
    `isActive` BOOLEAN DEFAULT 1,
    PRIMARY KEY (`id`)
)ENGINE=innoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `address`;
CREATE TABLE `address` (
    `id` INT(10) NOT NULL AUTO_INCREMENT,
    `number` INT NOT NULL,
    `street` VARCHAR(255) NOT NULL,
    `zipcode` VARCHAR(255) NOT NULL,
    `country` VARCHAR(255) NOT NULL, 
    `city` VARCHAR(255) NOT NULL, 
    `date_create` DATETIME DEFAULT CURRENT_DATE,
    `date_update` DATETIME DEFAULT CURRENT_DATE,
    `date_delete` DATETIME,
    `isActive` BOOLEAN DEFAULT 1,
    PRIMARY KEY (`id`)
)ENGINE=innoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
    `id` INT(10) NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `firstname` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `date_birth` DATETIME NOT NULL, 
    `phone_number` INT NOT NULL,
    `date_create` DATETIME DEFAULT CURRENT_DATE,
    `date_update` DATETIME DEFAULT CURRENT_DATE,
    `date_delete` DATETIME DEFAULT CURRENT_DATE,
    `role` VARCHAR(255),
    `id_address` int, 
    PRIMARY KEY (`id`),
    FOREIGN KEY (`id_address`) REFERENCES address(id)
)ENGINE=innoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `message`;
CREATE TABLE `message` (
    `id` int(10) NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `object` VARCHAR(255) NOT NULL,
    `message` VARCHAR(255) NOT NULL,
    `isActive` BOOLEAN NOT NULL,
    `isRead` BOOLEAN NOT NULL,
    `date_create` DATETIME DEFAULT CURRENT_DATE,
    `date_update` DATETIME DEFAULT CURRENT_DATE,
    `date_delete` DATETIME DEFAULT CURRENT_DATE,
    `id_user` INT,
    PRIMARY KEY (`id`),
    FOREIGN KEY (`id_user`) REFERENCES user(id)
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
    `role` VARCHAR(255),
    `id_address` int, 
    `id_user` int, 
    `id_cat` int, 
    PRIMARY KEY (`id`),
    FOREIGN KEY (`id_user`) REFERENCES user(id),
    FOREIGN KEY (`id_address`) REFERENCES address(id),
    FOREIGN KEY (`id_cat`) REFERENCES category(id)
)ENGINE=innoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `image`;
CREATE TABLE `image` (
    `id` int(10) NOT NULL AUTO_INCREMENT,
    `name` varchar(255) NOT NULL,
    `path` varchar(255) NOT NULL,
    `date_create` DATETIME DEFAULT CURRENT_DATE,
    `date_update` DATETIME DEFAULT CURRENT_DATE,
    `date_delete` DATETIME DEFAULT CURRENT_DATE,
    `default` BOOLEAN NOT NULL,
    `id_property` int, 
    PRIMARY KEY (`id`),
    FOREIGN KEY (`id_property`) REFERENCES property(id)
)ENGINE=innoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `favorite`;
CREATE TABLE `favorite` (
    `id` int(10) NOT NULL AUTO_INCREMENT,
    `date_add` DATETIME DEFAULT CURRENT_DATE,
    `id_user` int,
    `id_property` int,
    PRIMARY KEY (`id`),
    FOREIGN KEY (`id_user`) REFERENCES user(id),
    FOREIGN KEY (`id_property`) REFERENCES property(id)
)ENGINE=innoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

COMMIT;