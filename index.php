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
        $lista = $stmt->fetchAll();//retorna todos os registros do banco de dados

        echo '<pre>';
        print_r($lista);
        echo '</pre>';

    } catch (PDOException $e) {
       echo 'Erro '.$e->getCode().' Mensagem: '.$e->getMessage();
    }

?>