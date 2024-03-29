<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Bootstrap уроки</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <form role="form" class="form-horizontal">

        <div class="form-group">
            <label for="email" class="control-label col-sm-2">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="email" placeholder="Введение Email">
            </div>
            <!-- <p class="help-block">Некая подсказка</p> -->
        </div>

        <select class="form-control">
            <option>1</option>
            <option>2</option>
            <option>3</option>
        </select>

        <div class="radio-inline">
            <label>
                <input type="radio" name="optionsRadios" id="radio1" value="option1" checked>
                Первый элемент
            </label>
        </div>
        <div class="radio-inline">
            <label>
                <input type="radio" name="optionsRadios" id="radio2" value="option2">
                Второй элемент
            </label>
        </div>

        <div class="form-group">
            <label for="password" class="control-label col-sm-2">Пароль</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="password" placeholder="Введите пароль">
            </div>
        </div>

        <div class="checkbox">
            <label for="password">
                <input type="checkbox"> Чекбокс
            </label>
        </div>

        <button type="button" class="btn btn-success">Регистрация</button>

    </form>
</div>
</body>
</html>
