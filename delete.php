<!DOCTYPE html>
<html>
<head>
	<title>Credit Management System</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js" ></script>
	<script type="text/javascript" src="bootstrap/jquery-3.3.1.min.js" ></script>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
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
			$con=mysqli_connect('localhost','id6152794_root','root123');
			$db=mysqli_select_db($con,'id6152794_credit_mgt');
			
				if($con){ 
					if($db){
						$sql = "select * from user_record";  
						$res = mysqli_query($con,$sql);
						echo '<table class="table table-responsive table-bordered table-hover" >
								<tr class = bg-info>
									<th>Id</th>
									<th>Name</th>
								</tr>';
						while ($row=mysqli_fetch_assoc($res)) {
							echo '	<tr>
										<td>' . $row['id'] . '</td>	
										<td>'; ?><a href="redirect.php?id=<?php echo $row["id"]; ?>" ><?php echo $row['name']; ?></a><?php '</td>						
									</tr>';	
						}
						echo '</table>';
					}
				
				}else{
					die('failed to connect .');
				}
				
				
			?>
</body>
</html>