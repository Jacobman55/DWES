<?php
	$db = mysqli_connect('localhost','root','1234','mysitedb') or die('Fail');
?>
<html>
    <body>
        <?php
            $usuarios=$_POST['usuario'];
            $apellido=$_POST['apellido'];
            $email=$_POST['email'];
            $pass1=$_POST['password1'];
            $pass2=$_POST['password2'];
            if($pass2!=$pass1){
                die('Las contraseñas no coinciden');
            }
            echo '<h1> primer echo </h1>';
            $password=password_hash($pass1, PASSWORD_DEFAULT);
            echo '<h1> segundo echo </h1>';
            $emailq='SELECT email FROM tUsuarios';
            $resultado=mysqli_query($db,$emailq) or die('Query error');
            while($row==mysqli_fetch_array($resultado)){
                if($email==$row[0]){
                    die('El correo ya esta registrado');
                }
            }
            echo '<h1> tercer echo </h1>';
            $comprobacion=$db->prepare("INSERT INTO tUsuarios(nombre,apellidos,email,contraseña) VALUES (?,?,?,?)");
            $comprobacion->bind_param("ssss",$usuarios,$apellido,$email,$password);
            $comprobacion->execute();
            echo '<h1>El usuario ha quedado registrado</h1>';
            echo '<a href="/register.html">Volver</a>';
            $comprobacion->close();
            mysqli_close($db);
        ?>
    </body>
</html>