CREATE DATABASE FashionStore;

USE FashionStore;

CREATE TABLE Produits (
  code         INT(10),
  title        varchar(255),
  description  VARCHAR(255),
  marque       VARCHAR(255),
  prix	       FLOAT(8,2),
  quantite     INT(4),
  url_photo    VARCHAR(255),
  CONSTRAINT produit_pk PRIMARY KEY (code)
);





CREATE TABLE Utilisateurs (
  id          int(10),
  nom         VARCHAR(255),
  prenom         VARCHAR(255),
  mot_passe   VARCHAR(255),
  email   VARCHAR(255),
  genre   char,
  infolettre boolean,
  administrateur boolean,
  CONSTRAINT user_pk PRIMARY KEY (id)
);

INSERT INTO Utilisateurs VALUES (1,'root','admin','mypass','admin.root@gmail.com','F',false,true);
INSERT INTO Utilisateurs VALUES (2,'user','lili','root','lili.user@gmail.com','M',false,false);
