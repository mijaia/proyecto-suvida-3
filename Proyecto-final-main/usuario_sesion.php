<?php 

    session_start();

    include 'conexion.php';

    $correo = $_POST ['correo'];
    $contraseña = $_POST ['contraseña'];

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'
    and contraseña = '$contraseña'");

    if(mysqli_num_rows($validar_login) > 0){
        $_SESSION['nombre'] = $correo;
        header("location: ../floreria/index.php");
        exit;
    }else{
        echo '
            <script>
                alert("Usuario no existe, por favor verifique los 
                datos introducidos");
                window.location = "../login.php";
            </script>
        ';
        exit;
    }

?>