<?php 

 session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Welcome to Detroit Phenoix center<?php echo($_SESSION['u_user_name']); ?></h1>
<form action="logout.php" method="post">
	<button name="logout" type="submit">logout</button>
</form>

</body>
</html>