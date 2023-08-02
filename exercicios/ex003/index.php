<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PRIMITIVOS</title>
</head>
<body>
  <h1>Teste de tipos primitivos</h1>
  <?php 
    // 0x = hexadecimal | 0b = binário | 0 = Octal
    //$num = 010;
    //echo "O valor da variável é $num";

    // $v = "Rodrigo";
    // var_dump($v);

    // $num = (int) 3e2; //3 x 10(2)
    // echo "O valor é $num" . var_dump($num);

    // $num = (float) "950";
    // var_dump($num)

    // $casado = false;
    // //var_dump($casado);
    // print "O valor para casado é $casado";

    // $vet = [5, 3, "Maria", 9, false, 6];
    // var_dump($vet);

    class Pessoa {
      private string $nome;
    }

    $p = new Pessoa;
    var_dump($p);
  ?>
</body>
</html>