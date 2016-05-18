DROP DATABASE IF EXISTS ecnchurch;
CREATE DATABASE ecnchurch;
USE ccstudents;
DROP TABLE IF EXISTS members;
DROP TABLE IF EXISTS missionsId;
DROP TABLE IF EXISTS bulletins;
CREATE TABLE missions (
  missionsId TINYINT UNSIGNED NOT NULL,
  description VARCHAR(32) NOT NULL,
  PRIMARY KEY(missionsId)
);
CREATE TABLE members (
  memberId INT UNSIGNED AUTO_INCREMENT NOT NULL,
  missionsId TINYINT UNSIGNED NOT NULL,
  activation CHAR(16),
  email VARCHAR(128) NOT NULL,
  firstName VARCHAR(32) NOT NULL,
  hash CHAR(128) NOT NULL,
  lastName VARCHAR(32) NOT NULL,
  phone VARCHAR(32) NOT NULL,
  position VARCHAR(32) NOT NULL,
  zip VARCHAR (32) NOT NULL,
  state VARCHAR (32) NOT NULL,
  city VARCHAR (32) NOT NULL,
  address1 VARCHAR (32) NOT NULL,
  address2 VARCHAR (32) NOT NULL,
  gender VARCHAR (32) NOT NULL,
  dob VARCHAR (32) NOT NULL,
  salt CHAR(64) NOT NULL,
  PRIMARY KEY(membersId),
  FOREIGN KEY(missionsId) REFERENCES missions(missionsId)
);
CREATE TABLE bulletins (
  bulletinlId INT UNSIGNED NOT NULL,
  membersId INT UNSIGNED NOT NULL,
  category VARCHAR(32) NOT NULL,
  message TEXT NOT NULL,
  PRIMARY KEY(bulletinlId),
  FOREIGN KEY (membersId) REFERENCES user(membersId)
);