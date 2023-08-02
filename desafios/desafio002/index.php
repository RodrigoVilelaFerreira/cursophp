<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desafio002</title>
  <link rel="stylesheet" href="../styles//style.css">
</head>
<body>
  <header>
    <h1>Número aleatório</h1>
  </header>
  <main>
    <?php 
      $min = 0;
      $max = 100;
      $random = rand($min, $max);

      echo "Clique no botão abaixo para gerar um número de $min a $max <br>";
      
      echo "O número gerado foi: <strong> $random </strong>";
    ?>
    <form method="post">
      <input type="submit" name="Generate" value="Gerar outro número!">
    </form>
    </main>
</body>
</html>