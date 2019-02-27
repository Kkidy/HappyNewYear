<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
	$day_number = 340;
	$days_to_new_year = 366 - $day_number;
	if ($days_to_new_year < 30) 
	{
		echo ("Скоро новый год! А если быть точнее, то через: " . $days_to_new_year . " дней");
	}
	else echo("Новый год через: " . $days_to_new_year);
	?>
	
</body>
</html>

