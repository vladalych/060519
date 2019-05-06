<!DOCTYPE html>
<html>

<head>
    <title>ROBOTS</title>
  <?php include("head.php"); ?>
</head>

<body>
<?php 
include("topbar.php"); 
?>
    <div class="row">

        <div class="col-md-6 offset-md-3 col-10 offset-1">
            <div class="py-2">
                <div class="card  text-dark ">
                    <img src="pictures/builder.jpg" alt="Responsive image" class="card-img img-fluid ">
                    <div class="card-body btn-light">
                        <h5 class="card-title">Робот-строитель</h5>
                        <p class="card-text">Поможет вам с любым видом ремонта</p>
                        <p><a href="#">Подробнее о роботе</a></p>
                        <a href="Order2.php" class="btn btn-outline-dark text-dark">Вызвать</a>
                    </div>
                </div>
            </div>

            <div class="py-2">
                <div class="card  text-dark ">
                    <img src="pictures/cooker.jpg" alt="Responsive image" class="card-img img-fluid ">
                    <div class="card-body btn-light ">
                        <h5 class="card-title">Робот-повар</h5>
                        <p class="card-text">Знает рецепты более чем 3 000 блюд и будет рад приготовить их для вас!</p>
                        <p>
                        	<a href="#">Подробнее о роботе</a>
                        </p>
                        <a href="Order2.php" class="btn btn-outline-dark text-dark">Вызвать</a>
                    </div>
                </div>

            </div>
            <div class="py-2">
                <div class="card  text-dark">
                    <img src="pictures/segwayrobot.jpg" alt="Responsive image" class="card-img img-fluid ">
                    <div class="card-body btn-light ">
                        <h5 class="card-title">Робот-друг</h5>
                        <p class="card-text">Не даст скучать вашему любимцу!</p>
                        <p>
                        	<a href="#">Подробнее о роботе</a>
                        </p>
                        <a href="Order2.php" class="btn btn-outline-dark text-dark">Вызвать</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <?php include("bottombar.php"); ?>
</body>
</html>
