<?php
    if(!empty($_GET['id']))
    {
        include_once('../../../config.php');

        $table = $_GET['table'];

        $id = $_GET['id'];

        $table_2 = $_GET['table_2'];

        $id_2 = $_GET['id_2'];


        $sqlSelect = "SELECT * FROM $table WHERE id='$id'";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $peso = $user_data['peso'];
            }

            $sqlInsert = "UPDATE $table_2 SET id_fk='$id', peso='$peso' WHERE id= $id_2 ";
            $result_2 = $conexao->query($sqlInsert);

            header('Location: ../new.php');
        }
        else
        {
            header('Location: ../new.php');
        }
    }
    else
    {
        header('Location: ../new.php');
    }

?>