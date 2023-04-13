<?php

    include_once('config.php');

    $sqlTotal = "SELECT SUM(valor) FROM marcado";

    $result_6 = $conexao->query($sqlTotal);

?>