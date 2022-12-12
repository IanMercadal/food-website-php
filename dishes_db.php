<?php

function getDishes($limite, $filtro = "all") {
    require "conexion.php";
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
            <form action="#" method="post">
                <button class="fas fa-heart"><input type="hidden" name="dish" value="'.$row["id_dishes"].'"></input></button>
            </form>
            <a href="#" class="fas fa-eye"></a>
            <img src="assets/images/dishes/'.$row["foto"].'" alt="">
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
// Refactorizar el if que comprueba el usuario sessions
function wantedDish() {
    require "conexion.php";
    if(isset($_SESSION["usuario"])) {
        $id_user = $_SESSION["usuario"]["id_user"];
        $plato = $_POST["dish"];
        if(isset($_SESSION["usuario"])) {
            $checkExist = "select * from wishlist where id_user = $id_user";
            $resultado = mysqli_query($db,$checkExist);

            $user_wishlist = array();
            while ($row = $resultado->fetch_assoc()) {
                $id_dish_db = intval($row["id_dishes"]);
                array_push($user_wishlist, $id_dish_db);
            }
            if(!in_array($plato,$user_wishlist)) {
                $query = "insert into wishlist(id_user,id_dishes) values ($id_user,$plato)";
                mysqli_query($db,$query);
                return ($_SESSION["usuario"]);
            } else {
                echo "El plato ya está en la wishlist";
            }
        }
    } else {
        header("Location: login.php"); 
    }
}
function getUserDishes() {
    require "conexion.php";
    if(isset($_SESSION["usuario"])) {
        $id_user = $_SESSION["usuario"]["id_user"];
        $query = "select * from wishlist where id_user = $id_user";
        $resultado = mysqli_query($db,$query);
        $dishes = "";
        while ($row = $resultado->fetch_assoc()) {
            $id_plato = $row["id_dishes"];
            $obtener_plato = "select * from dishes where id_dishes = $id_plato";
            $resultado_platos = mysqli_query($db,$obtener_plato);
            $resultado_plato = $resultado_platos->fetch_assoc();
            $dishes .= 
            '<div class="box">
                <form action="#" method="post">
                    <button class="fas fa-heart"><input type="hidden" name="dish" value="'.$resultado_plato["id_dishes"].'"></input></button>
                </form>
                <a href="#" class="fas fa-eye"></a>
                <img src="assets/images/dishes/'.$resultado_plato["foto"].'" alt="">
                <h3>'.$resultado_plato["nombre"].'</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>'.$resultado_plato["precio"].'€</span>
                <a href="#" class="btn">add to cart</a>
            </div>';
        }
        return $dishes;
    } else {
        header("Location: login.php"); 
    }
}

?>