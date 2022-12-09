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
            <form action="#" method="post">
                <button class="fas fa-heart"><input type="hidden" name="dish" value="'.$row["id_dishes"].'"></input></button>
            </form>
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
function wantedDish() {
    global $db;
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

?>