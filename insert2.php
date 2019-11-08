<!DOCTYPE HTML>
<html>  
<body>

<form action="insert2.php" method="post">
DATE_OF_BOOKING: <input type="text" name="dob"><br>
SOURCE: <input type="text" name="source"><br>
DESTINATION: <input type="text" name="destination"><br>
CLASS: <input type="text" name="class"><br>
PRICE: <input type="integer" name="price"><br>

<input type="submit" name = "submit">
</form>

</body>
</html>

<?php

include("connect.php");

if (isset($_POST['submit'])) {
	$dob = $_POST['dob'];
	$source = $_POST['source'];
	$destination = $_POST['destination'];
	$class = $_POST['class'];
	$price = $_POST['price'];

if ($dob && $source && $destination && $class && $price) {
	$sql = "UPDATE TICKET2 SET PRICE=$price WHERE DATE_OF_BOOKING='$dob' AND SOURCE='$source' AND DESTINATION='$destination' AND CLASS='$class';";


	if (mysqli_query($con, $sql)) {

	echo "value updated";
	}
	else
	{
		echo "Try again";
	}
}
else
{
		echo "enter the values & Try again";

}
}
?>