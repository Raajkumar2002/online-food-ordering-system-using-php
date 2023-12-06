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
	  <div style="background-color:#009999; border-top-left-radius:35px; border-bottom-right-radius:35px; width:50%;">
	    <center>
	      <form id="form1" name="form1" method="post" action="">
	        <table width="300px" style=" color:#FFFFFF; font-size:14px">
	          <tr>
	            <td colspan="2">&nbsp;</td>
    </tr>
	          <tr>
                <td colspan="2" style="font-size:18px; font-weight:bold" align="center">Search Book  </td>
	            </tr>
	          <tr>
                <td colspan="2" style="font-size:18px; font-weight:bold" align="center">&nbsp;</td>
	            </tr>
	          <tr>
                <td style="font-size:18px; font-weight:bold" align="center">Select Food Type </td>
                <td><select name="type" id="type" >
                  <option value="Veg"> Veg </option>
                  <option value="Non Veg"> Non Veg </option>
                  <option value="Fast Food"> Fast Food </option>
                  <option value="Chinese"> Chinese </option>
                </select></td>
	            </tr>
	          <tr>
                <td colspan="2" style="font-size:18px; font-weight:bold" align="center">&nbsp;</td>
	            </tr>
	          <tr>
                <td colspan="2" align="center"><input type="submit" name="Submit" value="Submit" style="width:120px; background-color:#003399; color:#FFFFFF"/>
                  &nbsp;&nbsp;
                  <input type="reset" name="Submit2" value="Reset" style="width:120px; background-color:#003399; color:#FFFFFF"/></td>
	            </tr>
	          <tr>
	            <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	          <tr>
	            <td colspan="2">
				
				
				<table width="480" border="1" align="center" style="background-color:#336600;">
    <tr>
		<td width="69" style="background-color:#CC0033"><div align="center"><strong>FoodID</strong></div></td>
		<td width="69" style="background-color:#CC0033"><div align="center"><strong>Name</strong></div></td>
		<td width="69" style="background-color:#CC0033"><div align="center"><strong>Quantity</strong></div></td>
		<td width="76" style="background-color:#CC0033"><div align="center"><strong>Price</strong></div></td>
		<td width="76" style="background-color:#CC0033"><div align="center"><strong>Ingredients</strong></div></td>
		
    </tr>
	<?php 
include("config.php");
if(isset($_POST['Submit']))
{
	$Category=$_POST['type'];
	//$name=$_POST['name'];
	
	
	$result =mysql_query("Select * from Food where Type = '$Category'");
	$id = $_POST['menu1'];
	while ($row = mysql_fetch_array($result))
          {
    ?>
    <tr>
	  <td><?php echo $row['FoodID']; ?></td>
	  <td><?php echo $row['Name'];?></td>
	  <td><?php echo $row['Quantity'];?></td>
      <td><?php echo $row['Price']; ?></td>
	  <td><?php echo $row['Ingredients']; ?></td>
    </tr>
  
  <?php } }?>
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
