<?php include("function.php");?>
<?php
session_start();
$logid=$_SESSION["logid"];
if($logid=="")
{
	header("location:admin.php");
}
$status="";
$username="";
$email="";
$password="";
$secque="";
$secans="";
$logid=$_SESSION["logid"];


		$qry="select * from adminlogin";
		$rs=readrecord($qry);
		if(mysql_num_rows($rs)>0)
		{
		$row=mysql_fetch_array($rs);
		$username=$row[1];
		$email=$row[2];
		$password=$row[3];
		$secque=$row[4];
		$secans=$row[5];
		}
		if(isset($_POST["btn1"]))
		{
			extract($_POST);
			$qry="update adminlogin set username='$user',email='$email',password='$pwd',secque='$sque',secans='$sans' where logid='$logid'";
			$rs=executequery($qry);
			
		}
	
		
		

?>
<html>
<head>
	<title>Admin update</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="style.css" />
	<style type="text/css">
		
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
	}
	#frm
	{
		margin-left:300px;
		margin-top:100px;
	}
	.update
	{
		margin-top:10px;
		margin-left:360px;
		color:#ffffff;
	}
	.background
	{
		background-image:url("bunglo123.jpg");
		background-size:100% 100%;
		height:820px;
	}
	</style>
	</head>
	<body>
		<?php include("header.php"); ?>
		<div class="container-fluid  ">
		<div class="row background ">
			<div class="col-sm-6">
			<h2 class="update">Update</h2>
			<form id="frm" name="frm" method="post" action="">
			
			  <div class="form-group row">
				<label for="staticEmail" class="col-sm-2 col-form-label"> User</label>
				<div class="col-sm-8">
				  <input type="text"  class="form-control"  id="user" name="user" value="<?php echo $username; ?>" placeholder="Enter User" >
				</div>
			  </div>
			  <div class="form-group row">
				<label for="staticEmail" class="col-sm-2 col-form-label"> Email</label>
				<div class="col-sm-8">
					<input type="text" class="form-control"  id="email" name="email"  value="<?php echo $email; ?>" placeholder="Enter Email">		
				</div>
			  </div>
			   <div class="form-group row">
				<label for="staticEmail" class="col-sm-2 col-form-label">Password </label>
				<div class="col-sm-8">
					<input type="password" class="form-control"  id="pwd" name="pwd"  value="<?php echo $password; ?>" placeholder="Password">		
				</div>
			  </div>
			   <div class="form-group row">
				<label for="staticEmail" class="col-sm-2 col-form-label">Question </label>
				<div class="col-sm-8">
					<input type="text" class="form-control"  id="sque" name="sque" value="<?php echo $secque; ?>" placeholder="Question">		
				</div>
			  </div>
			   <div class="form-group row">
				<label for="staticEmail" class="col-sm-2 col-form-label">Answer </label>
				<div class="col-sm-8">
					<input type="text" class="form-control"  id="sans" name="sans"  value="<?php echo $secans;?>" placeholder="Answer">		
				</div>
			  </div>
			  <center> <input type="submit" id="btn1" name="btn1" value="submit" class="btn btn-primary"></center>
			</form>
			</div>
		</div>
	</div>
		
		
	<?php echo $status; ?>
	</body>
</html>