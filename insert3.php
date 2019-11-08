<!DOCTYPE HTML>
<html>  
<body>

<form action="insert3.php" method="post">
PID: <input type="integer" name="PID"><br>
PassportNo: <input type="text" name="PassportNo"><br>
FName: <input type="text" name="FName"><br>
M: <input type="text" name="M"><br>
LName: <input type="text" name="LName"><br>
Address: <input type="text" name="Address"><br>
Phone: <input type="integer" name="Phone"><br>
Age: <input type="integer" name="Age"><br>
Gender: <input type="text" name="Gender"><br>
Flight_Code: <input type="text" name="Flight_Code"><br>


<input type="submit" name = "submit">
</form>

</body>
</html>

<?php

include("connect.php");

if (isset($_POST['submit'])) {
	$PID = $_POST['PID'];
	$PassportNo = $_POST['PassportNo'];
	$FName = $_POST['FName'];
	$M = $_POST['M'];

	$LName = $_POST['LName'];
	$Address = $_POST['Address'];
	$Phone = $_POST['Phone'];

	$Age = $_POST['Age'];
	$Gender = $_POST['Gender'];
	$Flight_Code = $_POST['Flight_Code'];
	//$price = $_POST['price'];

if ($PID && $PassportNo && $FName && $M && $LName && $Address && $Phone && $Age && $Gender && $Flight_Code){
            $sql1="INSERT INTO PASSENGER1(PID,PASSPORTNO) VALUES($PID,'$PassportNo');";
	if (mysqli_query($con, $sql1)) {

	echo " ";
	}
	else
	{
		echo " ";
	}
}


if ($PID && $PassportNo && $FName && $M && $LName && $Address && $Phone && $Age && $Gender && $Flight_Code){
            $sql2="INSERT INTO PASSENGER2(PASSPORTNO,FNAME,M,LNAME,ADDRESS,PHONE,AGE,SEX) VALUES('$PassportNo','$FName','$M','$LName','$Address',$Phone,$Age,'$Gender');";
	if (mysqli_query($con, $sql2)) {

	echo " ";
	}
	else
	{ 
		echo " ";
	}
}

if ($PID && $PassportNo && $FName && $M && $LName && $Address && $Phone && $Age && $Gender && $Flight_Code){
            $sql3="INSERT INTO PASSENGER3(PID,Flight_Code) VALUES($PID,'$Flight_Code');";
	if (mysqli_query($con, $sql3)) {

	echo "";
	}
	else
	{
		echo "value updated";
	}
}

else
{
		echo "enter the values & Try again";

}
}
?>