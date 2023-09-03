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
    $preco = $_GET['preco'] ?? 0;
    $percent = $_GET['percent'] ?? 0;

  ?>
  <main>
    <h1>Reajustador e Preços</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get"?>
      <label for="preco">Preço do Produto (R$)</label>  
      <input type="number" name="preco" id="preco" value="<?=$preco?>">
      <label for="percent" id="percentLabel"></label>
      <input type="range" min="0" max="100" name="percent" id="percent" oninput="percent.value=percent.value" value="<?=$percent?>">
      <input type="submit" value="Reajustar">
    </form>
  </main>

  <section id="resultado">
    <h2>Resultado do Reajuste</h2>
    <?php 
      $calc = $preco + ($preco * ($percent/100));
      echo "<p>O produto que custava". numfmt_format_currency($padrão, $preco, "BRL") .", com <strong>$percent% de aumento</strong> vai passar a custar <strong>". numfmt_format_currency($padrão, $calc, "BRL") ."</strong> a partir de agora.</p>";
    ?>
  </section>

  <script>
    const value = document.querySelector("#percentLabel");
    const input = document.querySelector("#percent");
    value.innerHTML = `Qual será o percentual do reajuste? (<strong>${input.value}%</strong>)`;
    input.addEventListener("input", (event) => {
      value.innerHTML = `Qual será o percentual do reajuste? (<strong>${event.target.value}%</strong>)`;
    });
  </script>
</body>
</html>