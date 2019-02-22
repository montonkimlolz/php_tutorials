<?php

echo "\n";
echo "Select operation: ";
$op = rtrim(fgets(STDIN));


if($op=='m' or $op=='M'){
echo "\n";
echo "\n";
echo "Enter multipcant: ";
$num1 = rtrim(fgets(STDIN));
echo "Enter multiplier: ";
$num2 = rtrim(fgets(STDIN));
echo "Product: ";
echo $num1*$num2;
echo "\n";
}

else if($op=='d' or $op=='D'){
echo "\n";
echo "\n";
echo "Enter dividend: ";
$num3 = rtrim(fgets(STDIN));
echo "Enter divisor: ";
$num4 = rtrim(fgets(STDIN));
echo "Quotient: ";
echo $num3/$num4;
echo "\n";
}

else if($op=='s' or $op=='S'){
echo "\n";
echo "\n";
echo "Enter minuend: ";
$num5 = rtrim(fgets(STDIN));
echo "Enter subtrahend: ";
$num6 = rtrim(fgets(STDIN));
echo "Difference: ";
echo $num5-$num6;
echo "\n";
}

else if($op=='a' or $op=='A'){
echo "\n";
echo "\n";
echo "Enter augend: ";
$num7 = rtrim(fgets(STDIN));
echo "Enter addend: ";
$num8 = rtrim(fgets(STDIN));
echo "Sum: ";
echo $num7+$num8;
echo "\n";
}

else{
echo "\n";
echo "\n";
echo "ERROR, TRY AGAIN";
echo "\n";
echo "\n";
}
?>