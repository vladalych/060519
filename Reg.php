<!DOCTYPE html>
<html>

<head>
    <title>Регистрация</title>
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
            <a href="Index.html" class="navbar-brand text-light"> ROBOTS </a>
        </div>

    </nav>

    <div class="container">

        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-10 offset-1">
                <h3 class="py-3">Для регистрации заполните форму ниже</h3>
              <form action="Entrance.php" method="post">
                <input class="form-control" type="tel" id="phone" placeholder="Номер телефона" name="phonenuber" aria-label="Номер телефона">
         
                <p>Ваш номер телефона будет использоваться для авторизации </p>
                <input class="form-control" type="text" placeholder="Имя" name="name" aria-label="Имя">
                <p>Мы будем использовать ваше имя для обращения к вам </p>
                <input class="form-control" type="text" placeholder="Email" name="email" aria-label="Email">
                <p> Ваш email будет использоваться для авторизации </p>
                <input class="form-control" type="password" placeholder="Пароль" name="password" aria-label="Пароль">
                <p> Обратите внимание на раскладку клавиатуры (Язык, включенная клавиша Caps Lock) </p>
                <input class="form-control" type="password" placeholder="Повторите пароль" name="repeatpassword" aria-label="Повторите пароль">
                <p> Повторите пароль чтобы убедиться, что вы не допустили опечатку </p>
                <div class="py-2">
                   <div class="form-check">
                        <input class="form-check-input" name="agree" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Я согласен с <a href="#">политикой хранения и обработки данных</a>
                        </label>
                        
                    </div>
                    
                </div>

                <div class="py-3">
                 <input type="submit" name="submit" class="btn btn-primary text-light"> <a href="Entrance.html" name="register" class="btn btn-primary text-light">Отправить форму</a></div>
                </div>
            </div>
</form>

        </div>
    </div>
<?php include("bottombar.php"); ?>
</body>

</html>