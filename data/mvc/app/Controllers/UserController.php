<?php

//Ejercicio del Namespace
namespace App\Controllers;

//require "../app/models/User.php";
 use App\Models\User;
 use Dompdf\Dompdf;


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
/*Las vistas llama al controlador  funcion resetea solo un usuario*/
         function resetpassword($args) {
            $id = (int)$args[0];// Obtén todos los usuarios de la base de datos
            $user = User::find($id);//busca la infornacion deun unico usuario
            $user->setPassword("passW0rd"); //Pasword por defecto 
            header('Location:/user');
            // Puedes redirigir a la página de usuarios después de restablecer todas las contraseñas
            
        }
        public function resetAllPasswords() {
            $users = User::all(); // Obtén todos los usuarios de la base de datos
            //Mostrar que tiene el $user
           // var_dump($users);
            //die();
            foreach ($users as $user) {
                    $user->setPassword("secret");
            }
                
            
            header('Location:/user');
        }
        /*Pasaremos en la  */

        function toPdf($args){
            $id = (int)$args[0];
                //componer el HTML
              ob_start();  //Un buffer para incluir todo el texto y con e clean cierro el buffer
              $ruta="http://mvc.local/user/show/" .$id;
              echo file_get_contents($ruta);  //Recojo el contenido
              
              $html= ob_get_clean(); //Cierro el buffer y lo asigno a una variable
              $dompdf = new Dompdf(); //creo ell objeto de la clase Dompdf
              
              $dompdf->loadHtml($html);
              $dompdf->setPaper('A4', 'portrait');
              //Renderizar el pd
              $dompdf->render();
           $dompdf->stream("DetalleUsuario.pdf", ["Attachment" =>false]);
           



        }
        
        
        
    }//fin class

    //echo "<br>Mostrando contenidos con la Dwes";
    //Paa usar nuestra clase orimero aasignamos una variable


    /*Primero probar el UserController mvc.local/user/show
    Creat un LoguinController, HomeController, clientcontroller
    de forma similar al user controller */