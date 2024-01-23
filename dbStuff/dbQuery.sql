SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--  Users Table 
CREATE TABLE `Users` (
    `uid`INT(11) NOT NULL AUTO_INCREMENT,
    `email` VARCHAR(255) NOT NULL,
    `fName` VARCHAR(255) NOT NULL,
    `lName` VARCHAR(255) NOT NULL,
    `pass` VARCHAR(255) NOT NULL, 
    `join_date` date NOT NULL,
    `uHash` VARCHAR(255) NOT NULL,
    PRIMARY KEY (uid),
    UNIQUE (email)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
--  Topics Table 
CREATE TABLE `Topics` (
    `tid` INT(11) NOT NULL AUTO_INCREMENT,
    `topicName` VARCHAR(255) NOT NULL,
    PRIMARY KEY (tid)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
--  Questuons Table 
CREATE TABLE `Question` (
    `qid` INT(11) NOT NULL AUTO_INCREMENT,
    `uid` INT(11) NOT NULL,
    `tid` INT(11) NOT NULL,
    `question` Text,
    `explanation` Text,
    `askedDate` date NOT NULL,
    `qHash` VARCHAR(255) NOT NULL,
    PRIMARY KEY (qid),
    FOREIGN KEY (uid) REFERENCES Users(uid),
    FOREIGN KEY (tid) REFERENCES Topics(tid)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
--  Answers Table
CREATE TABLE `Answers` (
    `aid` INT(11) NOT NULL AUTO_INCREMENT,
    `qid` INT(11) NOT NULL,
    `uid` INT(11) NOT NULL,
    `answer` Text,
    `aHash` VARCHAR(255) NOT NULL,
    PRIMARY KEY (aid),
    FOREIGN KEY (qid) REFERENCES Question(qid),
    FOREIGN KEY (uid) REFERENCES Users(uid)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

