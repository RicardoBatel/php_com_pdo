<?php

    $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
    $usuario = 'root';
    $senha = '';

    try {

        $conexao = new PDO($dsn, $usuario, $senha);

        $query = '
            create table if not exists tb_usuarios(
                id int not null primary key auto_increment,
                nome varchar(50) not null,
                email varchar(100) not null,
                senha varchar(32) not null
            )
        ';

        $conexao->exec($query);

        $query = '
            insert into tb_usuarios(
                nome, email, senha
            ) values (
                "Ricardo Batel", "ricardo@teste.com.br", "123456"
            )
        ';

        $conexao->exec($query);

    } catch (PDOException $e) {
       echo 'Erro '.$e->getCode().' Mensagem: '.$e->getMessage();
    }

?>