<!doctype html>
<html>
	<head>
		<title>Simple PHP - Phonebook - Add</title>
	</head>
	<body>
		<h2>Phonebook</h2>
		<p>
			<a href="/index.php">Home</a> | 
			<a href="/index.php?page=phonebook">Phonebook</a> | 			
			<a href="/index.php?page=auth&action=login">Login</a>
		</p>
		<p>Add Contact</p>
		<form action="/index.php?page=phonebook&action=add" method="post">
			<label>Name</label>
			<input type="text" name="name">
			<br>
			<label>Number</label>
			<input type="text" name="number">
			<br>
			<button type="submit">Save</button>
		</form>		
	</body>	
</html>
