<?php
require "./conexion.php";

function getDishes($limite, $filtro = "all") {
    global $db;
    if ($limite === 0) {
        $query = "select * from dishes";
    } else {
        $query = "select * from dishes order by $filtro desc limit $limite";
    }
    
    $resultado = mysqli_query($db,$query);
    $dishes = "";

    while ($row = $resultado->fetch_assoc()) {
        $dishes .= 
        '<div class="box">
            <form action="#" method="post"><button value="'.$row["nombre"].'" class="fas fa-heart"></button></form>
            <a href="#" class="fas fa-eye"></a>
            <img src="images/'.$row["foto"].'" alt="">
            <h3>'.$row["nombre"].'</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <span>'.$row["precio"].'€</span>
            <a href="#" class="btn">add to cart</a>
        </div>';
    }
    return $dishes;
}

?>