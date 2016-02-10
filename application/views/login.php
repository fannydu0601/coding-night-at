<!DOCTYPE html>
	<html lang ="en">
		<head> 
		  <meta charset="utf-8">
		  <title> Login </title>
		</head>
				
		<body>
			<table>
				<tr><td>Username:</td></tr>
				<tr><td>
					<?= form_input("username")?>
				</td></tr>
				<tr><td>Password:</td></tr>
				<tr><td>
					<?= form_password("password")?>
				</td></tr>
				<tr><td>
					<?= form_submit("submit","Login")?>
				</td></tr>
			
			</table>
			<?= form_close()?>
		
		</body>
</html>