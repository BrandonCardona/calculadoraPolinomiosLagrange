<?php

class Punto{

    // Atributos
    private $db;
    private $puntos;

    // Contructor
    public function __construct()
    {
        $this->db = Conexion::conectar();
        $this->puntos = [];
    }

    // Métodos
    public function listar()
    {
        $sql = "SELECT x,y
                FROM punto";
        // Ejecución de la consulta
        $resultado = $this->db->query($sql);

        // Si falla la consulta
        if(!$resultado)
        {
            // ¡Oh, no! La consulta falló :(
            echo "Lo sentimos, este sitio está experimentando problemas.";
        }

        // Leer cada fila del resultado
        while($row = $resultado->fetch_assoc())
        {
            // Agregar la fila al final del arreglo proyectos
            $this->puntos[] = $row;
        }

        return $this->puntos;
    }

    public function insert($x, $y) 
    {
        $sql = "INSERT INTO punto(x, y)
                VALUES($x, $y)";
        
        $this->db->query($sql);
    }

    // Eliminar todos los registros
    public function delete(){
        
        $sql = "DELETE FROM punto";
        $resultado = $this->db->query($sql);
    }

}
?>