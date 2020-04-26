/*
File contains all create statement
 */


/* create database */
CREATE SCHEMA `saarthi` ;

/* Contest Table contains all contest */
CREATE TABLE `saarthi`.`contest` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `contest_name` VARCHAR(100) NULL,
  `contest_pdf` VARCHAR(100) NULL,
  `contest_pdf_s3url` VARCHAR(500) NULL,
  `create_timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`));

/* contest_question Table contains Q&A */
  CREATE TABLE `saarthi`.`contest_question` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contest_id` int(11) NOT NULL,
  `question` text  DEFAULT NULL,
  `option_1` text  DEFAULT NULL,
  `option_2` text  DEFAULT NULL,
  `option_3` text  DEFAULT NULL,
  `option_4` text  DEFAULT NULL,
  `correct_answer` text DEFAULT NULL,
  `description` text  DEFAULT NULL,
  `option_type` int(1) DEFAULT 4,
  `create_timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_contest_id` FOREIGN KEY (`contest_id`) REFERENCES `contest` (`id`)
);
