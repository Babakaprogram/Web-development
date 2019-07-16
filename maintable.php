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
$sql="CREATE TABLE maintable(username VARCHAR(50) NOT NULL,name VARCHAR(50)NOT NULL,Fathers_name VARCHAR(50)NOT NULL,Mothers_name VARCHAR(50)NOT NULL,Company VARCHAR(50),gender VARCHAR(1)NOT NULL ,Marital_status VARCHAR(1)NOT NULL,email VARCHAR(50),Alternate_email VARCHAR(50),mobile_no INT (10) UNSIGNED ,address VARCHAR(200),country VARCHAR(50),state VARCHAR(50),city VARCHAR(50),Occupation VARCHAR(200),Annual_salary INT (8) UNSIGNED,Password INT(8)UNSIGNED NOT NULL,Security_question VARCHAR(200))";




if ($conn->query($sql)=== TRUE)//object oriented
{
echo "Table maintable created successsully";
}
else
{
echo "Error created table:".$conn->error;
}


$conn->close();
?>
</body>
</html>
