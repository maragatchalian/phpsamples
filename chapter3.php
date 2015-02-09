<?php
//Strlen function

echo "strlen() function <br>";
$length = strlen(PHP);
echo "PHP has $length characters <br> <br>";

?>

<?php
function familyname($fname) {
	echo "$fname Perenal.<br>";
}

echo "More on Functions: <br>";
familyname("Eric Jan Dale");
familyname("Mara");
familyname("JJ");
?>

<?php
//another example of function
function love($addiction) {
	echo "$addiction is addicting <br>";
	}
love("candy");
love("chocolate");

?>

<?php
//String concatination
echo "  <br> <br> ";
echo "String Concatenation <br>";
function strcat($left, $right){
	return $left . $right;
	}

$first = "This is a ";
$second = " complete sentence.";

echo strcat($first, $second);
