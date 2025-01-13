<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous" defer></script>
    <link rel="stylesheet" href="dadosform.css">
  
</head>
<body>
    <div class="container p-5">
    <?php
 	
        $nome = trim($_POST['nome']);
        $email = trim($_POST['email']);
        $cpf = trim($_POST['cpf']);
        if (strlen($nome)==0 || strlen($email)==0 ||  strlen($cpf)==0) {          

            echo "<h1 class='display-3'>Todos os dados devem ser informados!</h1>"; 

        }else{
            if (strlen( $cpf)== 11) {
                echo "<h1 class='display-3'>Dados Cadastrados!</h1>"; 
                echo  "<legend  class='w-auto'>Dados do cliente</legend>";
                echo "<fieldset class='border p-2  bg-light'>";
                echo "<h6 class='display-3'>Nome: $nome</h1>";
                echo "<h6 class='display-3'>Email: $email</h1>";
                echo "<h6 class='display-3'>CPF: $cpf</h1>";
                echo "</fieldset'>";
                
                echo "Horário do cadastro: ". date( 'd/m/Y H:i:s', $_SERVER['REQUEST_TIME']);
            }else{
                echo "<h1 class='display-3'>Informe CPF válido!</h1>"; 
                
            }
        }
    ?>
    <div>
</body>
</html>