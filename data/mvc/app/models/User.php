<?php
//Este  user se cconecta a una base de datos 
//User php
//en el modelo nunca hay html es mas codigo php; 
namespace App\Models;

require "../core/Model.php";
use Core\Model;//Importamos el fichero


//En esta clase se 
class User extends Model{
  
        //Extraigo todos los registros de user de la tabla user
        public static function all(){
            /*
            $dbh = User::db();//lamo al methodo estatico  otra manera es self::db();
            $sql = "SELECT *  FROM users";
            $stament =$dbh ->query($sql);
        */
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

