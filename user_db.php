<?php 

if(isset($_POST)) {
    session_start();
    require "./conexion.php";
    $_SESSION['errores'] = [];

    // Array de errores
    $errores = array();

    if(!empty($_POST["email"]) && !empty($_POST["password"])) {

        // Creamos variables de los inputs
        $correo = $_POST['email'];
        $password = $_POST['password'];

        // Obtenemos usuario
        $query = "SELECT * from users WHERE correo = '$correo'";
        $resultado = mysqli_query($db,$query);
        $usuario = $resultado->fetch_assoc();

        if($usuario["correo"] !== $correo) {
            $errores["correo"] = "El email no existe";
        }
        
        // Consultamos contraseñas
        $query = "SELECT password from users WHERE correo = '$correo'";
        $resultado = mysqli_query($db,$query);
        $password_db = $resultado->fetch_assoc();

        if(!password_verify($password, $password_db["password"])) {
            $errores["password"] = "La contraseña no coincide";
        }

        $token = hash('sha256', uniqid());
        $sql = "UPDATE users set token = '$token' where correo = '$correo'";
        $guardar = mysqli_query($db, $sql);

        if($guardar) {
            $usuario["token"] = $token;
        } else {
            $errores["token"] = "Error al autenticar";
        }
        
        if(empty($errores)) {
            $_SESSION["usuario"] = $usuario;
            header("Location: /user");
        } else {
            $_SESSION['errores'] = $errores;
            header("Location: /login");
        }
        
    } else {
        $errores["vacios"] = "El email o la contraseña están vacíos";
        $_SESSION['errores'] = $errores;
        header("Location: /login");
    }
} 

?>