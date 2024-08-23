<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/units.css">
    <link rel="stylesheet" href="css/work-with.css">
    <script src="js/script.js" defer></script>
    <script src="js/units.js" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Unidade | São José</title>
</head>
<body>
    <?php require 'partials/header.php' ?>
    <main>
        <h1>Formulário para trabalhar conosco</h1>
        <form action="partials/send-email.php" method="post" enctype="multipart/form-data">
        <label for="nome">Nome:</label>
        <input placeholder="Seu nome" type="text" id="nome" name="nome" required><br><br>

        <label for="email">E-mail:</label>
        <input placeholder="Seu melhor e-mail" type="email" id="email" name="email" required><br><br>

        <label for="assunto">Assunto:</label>
        <input placeholder="A vaga que você deseja" type="text" id="assunto" name="assunto" required><br><br>

        <label for="mensagem">Observações:</label><br>
        <textarea placeholder="Coloque alguma observação" id="mensagem" name="mensagem" rows="5" cols="50" required></textarea><br><br>

        <label for="file">Arquivo:</label>
        <input type="file" id="file" name="file" required><br><br>

        <input type="submit" value="Enviar">
    </form>
    </main>
    <?php require 'partials/footer.php' ?>
</body>
</html>