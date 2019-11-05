<?php 
    $sunny = rand(0, 1);
    $rainy = rand(0, 1);
    if ($sunny && !$rainy) {
        $class = 'bg-sunny';
        $h2_orai = 'Saulėta';
    } elseif ($sunny && $rainy) {
        $class = 'bg-sunny-rainy';
        $h2_orai = 'Saulėta su lietum';
    } elseif (!$sunny && !$rainy) {
        $class = 'bg-cloudy';
        $h2_orai = 'Debesuota';
    } elseif (!$sunny && $rainy) {
        $class = 'bg-cloudy-rainy';
        $h2_orai = 'Debesuota su lietum';
    }

    
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Orai</title>
    <style>
        .content {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
        }
        .bg-img {
            width: 200px;
            height: 200px;
            background-size: cover;
        }
        .bg-cloudy {
            background-image: url("https://cdn2.iconfinder.com/data/icons/weather-flat-14/64/weather04-256.png");
        }
        .bg-cloudy-rainy {
            background-image: url("https://cdn2.iconfinder.com/data/icons/weather-flat-14/64/weather07-256.png");
        }
        .bg-sunny {
            background-image: url("https://cdn2.iconfinder.com/data/icons/weather-flat-14/64/weather01-256.png");
        }
        .bg-sunny-rainy {
            background-image: url("https://cdn2.iconfinder.com/data/icons/weather-flat-14/64/weather15-256.png");
        }
    </style>
  </head>
  <body>
      <div class="content">
        <div class="bg-img <?php print $class;?>"></div>
        <h2><?php print $h2_orai;?></h2>
      </div>
  </body>
</html>