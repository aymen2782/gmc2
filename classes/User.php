<?php
/**
 * Created by PhpStorm.
 * User: aymen
 * Date: 28/11/2018
 * Time: 12:49
 */

class User
{
    private $login;
    private $password;
    private $role;
    private $bd;

    /**
     * User constructor.
     * @param $login
     * @param $password
     * @param $role
     */
    public function __construct($login=null, $password=null, $role=null)
    {
        $this->login = $login;
        $this->password = $password;
        $this->role = $role;
        $this->bd = ConnexionBD::getInstance();
    }


    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param mixed $login
     */
    public function setLogin($login): void
    {
        $this->login = $login;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param mixed $role
     */
    public function setRole($role): void
    {
        $this->role = $role;
    }

    public function connect($login, $pwd) {
        $query = " select * from user where login=:login and password = :password";
        $respone = $this->bd->prepare($query);
        $respone->execute(
            array(
                'login'=> $login,
                'password'=> $pwd,
            )
        );
        return $respone->fetch(PDO::FETCH_OBJ);

    }



}