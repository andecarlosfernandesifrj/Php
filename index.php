<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <h1>Página Inicial</h1>
     <?php 
     $nome = $_POST["nome"]; 
     $senha = $_POST["senha"];
     
     if($nome=="Carlos" and $senha=="123")
        header("Location: "."intermediario.php"); 
     elseif($nome=="Admin" and $senha=="adm123")
        header("Location: "."administrador.php");
     else
        header("Location: "."comum.php");
     ?>
</body>
</html>