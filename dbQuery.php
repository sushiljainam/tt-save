<?php
/*
 * All sqlite dbQueries here in this file
 * SELECT | INSERT | DELETE | UPDATE (curd)
 *
 */

//list
/*
getCourses()
getBranches(course)
getYearCount(course)
getSemCount(course)
getBatchCount(course,branch)
getRooms(*)
getRooms(*roomGroup)
getTeachers(*)
getTeachers(*deptt)
getSubjects(course,branch,sem)
getRows(*)
getRows(*config) config: (userType,teacher.key | userType,room.key | userType,course.key,branch.key,sem) userType:[t|r|s]
...
set..All
add..All
update..All
...
try to write all and generalized queries at single place
and a single fxn to execute any query.


default values: consider if not/wrong given
course: bTech
branch: CS
userType: s

for future: can ignore coding about these
roomGroup,deptt(teacher)

:all keys are case sensitive
*/
?>
