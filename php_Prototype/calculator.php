<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="calculator.php" method="POST">
        Enter the first number :<br>
        <input type="text" name="number_1"><br><br>
        Select :<br>
        <select name="math"><br><br>
            <option value="">---chose---</option>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
            <option value="%">%</option>
        </select><br><br>
        Enter the second number :<br>
        <input type="text" name="number_2"><br><br>
        <input type="submit" name="send">
    </form>
    <?php



    function calcumator($number_1 , $number_2 , $math)
    {
      switch($math)
      {
       case("+"):
        return $number_1 + $number_2 ;
        break;

        case("-"):
        return $number_1 - $number_2 ;
        break;

        case("*"):
        return $number_1 * $number_2 ;
        break;

        case("/"):
        return $number_1 / $number_2 ;
        break;

        case("%"):
        return $number_1 % $number_2 ;
        break;

        default ;
        return $result = "error" ;
      }
    }
    if(empty($_POST['number_1']) || empty($_POST['number_2']) || empty($_POST['math']) )
    {
       $result = "error_1" ;
    }
    else if(!is_numeric($_POST['number_1']) || !is_numeric($_POST['number_2']))
    {
     $result = "error_2" ;
    }
    else
    {
     $result = calcumator($_POST['number_1'] ,$_POST['number_2'] , $_POST['math']);
    }

     echo " $result" ;
    ?>
</body>
</html>