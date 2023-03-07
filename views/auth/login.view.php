<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="w-100 d-flex justify-content-center aligin-items-center"style="height: 100vh">
    <div class="p-5 w-50">
        <h4 class="mb-3 text-center">Авторизация</h4>
        <form action=""method="post">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Логин</label>
                <input type="text" name="login" class="form-control" id="login" placeholder="Логин">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Парол</label>
                <input type="text" name="password" class="form-control" id="password" placeholder="Пароль">
            </div>
            <div class="mb-3">
                Есле у вас нет акаунта нажмите на ссылку <a href="/registor.php">Зарегистрироваться</a>!
            </div>
            <button type="submit" class="btn btn-primary">Войти</button>
        </form>
        </div>
    </div>
</body>
</html>