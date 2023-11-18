<?php
    namespace App\Controllers;


    class ClientController{
        //methodo 
        function __construct()
        {
            //echo "<br> construyendo CLIENT controller";
            

        }
        
        function index(){
           // echo "<br> En e INDEX de CLIENT";
            require "../Views/client/index.php";

        }
        function show(){
            echo "<br> En de SHOW de CLIENT";
            require "../Views/client/show.php";
        }

    }//fin class

    echo "<br>Mostrando contenidos con la Dwes";
    //Paa usar nuestra clase orimero aasignamos una variable

