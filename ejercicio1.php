<html>
	<head>
		<title>Ejercicio 1</title>
		<link rel="stylesheet" type="text/css" href="miestilo.css">
		
	</head>
	
	<body>
		<div>
		<h1>Ejercicio 1</h1>
		<h2>Conversiones decimales a binarios (Metodo POST)</h2>
		</div>
		<form name="frmPost" method="POST">
			<p>Escriba el numero decimal:</p>
			<input type="number" min="0" name="txtNumero"/>
			<input type="submit" name="btnEnviar"/></br></br>
			<?php
				if(!empty($_POST['txtNumero'])){
					$numDecimal = $_POST['txtNumero'];
					echo "El numero decimal es: " . $numDecimal. "<br>";
					
					$numBinario = '';
					echo "<div align='center'><table border='1'><tr><th>Dividendo</th><th>Divisor</th><th>Cociente</th><th>Residuo</th></tr>";
					do{
						$numBinario = $numDecimal % 2 . $numBinario;
						echo "<tr><td>$numDecimal</td><td>2</td><td>" . round(($numDecimal/2), 0, PHP_ROUND_HALF_DOWN) . "</td><td> " . substr($numBinario, 0 , 1) . "</td></tr>";
						$numDecimal = (int) ($numDecimal/2);							
					}while($numDecimal > 0);
					echo "</table></div><br>";
					echo "<b>Numero Binario: " . $numBinario . "</b>";
				}else{
					echo "<div class='advertisen'>Debe ingresar un numero para realizar la conversion</div>";
				}
			?>
		</form>		
	</body>
</html>