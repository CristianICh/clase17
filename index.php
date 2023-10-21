<?php
//url:index.php?endpoint=saludo&nombre=ISAAC
if ($_REQUEST['endpoint'] == 'saludo') {

    header('Content-type:application/json');
    echo json_encode(array('message' => 'Ingrese a Saludo'))."\n\n";

    // print_r($_GET);
    $data = $_GET;
    echo "¡Hola  " . $data['nombre'] . '!';

    exit();

}
//url:index.php?endpoint=conversion&cantidad=30&moneda_origen=EUR&moneda_destino=USD
//url:index.php?endpoint=conversion&cantidad=30&moneda_origen=USD&moneda_destino=EUR
if ($_REQUEST['endpoint'] == 'conversion') {

    header('Content-type:application/json');
    echo json_encode(array('message' => 'ingrese a Conversion'))."\n\n";

    // print_r($_GET);

    $data = $_GET;
    if ($data['moneda_origen'] == 'USD') {

        // $resultado=$data['cantidad']*0.8417;
        echo $data['cantidad'] . $data['moneda_origen'] . " = " . $data['cantidad'] * 0.8417 . $data['moneda_destino'];
    } else {
        echo $data['cantidad'] . $data['moneda_origen'] . " = " . $data['cantidad'] / 0.8417 . $data['moneda_destino'];
    }

    exit();

}
//url:index.php?endpoint=registro&username=SPK&pass=1234
if ($_REQUEST['endpoint'] == 'registro') {

    header('Content-type:application/json');
    echo json_encode(array('message' => 'ingrese a Registro'))."\n\n";

    // print_r($_GET);

    $data = $_GET;
    echo $data['username'] . " se registro Correctamente";

    exit();

}
//url:index.php?endpoint=login&username=SPK&pass=123
if ($_REQUEST['endpoint'] == 'login') {

    header('Content-type:application/json');
    echo json_encode(array('message' => 'ingrese a Login'))."\n\n";

    // print_r($_GET);

    $data = $_GET;
    if ($data['username'] == 'SPK' && $data['pass'] == 123) {
        echo "Logueo Correcto";
    } else {
        echo "Logueo Incorrecto";
    }

    exit();

}

//url:index.php?endpoint=productos
if ($_REQUEST['endpoint'] == 'productos') {

    header('Content-type:application/json');
    echo json_encode(array('message' => 'ingrese a productos'))."\n\n";
    

    $json = '[
      {
        "nombre": "Laptop HP Pavilion 15",
        "descripcion": "Una laptop elegante y potente con pantalla de 15.6 pulgadas, procesador Intel Core i5, 8 GB de memoria RAM, 256 GB de disco duro SSD y Windows 10 Home.",
        "precio": "$899.99"
      },
      {
        "nombre": "Smartphone Samsung Galaxy S21",
        "descripcion": "Un smartphone de gama alta con pantalla de 6.2 pulgadas, cámara trasera de 64 MP, cámara frontal de 10 MP, batería de 4000 mAh y Android 11.",
        "precio": "$799.99"
      },
      {
        "nombre": "Tablet Apple iPad Air",
        "descripcion": "Una tablet versátil y ligera con pantalla de 10.9 pulgadas, chip A14 Bionic, 64 GB de almacenamiento, cámara trasera de 12 MP, cámara frontal de 7 MP y iPadOS 14.",
        "precio": "$599.99"


  }]';

  $productos=json_decode($json);
//   var_dump($productos);

//   echo $productos[0]->nombre;
  foreach( $productos as $producto){
  echo "nombre: ".$producto->nombre."\ndescripcion: ".$producto->descripcion."\nprecio: $".$producto->precio."\n";

 
 
  }


   exit();
}


 

header('Content-type:application/json');
echo json_encode(array('message' => 'Bienvenido a mi micro API'));