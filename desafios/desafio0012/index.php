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
    $time = $_GET['time'] ?? 0;

  ?>
  <main>
    <h1>Calculadora e Tempo</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get"?>
      <label for="time">Qual é o total de segundos?</label>  
      <input type="number" name="time" id="time" value="<?=$time?>">
    </form>
  </main>

  <section>
    <h2>Totalizando tudo</h2>
    <?php 
      $secondsToMinute = 60;
      $secondsToHour = 60 * $secondsToMinute;
      $secondsToDay = 24 * $secondsToHour;
      $secondsToWeek = 7 * $secondsToDay;

      $weeks = floor($time / $secondsToWeek);
      $seconds = floor($time % $secondsToWeek);

      $days = floor($seconds / $secondsToDay);
      $seconds = floor($seconds % $secondsToDay);

      $hours = floor($seconds / $secondsToHour);
      $seconds = floor($seconds % $secondsToHour);

      $minutes = floor($seconds / $secondsToMinute);
      $seconds = floor($seconds % $secondsToMinute);

      echo "<p> Analisando o valor que você digitou, <strong>$time segundos</strong> equivalem a um total de: </p>";
      echo "<ul><li> $weeks semanas </li>";
      echo "<li> $days dias </li>";
      echo "<li> $hours horas </li>";
      echo "<li> $minutes minutos </li>";
      echo "<li> $seconds segundos </li></ul>";
    ?>
  </section>
</body>
</html>