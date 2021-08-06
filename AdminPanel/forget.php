<?php include("function.php"); ?>
<?php
session_start();
$status="";
if(isset($_POST["btn1"]))
{
	extract($_POST);
	$qry="select * from adminlogin where username='$user' and email='$email'and secque='$sque' and secans='$sans'";
	$rs=readrecord($qry);
	if(mysql_num_rows($rs)>0)
		{
			$row=mysql_fetch_array($rs);
			$status.="<h3>user is<h3>".$row[1];
			$status.="<h3>email is<h3>".$row[2];
			$status.="<h3>password is<h3>".$row[3];
			$status.="<h3>Question is<h3>".$row[4];
			$status.="<h3>Answer is<h5>".$row[5];
			$status.="<a href='admin.php'>Back to login</a>";
		}
		else
		{
			$status.="Record not found";
		}
	
	}
?>
<html>
<head>
	<title>Forget Passworsd</title>
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
		height:660px;
		background-position:fixed;
	}
	h1{
		font-size:50px;
		margin-top:5px;
		padding:5px;
	}
	#frm
	{
		margin-top:60px;
	}
	#heading
	{
		font-size:50px;
		margin-top:5px;
		padding:5px;
		color:#ffffff;
	}
	</style>
	</head>
	<body>
	<div class="container-fluid background ">
		
		<div class="row">
			<div class="col-sm-12">
				<center><h1>Forget Form</h1></center>

			</div>
		</div>
		<div class="row  ">
			<div class="col-sm-4">
			</div>
		
			<div class="col-sm-6">
			<center>
			<form id="frm" name="frm" method="post" action="">
			
			  <div class="form-group row">
				<label for="staticEmail" class="col-sm-2 col-form-label"> User</label>
				<div class="col-sm-8">
				  <input type="text"  class="form-control"  id="user" name="user" placeholder="Enter User" >
				</div>
			  </div>
			  <div class="form-group row">
				<label for="staticEmail" class="col-sm-2 col-form-label"> Email</label>
				<div class="col-sm-8">
					<input type="text" class="form-control"  id="email" name="email" placeholder="Enter Email">		
				</div>
			  </div>
			   
			   <div class="form-group row">
				<label for="staticEmail" class="col-sm-2 col-form-label">Question </label>
				<div class="col-sm-8">
					<input type="text" class="form-control"  id="sque" name="sque" placeholder="Question">		
				</div>
			  </div>
			   <div class="form-group row">
				<label for="staticEmail" class="col-sm-2 col-form-label">Answer </label>
				<div class="col-sm-8">
					<input type="text" class="form-control"  id="sans" name="sans" placeholder="Answer">		
				</div>
			  </div>
			  <center> <input type="submit" id="btn1" name="btn1" value="submit" class="btn btn-primary"></center>
			</form>
			</center>
			</div>
		</div>
		<?php echo $status; ?>
	</div>
	
	</body>
</html>