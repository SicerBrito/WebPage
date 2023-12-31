-- Active: 1688753003200@@localhost@3306@CampusV2
DROP DATABASE IF EXISTS WebPage;
CREATE DATABASE WebPage;
USE WebPage;

CREATE TABLE users (
    idUser INT AUTO_INCREMENT NOT NULL,
    userName VARCHAR(100) NOT NULL UNIQUE,
    emailUser VARCHAR(100) NOT NULL,
    passwordUser VARCHAR(100) NOT NULL,
    PRIMARY KEY (idUser),
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
    FOREIGN KEY (nameUser) REFERENCES users (userName),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
