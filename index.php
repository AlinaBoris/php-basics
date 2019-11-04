<?php 
    $grizai_velai - rand(0, 1);
    $grizai_isgeres - rand(0, 1);
    
    if ($grizai_velai) {
        $situacija = 'Grįžai vėlai.'; 
    }   elseif ($grizai_velai && $grizai_isgeres) { 
        $situacija = 'Grįžai vėlai ir išgėręs.';
    }   elseif ($grizai_isgeres) { 
        $situacija = 'Grįžai išgėręs.';
    }   else { 
        $situacija = 'Nieko nepadarei.';
    }
    
    $h1 = 'Biutinė skaičiuoklė';
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Situacija</title>
  </head>
  <body>
      <h1><?php print $h1;?></h1>
      <h2><?php print $situacija;?></h2>
  </body>
</html>
