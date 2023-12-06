<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Food Ordering System</title>
<script type="text/JavaScript">

function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
</script>
<script language="javascript">
                function sum()
                {
                        var a = document.getElementById("qty").value;
                        var b = document.getElementById("price").value;
             			var d = document.getElementById("tprice");
					
	d.value=a * b ;
						
						
                }
        </script>
<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body bgcolor="#0099FF" style="background-image:url(images/Background.jpg)">
<script language="javascript">
                function sum()
                {
                        var a = document.getElementById("qty").value;
                        var b = document.getElementById("price").value;
             			var d = document.getElementById("tprice");
					
	d.value=a * b ;
						
						
                }
        </script>

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
	  <div style="background-color:#009999; border-top-left-radius:35px; border-bottom-right-radius:35px; width:70%;">
	    <center>
	      <form id="form1" name="form1" method="post" action="">
	        <table width="600px" style=" color:#FFFFFF; font-size:14px">
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" style="font-size:18px; font-weight:bold" align="center"> Delivery Entry </td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Order ID </td>
	
    <td>
	
	<select name="select" id="select" onchange="MM_jumpMenu('parent',this,0)">
                  <option>--select--</option>
                  <?php
						include("config.php");
						$q5=mysql_query("select OrderID from Order1 where Status='Pending'");
						while($r=mysql_fetch_assoc($q5))
						{
							echo "<option value=Delivery.php?bid=".$r["OrderID"].">".$r["OrderID"]."</option>";
						}
						$id=$_REQUEST['bid'];
											
						?>
                </select>	</td>
  </tr>
   <?php $result = mysql_query("SELECT * FROM  Order1 where OrderID='$id' ");
			$row1= mysql_fetch_array($result);
		  ?>
  <tr>
    <td>OrderID</td>
    <td><input type="text" name="oid" value="<?php echo $row1[OrderID]; ?>" /></td>
  </tr>
  
  <tr>
    <td>Date</td>
    <td><input type="text" name="bid2" value="<?php echo $row1[Date]; ?>" /></td>
  </tr>
  <tr>
    <td>User Name </td>
    <td><input type="text" name="bid3" value="<?php echo $row1[UserName]; ?>" />		</td>
  </tr>
 
  <tr>
    <td>Food ID </td>
    <td><input type="text" name="bid" value="<?php echo $row1[FoodID]; ?>" /></td>
  </tr>
  <tr>
  
    <td>Type</td>
    <td><input type="text" name="title" value="<?php echo $row1[Type]; ?>" /></td>
  </tr>
  <tr>
    <td>Name</td>
    <td><input type="text" name="author"  value="<?php echo $row1[Name]; ?>"  /></td>
  </tr>
  <tr>
    <td>Quantity</td>
    <td><input type="text" name="p_year"  value="<?php echo $row1[Quantity]; ?>"/></td>
  </tr>
  <tr>
    <td>Price </td>
    <td><input type="text" name="price" id="price" value="<?php echo $row1[Price]; ?>" /></td>
  </tr>
  <tr>
    <td>UserQuantity</td>
    <td><input type="text" id="qty" name="qty" value="<?php echo $row1[UserQuantity]; ?>"/> </td>
  </tr>
  <tr>
    <td>Total Price </td>
    <td><input type="text" id="tprice"  name="tprice" value="<?php echo $row1[TotalPrice]; ?>" /></td>
  </tr>
 
    <tr>
    <td>Choose Employee Name </td>
    <td>
	
	

							
							  <?php
							  include("config.php");
							  
							  $result = mysql_query("SELECT * FROM employee");
						
						
						?>	
							
                              <select name="empname" size="1"  >
								
						<?php
							 while($row = mysql_fetch_array($result))
						{
						 ?>	 
							  
                               
							   <option>
								
								<?php echo  $row['Name'] ; ?></option>
								
						<?php } ?>
                            </select>	
							
							
	
	</td>

  
  <tr>
    <td colspan="2" align="center">
      <input type="submit" name="Submit" value="Delivered" style="width:120px; background-color:#003399; color:#FFFFFF"/> 
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
	$oid=$_POST['oid'];
	$empname=$_POST['empname'];
		
	$result=mysql_query("update Order1 set Status='Delivered',Empname='$empname' where OrderID='$oid'");
	echo "<script text='text/javascript'>alert('Order Delivered Successfully');</script>";
	echo "<script>window.location.href='Delivery.php'</script>";
}
?>