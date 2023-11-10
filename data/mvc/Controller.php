<?php
require_once "User.php";

    class Controller{
        

        //Recupera todos los usuarios 
        //Invoca a vista con todos los usuarios
        public function index(){
            $arrausers=User::all();//se accede con :: porque es esstatico
            //Include si encuentra ejecucion continua 
            //Requide si encuentra un error para.
            require "Views/index.php";

        }

        public function show(){
            $id= $_GET["id"];
            $user= User::find($id); //Llama al modelo e introduce la vista 
            require "Views/show.php"; //con esto se muestra 

        }
    }//Fin  class