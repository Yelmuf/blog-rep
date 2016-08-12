<?php
//echo "Hello world!";
//echo time();
$a = $_GET['a'];
$b = $_GET['b'];

function add($param1,$param2){
    return $param1+$param2;
}
echo add($a,$b);
echo "<br>";
for($i=0;$i<10;$i++){
    echo $i."<br>";
}
?>