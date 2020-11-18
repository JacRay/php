<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!-- <form action="site.php" method="post">
      <input type ="text" name="student">
      <input type="submit">
    </form> -->
  <?php
  function cube($num){
    return $num * $num * $num;
  }
  $cubeResult = cube(5);
  echo $cubeResult;
  echo cube(5);

   ?>
  </body>
</html>
