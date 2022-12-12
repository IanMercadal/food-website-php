<?php 

function get_pedidos() {
    require "conexion.php";
    $id_user = $_SESSION["usuario"]["id_user"];

    // Obtenemos pedidos
    $query = "SELECT * from orders WHERE id_user = $id_user";
    $resultado = mysqli_query($db,$query);
    $pedidos = "";
    while ($row = $resultado->fetch_assoc()) {
        $pedidos .= '
            <div class="bill">
                <p style="margin-left: 10px"><b>ID:</b>'.$row["id_orders"].'</p>
                <p><b>Fecha:</b> 07/12/2022 </p>
                <p><b>Food:</b> x'.$row["cantidad"].'</p>
                <p><b>Price:</b> $29.99</p>
                <div class="bill-message"><b>Message:</b> '.$row["mensaje"].'</div>
            </div>
        ';
    }
    return $pedidos;
};

?>