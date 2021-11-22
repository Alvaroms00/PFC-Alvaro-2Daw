<?php
include_once '../../php/db.php';

class Productos extends DB
{

    function __construct()
    {
        parent::__construct();
    }

    public function get($id)
    {
        $query = $this->connect()->prepare('SELECT * FROM articulos WHERE id = :id');
        $query->execute(['id' => $id]);

        $row = $query->fetch();

        return [
            'id'        => $row['id'],
            'nombre'    => $row['nombre'],
            'marca'    => $row['marca'], 
            'familia' => $row['familia'],
            'precio'    => $row['precio'],
            'imagen' => $row['imagen']
            
        ];
    }

    public function getItemsByCategory($familia)
    {
        $query = $this->connect()->prepare('SELECT * FROM articulos WHERE familia = :fam ');
        $query->execute(['fam' => $familia]);
        $items = [];

        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
            $item = [
                'id'        => $row['id'],
                'referencia'=> $row['referencia'],
                'nombre'    => $row['nombre'],
                'caracteristica' => $row['caracteristica'],
                'marca'    => $row['marca'],
                'modelo' => $row['modelo'],
                'precio'    => $row['precio'],
                'familia' => $row['familia'],
                'enlace' => $row['enlace'],
                'imagen' => $row['imagen']
            ];
            array_push($items, $item);
        }
        return $items;
    }
}
