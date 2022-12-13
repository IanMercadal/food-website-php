<?php 

if(isset($_POST)) {
    session_start();
    require "./conexion.php";
    $_SESSION['errores'] = [];

    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
    $apellido = isset($_POST['apellido']) ? $_POST['apellido'] : false;
    $correo = isset($_POST['correo']) ? $_POST['correo'] : false;
    $telefono = isset($_POST['telefono']) ? $_POST['telefono'] : false;
    $password = isset($_POST['password']) ? $_POST['password'] : false;
    $repassword = isset($_POST['re-password']) ? $_POST['re-password'] : false;

    // Array de errores
    $errores = array();
    
    // Validar los datos antes de guardarlos en base de datos
    if(!empty($nombre) && !is_numeric($nombre) && !preg_match('/[0-9]/', $nombre)) {
        $nombre_validado = true;
    } else {
        $nombre_validado = false;
        $errores['nombre'] = "El nombre no es válido";
    }

    if(!empty($apellido) && !is_numeric($apellido) && !preg_match('/[0-9]/', $apellido)) {
        $apellido_validado = true;
    } else {
        $apellido_validado = false;
        $errores['apellido'] = "El apellido no es válido";
    }

    if(!empty($telefono) && preg_match('/^[0-9]{9}+$/', $telefono)) {
        $telefono_validado = true;
    } else {
        $telefono_validado = false;
        $errores['telefono'] = "El teléfono no es válido";
    }

    if(!empty($correo) && filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        $correo_validado = true;
    } else {
        $correo_validado = false;
        $errores['correo'] = "El correo no es válido";
    }

    if(!empty($password) && $password === $repassword) {
        $password_validado = true;
    } else {
        $password_validado = false;
        $errores['password'] = "La password está vacía o no coincide";
    }

    $guardar_usuario = false;

    if(count($errores) == 0) {
        $guardar_usuario = true;
        $password_segura = password_hash($password,PASSWORD_BCRYPT,['cost' => 4]);
        $sql = "INSERT INTO users(nombre,apellido,telefono,correo,password,fecha_inscripcion) VALUES ('$nombre','$apellido','$telefono','$correo','$password_segura','12/12/2022')";
        $guardar = mysqli_query($db, $sql);
        
        var_dump($sql);
        // Mostrar página de éxito o error
        if($guardar) {
            $_SESSION['completado'] = "El registro se ha completado con éxito";
            header("Location: /login");
        } else {
            $_SESSION['errores']['general'] = "Fallo al guardar el usuario!!!";
        }
    } else {
        $_SESSION['errores'] = $errores;
        header("Location: /register");
    }
} 

?>