<?php

class Conexion {

    public static function conectar()
    {
        // Cadena de conexión
        $conexion = new mysqli("localhost", "root", "","polinomiol");

        if(!$conexion) 
        {
            die("Conexión fallida: " . mysqli_connect_error());
        }

        return $conexion;
    }

}

?>