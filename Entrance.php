<!DOCTYPE html>
<html>

<head>
    <title>ROBOTS</title>
    <?php include("head.php"); ?>
    <?php include("scripts.php"); ?>
</head>

<body>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#s-h-pass').click(function() {
                var type = $('#password').attr('type') == "text" ? "password" : 'text',
                    $('#password').prop('type', type);
            });
        });
    </script>

    <nav class="navbar navbar-expand-lg bg-dark">

        <div class="navbar-header">
            <a href="Index.php" class="navbar-brand text-light"> ROBOTS </a>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-6 col-10 offset-1 offset-lg-3">
            	<div class="text-center pt-5 pb-3">
            	<img class="rounded-lg" src="pictures/biglabel.jpg">
                </div>
                <p style="text-align:center ">Войдите, чтобы приступить к заказу.</p>
                <form action="scripts.php" method= "post" class="px-5 pb-3">
                    <div class="form-group">
                        <label for="exampleDropdownFormPhone">Номер телефона  без +7</label>
                        <input type="phone" class="form-control" name="phonenumber" id="exampleDropdownFormPhone" placeholder="777 777 77 77">
                    </div>
                    <div class="form-group">
                        <label for="exampleDropdownFormPassword1">Пароль</label>
                        <input type="password" class="form-control" name="password" id="exampleDropdownFormPassword1" placeholder="Пароль">
                    </div>
                    <a href="Order.php" type="submit" name="log_in" class="btn btn-primary">Войти</a>
                </form>
                <?php
if(array_key_exists('password',$_POST))
{
   login();
}
?>
            </div>
            
        </div>
    </div>
   <?php include("bottombar.php"); ?>
</body>

</html>