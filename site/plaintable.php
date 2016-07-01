
<!doctype html>
<html lang="en" class="no-js">

<head>

	<title>Attendance Records</title>

</head>

<body>
	<p>This page is only for diagnostics</p>
	<br>
	<?php
	$server = mysql_connect("158.69.60.74","admin_awana", "testpass1");
	$db =  mysql_select_db("admin_awana",$server);
	$query = mysql_query("select * from people");
	?>
				<!--<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Name</th>
							<th>Date</th>
							<th>Absent</th>
							</tr>
						</thead>
						<tbody> -->
						<?php
						while ($row = mysql_fetch_array($query)) {
						echo "<tr>";
						echo "<td>".$row[name]."</td>";
						echo "<td>".$row[date]."</td>";
						echo "<td>".$row[absent]."</td>";
						echo "</tr>";
						}
						?>
						</tbody>
				</table>
</body>

</html>
