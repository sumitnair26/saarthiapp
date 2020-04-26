/*
File contains all create statement
 */


/* create database */
CREATE SCHEMA `saarthi` ;

/* Contest Table contains all contest */
CREATE TABLE `contest` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `contest_name` VARCHAR(100) NULL,
  `contest_pdf` VARCHAR(100) NULL,
  `contest_pdf_s3url` VARCHAR(500) NULL,
  `create_timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`));

/* contest_question Table contains Q&A */
  CREATE TABLE `contest_question` (
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

/* Insert Contest */
INSERT INTO `contest` (`contest_name`) VALUES ('First Contest');
INSERT INTO `contest` (`contest_name`) VALUES ('Second Contest');
INSERT INTO `contest` (`contest_name`) VALUES ('Third Contest');

INSERT INTO `saarthi`.`contest_question` (`contest_id`, `question`, `option_1`, `option_2`, `option_3`, `option_4`, `correct_answer`, `description`, `option_type`) VALUES ('2', 'National Income estimates in India are prepared by', 'Planning Commission', 'Reserve Bank of India', 'Central statistical organisation', ' Indian statistical Institute', 'Central statistical organisation', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy', '4');

INSERT INTO `saarthi`.`contest_question` (`contest_id`, `question`, `option_1`, `option_2`, `option_3`, `option_4`, `correct_answer`, `description`, `option_type`) VALUES ('2', 'The World Largest desert is ?', 'Thar', 'Kalahari', 'Sahara', ' Sonoran', 'Kalahari', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy', '4');

INSERT INTO `saarthi`.`contest_question` (`contest_id`, `question`, `option_1`, `option_2`, `option_3`, `option_4`, `correct_answer`, `description`, `option_type`) VALUES ('2', ' Country that has the highest in Barley Production ?', 'China', 'India', 'Russia', 'France', 'Russia', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy', '4');

INSERT INTO `saarthi`.`contest_question` (`contest_id`, `question`, `option_1`, `option_2`, `option_3`, `option_4`, `correct_answer`, `description`, `option_type`) VALUES ('2', 'The metal whose salts are sensitive to light is ?', 'Planning Commission', 'Reserve Bank of India', 'Central statistical organisation', ' Indian statistical Institute', 'Central statistical organisation', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy', '4');

INSERT INTO `saarthi`.`contest_question` (`contest_id`, `question`, `option_1`, `option_2`, `option_3`, `option_4`, `correct_answer`, `description`, `option_type`) VALUES ('2', 'The Central Rice Research Station is situated in ?', 'Chennai', 'Cuttack', 'Bangalore', 'Quilon', 'Cuttack', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy', '4');

INSERT INTO `saarthi`.`contest_question` (`contest_id`, `question`, `option_1`, `option_2`, `option_3`, `option_4`, `correct_answer`, `description`, `option_type`) VALUES ('2', 'National Income estimates in India are prepared by', 'Planning Commission', 'Reserve Bank of India', 'Central statistical organisation', ' Indian statistical Institute', 'Central statistical organisation', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy', '4');

INSERT INTO `saarthi`.`contest_question` (`contest_id`, `question`, `option_1`, `option_2`, `option_3`, `option_4`, `correct_answer`, `description`, `option_type`) VALUES ('2', 'The World Largest desert is ?', 'Thar', 'Kalahari', 'Sahara', ' Sonoran', 'Kalahari', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy', '4');

INSERT INTO `saarthi`.`contest_question` (`contest_id`, `question`, `option_1`, `option_2`, `option_3`, `option_4`, `correct_answer`, `description`, `option_type`) VALUES ('2', ' Country that has the highest in Barley Production ?', 'China', 'India', 'Russia', 'France', 'Russia', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy', '4');

INSERT INTO `saarthi`.`contest_question` (`contest_id`, `question`, `option_1`, `option_2`, `option_3`, `option_4`, `correct_answer`, `description`, `option_type`) VALUES ('2', 'The metal whose salts are sensitive to light is ?', 'Planning Commission', 'Reserve Bank of India', 'Central statistical organisation', ' Indian statistical Institute', 'Central statistical organisation', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy', '4');

INSERT INTO `saarthi`.`contest_question` (`contest_id`, `question`, `option_1`, `option_2`, `option_3`, `option_4`, `correct_answer`, `description`, `option_type`) VALUES ('2', 'The Central Rice Research Station is situated in ?', 'Chennai', 'Cuttack', 'Bangalore', 'Quilon', 'Cuttack', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy', '4');




