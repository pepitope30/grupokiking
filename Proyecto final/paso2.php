<?php
class Modelo {
    private $pdo;

    public function __construct() {
        $dsn = 'mysql:host=localhost;dbname=mi_base_de_datos';
        $usuario = 'mi_usuario';
        $contraseña = 'mi_contraseña';
        $this->pdo = new PDO($dsn, $usuario, $contraseña);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function obtenerDatos() {
        $sql = 'SELECT * FROM mi_tabla';
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function crearRegistro($columna1, $columna2) {
        $sql = 'INSERT INTO mi_tabla (columna1, columna2) VALUES (:columna1, :columna2)';
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute(['columna1' => $columna1, 'columna2' => $columna2]);
    }

    public function actualizarRegistro($id, $columna1, $columna2) {
        $sql = 'UPDATE mi_tabla SET columna1 = :columna1, columna2 = :columna2 WHERE id = :id';
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute(['id' => $id, 'columna1' => $columna1, 'columna2' => $columna2]);
    }

    public function eliminarRegistro($id) {
        $sql = 'DELETE FROM mi_tabla WHERE id = :id';
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute(['id' => $id]);
    }
}
?>
