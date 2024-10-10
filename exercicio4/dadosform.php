<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do Cliente</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Dados do Cliente</h2>
        <?php
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $cpf = $_POST['cpf'];
            date_default_timezone_set('America/Sao_Paulo'); 
            $dataCadastro = date('d/m/Y H:i:s');

            if (empty($nome) || empty($email) || empty($cpf)) {
                echo "<div class='alert alert-danger'>Todos os campos são obrigatórios.</div>";
            } elseif (strlen($cpf) != 11) {
                echo "<div class='alert alert-danger'>O CPF deve conter 11 caracteres.</div>";
            } else {
                echo "<p><strong>Nome:</strong> $nome</p>";
                echo "<p><strong>E-mail:</strong> $email</p>";
                echo "<p><strong>CPF:</strong> $cpf</p>";
                echo "<p><strong>Data de Cadastro:</strong> $dataCadastro</p>";
            }
        ?>
    </div>
</body>
</html>
