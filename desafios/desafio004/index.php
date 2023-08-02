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
    <h1>Conversor R$ to US$ v2.0</h1>
  </header>
  <section>
    <p>Quantos R$ você tem na carteira?</p>
    <form action="convert.php" method="post">
      <input type="currency" step=0.01 name="real" id="id_real">
      <input type="submit" value="Converter">
    </form>
  </section>
</body>
</html>