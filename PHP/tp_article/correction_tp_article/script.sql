CREATE DATABASE if NOT EXISTS articles;
USE articles; 

CREATE TABLE article(
id_article INT PRIMARY KEY NOT NULL AUTO_INCREMENT, 
nom_article VARCHAR(50) NOT null,
contenu_article VARCHAR(255)
);