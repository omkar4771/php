<?php
function sum ($marks){
    $sum = 0;
    foreach($marks as $mark){
        $sum += $mark;
    }
    return $sum;
}
$marks = array(15,20,36,45,20,98);
$total = sum($marks);
echo "total marks of roan is $total"."\n";

function display($num){
    if($num <=5){
        echo $num."\n";
    }
    display($num+1);
}
display(1);
?>
