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
	<style>
	.signup-box{
				width:400px;
				border:1px solid #000;
				position:relative;
				left:450px;
				padding:30px 30px;
			}
	</style>
</head>
<body>
	<header class="cd-main-header">
		<nav class="cd-main-nav js-main-nav">
			<ul class="cd-main-nav__list js-signin-modal-trigger">
				
				<li><a class="cd-main-nav__item cd-main-nav__item--signup" href="view.php" >View</a></li>
			</ul>
		</nav>
		<center><h1 style="color:#fff;font-family: sans-serif;font-size:45px;letter-spacing:10px;word-spacing:30px;padding-top:10px;">Credit Management System</h1></center>
	</header>
		<br/><br/>
	<?php
			$success_message="";
			$sender_name="";
			$receiver_name="";
	?>	
	<center><h2 style="font-size:40px;letter-spacing:10px;word-spacing:20px;">Transaction Details :</h2></center><br/><br/>
<?php
		
		$con=mysqli_connect('localhost','id6152794_root','root123');
			$db=mysqli_select_db($con,'id6152794_credit_mgt');
		
		if($con){
			if($db){
					$from=$_GET["from"];
					$to=$_GET["to"];
					$sender=mysqli_query($con,"select * from user_record where id=$from");
					while($row=mysqli_fetch_assoc($sender)){
						$sender_name=$row['name'];
						$sender_amount=$row['score'];
					}
					$receiver=mysqli_query($con,"select * from user_record where id=$to");
					while($row=mysqli_fetch_assoc($receiver)){
						$receiver_name=$row['name'];
					}
					if(isset($_POST['submit'])){
						$amount=$_POST['amount'];
						if(!empty($amount)){
							if($sender_amount >= $amount){
								$query1="update user_record set score=score-$amount where id=$from;";
								$query2="update user_record set score=score+$amount where id=$to;";
								if(mysqli_query($con,$query1) && mysqli_query($con,$query2)){						
									$success_message = '<div class="alert alert-success">Transaction successfully committed.<a href="view.php"><strong>View</strong></a></div>';
								}
							}else $success_message = '<div class="alert alert-danger">You have not sufficient balance for tansaction.</div>';
						}else{
						   $success_message = '<div class="alert alert-danger">Transaction aborted! Please try again.</div>';
						} 
					}
				}
		}else{
			die('Some went wrong...');
		}
?>
	<div class="signup-box">			
			<form method="post" action="" enctype="multipart/form-data">		
				<p style ="font-family:Cambria (Headings);font-size:20px;line-height:20px;">Sender Name : <?php echo '<span style="color:#0000ff;">'.$sender_name.'</span>'; ?></p><br/>
				<p style ="font-family:Cambria (Headings);font-size:20px;line-height:20px;">Receiver Name : <?php echo '<span style="color:#0000ff;">'.$receiver_name.'</span>'; ?></p><br/>
				<p style ="font-family:Cambria (Headings);font-size:20px;line-height:20px;">Amount :</p><input type="text" name="amount" placeholder="Amount" class="form-control mr-sm-2" required /><br/>
				<input type="reset" class="btn btn-danger" value="Reset" name="Reset" style="width:50%;float:left;" />
				<input type="submit" class="btn btn-success" value="Submit" name="submit" style="width:50%;float:right;" /><br/><br/>
			</form>	
	</div><br/>
	<center><a href="view.php">View All</a></center>
	<center>
			<div class="error"><?php echo $success_message; ?></div>	
	</center>	
</body>
</html>