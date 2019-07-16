<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$servername="localhost";
$username="root";
$password="";
$mydatabase="payslip";

$conn=new mysqli($servername,$username,$password,$mydatabase);

//sql to create table
$sql="CREATE TABLE state(ID INT(6) SIGNED AUTO_INCREMENT PRIMARY KEY, country INT(5),state VARCHAR(20))";

if(mysqli_query($conn,$sql))
{

	echo"table created successfully";
}
else
{
	echo "Error creating database:".mysqli_error($conn);
}






$conn->close();
?>

</body>
</html>
