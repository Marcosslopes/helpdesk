<?php
    //variavel que verifica se a autentificação foi realizada
    $usuario_autenticado = false;

    //usuarios do sistema
    $usuarios_app = array(
        array('email' => 'adm@teste.com.br','senha' => '123456'),
        array('email' => 'user@teste.com.br','senha' => 'abcde'),
    );

    foreach($usuarios_app as $user){
        

        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
            $usuario_autenticado = true;
           
        } 
    }

    if($usuario_autenticado){
        echo 'Autenticação realizada com sucesso!';
    } else{
        header('location: index.php?login=erro');
    }



   /* print_r($_POST);

    echo '<br/>';
    echo $_POST['email'];
    echo '<br/>';
    echo $_POST['senha'];
*/
?>