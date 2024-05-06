<?php

require_once "connect.php";
session_start();
$text = isset($_POST['text'])?$_POST['text']:false;
$date = isset($_POST['date'])?$_POST['date']:false;
$user_id = $_SESSION['id_user'];
if ($text and $date) {$sql = "INSERT INTO `appl`(`title`, `date`, `id_user`) VALUES ('$text','$date',$user_id)";
                                                       $result = mysqli_query($con, $sql);
                                                       if ($result) {$_SESSION['message'] = 'Успех!';
                                                                        header("Location: /user.php");} 
                                                        else {$_SESSION['message'] = mysqli_error($con);
                                                            header("Location: /appl.php");} }
else {$_SESSION['message'] = 'Заполните все поля!';
     header("Location: /appl.php");}