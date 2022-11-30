<?php

$conexao = new mysqli('localhost:3306', 'root','',
'auladesexta');
//mysqli->comando para conectar ao banco de dados
//(nome do host + porta do host(endereço), nome da conexão/servidor , senha (quando necessária), nome do schema(banco de dados))

if($conexao->connect_errno)//connect_errno = diagnostificar erros de conexão(o echo vai exibir as mensagens de erro na tela)
{
    echo "tem alguma coisa errada";
}
else{
    echo "Conexão bem sucedida";
}

?>