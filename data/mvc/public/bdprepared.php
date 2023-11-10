<?php
    require "../bdcon.php";

    echo "<h2>BBDD Sentencias</h2>";
    echo "<br> constante".TABLACLIENTES;

/*
1-Prepare la sentencia -> prepare:
    -name placeholder : nomvariable
    -question mark placeholder: ?

2-vincular valores a las varibles
    -bindParam (se usa un enlace y se enlaza por valor)
    -bindValue

3- Ejecutar la sentencia ->execute
*/    
    try{
        $dbh = new PDO(DSN2 , USERNAME ,PASSWORD); //Driver para basede datos
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //Primero se crea la sentencia sql
        //FORMA A: NAMED PLACEHOLDER
        $sql= "INSERT INTO ".TABLACLIENTES ."(ID,Name, Address, Age,Telephone)
        VALUES(:id, :nombre,:direccion,:edad,:telefono)"; //son variables que se vinculara 
        
        //FORMA B: QUESTIN MARK PLACEHOLDER
        $sql2= "INSERT INTO ".TABLACLIENTES ." (ID,Name, Address, Age,Telephone)
        VALUES(?,?,?,?,?)"; //son variables que se vinculara 
        
        $statement = $dbh ->prepare($sql2);
        //TODO ESTO ES DE NAMED-------------------
        //OPCION 1  bindParam ->Variable es una refeencia
        //Son valores que recogo $_POST  $_GET o con $_COOKIE
        $id=null;
        $nombre="Ester";
        $direccion="Avenida Navarra";
        $edad= 43;
        $telefono="978222456";
        /*
        //El orden no importa 
        $statement ->bindParam(":nombre",$nombre);
        $statement ->bindParam(":id",$id);
        $statement ->bindParam(":telefono",$telefono);
        $statement ->bindParam(":direccion",$direccion);
        $statement ->bindParam(":edad",$edad);
        echo "<h4>Inserccion correcta</h4>";
        //Si se tiene edad otro valor y esta despues se llega a poner
        $edad= 64;
        
        //OPCION2: BindValue ->asocio valores.
        $statement ->bindValue(":id",$id);
        $statement ->bindValue(":nombre",$nombre);
        $statement ->bindValue(":direccion",$direccion);
        $statement ->bindValue(":telefono",$telefono);
        $statement ->bindValue(":edad",$edad);
        $edad= 64; //en bindValue no se modifica el valor
        $nombre="Alfredo";
        //Ejecutar la sentencia
        $statement->execute();
        */
        
    //---------------------------
        //CON QUESTION MARK PLACEHOLDER
        /*
        $statement ->bindParam(1,$id);
        $statement ->bindParam(2,$nombre);
        $statement ->bindParam(3,$direccion);
        $statement ->bindParam(4,$edad);
        $statement ->bindParam(5,$telefono);
        echo "<h4>Inserccion correcta</h4>";
        $nombre= "Alfredo"; //Este valor si ingresa
        $statement->execute();
*/
           //OPCION2: BindValue ->asocio valores.
        $statement ->bindValue(1,$id);
        $statement ->bindValue(2,$nombre);
        $statement ->bindValue(3,$direccion);;
        $statement ->bindValue(4,$edad);
        $statement ->bindValue(5,$telefono);
        $edad= 64; //en bindValue no se modifica el valor
        $direccion="Calle x";
        //Ejecutar la sentencia
        $statement->execute();
    }catch(Exception $ex){
        //throw $th
        echo "Fallo en la coneccion: ". $ex->getMessage();


    }finally{
        $dbh = null;
        echo "<br>Conexion cerrada";
    }

    /*
    EEjercicio clase 
    Añador una columna a la tabla Fecha -> d/m/YYY

    Insertar 5 fila con bindPAram
    Insertar 5 fila con bindValue

    Los datos a insertar se recogeran de un formulario 
    que se realizar y rellenar con los datos.
    El formato a insertar en la fecha ->5/10/2023
    */


 
