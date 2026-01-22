<?php
function addition($number_1, $number_2 , $math_symbol) 
{
    switch($math_symbol)
 {
    case "+" :
       return $number_1 + $number_2 ; 
       break;
    case "-" :
        return $number_1 - $number_2 ;
        break;
    case "*" :
        return $number_1 * $number_2 ;
        break;
    case "/" :
            return $number_1 / $number_2 ;
        break;
    case "%" :
        return $number_1 % $number_2 ;
        break;
    default ;
    return "error please fix it " ;
 }
}
if( empty($_POST['number_1']) || empty($_POST['number_2']) || empty($_POST['math_symbol']) )
{
  $result = "error please fix !!!";
}
else if( !is_numeric($_POST['number_1']) || !is_numeric($_POST['number_2']) )
{
 $result = "error pls fix ";
}
else
{
 $result = addition( (int)$_POST['number_1'] , (int)$_POST['number_2'] , $_POST['math_symbol'] ) ;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
     <? echo $result ?>
    </p>
</body>
</html>