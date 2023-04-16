<?php
    if(!empty($_GET['table_Delete']))
    {
        include_once('../../config.php');

        $table_Delete = $_GET['table_Delete'];

        $id = $_GET['id'];

        $page = $_GET['page'];

        $sqlDelete = "DELETE FROM $table_Delete WHERE id=$id";
        $resultDelete = $conexao->query($sqlDelete);
    }
    header("location: {$page}");
   
?>