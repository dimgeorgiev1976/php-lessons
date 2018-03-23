		<?php

function greeting( $name = "Гость", $dayNumber = "день") {
			$name = 'Димитар';
			$dayNumber = 4;
switch ( $dayNumber ) {
	case '1':
	case '2':	
	case '3':
	case '4':
	case '5':
	echo "Привет, $name! Хорошего и продуктивного рабочего день!";
		break;
	case '6':
	case '7':
	echo "Привет, $name! Желаю вам хорошо отдохнуть в этот день!";
		break;
	default:
	echo "Привет, $name! Видимо у вас неполадки с календарем!";
		break;
}
	}
echo "case: day is 1 - 5 <br>";
greeting();
echo '<br><br>';

echo "case: day is 6 - 7 <br>";
greeting();
echo '<br><br>';

echo "case: day is out of 1 - 7 or absent <br>";
greeting();
echo '<br><br>';
?>
