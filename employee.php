<?php
include("connection.php");
include("employeeClass.php");
$action = $_REQUEST['action'];
$data=file_get_contents('php://input');
$obj = new EmployeeClass();
if ($action == 'postData') {
    $obj->store_data($data);
} 
?>