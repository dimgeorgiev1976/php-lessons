<?php

		$books = array(
		"451° по Фаренгейту" => "Рей Брэдбери",
		"Шантарам" => "Грегори Дэвид Робертс",
		"1984" => "Джордж Оруэлл",
		"Мастер и Маргарита" => "Михаил Афанасьевич Булгаков",
		"Три товарища" => "Эрих Мария Ремарк",
		"Портрет Дориана Грей" => "Оскар Уайльд",
		"Вино из одуванчиков" => "Рей Брэдбери",
		"Цветы для Элджернона" => "Даниел Киз",
		"Над пропастью во ржи" => "Джером Д. Сэлинджер",
		"Маленький принц" => "Антуан де Сент-Экзюпери",
		"Анна Каренина" => "Лев Толстой",
		"Сто лет одиночества" => "Габриэль Гарсиа Маркес",
		"Тень горы" => "Грегори Дэвид Робертс",
		"Атлант расправил плечи" => "Айн Рэнд"
		);

		echo "<ol>";
		foreach ($books as $bookName => $author) {
		echo "<li><strong>$author</strong>:<br>$bookName</li>";
		}
		"</ol>";

		?>