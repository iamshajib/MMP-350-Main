<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

	$truth = TRUE;//bolien 
	$truth = 1;
	$lie = FALSE;
	$lie = 0;

	$food = "fish";
	$cat = 'little buddy';

	$number = 87; //integer
	$flot = 3.14;

	

	//How to write array

	$array = array(
					"Shajib" => "Mohammed",
					"Name" => "Enamul",
					100 => "Uncle Pete",

		);
	echo $array["Name"];//output the array
	echo "<br>";
	echo $array["100"];
	echo "<br>";

	echo ($cat);
	echo "<br>";
	echo " eats ";
	echo "<br>";
	echo ($food); 

	echo "<pre>";
		var_dump($truth);
		var_dump($food);
		var_dump($lie);
		var_dump($cat);
		var_dump($number);
		var_dump($flot);

	echo "<pre>";

	$the_condition = TRUE;

	if ($the_condition){
		//Do something
		echo "Little Buddy";
		echo "<br>";
	} else {
		//Do something different
		echo "No Little Buddy";
		echo "<br>";
	}



	function appleCounter($bucketSize){ //bucketSize is an argument

		$x = 1;

		while ($x <= $bucketSize){

			if ($x == 1){
				echo $x. "apple";
				echo "<br>";
			}

			else {
				echo $x. "apples";
				echo "<br>";
			}

			$x ++;

		}

	}	

	appleCounter(11); //inside is the value of the argument




	function myFunction($cat){

		for ($x=0; $x < $cat; $x+=2){

			echo $x;

		}
	}

	$_argument = array(
				"posts" => 5,


		);

	// function shajibWork ($_argument){
	// 	echo "<pre>"
	// 	echo "<pre>"

	// }

	// shajibWork($array);


?>

</body>
</html>