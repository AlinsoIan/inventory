<?php
    
session_start();

if(isset($_SESSION['user'])){
    if($_SESSION['type'] == 'admin'){
        header('Location:admin/dashboard.php');
    }else{
        header('Location:user/dashboard.php');
    }
}

?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Login form using HTML5 and CSS3</title>
      <link rel="stylesheet" href="css/style2.css">
</head>

<body>

  <body>
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

		</form><!-- form -->
	</section><!-- content -->
</div><!-- container -->
</body>
  


</body>

</html>
