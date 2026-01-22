<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="realisation.php">
        <fieldset>
            <legend>the forme </legend>
        Name:<br>
        <input type="text" name="Name"><br><br>

        Gmail:<br>
        <input type="text" name="Gmail"><br><br>

        Message:<br>
        <textarea type="text" name="Message"></textarea><br><br>

        <button type="submit" name="send">send</button>
        <button type="submit" name="show">show</button><br><br>
        </fieldset>
    </form>
    <?php
     $data_dyalna = "data.txt" ;
     if(isset($_POST['send']))
     {
       $Name = $_POST['Name'] ;
       $Message = $_POST['Message'] ;
       $Gmail = $_POST['Gmail'];
       $date = date("Y-m-d H:i:s");

       $line = "$Name|$Gmail|$Message|$date\n";
       file_put_contents($data_dyalna , $line ,FILE_APPEND);
     }
     echo "<h1> the list </h1>";
     echo " <table border= 2 > ";
     if(isset($_POST['show']))
     {
      $memory = file( $data_dyalna);
      $lakhrin = array_slice($memory , -5);
      $counter = 1 ;
      foreach( $lakhrin as $frda)
      {
        list($Name,$Gmail,$Message, $date) = explode("|" , $frda );
        echo " <tr>
                <td>$counter &nbsp $Name &nbsp;&nbsp;&nbsp;  $Gmail</th>
                <td> $date</th>
               </tr>

               <tr>
                <th colspan = 2> $Message</th>
               </tr>";
               $counter++;
      }
     }
     echo "</table>" ;
    ?>
</body>
</html>