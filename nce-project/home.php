<?php
session_start();
require_once "helper/database.php";
$PDO = connectDatabase();
error_reporting(0);
if ($_SESSION['is_login'] != 'yes') {
    $un = $_POST['name'];
    $pw = $_POST['password'];

    if ($un == 'admin' && $pw == 'admin123') {
        // set session/ cookies
        $_SESSION['is_login'] = 'yes';
    } else {
        $_SESSION['is_login'] = 'no';
        session_destroy();
        header("location: /nce-project/index.php");
    }
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
    <?php 
    include_once('layout/header.php');
    ?>
    welcome
    <table>
        <tr>
            <td> s.no</td>
            <td>name</td>
            <td>address</td>
        </tr>
        <tr
        <?php
            $PDO = connectDatabase();
            $select_query= "SELECT user_id,username,address from users";
            $stmt=$PDO->query($select_query);
            $rows= $stmt ->fetchAll(PDO::FETCH_ASSOC);
            foreach ($rows as $row){
            }
        ?>
            <td> 1.</td>
            <td> ram</td>
            <td>dhading</td>
        </tr>
        <tr>
            <td> 2.</td>
            <td> ramesh</td>
            <td>kathmandu</td>
        </tr>
    </table>
    <br>
    <br>
    <?php 
    include_once('layout/footer.php');
    ?>
    <br>
    <br>
        <a href="/nce-project/logout.php"> Click to logout</a>
</body>

</html>
