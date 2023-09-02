<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercicio007</title>
  <link rel="stylesheet" href="../styles/style.css">
</head>
<body>
  <?php
    //Capturando os dados do Formulário Retroalimentado
    $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
    $salario = $_GET['salario'] ?? 1;
    $salarioMin = 1320
  ?>
  <main>
    <h1>Informe seu salário</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get"?>
      <label for="salario">Salário (R$)</label>  
      <input type="number" name="salario" id="salario" value="<?=$salario?>">
      <?="<p>Considerando o salário mínimo de <strong>". numfmt_format_currency($padrão, $salarioMin, "BRL") ."</strong></p>"?>
      <input type="submit" value="Calcular">
    </form>
  </main>

  <section id="resultado">
    <h2>Resultado final</h2>
    <?php 
      $divisão = $salario / $salarioMin;
      $resto = $salario % $salarioMin;
      
      echo"<p>Quem recebe um salário de ". numfmt_format_currency($padrão, $salario, "BRL") ." ganha ". "<strong>". number_format($divisão, 0, ",", ".")  ." salários mínimos</strong> + ". numfmt_format_currency($padrão, $resto, "BRL") .".</p>";
    ?>
  </section>
</body>
</html>