<?php 
require "./conexion.php";
function get_pedidos() {
    global $db;
    $id_user = $_SESSION["usuario"]["id_user"];

    // Obtenemos pedidos
    $query = "SELECT * from orders WHERE id_user = $id_user";
    $resultado = mysqli_query($db,$query);
    $pedidos = "";
    while ($row = $resultado->fetch_assoc()) {
        $pedidos .= '
            <div class="bill">
                <ul>
                    <li><b>ID:</b>'.$row["id_orders"].'</li> <li><b>Fecha:</b> 07/12/2022</li> <li><b>Food:</b> x'.$row["cantidad"].'</li> <li><b>Price:</b> $29.99</li> <li class="bill-message"><b>Message:</b> '.$row["mensaje"].'</li>
                </ul>
            </div>
        ';
    }
    return $pedidos;
};

?>