<?php
// Retrieving Variables Using the MySQL Client
$employeesStatement = $mysqlClient->prepare('SELECT * FROM employees');
$employeesStatement->execute();
$employees = $employeesStatement->fetchAll();
?>