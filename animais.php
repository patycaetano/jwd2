<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Animais</title>
</head>
<body>
   <h1>Cadastro de Animais</h1>
   <hr>
   <br>
   <form method="post" id="cadastro" action="cadastraranimais.php">
   <fieldset id="cad">
   <legend> Animais </legend>
   <p> <label for="nome">Nome:</label><input type="text" name="nome" id="nome" size="30" maxlenght="100" placeholder="Digite o nome do animal"></p>
   <p> <label for="nomecientifico">Nome Científico:</label><input type="text" name="nomecientifico" id="nomecientifico" size="36" maxlenght="100" placeholder="Digite o nome científico do animal"></p>
   <p> <label for="especie">Espécie:</label><input type="text" name="especie" id="especie" size="32" maxlenght="100" placeholder="Digite a especie do animal"></p>
   <p> <label for="peso">Peso:</label><input type="text" name="peso" id="peso" size="30" maxlenght="100" placeholder="Digite o peso do animal"></p>
   <p> <label for="alimentacao">Alimentação:</label><input type="text" name="alimentacao" id="alimentacao" size="30" maxlenght="100" placeholder="Digite a alimentação do animal"></p>
   <p> <label for="idade">Idade:</label><input type="text" name="idade" id="idade" size="30" maxlenght="100" placeholder="Digite a idade do animal"></p>
   <p> <label for="porte">Porte:</label><input type="text" name="porte" id="porte" size="30" maxlenght="100" placeholder="Digite o porte do animal"></p>
   <p> <label for="habitat">Habitat:</label><input type="text" name="habitat" id="habitat" size="30" maxlenght="100" placeholder="Digite o habitat do animal"></p>
<p>Observações</p>
<p><textarea name="obs" id="obs" placeholder="Observações Gerais do Animal" class="textarea" ></textarea></p>
</fieldset>
<br>
<hr>
<input type="submit" value="Cadastrar">
<hr>
</form>


</body>
</html>