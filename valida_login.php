<?php
    session_start();

    //VARIÁVEL PARA VERIFICAR SE A AUTENTICAÇÃO FOI REALIZADA
    $usuario_autenticado = false;

    //BANCO DE DADOS MOCK
    $usuarios_app = array(
        array('email' => 'adm@teste.com.br', 'senha' => '123456'),
        array('email' => 'user@teste.com.br', 'senha' => 'abcd'),
    );

    //PERCORRER O ARRAY
    foreach($usuarios_app as $user){
        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
            $usuario_autenticado = true;
        };
    }

    if($usuario_autenticado){
        echo 'Usuário autenticado';
        $_SESSION['autenticado'] = 'SIM';
    } else {
        $_SESSION['autenticado'] = 'NÃO';
        header('Location: index.php?login=erro');
    }

?>