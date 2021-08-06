
<?php include("function.php"); ?> 
<?php
session_start();
$status="";
if(isset($_POST["btn1"]))
{
	extract($_POST);
	$qry="select * from adminlogin where email='$email' and password='$pwd'";
	$rs=readrecord($qry);	
	if(mysql_num_rows($rs)>0)
	{
		$row=mysql_fetch_array($rs);
		$_SESSION["logid"]=$row[0];
		$_SESSION["email"]=$row[2];
		header("location:profile.php");
	}
    else
	{
	   echo "login fail";
   }
   
}
	?>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<style type="text/css">
		.background
	{
		background-image:url("bunglo123.jpg");
		background-size:100% 100%;
		height:820px;
	}
	#heading
	{
		color:ffffff;
		padding-top:100px;
	}
	#frm
	{
		margin-top:150px;
	}
		
	</style>
	</head>
	<body>
	<div class="container-fluid background ">
		<div class="row ">
			<div class="col-sm-12">
				<center><h1 id="heading">Admin Form</h1></center>
			</div>
		</div>	
		<div class="row ">
			<div class="col-sm-4">
			</div>
			<div class="col-sm-4">
			<center>
			<form id="frm" name="frm" method="post" action="">
			  <div class="form-group row">
				<label for="staticEmail" class="col-sm-2 col-form-label">Email </label>
				<div class="col-sm-8">
				  <input type="text"  class="form-control"  id="email" name="email" placeholder="Email" >
				</div>
			  </div>
			  <div class="form-group row">
				<label for="staticEmail" class="col-sm-2 col-form-label">Password </label>
				<div class="col-sm-8">
					<input type="password" class="form-control"  id="pwd" name="pwd" placeholder="Password">		
				</div>
			  </div>
			 <center> <input type="submit" id="btn1" name="btn1" value="submit" class="btn btn-primary">&nbsp&nbsp<a href="forget.php">Forget Password</a> </center>
			</form>
			</center>
			
			</div>
		</div>
	</div>
	<?php $status; ?>
	</body>
</html>