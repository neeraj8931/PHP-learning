<?php
$cities =["Pune","Delhi","Mumbai","Goa"];

foreach($cities as $city){
    echo("$city". " \n");
}

foreach($cities as $key => $city){
    echo("$key : $city". " \n");
}

$contactNumbers = [
    'primary' => 9532087978,
    'secondry' => 9984567832,
];


echo(var_dump($contactNumbers). "\n");
echo(count($contactNumbers) . "\n");
echo($contactNumbers['primary'] . "\n");

?>
