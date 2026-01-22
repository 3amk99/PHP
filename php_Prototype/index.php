<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>The result</h1>
    <table border="2" cellpadding = "8">
     <tr>
        <th> TITLE</th>
        <th> VALUE</th>
     </tr>
     
    <tr>
        <td> NAME</td>
        <td> <?php echo $_POST['name']; ?></td>
    </tr>

    <tr>
        <td> LAST NAME </td>
        <td> <?php echo $_POST['last_name']; ?></td>
    </tr>
     
    <tr>
        <td> ADRESS </td>
        <td> <?php echo $_POST['adress']; ?></td>
    </tr>

    <tr>
        <td> VILLE </td>
        <td> <?php echo $_POST['city']; ?></td>
    </tr>

    <tr>
        <td> Code postal </td>
        <td> <?php echo $_POST['code_postal']; ?></td>
    </tr>
    </table>
</body>
</html>