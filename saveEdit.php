<?php
    // isset -> serve para saber se uma variável está definida
    include_once('config.php');
    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $valor = $_POST['valor'];

        $sqlInsert = "UPDATE sucos SET id='$id',nome='$nome',valor='$valor'WHERE id=$id";
        $result = $conexao->query($sqlInsert);
        print_r($result);
    }
    header('Location: sistema.php');

?>