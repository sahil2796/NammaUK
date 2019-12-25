<?php

	//$DB_HOST = '148.72.232.171:3306';
	//$DB_USER = 'nammauk';
	//$DB_PASS = 'loveyoudad9820102993';
	//$DB_NAME = 'nammauk';


	$DB_HOST = 'localhost';
	$DB_USER = 'root';
	$DB_PASS = '';
	$DB_NAME = 'nammauk';




	try{
		$DB_con = new PDO("mysql:host={$DB_HOST};dbname={$DB_NAME}",$DB_USER,$DB_PASS);
		$DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}
	
