<?php
	try {
		$db = new PDO('mysql:host=localhost', 'root@localhost', '');
		echo 'Success!';
	} catch (PDOException $e) {
		print "Error!: " . $e->getMessage() . "<br/>";
		die();
	}
?>