<?php
define("DATABASE_SERVER","localhost");
define("DATABASE_ROOT","root");
define("DATABASE_PASSWORD","");
define("DATABASE_NAME","msf");

$sql[] = "CREATE TABLE IF NOT EXISTS `users` ( `id` INT NOT NULL AUTO_INCREMENT, `username` VARCHAR(128) NOT NULL , `password` VARCHAR(32) NOT NULL , `active` INT NOT NULL DEFAULT -1, `connected` INT NOT NULL DEFAULT 1 , `datetime` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP, `email` VARCHAR(255), `bio` TEXT NULL, `fullname` VARCHAR(255) NULL, `tel` VARCHAR(64) NULL,`role` VARCHAR(64) NULL,`session_token` VARCHAR(255) NULL,`adresse` VARCHAR(255) NULL, PRIMARY KEY (`id`), unique `email` (`email`), unique `username` (`username`), unique `tel` (`tel`) ) ENGINE = InnoDB;";

$sql[] = "CREATE TABLE IF NOT EXISTS `blocked_ip` ( `id` INT NOT NULL AUTO_INCREMENT , `ip` VARCHAR(16) NOT NULL , `datetime` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP, PRIMARY KEY (`id`)) ENGINE = InnoDB;";

$sql[] = "CREATE TABLE IF NOT EXISTS `token` ( `id` INT NOT NULL AUTO_INCREMENT , `token` VARCHAR(32) NOT NULL ,`user_id` INT NOT NULL, `code` VARCHAR(6) NULL , `datetime` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , `validity` INT NOT NULL DEFAULT 60, `clicked` INT NOT NULL DEFAULT -1, PRIMARY KEY (`id`)) ENGINE = InnoDB;";

