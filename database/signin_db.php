<?php

require_once "connect.php";
session_start();
$login = isset($_POST['login'])?$_POST['login']:false;
$pass = isset($_POST['pass'])?$_POST['pass']:false;

if ($pass and $login) {$sql = "SELECT * FROM `users` WHERE login = '$login'";
                                                       $result = mysqli_query($con, $sql);
                                                       if (mysqli_num_rows($result)!=0) {$user = mysqli_fetch_assoc($result);
                                                                                        if ($pass == $user['pass']) {$_SESSION['message'] = 'Успех!';
                                                                                                                    $_SESSION['id_user'] = $user["id"];
                                                                                                                    $_SESSION['role'] = $user["role"];
                                                                                                                    if ($user["role"] == 1) header("Location: /user.php");
                                                                                                                   else header("Location: /admin");}    
                                                                                        else {$_SESSION['message'] = 'Неверный пароль';
                                                                                            header("Location: /");} } 
                                                        else {$_SESSION['message'] = 'Неверный логин';
                                                            header("Location: /");} }
else {$_SESSION['message'] = 'Заполните все поля!';
     header("Location: /");}