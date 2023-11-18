<?php

//Ejercicio del Namespace
namespace App\Controllers;
require "../app/models/User.php";

use App\Models\User;

    class UserController{
        //methodo 
        function __construct()
        {
            //echo "<br> construyendo user controller";

        }
        
        function index(){
           $users= User::all();//Te devuelve todos los usuario y llama a la vista

           /*//Para probar que funccione se hace  un 
           print_r($users);
           die();*/
            require "../Views/user/index.php";
        }
        function show(){
            echo "<br> En el show de USER";
            require "../Views/user/show.php";
        }
  
   


    }//fin class

    echo "<br>Mostrando contenidos con la Dwes";
    //Paa usar nuestra clase orimero aasignamos una variable


    /*Primero probar el UserController mvc.local/user/show
    Creat un LoguinController, HomeController, clientcontroller
    de forma similar al user controller */