<?php 
require_once "header.php";
session_start();
if (isset($_SESSION['message'])) {echo "<script>alert('".$_SESSION['message']."')</script>";
                                  unset($_SESSION['message']);}
?>
<div class='container'>
    <h1>Подача заявки</h1>
    <form method="POST" action='/database/appl_db.php'>
    <div class="mb-3">
        <label for="text" class="form-label">Жалоба</label>
        <input type="text" class="form-control" id="text" name='text'>
    </div>
    <div class="mb-3">
        <label for="date" class="form-label">Дата</label>
        <input type="date" class="form-control" id="date" name='date'>
    </div>
    <button type="submit" class="btn btn-primary">Отправить</button>
    </form>
</div>


</body>
</html>