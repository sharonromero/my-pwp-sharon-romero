<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<title>Personal Web Project</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
		integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

			<!--jQuery files for Bootstrap-->
		<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

		<!--external stylesheet-->
		<link type="text/css" href="css/stylesheet.css" rel="stylesheet" />

		<!-- jQuery Form, Additional Methods, Validate -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>

		<!-- Your JavaScript Form Validator -->
		<script src="javascript/javascript-validator.js"></script>

		<!--Recaptcha snippet-->
		<script src='https://www.google.com/recaptcha/api.js'></script>
	</head>

	<body>
		<!--Link Buttons-->
		<div class="container-fluid mt-2">
			<nav class="nav">
				<a class="nav-link about text-white" href="#!">About</a>
				<a class="nav-link contact text-white" href="#!">Contact</a>
			</nav>
		</div>

		<!--main header-->
		<div class="jumbotron">
			<h1 class="display-2 text-danger">Sharon Romero</h1>
			<hr class="my-2">
			<!--<p>Welcome to my website!</p>-->
		</div>

		<!--divider line between jumbotron and text & image area
		<div class="border-top my-3"></div>-->



		<!--text about website-->
		<div class="container mt-5">
			<div class="row no-gutters">
				<div class="col-12 col-sm-6 col-md-8">
					<p>Hello! Welcome to my website.</p>
					<p>I am an aspiring web developer who has recently graduated from the Deep-Dive Coding
						Bootcamp. For the past 10 weeks I have done nothing but code. I know first-hand that becoming a web
						developer is no easy task. It takes a lot of hours and determination	to become a web developer. As
						I'm sure you are aware, there is a lot of information available that can help budding web
						developers learn all they need to know to become a great web developer but with so much information
						available, it can be hard figuring out where to start. Throughout the 10 weeks I was in the
						bootcamp, I came across some great resources that are helpful to new web developers. I have listed
						some of them below.</p>
				</div>

				<!--place for image-->
				<div class="col-6 col-md-4">
					<img src="https://news.nationalgeographic.com/content/dam/news/2018/05/17/you-can-train-your-cat/02-cat-training-NationalGeographic_1484324.ngsversion.1526587209178.adapt.1900.1.jpg" width="400" height="300" alt="Man with backpack"/>

				</div>
			</div>
		</div>

		<!--divider line between text & image area and form
		<div class="border-bottom my-3"></div>-->

		<!--Form-->
		<div class="container">
			<h4 class="text-primary">Contact Me</h4><br>

			<form id="pwp-form" action="php/mailer.php" method="post">
			<div class="form-group text-primary">
				<label for="firstname">First Name:</label>
				<input type="text" class="form-control" id="firstname">
			</div>

			<div class="form-group text-primary">
				<label for="lastname">Last Name:</label>
				<input type="text" class="form-control" id="lastname">
			</div>

			<div class="form-group text-primary">
				<label for="emailaddress">Email Address:</label>
				<input type="email" class="form-control" id="emailaddress">
			</div>

			<div class="form-group text-primary">
				<label for="comments">Comments:</label>
				<textarea name="comments" rows="4" cols="60" maxlength="250" placeholder="250 characters max"
							 id="comments"></textarea>
			</div>


				<!-- Recaptcha -->
				<div class="g-recaptcha" data-sitekey="6LeZI30UAAAAAPVxdBfr5ksmC3jkUoB8xPrTiMWN"></div>

				<!--Submit button-->
					<p><input type="submit" value="Submit"></p>
			</form>

			<div class="row">
				<div class="col-xs-12">
					<div id="output-area"></div>
				</div>
			</div>
		</div>

	</body>

</html>