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
  $isMAle = true;
  $isTall = false;
  if ($isMAle && $isTall) {
    echo "You are Male and Tall";
  }
  elseif ($isMAle && !$isTall) {
    echo "You are Male and not Tall";
  }
  elseif (!$isMAle && $isTall) {
    echo "You are not Male and is tall";
    }
  else {
    echo "You are not Male and not Tall";
  }
   ?>
  </body>
</html>
