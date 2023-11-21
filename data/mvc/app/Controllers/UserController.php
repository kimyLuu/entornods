<?php

//Ejercicio del Namespace
namespace App\Controllers;
require "../app/models/User.php";
 use App\Models\User;


    class UserController{
        //methodo 
        function __construct()
        {
           // echo "<br> construyendo user controller";

        }
        
        function index(){
            $users = User::all(); //Si es estatico
            //Para probar que funciona
            //print_r($users);
            //die();
            require "../Views/user/index.php";
        }
        function show($args){
            $id = (int)$args[0];
            $user = User::find($id);
            require "../Views/user/show.php";
            
        }
        function create(){//Esto se creara las vistas usuarios
            require "../Views/user/create.php";
        }

        function store(){
            $user= new User();
            $user-> name =$_REQUEST["name"];
            $user-> name =$_REQUEST["surname"];
            $user-> name =$_REQUEST["email"];
            $user-> name =$_REQUEST["birthdate"];
            $user->insert(); //llamo al modelo
        }
  
   


    }//fin class

    echo "<br>Mostrando contenidos con la Dwes";
    //Paa usar nuestra clase orimero aasignamos una variable


    /*Primero probar el UserController mvc.local/user/show
    Creat un LoguinController, HomeController, clientcontroller
    de forma similar al user controller */