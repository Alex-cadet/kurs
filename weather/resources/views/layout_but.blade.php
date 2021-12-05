<button class="custom-btn btn-1" onclick="window.location.href='/'">Домой</button>
<div class="crud">        
     <div class="button">         
         <button id=b1 onclick="window.location.href='create'">Create</button>
     </div>
     <div class="button">       
        <button id=b2 onclick="window.location.href='read'">Read</button>
     </div>
     <div class="button">        
        <button id=b3 onclick="window.location.href='update'"">Update</button>
     </div>
     <div class="button">        
        <button id=b4 onclick="window.location.href='delete'">Delete</button>
     </div>
 </div>  
@yield('butt')
<style>
    .wrapper{text-align: center;margin-top: 10px;}
    .box {
        display: inline-block; /*располагаем блоки в ряд по горизонтали*/
        margin-right: 1.25em;
         }
    .crud{text-align: center;margin-top: 50px; margin: 0 auto;
    opacity: .91;}
    .button{display: inline-block; margin-right: 1.25em;}
    #b1{background-color: #008000}
    #b2{background-color: #0000ff}
    #b3{background-color: yellow}
    #b4{background-color: red}
    .custom-btn {
  width: 150px;
  height: 60px;
  color: #fff;
  border-radius: 30px;
  padding: 10px 25px;
  font-family: 'Lato', sans-serif;
  font-weight: 500;
  background: transparent;
  cursor: pointer;
  transition: all 0.3s ease;
  position: relative;
  display: inline-block;
   box-shadow:inset 2px 2px 2px 0px rgba(255,255,255,.5),
   7px 7px 20px 0px rgba(0,0,0,.1),
   4px 4px 5px 0px rgba(0,0,0,.1);
  outline: none;
}
.btn-1 {
  background: rgb(6,14,131);
  background: linear-gradient(0deg, rgba(6,14,131,1) 0%, rgba(12,25,180,1) 100%);
  border: none;
}
.btn-1:hover {
   background: rgb(233, 28, 89);
   background: linear-gradient(0deg, rgb(255, 0, 119) 0%, rgb(209, 2, 251) 100%);
}



Resources
</style>