<?php

try {
	$access = new pdo("mysql:host=localhost;dbname=mobigo;charset=utf8", "Vincent", "UJ56WMkX-pigF]-v");	

	$access->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
} catch (Exception $e) {
	$e->getMessage();
}
