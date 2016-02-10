<!DOCTYPE html>
	<html lang ="en">
		<head> 
		  <meta charset="utf-8">
		  <title> Login </title>
		</head>
				
		<body>
		    <?= validation_errors()?>
			<?= form_open(current_url())?>
			<table>
				<tr><td>Username:</td></tr>
				<tr><td>
					<?= form_input("username")?>
				</td></tr>
				<tr><td>Password:</td></tr>
				<tr><td>
					<?= form_password("password")?>
				</td></tr>
				<tr><td>Firstname:</td></tr>
				<tr><td>
					<?= form_input("firstname")?>
				</td></tr>
				<tr><td>Lastname:</td></tr>
				<tr><td>
					<?= form_input("lastname")?>
				</td></tr>
				<tr><td>
					<?= form_submit("submit","Register")?>
				</td></tr>
			
			</table>
			<?= form_close()?>
		
		</body>
</html>