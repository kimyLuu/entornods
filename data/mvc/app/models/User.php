<?php
//Este  user se cconecta a una base de datos 
//User php
//en el modelo nunca hay html es mas codigo php; 

namespace App\Models;

//require "../core/Model.php";

use Core\Model;//Importamos el fichero
use PDO;

//En esta clase se 
class User extends Model{
  
        //Extraigo todos los registros de user de la tabla user

        //Return @reurn devuelvo todos losregistros de la tabla users de la bbdd
        //con QUERY

        public static function all(){ //Recoge todos los datos
            
            $dbh = User::db();//lamo al methodo estatico  otra manera es self::db(); metodo estatico
            $sql = "SELECT *  FROM users"; //llamo a la tabla users
            $statement =$dbh ->query($sql);
            $statement ->setFetchMode(PDO::FETCH_CLASS , User::class); //carga atributos de esa clase
            $users= $statement->fetchAll(PDO::FETCH_CLASS);
            //devuelve un array ->users
            return $users;
            
        
       // echo "<br> Recupero un usuario";
        
    }//fin class

    
    /* @return 
    @param $id */
    public static function find($id){//se pasa un identificador oara saber que es lo que quier pasar
        //Recojo solo un dato
        //$dbh= User::db();esta es otra forma
        $dbh= self::db();

        $sql ="SELECT * FROM users WHERE id = :id";

        $statement =$dbh-> prepare($sql);

        $statement->bindValue(":id",$id);
        $statement->execute();
        $statement->setFetchMode(PDO::FETCH_CLASS , User::class ); //Carag atributos de esa clase, recupera como una clase y los asigna
        //fetch class los crea automaticamente , atributos de mi tabla ->$name, $username
        //Para acceder a essos atributos , $user = new User();

        $user =$statement->fetch(PDO::FETCH_CLASS);      
        return  $user;
        
    }
    public  function insert(){
       // echo "<br>inserto registro";
       $dbh= self::db();

       $sql ="INSERT INTO users (name,surname,email,birthdate)
       VALUES(:nombre, :apellidos,:email,:fechnac)";
         $statement =$dbh->prepare($sql);

       $statement->bindValue(":nombre",$this->name);
       $statement->bindValue(":apellidos",$this->surname);
       $statement->bindValue(":email",$this->email);
       $statement->bindValue(":fechnac",$this->birthdate);
       return $statement->execute();
           

    }
    
    public function save(){//Recupero registro actualizando datos
        //echo "<br>Actualizando registro";
       //En aqui no se insertada sino actualizara la base de datos 

       $dbh= self::db();

       $sql ="UPDATE users  
       SET name=:nombre,surname =:apellidos,email= :email,birthdate=:fechnac 
       WHERE id=:id";
         $statement =$dbh->prepare($sql);
        $statement->bindValue(":id",$this->id);
       $statement->bindValue(":nombre",$this->name);
       $statement->bindValue(":apellidos",$this->surname);
       $statement->bindValue(":email",$this->email);
       $statement->bindValue(":fechnac",$this->birthdate);
       return $statement->execute();
           


    }
    public  function delete(){
      //  echo "<br>Borro el  registro";
      $dbh= self::db();

      $sql ="DELETE FROM users
      WHERE id=:id";

        $statement =$dbh->prepare($sql);
        $statement->bindValue(":id",$this->id);

       return $statement->execute();

    }
}

