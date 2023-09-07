CREATE DATABASE IF NOT EXISTS articles;
USE articles; 

CREATE TABLE IF NOT EXISTS article (
id_article INT PRIMARY KEY NOT NULL AUTO_INCREMENT, 
nom_article VARCHAR(50) NOT null,
contenu_article VARCHAR(255)
);

CREATE TABLE IF NOT EXISTS categorie (
    id_categorie INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nom_categorie VARCHAR(50) NOT NULL
);

ALTER TABLE article 
ADD id_categorie INT; 

ALTER TABLE article 
ADD CONSTRAINT fk_article_categorie
FOREIGN KEY (id_categorie) REFERENCES categorie(id_categorie);