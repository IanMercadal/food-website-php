<?php
require "./conexion.php";

function getMenu($limite) {
    global $db;
    if ($limite === 0) {
        $query = "select * from menu";
    } else {
        $query = "select * from menu limit $limite";
    }
    
    $resultado = mysqli_query($db,$query);
    $menu = "";

    while ($row = $resultado->fetch_assoc()) {
        $menu .= 
        '<div class="box">
            <div class="image">
                <img src="images/'.$row["foto"].'" alt="">
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>'.$row["nombre"].'</h3>
                <p>'.$row["descripcion"].'</p>
                <a href="#" class="btn">add to cart</a>
                <span class="price">'.$row["precio"].'€</span>
            </div>
        </div>';
    }
    return $menu;
}

?>