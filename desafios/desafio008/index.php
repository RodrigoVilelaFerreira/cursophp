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
    $num = $_GET['num'] ?? 1;
  ?>
  <main>
    <h1>Informe um número</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get"?>
      <label for="num">Número</label>  
      <input type="number" name="num" id="num" value="<?=$num?>">
      <input type="submit" value="Dividir">
    </form>
  </main>

  <section id="resultado">
    <h2>Resultado final</h2>
    <?php 
      echo "Analisando o número <strong>$num</strong>, temos";
      echo "<ul><li>A sua raiz quadrada é <strong>". number_format(sqrt($num), 3, ",", ".")."</strong></li>";
      echo "<br><li>A sua raiz cúbica é <strong>". number_format(pow($num,(1/3)), 3, ",", ".") ."</strong></ul></li>";
    ?>
  </section>
</body>
</html>