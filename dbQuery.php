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
getRows(*config) config: (userType,teacher | userType,room | userType,course,branch,sem) userType:[t|r|s]
...
set..All
add..All
update..All
...
try to write all and generalized queries at single place
and a single fxn to execute any query.
*/
?>
