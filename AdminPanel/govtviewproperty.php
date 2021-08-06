<?php include("function.php"); ?>
<?php
session_start();
$logid=$_SESSION["logid"];
if($logid=="")
{
	header("location:admin.php");
}
$buyid="";
$buyname="";
$buypropertyid="";
$buyaddress="";
$buypostcode="";
$buymobile="";
$buyemail="";
$date="";
$status="";

	$qry="select * from govtproject";
	$rs=readrecord($qry);
	$status.="<table>";
	$status.="<tr>";
	$status.="<th> Id</th>";
	$status.="<th>Name</th>";
	$status.="<th>Detail</th>";
	$status.="<th>Photo</th>";
	$status.="<th>Date</th>";
	$status.="<th>Edit</th>";
	
	$status.="</tr>";
	while($row=mysql_fetch_array($rs))
	{
	$status.="<tr>";
	$status.="<td>$row[0]</td>";
	$status.="<td>$row[1]</td>";
	$status.="<td>$row[2]</td>";
	$status.="<td><img src='../admin/$row[3]' style='height:100px; width:110px;' /></td>";
	$status.="<td>$row[4]</td>";
	$status.="<td><a href='govtupdate.php?id=$row[0]'>Edit</a></td>";
	$status.="</tr>";
	}
	$status.="</table>";
	

?>
<html>
<head>
	<title>View Project</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<style type="text/css">
	
		.background
	{
		background-image:url("bunglo123.jpg");
		background-size:cover;
		height:700px;
	}
	table
	{
		color:#000000;
		width:500px;
		margin-left:100px;
		margin-top:30px;
		
		
		
	}
	th
	{
		text-align:center;
	}
	th:hover
	{
		background-color:#cccccc;
		color:#ffffff;
	}
	td
	{
		font-weight:bold;
		padding:5px;
		padding-left:10px;
			border:1px solid #000000;
	}
	td:hover
	{
		background-color:#cccccc;
		color:#ffffff;
	}
	a:hover
	{
		color:#ffffff;
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
	table tr th
	{
		border:1px solid #000000;
		
	}
	
	
	
	
	
		</style>
		
</head>
<body>
<?php include("header.php"); ?>
		<div class="container-fluid ">
		
		<div class="row background ">
		<div class="col-sm-1 form">
		</div>
			<div class="col-sm-8 form">
				<center><h4 class="admin pt-2 pb-50 font-weight-bold">View Project</h4></center>
					<?php echo $status;?>
			</div>
			
		</div>
		
		</div>


</body>

</html>