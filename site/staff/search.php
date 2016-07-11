<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	
	<title>Attendance Records</title>

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

			<!-- Menu -->
				<li class="ts-label">Staff</li>
				<li><a href="index.html"><i class="fa fa-dashboard"></i> Home</a></li>
				<li><a href="tables.php"><i class="fa fa-table"></i>Records</a></li>
				<li><a href="forms.php"><i class="fa fa-edit"></i> Attendance Submission</a></li>
				<li><a href="bookforms.php"><i class="fa fa-edit"></i> Book Submission</a></li>
			</ul>
		</nav>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						<h2 class="page-title">Attendance Records for Member</h2>
						<a href="tables.php" class="btn btn-success">Back to main table</a>
						<br>
						<br>
		                <div class="panel panel-default">
								<div class="panel-heading">Database Table</div>
								<div class="panel-body">
									<table class="table table-bordered table-striped">
										<thead>
											<tr>
												<th>Name</th>
												<th>Date</th>
												<th>Grade</th>
												<th>Classified</th>
												<th>Absent</th>
											</tr>
										</thead>
										<tbody>
											<?php
												if(isset($_POST['submit'])){
													if(isset($_GET['go'])){
														if(preg_match("/^[  a-zA-Z]+/", $_POST['name'])){
															$name=$_POST['name'];
															$db=mysql_connect  ("158.69.60.74", "admin_awana",  "password") or die ('I cannot connect to the database  because: ' . mysql_error());
															$mydb=mysql_select_db("admin_awana");
															$sql="SELECT  name, date, grade, type, absent FROM people WHERE name LIKE '%" . $name .  "%' OR date LIKE '%" . $name ."%'";
															$result=mysql_query($sql);
																while($row=mysql_fetch_array($result)){
																	$name  =$row['name'];
																	$date=$row['date'];
																	$grade=$row['grade'];
																	$type=$row['type'];
																	$absent=$row['absent'];
																	echo "<td>".$row[name]."</td>";
																	echo "<td>".$row[date]."</td>";
																	echo "<td>".$row[grade]."</td>";
																	echo "<td>".$row[type]."</td>";
																	echo "<td>".$row[absent]."</td>";
																	echo "</tr>";
																}
															}
															else{
																echo  "<p>Please enter a search query</p>";
															}
													}
												}
											?>
										</tbody>
									</table>
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

	<!-- Loading Scripts -->
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
