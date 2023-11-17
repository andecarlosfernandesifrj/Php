<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 3</title>
    <style>
        body{
            box-sizing: border-box;
            margin:20px;          
        }
        form{
            background-color: rgba(80,80,80,70%);
            padding: 10px;
            margin: 5px;
            width: 80%;
        }
        label,input[type="text"],input[type="password"]{
            /* background-color: rgba(100,100,100,30%); */
            padding: 7px;
            margin: 3px; 
            width: 90%;
        }
    </style>
</head>
<body>
    <h1>PHP</h1>
    <h2>Exemplo 3</h2>
    <h3>Utilizando formulários</h3>
    <form action="index.php" method="POST">
        <label for="nome">Nome:</label> 
        <input id="nome" type="text" name="nome"> <br>
        <label for="senha">Senha:</label> 
        <input id="senha" type="password" name="senha"> <br>
        <input type="submit">
    </form>
</body>
</html>