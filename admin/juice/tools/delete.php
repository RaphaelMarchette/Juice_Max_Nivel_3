<?php

    if(!empty($_GET['id']))
    {
        include_once('../../../config.php');

        $table = $_GET['table'];

        $id = $_GET['id'];

        $sqlDelete = "DELETE FROM $table WHERE id=$id";
        $resultDelete = $conexao->query($sqlDelete);
    }
    header('Location: ../new.php');
   
?>