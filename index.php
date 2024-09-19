<?php
/* conecao com o bd */
$servername = "baseteste.srv.br";
$username = "basetestesrv_u_mariamuller";
$password = "02093027tx";
$datebase = "basetestesrv_mariamuller";//sua base de dados
$conexao = mysqli_connect($servername, $username, $password, $database);

if(!$conexao){
    die("falhou a conexão".mysqli_connect_error());
}else{
    echo "conectado com sucesso";
}//checa se a conexão com o bd foi um sucesso.
?>