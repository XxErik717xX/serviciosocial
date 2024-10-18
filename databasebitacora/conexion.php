<<?php
$host = '127.0.0.1'; //Pon aqui tu host//
$dbname = 'databasebitacora'; //Pon aqui el nombre de la base de datos//
$username = 'root';//Pon aqui tu usuario//
$password = ''; //Pon aqui tu contraseña//

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch(PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>