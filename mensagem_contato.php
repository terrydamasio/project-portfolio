<?php 

    $nome = addslashes($_POST['nome']);
    $telefone = addslashes($_POST['telefone']);
    $assunto = addslashes($_POST['assunto']);
    $mensagem = addslashes($_POST['mensagem']);

    $destinatario = "terrydamasio.dev@gmail.com";
    
    $corpo = "Nome: " . $nome . "\n" . "Telefone: " . $telefone . "\n" . "Assunto: " . $assunto . "\n" . "Mensagem: " . $mensagem;

    $cabecalho = "From: " . $nome . "\n" . "Reply-top: " . $destinatario . "\n" . "X=Mailer:PHP/" . phpversion();

    if(mail($destinatario, $assunto, $corpo, $cabecalho)) {
        echo "Email enviado";
    } else {
        echo "Erro ao enviar email"; 
    }


?>