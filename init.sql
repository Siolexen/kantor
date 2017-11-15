DROP DATABASE IF EXISTS cantor;
CREATE DATABASE cantor;
USE cantor;
CREATE TABLE Users (
	Id int NOT NULL AUTO_INCREMENT,
	username varchar(255) NOT NULL,
	password varchar(255) NOT NULL,
	PRIMARY KEY (Id)
);
CREATE TABLE TransactionHistory (
	Id int NOT NULL AUTO_INCREMENT,
	userId int NOT NULL,
	currency varchar(255) NOT NULL,
	price decimal NOT NULL,
	PRIMARY KEY (Id)
);