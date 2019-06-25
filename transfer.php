<!DOCTYPE html>
<html>
<head>
	<title>Credit Management System</title>
</head>
<body>
	<div id="heading"><h1>Credit Management System</h1></div><br/><br/>
	<a href="home.html">Back</a>
	<form method="post" action="">	
				<input type="text" name="from" placeholder="From" required /><br/>
				<input type="text" name="to" placeholder="To" required /><br/>				
				<input type="text" name="amount" placeholder="Amount" required /><br/>				
				<input type="reset" value="Reset" name="Reset"  />
				<input type="submit" value="Submit" name="submit" /><br/><br/>
	</form>	
	<?php
			$con=mysqli_connect('localhost','id6152794_root','root123');
			$db=mysqli_select_db($con,'id6152794_credit_mgt');
			
			if($con){
			if($db){
				if(isset($_POST['submit'])){
					$from=$_POST['from'];
					$to=$_POST['to'];
					$amount=$_POST['amount'];
				if(!empty($from) && !empty($to) && !empty($amount)){
					$query="";
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
</body>
</html>