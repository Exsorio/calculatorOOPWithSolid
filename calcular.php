<?php
	require_once("calculator.php");
	require_once("operations.php");
	require_once("jsonReportFormatter.php");

	$numberOne = $_POST['numberOne'];
	$numberTwo =$_POST['numberTwo'] ;
	$operator = $_POST['operator'];
	$result;

	$calcular = new Calculator($numberOne, $numberTwo);

	$operations = new Operations($numberOne, $numberTwo);
	$result = $operations->$operator();
		
	$jsonFormatter = new jsonReportFormatter($result);
	$end = $jsonFormatter->resultCalculator();
	
