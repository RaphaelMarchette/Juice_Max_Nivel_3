<?php

    if(!empty($_GET['id']) and !empty($_GET['table']))
    {
        include_once('config.php');

        $id = $_GET['id'];

        $table = $_GET['table'];

        $sqlSelect = "SELECT * FROM '$table' WHERE id=1";

        $result = $conexao->query($sqlSelect);

        $sqlInsert = "UPDATE acres_ativo SET id='1',nome='',valor='' WHERE id='1'";
        $result = $conexao->query($sqlInsert);
    }
    header('Location: sistema.php');
   
?>


