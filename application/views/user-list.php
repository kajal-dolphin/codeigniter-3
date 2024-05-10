<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>User <Details></Details></title>
</head>
<body>
	<h1>User Details</h1>
	<table>
		<thead>
			<tr>
				<th>First Name</th>
				<th>Role</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($users as $user):  ?>
			<tr>
				<td>
					<?php echo $user->firstname; ?> 
				</td>
				<td>
					<?php echo $user->role; ?>
				</td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</body>
</html>
