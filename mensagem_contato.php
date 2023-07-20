<?php 

    echo '<pre>';
    print_r($_POST);
    echo '</pre>';

    //montagem do texto
    $nome = str_replace('#', '-', $_POST['nome']);
    $email = str_replace('#', '-', $_POST['email']);
    $topico = str_replace('#', '-', $_POST['topico']);
    $mensagem = str_replace('#', '-', $_POST['mensagem']);

    $texto = '- ' . $nome . ' # ' . $email . ' # ' . $topico . ' # ' . $mensagem . PHP_EOL;
    
    $arquivo = fopen('contatos.hd', 'a');

    fwrite($arquivo, $texto);

    fclose($arquivo);
    
    header('Location: index.html');
?>