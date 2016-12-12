<?php

ini_set("allow_url_fopen", true);
$postdata = json_decode(file_get_contents("php://input"));


$json = array();
    $bus = array(
        'success' => false,
        'rTL' => false,
        'rcvd52' => $postdata,
    );
    array_push($json, $bus);

$jsonstring = json_encode($json);
echo $jsonstring;

?>
