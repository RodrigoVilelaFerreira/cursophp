<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Interação com formulários</title>
  <link rel="stylesheet" href="../styles/style.css">
</head>
<body>
  <header>
    <h1>Apresente-se</h1>
  </header>
  <section>
    <form action="cad.php" method="post">
      <label for="nome">Nome</label>
      <input type="text" name="nome" id="id_nome"> 
      <label for="sobrenome">Sobrenome</label>
      <input type="text" name="sobrenome" id="id_nome">
      <input type="submit" value="Enviar">
    </form>
  </section>
</body>
</html>