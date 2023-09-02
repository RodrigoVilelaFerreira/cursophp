<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercicio006</title>
  <link rel="stylesheet" href="../styles/style.css">
</head>
<body>
  <?php
    //Capturando os dados do Formulário Retroalimentado
    $dividendo = $_GET['dividendo'] ?? 1;
    $divisor = $_GET['divisor'] ?? 1;
  ?>
  <main>
    <h1>Anatomia de uma Divisão</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get"?>
      <label for="dividendo">Dividendo</label>  
      <input type="number" name="dividendo" id="dividendo" value="<?=$dividendo?>">
      <label for="divisor">Divisor</label>  
      <input type="number" name="divisor" id="divisor" value="<?=$divisor?>">
      <input type="submit" value="Dividir">
    </form>
  </main>

  <section id="resultado">
    <h2>Estrutura de uma divisão</h2>
    <?php 
      $divisão = $dividendo / $divisor;
      $resto = $dividendo % $divisor;
      echo "<pre>$dividendo     |<u>$divisor</u> <br>";
      echo "$resto      $divisão <br></pre>";
    ?>
  </section>
</body>
</html>