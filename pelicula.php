<?php

require_once('db.php');

class Pelicula extends DB{
    private $nombre;
    private $img;

    public function __construct($nombre, $img)
    {
    $this->nombre = $nombre;
    $this->img = $img;
    }
    
    public function obtenerPeliculas(){
        $query = $this->connect()->query('SELECT * FROM pelicula');
        $query->execute();
        $query->setFetchMode(PDO::FETCH_ASSOC);
        header('HTTP/1.1 200 OK');
        echo json_encode( $query-> fetchAll() );
        return $query;
    }

    public function obtenerPelicula($id){
        $query = $this->connect()->prepare('SELECT * FROM pelicula WHERE idPelicula = :id');
        $query->execute(['id' => $id]);
        header('HTTP/1.1 200 OK');
        echo json_encode( $query->fetch(PDO::FETCH_ASSOC) );
        return $query;
    }

    public function nuevaPelicula($pelicula){
        $query = $this->connect()->prepare('INSERT INTO pelicula (nombre, img) VALUES (:nombre, :img)');
        $query->execute(['nombre' => $this->nombre, 'img' => $this->img]);
        header('HTTP/1.1 200 OK');
        echo json_encode( $query->fetch(PDO::FETCH_ASSOC) );
        return $query;
    }
}

?>