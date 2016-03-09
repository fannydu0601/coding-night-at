<!DOCTYPE html>
<html lang ="en">
<head>
<meta charset="utf-8">
<title>Create Event</title>
</head>
<body>
	<h1>Create Event</h1>
			<?= validation_errors()?>
			<?= form_open(  'event/create' )?>
			<table>
				<tr><td>Event Title:</td></tr>
				<tr><td>
					<?= form_input("title")?>
				</td></tr>
				<tr><td>Date and time:</td></tr>
				<tr><td>
					<?= form_input("date_time")?>
				</td></tr>
				<tr><td>
					<?= form_submit("submit","Create")?>
				</td></tr>
			
			</table>
			<?= form_close()?>
</body>
</html>