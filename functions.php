<?php

// Archivo con funciones generales
function getFoodImage($id_food) {
    require "conexion.php";
    $query = "SELECT foto from dishes WHERE id_dishes = '$id_food'";
    $resultado = mysqli_query($db,$query);
    $row = $resultado->fetch_assoc();
    $foto = "assets/images/dishes/" . $row["foto"];
    return $foto;
}
function getFoodName($id_food) {
    require "conexion.php";
    $query = "SELECT nombre from dishes WHERE id_dishes = '$id_food'";
    $resultado = mysqli_query($db,$query);
    $row = $resultado->fetch_assoc();
    return $row["nombre"];
}
function getFoodPrice($cantidad, $id_food) {
    require "conexion.php";
    $query = "SELECT precio from dishes WHERE id_dishes = '$id_food'";
    $resultado = mysqli_query($db,$query);
    $row = $resultado->fetch_assoc();
    $precio = floatval($row["precio"]);
    $precio_final = $precio * $cantidad;
    return $precio_final;
}
function corregirFecha($fecha) {
    $fecha_corregida = str_replace("T", " ", $fecha);
    return $fecha_corregida;
}
?>