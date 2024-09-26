<?php
    require_once '../core/sql.php';

    $id = 1;
    $nome = 'Luiz';
    $email = 'luizovc27@gmail.com';
    $senha = 'luizovc12';
    $dados = ['nome' => $nome
                                  , 'email' => $email
                                  , 'senha' => $senha];

    $usuario = 'usuario';
    $condicao = [['id', '=', $id]];
    $campos = ['id', 'nome', 'email'];
    print_r($dados);
    echo '<br>';
    print_r($campos);
    echo '<br>';
    print_r($condicao);
    echo '<br>';

    $instrucao = insert($usuario, $dados);
    echo $instrucao . '<br>';

    $instrucao = update($ususario, $dados, $condicao);
    echo $instrucao . '<br>';

    $instrucao = select($usuario, $campos, $condicao);
    echo $instrucao . '<br>';

    $instrucao = delete($usuario, $condicao);
    echo $instrucao . '<br>';
?>