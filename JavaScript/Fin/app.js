// let mainTitle = document.querySelector('#mainTitle');
// let condition = false;


// mainTitle.addEventListener('click', test => {
//     if(condition==false){
//         mainTitle.innerText= "blabla";
//         condition = true;
//     } else if (condition==true){
//         mainTitle.innerText= "D.O.M Events"
//         condition = false;
//     }
// });


// console.log(condition);



// let leTitre = document.querySelector('#mainTitle');
// let lesLiens = document.querySelector('a');

// lesLiens[0].addEventListener('click', () => {
//     leTitre.classList.add("maCouleur");
// });

// lesLiens[1].addEventListener('click', () =>{
//     leTitre.classList.remove("maCouleur");
// } );

// lesLiens[2].addEventListener('click',  () =>{
//     leTitre.classList.toggle("maCouleur");
// } );


// document.addEventListener('click',(events)=>{
//     console.log(events.x, events.y)
//     let newimg = document.createElement('img');
//     newimg.src = "7505538.png";
//     newimg.style.position = 'absolute';
//     newimg.style.width = `70px`;
//     newimg.style.height = `70px`;
//     newimg.style.top = `${events.y}px`;
//     newimg.style.left = `${events.x}px`;
//     document.body.append(newimg);
// });


// let lesImages = document.getElementsByTagName('img');
// console.log(lesImages);
// let tablmg = Array.from(lesImages);
// console.log(tablmg);
// tablmg.map(uneImage,index =>{
//     uneImage.addEventListener('load',()=>{
//         console.log(`Image numéro : ${index} – vient de finir de charger.`);
        
//     })
// })
// let titre = document.getElementById('mouseOut'); 
// let image1 = document.getElementById('changes'); 
// image1.addEventListener('mouseout',()=>{
//     titre.innerHTML = "NEW WORLD";
//     titre.style.display = "block";
//     titre.style.backgroundColor = 'green';
//     titre.style.color = 'orange' ;

// })



// let leInput = document.querySelectorAll("input");

// leInput[0].addEventListener('focus',()=>{
//     leInput[0].style.backgroundColor = 'blue';
//     leInput[1].style.backgroundColor = 'blue';
// })
// leInput[0].addEventListener('blur',()=>{
//     leInput[0].style.backgroundColor = 'white';
//     leInput[1].style.backgroundColor = 'white';
// })


// let laBar = document.body.getElementsByClassName('bar')[0];
// console.log(laBar);
// document.addEventListener('scroll',()=>{
//     console.log(document.body.scrollHeight, innerHeight, scrollY);
//     let scrollMax = document.body.scrollHeight - innerHeight;
//     let onEstOu = (scrollY * 100) / scrollMax;
//     laBar.style.width = `${onEstOu}%`;
// })

// let txt = document.querySelector('textarea');
// let btn = document.querySelector('button');

// txt.addEventListener("keyup",()=>{
//     if(txt.value.length > 5){
//         btn.disabled = true;
//     }
//     else{
//         btn.disabled = false;
//     }
// });

// let monForm = document.querySelector("#myForm");
// monForm.addEventListener("submit",(event) => {
//     event.preventDefault();
//     console.log("ok formulaire envoyé");
//     monForm.reset();
// });

// let monTitre = document.querySelector('h2');

// setTimeout(()=>{
//     monTitre.style.opacity = 1;
//     monTitre.style.backgroundColor = 'green';
//     monTitre.innerHTML = "Popotin";
// }, 5000);

// let monTitre = document.querySelector('h3');
// let timer = 3;
// monTitre;addEventListener("click",()=>{
//     let countDown = setInterval(() => {
//         if(timer>0){
//             monTitre.innerHTML = timer;
//             monTitre.style.textAlign = 'center';
//             monTitre.style.backgroundColor = 'red';
//         }
//         else{
//             monTitre.innerHTML = "GO GO GO !"
//             monTitre.style.textAlign = 'center';
//             monTitre.style.backgroundColor = 'red';
//             clearInterval(countDown);
//         }
//         timer --;
//     }, 1000); 
// }, 3000);


// class Salarie{
//     constructor(nom,prenom,age,salaire_mensuel,N,XXX){
//         this._nom = nom;
//         this._prenom = prenom;
//         this._age = age;
//         this._salaire_mensuel = salaire_mensuel;
//         this._N = N;
//         this._XXX = XXX;
//         this._cout = this.calculCout();
//     }
//     getCout(){
//         return this._cout;
//     }
//     calculCout(){

//     const salaire = this._salaire_mensuel;
//     const mois = this._N;
//     return mois * salaire * (1+  this._XXX);
// }
// }

// class Pme{
//     constructor(nom,equipe,R,FF,FA){
//         this._nom = nom;
//         this._equipe = equipe;
//         this._R = R;
//         this._FF = FF;
//         this._FA = FA;
//         this._coutInitial = FF + FA;
//     }
//     bilanCalculed(){
//         let chargeEmployes  = 0;
//         console.log(`${this._nom} : Cout Initial : ${this._coutInitial}`);

//         for (let e of this._equipe){
//              chargeEmployes += e.getCout();
//         }

        
//         console.log(`${this._nom} : Cout Total Equipe : ${chargeEmployes}`);
//         console.log(`${this._nom} : Ventes : ${this._R}`);  
//         console.log(`${this._nom} : Bilan : ${this._R - (chargeEmployes + this._coutInitial)}`);
        

//     }
// }

// const pme = new Pme (
//       "Ma Petite Entreprise - ", 
//       [new Salarie ("Duval", "Paul", 30, 2000,12,0.90),
//       new Salarie ("Durand", "Alain", 40, 3000,12,0.90),
//       new Salarie ("Dois", "Sylvia", 50, 4000,12,0.90),],
//       300000,
//       20000,
//       50000);


//   pme.bilanCalculed();

let monTxt = document.querySelector('textarea');
let rendu = document.querySelector('.formRender');

// monTxt.addEventListener('keypress',()=>{
//     rendu.innerHTML = monTxt.value;
// })


localStorage.getItem("monSuperTexte");
if(monTxt !== null){
    rendu.innerHTML = localStorage.getItem("monSuperTexte");
}
monTxt.addEventListener('keyup', ()=>{
    localStorage.setItem('monSuperText', monTxt.value);
    rendu.innerHTML = monTxt.value;
})

