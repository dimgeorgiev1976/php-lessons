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
		$userName = 'Mike';
		$userEmail = 'mail@mail.ru';
			if ( $resultMail) {
		echo "Форма отправлена успешна!<br><br>";
		} else {
		echo "Что то пошло не так. Письмо не отправлено.";
			}
		if(  !empty($_POST)  ) {
		if ($_POST['userName'] == $userName) {
		echo "Name is correct....<br><br>";
		echo "проверяем Email....<br><br>";

		if ($_POST['userEmail'] == $userEmail) {
		echo "Email is correct.... <br><br>";
		echo "Добро пожаловать на сайт!....<br><br>";
		} else {		
		echo "Email неверен<br><br>";
			}
		} else {
		echo "Логин неверен<br><br>";
					}
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