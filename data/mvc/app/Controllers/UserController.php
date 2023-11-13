<?php

//Ejercicio del Namespace
namespace App\Controllers;


    class UserController{
        //methodo 
        function __construct()
        {
            echo "<br> construyendo user controller";

        }
        
        function index(){
            require "../Views/user/index.php";
        }
        function show(){
            echo "<br> En el show de USER";
        }
  
   


    }//fin class

    echo "<br>Mostrando contenidos con la Dwes";
    //Paa usar nuestra clase orimero aasignamos una variable


    /*Primero probar el UserController mvc.local/user/show
    Creat un LoguinController, HomeController, clientcontroller
    de forma similar al user controller */