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
	      <form id="form1" name="form1" method="post" action="Order1.php">
	        <table width="300px" style=" color:#FFFFFF; font-size:14px">
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" style="font-size:26px; font-weight:bold" align="center"> Order Details </td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Order ID </td>
	<?php
					include("config.php");
					$result =mysql_query("Select MAX(OrderID) as id from Order1");
						  while ($row = mysql_fetch_array($result))
							 {
								$roll = $row["id"] + 1;
							 }
					?>
    <td><input type="text" name="oid" value="<?php echo  $roll ; ?>" /></td>
  </tr>
  <tr>
    <td>User Name  </td>
    <td>
      			<?php 
				session_start();
				$un=$_SESSION['uname'];
				?>
        <input type="text" name="uname" value="<?php echo $un;?>" />    </td>
  </tr>
  <tr>
    <td>Food ID   </td>
    <td>
	
	<select name="select" id="select" onchange="MM_jumpMenu('parent',this,0)">
                  <option>--select--</option>
                  <?php
						include("config.php");
						$q5=mysql_query("select FoodID from Food");
						while($r=mysql_fetch_assoc($q5))
						{
							echo "<option value=Order.php?bid=".$r["FoodID"].">".$r["FoodID"]."</option>";
						}
						$id=$_REQUEST['bid'];
											
						?>
                </select>	</td>
  </tr>
  <?php $result = mysql_query("SELECT * FROM  Food where FoodID='$id' ");
			$row1= mysql_fetch_array($result);
		  ?>
  <tr>
    <td>Food ID </td>
    <td><input type="text" name="fid" value="<?php echo $row1[FoodID]; ?>" /></td>
  </tr>
  <tr>
  
    <td>Type </td>
    <td><input type="text" name="type" value="<?php echo $row1[Type]; ?>" /></td>
  </tr>
  <tr>
    <td> Name </td>
    <td><input type="text" name="name"  value="<?php echo $row1[Name]; ?>"  /></td>
  </tr>
  <tr>
    <td>Quantity</td>
    <td><input type="text" name="qty"  value="<?php echo $row1[Quantity]; ?>"/></td>
  </tr>
  <tr>
    <td>Price </td>
    <td><input type="text" name="price" id="price" value="<?php echo $row1[Price]; ?>" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Quantity</td>
    <td><input type="text" id="qty" name="uqty" Required onKeyUp="javascript:sum()"/> </td>
  </tr>
  <tr>
    <td>Total Price </td>
    <td><input type="text" id="tprice"  name="tprice" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Card No </td>
    <td><input type="text" name="cardno" Required /></td>
  </tr>
  <tr>
    <td>PIN No </td>
    <td><input type="password" name="pinno" Required /></td>
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

