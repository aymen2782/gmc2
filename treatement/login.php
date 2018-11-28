<?php
/**
 * Created by PhpStorm.
 * User: aymen
 * Date: 28/11/2018
 * Time: 13:00
 */

session_start();
require '../autoload.php';
// récuperer les champs

//ajouter les tests et  tout ce qu'il faut

$login= $_POST['login'];
$password= $_POST['password'];

// recuperer le user
$user = new User();
// verifier s'il est dans la base
$utilisateur = $user->connect($login,$password);

    // si oui
if($utilisateur){
    $_SESSION['user']='admin';
    // vérifier son role
    if ($utilisateur->role == 1){
        $destination = '../admin.php';
        // si admin vers page admin
    } else {
        $destination = '../user.php';
        // sinon vers page user
    }
} else {
    $destination = '../connexion.php';
}

header('location:'.$destination);

