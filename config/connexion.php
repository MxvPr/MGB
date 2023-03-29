<?php

try {
	$access = new pdo("mysql:host=localhost;dbname=mobigo;charset=utf8", "Vincent", "pigF");

	$access->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
} catch (Exception $e) {
	$e->getMessage();
}
