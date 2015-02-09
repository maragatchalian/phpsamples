<?php
echo "Hello World" ."<br>";
echo "If you take a look at the code, you will see an example of a Function Call, Assignments, and an  If Statement." ."<br>";
?>
<?php
//Just a Sample of:
	#Function Calls
	#Assignments
	#If statement
/*
myFunction(42, "O'Reilly");
$a = 1;
$name = "Elphaba";
$b = $a / 25.0;

if ($a == $b){
	echo "Rhyme? And Reason?";
}
*/
?>

<?php

echo "  " ."<br>" ."<br>";
echo "My Sample Assignments" ."<br>";

$FName = "Mara";
$Desc = "is cute";
echo ("Hi! Did you know that $FName, $Desc?" ."<br>" ."<br>");

echo ("Here's the code!:" ."<br>");
echo '$FName = "Mara";'."<br>";
echo '$Desc = "is cute";' ."<br>";
echo 'echo("Hi! Did you know that $FName, $Desc?");"';

?>

<?php
echo "  " ."<br>" ."<br>";
echo "My Sample Associative Array (Better check the codes for details)" ."<br>";
//Arrays
	#Associative Array
	$person[0] = "Mara";
	$person[1] = "Eric";
	$person[2] = "Nina";
	$person[3] = "Dale";
	
echo "$person[0] and $person[1]";
?>

<?php
//Arays(2)
	#Associative Array with Looping
echo "  " ."<br>" ."<br>";
echo "My Sample Associative Array with Looping using foreach loop" ."<br>";
	
	$Person[0] = "Mara";
	$Person[1] = "Eric";
	$Person[2] = "Nina";
	$Person[3] = "Dale";

	#Looping using foreach loop
	foreach ($Person as $Name){
		echo "Hello, {$Name}" ."<br>";
		}
?>

<?php
/*
//Arrays (3)
	#Array Construct array()
echo "  " ."<br>" ."<br>" ."<br>"
echo "My Sample Associative Array using the array() construct";

	$heyyou = array("Mara", "Nina", "Eric", "Dale");
	$whatnow = array('Candies' => "Mara",
			'Ribbons' => "Nina",
			'Games' => "Eric",
			'Coffee' => "Dale");

	#Using the foreach loop once again
	foreach ($whatnow as $fave => $whosfaveisit){
		echo "{$whosfaveisit} likes {$fave}" ."<br>";
		}	 	
*/
?>

<?php

//Classes
echo " " ."<br>" ."<br>";
echo "=======================================" ."<br>";
echo "Objects and OOP Defining Classes and Creating Objects" ."<br>" ."<br>";
class Person{
	
		public $name = '';
	function name ($newname = NULL)
	{
		if (!is_null($newname)) {
		$this->name = $newname;
		}
	return 	$this->name;
	}
}
	$ed = new Person;
	$ed->name('Eric');
		echo "Hello, {$ed->name}" ."<br>";
	$tc = new Person;
	$tc->name('Mara');
		echo "Look out below {$tc->name}" ."<br>";	
echo "=======================================" ."<br>";	

?>

<?php
/*
//Callbacks
echo " " ."<br>" ."<br>";
echo "=======================================" ."<br>";
echo "Callbacks" ."<br>" ."<br>";

$callback = function myCallbackFunction()
{
echo "callback achieved";
}
call_user_func($callback);
*/


?> 	
