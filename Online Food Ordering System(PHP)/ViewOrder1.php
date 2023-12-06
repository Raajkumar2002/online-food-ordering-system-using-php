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
		<li><a href="Customer.php">Home</a></li>
		<li><a href="ViewFood.php">View Food</a></li>
		<li><a href="Order.php">Food Order</a></li>
		<li><a href="ViewOrder1.php">Order Status</a></li>
		<li><a href="Feedback.php">Feedback</a></li>
		<li><a href="Index.php">Sign Out</a></li>
		</ul>
		</div>	</td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td align="center">
	  <div style="background-color:#009999; border-top-left-radius:35px; border-bottom-right-radius:35px; width:80%;">
	    <center>
	      <form id="form1" name="form1" method="post" action="">
	        <table width="300px" style=" color:#FFFFFF; font-size:14px">
	          <tr>
	            <td colspan="2">&nbsp;</td>
    </tr>
	          <tr>
                <td colspan="2" style="font-size:18px; font-weight:bold" align="center"> View Order Details </td>
	            </tr>
	          <tr>
	            <td width="300">&nbsp;</td>
      <td width="380">&nbsp;</td>
    </tr>
	          <tr>
	            <td colspan="2">
				
				
				<table width="480" border="1" align="center" style="background-color:#336600;">
    <tr>
		<td width="69" style="background-color:#CC0033"><div align="center"><strong>OrderID</strong></div></td>
		<td width="69" style="background-color:#CC0033"><div align="center"><strong>Date</strong></div></td>
		<td width="69" style="background-color:#CC0033"><div align="center"><strong>UserName</strong></div></td>
		<td width="69" style="background-color:#CC0033"><div align="center"><strong>FoodID</strong></div></td>
		<td width="69" style="background-color:#CC0033"><div align="center"><strong>Type</strong></div></td>
		<td width="69" style="background-color:#CC0033"><div align="center"><strong>Name</strong></div></td>
		<td width="76" style="background-color:#CC0033"><div align="center"><strong>Quantity</strong></div></td>
		<td width="76" style="background-color:#CC0033"><div align="center"><strong>Price</strong></div></td>
		<td width="76" style="background-color:#CC0033"><div align="center"><strong>UserQuantity</strong></div></td>
		<td width="76" style="background-color:#CC0033"><div align="center"><strong>TotalPrice</strong></div></td>
		<td width="76" style="background-color:#CC0033"><div align="center"><strong>Empname</strong></div></td>
		<td width="69" style="background-color:#CC0033"><div align="center"><strong>Status</strong></div></td>
    </tr>
	<?php 
include("config.php");
	session_start();
	$un=$_SESSION['uname'];
	$result =mysql_query("Select * from Order1 where UserName='$un'");
	while ($row = mysql_fetch_array($result))
          {
    ?>
    <tr>
	  <td><?php echo $row['OrderID']; ?></td>
	  <td><?php echo $row['Date']; ?></td>
	  <td><?php echo $row['UserName']; ?></td>
	  <td><?php echo $row['FoodID']; ?></td>
	  <td><?php echo $row['Type'];?></td>
	  <td><?php echo $row['Name'];?></td>
      <td><?php echo $row['Quantity']; ?></td>
	  <td><?php echo $row['Price']; ?></td>
	  <td><?php echo $row['UserQuantity']; ?></td>
	  <td><?php echo $row['TotalPrice']; ?></td>
	  <td><?php echo $row['Empname']; ?></td>
	  
	  <td><?php echo $row['Status']; ?></td>
    </tr> 
  <?php } ?>
</table>				</td>
      </tr>
	          <tr>
	            <td>&nbsp;</td>
      <td>&nbsp;</td>
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
