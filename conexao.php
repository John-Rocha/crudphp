<?php

    $server = "localhost";
    $user = "root";
    $pass = "JOHN@131087";
    $bd = "empresa";

    if ($connection = mysqli_connect($server, $user, $pass, $bd)) {
        //echo "Conectado";
    } else {
        echo "Não conectado";
    }

    function mensagem($texto, $tipo)
    {
        echo
        "<div class='alert alert-$tipo' role='alert'>
            $texto
        </div>";
    }

    function mostraData($data)
    {
        $d = explode("-", $data);
        $escreve = $d[2] ."/" .$d[1] ."/" .$d[0];
        return $escreve;
    }
?>