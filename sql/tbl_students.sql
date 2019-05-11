CREATE TABLE `academy`.`students` ( 
`id` INT NOT NULL AUTO_INCREMENT COMMENT 'PK Student' , `first_name` VARCHAR(50) NOT NULL COMMENT 'First Name' , `last_name` VARCHAR(50) NOT NULL COMMENT 'Last Name' , 
`dob` DATE NOT NULL COMMENT 'DOB' , 
`street` VARCHAR(255) NULL , 
`city` VARCHAR(50) NULL , 
`state` VARCHAR(50) NULL , 
`zip` INT NULL , 
`phone` VARCHAR(20) NOT NULL , 
`email` VARCHAR(50) NULL , 
PRIMARY KEY (`id`)) ENGINE = InnoDB;

ALTER TABLE `courses` CHANGE `description` `description` TEXT CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL;

INSERT INTO `courses` (`code`, `title`) VALUES ('ITP 100', 'Software Design');

UPDATE `students` SET `last_name` = 'Trump' WHERE `students`.`id` = 11