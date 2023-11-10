<?php
   // nombre se llama igual que el fichero solo que en mayuscula
    namespace Dwes;


    const RADIO = 126.88; //millones km
     //Funciones dentro de la clase
     
    function observar($nombre){
        echo "<br>Observando la galaxia  $nombre";
    }

    function time(){
        echo "Me queda 666890 años de vida";
    }


    class galaxia{
        //Funciones dentro de la clase
        function __construct(){
            $this->nacer();
        }

        function nacer(){
            echo "<br> Hola , soy una nueva galaxia";
        }

        //funcion estatica 
        static function muerte(){
            echo "<br> Me estoy muriendo....";
        }
        
       
    }