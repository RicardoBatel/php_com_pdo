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

        foreach ($stmt as $chave => $valor) {
            print_r($valor[1]);
            echo '<hr>';
        }

        //$lista_usuario = $stmt->fetchAll(PDO::FETCH_ASSOC);//retorna todos os registros do banco de dados

        //echo '<pre>';
        //print_r($usuario);
        //echo '</pre>';
/*
        foreach ($lista_usuario as $key => $value) {
            echo $value['nome'];
            echo '<hr>';
        }
*/

    } catch (PDOException $e) {
       echo 'Erro '.$e->getCode().' Mensagem: '.$e->getMessage();
    }

?>