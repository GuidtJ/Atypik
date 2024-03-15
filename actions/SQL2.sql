-- Table users
DROP TABLE IF EXISTS users;
CREATE TABLE users (
    id INT AUTO_INCREMENT NOT NULL,
    pseudo VARCHAR(255) NOT NULL,
    lastname VARCHAR(255) NOT NULL,
    firstname VARCHAR(255) NOT NULL,
    mdp TEXT NOT NULL,
    PRIMARY KEY (id)
) ENGINE=InnoDB;

-- Table questions
DROP TABLE IF EXISTS questions;
CREATE TABLE questions (
    id INT AUTO_INCREMENT NOT NULL,
    titre TEXT NOT NULL,
    description TEXT NOT NULL,
    contenu TEXT NOT NULL,
    id_auteur INT NOT NULL,
    pseudo_auteur VARCHAR(255) NOT NULL,
    date_publication TEXT NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (id_auteur) REFERENCES users (id)
) ENGINE=InnoDB;

-- Table answers
DROP TABLE IF EXISTS answers;
CREATE TABLE answers (
    id INT AUTO_INCREMENT NOT NULL,
    id_auteur INT NOT NULL,
    pseudo_auteur VARCHAR(255) NOT NULL,
    id_question INT NOT NULL,
    contenu TEXT NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (id_auteur) REFERENCES users (id) ON DELETE CASCADE,
    FOREIGN KEY (id_question) REFERENCES questions (id) ON DELETE CASCADE
) ENGINE=InnoDB;
