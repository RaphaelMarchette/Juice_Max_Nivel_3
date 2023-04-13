<?php

    if(!empty($_GET['id']))
    {
        include_once('../../../config.php');

        $id = $_GET['id'];

        $table = $_GET['table'];
        
        $sqlDelete = "UPDATE $table SET id_fk='', nome='', valor='' WHERE id= 1 ";

        $resultDelete = $conexao->query($sqlDelete);

    }
    header('Location: ../new.php');
   
?>
