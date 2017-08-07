<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php 
	echo '<H2>Hello GIC - v0.2 </H2>'; 
	$dtz = new DateTimeZone("Europe/Madrid"); //Your timezone
	$now = new DateTime(date("Y-m-d H:i:s"), $dtz);
	echo $now->format("Y-m-d H:i:s");
 ?> 
 </body>
</html>
