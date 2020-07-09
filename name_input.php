<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>랜덤 n빵!</title>
</head>
<body>
  <h1>참가자 이름을 입력하세요</h1>
  <h2>참가 인원수 : <?php echo $_POST["person_num"];?>명</h2>
  <h2>총 금액 : <?php echo $_POST["price"];?>원</h2>
  <form action="random_process.php" method="post">
      <input type="hidden" name="person_num" value=<?= $_POST["person_num"];?>>
      <input type="hidden" name="price" value=<?= $_POST["price"];?>>
  <?php
    for ($i = 0; $i < intval($_POST["person_num"]); $i++)
    {
      echo "<p><input type=\"text\" name=\"person$i\" required></p>";
    }
  ?>
    <input type="submit" value="결과 확인">
  </form>
  <p><a href="index.html">처음으로 돌아가기</a></p>
</body>
</html>
