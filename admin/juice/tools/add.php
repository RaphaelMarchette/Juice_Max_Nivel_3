<?php
    if(!empty($_GET['id']))
    {
        include_once('../../../config.php');

        $table = $_GET['table'];

        $id = $_GET['id'];

        $table_3 = $_GET['table_3'];

        $id_3 = $_GET['id_3'];


        $sqlSelect = "SELECT * FROM $table WHERE id='$id'";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $id_fk = $user_data['id'];
                $nome_fk = $user_data['nome'];
            }

            $sqlInsert = "UPDATE $table_3 SET id_fk='$id_fk', nome='$nome_fk' WHERE id='$id_3' ";
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
