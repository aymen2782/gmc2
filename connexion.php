<?php
/**
 * Created by PhpStorm.
 * User: aymen
 * Date: 28/11/2018
 * Time: 12:58
 */
session_start();
if(isset($_SESSION['user'])){
//    if($_SESSION['user']->role == 1){
//       die('admin');
//    } else {
//        die('user');
//    }
die('faire ce qu il faut');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>

<form action="treatement/login.php" method="post">
    <input type="text" name="login" class="form-control">
    <input type="password" name="password" class="form-control">
    <input type="submit" class="btn btn-primary">
</form>

</body>
</html>
