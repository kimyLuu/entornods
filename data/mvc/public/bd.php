<?php
    require "../bdcon.php";
    //mysql, PDO
    echo "<h2>BBDD con php</h2>";
   // print_r(PDO::getAvailableDrivers()); Nos sirve para ver la instalacion de myql
    
    try{
        $dbh = new PDO(DSN , USERNAME ,PASSWORD); //Driver para basede datos
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM city";

        //Forma 1 :QUERY
        /*
        $registers= $dbh->query($sql);
        foreach($registers as $row){
            echo "Id : ".$row["ID"];
            echo "Name : ".$row["Name"];
            echo "o  : ".$row["District"];
            echo "Poblacion : ".$row["Population"];
            echo "<br>";
        }

        //Form 2: PREPARE + EXECUTE
        $stmnt= $dbh->prepare($sql);
        $stmnt->execute();

        //recoge los resultados:
        //OPCION A fechAll como Array asociativo
        $registers= $stmnt ->fetchAll(PDO::FETCH_ASSOC);
        foreach($registers as $row){
            echo "Id : ".$row["ID"];
            echo "Name : ".$row["Name"];
            echo "Districto  : ".$row["District"];
            echo "Poblacion : ".$row["Population"];
            echo "<br>";
        }*/

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
        }

    }catch(Exception $ex){
        //throw $th
        echo "Fallo en la coneccion: ". $ex->getMessage();


    }finally{
        $dbh = null;
        echo "<br>Conexion cerrada";
    }