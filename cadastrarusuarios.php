<?php
$conexao = mysqli_connect("localhost","root","","zooworld");
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$datanasc = $_POST['datanasc'];
$email = $_POST['email'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$cep = $_POST['cep'];
$estado = $_POST['estado'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$celular = $_POST['celular'];
$genero = $_POST['genero'];
$sexualidade = $_POST['sexualidade'];
$estadocivil = $_POST['estadocivil'];
$cor = $_POST['cor'];


echo "{$nome} - {$sobrenome} - {$datanasc} - {$email} - {$rua} - {$numero} - {$bairro} - {$cidade} - {$cep} - {$estado} - {$cpf} - {$rg} - {$celular} - {$genero} - {$sexualidade} - {$estadocivil} - {$cor}";

$sql_inserir = "insert into tbusuario(nome,sobrenome,datanasc,email,rua,numero,bairro,cidade,cep,estado,cpf,rg,celular,genero,sexualidade,estadocivil,cor)values ( '{$nome}' , '{$sobrenome}' , '{$datanasc}' , '{$email}' , '{$rua}' , {$numero} , '{$bairro}' , '{$cidade}' , '{$cep}'  , '{$estado}' , '{$cpf}' , '{$rg}' , '{$celular}' , '{$genero}' , '{$sexualidade}' , '{$estadocivil}' , '{$cor}')";


mysqli_query($conexao, $sql_inserir);

mysqli_close($conexao);
 

?>