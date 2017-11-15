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
	price decimal (20, 2) NOT NULL,
	PRIMARY KEY (Id)
);
CREATE TABLE Wallets (
	Id int NOT NULL AUTO_INCREMENT,
	userId int NOT NULL,
	pln decimal (20, 2) NOT NULL,
	eur decimal (20, 2) NOT NULL,
	usd decimal (20, 2) NOT NULL,
	gbp decimal (20, 2) NOT NULL,
	chf decimal (20, 2) NOT NULL,
	PRIMARY KEY (Id)
);