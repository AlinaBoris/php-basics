<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP lydės <?php print date ('Y-m-d', strtotime('+1 day')); ?>!</title>
  </head>
  <body>
    <h1><b>Alina</b> - PHP su manim buvo ir <?php print date ('H', strtotime('-1 hour')) . ' valandą'; ?>!</h1>
    <p>
        <?php print date ('Y', strtotime('+1 year')); ?> ne už kalnų!
    </p>
  </body>
</html>
