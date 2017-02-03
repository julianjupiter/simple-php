<!doctype html>
<html>
	<head>
		<title>Simple PHP - Phonebook - View</title>
	</head>
	<body>
		<h2>Phonebook</h2>
		<p>
			<a href="/index.php">Home</a> | 
			<a href="/index.php?page=phonebook">Phonebook</a> | 			
			<a href="/index.php?page=auth&action=login">Login</a>
		</p>
		<p>View Contact</p>
		<table>
			<tbody>
				<tr>
					<th style="text-align: right">ID</th>
					<td><?=$contact['id'];?></td>
				</tr>
				<tr>
					<th style="text-align: right">Name</th>
					<td><?=$contact['name'];?></td>
				</tr>
				<tr>
					<th style="text-align: right">Number</th>
					<td><?=$contact['number'];?></td>
				</tr>
			</tbody>			
		</table>
	</body>	
</html>
