		<?php

function greeting( $name = "Гость", $dayNumber = "день") {
	switch ( $dayNumber ) {
		case '1': case '2':	case '3': case '4': case '5':
			echo "Привет, $name! Хорошего и продуктивного рабочего день!";
			break;
		case '6': case '7':
			echo "Привет, $name! Желаю вам хорошо отдохнуть в этот день!";
			break;
		default:
			echo "Привет, $name! Видимо у вас неполадки с календарем!";
			break;
		}
	}
greeting('Димитар', 4);
echo '<br><br>';
greeting("Димитар", 7);
echo '<br><br>';
greeting("Димитар", 8);
echo '<br><br>';
?>
