<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ragistration</title>

<Script language="javaScript">
function reload(form)
{
	var uname=form.a.value;//username
	var sname=form.t1.value;//Name
	var fname=form.t2.value;//Fathers name
	var mname=form.t3.value;//mothers name
	var cname=form.t4.value;//company
	var email1=form.email.value;//email
	var email2=form.altemail.value;//altEmail
	var moname=form.mobile.value;//mobile no.
	var addname=form.address.value;//Address
	var occname=form.occu.value;//occupation
	var income1=form.income.value;//Annual salary
	var pname=form.paa.value;//password
	var security=form.book.value;
	
	
	var val=form.count.options[form.count.options.selectedIndex].value;
	
	
	self.location='testproject.php?count='+
	val+'&usname='+uname+'&sn1='+sname+'&ffname='+fname+'&mmname='+mname+'&ccname='+cname+'&eemail='+email1+'&alteremail='+email2+'&mmoname='+moname+'&adddname='+addname+'&occcname='+occname+'&iiname='+income1+'&ppname='+pname+'&question='+security;             

}


function reload1(form)
{
	var uname=form.a.value;//username
	var sname=form.t1.value;//Name
	var fname=form.t2.value;//Fathers name
	var mname=form.t3.value;//mothers name
	var cname=form.t4.value;//company
	var email1=form.email.value;//email
	var email2=form.altemail.value;//altEmail
	var moname=form.mobile.value;//mobile no.
	var addname=form.address.value;//Address
	var occname=form.occu.value;//occupation
	var income1=form.income.value;//Annual salary
	var pname=form.paa.value;//password
	var security=form.book.value;
	
	
	var val=form.count.options[form.count.options.selectedIndex].value;
	var val1=form.stat.options[form.stat.options.selectedIndex].value;//state
	
	

	
	self.location='testproject.php?count='+
	val+'&usname='+uname+'&sn1='+sname+'&ffname='+fname+'&mmname='+mname+'&ccname='+cname+'&eemail='+email1+'&alteremail='+email2+'&mmoname='+moname+'&adddname='+addname+'&occcname='+occname+'&iiname='+income1+'&ppname='+pname+'&question='+security+'&hstate='+val1;             

}
</script>


</head>

<style>

body{background-color:white;}
.sub{
	position: absolute;
	left: 68px;
	top: 753px;
}
.re{
	getion:absolute;
	left
	
	
}
th{
	color:#ECEEC1;
}
table{
	background-color: #333333;
	z-index: 100;
	position: absolute;
	left: 10px;
	height: 593px;
	top: 158px;
	width: 612px;
}

header {
  background-color: #666;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: white;
}
</style>


<?php
$servername="localhost";
$username="root";
$password="";
$mydatabase="payslip";

$ab="";

$errors=array();
$ab=isset($_GET['a']);

	if(empty($ab)){
		array_push($errors);//username
        $ss= "Username is required";
		}
		else{
        $ss="";
        }                                     //username
$ab=isset($_GET['t1']);
     
	 if(empty($ab)){
		 array_push($errors);//name
		 $ss1="Name is required";
	 }
	 else{
		 $ss1="";
	 }                                          //name
		 
$ab=isset($_GET['t2']);
     
	 if(empty($ab)){
		 array_push($errors,"father's name is required");//name
		 $ss2="Father's name is required";
	 }
	 else{
		 $ss2="";
	 }     
$ab=isset($_GET['t3']);
     
	 if(empty($ab)){
		 array_push($errors,"Name is required");//name
		 $ss3="Mother's name is required";
	 }
	 else{
		 $ss3="";
	 }     
	 
	 
	 $ab=isset($_GET['t5']);
     
	 if(empty($ab)){
		 array_push($errors,"Name is required");//name
		 $ss4="Gender is required";
	 }
	 else{
		 $ss4="";
	 }     
	 
	 $ab=isset($_GET['t6']);
     
	 if(empty($ab)){
		 array_push($errors,"Name is required");//name
		 $ss5="Marital status is required";
	 }
	 else{
		 $ss5="";
	 }     
	 
	 
	 $ab=isset($_GET['paa']);
     
	 if(empty($ab)){
		 array_push($errors,"Name is required");//name
		 $ss6="Password is required";
	 }
	 else{
		 $ss6="";
	 }     
		
	if(isset($_GET['paa'])!=isset($_GET['paas'])){		
      array_push($errors);
	  $ss6="Password is not equal";
	}
	?>


<body >
<?php 
if(!empty($_GET['count'])){
	$count=$_GET['count'];
}
else{
	$count="";
}

if(!empty($_GET['usname'])){
	$sn=$_GET['usname'];
}
else{
	$sn="";
}

if(!empty($_GET['sn1'])){
	$sn1=$_GET['sn1'];
}
else{
	$sn1="";
}
if(!empty($_GET['ffname'])){
	$sn2=$_GET['ffname'];
}
else{
	$sn2="";
}
if(!empty($_GET['mmname'])){
	$sn3=$_GET['mmname'];
}
else{
	$sn3="";
}
if(!empty($_GET['ccname'])){
	$sn4=$_GET['ccname'];
}
else{
	$sn4="";
}
if(!empty($_GET['eemail'])){
	$sn5=$_GET['eemail'];
}
else{
	$sn5="";
}


if(!empty($_GET['alteremail'])){
	$rev=$_GET['alteremail'];
}
else{
	$rev="";
}

if(!empty($_GET['mmoname'])){
	$sn6=$_GET['mmoname'];
}
else{
	$sn6="";
}if(!empty($_GET['adddname'])){
	$sn7=$_GET['adddname'];
}
else{
	$sn7="";
}
if(!empty($_GET['occcname'])){
	$sn8=$_GET['occcname'];
}
else{
	$sn8="";
}if(!empty($_GET['iiname'])){
	$sn9=$_GET['iiname'];
}
else{
	$sn9="";
}
if(!empty($_GET['ppname'])){
	$sn0=$_GET['ppname'];
}
else{
	$sn0="";
}
if(!empty($_GET['question'])){
	$rev1=$_GET['question'];
}
else{
	$rev1="";
}



?>
<header>Worlde cont</header>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get" name="testproject">
<table width="571" border="0">
  <tr>
  <th scope="row">Username*</th>
  <td><input type="text" name="a" value="<?php echo $sn;?>"><?php echo $ss;?></td> 
  </tr>
  <tr>
    <th width="96" scope="row">Name*</th>
    <td width="465"><input type="text" name="t1" value="<?php echo $sn1;?>" ><?php echo $ss1;?></td>
  </tr>
  <tr>
    <th scope="row">Father's name*</th>
    <td><input type="text" name="t2" value="<?php echo $sn2;?>" ><?php echo $ss2;?> </td>
  </tr>
  <tr>
    <th scope="row">Mother's name*</th>
    <td><input type="text" name="t3" value="<?php echo $sn3;?>" ><?php echo $ss3;?></td>
  </tr>
  <tr>
    <th scope="row">Company</th>
    <td><input type="text" name="t4" value="<?php echo $sn4;?>" ></td>
  </tr>
  <tr>
    <th scope="row">Gender*</th>
    <td><input name="t5" type="checkbox" value="m" checked>male <input name="t5" type="checkbox" value="f">Female<?php echo $ss4;?></td>
  </tr>
  <tr>
    <th scope="row">Marital status*</th>
    <td><input name="t6" type="checkbox" value="s" checked>Single<input name="t6" type="checkbox" value="m">Maried n<?php echo $ss5;?></td>
  </tr>
  <tr>
    <th scope="row">Email</th>
    <td><input type="text" name="email" value="<?php echo $sn5;?>"></td>
  </tr>
   <tr>
    <th scope="row">Alternate Email</th>
    <td><input type="text" name="altemail" value="<?php echo $rev;?>"></td>
  </tr>
  
  
  
  
  <tr>
    <th scope="row">Mobile number</th>
    <td><input type="text" name="mobile" value="<?php echo $sn6;?>"></td>
  </tr>
  <tr>
    <th scope="row">Address</th>
    <td><input type="textarea" name="address" value="<?php echo $sn7;?>" ></td>
  </tr>
  <tr>
    <th scope="row">Country</th>
    <td><select  name="count"  onChange="reload(this.form)" ><?php 
	//country state city
	
	

$conn=new mysqli($servername,$username,$password,$mydatabase);
echo "<option>".$count."</option>";

$sql= "SELECT * from country";
$result = mysqli_query($conn,$sql);


	if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<option> " . $row["COUNTRY"]. "</option>";
		    }
		

}

else
{
	echo "Record Not Found:".mysqli_error($conn);
}




    
	?>
	</select></td>
  </tr>
  <tr>
    <th scope="row">State</th>
    <td><select name="stat"  onChange="reload1(this.form)"
	>
	<?php 
	//state state state state 
	


$conn=new mysqli($servername,$username,$password,$mydatabase);


$r=$_GET['count'];
$sql1= "SELECT * FROM country WHERE COUNTRY='".$r."'";

$result = mysqli_query($conn, $sql1);
$row = mysqli_fetch_assoc($result);

$s=$row["ID"];




    
	?>
	
	
	<?php 
	//country state city
	
	


$conn=new mysqli($servername,$username,$password,$mydatabase);
$a=$_GET['hstate'];
echo "<option>".$a."</option>";
$sql= "SELECT state From state WHERE country='".$s."'";
$result = mysqli_query($conn, $sql);


	if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<option> " . $row["state"]. "</option>";
    }
}

else
{
	echo "Record Not Found:".mysqli_error($conn);
}






	?>
	</select></td>
  </tr>
  <tr>
    <th scope="row">city</th>
    <td><select name="cit" ><?php 
	//country state city
	

$conn=new mysqli($servername,$username,$password,$mydatabase);




$sql= "SELECT * FROM state WHERE state='".$a."'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$b=$row['ID'];
?>
	
<?php

$conn=new mysqli($servername,$username,$password,$mydatabase);

$sql= "SELECT city From city WHERE state='".$b."'";
$result = mysqli_query($conn, $sql);


	if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)){
      echo "<option>".$row["city"]."</option>"; 
	}
	}
	else{
		echo "Record Not Found:".mysqli_error($conn);
}
          
		  
		  
		  ?>
	</select><?php echo $a;      ?></td>
  </tr>
  <tr>
    <th scope="row">Occupation</th>
    <td><input type="text" name="occu" value="<?php echo $sn8?>" ></td>
  </tr>
  <tr>
    <th scope="row">Annual Salary</th>
    <td><input type="text" name="income" value="<?php echo $sn9;?>"></td>
  </tr>
  <tr>
  <th scope="row">Password*</th>
  <th><input type="password" name="paa" value="<?php echo $sn0;?>" >Repeat<input type="text" name="paas"><?php echo $ss6;echo count($errors); ?></th>
  
  </tr>
  <tr>
  <th scope="row">Security question</th>
  </tr>
  <tr>
  <th scope="row">Which is your favourite Book?</th>
  <th><input type=text name="book" value="<?php echo $rev1?>"></th>
  </tr>
<tr>
    
    <td colspan="2"><center><input type="submit" value="Ragister" ><input type="reset"  value="Refresh" ></center></td>
  </tr>
  
  
</table>

</form>
<?php 

if(count($errors)===0&&"count"!==null&&"stat"!==null&&"cit"!==null )
{

 



$conn=new mysqli($servername,$username,$password,$mydatabase);

$sql="INSERT INTO maintable(username,name,Fathers_name,Mothers_name,Company,gender,Marital_status,email,Alternate_email,mobile_no,address,country,state,City,Occupation,Annual_salary,Password,Security_question)VALUES('".$_GET['a']."','".$_GET['t1']."','".$_GET['t2']."','".$_GET['t3']."','".$_GET['t4']."','".$_GET['t5']."','".$_GET['t6']."','".$_GET['email']."','".$_GET['altemail']."','".$_GET['mobile']."','".$_GET['address']."','".$_GET['count']."','".$_GET['stat']."','".$_GET['cit']."','".$_GET['occu']."','".$_GET['income']."','".$_GET['paa']."','".$_GET['book']."')";
$result = mysqli_query($conn,$sql);


if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
}
$conn->close();


?>
</body>
</html>