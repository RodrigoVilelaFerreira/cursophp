<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultado</title>
  <link rel="stylesheet" href="../styles//style.css">
</head>
<body>
  <header>
    <h1>Resultado</h1>
  </header>
  <main>
    <?php 
      $nome = $_POST["nome"] ?? "";
      $sobrenome = $_POST["sobrenome"] ?? "Anônimo";
      echo "<p>Seja muito bem vindx, <strong>$nome $sobrenome</strong>!";
    ?>
    <p>
      <a href="javascript:history.go(-1)">Voltar para página anterior</a>
    </p>
    </main>
</body>
</html>