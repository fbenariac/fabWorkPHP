# README #

This README would normally document whatever steps are necessary to get your application up and running.

### What is this repository for? ###

* this is my own tiny php framework. ;-)

### How do I get set up? ###

* Summary of set up
* Configuration
* Dependencies
* Database configuration
* How to run tests
* Deployment instructions

### Example:
Take a look to the example branch to see how it can be used ;-)

#### MySQL DB

```sql

# Affichage de la table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`ID`, `username`, `age`, `gender`)
VALUES
	(1,'userTest',198,'male');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

```

### Contribution guidelines ###

* Fork
* Code
* Writing tests
* Pull Request
* Re Do

Thank you ;-)
