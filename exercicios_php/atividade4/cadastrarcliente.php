<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous" defer></script>
</head>
<body>
    <div class="container p-5">
        <h1>Cadastro de Cliente</h1>
        
        <form action="dadosform.php" method="post">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input class="form-control" id="nome" type="text" name="nome" placeholder="Digite seu nome">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input class="form-control" id="email" type="email" name="email" placeholder="Digite seu email">
            </div>
            <div class="mb-3">
                <label for="cpf" class="form-label">CPF</label>
                <input class="form-control" id="cpf" name="cpf" placeholder="Digite seu cpf">
            </div>
            <input class="btn btn-primary" type="submit" value="Cadastrar" />
            </div>
        </form>
    </div>
</body>
</html>