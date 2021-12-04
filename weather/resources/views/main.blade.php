<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Погода в регионе</title>
</head>
<body bgcolor="#89AC76">
    <h1 style="color:black;text-align:center">Курсовая работа</h1>
    <h2 style="color:#400080;text-align:center";">Погода в регионах</h2>
    

 <div class="crud">
     <div class="button">
         <h3>C</h3>
         <button id=b1 onclick="window.location.href='create'">Create</button>
     </div>
     <div class="button">
        <h3>R</h3>
        <button id=b2 onclick="window.location.href='read'">Read</button>
     </div>
     <div class="button">
        <h3>U</h3>
        <button id=b3 onclick="window.location.href='update'"">Update</button>
     </div>
     <div class="button">
        <h3>D</h3>
        <button id=b4 onclick="window.location.href='delete'">Delete</button>
     </div>
 </div>  

<style>
    .wrapper{text-align: center;margin-top: 10px;}
    .box {
        display: inline-block; /*располагаем блоки в ряд по горизонтали*/
        margin-right: 1.25em;
         }
    .crud{text-align: center;margin-top: 50px;}
    .button{display: inline-block; margin-right: 1.25em;}
    #b1{background-color: #008000}
    #b2{background-color: #0000ff}
    #b3{background-color: yellow}
    #b4{background-color: red}
</style>
</body>
</html>