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
?>