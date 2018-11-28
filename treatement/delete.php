<?php
/**
 * Created by PhpStorm.
 * User: aymen
 * Date: 28/11/2018
 * Time: 12:28
 */
require '../autoload.php';
// Je récupére le cin à travers le GET

if(isset($_GET['cin'])){
// je crée une personne
$personne = new Personne();
// j appelle la méthode qui supprime
$personne->deletePersonne($_GET['cin']);
}

header('location:../main.php');

