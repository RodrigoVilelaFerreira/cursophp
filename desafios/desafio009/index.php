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
    $num1 = $_GET['num1'] ?? 0;
    $peso1 = $_GET['peso1'] ?? 1;
    $num2 = $_GET['num2'] ?? 0;
    $peso2 = $_GET['peso2'] ?? 1;
  ?>
  <main>
    <h1>Informe um número</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get"?>
      <label for="num1">1º Número</label>  
      <input type="number" name="num1" id="num1" value="<?=$num1?>">
      <label for="peso1">1º Peso</label>  
      <input type="number" name="peso1" id="peso1" value="<?=$peso1?>">
      <label for="num2">2º Número</label>  
      <input type="number" name="num2" id="num2" value="<?=$num2?>">
      <label for="peso2">2º Peso</label>  
      <input type="number" name="peso2" id="peso2" value="<?=$peso2?>">
      <input type="submit" value="Dividir">
    </form>
  </main>

  <section id="resultado">
    <h2>Cálculo das Médias</h2>
    <?php 
      $mediaSimples = ($num1 + $num2)/2;
      $mediaPonderada = (($num1 * $peso1) + ($num2 * $peso2))/($peso1 + $peso2);
      echo "<p>Analisando os valores $num1 e $num2: ";
      echo "<br>A <strong>Média Aritimética Simples</strong> entre os valores é igual a ". number_format($mediaSimples, 2, ",", ".");
      echo "<br>A <strong>Média Aritimética Ponderada</strong> com pesos $peso1 e $peso2 é igual a ". number_format($mediaPonderada, 2, ",", ".") ."</p>";
    ?>
  </section>
</body>
</html>