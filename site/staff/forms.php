
<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Adjust dynamically for different devices -->
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	
	<title>Attendance Submissions</title>

	<!-- Font awesome -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Sandstone Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Bootstrap Datatables -->
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<!-- Bootstrap social button library -->
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<!-- Bootstrap select -->
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<!-- Bootstrap file input -->
	<link rel="stylesheet" href="css/fileinput.min.css">
	<!-- Awesome Bootstrap checkbox -->
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<!-- Admin Stye -->
	<link rel="stylesheet" href="css/style.css">

	<!-- For Internet Explorer -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<div class="brand clearfix">
		<a href="index.html" class="logo"><img src="img/logo.jpg" class="img-responsive" alt=""></a>
		<span class="menu-btn"><i class="fa fa-bars"></i></span>
		
	</div>

	<div class="ts-main-content">
		<nav class="ts-sidebar">
			<ul class="ts-sidebar-menu">
				<!-- Link Menu -->
				<li class="ts-label">Staff</li>
				<li><a href="index.html"><i class="fa fa-dashboard"></i> Home</a></li>
				<li><a href="tables.php"><i class="fa fa-table"></i>Records</a></li>
				<li class="open"><a href="forms.php"><i class="fa fa-edit"></i> Attendance Submission</a></li>
				<li><a href="bookforms.php"><i class="fa fa-edit"></i> Book Submission</a></li>

			</ul>
		</nav>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">
					
						<h2 class="page-title">Attendance Submission</h2>

						<div class="row">
							<div class="col-md-6">
								<div class="panel panel-default">
									<div class="panel-heading">Absence form</div>
									<div class="panel-body">
									    <!-- Form submit script -->
										<form action="attendancesubmit.php" method="post">
                                          Name (Ex. Joshua Huang): <br>
                                          <input type ="text" name = "name" class="form-control" required type="text"/><br>
                                          <br>
                                          Date (MM/DD/YYYY): <br>
										  <!-- Date Autofill -->
                                          <input name="date" class="form-control" id="item34_date_1" required type="text"
                                          data-hint="" value="<?php echo date('m/d/Y'); ?>" />
                                          <br>
										  <br>
										  Class (Cubbies, 6): <br>
                                          <input type ="text" name = "grade" class="form-control"/><br>
                                          <br>
										  Classification (Cubbies, Sparks, T&T): <br>
                                          <input type="radio" name="type" value="Cubbies"> Cubbies<br>
                                          <input type="radio" name="type" value="Sparks"> Sparks<br>
                                          <input type="radio" name="type" value="T&T"> T&T<br>
                                          <input type="radio" name="type" value="LIT"> LIT<br><br>
                                          Absent:<br>
                                          <input type="radio" name="absent" value="Yes"> Yes<br>
                                          <input type="radio" name="absent" value="No"> No<br><br> 
                                          <input type="submit" name="Submit" value="Submit" class="btn btn-info/>

									</div>
								</div>
							</div>


					</div>
				</div>
				
				<div class="row">
					<div class="clearfix pt pb">

					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>

</body>

</html>