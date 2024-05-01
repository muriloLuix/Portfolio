<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    $to = "muriloluiz654@gmail.com";
    $subject = "Novo formulário de contato";
    $body = "Nome: $name\nEmail: $email\nTelefone: $phone\nMensagem:\n$message";

    if (mail($to, $subject, $body)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Erro ao enviar a mensagem.";
    }
} else {
    echo "Este arquivo não deve ser acessado diretamente.";
}