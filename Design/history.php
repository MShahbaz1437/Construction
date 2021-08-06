<?php include("function.php"); ?>
<?php
session_start();
$hid="";
$htitle="";
$hdetail="";
$hpath="";
$hdate="";
$status="";
$date="";
	$qry="select * from history";
	$rs=readrecord($qry);
	$status.="<div class='container-fluid'>";
		$status.="<div class='row'>";
			while($row=mysql_fetch_array($rs))
			{
				$status.="<div class='col-sm-4'>";
				$status.="<img src='../admin/$row[3]' height='200px' width='400px;' style='margin-top:5px;'/>";
				$status.="<h3>$row[1]</h3>";
				$status.="<h3>$row[2]</h3>";
				$status.="<h3>$row[4]</h3>";
				$status.="<h3><a href='historyview.php?id=$row[0]'>View More Detail</a></h3>";
				
				$status.="</div>";
			}
			
		$status.="</div>";
	$status.="</div>";
	
	
	/* $status.="<table id='table1' style='margin-left:100px;' bodrder='1'>";
	$status.="<tr>";
	$status.="<th> id</th>";
	$status.="<th>Title</th>";
	$status.="<th>Detail </th>";
	$status.="<th>Photo</th>";
	$status.="<th>Date</th>";
	
	$status.="</tr>";
	
	while($row=mysql_fetch_array($rs))
	{
		$status.="<tr>";
		$status.="<td>$row[0]</td>";
		$status.="<td>$row[1]</td>";
		$status.="<td>$row[2]</td>";
		$status.="<td><img src='../admin/$row[3]' height='100px' width='200px' /></td>";
		$status.="<td>$row[4]</td>";
		$status.="</tr>";
		}
	$status.="<table>"; */

?>
<html>
<head>
	<title>View Property</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
				<link rel="stylesheet" href="construction.css">

		<style type="text/css">

		</style>
		
</head>
<body>
	<?php include("head.php"); ?>
<div class="container-fluid">
	<div class="row feedback">
		<div class="col-sm-12">
			<b id="feedback">HISTORY</b>
		</div>
	</div>
	
			<?php echo $status; ?>
		
</div>
	<?php include("footer.php"); ?>

</body>
</html>