<!DOCTYPE html>
<html>
<head>
	<title>Credit Management System</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js" ></script>
	<script type="text/javascript" src="bootstrap/jquery-3.3.1.min.js" ></script>
	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
	<link rel="stylesheet" href="css/demo.css"> <!-- Demo style -->
</head>
<body>
	<header class="cd-main-header">
		<nav class="cd-main-nav js-main-nav">
			<ul class="cd-main-nav__list js-signin-modal-trigger">
				
				<li><a class="cd-main-nav__item cd-main-nav__item--signup" href="view.php" >Back</a></li>
			</ul>
		</nav>
		<center><h1 style="color:#fff;font-family: sans-serif;font-size:45px;letter-spacing:10px;word-spacing:30px;padding-top:10px;">Credit Management System</h1></center>
	</header>
		<br/><br/>
		<center><h2 style="font-size:25px;">Now, select the receiver name by clicking on their name</h2></center><br/>
	<?php
		
		$con=mysqli_connect('localhost','id6152794_root','root123');
			$db=mysqli_select_db($con,'id6152794_credit_mgt');
		
		if($con){
			if($db){
					$id=$_GET["id"];
					$sql=mysqli_query($con,"SELECT * FROM user_record WHERE id=$id");
					while ($row=mysqli_fetch_assoc($sql)) {
						echo '<center><p style="font-size:20px;">Sender Name : '.$row['name'].'<br/>Credit Score : '.$row['score'].'</p></center>';
					}
				}
		}else{
			die('Some went wrong...');
		}
?>

<?php
		
		$con=mysqli_connect('localhost','id6152794_root','root123');
		$db=mysqli_select_db($con,'id6152794_credit_mgt');
		
		if($con){
			if($db){
					$id=$_GET["id"];
					$query=mysqli_query($con,"select * from user_record where id<>$id");
						echo '<table class="table table-responsive table-bordered table-hover" >
								<tr class = bg-info>
									<th>Id</th>
									<th>Name</th>
									<th>Email</th>
									<th>Credit Score</th>
								</tr>';
						while ($row=mysqli_fetch_assoc($query)) {
							echo '	<tr>
										<td>' . $row['id'] . '</td>	
										<td>'; ?><a href="transaction.php?from=<?php echo $id; ?>&to=<?php echo $row["id"]?>" ><?php echo $row["name"]; ?></a><?php echo '</td>						
										<td>' . $row['email'] . '</td>
										<td>' . $row['score'] . '</td>
									</tr>';	
						}
						echo '</table>';
				}
		}else{
			die('Some went wrong...');
		}
?>
</body>
</html>



