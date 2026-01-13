<?php
function addition($number_1, $number_2 , $math_symbol) 
{
    switch($math_symbol)
 {
    case "+" :
       echo $number_1 + $number_2 ; 
       break;
    case "-" :
        echo $number_1 - $number_2 ;
        break;
    case "*" :
        echo $number_1 * $number_2 ;
        break;
    case "/" :
        echo $number_1 / $number_2 ;
        break;
    case "%" :
        echo $number_1 % $number_2 ;
        break;
    default ;
    echo "error please fix it " ;
 }
}

$sign = 0 ;
while($sign == 0)
{
echo "Enter the first number pls ";
$number_1 = (int)trim(fgets(STDIN));

echo "Enter the math sumbol , + , - , / , * , % pls ";
$math_symbol = trim(fgets(STDIN));

echo "Enter the second number pls ";
$number_2 = (int)trim(fgets(STDIN));


echo   addition($number_1, $number_2 ,$math_symbol );

echo "\ndo you want to retry agin ? please click 0 for y and 1 for n   ";
$sign = (int)trim(fgets(STDIN));
}