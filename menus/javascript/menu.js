
let openMenu = false;
let openLogout = false;
let styleMenu = document.querySelector('nav ul');
let logout = document.querySelector('.out');

document.querySelector(".icon").addEventListener("click", ()=>{

    if(openMenu == false){
        openMenu = true;
        styleMenu.style.display = 'flex';
        
        
    }else{
        openMenu = false; 
        styleMenu.style.display = 'none';
    }
})


logout.addEventListener('click', ()=>{

    if(openLogout == false){
        openLogout = true;
        document.querySelector('.log-out').style.display = "block";
        
        
    }else{
        openLogout = false; 
        document.querySelector('.log-out').style.display = "none";
    }


   console.log('jaja');
})





/* var logout = false;
var variableJS = 'contenido de la variable javascript';      */
