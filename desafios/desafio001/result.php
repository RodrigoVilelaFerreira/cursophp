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
      $number = $_POST["number"] ?? 0;
      $antecessor = $number - 1;
      $sucessor = $number + 1;
      echo "O número escolhido é <strong>$number</strong> <br>";
      echo "O seu antecessor é: $antecessor <br>";
      echo "O seu sucessor é: $sucessor <br>";
    ?>
    <p>
      <a href="javascript:history.go(-1)">Voltar para página anterior</a>
    </p>
    </main>
</body>
</html>