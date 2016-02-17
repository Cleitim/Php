<?php

require_once ("cabecalho.php");
$nome= $_REQUEST['nome'];
$email= $_REQUEST['email'];
$assunto= $_REQUEST['assunto'];
$descricao= $_REQUEST['descricao'];

echo '<h3 class="teste">Dados enviados com sucesso, abaixo seguem os dados que você enviou:</h3><br>';

echo '<p> Nome :'.$nome."</p>";
echo '<p> Email : '.$email."</p>";
echo '<p> Assunto : '.$assunto."</p>";
echo '<p> Descrição : '.$descricao."</p><br>";


 require_once ("rodape.php");