<?php

require_once("db.php");

class Config{

    private $id;
    private $user;
    private $email;
    private $password;
    protected $dbConexion;

    public function __construct($id, $user, $email, $password){
        $this->id = $id;
        $this->user = $user;
        $this->email = $email;
        $this->password = $password;


        //! PDO es el objeto de datos por defecto de php
        $this->dbConexion = new PDO(DB_TYPE.":host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PWD, [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);

    }

    //Getters and Setters
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




    public function insertDataUsers(){
        //staimen o declaraciones
        //TODO: Como ya instanciamos PDO ya tenemos todos los recursos del objeto de datos de php y uno de ellos es "prepare" que es donde expesificamos la columna general insert into, se expesifica en el las columnas todas menos la autonumerica.
        try {
            $stm = $this-> dbConexion -> prepare("INSERT INTO users(userName, emailUser, passwordUser) VALUES(?,?,?)");

            $stm -> execute([$this->user, $this->email, $this->password]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
        
    }



    public function obtainData(){
        try {  //Llamamos al atributo que es nuestro objeto de tipo PDO.
            //El * lo que hace es que SELECT INTO seleccione todas las columnas de la tabla pero tambien se pueden espesificar manualmente como en este ejemplo (SELECT userName, emailUser, passwordUser FROM users)
            $stm = $this-> dbConexion -> prepare("SELECT * FROM users");

            //Para ejecutar la sentencia que es el argumento del prepare.
            $stm -> execute();

            //Una vez ejecutada lo que debemos hacer es retornar esa instancia a mi objeto que es el staimen pero le invocamos ese PDO al metodo fetchAll() este metodo es el que retorna todas las filas y todos los registros de la tabla.

            return $stm -> fetchAll();

            //TODO: Tambien lo podria hacer asi
            // $resulto = $stm->fetchAll();

            // // Por ejemplo, puedes imprimir los resultados
            // foreach ($resulto as $row) {
            //     echo "Username: " . $row['userName'] . "<br>";
            //     echo "Email: " . $row['emailUser'] . "<br>";
            //     echo "Password: " . $row['passwordUser'] . "<br>";
            //     echo "<br>";
            // }
        } catch (Exception $e) {
            echo $e->getMessage();
            return array();  // Devuelve un array vacío en caso de error    
        }
    }


}


?>