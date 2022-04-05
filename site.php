<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
            crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="site.css">
    <title>Site</title>
</head>
<body>
<header>
    <div class="px-3 py-2 border-bottom mb-3">
        <div class="container d-flex flex-wrap justify-content-center">
            <form class="col-12 col-lg-auto mb-2 mb-lg-0 me-lg-auto">
                <input type="search" class="form-control" placeholder="Поиск..." aria-label="Search">
            </form>

            <div class="text-end">
                <?php if($_COOKIE["study"]): ?>
                <a class="btn btn-primary" href="register.php">Личный кабинет</a>
               <?php else:?>
                <a class="btn btn-light text-dark me-2" href="auth.php">Войти</a>
               <a class="btn btn-primary" href="register.php">Зарегестрироваться</a>
                <?php endif?>
            </div>
        </div>
    </div>
</header>
<main>
<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <h4>Оставить отзыв</h4>
            <form action="backsite.php" method="post">
                <div class="form-group">
                    <label for="email1">E-mail:</label>
                    <input type="email" name="email" class="form-control" id="email1" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="message">Сообщение:</label>
                    <textarea class="form-control" name="message" rows="3"></textarea>
                </div>
                <div class="col-md4">
                    <div class="form-group">
                        <label>Выберите ваш город</label>
                        <select class="form-control">
                            <option>Ижевск</option>
                            <option>Москва</option>
                            <option>Казань</option>
                            <option>Питер</option>
                            <option>Тверь</option>
                            <option>Пермь</option>
                            <option>Сочи</option>
                        </select>
                    </div>
                </div>
                <div>
                    <p>Отправить вам ответное письмо?</p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Да, конечно!
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Нет,спасибо!
                        </label>
                    </div>
                </div>
                <div class="d-flex gap-5 justify-content-center">
                    <div class="list-group mx-0">
                        <label class="list-group-item d-flex gap-2">
                            <input class="form-check-input flex-shrink-0" type="checkbox" value="" checked>
                            <span>Я соглашаюсь с правилами обработки персональных данных</span>
                        </label>
                    </div>
                </div>
                <?php if ($_COOKIE['study']):?>
                <button type="submit" class="w-100 btn btn-lg btn-primary">Отправить сообщение</button>
                <?php else:?>
                <a href="auth.php" class="w-100 btn btn-lg btn-primary">Отправить сообщение</a>
                <?php endif?>
            </form>
        </div>
    </div>
</div>
</main>
</body>
</html>