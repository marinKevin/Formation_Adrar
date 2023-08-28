// 1 Le Menu :

let kevin_nav = document.querySelector("#kevin_nav");
let skills_nav = document.querySelector("#skills_nav");
let projets_nav = document.querySelector("#projets_nav");
let cv_nav = document.querySelector("#cv_nav");
let kevin_docu = document.querySelector("#kevin_docu");
let skills_docu = document.querySelector("#skills_docu");
let projets_docu = document.querySelector("#projets_docu");
let cv_docu = document.querySelector("#cv_docu");
let documentation = document.querySelector("#documentation");
let vide_ton_frigo = document.querySelector("#vide_ton_frigo");
let page_site_frigo = document.querySelector("#page_site_frigo");

function menu (choix_nav, choix_docu){
    choix_nav.addEventListener('click', () => {
        if(getComputedStyle(choix_docu).display == "grid"){
            choix_docu.style.display = "none";
            documentation.style.display = "none";
        }else{
            if(getComputedStyle(kevin_docu).display == "grid"){
                kevin_docu.style.display = "none";
                choix_docu.style.display = "grid";
            }else if(getComputedStyle(skills_docu).display == "grid"){
                skills_docu.style.display = "none";
                choix_docu.style.display = "grid";
            }else if(getComputedStyle(projets_docu).display == "grid"){
                projets_docu.style.display = "none";
                choix_docu.style.display = "grid";
            }else if(getComputedStyle(cv_docu).display == "grid"){
                cv_docu.style.display = "none";
                choix_docu.style.display = "grid";
            }else if(getComputedStyle(page_site_frigo).display == "grid"){
                page_site_frigo.style.display = "none";
                choix_docu.style.display = "grid";
            }else{
                documentation.style.display = "block";
                choix_docu.style.display = "grid";
            }
        }
    })
}

menu(kevin_nav,kevin_docu);
menu(skills_nav,skills_docu);
menu(projets_nav,projets_docu);
menu(cv_nav,cv_docu);
menu(vide_ton_frigo,page_site_frigo);