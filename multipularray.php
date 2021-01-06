<?php
for ($i=1; $i<=101;$i++) {
    if(($i%3==0 )&&($i%5==0)){
        echo "FIZZ BUZZ </br>";
}else if($i%5==0){
    echo "BAZZ </br>";
}elseif ($i%3==0) {
    echo "FIZZ </br>";

}

else{
    echo $i."<br>";
}
}

?>