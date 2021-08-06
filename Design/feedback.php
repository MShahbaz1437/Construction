<?php include("function.php"); ?>
<?php
$status="";
if(isset($_POST["btn1"]))
{
	extract($_POST);
	$date=date("y-m-d");
	$qry="insert into feedback(feedname,feedemail,feedsubject,feedmsg,date)values('$fname','$femail','$fsub','$fmsg','$date')";
	$rs=executequery($qry);
	if($rs)
	{
		$status="<h3>Your Feedback Submit Successful</h3>";
	}
	else
	{
		$status="<h3>Error TO Submit Feedback</h3>";

	}
}

?>

<html>
<head>
	<title>FeedBack</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="construction.css">
</head>
<body>
	<?php include("head.php"); ?>
<div class="container-fluid">
	<div class="row feedback">
		<div class="col-sm-12">
		<b id="feedback">FEEDBACK</b>
		</div>
	</div>
	<div class="row">
			<div class="col-sm-1">
			</div>

		<div class="col-sm-4">
			<?php echo $status; ?>

			<form id="frm" name="frm" action="" method="post">
			<div class="form-group">
				<label for="exampleFormControlInput1"><strong>Enter Name</strong></label>
				<input type="text" class="form-control" id="fname"  name="fname"  placeholder="Enter Your Name">
			  </div> 
			 <div class="form-group">
				<label for="exampleFormControlInput1"><strong>Email address</strong></label>
				<input type="email" class="form-control" id="femail"  name="femail"  placeholder="name@example.com">
			  </div>
			  <div class="form-group">
				<label for="exampleFormControlInput1"><strong>Subject</strong></label>
				<input type="text" class="form-control" id="fsub"  name="fsub"  placeholder="Enter Your Feedback Subject">
			  </div>			  
			  <div class="form-group">
				<label for="exampleFormControlTextarea1"><strong>Message</strong></label>
				<textarea class="form-control" id="fmsg"  name="fmsg"  cols=""3 rows="3" placeholder="Write Message"></textarea>
			  </div>
			    <button type="submit" id="btn1" name="btn1"  class="btn btn-primary mb-2">Submit</button>
			</form>
		</div>
			<div class="col-sm-1">
		</div>		
			
		<div class="col-sm-6">
					<img src="feedback.jpg"  class="img-responsive " style="height:400px;width:400px; margin-top:5px;" />

		</div>
	</div>	
</div>
	<?php include("footer.php"); ?>

</body>
</html>