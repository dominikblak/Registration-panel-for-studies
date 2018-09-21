<?php

	try {
		$pdo= new PDO('mysql:host=localhost;dbname=studies;encoding=utf8', 'root', '',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
		//ustawianie właściwosci obiektu: fetch_mode na fetch_assoc - zwracaj tylko tablice asosjacyjną 
		$pdo->setAttribute( PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC );
	} 
	 

	catch (PDOException $e) {
		echo "Błąd połaczenia z bazą - odkomentuj informacje developerską-base_pdo.php</br>";
		//echo $e->getMessage();

	}