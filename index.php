<?php 
    $rand_1_100 = rand(1, 100);
    $rand_101_200 = rand(101, 200);
    $rand_201_300 = rand(201, 300);
    $rand_301_400 = rand(301, 400);
    
    $h1 = "Skolos skaičiuoklė";
    $h2 = "Jeigu paimei $rand_1_100 euru";
    $h3 = "Su diem kabančiais grąžinsi $rand_201_300";
    $h4 = "Su vienu kabančiu grąžinsi $rand_101_200";
            
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Task</title>
  </head>
  <body>
      <h1><?php print $h1?></h1>
      <h2><?php print $h2?></h2>
      <h3><?php print $h3?></h3>
      <h4><?php print $h4?></h4>
  </body>
</html>