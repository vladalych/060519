<?php
if ($_SESSION['isAuthorized'] == 0):?>

  

<nav class="navbar navbar-expand-lg bg-dark">

        <div class="navbar-header">
            <a href="Index.php" class="navbar-brand text-light"> ROBOTS </a>
        </div>
        <div class="ml-auto">
            <div class="dropdown">
                <a href="#" class=" dropdown-toggle text-light" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   Вход
  </a>
                <div class="dropdown-menu dropdown-menu-right" method="post">
                    <form class="px-4 py-3">
                        <div class="form-group">
                            <label for="exampleDropdownFormEmail1">Номер телефона</label>
                            <input type="phone" name="phone" class="form-control" id="exampleDropdownFormEmail1" placeholder="+7 777 777 77 77">
                        </div>
                        <div class="form-group">
                            <label for="exampleDropdownFormPassword1">Пароль</label>
                            <input type="password" name="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Пароль">
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="dropdownCheck">
                                <label class="form-check-label" for="dropdownCheck">
                                    Запомнить меня
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Войти</button>
                    </form>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="Reg.php">Впервые на сайте? Зарегистрируйтесь!</a>
                    <a class="dropdown-item" href="#">Забыли пароль?</a>
                </div>
            </div>
    </nav>
<?php else: ?>
        <nav class="navbar navbar-expand-lg bg-dark">

        <div class="navbar-header">
            <a href="WebApp_Start.html" class="navbar-brand text-light"> ROBOTS </a>
        </div>
        <div class="ml-auto">
                <div class="dropdown">
                <a href="#" class=" dropdown-toggle text-light" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  <?php $_SESSION['username'] ?>
  </a>
                <div class="dropdown-menu">

                    <a class="dropdown-item " href="Member.html">Мои данные</a>
                    <a class="dropdown-item " href="History.html">Выход</a>
                </div>
            </div>
                
            </div>
       
    </nav>
}
<?php endif; ?>