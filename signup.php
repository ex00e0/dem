<?php 
require_once "header.php";
session_start();
if (isset($_SESSION['message'])) {echo "<script>alert('".$_SESSION['message']."')</script>";
                                  unset($_SESSION['message']);}
?>
<div class='container'>
    <h1>Регистрация</h1>

<form method="POST" action='/database/signup_db.php'>
    <div class="mb-3">
        <label for="name" class="form-label">ФИО</label>
        <input type="text" class="form-control" id="name" name='name'>
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">Телефон</label>
        <input type="text" class="form-control" id="phone" name='phone'>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Почта</label>
        <input type="text" class="form-control" id="email" name='email'>
    </div>
    <div class="mb-3">
        <label for="login" class="form-label">Логин</label>
        <input type="text" class="form-control" id="login" name='login'>
    </div>
    <div class="mb-3">
        <label for="pass" class="form-label">Пароль</label>
        <input type="text" class="form-control" id="pass" name='pass'>
    </div>
    <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
    </form>
</div>