<!DOCTYPE html>
<html lang="en">
<head>
  <title>Esempio ciclo for</title>
</head>
<body>
    <h1>Generazione dinamica di una tabella Pitagorica</h1>
	<h1>TABELLA DI PITAGORA</h1>
    <?php
	echo '<table border="1">';
	for($i=1; $i<=10; $i++){
		echo"<tr>";
		for($j=1; $j<=10; $j++)
		echo"<td>".$i*$j."</td>";
		echo"</tr>";
	} 
	echo "</table>";
	?>

</body>
</html>  