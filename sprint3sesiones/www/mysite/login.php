<?php
	$db = mysqli_connect('localhost','root','1234','mysitedb') or die('Fail');
    $email = $_POST['email'];
    $password = $_POST['password1'];
    $comprobacionmail=$db->prepare("SELECT id, contraseña FROM tUsuarios WHERE email =?");
    $comprobacionmail->bind_param("s",$email);
    $comprobacionmail->execute();
    $resultado=$comprobacionmail->get_result();
    if (mysqli_num_rows($resultado) > 0) {
        $only_row = mysqli_fetch_array($resultado);
        $verificado=password_verify($password, $only_row[1]);
        if ($verificado){
            session_start();
            $_SESSION['user_id'] = $only_row[0];
            header('Location: main.php');
        } else {
            echo '<p>Contraseña incorrecta</p>';
        }
    } else {
        echo '<p>Usuario no encontrado con ese email</p>';
    }
    $comprobacionmail->close();
    mysqli_close($db);
?>