<?php

 mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
 
 try {
 
	$conectar = new mysqli("localhost", "root", "", "3info");
	
	$conectar->set_charset("utf8mb4");
	
 } catch(Exception $e){
	 
	 error_log($e->getMessage());
	 exit('Erro de conexão');
	 
 }
 ?>