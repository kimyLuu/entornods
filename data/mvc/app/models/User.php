<?php
//Este  user se cconecta a una base de datos 
//User php
//en el modelo nunca hay html es mas codigo php; 

namespace App\Models;

//require "../core/Model.php";

use Core\Model;//Importamos el fichero
use DateTime;
use PDO;


//En esta clase se 
class User extends Model{

  //contructor para controlar la fecha
  public function __construct()
  {
    $this->birthdate=DateTime::createFromFormat('Y-m-d', $this->birthdate); //cada vez que recupere la fecha del usuario , vendra en este formato      
  }
  
        //Extraigo todos los registros de user de la tabla user

        //Return @reurn devuelvo todos losregistros de la tabla users de la bbdd
        //con QUERY

        public static function all(){ //Recoge todos los datos
            
            $dbh = User::db();//lamo al methodo estatico  otra manera es self::db(); metodo estatico
            $sql = "SELECT *  FROM users"; //llamo a la tabla users
            $statement =$dbh ->query($sql);
            $statement ->setFetchMode(PDO::FETCH_CLASS , User::class); //carga atributos de esa clase
            $users= $statement->fetchAll(PDO::FETCH_CLASS, User::class);
           // $users= $statement->fetchAll(PDO::FETCH_CLASS, "App\\Model\\User"); esta es otra manera segugn la documentacion pero tienes que poner todo porque tiene un namesace

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

    /*Estabblecer un pasword un parametro  el pasword en text plano*/

    public function setPassword($password){
      $dbh =self::db();
      /*El pasword se tiene que cifrar Se pasa el pasword que quiero cifrar  */
      $hashedPassword = password_hash($password , PASSWORD_BCRYPT);
      $sql ="UPDATE users SET password = :password WHERE id=:id ";

      $statement =$dbh->prepare($sql);
      $statement->bindValue(":id",$this->id);
       $statement->bindValue(":password",$hashedPassword);

       return $statement->execute();

    }


    /*Estabblecer un pasword un parametro  el pasword le pasas la contrasena a verificar y el usuario para que se vea si coinciden */

    public function passwordVerify($password, $user) {
      return password_verify($password, $user->password);
  }

    /*Crear un enlace por cada usuario en la que se le resetee a una password pr defecto.
    
    -Crea un boton enlace(enlace) para resetear todos los password de todos los usuarios de la base de datos a un password por defecto*/

    /*Crear un metodo para convertir el index.php en pdf
    utilzando dompdf , buscar en la documentacion */
    

}

