<?php

    $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
    $usuario = 'root';
    $senha = '';

    try {

        $conexao = new PDO($dsn, $usuario, $senha);

        $query = '
            select * from tb_usuarios
        ';

        $stmt = $conexao->query($query);
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);//retorna todos os registros do banco de dados

        echo '<pre>';
        print_r($usuario);
        echo '</pre>';

        echo $usuario['nome'];

    } catch (PDOException $e) {
       echo 'Erro '.$e->getCode().' Mensagem: '.$e->getMessage();
    }

?>