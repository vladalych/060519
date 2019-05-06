
<!DOCTYPE html>
<html>

<head>
    <title>ROBOTS</title>
    <?php include("head.php"); ?>
     <?php include("scripts.php"); ?>
</head>

<body>
<?php
connect();
?>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#s-h-pass').click(function() {
                var type = $('#password').attr('type') == "text" ? "password" : 'text',
                    $('#password').prop('type', type);
            });
        });
    </script>
    <?php include("topbar.php"); ?>
 <div class="row">
 	<div class="col-10 offset-1">
<div class="card mb-3 ">
  <div class="row no-gutters">
    <div class="col-7">
      <img src="pictures/ad1.jpg" class="card-img" alt="...">
    </div>
    <div class="col-5">
      <div class="card-body">
        <h2 class="card-title">Возьмите робота в прокат уже сегодня</h2>
        <p class="card-text">Нужен помощник? Вызовите нужного робота туда, где вам требуется помощь. Наши роботы с радостью выполнят ваши поручения!</p>
        <a href="Entrance.php" class="btn btn-primary">Вызвать</a>

      </div>
    </div>
  </div>
</div>
</div>
    </div>
  
<div class="row py-5">
	<div class="col-2 offset-3">
		<img src="pictures/fast.jpg" class="img-fluid">
	</div>
	<div class="col-2">
		<img src="pictures/clever.jpg" class="img-fluid">
	</div>
	<div class="col-2">
		<img src="pictures/kind.jpg" class="img-fluid">
	</div>
<div class="col-2 offset-3">
		<img src="pictures/mobile.jpg" class="img-fluid">
	</div>

<div class="col-2">
		<img src="pictures/silent.jpg" class="img-fluid">
	</div>
	<div class="col-2">
		<img src="pictures/full.jpg" class="img-fluid">
	</div>
</div>

 <?php include("bottombar.php"); ?>

</body>

</html>