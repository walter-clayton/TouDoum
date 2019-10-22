<?php 

$pdo = new PDO ('mysql:dbname=GetFlix;host=localhost', 'root', '');

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Récuperer les erreurs 

$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ); // Afficher de manière lisible les erreurs
