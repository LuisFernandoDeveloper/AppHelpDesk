<?php
    session_start();

    //variavel que verifica se autenticação foi realizada
    $usuario_autenticado = false;

    //usuarios do sistema
    $usuarios_app = array(
        array('email' => 'adm@teste.com.br', 'senha' => '123456'),
        array('email' => 'user@teste.com.br', 'senha' => 'abcd')
    );

    foreach($usuarios_app as $user){
        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
            $usuario_autenticado = true;
        }
    }

    if($usuario_autenticado){
        echo 'Usuario autenticado';
        header('Location: home.php');
        $_SESSION['autenticado'] = 'SIM';
    }else{
        //forçar redirecionamento caso de usuario ou senha incorretos
        $_SESSION['autenticado'] = 'NAO';
        header('Location: index.php?login=erro');
    }
?>