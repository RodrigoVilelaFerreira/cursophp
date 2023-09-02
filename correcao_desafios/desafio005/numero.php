<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultado</title>
  <link rel="stylesheet" href="../styles//style.css">
</head>
<body>
  <main>
    <h1>Analisador de Número Real</h1>
      <?php 
      $num = $_POST["n"] ?? 0;
      
      echo "<p>Analisando o número <strong>".number_format($num, 3, ",", ".")."</strong> Informado pelo usuário </p>";
      
      $numInt = (int)$num;
      $numFra = $num - $numInt;

      echo "<ul><li> A parte inteira do número é <strong>". number_format($numInt, 0, ",", ".") ."</strong></li>";

      echo "<li> A parte fracionária do número é <strong>". number_format($numFra, 3, ",", ".") ."</strong></li></ul>";
      ?>
    <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
  </main>
</body>
</html>