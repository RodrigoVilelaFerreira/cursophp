<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desafio 001</title>
  <link rel="stylesheet" href="../styles/style.css">
</head>
<body>
  <header>
    <h1>Analisador de Número Real</h1>
  </header>
  <section>
    <p>Informe um número real:</p>
    <form action="convert.php" method="post">
      <input type="number" step=".001" name="number" id="id_number">
      <input type="submit" value="Analisar">
    </form>
  </section>
</body>
</html>