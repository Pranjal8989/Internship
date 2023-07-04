<?php
include("connection.php")?>

<!DOCTYPE html>
<html>
<head>
	<title>CRUD: Create, Update, Delete PHP MySQL</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form method="POST" action="connection.php" >
	<div class="title">
			<label>Information form</label>
		</div>		
	<div class="input-group">
			<label>first name</label>
			<input type="text" name="fname" value="" required>
		</div>
		<div class="input-group">
			<label>last name</label>
			<input type="text" name="lname" value="" required>
		</div>
        <div class="input-group">
			<label>gender</label>
			<select name="gender" required>
				<option value="not select">select</option>
				<option value="female">female</option>
				<option value="male">male</option>
			</select>
		</div>
		<div class="input-group">
			<label>mobile no.</label>
			<input type="text" name="mobileno" value="" required>
		</div>
		<div class="input-group">
			<label>place</label>
			<input type="text" name="place" value="" required>
		</div>
		<div class="input-group">
			<button class="btn" type="submit" name="submit" >Save</button>
			<a href="display.php">display</a>
		</div>
	</form>
</body>
</html>


