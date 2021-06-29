<!DOCTYPE html>
<html>
<head>
	<title></title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Dancing+Script" rel="stylesheet">
</head>
<body class="container">
	<h1 class="text-center text-danger mb-5" 
	style="font-family: 'Abril Fatface', cursive;"> EasyBuy </h1>

	<div class="row">

	<?PHP

	include 'formcon.php';

	// if($con){
	// 	echo "connection succussful";
	// }else{
	// 	echo "no connection";
	// }


	$query = " select * FROM sell order by sno";

	$queryfire = mysqli_query($con, $query);

	$num = mysqli_num_rows($queryfire);

	if($num > 0){
		while($product = mysqli_fetch_array($queryfire)){
			?>
			
		<div class="col-lg-3 col-md-3 col-sm-12">
			
			<form>
				<div class="card">
					<h6 class="card-title text-white p-2 text-uppercase" style="background-color: teal"> <?php echo
					 $product['proname'];  ?>   </h6>

					<div class="card-body">
						 <img src="<?php echo
					 $product['pic'];  ?>" alt="phone" class="img-fluid mb-2" >

					 <h6> Price:   &#8377; <?php echo $product['price'];  ?> </h6> 

					 <h6> Owner:   <?php echo $product['owner'];  ?> </h6> 

					 <h6> Contact: <?php echo $product['mobile'];  ?> </h6> 
					</div>
				</div>
			</form>

		</div>


	<?php		
		}
	}
	?>


</div>
</body>
</html>