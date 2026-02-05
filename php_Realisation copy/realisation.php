<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="realisation.css">
</head>
<body>
    <form method="POST" action="realisation.php">
        <div id="data_intering">
            <div id="name_Name">Name:</div>
            <input type="text" name="Name" id="name">

            <div id="name_Gmail">Gmail:</div><br>
            <input type="text" name="Gmail" id="Gmail">

             <div id="name_Message">Message:</div>
            <textarea type="text" name="Message" id="Message"></textarea>
            <div id="buttons">
                <button type="submit" name="send" id="send" >send</button>
                <button type="submit" name="show" id="show">show</button>
            </div>
        </div>
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
    
    
     if(isset($_POST['show']))
     {
      echo '<div id="parent_h1">
             <h1 id="title_of_table"> The list </h1>
            </div>
            ';
      echo " <table border= 2 > ";
      $memory = file( $data_dyalna);
      $lakhrin = array_slice($memory , -5);
      $counter = 1 ;
      echo '
       <tr id="titles">
                    <th id="tite_col_1"> °Nnuber </th>
                    <th id="tite_col_2"> Name </th>
                    <th id="tite_col_3"> Gmail </th>
                    <th id="tite_col_4"> Date </th>
        </tr>
      ';
      foreach( $lakhrin as $frda)
      {
        list($Name,$Gmail,$Message, $date) = explode("|" , $frda );
        echo '
                <tr>
                    <td id="col_1"> '.$counter.' </td>
                    <td id="col_2">'.$Name.' </td> 
                    <td id="col_3">'.$Gmail.'</td>
                    <td id="col_4"> '.$date.'</td>
               </tr>

               <tr>
                    <td colspan = 4 id="message_col"> '.$Message.' </td>
               </tr>';
               $counter++;
      }
     }
     echo "</table>" ;
    ?>
</body>
</html>