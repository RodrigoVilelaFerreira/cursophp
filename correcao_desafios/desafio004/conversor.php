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

      // cotação API banco central
      $inicio = date("m-d-Y", strtotime("-7 days"));
      $fim = date("m-d-Y");
      $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

      $dados = json_decode(file_get_contents($url), true);

      $cotacao = $dados["value"][0]["cotacaoCompra"];

      // Quanto $$ você tem?
      $real = $_REQUEST["din"] ?? 0;

      // Equivalência em dólar
      $dolar = $real / $cotacao;

      // Mostrar o resultado
      $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

      echo "<p>Seus " . numfmt_format_currency($padrão, $real, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrão, $dolar, "USD") . "</strong></p>";
    ?>
    <button onclick="javascript:history.go(-1)">Voltar para página anterior</button>
    </main>
</body>
</html>