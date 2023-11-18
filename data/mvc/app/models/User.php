<?php
//Este  user se cconecta a una base de datos 
//User php
//en el modelo nunca hay html es mas codigo php; 
namespace App\Models;

require "../core/Model.php";
use Core\Model;//Importamos el fichero
use PDO;


//En esta clase se 
class User extends Model{
  
        //Extraigo todos los registros de user de la tabla user
        public static function all(){

            $dbh =User::db();
            $sql ="SELECT *FROM users";
            $statement = $dbh ->query($sql);
            //$statement ->setFetchMode(PDO::FETCH_CLASS, "User:class");
            $statement->setFetchMode(PDO::FETCH_CLASS, User::class);
            $users=$statement->fetchAll(PDO::FETCH_CLASS); //Recupero todo
            return $users ;//Devuelvo todos los usuarios en array

            //Una vez que tengo todos me voy al al modelo USercontroller

            //se va a cargar los atributos de esa clase

        echo "<br> Recupero un usuario";
        
    }//fin class

    
    /* @return 
    @param $id */
    public static function find($id){//se pasa un identificador oara saber que es lo que quier pasar
        //
        echo "<br>Recupero un usuario";
        
    }
    public static function insert(){
        echo "<br>inserto registro";

    }
    public static function save(){//Recupero registro actualizando datos
        echo "<br>Actualizando registro";

    }
    public static function delete(){
        echo "<br>Borro el  registro";

    }
}

