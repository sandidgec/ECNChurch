USE ecnchurch;
DROP TABLE IF EXISTS bulletins;
DROP TABLE IF EXISTS members;
DROP TABLE IF EXISTS missions;



CREATE TABLE missions (
  missionsId INT UNSIGNED AUTO_INCREMENT NOT NULL,
  description VARCHAR(32) NOT NULL,
  PRIMARY KEY(missionsId)
);


CREATE TABLE members (
  membersId INT UNSIGNED AUTO_INCREMENT NOT NULL,
  missionsId INT UNSIGNED NOT NULL,
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
  dob DATE NOT NULL,
  salt CHAR(64) NOT NULL,
  INDEX(missionsId),
  FOREIGN KEY(missionsId) REFERENCES missions(missionsId),
  PRIMARY KEY(membersId)

);
CREATE TABLE bulletins (
  bulletinId INT UNSIGNED AUTO_INCREMENT NOT NULL,
  membersId INT UNSIGNED NOT NULL,
  category VARCHAR(32) NOT NULL,
  message TEXT NOT NULL,
  INDEX(membersId),
  FOREIGN KEY (membersId) REFERENCES members(membersId),
  PRIMARY KEY(bulletinId)

);