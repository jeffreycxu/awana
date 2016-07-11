
<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Device resize -->
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	
	<title>Submission Script</title>

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

	<!-- For Internet Explorer 9 -->
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
				<li><a href="forms.php"><i class="fa fa-edit"></i> Attendance Submission</a></li>
				<li><a href="bookforms.php"><i class="fa fa-edit"></i> Book Submission</a></li>
			</ul>
		</nav>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						<h2 class="page-title">Database submission page</h2>
						
						<!-- PHP that submits form info to server database -->
						<?php
                        $con = mysql_connect("158.69.60.74","admin_awana","testpass1");
                        if (!$con)
                        {
                        die('Could not connect: ' . mysql_error());
                        }
						//Submit to server
						mysql_select_db("admin_awana", $con);
                        $sql="INSERT INTO section (name, date, book, sections)
                        VALUES
                        ('$_POST[name]','$_POST[date]','$_POST[book]','$_POST[sections]')";
                        if (!mysql_query($sql,$con))
                        {
                        die('Error: ' . mysql_error());
                        }
                        echo "Success, attendance record added to our database!";
                        mysql_close($con)
                        ?>
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