<html>
<head>
<title> Chapter 1 Examples </title>
</head>
<body>

<?php
//Fist PHP Program 
//Inside HTML Tags

echo "Hello, World!" ."<br>";
echo "For Merging lol" ."<br>" ."<br>";
?>


<?php 
echo "Sample Forms" ."<br>";
if(!empty($_POST['name'])) {
echo "GREETINGS, {$_POST['name']}, and Welcome.";
}
?> 

<form action="<?php echo $_SERVER['PHP SELF']; ?>" method="post">
Enter Your Name: <input type="text" name="name" />
<input type ="submit" />
</form>



</body>
</html>

