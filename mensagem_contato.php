<?php 

    $nome = addslashes($_POST['nome']);
    $telefone = addslashes($_POST['telefone']);
    $mensagem = addslashes($_POST['mensagem']);

    $para = "terrydamasio.dev@gmail.com";
    $assunto = "Trabalho - Formulário Portfolio";

    $corpo = "Nome: " . $nome . "\n" . "Telefone: " . $telefone . "\n" . "Mensagem: " . $mensagem;

    $cabeca = "From: teste@damasio.com" . "\n" . "Reply-top: " . $para . "\n" . "X=Mailer:PHP/" . phpversion();

    if(mail($para, $assunto, $corpo, $cabeca)) {
        header('Location: index.html');
    } else {
        echo "Erro ao enviar email"; 
    }


?>