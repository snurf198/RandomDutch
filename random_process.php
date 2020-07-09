<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>랜덤 n빵!</title>
</head>
<body>
  <h1>결과!</h1>
  <?php
    $num = intval($_POST["person_num"]);
    $total = intval($_POST["price"])/100;
    for ($i = 0; $i < $num-1; $i++)
    {
      $ran_num = rand(0, $total)*100;
      echo $_POST["person$i"]." : ".$ran_num."원<br>";
      $total = $total - $ran_num/100;
    }
      $total = $total * 100;
      $last = $num - 1;
    echo $_POST["person$last"]." : ".$total."원<br>";
  ?>
  <p><a href="index.html">처음으로 돌아가기</a></p>
</body>
</html>
