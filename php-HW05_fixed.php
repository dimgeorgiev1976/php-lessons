<?php

echo "<strong>_POST array:<br></strong>";
		print_r($_POST);
		echo '<br><br>';
			if(  !empty($_POST)  ) {
		$message = "Вам пришло новое сообщение с сайта: \n" 
		. "Имя отправителя: " . $_POST['userName'] . "\n"
		. "Email отправителя: " .  $_POST['userEmail'] . "\n"
		. "Сообщение: \n  " . $_POST['message'];

		$resultMail = mail('mail@mail.ru', "Сообщениее с сайта", $message);
				if ( $resultMail) {
					echo "<div><strong '>Форма отправлена успешна!</strong></div>";
			} else {
				echo "<div><strong '>Что то пошло не так. Письмо не отправлено.</strong></div>";
					}
			}
?>
		<form action='index.php' method="post">
		<input type="text" name="userName" placeholder="Ваше имя"><br><br>
		<input type="text" name="userEmail" placeholder="Ваш Email"><br><br>
		<textarea name="message" id="" cols="30" rows="10" placeholder="Сообщение"></textarea>
		<br><br>
		<input type="submit" value="Отправить форму!">
		</form>