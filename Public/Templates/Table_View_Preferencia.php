<?php
    $table_Delete = 'view_preferencia';
?>

<?php
    include_once('../config.php');

    $sql = "SELECT * FROM view_preferencia WHERE id=1";

    $result = $conexao->query($sql);

?>


<table class="table" id="table_view_preferencia">
    <thead>
        <tr>
            <th class="title_table" >Preferencia à ser Adicionado</th>
        </tr>
        <tr>
            <th class="id"   >Id   </th>
            <th class="nome"   >Nome   </th>
            <th class="preenche"   >   </th>
            <th class="botao"   >...</th>
        </tr>
    </thead>
    <tbody>
        <?php
            while($user_data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td class='id'>".$user_data['id_fk']."</td>";
                    echo "<td class='nome'>".$user_data['nome']."</td>";
                    echo    "<td class='preenche'></td>";    
                    echo "<td class='botao'>
                        <a href='tools/CRUD_Delete_Pedir.php?table_Delete=$table_Delete&id=$user_data[id]' title='Deletar' id='btn-danger'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                                <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                            </svg>
                        </a>
                        </td>";
                    echo "</tr>";
                    }
            ?>
    </tbody>
</table>
