<?php
include_once("pgbanco.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="cadastrarc.php" method="post">
        <label for="">Digite a nova categoria que deseja criar:</label><br>
        <input type="text" name="n1" id="n1">
        <input type="submit" value="enviar">
    </form>
</body>
</html>