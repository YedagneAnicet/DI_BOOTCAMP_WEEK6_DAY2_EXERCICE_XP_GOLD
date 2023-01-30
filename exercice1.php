<?php
$number = 10;
$factorial = 1;

if($number == 0){
    echo "The factorial of $number is $factorial ";
}else if($number<0){
    echo "$number is invalid number";
}else{
    for ($i=$number; $i>=1; $i--)
    {
        $factorial = $factorial * $i;
    }
    
    echo "The factorial of $number is $factorial";
}
?>