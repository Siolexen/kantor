DROP DATABASE IF EXISTS cantor;
CREATE DATABASE cantor;
USE cantor;
CREATE TABLE Users (
	Id int NOT NULL AUTO_INCREMENT,
	username varchar(255) CHARACTER SET utf8 UNIQUE NOT NULL,
	password varchar(255) CHARACTER SET utf8 NOT NULL,
	PRIMARY KEY (Id)
);
CREATE TABLE TransactionHistory (
	Id int NOT NULL AUTO_INCREMENT,
	userId int NOT NULL,
	type ENUM('BUY', 'SELL') NOT NULL,
	currency varchar(255) CHARACTER SET utf8 NOT NULL,
	price decimal (19, 4) NOT NULL,
	date DATETIME,
	PRIMARY KEY (Id)
);
CREATE TABLE Wallets (
	Id int NOT NULL AUTO_INCREMENT,
	userId int NOT NULL,
	pln decimal (19, 4) NOT NULL,
	btc decimal (19, 4) NOT NULL,
	bcc decimal (19, 4) NOT NULL
	ltc decimal (19, 4) NOT NULL,
	dash decimal (19, 4) NOT NULL,
	lsk decimal (19, 4) NOT NULL,
	eth decimal (19, 4) NOT NULL,
	game decimal (19, 4) NOT NULL
	PRIMARY KEY (Id)
);