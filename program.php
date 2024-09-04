<?php
//  Write a PHP program to print sum of digits.
$num = 23;
$sum=0;
for($i=0; $i<strlen($num) ; $i++){
    $rem = $num % 10;
    $sum += $rem ; 
    $num = $num /10;
}
echo $sum."\n";

//Even or odd number

$number  = 12;
if($number%2 ==0 )
{
    echo "even number"."\n";
}
else{
    echo "odd number"."\n";
}
