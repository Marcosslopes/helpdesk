<?php

    session_start();

    //variavel que verifica se a autentificação foi realizada
    $usuario_autenticado = false;
    $usuario_id = null;
    $user_perfil_id = null;

    $perfil = array(1 => 'Administrativo', 2 => 'Usuário');

    //usuarios do sistema
    $usuarios_app = array(
        array('id' => 1, 'email' => 'adm@teste.com.br','senha' => '123456', 'perfil_id' => 1),
        array('id' => 2, 'email' => 'user@teste.com.br','senha' => '1234', 'perfil_id' => 1),
        array('id' => 3, 'email' => 'marcos@teste.com.br','senha' => '1234', 'perfil_id' => 2),
        array('id' => 4, 'email' => 'maria@teste.com.br','senha' => '1234', 'perfil_id' => 2),
    );

    foreach($usuarios_app as $user){
        

        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
            $usuario_autenticado = true;
            $usuario_id =   $user['id'];
            $user_perfil_id = $user['perfil_id'];

        } 
    }

    if($usuario_autenticado){
        echo 'Autenticação realizada com sucesso!';
        $_SESSION['autenticado'] = 'SIM';
        $_SESSION['id'] = $usuario_id;
        $_SESSION['perfil_id'] = $user_perfil_id;
        header('location: home.php');

    } else{
        $_SESSION['autenticado'] = 'NAO';
        header('location: index.php?login=erro');
    }



   /* print_r($_POST);

    echo '<br/>';
    echo $_POST['email'];
    echo '<br/>';
    echo $_POST['senha'];
*/
?>