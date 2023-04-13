<?php

    include_once('../../../config.php');

    $sqlDelete = "UPDATE batido_ativo SET nome=NULL WHERE id=1";

    $resultDelete = $conexao->query($sqlDelete);

    for ($i=1; $i < 6; $i++) {

        $sqlDelete = "UPDATE create_juice SET id_fk=NULL, nome=NULL, peso=NULL, valor=NULL WHERE id=$i";

        $resultDelete = $conexao->query($sqlDelete);
    }



    header('Location: ../new.php');
   
?>


