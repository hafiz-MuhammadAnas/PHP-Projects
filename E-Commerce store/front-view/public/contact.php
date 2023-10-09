<!doctype html>
<html lang="en">
  <head>
	<title>Contact</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style>
		body{
			background-color: #25274d;
		}
		.contact{
			padding: 4%;
			height: 400px;
		}
		.col-md-3{
			background: #ff9b00;
			padding: 4%;
			border-top-left-radius: 0.5rem;
			border-bottom-left-radius: 0.5rem;
		}
		.contact-info{
			margin-top:10%;
		}
		.contact-info img{
			margin-bottom: 15%;
		}
		.contact-info h2{
			margin-bottom: 10%;
		}
		.col-md-9{
			background: #fff;
			padding: 3%;
			border-top-right-radius: 0.5rem;
			border-bottom-right-radius: 0.5rem;
		}
		.contact-form label{
			font-weight:600;
		}
		.contact-form button{
			background: #25274d;
			color: #fff;
			font-weight: 600;
			width: 25%;
		}
		.contact-form button:focus{
			box-shadow:none;
		}
	</style>
  </head>
  <body>
  <?php
 
 include("header.php");
 ?>
	<div class="container contact">
		<div class="row">
			<div class="col-md-3" style="background-color:#F5527B;">
				<div class="contact-info" >
					<img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image"/>
					<h2>Contact Us</h2>
					<h4>We would love to hear from you !</h4>
				</div>
			</div>
			<div class="col-md-9 " style="background-color:#F1BFBF;" >
				<div class="contact-form">
					<div class="form-group">
					  <label class="control-label col-sm-2" for="fname">First Name:</label>
					  <div class="col-sm-10">          
						<input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="fname">
					  </div>
					</div>
					<div class="form-group">
					  <label class="control-label col-sm-2" for="lname">Last Name:</label>
					  <div class="col-sm-10">          
						<input type="text" class="form-control" id="lname" placeholder="Enter Last Name" name="lname">
					  </div>
					</div>
					<div class="form-group">
					  <label class="control-label col-sm-2" for="email">Email:</label>
					  <div class="col-sm-10">
						<input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
					  </div>
					</div>
					<div class="form-group">
					  <label class="control-label col-sm-2" for="comment">Comment:</label>
					  <div class="col-sm-10">
						<textarea class="form-control" rows="5" id="comment"></textarea>
					  </div>
					</div>
					<div class="form-group">        
					  <div class="col-sm-offset-2 col-sm-10">
						<button  style="background-color:#F5527B;" type="submit" class="btn btn-default">Submit</button>
					  </div>
					</div>
				</div>
			</div>
		</div>
	</div>

	
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <?php
 
 include("footer.php");
 ?>
</html>