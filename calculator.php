<?php
$num1 = $argv[1];
$operator = $argv[2];
$num2 = $argv[3];
	
if($operator== "+"){
 echo $num1 + $num2;
}
else if($operator == "-") {
 echo $num1 - $num2;
}
else if($operator == "*") {
 echo $num1 * $num2;
} 
else if($operator == "/") {
 echo $num1 / $num2;
}

?>