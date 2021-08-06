<?php include("function.php"); ?>
<?php
$jobid="";
$jobname="";
$jobdetails="";
$jobpost="";
$joblocation="";
$date="";
$status="";

	$qry="select * from job";
	$rs=readrecord($qry);
	$status.="<table>";
	$status.="<tr>";
	$status.="<th> Id</th>";
	$status.="<th>Name</th>";
	$status.="<th>Detail</th>";
	$status.="<th>Post</th>";
	$status.="<th>Location</th>";
	$status.="<th>Last Date</th>";
	$status.="<th>Contact</th>";
	
	$status.="</tr>";
	while($row=mysql_fetch_array($rs))
	{
	$status.="<tr>";
	$status.="<td>$row[0]</td>";
	$status.="<td>$row[1]</td>";
	$status.="<td>$row[2]</td>";
	$status.="<td>$row[4]</td>";
	$status.="<td>$row[5]</td>";
	$status.="<td>$row[6]</td>";
	$status.="<td>$row[3]</td>";


	$status.="</tr>";
	}
	$status.="</table>";
	

?>
<html>
<head>
	<title>Job</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
						<link rel="stylesheet" href="construction.css">

		<style type="text/css">
	
	table
	{
		color:#000000;
		width:800px;
		margin-left:500px;
		text-align:center;
		margin-top:10px;
		background-color:#D2D2D2;
	}
	th
	{
		text-align:center;
		height:50px;
		font-size:25px;
	}
	th:hover
	{
		background-color:#cccccc;
		color:#ffffff;
		height:50px;
		
	}
	td
	{
		font-weight:bold;
		padding:5px;
		padding-left:10px;
		background-color:#D2D2D2;
		font-size:20px;


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
	td
	{
				border:1px solid #000000;

	}
	table
	{
		margin-left:10px;
		margin-top:30px;
		
	}
	
		</style>
		
</head>
<body>
<?php include("head.php"); ?>
<div class="container-fluid" >
	<div class="row" id="job">
		<div class="col-sm-12">
		<b id="job">Job</b>
		</div>
	</div>
</div>
	<div class="container-fluid ">
		<div class="row job ">
			<div class="col-sm-1 form">
			</div>
			<div class="col-sm-8 form">
					<?php echo $status;?>
			</div>
		</div>
	</div>
	<?php include("footer.php"); ?>
	


</body>

</html>