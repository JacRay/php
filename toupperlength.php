<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $phrase = "Giraffe Academy";
    echo strlen($phrase);
    $phrase[0] = 'B';
    echo strtoupper($phrase);
    echo $phrase[1];
    echo str_replace("Biraffe","Panda",$phrase);
    echo substr($phrase, 8,3);//starting position,no of terms to grab
      ?>

  </body>
</html>
