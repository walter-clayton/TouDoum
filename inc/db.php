<?php 

$pdo = new PDO ('mysql:dbname=epiz_24666170_toudoum;host=sql313.epizy.com', 'epiz_24666170', '85qoY1Qs5WCAC7W');

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Récuperer les erreurs 

$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ); // Afficher de manière lisible les erreurs
