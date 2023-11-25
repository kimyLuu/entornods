<?php

//Ejercicio del Namespace
namespace App\Controllers;

//require "../app/models/User.php";
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
            $user = User::find($id);//busca la infornacion deun unico usuario
            require "../Views/user/show.php";
            
        }
        function create(){//Esto se creara las vistas usuarios
            require "../Views/user/create.php";
        }

        function store(){ //Inserta un nuevo usuario
            $user= new User();
            $user->name=$_REQUEST["name"];
            $user->surname=$_REQUEST["surname"];
            $user->email=$_REQUEST["email"];
            $user->birthdate=$_REQUEST["birthdate"];
            $user->insert(); //llamo al modelo de user.php
            header('Location:/user');
        }


        function edit($args){//Esto acctualiza un nuevo usuario

            //Primero coges el ide del usuario y luego se modifocara el usurio
            $id = (int)$args[0];
            $user = User::find($id);//busca la infornacion deun unico usuario
            require "../Views/user/edit.php"; //esto llamara al update.php
            
        }

        //Se creara una funcion de actualizar el cual mostrara
        function update(){
            $id=$_REQUEST["id"];
            $user=User::find($id); //datps del usuario que se van a modificar
            $user->name=$_REQUEST["name"];
            $user->surname=$_REQUEST["surname"];
            $user->email=$_REQUEST["email"];
            $user->birthdate=$_REQUEST["birthdate"];
            $user->save();//llamo al metodo  modelo
            header('Location:/user');//redije al index

    
        }
        /*Primero va a mostrar que usuario quiere borrar */

        //Funcion en la que se Borrara un usuario , pero sera el id quien indique qe usuario se va a borrar

        function delete($args){//Esto acctualiza un nuevo usuario

            //Primero coges el ide del usuario y luego se modifocara el usurio
            $id = (int)$args[0];
            $user = User::find($id);//busca la infornacion deun unico usuario
            $user->delete();
            header('Location:/user');///esto llamara al update.php
            
        }


    }//fin class

    //echo "<br>Mostrando contenidos con la Dwes";
    //Paa usar nuestra clase orimero aasignamos una variable


    /*Primero probar el UserController mvc.local/user/show
    Creat un LoguinController, HomeController, clientcontroller
    de forma similar al user controller */