<?php
try {
	$pdo = new PDO (
			'mysql:dbname=oophp;host=localhost;charset=utf8',
			'root', '' );
} catch ( PDOException $e ) {
	die ( "Es ist ein Fehler aufgetreten!" );
}
if ($stmt = $pdo->query ( "INSERT INTO konto (kontostand, kontotyp) VALUES ('4567', 'Girokonto')" )) {
	echo "Alles ok";
}

?>