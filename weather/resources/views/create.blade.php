<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="body">
    <div class="main">
        <a href="/">На главную</a>
    </div>
    <div class="form">
    <form method="POST" action="">
        <input name="id" type="text" placeholder="id">
        <input name="adults" type="text" placeholder="Взрослые">
        <input name="child" type="text" placeholder="Дети">
        <input name="pensioners" type="text" placeholder="Пенсионеры">
        <input type="submit" value="Добавить">
        @csrf
    </form>
    </div>    
    <style>
        .main{text-align: left;}
        .body{background-color: #bda202;}
        .form{margin-top: 50px;}
    </style>
 
</body>
</html>