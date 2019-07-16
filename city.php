
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<title>city</title>

<body>
<?php
$servername="localhost";
$username="root";
$password="";
$mydatabase="payslip";

$conn=new mysqli($servername,$username,$password,$mydatabase);

//sql to create table
$sql="CREATE TABLE city(ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,state VARCHAR(50),city VARCHAR(50))";




if ($conn->query($sql)===TRUE)//object oriented
{
echo "Table created successsully";
}
else
{
echo "Error created table:".$conn->error;
}


$conn->close();
?>

</body>
</html>
