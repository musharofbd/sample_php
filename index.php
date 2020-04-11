<!doctype html>
<html>
	<head>
		<title>Page title</title>
	</head>
	<body>
		<h1>PHP variables</h1>
		
		<?php 
		$txt = "Hello world!";
		$x = 5; 
		$y = 10.5;
		
		echo $txt;
		echo "<br />";
		echo $x; 
		echo "<br />";
		echo $y;
		echo "<br />";
		 
		
		$txt1 = "W3Schools.com"; 
		echo "I love $txt1 !";
		
		//how to add
		
		$a = 10;
		$b = 4;
		
		echo "<br />";
		echo $a + $b;
		
		//php variable scope | local | global | static 
		
		$x1 = 5; // global scope
		
		function myFunction(){
			// using x1 inside this function will generate an error
			echo "the value of global variable is: $x1";
			echo "<br />";
		}
		echo "<br />";
		myFunction();
		echo "the value of global variable outside this function is: $x1";
		
		
		
		
		function myFunction2(){
			$x2 = 15; // local scope
			echo "the value of local variable inside this function is: $x2";
			echo "<br />";
		}
		echo "<br />";
		myFunction2();
		// using x2 outside the function will generate an error
		echo "the value of global variable is: $x2";
		
		echo "<hr />";
		
		//php global keyword
		
		$m = 15;
		$n = 10;
		
		function myTest(){
			global $m, $n;
			$n = $m + $n;
			
		}
		
		myTest();
		echo $n;
		
		echo "<hr />";
		
		//$GLOBALS[index] array
		
		$x3 = 100;
		$y3 = 125;
		
		function myTest1(){
			$GLOBALS['y3'] = $GLOBALS['x3'] + $GLOBALS['y3'];
		}
		
		myTest1(); //function is called
		echo $y3;
		
		echo "<hr />";
		//static variable
		echo "<h1>Static Variable</h1>";
		$x4 = 1;
		function myTest2(){
			static $x4;
			echo $x4++;
		}
		
		myTest2();
		echo "<br />";
		myTest2();
		echo "<br />";
		myTest2();
		echo "<br />";
		myTest2();
		echo "<br />";
		myTest2();
		echo "<br />";
		
		
		
		?>
		

	</body>

</html>