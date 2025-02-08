<?php
function obtenerServicios() : array {
   try {
    //Importar una conexión

        require 'database.php';

    //Escribir el código SQL

        $sql = "SELECT * FROM servicios";

    //consultar base de datos

        $consulta = mysqli_query($db, $sql);

        //Arreglo vacio

        $servicios = [];
        $i = 0;

    //Obtener resultados
    while( $row = mysqli_fetch_assoc( $consulta )){
               $servicios[$i]['id']=$row['id'];
               $servicios[$i]['nombre']=$row['nombre'];
               $servicios[$i]['precio']=$row['precio'];

               $i++;
    }
                return $servicios;
                // echo "<pre>";
                // // var_dump(json_encode($servicios));
                // var_dump($servicios);
                // echo "</pre>";

   } catch (\Throwable $th) {
    //throw $th;
    var_dump($th);
   }
}

obtenerServicios();