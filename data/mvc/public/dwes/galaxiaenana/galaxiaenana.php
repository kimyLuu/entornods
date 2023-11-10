<?php
   // nombre se llama igual que el fichero solo que en mayuscula
    namespace Dwes\Galaxiaenana;


    const RADIO =35; //millones km
     //Funciones dentro de la clase
     
    function observar($nombre){
        echo "<br>Mirando a :  $nombre";
    }


    class galaxia{
        //Funciones dentro de la clase
        function __construct(){
            $this->nacer();
        }

        function nacer(){
            echo "<br> Nueva galaxia en camino !";
        }

        //funcion estatica 
        static function muerte(){
            echo "<br> Galaxia destruyendose 3 , 2 , 1...";
        }
          
    }