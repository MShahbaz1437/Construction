<?php include("function.php");?>
<?php
session_start();
$logid=$_SESSION["logid"];
if($logid=="")
{
	header("location:admin.php");
}
$status="";
$jobname="";
$jobdetail="";
$jobmobile="";
$jobpost="";
$jlocation="";
$date="";
$id=$_GET["id"];

		if(isset($_POST["btn1"]))
		{
			extract($_POST);
			$qry="update job set jobname='$jname',jobdetail='$jdetail',jobmobile='$jmobile',jobpost='$jpost',location='$jlocation',date='$setdate' where jobid='$id'";
			$rs=executequery($qry);
			if(!$rs)
			{
				$status.="upadte error";
			}
			else
			{
				$status.="updated";
			}
		}
		if(isset($_POST["btn2"]))
		{
			extract($_POST);
			$qry="delete from job where jobid='$id'";
			$rs=executequery($qry);
			if(!$rs)
			{
				$status.="upadte error";
			}
			else
			{
				$status.="updated";
			}
		}
		$qry="select * from job where jobid='$id'";
		$rs=readrecord($qry);
		if(mysql_num_rows($rs)>0)
		{
		$row=mysql_fetch_array($rs);
		$jobid=$row[0];		
		$jobname=$row[1];
		$jobdetail=$row[2];
		$jobmobile=$row[3];
		$jobpost=$row[4];
		$jlocation=$row[5];
		$date=$row[6];
		}
		
		

?>
<html>
<head>
	<title>Job Update</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<style type="text/css">
		<
		.form
		{
		
			color:#ffffff;
			margin-top:50px;
			margin-left:50px;
			color:black;
		}
		.background
	{
		background-image:url("bunglo123.jpg");
		background-size:100% 100%;
		height:820px;
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
	}
	
	
	.admin
	{
		margin-top:10px;
		padding:1px;
		color:#ffffff;
	}
	
		</style>
		
</head>
<body>
	<?php include("header.php"); ?>

		<div class="container-fluid">
		<div class="row background">
		<div class="col-sm-4">
		</div>
			<div class="col-sm-4 form">
			<center><h4 class="admin pt-2 pb-3 font-weight-bold">Update Job</h4></center>
				<form  id="frm" name="frm" action="" method="post" enctype="multipart/form-data">
				  
				  
				  <div class="form-group row">
					<label for="inputPassword" class="col-sm-2 col-form-label">Name</label>
					<div class="col-sm-8">
					  <input type="text" id="jname" name="jname"  class="form-control"  value="<?php echo $jobname; ?>" placeholder="Enter Name" required>
					</div>
				  </div>
				  <div class="form-group row">
					<label for="inputPassword" class="col-sm-2 col-form-label  "> Detail</label>
					<div class="col-sm-8">
						<textarea class="form-control" id="jdetail" name="jdetail" " placeholder="Detail" required><?php echo $jobdetail; ?></textarea>
					</div>
				  </div>
				   <div class="form-group row">
					<label for="inputPassword" class="col-sm-2 col-form-label  "> Post</label>
					<div class="col-sm-8">
					  <input type="text" id="jpost" name="jpost"  class="form-control" value="<?php echo $jobpost; ?>" placeholder="Fill Detail About Post" required>
					</div>
				  </div>
				  <div class="form-group row">
					<label for="inputPassword" class="col-sm-2 col-form-label  ">Location</label>
					<div class="col-sm-8">
					  <input type="text" id="jlocation" name="jlocation"  class="form-control" value="<?php echo $jlocation; ?>" placeholder="Location" required>
					</div>
				  </div>
				  <div class="form-group row">
					<label for="inputPassword" class="col-sm-2 col-form-label  ">Date</label>
					<div class="col-sm-8">
					  <input type="text" id="setdate" name="setdate"  class="form-control" value="<?php echo $date ;?>" placeholder="Answer">
					</div>
				  </div>
				   <div class="form-group row">
					<label for="inputPassword" class="col-sm-2 col-form-label  "> Mobile</label>
					<div class="col-sm-8">
					  <input type="text" id="jmobile" name="jmobile"  class="form-control" value="<?php echo $jobmobile; ?>" placeholder="Fill Detail About Post" required>
					</div>
				  </div>
				  <center>
				  <button type="submit" id="btn1" name="btn1" class="btn btn-primary mb-2">Update</button>
					 <button type="submit" id="btn1" name="btn2" class="btn btn-primary mb-2">Delete</button>
				  
				  </center>
				  					   

				</form>
			</div>
			
		</div>
		<?php echo $status; ?>
		</div>
</body>
</html>
