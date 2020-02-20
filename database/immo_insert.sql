INSERT INTO `category`(`name`) VALUES 
('maison'),
('appartement',1),
('garage',1),
('loft',1);

INSERT INTO `message`(`name`, `object`, `message`, `isActive`, `isRead`,`id_user`) VALUES 
('coucou','test','ca fait chier git cest hard', 1, 1, 1),
('coucou','test','ca fait chier git cest hard', 1, 1, 2),
('coucou','test','ca fait chier git cest hard', 1, 1, 3);

INSERT INTO `user`(`name`, `firstname`, `email`, `password`, `date_birth`,`role`,`id_address`) VALUES 
('dufour','olivier','olivier.dufour@yahoo.com','020988','02-09-1988','admin', 1),
('laslaa','mohammed','mohammed.laslaa@yahoo.com','coucou','02-08-1987','admin',2),
('dufour','olivier','olivier.dufour@yahoo.com','coucou','02-79-1988','admin',3);

INSERT INTO `favorite`(`id_user`, `id_property`) VALUES 
(1,1),
(2,2),
(3,3);