<?php 
require'menu2.php';
 ?>
<h2>User Edit Form</h2>

<div class="register-form-box">
	
	<form class="register-form" action="<?php echo URL."edit_user/".$user->id; ?>" method="post">
		<input type="hidden" name="id" value="$user->id" style="display: none;">
		<div>
			<label>Name:</label>
			<input type="text" name="username" value="<?php echo $user->username ?>">
		</div>
		<div>
			<label>Country: </label>			
			<select name="country">
					<option>-- select --</option>
				<?php foreach ($view_variables->countries as $country => $value): ?>
					<option value="<?php echo $country ?>" <?php if($country == $user->country){echo "selected";} ?> > <?php echo $value; ?> </option>
				<?php endforeach ?>
			</select>
		</div>
		<div>
			<label>email:</label>
			<input type="email" name="email" value="<?php echo $user->email ?>" style="pointer-events:none; background-color: lightgrey;">
		</div>
		<div>
			<label>password</label>
			<input type="password" name="password" value="<?php echo base64_decode($user->password) ?>">
		</div>
		<div>
			<input class="button" type="submit" value="Save">
			<a href="<?php echo URL."users_list" ?>">Back</a>
		</div>
	</form>
	
</div>