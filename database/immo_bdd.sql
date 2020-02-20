START TRANSACTION;

DROP DATABASE IF EXISTS bdd_immo;
CREATE DATABASE bdd_immo;
USE bdd_immo;

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
    `role` VARCHAR DEFAULT 1,
    `id_address` int, 
    `id_user` int, 
    `id_cat` int, 
    PRIMARY KEY (`id`),
    FOREIGN KEY (`id_user`) REFERENCES user(id),
    FOREIGN KEY (`id_address`) REFERENCES address(id),
    FOREIGN KEY (`id_cat`) REFERENCES category(id)
)ENGINE=innoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

COMMIT;