<?php 
    # DESACTIVA LOS ERRORES QUE PUEDEN PRODUCIR
    error_reporting(0); 

    # VARIABLES DEL FORMULARIO
    $nombre = $_POST['txtNombre'];
    $apellido= $_POST['txtApellido'];
    $telefono = $_POST['txtTelefono']; 
    $correo= $_POST['txtCorreo']; 
    $mensaje=$_POST['txtMensaje']; 

    #! CABEZERA MENSAJE
    $header = 'From: ' . $mail ."\r\n"; 

    #! CUERPO MENSAJE
    $body = " " ."\r\n";
    $body .= "Mensaje : " .$mensaje ."\r\n";
    $body .= "" ."\r\n";
    $body .= "Mensaje enviado por:  " ."\r\n";
    $body .= "==========================================" ."\r\n";
    $body .= "Nombre: " .$nombre ." " .$apellido ."\r\n";
    $body .= "Numero de Contacto: " .$telefono ."\r\n";
    $body .= "Correo Electronico: " .$correo ."\r\n";
    $body .= "==========================================" ."\r\n";

    # CAPTURA LA FECHA Y HORA DEL ENVIO
    $body .= "Enviado el " . date('d/m/Y', time()); 

    # CORREO QUE RECIBE EL MENSAJE
    $para = 'mjaral@enmarcacionesarendpro.cl'; 

    # ASUNTO DEL CORREO
    $asunto = 'Contacto de ' .$nombre ."\r\n"; 

    # ENVIA CORREO ELECTRONICO
    mail($para, $asunto, utf8_decode($body), $header); 

    #RETORNA TRUE O FALSE DEPENDIENDO SI SE ENVIO O NO EL FORMULARIO (TRUE - FALSE)
    $resultado=mail($para, $asunto, utf8_decode($body), $header); 

    #VALIDA SI MENSAJE FUE ENVIADO Y RETORNA UN MENSAJE
    if($resultado==true){
        header("Location: ../contactanos.php");
        echo 'Se envio mensaje correctamente';
        exit();
    }else{
        echo 'No se pudo enviar mensaje';
        header("location: ../contactanos.php");
        exit();
    }

?>