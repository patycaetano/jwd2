<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Animais</title>
</head>
<body>
   <h1>Cadastro de Usuários</h1>
   <hr>
   <br>
   <form method="post" id="cadastro" action="cadastrarusuarios.php">
   <fieldset id="cad">
   <legend> Usuários </legend>
   <p> <label for="nome">Nome:</label><input type="text" name="nome" id="nome" size="30" maxlenght="100" placeholder="Digite o nome do animal"></p>
   <p> <label for="sobrenome">Sobrenome:</label><input type="text" name="sobrenome" id="sobrenome" size="30" maxlenght="100" placeholder="Digite seu sobrenome"></p>
   <p> <label for="datanasc">Data de Nascimento:</label><input type="text" name="datanasc" id="datanasc" size="40" maxlenght="100" placeholder="Digite sua data de nascimento"></p>
   <p> <label for="email">Email:</label><input type="text" name="email" id="email" size="40" maxlenght="100" placeholder="Digite seu email"></p>
   <p> <label for="rua">Rua:</label><input type="text" name="rua" id="rua" size="25" maxlenght="100" placeholder="Digite sua rua"></p>
   <p> <label for="numero">Número:</label><input type="number" name="numero" id="numero" size="11" maxlenght="100" placeholder="Digite o número de sua casa"></p>
   <p> <label for="bairro">Bairro:</label><input type="text" name="bairro" id="bairro" size="20" maxlenght="100" placeholder="Digite o nome do seu bairro"></p>
   <p> <label for="cidade">Cidade:</label><input type="text" name="cidade" id="cidade" size="30" maxlenght="100" placeholder="Digite o nome de sua cidade"></p>
   <p> <label for="cep">CEP:</label><input type="text" name="cep" id="cep" size="10" maxlenght="100" placeholder="Digite o cep de sua rua"></p>
   <p> <label for="estado">Estado:</label><input type="text" name="estado" id="estado" size="2" maxlenght="100" placeholder="Digite o nome do seu estado"></p>
   <p> <label for="cpf">CPF:</label><input type="text" name="cpf" id="cpf" size="14" maxlenght="100" placeholder="Digite seu cpf"></p>
   <p> <label for="rg">RG:</label><input type="text" name="rg" id="rg" size="13" maxlenght="100" placeholder="Digite seu rg"></p>
   <p> <label for="celular">Celular:</label><input type="text" name="celular" id="celular" size="14" maxlenght="100" placeholder="Digite o número do seu celular"></p>
   <p> <label for="genero">Gênero:</label><input type="text" name="genero" id="genero" size="10" maxlenght="100" placeholder="Digite seu gênero"></p>
   <p> <label for="sexualidade">Sexualidade:</label><input type="text" name="sexualidade" id="sexualidade" size="20" maxlenght="100" placeholder="Digite sua sexualidade"></p>
   <p> <label for="estadocivil">Estado Civíl:</label><input type="text" name="estadocivil" id="estadocivil" size="15" maxlenght="100" placeholder="Digite seu estado civil"></p>
   <p> <label for="cor">Cor:</label><input type="text" name="cor" id="cor" size="10" maxlenght="100" placeholder="Digite sua cor"></p>

   <input type="submit" value="Cadastrar">
<hr>
</form>


</body>
</html>