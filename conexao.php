<?php 

$servidor = "localhost";
$banco = "crud2";
$user = "root";
$password = "";

// try {
    $pdo = new PDO("mysql:host=$servidor;dbname=$banco", $user, $password);
//     echo "Conexão com o banco de dados bem sucedida!";
// } catch (PDOException $e) {
//     echo "Erro ao conectar. " . $e->getMessage();
// }