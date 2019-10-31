<?php 
    $distance = rand(5, 350);
    $consumption = 7.5;
    $price = 1.3;
    $fuel_total = round($distance * $consumption / 100, 2);
    $price_trip = round($fuel_total * $price, 2);
    $my_money = 100;
    
    if ($fuel_total <= $my_money) {
        $lottery = 'įperkama.'; 
    }   else {
        $lottery = 'neįperkama';
    }
    
    $h1 = 'Kelionės skaičiuoklė';
    $li_1 = "Nuvažiouta distancija: $distance.";
    $li_2 = "Sunaudota $fuel_total l. kuro.";
    $li_3 = "Kaina: $price_trip pinigų.";
    $li_4 = "Turimi pinigai: $my_money.";
    $p = "Išvada: Kelione pr $lottery";  
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Task</title>
  </head>
  <body>
      <h1><?php print $h1;?></h1>
      <ul>
        <li><?php print $li_1;?></li>
        <li><?php print $li_2;?></li>
        <li><?php print $li_3;?></li>
        <li><?php print $li_4;?></li>
      </ul>
      <hr>
      <p><?php print $p;?></p>
  </body>
</html>