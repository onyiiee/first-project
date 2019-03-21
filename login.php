<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Travel Booking</title>
  <link rel="stylesheet" type="text/css" href="../css/index.css">
</head>

<body>
  <a href="#openModal">Open Modal</a>
  <div id="openModal" class="modalDialog">
    <div>
      <a href="#close" tittle="Close" class="close">X</a>
  	<h2>Login</h2>
  </div>
  <h3>Dont have an account? Create One, its simple</h3>

 <button type="submit" class="btn" name="login_user"><a href="booking.php">Sign Up</button>
  
 <button type="submit" class="btn" name="login_user"><a href="forgot.php">forgot password?</button><br>
	 
  <form method="post" action="login.php">
  	<?php include('error.php'); ?>
  	<div class="input-group">
  		<label>Email</label>
  		<input type="text" name="email" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user"><a href="insert home page">Login</button>
        <button>cancel</button>
      </div>
  	</div>
  </div>
  	
  </form>
</body>
</html>