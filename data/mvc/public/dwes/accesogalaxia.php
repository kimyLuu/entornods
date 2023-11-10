<?php   
     namespace Dwes;

    //estos son ficheros
    require "galaxia.php";
    require "galaxiaenana/galaxiaenana.php";


    

    echo "<h2>Acceso sin cualificar</h2>"; //clases del mismo paquete
//una ve importado los ficherors pueedees usar sus funciones
    observar("Via lactea");
//accediendo a las constante
    echo "<br>El radio es ". RADIO;

    //instanciando a las clase
    $_gl= new galaxia();
    //accediendo a los metodos de la clase
    galaxia::muerte();

    echo "<h2> Acceso Cualificado</h2>";
    //Se llama al fichero galaxia enana 
    Galaxiaenana\observar("Los tres pilares");
    echo "<br>El radio es ".Galaxiaenana\RADIO;
    $sql = new Galaxiaenana\galaxia();
    Galaxiaenana\galaxia::muerte();

    echo "<h2> Acceso  Totalmente Cualificado</h2>";
    //Recorre todala ruta desde el comienzo de los namespace
    \Dwes\Galaxiaenana\observar("NGC 5709");
    echo "<br>El radio es ". \Dwes\Galaxiaenana\RADIO;
    $sql = new \Dwes\Galaxiaenana\galaxia();
    \Dwes\Galaxiaenana\galaxia::muerte();

    //Importamos la clase para evitar llamar a cada rato El new \Dwes\Galaxiaenana\galaxia();

    use function \Dwes\Galaxiaenana\observar;
    use const \Dwes\Galaxiaenana\RADIO;

    //una vez indicado que es use \Dwes\Galaxiaenana\galaxia();
    //solo se escribe una vez y puedes usar asi
    observar("otrta galaxia");
    echo "<br>El radio es ". RADIO;

    echo "<h2>Apodar /alias namespace</h2>";
    
    use function \Dwes\Galaxiaenana\observar as mirar;
mirar ("cometa halley");

    //Paa ver en que namespace me encuentro
    echo "El orden de la namespace ACTUAL" .__NAMESPACE__;
    echo "<br>";

    //Namespace Gobal
    echo "<h2>NAMESPACE  GOBAL </h2>";

    //Las funciones glases ,.... que no se denomina en un namespace 
    
    // la barra es para indicar que tiime es para que te saque la funcion de time de la funcion de php y no la funcion del NAmespace de la clase
    echo \time();
    echo "</hr>";
    echo "<br> Time de la galaxia". time();
