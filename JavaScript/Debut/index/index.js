/*let txt = document.getElementsByTagName('p');
console.log(txt);

let textesTab = Array.from(txt);


textesTab.map(ajoutText => ajoutText.innerHTML = "Qui n'aime son boulot, reste au dodo." );
textesTab.map(modifierCouleur => modifierCouleur.style.color = "red")


console.log(textesTab);

var voiture = "Renault";
console.log(voiture);
var voiture = "BMW";
console.log(voiture);

console.log(bolide);
var bolide = 'Jaguar';

var car = "Nissan";

if(car=="Nissan"){
    let vitesse = 800;
}
console.log(vitesse);*/


/*
let txt2 = document.getElementsByTagName('p');
console.log(txt2);

let txtSuper = document.getElementsByClassName('super');
console.log(txtSuper);

let  special = document.getElementById('special');
console.log(special);*/

const userData = {
    name: 'John Doe',
    email: 'john.doe@example.com',
    age: 25,
    dob: '08/02/1989',
    active: true
};

/*
let tableauUserData = Object.values(userData);
//let tableauUserData2 = Object.keys(userData);
//let tableauUserData3 = Object.entries(userData);

let newDiv1 = document.createElement('h1');
newDiv1.innerText = "Nom de l'utilisateur:";
document.body.append(newDiv1);
//newDiv1.style.text-decoration = "underline";

let newDiv2 = document.createElement('h2');
newDiv2.innerText = tableauUserData[0];
document.body.append(newDiv2);


let newDiv3 = document.createElement('h1');
newDiv3.innerText = "Email :";
document.body.append(newDiv3);

let newDiv4 = document.createElement('h2');
newDiv4.innerText = tableauUserData[1];
document.body.append(newDiv4);

let newDiv5 = document.createElement('h1');
newDiv5.innerText = "Age :";
document.body.append(newDiv5);

let newDiv6 = document.createElement('h2');
newDiv6.innerText = tableauUserData[2];
document.body.append(newDiv6);

let newDiv7 = document.createElement('h1');
newDiv7.innerText = "Date de naissance :";
document.body.append(newDiv7);

let newDiv8 = document.createElement('h2');
newDiv8.innerText = tableauUserData[3];
document.body.append(newDiv8);

function fUserDate (n,m){

    for(let i=0;i<tableauUserData3.length;i++){

         newDiv[i].document.createElement('h1');
        newDiv[i].innerText = tableauUserData2[i];
        document.body.append(newDiv[i]);

        let newDiv[i + 0.5] = document.createElement('h2');
        newDiv[i + 0.5].innerText = tableauUserData[i];
        document.body.append(newDiv[i + 0.5]);



    }
}*/

let d = document.createElement('div');
//d.setAttribute('class','data');
document.body.append(d);

const divContent = (obj) => {
    for(const elem in obj){
        d.innerText += `\n ${elem} : ${obj[elem]}`;
    }
};


divContent(userData);


function ajouterTexte (a,b){
    const newParagraphe = document.createElement('p');
    newParagraphe.innerHTML = `<b> ${a} </b> <br>  ${b}`;
    document.body.append(newParagraphe);
}

ajouterTexte('kevin','marin');