<?php 

    $guardaNome = addslashes($_POST['nome']);
    $guardaEmail = addslashes($_POST['email']);
    $guardaMensagem = addslashes($_POST['mensagem']);

    $destino = "vinicius.santos11br@gmail.com";
    $assunto = "Contato - netlify";

    $corpoEmail = "Nome: ".$guardaNome."\n"."Email: ".$guardaEmail."\n"."Mensagem: ".$guardaMensagem;

    $cabecalho = "From: vinicius.santos11br@gmail.com"."\n"."Reply-to: ".$guardaEmail."\n"."X=Mailer: PHP/".phpversion();

    if (mail($destino,$assunto,$corpoEmail,$cabecalho)){
        echo ("Mensagem enviada com sucesso!");
    } else {
        echo ("Erro ao enviar a mensagem.");
    }

?>