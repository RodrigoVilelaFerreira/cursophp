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
      $number = strval(str_replace('.', ',', $_POST["number"])) ?? 0;
      $numberSplited = explode(",", $number);


      echo "O número digitado foi: <strong>$number</strong><br>";
      echo "<ul><li>A parte inteira do número é: <strong>$numberSplited[0]</strong></li><br>";
      echo "<li>A parte fracionária do número é: <strong>0,$numberSplited[1]</strong></li></ul><br>";
    ?>
    <p>
      <a href="javascript:history.go(-1)">Voltar para página anterior</a>
    </p>
    </main>
</body>
</html>