<!DOCTYPE html>
<html>
<head>
<title>Credit Management System</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js" ></script>
	<script type="text/javascript" src="bootstrap/jquery-3.3.1.min.js" ></script>
	<style>
		.loading{
			text-align:center;
			position:relative;
			top:250px;
			font-size:70px;
		}
	</style>
</head>
<body>
<?php
		
		$con=mysqli_connect('localhost','id6152794_root','root123');
		$db=mysqli_select_db($con,'id6152794_credit_mgt');
		
		if($con){
			if($db){
					$id=$_GET["id"];
					if(mysqli_query($con,"DELETE FROM user_record WHERE id=$id"))
						echo 'success';
					else
						echo 'fail';
				}
		}else{
			die('Error occurs...');
		}
?>
<h1 class="loading">Please Wait...</h1>
<script type="text/javascript">
	window.location="delete.php";
</script>
</body>
</html>