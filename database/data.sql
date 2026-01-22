
CREATE TABLE `user` (
  id int(11) NOT NULL AUTO_INCREMENT,
  login varchar(100) NOT NULL,
  mdp varchar(255) NOT NULL,
  email varchar(255) NOT NULL,
  remember varchar(255),
  avatar varchar(255),
  commercant boolean NOT NULL,

  PRIMARY KEY (id),
  UNIQUE KEY email (email)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;


insert into user (login, mdp, email, commercant) values ('Seb', sha1('123'), 'seb@gmail.com', False);
insert into user (login, mdp, email, commercant) values ('Vincent', sha1('123'), 'vincent@gmail.com', False);
insert into user (login, mdp, email, commercant) values ('Nicolas', sha1('123'), 'nicolas@gmail.com', False);
insert into user (login, mdp, email, commercant) values ('Denis', sha1('123'), 'denis@gmail.com', False);
insert into user (login, mdp, email, commercant) values ('Pierre', sha1('123'), 'pierre@crous-iut.fr', True);


CREATE TABLE `entreprise` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `codePostal` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

insert into entreprise (nom, adresse, ville, codePostal) values ('Crous Gourmand',  'IUT de Lens, rue de l\'université', 'LENS', '62300');
insert into entreprise (nom, adresse, ville, codePostal) values ('Les saveurs de Bollaert',  '148 route de Béthune', 'LENS', '62300');
insert into entreprise (nom, adresse, ville, codePostal) values ('Au coeur des Délices',  '132 Avenue Alfred Maes', 'LENS', '62300');
insert into entreprise (nom, adresse, ville, codePostal) values ('Carrefour - Lens 2',  'Centre commercial Lens 2', 'VENDIN-LE-VIEIL', '62880');
insert into entreprise (nom, adresse, ville, codePostal) values ('La Foire aux viandes',  '1 rue Georges Devouges', 'LOISON SOUS LENS', '62218');
insert into entreprise (nom, adresse, ville, codePostal) values ('Tout Chaud - Vendin-le-Vieil',  'Centre commercial Lens 2', 'VENDIN-LE-VIEIL', '62880');
insert into entreprise (nom, adresse, ville, codePostal) values ('Carrefour - Liévin',  'rue Marie Liétard', 'LIEVIN', '62800');



CREATE TABLE `categorie` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `intitule` varchar(255) NOT NULL,
      PRIMARY KEY (`id`),
      UNIQUE KEY `id` (`id`)
    ) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

insert into categorie (intitule) values ('Boulangerie & pâtisserie');
insert into categorie (intitule) values ('Repas');
insert into categorie (intitule) values ('Nouveau');
insert into categorie (intitule) values ('Epicerie');
insert into categorie (intitule) values ('A récupérer maintenant');



  CREATE TABLE `panier` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `dateRetrait` date NOT NULL,
    `heureDebut` time NOT NULL,
    `heureFin` time NOT NULL,
    `img_url` varchar(255) NOT NULL,
    `prix` float NOT NULL,
    `nbPanier` int NOT NULL,
    `description` text NOT NULL,
    `idEntreprise` int(11) NOT NULL,
    `idCategorie` int(11) NOT NULL,
    PRIMARY KEY (`id`),
    UNIQUE KEY `id` (`id`)
  ) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

insert into panier (dateRetrait, heureDebut, heureFin, img_url, nbPanier, prix, description, idEntreprise, idCategorie)
    values ('2025-06-10', '14:00', '14:30', 'img/s1.png',3, 6.99, 'Le crous gourmand vous propose de récupérer un panier surprise ; retrouvez un assortiment de minimum 5 composantes parmi entrées, sandwich, pasta box et/ou paninis', 1, 2);
insert into panier (dateRetrait, heureDebut, heureFin, img_url, nbPanier, prix, description, idEntreprise, idCategorie)
    values ('2025-06-11', '14:00', '14:30', 'img/s1.png',3, 6.99, 'Le crous gourmand vous propose de récupérer un panier surprise ; retrouvez un assortiment de minimum 5 composantes parmi entrées, sandwich, pasta box et/ou paninis', 1, 2);
insert into panier (dateRetrait, heureDebut, heureFin, img_url, nbPanier, prix, description, idEntreprise, idCategorie)
    values ('2025-06-12', '14:00', '14:30', 'img/s2.png',3, 6.99, 'Le crous gourmand vous propose de récupérer un panier surprise ; retrouvez un assortiment de minimum 5 composantes parmi entrées, sandwich, pasta box et/ou paninis', 1, 2);
insert into panier (dateRetrait, heureDebut, heureFin, img_url, nbPanier, prix, description, idEntreprise, idCategorie)
    values ('2025-06-10', '18:45', '19:30', 'img/b1.jpg',3, 3.99, 'Votre panier sera composé d\'une sélection de pains, et/ou de pâtisseries individuelles et/ou de grands gâteaux en fonction des invendus du jour. Les produits "à consommer jusqu\'au" (DLC) doivent être consommés au plus tard à la date indiquées sur l\'emballage.', 2, 1);
insert into panier (dateRetrait, heureDebut, heureFin, img_url, nbPanier, prix, description, idEntreprise, idCategorie)
    values ('2025-06-13', '18:45', '19:30', 'img/b1.jpg',3, 3.99, 'Votre panier sera composé d\'une sélection de pains, et/ou de pâtisseries individuelles et/ou de grands gâteaux en fonction des invendus du jour. Les produits "à consommer jusqu\'au" (DLC) doivent être consommés au plus tard à la date indiquées sur l\'emballage.', 2, 1);
insert into panier (dateRetrait, heureDebut, heureFin, img_url, nbPanier, prix, description, idEntreprise, idCategorie)
    values ('2025-06-11', '19:30', '19:45', 'img/r1.png',3, 6.99, 'Dans votre panier surprise, vous pourrez trouver des produits frais (crémerie, snacking, viande, etc.) en DLC du jour, des fruits et légumes légèrement abimés.', 4, 2);
insert into panier (dateRetrait, heureDebut, heureFin, img_url, nbPanier, prix, description, idEntreprise, idCategorie)
    values ('2025-06-12', '19:30', '19:45', 'img/r1.png',3, 6.99, 'Dans votre panier surprise, vous pourrez trouver des produits frais (crémerie, snacking, viande, etc.) en DLC du jour, des fruits et légumes légèrement abimés.', 4, 2);
insert into panier (dateRetrait, heureDebut, heureFin, img_url, nbPanier, prix, description, idEntreprise, idCategorie)
    values ('2025-06-13', '19:45', '20:00', 'img/v1.jpg',3, 5.99, 'Dans votre panier, retrouvez un assortiment de viandes (volaille, boeuf, porc, et/ou agneau...) Bonne collecte anti-gaspi !', 5, 3);
insert into panier (dateRetrait, heureDebut, heureFin, img_url, nbPanier, prix, description, idEntreprise, idCategorie)
    values ('2025-06-10', '19:30', '19:50', 'img/b3.jpg',3, 6.99, 'Votre panier sera composé d\'une sélection de pains, et/ou de pâtisseries individuelles et/ou de grands gâteaux en fonction des invendus du jour. Les produits "à consommer jusqu\'au" (DLC) doivent être consommés au plus tard à la date indiquées sur l\'emballage.', 6, 3);
insert into panier (dateRetrait, heureDebut, heureFin, img_url, nbPanier, prix, description, idEntreprise, idCategorie)
    values ('2025-06-11', '19:30', '19:50', 'img/b3.jpg',3, 6.99, 'Votre panier sera composé d\'une sélection de pains, et/ou de pâtisseries individuelles et/ou de grands gâteaux en fonction des invendus du jour. Les produits "à consommer jusqu\'au" (DLC) doivent être consommés au plus tard à la date indiquées sur l\'emballage.', 6, 3);




CREATE TABLE `reservation` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `date` datetime NOT NULL,
    `idPanier` int(11) NOT NULL,
    `idUser` int(11) NOT NULL,
    `nb` int(11) NOT NULL,
    PRIMARY KEY (`id`),
    UNIQUE KEY `id` (`id`)
  ) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
