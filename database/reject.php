<?php

require_once "connect.php";
session_start();
$id = $_GET["id"];
$sql = "UPDATE `appl` SET `status`='2' WHERE id=$id";
$result = mysqli_query($con, $sql);
if ($result) {$_SESSION['message'] = 'Успех!';} 
else {$_SESSION['message'] = mysqli_error($con);
header("Location: /admin");}