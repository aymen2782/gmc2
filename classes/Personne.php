<?php
/**
 * Created by PhpStorm.
 * User: aymen
 * Date: 28/11/2018
 * Time: 11:32
 */

class Personne
{
    private $cin;
    private $name;
    private $firstname;
    private $bd;

    /**
     * Personne constructor.
     * @param $cin
     * @param $name
     * @param $firstname
     */
    public function __construct($cin=0, $name=null, $firstname=null)
    {
        $this->cin = $cin;
        $this->name = $name;
        $this->firstname = $firstname;
        $this->bd = ConnexionBD::getInstance();
    }


    /**
     * @return mixed
     */
    public function getCin()
    {
        return $this->cin;
    }

    /**
     * @param mixed $cin
     */
    public function setCin($cin)
    {
        $this->cin = $cin;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param mixed $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    public function addPersonne($cin,$name,$firstname){
        $query = "INSERT INTO `personne` (`cin`, `name`, `firstname`) VALUES (:cin, :name, :firstname)";
        $respone = $this->bd->prepare($query);
        $respone->execute(
            array(
                'cin'=>$cin,
                'firstname'=>$firstname,
                'name'=>$name,
            )
        );
    }

    public function findAll() {
        $query = " select * from personne";
        $respone = $this->bd->prepare($query);
        $respone->execute();
        return $respone->fetchAll(PDO::FETCH_OBJ);
    }

    public function findByCin($cin) {
        $query = " select * from personne where cin=:cin";
        $respone = $this->bd->prepare($query);
        $respone->execute(
            array(
                'cin'=> $cin
            )
        );
        return $respone->fetch(PDO::FETCH_OBJ);
    }

    public function deletePersonne($cin) {

        $query = " delete from personne where cin=:cin";
        $respone = $this->bd->prepare($query);
        $respone->execute(
            array(
                'cin'=> $cin
            )
        );
    }


}