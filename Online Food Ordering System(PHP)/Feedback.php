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
  
  <?php 
				session_start();
				$un=$_SESSION['uname'];
				?>
  
  <tr>
    <td align="center">
	  <div style="background-color:#009999; border-top-left-radius:35px; border-bottom-right-radius:35px; width:70%;">
	    <center>
	      <form id="form1" name="form1" method="post" action="">
	        
			<table align="center" width="500px" style=" color:#FFFFFF; font-size:14px">
	          <tr>
	            <td colspan="2">&nbsp;</td>
    </tr>
	          <tr>
                <td colspan="2" style="font-size:26px; font-weight:bold" align="center">View Response From Administrator</td>
	            </tr>
	          <tr>
	            <td width="222">&nbsp;</td>
      <td width="258">&nbsp;</td>
    </tr>
	          <tr>
	            <td colspan="2">
				
				
				<table width="680" border="1" align="center" style="background-color:#336600;">
    <tr>
		<td width="69" style="background-color:#CC0033"><div align="center"><strong>UserName</strong></div></td>
		<td width="76" style="background-color:#CC0033"><div align="center"><strong>ContactNo</strong></div></td>
		<td width="76" style="background-color:#CC0033"><div align="center"><strong>MailID</strong></div></td>
		<td width="76" style="background-color:#CC0033"><div align="center"><strong>Feedback</strong></div></td>
		<td width="76" style="background-color:#CC0033"><div align="center"><strong>Response</strong></div></td>
    </tr>
	<?php 
include("config.php");

	$result =mysql_query("Select * from Feedback where UserName='$un' and Response<>'wait' ");
	$id = $_POST['menu1'];
	while ($row = mysql_fetch_array($result))
          {
    ?>
    <tr>
	  <td><?php echo $row['UserName'];?></td>
	  <td><?php echo $row['PhoneNo']; ?></td>
	  <td><?php echo $row['MailID']; ?></td>
	  <td><?php echo $row['Feedback']; ?></td>
	  <td><?php echo $row['Response']; ?></td>
    </tr>
  
  <?php } ?>
			
			<table  align="center" width="500px" style=" color:#FFFFFF; font-size:14px">
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" style="font-size:18px; font-weight:bold" align="center">Feedback Entry </td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>User Name </td>
    <td>
      <?php 
				session_start();
				$un=$_SESSION['uname'];
				?>
        <input type="text" name="uname" value="<?php echo $un;?>"  />    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Contact No </td>
    <td><input type="text" name="contactno" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Mail ID </td>
    <td><input type="text" name="mailid" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Feedback</td>
    <td><textarea rows="4" cols="50" name="address" ></textarea></td>
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
	$contactno=$_POST['contactno'];
	$mailid=$_POST['mailid'];
	$fb=$_POST['address'];
	
	$result=mysql_query("insert into Feedback value('$name','$contactno','$mailid','$fb','wait')");
	echo "<script text='text/javascript'>alert('Feedback send Successfully');</script>";
	echo "<script>window.location.href='Feedback.php'</script>";
}
?>