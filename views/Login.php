<?php 
require'menu1.php';
 ?>
<h1>Login</h1>
<form action="<?php echo URL."login"; ?>" method="post">
	<div>
		<label>User Email</label>
		<input type="text" name="email">
	</div>
	<div>
		<label>Password</label>
		<input type="password" name="password">		
	</div>
	<div>
		<input type="submit" name="submit">
		<a href="<?php echo URL."register" ?>">Sing Up</a>
	</div>
</form>