<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <?php
   $friends = array("Aidan","Shyama","Indu",21,false);
   $friends[4] = "Arathy";
   $friends[3] = "Haritha";
   $friends[10] = "Navaneeth";
   echo $friends[10];
   echo count($friends); //not size shows no of element

   ?>
  </body>
</html>
