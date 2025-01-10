CREATE DATABASE biblioschool_db;

USE biblioschool_db;


CREATE TABLE biblioschool_db.user (
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    prenom VARCHAR(255) NOT NULL,
    age INT NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL
);

CREATE TABLE biblioschool_db.role(
    id_role INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    role VARCHAR(255) NOT NULL
)

INSERT INTO biblioschool_db.role (role)
VALUES("Apprenant");
INSERT INTO biblioschool_db.user (nom, prenom, age, email)
VALUES("abderrahmane", "lahmidi", 24, "abdo@gmail.com");

-- user info
SELECT * FROM biblioschool_db.role R JOIN biblioschool_db.user U WHERE R.id_role = U.id;

CREATE TABLE biblioschool_db.livre (
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    titre VARCHAR(255) NOT NULL,
    auteur VARCHAR(255) NOT NULL
)

INSERT INTO biblioschool_db.livre(titre, auteur) VALUES ("The Great Gatsby","F. Scott Fitzgerald");

CREATE TABLE  biblioschool_db.catygories(
	id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
     catygorie VARCHAR(255) NOT NULL
)


-- livre info
SELECT * FROM biblioschool_db.livre L JOIN biblioschool_db.catygories C JOIN biblioschool_db.tags T WHERE
L.id = C.id = T.id;


