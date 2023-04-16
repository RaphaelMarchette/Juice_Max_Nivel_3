<?php

    if(!empty($_GET['table_Delete']))
    {
        include_once('../../config.php');

        $table_Delete = $_GET['table_Delete'];

        $page = '../Pedir.php';

        $sqlDelete = "DELETE FROM $table_Delete ";
        $resultDelete = $conexao->query($sqlDelete);
    }
    header("location: {$page}");
   
?>