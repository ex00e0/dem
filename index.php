<?php 
require_once "header.php";
session_start();
if (isset($_SESSION['message'])) {echo "<script>alert('".$_SESSION['message']."')</script>";
                                  unset($_SESSION['message']);}
?>
<div class='container'>
    <h1>Вход</h1>

<form method="POST" action='/database/signin_db.php'>
    <div class="mb-3">
        <label for="login" class="form-label">Логин</label>
        <input type="text" class="form-control" id="login" name='login'>
    </div>
    <div class="mb-3">
        <label for="pass" class="form-label">Пароль</label>
        <input type="text" class="form-control" id="pass" name='pass'>
    </div>
    <button type="submit" class="btn btn-primary">Войти</button>
    </form>
</div>


</body>
</html>