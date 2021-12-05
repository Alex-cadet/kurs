<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Погода в регионе</title>
</head>
<body class="b1">
    

 <div class="crud">
    <h1 style="color:rgb(12, 1, 1);text-align:center">Курсовая работа</h1>
    <h2 style="color:#353501;text-align:center";">Погода в регионах</h2>

     <div class="button">         
         <button id=b1 onclick="window.location.href='create'">Create</button>
         <h1 style="color:#80ff00;">C</h1>
     </div>
     <div class="button">       
        <button id=b2 onclick="window.location.href='read'">Read</button>
        <h1 style="color:#89049b;">R</h1>
     </div>
     <div class="button">        
        <button id=b3 onclick="window.location.href='update'"">Update</button>
        <h1 style="color:#421016;">U</h1>
     </div>
     <div class="button">
        
        <button id=b4 onclick="window.location.href='delete'">Delete</button>
        <h1 style="color:#912e07;">D</h1>
     </div>
 </div>  
 <a href="delete" class="button20">Автор</a>

<style>
    .wrapper{text-align: center;margin-top: 10px;}
    .box {
        display: inline-block; /*располагаем блоки в ряд по горизонтали*/
        margin-right: 1.25em;
         }
    .crud{text-align: center;margin-top: 50px;background-color: #2382c2; width: 350px; margin: 0 auto;
    opacity: .91;}
    .button{display: inline-block; margin-right: 1.25em;}
    #b1{background-color: #008000}
    #b2{background-color: #0000ff}
    #b3{background-color: yellow}
    #b4{background-color: red}
    .b1{
        background-size: cover;
        background-image: url("/images/главная.jpeg")}
        
a.button20 {
  position: relative;
  display: inline-block;
  font-weight: bold;
  color: #000;
  text-decoration: none;
  text-shadow: -2px 2px rgba(255,255,255,.3);
  line-height: 1.1;
  padding: .5em 3em .5em .6em;
  background: linear-gradient(#ecc92b, #fce25b);
  box-shadow:
   0 0 0 1px #fce25b inset,
   -1px 0px rgb(220,195,35), -1px 1px rgb(192,167,7),
   -2px 1px rgb(219,194,34), -2px 2px rgb(191,166,6),
   -3px 2px rgb(218,193,33), -3px 3px rgb(190,165,5),
   -4px 3px rgb(217,192,32), -4px 4px rgb(189,164,4),
   -5px 4px rgb(216,191,31), -5px 5px rgb(188,163,3),
   -6px 5px rgb(215,190,30), -6px 6px rgb(187,162,2),
   -7px 6px rgb(214,189,29), -7px 7px rgb(186,161,1),
   -8px 7px rgb(213,188,28), -8px 8px rgb(185,160,0),
   -7px 9px 1px rgba(0,0,0,.4),
   -5px 11px 1px rgba(0,0,0,.2),
   -1px 13px 4px rgba(0,0,0,.2),
   4px 16px 7px rgba(0,0,0,.3);
  transition: .4s;
}
a.button20:active {
  box-shadow: none;
  -webkit-transform: translate(-7px, 8px);
  transform: translate(-7px, 8px);
}
a.button20:after {
  content: "";
  position: absolute;
  top: calc(50% - .6em/2);
  right: .6em;
  -webkit-transform: rotate(-45deg);
  transform: rotate(-45deg);
  border: .37em solid;
  border-top: none;
  border-left: none;
  width: .6em;
  height: .6em;
  box-shadow: inset -2px 2px rgba(255,255,255,.3);
}
</style>
</body>
</html>