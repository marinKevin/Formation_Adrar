let links_menu = document.querySelector("#links_menu");
let links_toChange = document.querySelector("#links_toChange");
let filter_menu = document.querySelector("#filter_menu");
let filter_toChange = document.querySelector("#filter_toChange");
let ingredient_menu = document.querySelector("#ingredient_menu");
let ingredient_toChange = document.querySelector("#ingredient_toChange");
let container_toChange = document.querySelector("#container_toChange");
let inner_menu = document.querySelector(".inner_menu");
let menu1 = document.querySelector("#menu");
let container = document.querySelector("#container_toChange");



function menu (choix_nav, choix_docu){
      choix_nav.addEventListener('click', () => {
         if(getComputedStyle(choix_docu).display == "block"){
            choix_docu.style.display = "none";
            container_toChange.style.display = "none";
        }else{
            if(getComputedStyle(links_toChange).display == "block"){
                links_toChange.style.display = "none";
                choix_docu.style.display = "block";
            }else if(getComputedStyle(filter_toChange).display == "block"){
                filter_toChange.style.display = "none";
                choix_docu.style.display = "block";
            }else if(getComputedStyle(ingredient_toChange).display == "block"){
                ingredient_toChange.style.display = "none";
                choix_docu.style.display = "block";
            }else{
                container_toChange.style.display = "block";
                choix_docu.style.display = "block";
            }
        }
    })
}

menu(links_menu, links_toChange);
menu(filter_menu, filter_toChange);
menu(ingredient_menu, ingredient_toChange);


// POUR ENLEVER LE MENUE EN CLICKAN SUR LA PAGE (A FINIR):

// window.addEventListener('click', (e) =>{
//     console.log(e);
//     if(e.target !== menu1 && e.target !== container){
        
//         links_toChange.style.display = "none";
//         filter_toChange.style.display = "none";
//         ingredient_toChange.style.display = "none";
//     }
// });