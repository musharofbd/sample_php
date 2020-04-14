<!doctype html>
<html>
	<head>
		<title>Page title</title>
	</head>
	<body>
		<h1>PHP object</h1>
		
		<?php 
		
		class Car{
			function Car(){
				$this->model = "BMW";
			}
		}
		
		$y = new Car();
		echo $y->model;
		
		
		
		?>
		

	</body>

</html>