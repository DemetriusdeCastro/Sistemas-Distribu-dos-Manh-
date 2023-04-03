<?php
/**

LEMBREM-SE DE ALTERAR OS DADOS DA CONEXÃO
DADOS UTILIZADOS EM SALA DE AULA

$conexao = mysqli_connect('localhost', 'root', '', 'fpb');

 
$conexao = pgconnect('localhost', 'root', 'blink182', 'fpb', '5432');
if (!$conexao) {
    die('Não foi possível conectar');
}
**/

//LOCAL
$conexao = mysqli_connect('localhost', 'root', 'blink182', 'fpb', '3310');
if (!$conexao) {
    die('Não foi possível conectar');
}

//LOCAWEB
/*
$conexao = pg_connect("host=fpbalunosads.postgresql.dbaas.com.br dbname=fpbalunosads port=5432 user=fpbalunosads password=Sistemas@2023");
if (!$conexao) {
    die('Não foi possível conectar');
}
*/
?>
