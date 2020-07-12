<!DOCTYPE html>
<html>
<head>
	<title>Student Payment Details</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">	<!-- <script src="bootstrap/js/bootstrap.min.js"></script> -->
	<script src="bootstrap/js/jquery.min.js"></script>
</head>
<body>
	
		<h1 class="text-center">Student Payment Details</h1>
		<form action="payment.php" method="POST">
			<div class="form-group">
				<label>Student Roll No :</label>
				<input type="number" name="roll" class="form-control" placeholder="Enter Roll">
			</div>
			<div class="form-group">
				<label>Student Name :</label>
				<input type="text" name="name" class="form-control" placeholder="Enter Student Name">
			</div>
			<div class="form-group">
				<label>Payment Date :</label>
				<input type="date" name="dop" class="form-control">
			</div>
			<div class="form-group">
				<label>Fees/Month :</label>
				<input type="number" name="fees" id="fee" class="form-control" placeholder="Enter Fees">
			</div>
			<div class="form-group">
				<label>Number of Months :</label>
				<input type="number" name="nmonth" id="nom" class="form-control" placeholder="Enter Number of Months">
			</div>
			<div class="form-group">
				<label>Total Amount :</label><!-- totalamount=feess/month*number of months -->
				<input type="number" name="tamount" id="tamt" class="form-control" readonly placeholder="Total Amount">
			</div>
			<div class="form-group">
				<label>Paid for the Months :</label>
				<input type="text" name="month" class="form-control" placeholder="Enter Months">
			</div>
			<div class="form-group">
				<input type="submit" name="ok" class="btn btn-primary" value="Submit">
			</div>
		</form>
	</div>
<div class="container" style="margin-top: 10px;">
	<div class="row">
		<div class="col-sm-12">
			<div class="form-group">
				<a href="#"><input type="submit" name="" value="View Payment Transactions" class="btn btn-primary"></a>
				<a href="#"><input type="submit" name="" value="View Total Payment History" class="btn btn-primary"></a>
			</div>
		</div>

</div>
</body>
</html>
<script>
	$(document).ready(function(){
		$('#fee,#nom').keyup(function(){
             var textValue1 =$('#fee').val();
             var textValue2 = $('#nom').val();
            $('#tamt').val(textValue1 * textValue2);
            
         });
	});
</script>