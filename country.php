
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<title>country</title>
<body>

<?php
$servername="localhost";
$username="root";
$password="";
$mydatabase="payslip";

$conn=new mysqli($servername,$username,$password,$mydatabase);

$sql="CREATE TABLE country(ID INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
COUNTRY VARCHAR(50))";
if($conn->query($sql)===TRUE)
{
 echo "Table payslip created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();





?>

</body>
</html>
