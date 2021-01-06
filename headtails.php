<?php
$heads =0;
$tails =0;
for($i =1; $i<=100; $i++) {


$randNum = rand (1,2);
echo $randNum;

if($randNum == 1) {
    $heads++;
    echo "Heads,I win! </br>";

}else {
    $tails++;
    echo "tails,you win! </br>";
}
echo "there {$heads} and {$tails} tails.";

 if ($heads > $tails){
     echo "Heads, I win! </br>";

 }elseif ($$tails > $heads){
     echo "Tails,you win! </br>";
 }else{
     echo "DRAW";
 }

}



?>