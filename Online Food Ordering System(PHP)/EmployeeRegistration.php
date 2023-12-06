<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Food Ordering System</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body bgcolor="#0099FF" style="background-image:url(images/Background.jpg)">
<div align="center">
<table width="80%" bgcolor="#FFFFFF">
  <tr>
    <td>
	<img src="images/banner.jpg" width="100%" height="198"/></td>
  </tr>
  <tr>
    <td>
		<div class="menubg">
		<ul>
		<li><a href="Admin.php">Home</a></li>
		<li><a href="ViewCustomer.php">View Customer</a></li>
		<li><a href="AddFood.php">Add Food</a></li>
		<li><a href="EmployeeRegistration.php">Add Employees</a></li>
		<li><a href="ViewOrder.php">View Order</a></li>
		<li><a href="Delivery.php">Delivery</a></li>
		<li><a href="ViewFeedback.php">View Feedback</a></li>
		<li><a href="Index.php">Sign Out</a></li>
		</ul>
		</div>	</td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td align="center">
	  <div style="background-color:#009999; border-top-left-radius:35px; border-bottom-right-radius:35px; width:50%;">
	    <center>
	      <form id="form1" name="form1" method="post" action="">
	        <table width="300px" style=" color:#FFFFFF; font-size:14px">
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" style="font-size:18px; font-weight:bold" align="center">Add Employee Details </td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Employee Name </td>
    <td><input type="text" name="t1" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Gender</td>
    <td><select name="t2" id="gender[]">
                <option value="Male"> Male </option>
				<option value="Female"> Female </option>
				</select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Contact No </td>
    <td><input type="text" name="t3" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Experience</td>
    <td><input type="text" name="t4" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Address</td>
    <td><textarea rows="4" cols="50" name="t5" ></textarea></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" align="center">
      <input type="submit" name="Submit" value="Submit" style="width:120px; background-color:#003399; color:#FFFFFF"/> 
        &nbsp;&nbsp; <input type="reset" name="Submit2" value="Reset" style="width:120px; background-color:#003399; color:#FFFFFF"/></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
	        
	        </form>
	  </center>
	    </div></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3" bgcolor="#33FF99"><div align="center" style="color:#00000">Online Food Ordering System</div></td>
  </tr>
</table>
</div>
</body>
</html>
<?php
include("config.php");
if(isset($_POST['Submit']))
{
	$id=$_POST['t1'];
	$name=$_POST['t2'];
	$password=$_POST['t3'];
	$gender=$_POST['t4'];
	$contactno=$_POST['t5'];
	
	$result=mysql_query("insert into Employee value('$id','$name','$password','$gender','$contactno')");
	echo "<script text='text/javascript'>alert('Employee Added Successfully');</script>";
		echo "<script>window.location.href='Admin.php'</script>";
	
}
?>