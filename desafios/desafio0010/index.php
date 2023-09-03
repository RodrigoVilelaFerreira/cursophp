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
    $anoAtual = date("Y");
    $anoNasc = $_GET['anoNasc'] ?? 2000;
    $ano = $_GET['ano'] ?? $anoAtual;

  ?>
  <main>
    <h1>Calculando a sua idade</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get"?>
      <label for="anoNasc">Em que ano você nasceu?</label>  
      <input type="number" name="anoNasc" id="anoNasc" value="<?=$anoNasc?>">
      <label for="ano"><?="Quer saber sua idade em que ano? (atualmente estamos em $anoAtual)"?></label>
      <input type="number" name="ano" id="ano" value="<?=$ano?>">
      <input type="submit" value="Qual será minha idade?">
    </form>
  </main>

  <section id="resultado">
    <h2>Resultado</h2>
    <?php 
      $calc = $ano - $anoNasc;
      echo "<p>Quem nasceu em $anoNasc vai ter <strong>$calc anos</strong> em $ano!</p>";
    ?>
  </section>
</body>
</html>