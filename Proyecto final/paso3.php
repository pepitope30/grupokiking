<?php
require_once 'model.php';

class Controlador {
    private $modelo;

    public function __construct() {
        $this->modelo = new Modelo();
    }

    public function mostrarDatos() {
        $datos = $this->modelo->obtenerDatos();
        include 'view.php';
    }

    public function crearRegistro() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $columna1 = $_POST['columna1'];
            $columna2 = $_POST['columna2'];
            $this->modelo->crearRegistro($columna1, $columna2);
        }
        header('Location: index.php');
    }

    public function actualizarRegistro() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $columna1 = $_POST['columna1'];
            $columna2 = $_POST['columna2'];
            $this->modelo->actualizarRegistro($id, $columna1, $columna2);
        }
        header('Location: index.php');
    }

    public function eliminarRegistro() {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $this->modelo->eliminarRegistro($id);
        }
        header('Location: index.php');
    }
}
?>
