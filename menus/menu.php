<!-- links de css -->
<!-- cambiar ruta segun ubicacion -->

 <link rel="stylesheet"  href="./estilos/menu.css"> 
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@200&display=swap" rel="stylesheet"> 

<!-- links javascript  -->
<!-- cambiar ruta segun ubicacion -->


<script src="./javascript/menu.js"></script>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

<!-- Clase que importamos-->
<!-- cambiar ruta segun ubicacion -->
<?php 
class Menu {


    public function validateMenu($rol, $urlImg, $nombre, $sesion){

    if($rol == "Optometra"){

      echo '<div class="cont">
      <nav>
       <span> <iconify-icon icon="mingcute:menu-fill" class="icon" style="color: #bf7449;" width="1.5em"></iconify-icon></span>   
         <ul>
         <li>Inicio</li>
         <li>Lentes</li>
         <li>Paños</li>
         <li>Estuches</li>
         <li>Liquidos</li>
       </ul> 
      </nav>    


      <ul class="menu">
        <li class="li-re"> <a href="#"> <span class="li-w"> Mis citas</span> <iconify-icon icon="icon-park-solid:appointment" style="color: #bf7449;" width="1.5em" ></iconify-icon></a></li>
        <li class="li-re"> <a href="#"> <span class="li-w">Horario </span> <iconify-icon icon="mdi:book-schedule" style="color: #bf7449;" width="1.5em" ></iconify-icon></a></li>
        <li><img src=" ' . $urlImg . '" alt="logo" class="logo"></li> 
        <li class="li-re"> <a href="#"> <span class="li-w">Historia Clinica </span>
        <iconify-icon icon="healthicons:clinical-f-outline" style="color: #bf7449;" width="1.5em"></iconify-icon></a></li>
        <li>
         <li class="li-re out">' .$nombre . ' <iconify-icon icon="iconamoon:profile-circle-fill" width="1.7em"></iconify-icon>
         <div class="log-out">
         <div>Mi cuenta</div>
         <div> <a href="'. $sesion . '"> Salir <iconify-icon icon="octicon:sign-out-16"></iconify-icon> </a></div>
         </div> 
         </li>
      </ul>
     </div>   ';


    }else if($rol == "Cliente"){


      echo '<div class="cont">
      <nav>
       <span> <iconify-icon icon="mingcute:menu-fill" class="icon" style="color: #bf7449;" width="1.5em"></iconify-icon></span>   
         <ul>
         <li>Inicio</li>
         <li>Lentes</li>
         <li>Paños</li>
         <li>Estuches</li>
         <li>Liquidos</li>
       </ul> 
      </nav>    


      <ul class="menu">
        <li class="li-re"> <a href="http://localhost/maxvision/productos.php"> <span class="li-w"> Productos</span> <iconify-icon icon="streamline:shopping-bag-hand-bag-1-shopping-bag-purse-goods-item-products" style="color: #bf7449;" width="1.5em"></iconify-icon></a></li>
        <li class="li-re"> <a href="http://localhost/maxvision/citas.php"> <span class="li-w">Citas </span> <iconify-icon icon="icon-park-solid:appointment" style="color: #bf7449;" width="1.5em" ></iconify-icon></a></li>
        <li><img src=" ' . $urlImg . '" alt="logo" class="logo"></li>
        <li class="li-re"> <a href="http://localhost/maxvision/contacto.php"> <span class="li-w">Contacto </span>
        <iconify-icon icon="mingcute:whatsapp-line" style="color: #bf7449;" width="1.5em" ></iconify-icon> </a></li>
        <li>
        <li class="li-re"><a href=""> <iconify-icon  icon="typcn:shopping-cart" width="1.5em" style="color: #593844;"></iconify-icon></a> </li>
        <li class="li-re out">' .$nombre . ' <iconify-icon icon="iconamoon:profile-circle-fill" width="1.5em"></iconify-icon>
        <div class="log-out">
        <div>Mi cuenta</div>
        <div><a href="'. $sesion . '"> Salir <iconify-icon icon="octicon:sign-out-16"></iconify-icon> </a></div>
        </div> 
        </li>
      </ul>
     </div>   ';


    }else if($rol == "Auxiliar"){


      echo '<div class="cont">
      <nav>
       <span> <iconify-icon icon="mingcute:menu-fill" class="icon" style="color: #bf7449;" width="1.5em"></iconify-icon></span>   
         <ul>
         <li>Inicio</li>
         <li>Lentes</li>
         <li>Paños</li>
         <li>Estuches</li>
         <li>Liquidos</li>
       </ul> 
      </nav>    


      <ul class="menu">
        <li class="li-re"> <a href="http://localhost/maxvision/productos.php"> <span class="li-w"> Productos</span> <iconify-icon icon="streamline:shopping-bag-hand-bag-1-shopping-bag-purse-goods-item-products" style="color: #bf7449;" width="1.5em"></iconify-icon></a></li>
        <li><img src=" ' . $urlImg . '" alt="logo" class="logo"></li>
        <li class="li-re"> <a href="#"> <span class="li-w">Pedidos</span>
        <iconify-icon icon="mingcute:whatsapp-line" style="color: #bf7449;" width="1.5em" ></iconify-icon> </a></li>
        <li>

        <li class="li-re out">' .$nombre . ' <iconify-icon icon="iconamoon:profile-circle-fill" width="1.5em"></iconify-icon>
        <div class="log-out">
        <div>Mi cuenta</div>
        <div><a href="'. $sesion . '"> Salir <iconify-icon icon="octicon:sign-out-16"></iconify-icon> </a></div>
        </div> 
        </li>
      </ul>
     </div>   ';


    }else{


      echo '<div class="cont">
      <nav>
       <span> <iconify-icon icon="mingcute:menu-fill" class="icon" style="color: #bf7449;" width="1.5em"></iconify-icon></span>   
         <ul>
         <li>Inicio</li>
         <li>Lentes</li>
         <li>Paños</li>
         <li>Estuches</li>
         <li>Liquidos</li>
       </ul> 
      </nav>    


      <ul class="menu">
        <li class="li-re"> <a href="http://localhost/maxvision/productos.php"> <span class="li-w"> Productos</span> <iconify-icon icon="streamline:shopping-bag-hand-bag-1-shopping-bag-purse-goods-item-products" style="color: #bf7449;" width="1.5em"></iconify-icon></a></li>
        <li class="li-re"> <a href="http://localhost/maxvision/citas.php"> <span class="li-w">Citas </span> <iconify-icon icon="icon-park-solid:appointment" style="color: #bf7449;" width="1.5em" ></iconify-icon></a></li>
        <li><img src=" ' . $urlImg . '" alt="logo" class="logo"></li>
        <li class="li-re"> <a href="http://localhost/maxvision/contacto.php"> <span class="li-w">Empleados</span>
        <iconify-icon icon="clarity:employee-group-solid" style="color: #bf7449;"></iconify-icon></a></li>
        <li>
        <li></li>
        <li class="li-re">' .$nombre . ' <iconify-icon icon="iconamoon:profile-circle-fill" width="1.5em"></iconify-icon>
        <div class="log-out out">
        <div>Mi cuenta</div>
        <div><a href="'. $sesion . '"> Salir <iconify-icon icon="octicon:sign-out-16"></iconify-icon> </a></div>
        </div> 
        </li>
      </ul>
     </div>   ';


    }
    
       
    }
    public function getMenu($urlImg){
  
        echo '<div class="cont">
        <nav>
         <span> <iconify-icon icon="mingcute:menu-fill" class="icon" style="color: #bf7449;" width="1.5em"></iconify-icon></span>   
           <ul>
           <li>Inicio</li>
           <li>Lentes</li>
           <li>Paños</li>
           <li>Estuches</li>
           <li>Liquidos</li>
         </ul> 
        </nav>    


        <ul class="menu">
          <li class="li-re"> <a href="http://localhost/maxvision/productos.php"> <span class="li-w"> Productos</span> <iconify-icon icon="streamline:shopping-bag-hand-bag-1-shopping-bag-purse-goods-item-products" style="color: #bf7449;" width="1.5em"></iconify-icon></a></li>
          <li class="li-re"> <a href="http://localhost/maxvision/citas.php"> <span class="li-w">Citas </span> <iconify-icon icon="icon-park-solid:appointment" style="color: #bf7449;" width="1.5em" ></iconify-icon></a></li>
          <li><img src=" ' . $urlImg . '" alt="logo" class="logo"></li>
          <li class="li-re"> <a href="http://localhost/maxvision/contacto.php"> <span class="li-w">Contacto </span>
          <iconify-icon icon="mingcute:whatsapp-line" style="color: #bf7449;" width="1.5em" ></iconify-icon> </a></li>
          <li>
          <li class="li-re"><a href=""> <iconify-icon  icon="typcn:shopping-cart" width="1.5em" style="color: #593844;"></iconify-icon></a> </li>
           <li class="validation"><span class="log"><a href="http://localhost/maxvision/login.php">Login</a></span><span class="reg"><a href="http://localhost/maxvision/registro.php"><strong> Register </strong></a> </span></li>
        </ul>
       </div>';

    }


}

?> 



