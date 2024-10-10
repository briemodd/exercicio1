<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Cadastro de Cliente</h2>
        <form action="" method="post">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="cpf">CPF:</label>
                <input type="text" class="form-control" id="cpf" name="cpf" required>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>

        <?php
        date_default_timezone_set('America/Sao_Paulo');

        if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['cpf'])) {
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $cpf = $_POST['cpf'];
            $dataCadastro = date('d/m/Y H:i:s');

            if (empty($nome) || empty($email) || empty($cpf)) {
                echo "<div class='alert alert-danger mt-3'>Todos os campos são obrigatórios.</div>";
            } elseif (strlen($cpf) != 11) {
                echo "<div class='alert alert-danger mt-3'>O CPF deve conter 11 caracteres.</div>";
            } else {
                echo "<div class='mt-3'>";
                echo "<p><strong>Nome:</strong> $nome</p>";
                echo "<p><strong>E-mail:</strong> $email</p>";
                echo "<p><strong>CPF:</strong> $cpf</p>";
                echo "<p><strong>Data de Cadastro:</strong> $dataCadastro</p>";
                echo "</div>";
            }
        }
        ?>
    </div>
</body>
</html>
