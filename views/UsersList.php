<h2>USERS LIST</h2>
<?php 
require 'search.php';
 ?>

<div class="users-list">
	<table class="users-table">
		<tr class="table-head">
			<th>Name</th>
			<th>Country</th>
			<th>Email</th>
			<th>Action</th>
		</tr>
		<?php foreach ($users as $user): ?>
		<tr class="table-content">
			<td><?php echo $user->username; ?></td>
			<td><?php echo COUNTRIES[$user->country]; ?></td>
			<td><?php echo $user->email; ?></td>
			<td><a href="<?php echo URL."edit/".$user->id; ?>"><button>EDIT</button></a></td>
			<td><a href="<?php echo URL."delete_user/".$user->id; ?>"><button>DELETE</button></a></td>
		</tr>
		<?php endforeach ?>
	</table>
</div>