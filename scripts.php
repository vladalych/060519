<?php
          function connect()
    {   
        $host = 'localhost'; // адрес сервера 
        $database = 'robotsandusers'; // имя базы данных
        $user = 'mysql'; // имя пользователя
        $password = 'mysql'; // пароль
        $link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка подключения к базе данных!" . mysqli_error($link));
    }


      function login()
	{
		if(strlen($_POST['phonenuber']) < 1 )
		{
			$err[] = "Введите номер!";
		}
		if(strlen($_POST['phonenuber']) < 1 )
		{
			$err[] = "Введите пароль!";
		}
		$phonenumber = $this->mysqlconnect->real_escape_string($_POST['phonenumber']);
		$password = $this->mysqlconnect->real_escape_string($_POST['password']);
		// Вытаскиваем из БД запись, у которой логин равняется введенному
		$data = mysqli_fetch_array($this->mysqlconnect->query("SELECT name, password, email FROM users WHERE phoneNumber='".$this->mysqlconnect->real_escape_string($_POST['phonenumber'])."' LIMIT 1"));
		// Сравниваем пароли
		if($data['password'] === md5(md5($_POST['password'])))
		{
            session_start();
			$_SESSION['isAuthorized'] = 1;
			$_SESSION['username'] = $data['name'];
			$_SESSION['phonenumber'] = $this->mysqlconnect->real_escape_string($_POST['phonenumber']);
			$_SESSION['email'] = $data['email'];
			return true; //вместо header("Location: profile.php"); exit(); 
		}
		else
		{
			return false;
		}
	}

	function logout()
	{
		session_unset();
		session_destroy();
		unset($_COOKIE);
	}
	
	function register($username, $password, $repeatpassword, $phonenumber, $email)
	{
		$err = [];
		$this->username = $this->mysqlconnect->real_escape_string($username);
		$this->password = $this->mysqlconnect->real_escape_string($password);
		$this->phonenuber = $this->mysqlconnect->real_escape_string($phonenumber);
		$this->email = $this->mysqlconnect->real_escape_string($email);

        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
        $err[] = "Проверьте правильность введенного email-адреса!";
        }
		// проверям логин
		if(!preg_match("/^[a-zA-Zа-яА-Я]+$/",$this->username))
		{
			$err[] = "Имя может содержать только буквы русского и латинского алфавита!";
		}

		if(strlen($this->username) < 3 or strlen($this->username) > 30)
		{
			$err[] = "Имя может содержать от 3х до 30 символов!";
		}

		if($password!=$repeatpassword)
		{
			$err[] = "Пароли не совпадают!";
		}

		// проверяем, не сущестует ли пользователя с таким именем
		$query = $this->mysqlconnect->query("SELECT ID FROM users WHERE phoneNumber='".$this->phonenumber."'");
		if(mysqli_num_rows($query) > 0)
		{
			$err[] = "Пользователь с таким номером телефона уже зарегистрирован!";
		}

		// Если нет ошибок, то добавляем в БД нового пользователя
		if(count($err) == 0)
		{
			// Убираем лишние пробелы и делаем двойное хеширование
			$passwordHash = md5(md5(trim($this->password)));
						
		
			$this->mysqlconnect->query("INSERT INTO users SET name='".$this->username."', password='".$passwordHash."', email='".$email."', phoneNumber='".$phonenumber."'");
			$result['RESULT'] = true;
			$result['MESSAGE'] = 'Регистрация прошла успешно';
		}
		else
		{
            $result['RESULT'] = false;
            $result['MESSAGE'] = $err;
        }
        return $result;
    }

?>