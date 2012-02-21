<html>
<head>
<title> Primeiro contato com CakePHP</title>
</head>
<body>
<h2>Olá Mundo</h2>

<h4>Brincando com PHP</h4>
<ul>
	<li>
		<h5>WHILE - Contador de 1 (um) até 10 (dez)</h5>
			<?php
				$a = 1;
				while ($a <= 10){
					print $a."<br>";
					$a++;
				}
			?>
	</li>
	<li>
		<h5>IF</h5>
			<?php
				$a = 5;
				if($a == 5){
					print "Valor Correto!";
				}else{
					print "Valor Errado!";
				}
			?>
	</li>
	<li>
		<h5>FOR - Contador de 1 (um) até 10 (dez)</h5>
			<?php
				for ($i=1; $i<=10; $i++){
					print $i."<br>";
				}
			?>
	</li>

	<li>
		<h5>FOREACH</h5>
			<?php
				$array = array("cakephp", "php", "assando-sites", "internet");

				foreach ($array as $valor){
					echo $valor."<br>";
				}
			?>
	</li>
</ul>
</body>
</html>