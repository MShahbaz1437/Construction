<?php include("function.php"); ?>
<?php
session_start();
$status="";
$logid=$_SESSION["logid"];
if($logid=="")
{
	header("location:admin.php");
}


	$qry="select * from sellproperty";
	$rs=readrecord($qry);
	$status.="<table border='1'>";
	$status.="<tr>";
	$status.="<th>property id</th>";
	$status.="<th>property title</th>";
	$status.="<th>property type</th>";
	$status.="<th>property location</th>";
	$status.="<th>property city</th>";
	$status.="<th>property landmark</th>";
	$status.="<th>property detail</th>";
	$status.="<th>property size</th>";
	$status.="<th>property price</th>";
	$status.="<th>property photo</th>";
	$status.="<th>property date</th>";
	$status.="<th>Edit</th>";

	$status.="</tr>";
	
	while($row=mysql_fetch_array($rs))
	{
		$status.="<tr>";
		$status.="<td>$row[0]</td>";
		$status.="<td>$row[1]</td>";
		$status.="<td>$row[2]</td>";
		$status.="<td>$row[3]</td>";
		$status.="<td>$row[4]</td>";
		$status.="<td>$row[5]</td>";
		$status.="<td>$row[6]</td>";
		$status.="<td>$row[7]</td>";
		$status.="<td>$row[8]</td>";
		$status.="<td><img src='../admin/$row[9]' style='height:100px; width:110px;' /></td>";
		$status.="<td>$row[10]</td>";
		$status.="<td><a href='sellupdate.php?id=$row[0]'>Edit</a></td>";
		$status.="</tr>";
		}
	$status.="<table>";

?>
<html>
<head>
	<title>View Property</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<style type="text/css">
	
		.background
	{
		background-image:url("bunglo123.jpg");
		background-size:100% 100%;
		height:700px;
	}
	table
	{
		color:#000000;
		width:500px;
		
		
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
	}
	td:hover
	{
		background-color:#cccccc;
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
	td
	{
				border:1px solid #000000;

	}
	table
	{
		margin-left:10px;
	}
	
		</style>
		
</head>
<body>
<?php include("header.php"); ?>
		<div class="container-fluid">
		
		<div class="row background">
		
			<div class="col-sm-12 form">
			<center><h4 class="admin pt-2 pb-3 font-weight-bold">View Property</h4></center>
				<?php echo $status; ?>
			</div>
			
		</div>
		</div>


</body>

</html>