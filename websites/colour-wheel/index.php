<?php

	date_default_timezone_set('Europe/London');

	$date		= date('d.m.y');
	$time	= date('H:i');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Random Colour Generator</title>
  <meta name="Random Colour Generator" content="Click the buttons to get a random colour.">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" type="text/css" href="css/normalize.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">

</head>


<body>
    <header>
      <h1><img src="img/logo.png" alt="random colour generator"></h1>
      <h2 id="time"><?php echo $time; ?></h2>
    </header>

    <main>
    <div id="pick-container"><button id="pick">Pick A Colour</button></div>
    <div id="mystery-container"><button id="mystery">Mystery Colour</button></div>
  </main>

    <footer>
      <h2 id="date"><?php echo $date; ?></h2>
      <h2 id="larlar">Larlar.</h2>
    </footer>

<script src="js/main.js"></script>
</body>
</html>
