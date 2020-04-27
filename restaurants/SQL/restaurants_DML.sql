USE guide;

/* ne fonctionne pas et je ne comprend pas pourquoi ?*/
INSERT INTO restaurants
("id", "nom", "adresse", "prix", "commentaire", "note", "visite")
VALUE
("1", "JEAN-YVES SCHILLINGER","17 Rue de la Poissonnerie 68000 Colmar", 50, "Le JY'S est un restaurant différent des autres avec un décor cosy et résolument contemporain qui attire une très belle clientèle cosmopolite. 
Jean-Yves Schillinger est un chef doublement étoilé créatif qui vous entraînera dans une ronde dépaysante à souhait où la cuisine du monde est à l'honneur. Le chef décline la cuisine fusion à sa façon. 
Une carte régulièrement renouvelée s'égaye de créations audacieuses et de plats revisités avec modernité et pertinence. ", "9/10", "05/12/2019" ),
("2", "L’ADRIATICO", "6 route de Neuf Brisach, 68000, Colmar, France ", 25, "Une des meilleurs pizzéria de la région Service très agréable, efficace et souriant Salle principale un peu bruyante mais cela donne un côté italien je recommande ", "8/10", "04/02/2020");


/* allors que la sa fonctionne !*/
INSERT INTO `restaurants` 
(`id`, `nom`, `adresse`, `prix`, `commentaire`, `note`, `visite`) 
VALUES ('1', 'JEAN-YVES SCHILLINGER ', '17 Rue de la Poissonnerie, 68000 Colmar ', '50', 'Le JY\'S est un restaurant différent des autres avec un décor cosy et résolument contemporain qui attire une très belle clientèle cosmopolite. 
Jean-Yves Schillinger est un chef doublement étoilé créatif qui vous entraînera dans une ronde dépaysante à souhait où la cuisine du monde est à l\'honneur. Le chef décline la cuisine fusion à sa façon. Une carte régulièrement renouvelée s\'égaye de créations audacieuses et de plats revisités avec modernité et pertinence.', '9/10', '05/12/2019 '), 
('2', 'L’ADRIATICO', '6 route de Neuf Brisach, 68000, Colmar, France ', '25', 'Une des meilleurs pizzéria de la région Service très agréable, efficace et souriant Salle principale un peu bruyante mais cela donne un côté italien je recommande ', '8/10 ', '04/02/2020 ');

DELETE FROM `restaurants` 
WHERE `restaurants`.`id` = 1; 

DELETE FROM `restaurants` 
WHERE `restaurants`.`id` = 2;