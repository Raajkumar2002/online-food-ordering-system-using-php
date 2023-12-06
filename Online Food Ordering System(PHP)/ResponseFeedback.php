<?php 
session_start();
?>
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
  
  <?php 
				session_start();
				$un=$_SESSION['uname'];
				?>
  
  <tr>
    <td align="center">
	  <div style="background-color:#009999; border-top-left-radius:35px; border-bottom-right-radius:35px; width:70%;">
	    <center>
	      <form id="form1" name="form1" method="post" action="">
	        
			
			
			<table  align="center" width="500px" style=" color:#FFFFFF; font-size:14px">
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" style="font-size:18px; font-weight:bold" align="center">Response Feedback</td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <?php
				  include("config.php");
				  $id=$_GET['id'];
				  
				  $sql = "select * from feedback where UserName='$id'";
					$result = mysql_query($sql);
					$row = mysql_fetch_array($result);
					
				  ?>

  
  <tr>
    <td>User Name </td>
    <td>
        <input type="text" name="uname" value="<?php echo $row["UserName"];?> "  />    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Contact No </td>
    <td><input type="text" name="contactno" value="<?php echo $row["PhoneNo"];?> " /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Mail ID </td>
    <td><input type="text" name="mailid" value="<?php echo $row["MailID"];?> " /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Feedback</td>
    <td><textarea id='userinput' rows="4" cols="30" name="cond" value=""><?php echo $row[Feedback]; ?>
	
	<?php
	if(isset($_POST))
	{
		echo $cond;
	}
	?>	
	</textarea></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  
    <tr>
    <td>Response</td>
    <td><textarea rows="4" cols="50" name="response" ></textarea></td>
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
</table>
</div>
</body>
</html>

<?php
include("config.php");
if(isset($_POST['Submit']))
{
	$name=$_POST['uname'];
	$response=$_POST['response'];
	
    $result=mysql_query("update feedback set Response='$response' where UserName='$name' ");
	echo "<script text='text/javascript'>alert('Response send to Customer ');</script>";
	echo "<script>window.location.href='ViewFeedback.php'</script>";
}
?>