-- Active: 1688401528193@@localhost@3306@alquilartemis
DROP DATABASE WebPage;
CREATE DATABASE WebPage;
USE WebPage;
CREATE TABLE users (
    idUser INT AUTO_INCREMENT NOT NULL,
    userName VARCHAR(100) NOT NULL,
    emailUser VARCHAR(100) NOT NULL,
    passwordUser VARCHAR(100) NOT NULL,
    PRIMARY KEY (iduser),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE persons (
    idPerson INT AUTO_INCREMENT NOT NULL,
    firstnamePerson VARCHAR(100) NOT NULL,
    lastnamePerson VARCHAR(100) NOT NULL,
    userId INT NOT NULL,
    nameUser VARCHAR(100) NOT NULL,
    PRIMARY KEY (idPerson),
    FOREIGN KEY (userId) REFERENCES users (idUser),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
