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

    <style>
        body{
            padding: 30px;
        }
    </style>
</head>
<body>

<button class="btn btn-default">Стандартная</button>
<input type="submit" class="btm btn-primary" value="Основная">
<input type="button" class="btm btn-success" value="Подтвердить">
<a href="#"  class="btn btn-info"  role="button">Уведомление</a>
<button class="btn btn-warning">Внимание</button>
<button class="btn btn-danger">Отмены</button>
<button class="btn btn-link">Ссылка</button>

<br><br>

<button class="btn btn-default btn-lg">Кнопка</button>
<button class="btn btn-default btn-md">Кнопка</button>
<button class="btn btn-default btn-sm">Кнопка</button>
<button class="btn btn-default btn-xs">Кнопка</button>

<br><br>

<button class="btn btn-success btn-md btn-block">Кнопка</button>

<br><br>

<button class="btn btn-default btn-lg active">Кнопка</button>
<button class="btn btn-default btn-lg disabled">Кнопка</button>

<br><br>
<div class="btn-group">

<div class="btn-group btn-group-md" data-toggle="buttons">
    <label class="btn btn-primary">
        <input type="checkbox">Параметр 1
    </label>
    <label class="btn btn-primary">
        <input type="checkbox">Параметр 2
    </label>
    <label class="btn btn-primary">
        <input type="checkbox">Параметр 3
    </label>
</div>

    <div class="btn-group btn-group-md" data-toggle="buttons">
        <label class="btn btn-primary">
            <input type="checkbox">Параметр 1
        </label>
        <label class="btn btn-primary">
            <input type="checkbox">Параметр 2
        </label>
        <label class="btn btn-primary">
            <input type="radio">Параметр 3
        </label>
    </div>


</div>

<br><br>

<div class="btn-group-vertical" data-toggle="buttons">
    <label class="btn btn-primary">
        <input type="checkbox">Параметр 1
    </label>
    <label class="btn btn-primary">
        <input type="checkbox">Параметр 2
    </label>
    <label class="btn btn-primary">
        <input type="radio">Параметр 3
    </label>
</div>

</body>
</html>
