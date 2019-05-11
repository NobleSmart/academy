SELECT C.id, 
S.code as code, S.title as title, 
C.location as location, 
concat(I.fname,' ', I.lname) as fullname
FROM `classes` as C, `instructors` as I, `courses` as S
where C.instructor_id=I.id and C.course_id = S.id

-- order by course code
SELECT C.id, S.code as code, S.title as title, C.location as location, concat(I.fname,' ', I.lname) as fullname FROM `classes` as C, `instructors` as I, `courses` as S where C.instructor_id=I.id and C.course_id = S.id order by S.code asc

ALTER TABLE `classes` ADD CONSTRAINT `FK_courseID` FOREIGN KEY (`course_id`) REFERENCES `courses`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `classes` ADD CONSTRAINT `FK_instructorID` FOREIGN KEY (`instructor_id`) REFERENCES `instructors`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

select concat(I.fname,' ', I.lname) as fullname,
R.code, R.title, C.start_date, C.end_date, C.location
from `instructors` as I
left join `classes` as C on I.id=C.instructor_id
left join `courses` as R on C.course_id=R.id

SELECT concat(I.fname,' ', I.lname) as fullname, 
count(concat(I.fname,' ', I.lname)) as class_count
FROM `classes` as C, `instructors` as I, `courses` as S
where C.instructor_id=I.id and C.course_id = S.id
group by (concat(I.fname,' ', I.lname))
order by count(concat(I.fname,' ', I.lname)) asc