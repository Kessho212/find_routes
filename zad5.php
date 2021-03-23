<?php
/*
We are tracking down our rogue agent Matthew Knight also known as Roy Miller. He travels from places to places to avoid being tracked. Each of his travels are based on a list of itineraries in an unusual or incorrect order. The task is to determine the routes he will take in his every journey.

Task
You are given an array of routes of his itineraries. List down the only places where he will go in correct order based on his itineraries.

Example
Given the following routes:

[ [USA, BRA], [JPN, PHL], [BRA, UAE], [UAE, JPN] ]
The result will be:

"USA, BRA, UAE, JPN, PHL"
*/
function find_routes(array $routes){

    for($i=0;$i<count($routes);$i++){
        $sum = 0;
        for($j=0;$j<count($routes);$j++){
            if($routes[$i][0] == $routes[$j][1]){
                $sum = 1;
            }
        }
        if($sum ==1){
            $sum = 0;
        }else{
            $temp = $routes[$i][0];
            break;
        }
    }
    $return = $temp.", ";
    for($i=0;$i<count($routes);$i++){
        for($j=0;$j<count($routes);$j++){
            if($routes[$j][0]==$temp){
                $if = count($routes);
                $return .= $routes[$j][1].", ";
                $temp = $routes[$j][1];
            }
        }
    }
    $return = substr($return,0,strlen($return)-1);
    $return = substr($return,0,strlen($return)-1);
    return $return;
}

$testroutes1 = find_routes([["MNL", "TAG"], ["CEB", "TAC"], ["TAG", "CEB"], ["TAC", "BOR"]]);
$tesroutes2 = find_routes([["Chicago", "Winnipeg"], ["Halifax", "Montreal"], ["Montreal", "Toronto"], ["Toronto", "Chicago"], ["Winnipeg", "Seattle"]]);

echo $testroutes1."<br>";
echo $tesroutes2;