<?php

require_once "connect.php";
session_start();
$name = isset($_POST['name'])?$_POST['name']:false;
$phone = isset($_POST['phone'])?$_POST['phone']:false;
$email = isset($_POST['email'])?$_POST['email']:false;
$login = isset($_POST['login'])?$_POST['login']:false;
$pass = isset($_POST['pass'])?$_POST['pass']:false;

if ($name and $phone and $pass and $login and $email) {$sql = "INSERT INTO `users`(`name`, `phone`, `email`, `login`, `pass`) VALUES ('$name','$phone','$email','$login','$pass')";
                                                       $result = mysqli_query($con, $sql);
                                                       if ($result) {$_SESSION['message'] = 'Успех!';
                                                                        header("Location: /");} 
                                                        else {$_SESSION['message'] = mysqli_error($con);
                                                            header("Location: /signup.php");} }
else {$_SESSION['message'] = 'Заполните все поля!';
     header("Location: /signup.php");}