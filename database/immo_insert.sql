INSERT INTO `category`(`name`, `isActive`) VALUES 
('maison', 1),
('appartement',1),
('garage',1),
('loft',1);

INSERT INTO `address`(`number`, `street`, `zipcode`, `country`, `city`) VALUES 
(2, 'rue malfidano', '62950', 'France', 'Noyelles-Godault'),
(24, 'rue de la libération', '62800', 'France', 'Lièvin'),
(20, 'rue pasteur', '75000', 'France', 'Paris');

INSERT INTO `user`(`name`, `firstname`, `email`, `password`, `date_birth`,`role`,`id_address`) VALUES 
('dufour','olivier','olivier.dufour@yahoo.com','020988','1988-09-02',1, 1),
('laslaa','mohammed','mohammed.laslaa@yahoo.com','coucou','1987-02-08',1,2),
('devise','theo','t.devise@laposte.net','coucou','1988-02-12',1,3);

INSERT INTO `message`(`name`, `object`, `message`, `isActive`, `isRead`,`id_user`) VALUES 
('coucou','test','ca fait chier git cest hard', 1, 1, 1),
('coucou','test','ca fait chier git cest hard', 1, 1, 2),
('coucou','test','ca fait chier git cest hard', 1, 1, 3);


INSERT INTO `property`(`name`, `typeproperty`, `price`, `reference`, `description`, `nb_bedroom`, `nb_room`, `nb_bathroom`, `surface`, `garden`, `energy_class`, `type_heating`, `garage`, `isActive`, `isTop`, `isVisible`, `id_address`, `id_user`, `id_cat`) VALUES ('Maison', 'sale', 125000, 'XXXXXXXf', 'Belle maison avec une vue incroyable en mer !', 3, 7, 2, 125, 2, 'C', 'gaz', 1, 1, 1, 1, 1, 2, 1),
('Garage','rental', 125000, 'XXXfdgXXXX', 'Garage spacieux idéal mécanicien', '', '', '', 20, '', '', '', '',1, 1, 1, 2, 3, 3),
('Appartement','sale', 125000, 'XXXXggXXX', 'Bel appartement avec une vue incroyable en mer !', 1, 4, 1, 70, '', 'C', 'electricity', 1, 1, 1, 1, 1, 1, 2);

INSERT INTO `image`(`name`, `path`, `isTop`, `id_property`) VALUES 
('holiday-house-177401_1280', 'holiday-house-177401_1280.jpg', 1, 1),
('agriculture-1807581_1920', 'agriculture-1807581_1920.jpg', 0, 1),
('kitchen-1940174_1280', 'kitchen-1940174_1280.jpg', 0, 1),
('holiday-house-177401_1280', 'holiday-house-177401_1280.jpg', 1, 2),
('agriculture-1807581_1920', 'agriculture-1807581_1920.jpg', 0, 2),
('kitchen-1940174_1280', 'kitchen-1940174_1280.jpg', 0, 2),
('holiday-house-177401_1280', 'holiday-house-177401_1280.jpg', 1, 3),
('agriculture-1807581_1920', 'agriculture-1807581_1920.jpg', 0, 3),
('kitchen-1940174_1280', 'kitchen-1940174_1280.jpg', 0, 3);


INSERT INTO `favorite`(`id_user`, `id_property`) VALUES 
(1,1),
(1,2),
(1,3),
(2,2),
(3,3);
