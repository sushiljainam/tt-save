<?php

ini_set("allow_url_fopen", true);
// $postdata = json_decode(file_get_contents("php://input"));
$postdata = json_decode('{"subjects":[{"key":"sub1"},{"key":"sub2"},{"key":"sub3"},{"key"
:"sub4"},{"key":"sub5"},{"key":"sub6"}],"rooms":[{"key":"room1"},{"key":"room2"},{"key":"room3"},{"key"
:"room4"}],"teachers":[{"key":"tea1"},{"key":"tea2"},{"key":"tea3"},{"key":"tea4"}],"batches":{"cs":
{"many":4},"ee":{"many":6},"me":{"many":6},"ce":{"many":8}},"t":{"btc":0},"rows":[{"dur":"2","d":"Wednesday"
,"b":{"2":true},"s":"sub3","t":"tea3","sem":"3","br":"ce","p":"III","r":"room3"},{"dur":"2","p":"II"
,"d":"Friday","s":"sub1","r":"room1","t":"tea1","sem":"3","br":"ce"},{"dur":"3","p":"II","d":"Tuesday"
,"b":{"1":true,"2":true},"s":"sub3","t":"tea3","r":"room1","sem":"3","br":"me"},{"dur":"2","d":"Wednesday"
,"b":{"2":true},"s":"sub3","t":"tea3","sem":"3","br":"ce","p":"III","r":"room3"},{"dur":"2","p":"II"
,"d":"Friday","s":"sub1","r":"room1","t":"tea1","sem":"3","br":"ce"},{"dur":"3","p":"II","d":"Tuesday"
,"b":{"1":true,"2":true},"s":"sub3","t":"tea3","r":"room1","sem":"3","br":"me"},{"b":{"0":true,"1":true
},"sem":"3","br":"me"},{"sem":"3","br":"cs"},{"b":{"2":true},"s":"sub2","sem":"2","br":"cs"},{"dur":"2"
,"p":"III","b":{"3":true,"5":true,"7":true},"sem":"2","br":"ce","r":"room2","s":"sub3"},{"dur":"2","p"
:"III","b":{"2":true,"3":true,"5":true,"7":true},"sem":"2","br":"ce","r":"room2","s":"sub1","d":"Wednesday"
,"t":"tea2"}]}');


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
