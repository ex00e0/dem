<?php 
require_once "../header.php";
require_once "../database/connect.php";
session_start();
if (isset($_SESSION['message'])) {echo "<script>alert('".$_SESSION['message']."')</script>";
                                  unset($_SESSION['message']);}
$appls = mysqli_query($con, "SELECT * FROM appl ");
$status = ['Новая', "Принята", "Отклонена"];
?>
<div class='container'>
    <h1>Личный кабинет</h1>
    <?php if (mysqli_num_rows($appls) != 0 ) { 
    while ($app = mysqli_fetch_assoc($appls)) { ?>
          <div class="card w-50">
  <div class="card-body">
    <h5 class="card-title">Заявка № <?=$app['id']?></h5>
    <p class="card-text"><?=$app['title']?></p>
    <p class="card-text"><?=$app['date']?></p>
    <p class="card-text"><?=$status[$app['status']]?></p>
    <?php if ($app["status"] == 0) { ?>
    <a href="/database/success.php?id=<?=$app['id']?>" class="btn btn-success">Принять</a>
    <a href="/database/reject.php?id=<?=$app['id']?>" class="btn btn-danger">Отклонить</a>
    <?php } ?>
    
  </div>
</div>
    <?php } } else echo "<h2>Заявок нет</h2>"; ?>
</div>


</body>
</html>