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
    <h1>Resultado</h1>
    <p>
      <?php 
      $num = $_REQUEST["num"] ?? 0;
      
      echo "O número escolhido é <strong>$num</strong> <br>";
      echo "O seu antecessor é: ". ($num - 1) ."<br>";
      echo "O seu sucessor é: ". ($num + 1) ."<br>";
      ?>
    </p>
    <p>
      <a href="javascript:history.go(-1)">Voltar para página anterior</a>
    </p>
  </main>
</body>
</html>