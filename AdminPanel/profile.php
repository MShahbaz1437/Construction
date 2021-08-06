<?php include("function.php");?>
<?php
session_start();
$logid=$_SESSION["logid"];
if($logid=="")
{
	header("location:admin.php");
}
$status="";
$id="";
$username="";
$email="";
$password="";
$secque="";
$secans="";

	$qry="select * from adminlogin";
	$rs=readrecord($qry);
	$row=mysql_fetch_array($rs);
	{
		$id=$row[0];
		$username=$row[1];
		$email=$row[2];
		$password=$row[3];
		$secque=$row[4];
		$secans=$row[5];
	}

?>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="style.css" />
	<style type="text/css">
	.background
	{
		background-image:url("bunglo123.jpg");
		background-size:100% 100%;
		height:600px;
		background-position:fixed;
	}
	h1{
		font-size:50px;
		margin-top:5px;
		padding:5px;
	}
	.nav-link
	{
		font-size:16px;
		padding:15px;
		font-weight:bold;
		margin-left:15px;
		
		
	}
	.row
	{
		font-weight:bold;
		color:#ffffff;
	}
	
	
	.admin
	{
		margin-top:10px;
		padding:1px;
		color:#ffffff;
	}
	table
	{
		height:200px;
	}
	td
	{
		font-weight:bold;	
	}
	</style>
	</head>
	<body>
		<?php include("header.php"); ?>

	<div class="container-fluid background ">
	
		<div class="row">
		
		
			<div class="col-sm-12">
			<center><h1>Admin Profile</h1></center>
			</div>
			</div>
		<div class="row pt-5 ">
		
			<div class="col-sm-12">
			
			<form id="frm" name="frm" method="post" action="">
			<center>
				<table border="1>">
				  <div class="form-group row">
				   <tr>
						  <th>id</th>
						  <td><?php echo $id; ?></td>	
					  </tr>
					  <tr>
						  <th>User</th>
						  <td><?php echo $username; ?></td>	
					  </tr>
					  <tr>
						  <th>Email</th>
						  <td><?php echo $row[2]; ?></td>	
					  </tr>
					   <tr>
						  <th>Password</th>
						  <td><?php echo $row[3]; ?></td>	
					  </tr>
					   <tr>
						  <th>Question</th>
						  <td><?php echo $row[4]; ?></td>	
					  </tr>
					   <tr>
						  <th>Answer</th>
						  <td><?php echo $row[5]; ?></td>	
					  </tr>
				 </div>  
				 </table>
			</center>	 
			</form>
			
		</div>
	</div>
	<?php $status; ?>
	</body>
</html>