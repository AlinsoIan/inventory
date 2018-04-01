<?php
    
session_start();

if(isset($_SESSION['user'])){
    if($_SESSION['type'] == 'admin'){
        header('Location:admin/dashboard.php');
    }else{
        header('Location:user/issuance.php');
    }
}

?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Login</title>
      <link rel="stylesheet" href="css/style2.css">
</head>

<body>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="container">
	<section id="content">
		<form action="php/login.php" method="post">
			<h1>Login</h1>
			<div>
				<input type="text" name="username" placeholder="Username" required="" id="username" />
			</div>
			<div>
				<input type="password" name="password" placeholder="Password" required="" id="password" />
			</div>
			<div>
				<input type="submit" value="Log in" />
			</div>

		</form>
	</section>
</div>
</body>
 

</html>
