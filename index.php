<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Hawou Valentine's Gift</title>

	<!-- Bootstrap core CSS -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="css/the-big-picture.css" rel="stylesheet">
	
</head>

<body>

	<!-- Navigation -->
<!--   <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-bottom">
    <div class="container">
      <a class="navbar-brand" href="#">Start Bootstrap</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </div>
</nav> -->

<!-- Page Content -->
<!-- <section> -->
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<h1 class="mt-5">Good Morning Hawou</h1>
				<p>I hope you had you slept well and welcome to your valentine gift which contains others gifts that you'll have to find yourslef.</p>
				<p>Here Type a meanigful date to start</br>
				In the following format, 14 Feb : 1402</p>
			</div>
		</div>
		<form name="myForm" action="gift.php" onsubmit="return validateForm()" method="post">
			<input type="text" name="the_date" 
			minlength="4" maxlength="4">
			<input type="submit" value="Submit">
		</form> 
		<div>
			<p id="erros" name="erros"><p>
			</div>
		</div>
		<!-- </section> -->

		<!-- Bootstrap core JavaScript -->
<!--   <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
-->
</body>
<script>
	function validateForm() 
	{
		var submission = false ;
		var x = document.forms["myForm"]["the_date"].value;
		var er = document.getElementById("erros");
		if (x =="")
			er.innerHTML = "you speak english ? it says type something inside"
		else if (x == "1010") 
			er.innerHTML = "Naruto's birthday ? wouah what a creativity i know you love naruto but think harder";
		else if (x == "0411") 
			er.innerHTML = "Aww so sweet you remember my birthday but no try again";
		else if (x == "1402") 
			er.innerHTML = "Valentine date you serious ? try again";
		else if (x == "0607") 
			submission = true ;
		else if (x == "1910") 
		{
			// submission = true ;
			location.href = 'date.php';
		}
		else
			er.innerHTML = "Stop writing randoms stuff and try harder ";
		return submission;
	}
</script>
</html>
