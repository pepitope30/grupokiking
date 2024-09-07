<?php
require_once 'controller.php';

$controlador = new Controlador();
$accion = isset($_GET['accion']) ? $_GET['accion'] : 'mostrar';

switch ($accion) {
    case 'crear':
        $controlador->crearRegistro();
        break;
    case 'actualizar':
        $controlador->actualizarRegistro();
        break;
    case 'eliminar':
        $controlador->eliminarRegistro();
        break;
    case 'mostrar':
    default:
        $controlador->mostrarDatos();
        break;
}
?>
