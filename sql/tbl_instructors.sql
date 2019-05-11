CREATE TABLE `academy`.`instructors` ( `id` INT NOT NULL AUTO_INCREMENT COMMENT 'PK instructor' , `fname` VARCHAR(250) NOT NULL COMMENT 'First Name' , `lname` VARCHAR(250) NOT NULL COMMENT 'Last Name' , `email` VARCHAR(250) NOT NULL COMMENT 'Email' , PRIMARY KEY (`id`)) ENGINE = InnoDB COMMENT = 'Instructors';

CREATE TABLE `academy`.`classes` ( `id` INT NOT NULL AUTO_INCREMENT , `courses_id` INT NOT NULL , `instructor_id` INT NOT NULL , `start_date` DATE NOT NULL , `end_date` DATE NOT NULL , `location` VARCHAR(250) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB COMMENT = 'Classes';

INSERT INTO `classes` (`id`, `courses_id`, `instructor_id`, `start_date`, `end_date`, `location`) VALUES (NULL, '5', '2', '2019-05-01', '2019-05-31', 'Sterling');
INSERT INTO `classes` (`id`, `courses_id`, `instructor_id`, `start_date`, `end_date`, `location`) VALUES (NULL, '6', '3', '2019-06-01', '2019-06-30', 'Alexandria');
INSERT INTO `classes` (`id`, `courses_id`, `instructor_id`, `start_date`, `end_date`, `location`) VALUES (NULL, '7', '1', '2019-07-01', '2019-07-31', 'Sterling');
INSERT INTO `classes` (`id`, `courses_id`, `instructor_id`, `start_date`, `end_date`, `location`) VALUES (NULL, '8', '2', '2019-08-01', '2019-08-30', 'Alexandria');
INSERT INTO `classes` (`id`, `courses_id`, `instructor_id`, `start_date`, `end_date`, `location`) VALUES (NULL, '9', '3', '2019-09-01', '2019-09-31', 'Sterling');

ALTER TABLE `classes` ADD CONSTRAINT `fk_courseId` FOREIGN KEY (`course_id`) REFERENCES `courses`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
ALTER TABLE `classes` ADD CONSTRAINT `fk_instructorId` FOREIGN KEY (`instructor_id`) REFERENCES `instructors`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

CREATE TABLE `academy`.`registration` ( `id` INT NOT NULL AUTO_INCREMENT , `student_id` INT NOT NULL , `course_id` INT NOT NULL , `reg_date` DATE NOT NULL , `paid` BOOLEAN NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB COMMENT = 'Registration table';

INSERT INTO `registration` (`id`, `student_id`, `course_id`, `reg_date`, `paid`) VALUES (NULL, '7', '7', '2019-05-07', '1');