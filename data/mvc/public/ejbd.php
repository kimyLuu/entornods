<?php
require "../bdcon_testclients.php";


 // print_r(PDO::getAvailableDrivers()); Nos sirve para ver la instalacion de myql
    
 try{
    $dbh = new PDO(DSN , USERNAME ,PASSWORD); //Driver para basede datos
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM $table";
    //Insertamos un nuevo dato en la base de datos
    $sql2= "INSERT INTO $table VALUES(null , 'Pepito', 'calle sin sentido', 37, '999666357')";

    //Forma 1 :QUERY
    /*
    $registers= $dbh->query($sql);
    foreach($registers as $row){
        echo "Id : ".$row["ID"];
        echo " Name : ".$row["Name"];
        echo " Direccion  : ".$row["Address"];
        echo " Edad : ".$row["Age"];
        echo " Telefono: ".$row["Telephone"];
        echo "<br>";
    }
    echo "<br> Numero de filas: ".$registers->rowCount();
*/
    //Form 2: PREPARE + EXECUTE
  // $stmnt= $dbh->prepare($sql2);
    $stmnt= $dbh->prepare($sql2);
    $stmnt->execute();
    echo "El ultimo id ".$dbh-> lastInsertId();

    //recoge los resultados:
    //OPCION A fechAll como Array asociativo
    $registers= $stmnt ->fetchAll(PDO::FETCH_ASSOC);
    foreach($registers as $row){
        echo "Id : ".$row["ID"];
        echo " Name : ".$row["Name"];
        echo " Direccion  : ".$row["Address"];
        echo " Edad : ".$row["Age"];
        echo " Telefono: ".$row["Telephone"];
        echo "<br>";
    }
    
/*
    //OPCION B: fechAll como Objeto
    $stmnt= $dbh->prepare($sql);
    $stmnt->execute();
    $registers= $stmnt ->fetchAll(PDO::FETCH_OBJ);
   
    foreach($registers as $row){
        echo "Id : ".$row-> ID;
        echo "Name : ".$row->Name;
        echo "Districto  : ".$row-> District;
        echo "Poblacion : ".$row-> Population;
        echo "<br>";
    }*/

}catch(Exception $ex){
    //throw $th
    echo "Fallo en la coneccion: ". $ex->getMessage();


}finally{
    $dbh = null;
    echo "<br>Conexion cerrada";
}