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
      $real = floatval(str_replace(',', '.', $_POST["real"])) ?? 0;
      $currencyVariation = 4.73;
      $moneyConverted = $real / $currencyVariation;

      echo "Seus R$".str_replace('.', ',', $real)." equivalem a <strong>US$".str_replace('.', ',', $moneyConverted)."</strong> <br>";
      echo "<strong>*Cotação fixa de R$".str_replace('.', ',', $currencyVariation)."</strong> informada diretamente no código. <br>";
    ?>
    <p>
      <a href="javascript:history.go(-1)">Voltar para página anterior</a>
    </p>
    </main>
</body>
</html>