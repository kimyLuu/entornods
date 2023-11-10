<?php
class User{
    //Un array constate  que no se puede cambiar , es estatico.
    const USERS=[ //Esto es un array que contiene otro array
        array(1,"Pedro"), //Este modelo va simular la base datos 
        array(2,"Elena"),
        array(3,"FRancisco"),
        array(4,"Blanca")
    ];

    //Podemos hacer recuperar todos o solo uno

    /* @return array con los datos de los usuarios
    */
    public static function all(){
        return User::USERS;//User es la clase y retorno todo el array
    }//fin class

    //Devolver un elemento
    /* @return Un usuario en particular 
    @param $id */
    public static function find($id){//se pasa un identificador oara saber que es lo que quier pasar
        //se recupera de dos maneras una simple es esta
        return User::USERS[$id-1]; //como las posiciones empiezan desde el 0 se tiene que pasar -1 para haci acceda por la posicion que le indicas
      
            

        // //La otra manera es con un arrar clave - valor
        // foreach (User::USERS as $key => $user) {
        //     if ($user[0] == $id) {//Se compara con user de 0 que es el "id" de los elementos 
        //         return $user;
        //     }
        // }
        // return null;

    }//find class
}