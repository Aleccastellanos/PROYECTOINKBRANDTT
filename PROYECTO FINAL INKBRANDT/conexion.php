<?php 
    conexionphp();
    function conexionphp(){
        $server= 'localhost';
        $user= 'root';
        $pass= '';
        $db= 'inkbrandt';
        $conectar = mysqli_connect($server, $user, $pass, $db)or die ("Error en la conexión");
        return $conectar;
    }
?>