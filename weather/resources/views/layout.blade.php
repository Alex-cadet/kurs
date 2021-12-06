<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="body">    
    <div></div>
           
            @if($errors->any())
            <div class="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif   
            @yield('mian_create')
    <style>
        .main{text-align: left;vertical-align: top;color: #e6280f}
        .body{
            background-color: #108a10f8;
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
            width: 500px;
         }
         .button{display: inline-block; margin-right: 1.25em;}
    </style>

</body>
</html>
