<?php
$conn = mysqli_connect("localhost", 'root', '', 'bootcamp');
$id = uniqid();
$user = $_POST['name'];
$skill = $_POST['skill'];
$query = "INSERT INTO users VALUES('$id', '$user')";
if($conn->query($query)){
}
$query = "INSERT INTO skills (name, user_id) VALUES('$skill', '$id')";
if($conn->query($query)){
	echo "<script>window.location='6.php'</script>";
}
?>