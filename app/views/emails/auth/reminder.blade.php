<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>Recuperar Cuenta</h2>

		<div>
			Para recuperar su cuenta,vaya a la siguiente direccion: {{ URL::to('password/reset', array($token)) }}.<br/>
			Este link expirara en {{ Config::get('auth.reminder.expire', 60) }} minutos. 



		</div>
	</body>
</html>
