<?php
/**
 * Created by PhpStorm.
 * User: gregory
 * Date: 9/14/16
 * Time: 5:06 PM
 */
//TODO comment these out if you are running the mysql locally.
$dbhost = 'localhost';
$dbname = "pre_hackisu"; // the name of the database that you are going to use for this project

//TODO set these variable to reflect your system's variables.
$dbuser = "pre_hackisu"; // the username that you created, or were given, to access your database
$dbpass = "password"; // the password that you created, or were given, to access your database
$port = 3306;


$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname,$port);


$sql = "SELECT * FROM users";
$query = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="grid">
        <?php
        while($result = mysqli_fetch_assoc($query)){
            ?>
            <div class="user">
                <img class="image" src="/images/<?= $result['image'] ?>">
                <h1><?= $result['f_name']." ".$result['l_name'] ?></h1>
            </div>

            <?php

        }
        ?>
    </div>
</body>
</html>


