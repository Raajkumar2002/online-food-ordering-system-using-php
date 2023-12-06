
<html>
    <body>
<table align='center'>

<tr>
    <td>
<center>	<img src="images/aas.png" width="100" height="100"/></td>

</tr>

<tr>
    <td>
</td>

</tr>

<tr>
    <td>
</td>

</tr>


<tr>
    <td>
	<center><img src="images/aa.gif" width="100" height="100"/></td>

</tr>

<tr>
    <td>
</td>

</tr>

<tr>
    <td>
</td>

</tr>

<tr>
<td>
<font color='#B3C550'><Strong><center><h2>We are Processing Your Transaction,</STRONG></td>
</tr>

<tr>
    <td>
</td>

</tr>

<tr>
    <td>
</td>

</tr>

<tr><td><font><Strong><center>This Process Might Take Some Time</font>

<tr>
    <td>
</td>

</tr>

<tr>
    <td>
</td>

</tr>

<tr><td><font color='blue'><center>Please wait !!!<i class="fa fa-spinner fa-pulse fa-fw"></i>
<tr>
    <td>
</td>

</tr>

<span class="sr-only"></font></td></tr><tr><td><center>(Please do not press 'Refresh' or 'Back' button )</td>
</tr>
</table>
<script>
    setTimeout(function(){ window.location="Order.php"; }, 5000);
</script>
</body>
</html>


<?php
include("config.php");
if(isset($_POST['Submit']))
{
	$oid=$_POST['oid'];
	$dt=date("d-M-y");
	$uname=$_POST['uname'];
	$fid=$_POST['fid'];
	$type=$_POST['type'];
	$name=$_POST['name'];
	$qty=$_POST['qty'];
	$price=$_POST['price'];
	$uqty=$_POST['uqty'];
	$tprice=$_POST['tprice'];
	$cardno=$_POST['cardno'];
	
	$result=mysql_query("insert into Order1 value('$oid','$dt','$uname','$fid','$type','$name','$qty','$price','$uqty','$tprice','$cardno','Pending','noname')");
		

}
?>