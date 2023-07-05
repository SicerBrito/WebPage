<?php

require_once("db.php");

class Config{

    private $id;
    private $user;
    private $email;
    private $password;

    public function __construct($id, $user, $email, $password){
        $this->id = $id;
        $this->user = $user;
        $this->email = $email;
        $this->password = $password;


        //PDO es el objeto de datos por defecto de php
        $this->dbConexion = new PDO(DB_TYPE.":host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PWD, [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);

    }

    public function setId($id){
        $this->id = $id;
    }
    public function getId(){
        return $this->id;
    }

    public function setUser($user){
        $this->user = $user;
    }
    public function getUser(){
        return $this->user;
    }

    public function setEmail($email){
        $this->email = $email;
    }
    public function getEmail(){
        return $this->id;
    }

    public function setPassword($password){
        $this->password = $password;
    }
    public function getPassword(){
        return $this->password;
    }




    public function insertData(){
        //staimen o declaraciones
        //TODO: Como ya instanciamos PDO ya tenemos todos los recursos del objeto de datos de php y uno de ellos es "prepare" que es donde expesificamos la columna general insert into, se expesifica en el las columnas todas menos la autonumerica.
        try {
            $stm = $this-> dbConexion -> prepare("INSERT INTO users(userName, emailUser, passwordUser) VALUES(?,?,?)");

            $stm -> execute([$this->user, $this->email, $this->password]);
        } catch (Execption $e) {
            return $e->getMessage;
        }
        
    }


}


?>