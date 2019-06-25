<!DOCTYPE html>
<html>
<head>
	<title>Credit Management System</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js" ></script>
	<script type="text/javascript" src="bootstrap/jquery-3.3.1.min.js" ></script>
	<style>
			.signup-box{
				width:350px;
				border:1px solid #000;
				position:relative;
				left:450px;
				padding:15px 15px;
			}
		
	</style>
	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
	<link rel="stylesheet" href="css/demo.css"> <!-- Demo style -->
</head>
<body>
	<header class="cd-main-header">
		<nav class="cd-main-nav js-main-nav">
			<ul class="cd-main-nav__list js-signin-modal-trigger">
				
				<li><a class="cd-main-nav__item cd-main-nav__item--signup" href="home.html" >Back</a></li>
			</ul>
		</nav>
		<center><h1 style="color:#fff;font-family: sans-serif;font-size:45px;letter-spacing:10px;word-spacing:30px;padding-top:10px;">Credit Management System</h1></center>
	</header>
		<br/><br/><br/><br/>
	<?php
			$success_message="";
	?>	
	<div class="signup-box">			
			<form method="post" action="" enctype="multipart/form-data">
				<center><img src="images/user.png" style="width:120px;height:120px;position:relative;top:-50px;" /></center>				
				<input type="text" name="name" placeholder="Name" class="form-control mr-sm-2" required /><br/>
				<input type="email" name="email" placeholder="Email" class="form-control mr-sm-2" required /><br/>
				<input type="text" name="score" placeholder="Credit score" class="form-control mr-sm-2" required /><br/><br/>
				<input type="reset" class="btn btn-danger" value="Reset" name="Reset" style="width:50%;float:left;" />
				<input type="submit" class="btn btn-success" value="Submit" name="submit" style="width:50%;float:right;" /><br/><br/>
			</form>	
		</div><br/>
	<?php
			$con=mysqli_connect('localhost','id6152794_root','root123');
			$db=mysqli_select_db($con,'id6152794_credit_mgt');
			
			if($con){
			if($db){
				if(isset($_POST['submit'])){
					$name=$_POST['name'];
					$email=$_POST['email'];
					$score=$_POST['score'];
				if(!empty($name) && !empty($score)){
					$query="INSERT INTO `credit_mgt`.`user_record` (`id`, `name`, `email`, `score`) VALUES (NULL, '$name', '$email', '$score');";
					if(mysqli_query($con,$query)){						
						$success_message = '<div class="alert alert-success">You have registered successfully.</div>';
					}
				   }else{
					   $success_message = '<div class="alert alert-danger">Please fill all the fields before submitting.</div>';
				   }
				}
			  }else die('database not found !');
			}else{
					die('Can not connect to mysql');
				}
		?>
		<center>
		<div class="error"><?php echo $success_message; ?></div>	
		</center>
		
</body>
</html>