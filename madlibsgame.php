<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <form action="site.php" method="get">
    Color: <input type="text" name="color"><br>
    Plural Noun: <input type="text" name="plural"><br>
    Celebrity: <input type="text" name="celeb"><br>
    <input type="submit">
  </form>
  <?php
  $color = $_GET["color"];
  $plural = $_GET["plural"];
  $celeb = $_GET["celeb"];
  echo "Roses are $color <br>";
  echo "$plural are blue <br>";
  echo "I love $celeb" ?>
  </body>
</html>
