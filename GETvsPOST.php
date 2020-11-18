<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <form action="site.php" method="post">
    Password:<input type="password" name="password"><br>
    <input type="submit">
  </form>
  <form action="site.php" method="get">
    Password:<input type="password" name="pass"><br>
    <input type="submit">
  </form>
  <?php
  echo $_POST["password"];
  echo $_GET["pass"];
   ?>
  </body>
</html>
