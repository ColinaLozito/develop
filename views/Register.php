<div class="user-form">
	
	<form action="<?php echo URL."create_user"; ?>" method="post">
		<div>
			<label>Name:</label>
			<input type="text" name="username" placeholder="e.g: Luis Colina" required maxlength="100">
		</div>
		<div>
			<label>Country:</label>
			<select name="country" required>
					<option>-- select --</option>
				<?php foreach (COUNTRIES as $country => $value): ?>
					<option value="<?php echo $country ?>"><?php echo $value ?></option>
				<?php endforeach ?>
			</select>
		</div>
		<div>
			<label>email:</label>
			<input type="email" name="email" placeholder="E.g: Example@any.com" required maxlength="50">
		</div>
		<div>
			<label>password</label>
			<input type="password" name="password" placeholder="*****" required maxlength="16">
		</div>
		<div>
			<input type="submit" value="Register">
		</div>
	</form>
	
</div>