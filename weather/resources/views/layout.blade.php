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
        <a href="/" class="button">←На главную</a>
    </div>
    <div></div>
        @yield('mian_create')   
            @if($errors->any())
            <div class="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif   

    <style>
        .main{text-align: left;vertical-align: top;color: #e6280f}
        .body{
            background-color: #008000;
        }
        .form{margin-top: 50px;}
        .box {
        display: inline-block; /*располагаем блоки в ряд по горизонтали*/
        margin-right: 0.15em;
        background-color: #e7b019ef;
        margin-left: auto;
        margin-right: auto;
         }
         .alert {
            background-color: #e6280f;
         }
         .button{display: inline-block; margin-right: 1.25em;}
    </style>

</body>
</html>
