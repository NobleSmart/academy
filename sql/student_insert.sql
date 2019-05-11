INSERT INTO `students` (`id`, `first_name`, `last_name`, 
`dob`, `street`, `city`, `state`, `zip`, `phone`, `email`) 
VALUES ('1', 'George', 'Washington', '1/1/2000', 
'1 Washington St', 'Mt Vernon', 'VA', '23456', '', 
'georgewashington@mtvernon.com');
INSERT INTO `students` (`id`, `first_name`, `last_name`, 
`dob`, `street`, `city`, `state`, `zip`, `phone`, `email`) 
VALUES ('3', 'John', 'Adams', '1-2-2000', 
'1 Washington St', 'Mt Vernon', 'VA', '23456', '', 
'johnadams@whitehouse.gov');
INSERT INTO `students` (`id`, `first_name`, `last_name`, 
`dob`, `street`, `city`, `state`, `zip`, `phone`, `email`) 
VALUES ('4', 'James', 'Monroe', '1-3-2010', 
'1 Monroe St', 'Charlottesville', 'VA', '23456', '', 
'jamesmonroe@whitehouse.gov');
INSERT INTO `students` (`id`, `first_name`, `last_name`, 
`dob`, `street`, `city`, `state`, `zip`, `phone`, `email`) 
VALUES ('5', 'Thomas', 'Jefferson', '12-31-1998', 
'1 Monticello St', 'Charlottesville', 'VA', '23456', '', 
'tjefferson@whitehouse.gov');
INSERT INTO `students` (`id`, `first_name`, `last_name`, 
`dob`, `street`, `city`, `state`, `zip`, `phone`, `email`) 
VALUES ('6', 'Jimmy', 'Carter', '12-31-1998', 
'1 Monticello St', 'Atlanta', 'GA', '23456', '', 
'jcarter@whitehouse.gov');
INSERT INTO `students` (`id`, `first_name`, `last_name`, 
`dob`, `street`, `city`, `state`, `zip`, `phone`, `email`) 
VALUES ('7', 'George', 'Bush', '12-31-1998', 
'1 Monticello St', 'Houston', 'TX', '23456', '', 
'ghbush@whitehouse.gov');
INSERT INTO `students` (`id`, `first_name`, `last_name`, 
`dob`, `street`, `city`, `state`, `zip`, `phone`, `email`) 
VALUES ('8', 'Bill', 'Clinton', '12-31-1998', 
'1 Monticello St', 'Little Rock', 'AR', '23456', '', 
'clinton@whitehouse.gov');
INSERT INTO `students` (`id`, `first_name`, `last_name`, 
`dob`, `street`, `city`, `state`, `zip`, `phone`, `email`) 
VALUES ('9', 'George W', 'Bush', '12-31-1998', 
'1 Monticello St', 'Houston', 'TX', '23456', '', 
'gwbush@whitehouse.gov');
INSERT INTO `students` (`id`, `first_name`, `last_name`, 
`dob`, `street`, `city`, `state`, `zip`, `phone`, `email`) 
VALUES ('10', 'Barack', 'Obama', '12-31-1998', 
'1 Monticello St', 'Chicago', 'IL', '23456', '', 
'barack@whitehouse.gov');
INSERT INTO `students` (`id`, `first_name`, `last_name`, 
`dob`, `street`, `city`, `state`, `zip`, `phone`, `email`) 
VALUES ('11', 'Donald', 'Trump', '12-31-1998', 
'1 Monticello St', 'New York', 'NY', '23456', '', 
'trump@whitehouse.gov');

UPDATE `students` SET `dob` = '1999-01-01' WHERE `students`.`id` = 2

DELETE FROM `students` WHERE `students`.`id` = 11

SELECT * FROM `students` ORDER BY `students`.`last_name` DESC

SELECT * FROM `students` ORDER BY `students`.`last_name` DESC, `students`.`first_name` ASC

SELECT * FROM `students` where state in ('VA', 'TX')
-- SELECT * FROM `students` where state='VA' or state='TX'

select * from students where first_name like 'Ja%'

select * from students where first_name like 'J%' and state='GA'

select count(*) from students

select count(*) from students where state in ('VA', 'TX')

select DISTINCT(state) from students

select DISTINCT(state), count(ID) from students
group by state

select DISTINCT(state), count(ID) from students
group by state
order by count(ID) desc

DROP DATABASE `academy`;

