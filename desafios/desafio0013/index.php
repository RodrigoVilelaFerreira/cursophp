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
    $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
    $valor = $_GET['valor'] ?? 0;
  ?>
  <main>
    <h1>Calculadora e Tempo</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get"?>
      <label for="valor">Qual valor você deseja sacar? (R$)*</label>  
      <input type="number" name="valor" id="valor" step="5" value="<?=$valor?>">
    </form>
  </main>

  <section>
    <h2><?="<p>Saque de ". numfmt_format_currency($padrão, $valor, "BRL") ."realizao</p>"?></h2>
    <?php 

      $cem = floor($valor / 100);
      $cinco = floor($valor % 100);

      $cinquenta = floor($cinco / 50);
      $cinco = floor($cinco % 50);

      $dez = floor($cinco / 10);
      $cinco = floor($cinco % 10);

      $cinco = floor($cinco / 5);

      echo "<p> O caixa eletrônico vai te entregar as seguintes notas: </p>";
      echo "<ul><li> 100 - x$cem </li>";
      echo "<li> 50 - x$cinquenta </li>";
      echo "<li> 10 - x$dez </li>";
      echo "<li> 5 - x$cinco </li></ul>";
    ?>
  </section>
</body>
</html>