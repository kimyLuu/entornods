<?php
//Namespace
namespace Core;


/*
http://mvz.local

LA PETICION GET:
http//mvc.local/controlador/metodo/arg1/arg
http://mvc.local/user/show/1


    EXPLODEE
    /user/show1/ ->user/show1(trim) ->[user, show,1]
    //lo que se hacer es modificar  user a UserController con esto obtienes con el ucwordl;
 */
    class App{
         function __construct(){

            //Partseo o transformacion para  el controlador
            //Si la URL esta en el query devuelve true y si es lo contrario te vas a home
                 isset($_GET["url"]) ? $url =$_GET["url"]: $url ="home"; //home es un controllador
               $arguments= explode('/', trim($url ,'/'));

               //obtener controlador
               $controllerName= array_shift($arguments);// con esto tendrias user|home | producto
                                            //con esto llamas a la clase UserController , ProductController
               $controllerName = ucwords($controllerName) . "Controller";

               //Transfrmacion para los metodos
               //Se creara un contador para ver si el  usuario  tiene mas busquedas en la url
               //Primero ejecuta el array y luego si no lo encuentra el metofo sacara "index"
               count($arguments) ? $method= array_shift($arguments) :$method = "index";

               //Es lo mismo que el anterior count($arguments) > 0 ? $method= array_shift($arguments) :$method = "index";
                /*
                $variable= $cualquierVariable //true
                $variable= array() true
                $variable=  null false
                $variable=  0  false
                */
               //Si la condion es PRIMERO te va ejecutar el $method= array_shift($arguments) y si no existe te sacara index ,otra manera
               //$method = count($arguments) ? $method= array_shift($arguments) : "index";
               //El array da false cuanto el count ($arguments)=0 te saca index pero si count ($arguments) !=0  


               //Importar el controlador
               //cada clase esta asociada a un fichero
               $file = "../app/Controllers/$controllerName" .".php";

//Se esta insertsndo el Dwes 


               //var_dump($file);
               //si el fichero esxite 
               if(file_exists($file)){
                //Lo importamos
                    require "$file";
               }else{
                //Es una cadena de error por defecto 
                http_response_code(404);
                echo "Recurso no encontrado";
                die( "Adioss"); //Para de ejecutar se acabo el programa;
               }

               //ccrear instancia del controlador y llamar al metodo correspondiente
              $controllerName ="\\App\\Controllers\\".$controllerName;

               $controllerObject = new $controllerName; // new \App\UserControllers
               //Verificar si existe el metodo de  la peticion en la clase/controlador
               if(method_exists($controllerObject , $method)){
                        //invocarlo
                    $controllerObject -> $method($arguments);
                    //count($arguments);
               }else{
                http_response_code(404);
                echo "Funcion no encontrado";
                die(); 
               }

             }//Din construct
         }//fin_clase
    