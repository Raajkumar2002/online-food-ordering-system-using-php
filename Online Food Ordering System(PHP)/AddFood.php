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
    <td colspan="2" style="font-size:18px; font-weight:bold" align="center">Food Entry   Page </td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Food ID </td>
	
					<?php
					include("config.php");
					$result =mysql_query("Select MAX(FoodID) as id from food");
						  while ($row = mysql_fetch_array($result))
							 {
								$roll = $row["id"] + 1;
							 }
					?>
	
    <td><input type="text" name="id" value="<?php echo  $roll ; ?>"/></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Type </td>
    <td><select name="type" id="type" >
      <option value="Veg"> Veg </option>
      <option value="Non Veg"> Non Veg </option>
      <option value="Fast Food"> Fast Food </option>
      <option value="Chinese"> Chinese </option>
     
    </select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Name  </td>
    <td><input type="text" name="name" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Quantity</td>
    <td><select name="qty" id="qty" >
      <option value="Full"> Full </option>
      <option value="Mini"> Mini </option>
    </select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Price  </td>
    <td><input type="text" name="price" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Ingredients</td>
    <td><textarea rows="4" cols="20" name="desc" ></textarea></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
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
	        <p>&nbsp;</p>
	        <p>&nbsp;</p>
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
	$id=$_POST['id'];
	$type=$_POST['type'];
	$name=$_POST['name'];
	$qty=$_POST['qty'];
	$price=$_POST['price'];
	$desc=$_POST['desc'];
	
	$result=mysql_query("insert into Food value('$id','$type','$name','$qty','$price','$desc')");
	echo '<script>alert("Food Details Successfully Added.")</script>';
	echo "<script>window.location.href='AddFood.php'</script>";

	//header("location:AddStudent.php");
}
?>