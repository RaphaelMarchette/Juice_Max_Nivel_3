<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        }
        div{
            background-color: rgba(0, 0, 0, 0.6);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 80px;
            border-radius: 15px;
            color: #fff;
        }
        input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }
        .inputSubmit{
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            
        }
        .inputSubmit:hover{
            background-color: deepskyblue;
            cursor: pointer;
        }

        #id_voltar{
            text-decoration: none;
            color: white;
            border: 3px solid dodgerblue;
            border-radius: 10px;
            padding: 10px;
            position:absolute;
            bottom:2rem;
            right:2rem;
            width: 10rem;
            font-size: 1rem;
            text-align: center;
        }

        #id_voltar:hover{
            background-color: dodgerblue;
        }

    </style>
</head>
<body>
    <a href="../home.php" id="id_voltar">Voltar</a>
    <div>
        <h1>Login</h1>
        <form action="testLogin.php" method="POST">
            <input type="text" name="email" placeholder="Email">
            <br><br>
            <input type="password" name="senha" placeholder="Senha">
            <br><br>
            <input class="inputSubmit" type="submit" name="submit" value="Enviar">
        </form>
    </div>
</body>

<script>
    document.addEventListener('keydown', function(e) {
        if(e.keyCode == 17){  //  Tecla Ctrl
        document.getElementById("id_voltar").click();
        }
    });
</script>

</html>