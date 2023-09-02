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
    <h1>Conversor de Moedas</h1>
    <?php 
      // Cotação copiada do Google
      $cotação = 5.17;

      // Quanto $$ você tem?
      $real = $_REQUEST["din"] ?? 0;

      // Equivalência em dólar
      $dolar = $real / $cotação;

      // Mostrar o resultado
      // echo "Seus R\$" . number_format($real, 2, ",", ".") . "equivalem a US\$" . number_format($dólar, 2, ",", ".");

      // Formatação de moedas com internacionalização!
      // Biblioteca intl (Internallization PHP)
      $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

      echo "<p>Seus " . numfmt_format_currency($padrão, $real, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrão, $dolar, "USD") . "</strong></p>";
    ?>
    <button onclick="javascript:history.go(-1)">Voltar para página anterior</button>
    </main>
</body>
</html>