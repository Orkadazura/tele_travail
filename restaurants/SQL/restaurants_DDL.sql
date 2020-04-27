DROP DATABASE IF EXISTS guide;

CREATE DATABASE IF NOT EXISTS guide CHARACTER SET UTF8 COLLATE utf8_general_ci;

USE guide;

DROP TABLE IF EXISTS restaurants;

CREATE TABLE restaurants( 
    id INT PRIMARY KEY AUTO_INCREMENT, 
    nom TEXT NOT NULL, 
    adresse TEXT NOT NULL, 
    prix DECIMAL NOT NULL, 
    commentaire TEXT NOT NULL, 
    note DOUBLE NOT NULL, 
    visite DATE NOT NULL 
) ENGINE=InnoDB CHARACTER SET UTF8 COLLATE utf8_general_ci;