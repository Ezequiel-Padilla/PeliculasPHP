<?php

require_once 'pelicula.php';
require_once 'mail.php';

switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        $pelicula = new Pelicula(null,null);
        if (isset($_GET['idPelicula'])) {
            $pelicula->obtenerPelicula($_GET['idPelicula']);
        } else {
            $pelicula->obtenerPeliculas();
        }
        break;
    case 'POST':
        if (isset($_GET['nombre'])&&isset($_GET['img'])) {
            $nombre = $_GET['nombre'];
            $img = $_GET['img'];
            $pelicula = new Pelicula($nombre, $img);
            $pelicula->nuevaPelicula($pelicula);
            $mail = new Mailer("Pelicula", "Se creo la siguiente pelicula ".$nombre.", con su respectiva img: ".$img, "rodrigoalbano@anima.edu.uy");
            $mail->sendMail($mail);
        } else {
            http_response_code(405);
        }
        break;
    default:
        http_response_code(405);
        break;
}

?>