<?php
// phpinfo(); //version 5.5.9

// Report all PHP errors (see changelog)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

ini_set("allow_url_fopen", true);
// $postdata = json_decode(file_get_contents("php://input"));
$postdata = json_decode('
{"subjects":[{"key":"sub1"},{"key":"sub2"},{"key":"sub3"},{"key"
:"sub4"},{"key":"sub5"},{"key":"sub6"}],"rooms":[{"key":"room1"},{"key":"room2"},{"key":"room3"},{"key"
:"room4"}],"teachers":[{"key":"tea1"},{"key":"tea2"},{"key":"tea3"},{"key":"tea4"}],"batches":{"cs":
{"many":4},"ee":{"many":6},"me":{"many":6},"ce":{"many":8}},"t":{"btc":0},
"rows":[
  {"dur":"2","d":"Wednesday","b":{"2":true},"s":"sub3","t":"tea3","sem":"3","br":"ce","p":"III","r":"room3"},
  {"dur":"2","p":"II","d":"Friday","s":"sub1","r":"room1","t":"tea1","sem":"3","br":"ce"},
  {"dur":"3","p":"II","d":"Tuesday","b":{"1":true,"2":true},"s":"sub3","t":"tea3","r":"room1","sem":"3","br":"me"},
  {"dur":"2","d":"Wednesday","b":{"2":true},"s":"sub3","t":"tea3","sem":"3","br":"ce","p":"III","r":"room3"},
  {"dur":"2","p":"II","d":"Friday","s":"sub1","r":"room1","t":"tea1","sem":"3","br":"ce"},
  {"dur":"3","p":"II","d":"Tuesday","b":{"1":true,"2":true},"s":"sub3","t":"tea3","r":"room1","sem":"3","br":"me"},
  {"b":{"0":true,"1":true},"sem":"3","br":"me"},
  {"sem":"3","br":"cs"},
  {"b":{"2":true},"s":"sub2","sem":"2","br":"cs"},
  {"dur":"2","p":"III","b":{"3":true,"5":true,"7":true},"sem":"2","br":"ce","r":"room2","s":"sub3"},
  {"dur":"2","p":"III","b":{"2":true,"3":true,"5":true,"7":true},"sem":"2","br":"ce","r":"room2","s":"sub1","d":"Wednesday","t":"tea2"}]}');

//{"dur":"3","p":"II","d":"Tuesday","b":{"1":true,"2":true},"s":"sub3","t":"tea3","r":"room1","sem":"3","br":"me"}

$dbs = new sqlite3('databasev1.db');
// $dbhandle = $dbs.open('databasev1.db');
// var_dump($dbs);
$result = $dbs->query('SELECT * FROM maintable');
// new SQLiteDatabase
$resultFr = array();
while ($row = $result->fetchArray()) {
    // var_dump($row);//Day,Period,Duration,Batch,Subject,Room,Teacher_id,Year,Branch
    $rowFr =  array(
      "dur"   =>  $row["Duration"],
      "p"     =>  $row["Period"],
      "d"     =>  $row["Day"],
      "s"     =>  $row["Subject"],
      "t"     =>  $row["Teacher_id"],
      "r"     =>  $row["Room"],
      "sem"   =>  $row["Year"],
      "br"    =>  $row["Branch"],
    );
    // '{"dur":"'.$row["Duration"].'",'.
    //        '"p":"'.$row["Period"].'",'.
    //        '"d":"'.$row["Day"].'",'.
    //        '"s":"'.$row["Subject"].'",'.
    //        '"t":"'.$row["Teacher_id"].'",'.
    //        '"r":"'.$row["Room"].'",'.
    //        '"sem":"'.$row["Year"].'",'.
    //        '"br":"'.$row["Branch"].'"},';
           array_push($resultFr,$rowFr);
}
// var_dump();
// $result = $dbs->query('SELECT * FROM sqlite_master ');
// while ($a = $result->fetchArray()) {
//   echo "<br>";echo "<br>";var_dump($a);echo "<br>";
// }

$json = array();
    $bus = array(
        'success' => true,
        // 'rcvd52' => $postdata,
        // 'rcvd53' => $_SERVER,
        'rcvd54' => $resultFr,
    );
    array_push($json, $bus);

$jsonstring = json_encode($json);
echo $jsonstring;

?>
