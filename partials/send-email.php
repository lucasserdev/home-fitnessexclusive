<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];

    // Defina o destinatário do e-mail
    $destinatario = "lucasdias@aluno.fapce.edu.br"; // Substitua com o e-mail de destino

    // Verifica se um arquivo foi enviado
    if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
        $arquivo_tmp = $_FILES['file']['tmp_name'];
        $nome_arquivo = $_FILES['file']['name'];
        $tipo_arquivo = $_FILES['file']['type'];
        $tamanho_arquivo = $_FILES['file']['size'];
        
        // Gera um nome único para o arquivo para evitar conflitos
        $nome_arquivo_unico = uniqid() . "-" . $nome_arquivo;

        // Diretório onde o arquivo será armazenado temporariamente
        $diretorio_temporario = "uploads/";
        
        if (!is_dir($diretorio_temporario)) {
            mkdir($diretorio_temporario, 0777, true);
        }

        // Move o arquivo para o diretório de uploads
        move_uploaded_file($arquivo_tmp, $diretorio_temporario . $nome_arquivo_unico);
        
        // Adiciona o arquivo como um anexo
        $file_path = $diretorio_temporario . $nome_arquivo_unico;
        $file_content = chunk_split(base64_encode(file_get_contents($file_path)));

        // Cabeçalhos do e-mail para envio de anexo
        $boundary = md5(uniqid(time()));
        $cabecalhos = "From: $email\r\n";
        $cabecalhos .= "MIME-Version: 1.0\r\n";
        $cabecalhos .= "Content-Type: multipart/mixed; boundary=\"$boundary\"\r\n";
        
        // Corpo do e-mail com o anexo
        $corpo = "--$boundary\r\n";
        $corpo .= "Content-Type: text/plain; charset=UTF-8\r\n";
        $corpo .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
        $corpo .= "Nome: $nome\n";
        $corpo .= "E-mail: $email\n";
        $corpo .= "Assunto:\n$assunto\n";
        $corpo .= "Mensagem:\n$mensagem\n";
        $corpo .= "\r\n--$boundary\r\n";
        $corpo .= "Content-Type: $tipo_arquivo; name=\"$nome_arquivo_unico\"\r\n";
        $corpo .= "Content-Transfer-Encoding: base64\r\n";
        $corpo .= "Content-Disposition: attachment; filename=\"$nome_arquivo_unico\"\r\n\r\n";
        $corpo .= $file_content . "\r\n";
        $corpo .= "--$boundary--";
    } else {
        // Corpo do e-mail sem anexo
        $corpo = "Nome: $nome\n";
        $corpo .= "E-mail: $email\n";
        $corpo .= "Assunto:\n$assunto\n";
        $corpo .= "Mensagem:\n$mensagem\n";

        // Cabeçalhos do e-mail
        $cabecalhos = "From: $email";
    }

    // Envia o e-mail
    if (mail($destinatario, $assunto, $corpo, $cabecalhos)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Ocorreu um erro ao enviar a mensagem.";
    }
} else {
    echo "Método de requisição inválido.";
}
?>
