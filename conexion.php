<?php
require __DIR__ . './vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$db = mysqli_connect($_ENV["HOST"], $_ENV["DATABASE_USER"], $_ENV["DATABASE_PASSWORD"], $_ENV["DATABASE"]);
if (!$db) {
    echo "Error: No se pudo conectar a MySQL.";
    echo "errno de depuración: " . mysqli_connect_errno();
    echo "error de depuración: " . mysqli_connect_error();
    exit;
}
?>