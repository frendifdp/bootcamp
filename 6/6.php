<?php
 $conn = mysqli_connect("localhost", 'root', '', 'bootcamp');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<title></title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
</head>
<body>

<?php
$sql = "SELECT users.id as id, users.name as nama, skills.name as skill from users inner join skills on users.id=skills.user_id";
$result = $conn->query($sql);
?>

<div class="container">
	<div class="row">
		<div class="col-lg-6 col-md-12 col-sm-12">
			<table class="table">
				<thead>
					<tr>
						<th>Nama</th>
						<th>Skill</th>
					</tr>
				</thead>
				<tbody>
					<?php
						if($result->num_rows > 0){
							while($row = $result->fetch_assoc()){
						?>
					<tr>
						<td><?=$row['nama']?></td>
						<td><?=$row['skill']?></td>
					</tr>
					<?php
							}
						}
						?>
				</tbody>
			</table>
		</div>
		<div class="col-lg-6 col-md-12 col-sm-12">
			<br>
			<form method="post" action="upload.php">
				<div class="form-group">
					<label>Nama</label>
					<input type="text" name="name" class="form-control">
				</div>
				<div class="form-group">
					<label>Skill</label>
					<input type="text" name="skill" class="form-control">
				</div>
				<input type="submit" value="Submit" class="btn btn-success">
			</form>
		</div>
	</div>
</div>

<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>
</body>
</html>
<?php
 mysqli_close($conn);
?>