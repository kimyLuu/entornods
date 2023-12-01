<?php

class PageShow{
    public $currentPage;

    public function __construct($objpage){
        $this->currentPage=$objpage;   
    }

    public function show(){
        echo "<br>El nombre de la pagina actual es :".$this->currentPage->name;
        $status=$this->currentPage->status? 'Activo': 'Desabilitado';  //Verifoca el valoe de la expresion si el valor es 0 sale desabilitado
        echo "<br>Estado de la pagina" . $status;

       
    }

}
    $page = new stdClass(); //esta clase ya viene por defecto en php
    $page-> name="Indice";
    $page->status=1;

    //añadir metodos dinamicos stdClass

    //Se le asigana una cadena que va a devolver
    $page->print= function($text){
            return "Imprimiend el texto: ".$text;
    };//se va crear una funcion anonima funtion colback

    $pageview = new PageShow($page); //se le pasa un objeto d tipo page
    $pageview->show();//se le llama al show

    //entonces se le va asignar una variañe
    $printing =$page->print;
    echo "<br>".$printing("Hola  mundo"); //el resultado devuelve una funcion