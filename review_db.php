<?php

if(isset($_POST) && !empty($_POST)) {

    session_start();
    require "./conexion.php";
    
    // Array de errores
    $errores = array();
    $_SESSION['errores'] = [];

    // Valores a insertar
    $id_user = $_SESSION["usuario"]["id_user"];
    $descripcion = $_POST["descripcion"];
    $valoracion = $_POST["valoracion"];

    /* 
    - Comprobaciones
        1. Que todo esté rellenado y sea del tipo que corresponda
        2. Que el usuario no tenga más de una reseña
        3. Que la inserción en bd ha ido bien
    */
    

    $query = "insert into reviews(id_user, descripcion,valoracion) values ($id_user,'$descripcion',$valoracion)";
    $resultado = mysqli_query($db,$query);
    if($resultado) {
        header("Location: /exit");
    }
}

?>