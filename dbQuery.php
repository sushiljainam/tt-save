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


public function dbAction($aType,$entity,$params)
{
  /*
  $aType: get/upsert
  $entity: course/branch/yearCount/semCount/batchCount/room/teacher/subject/rows
  */
  $sqliteDBFile = 'databasev1.db';
  ini_set("allow_url_fopen", true);
  //check php version and sqlite3 library installation
  $db = new sqlite3($sqliteDBFile);




}

/*
$tbl_configs = 'configs';
getCourses()                    : select *|ID,key,abbr,fullName from $tbl_configs where `type` = 'course'
getBranches(course)             : select * from $tbl_configs where `type` = 'courseBranch' and `parentID` = {select ID from $tbl_configs where `type` = 'course' and `key`= $course}; $course='bTech'
:: select ID,key,abbr,fullName from configs where `type` = 'courseBranch' and `parentID` = (select ID from configs where `type` = 'course' and `key`= 'bTech')
getYearCount(course)            : select ID,key,abbr,fullName from configs where type = 'courseYearCount' and parentID = (select ID from configs where type = 'course' and key= 'bTech')
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
*/
?>
