<?php
namespace App\Controllers;

class LoginController{
    //methodo 
    function __construct()
    {
        echo "<br> construyendo Login controller";

    }
    
    function index(){
        echo "<br> En e INDEX de LOGIN";
        require "../Views/login/index.php";
    }
    function show(){
        echo "<br> En de SHOW de LOGIN";
        require "../Views/login/index.php";
    }

}//fin class

echo "<br>Mostrando contenidos con la Dwes";
//Paa usar nuestra clase orimero aasignamos una variable

