<?php include("function.php"); ?>
<?php

$status="";

	$qry="select * from sellproperty";
	$rs=readrecord($qry);
	$status.="<div class='container-fluid'>";
		$status.="<div class='row'>";
		
			while($row=mysql_fetch_array($rs))
			{
				$status.="<div class='col-sm-4'style='height:400px; margin-top:5px; border:1px solid #000000; float:left; margin-left:15px;' >";
					$status.="<img src='../admin/$row[9]' height='200px' width='400px' style='margin-top:2px;' />";
					$status.="<h5>$row[3]</h5>";
					$status.="<h5>$row[7]</h5>";
					$status.="<h5>$row[8]</h5>";
					$status.="<a href='sellview.php?id=$row[0]'>View</a>";
				$status.="</div>";
			}
		$status.="</div>";	
	$status.="</div>";
	
	
	
/* 	$status.="<table class='table  table-striped mt-3 '>";
  $status.="<thead class='thead-dark'>";
   $status.="<tr>";
      $status.="<th scope='col'>Property Id</th>";
      $status.="<th scope='col'></th>";
      $status.="<th scope='col'><br />Type</th>";
      $status.="<th scope='col'>Property Location</th>";
      $status.="<th scope='col'>Property City</th>";
      $status.="<th scope='col'>Property Landmark</th>";
      $status.="<th scope='col'>Property Detail</th>";
      $status.="<th scope='col'>Property Size</th>";
      $status.="<th scope='col'>Property Price</th>";
      $status.="<th scope='col'>Property <br />Photo</th>";
      $status.="<th scope='col'>Property Date</th>";
	  
    $status.="</tr>";
  $status.="</thead>";
  while($row=mysql_fetch_array($rs))
	{
  $status.="<tbody>";
  $status.= "<tr>";
      $status.="<td>$row[0]</td>";
      $status.="<td>$row[1]</td>";
      $status.="<td>$row[2]</td>";
      $status.="<td>$row[3]</td>";
      $status.="<td>$row[4]</td>";
      $status.="<td>$row[5]</td>";
      $status.="<td>$row[6]</td>";
      $status.="<td>$row[7]</td>";
      $status.="<td>$row[8]</td>";
		$status.="<td><img src='../admin/$row[9]' height='100px' width='200px' /></td>";
		$status.="<td>$row[10]</td>";
    $status.="</tr>";
  $status.="</tbody>";
	}
$status.="</table>"; */
	
	

?>
<html>
<head>
	<title>Sell Property</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<style type="text/css">
	
	
	
	
	</style>
		
</head>
<body>
<?php include("head.php"); ?>
<div class="container-fluid" id="headabout">
	<div class="row">
		<div class="col-sm-12">
		<b id="headabout">Sell</b>
		</div>
	</div>
</div>	
<div class="container-fluid">
		<div class="row ">
			<div class="col-sm-12">
				<?php echo $status; ?>
			</div>

		</div>
	</div>
<?php include("footer.php"); ?>


</body>

</html>