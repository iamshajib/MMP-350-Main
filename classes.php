<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php

		// =========== DEFINE THE CLASS ==========
		class Cat{
			// object properties
			public $name;
			public $age;
			public $weight;
			private $breed;

			// the object's constructor
			public function __construct($_name, $_age, $_weight){
				$this->name   = $_name;
				$this->age    = $_age;
				$this->weight = $_weight;

				if($this->weight > 25){
					$this->breed = "Mountain Lion";
				}
			}

			public function feedCat($_food){
				if ($_food < $this->weight/8){
					echo $this->name." needs more food than that!";
					echo "<br>";
				} else {
					echo $this->name." is fully fed!";
					echo "<br>";
				}
			}

			public function howOld(){
				echo $this->name." is ".$this->age." years old.";
				echo "<br>";
				echo $this->name." is ".$this->age." cat years old!";
				echo "<br>";
			}
		}


		$cat1 = new Cat("Little Buddy", 2, 8);
		$cat2 = new Cat("Sneaky Pete", 0, 2);
		$cat3 = new Cat("Uncle Ben",8, 11);
		// $cat4 = new Cat()

		$cat1->howOld();
		$cat1->feedCat(6);

		$cat3->howOld();
		echo $cat->age;
		echo "<br>";


		//another class

		class Dog{

			public $name;
			public $type;
			public $country;

			public function __construct($_name, $_type, $_country){
				$this->name   = $_name;
				$this->type    = $_type;
				$this->country = $_country;
			}

			public function dogType(){
				echo $this->name." is ".$this->type." type dog. Who lives in ".$this->country;
				echo "<br>";
			}
		}
			$dog1 = new Dog("Tiger", "German Shepherd", "USA.");

			$dog1->dogType();

		
	?>

</body>
</html>





