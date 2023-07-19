console.log('Bienvenue dans Javascript');
/**
 * **************************************
 * 1-SETUP : DEFER
 * **************************************
 ** Antérieur à la vague HTML5, l'attribut defer existait déjà dans les "anciennes" versions
 ** d'Internet Explorer. Il signifie que le navigateur 
 *! peut charger le(s) script(s) en parallèle, sans stopper le rendu de la page HTML.
 *! Contrairement à async, l'ordre d'exécution des scripts est préservé,
 *! en fonction de leur apparition dans le code source HTML. 
 *? Il est par ailleurs reporté à la fin du parsing du DOM (avant l'événement DOMContentLoaded).
 * De nos jours, cet attribut présente moins d'intérêt car les navigateurs
 * disposent par défaut de techniques internes pour télécharger les 
 * ressources en parallèle sans nécessairement attendre les autres.
 */

/**
 * **************************************
 * SETUP : ASYNC
 * **************************************
 * *Nouveau venu dans HTML5, async signifie que le script pourra être exécuté de façon asynchrone,
 ** dès qu'il sera disponible (téléchargé). Cela signifie aussi que le navigateur 
 ** n'attendra pas de suivre un ordre particulier si plusieurs balises <script> sont présentes,
 ** et ne bloquera pas le chargement du reste des ressources, notamment la page HTML. 
 *? L'exécution aura lieu avant l'événement load lancé sur window 
 *? et ne sera valable que pour les scripts externes au document, 
 *? c'est-à-dire ceux dont l'attribut src mentionne l'adresse.
 *? Ce comportement est bien pratique pour gagner en temps de chargement,
 *! il faut cependant l'utiliser avec prudence : si l'ordre n'est pas respecté,
 *! un fichier exécuté de façon asynchrone ne pourra attendre le chargement d'un précédent,
 *! par exemple s'il en utilise des fonctions voire un framework.
 *! Il ne faudra pas non plus compter appeler document.write() pour écrire dans le document HTML
 *! puisqu'il sera impossible de savoir à quel moment les actions seront déclenchées.
 */ 


 let string = "je crée une variable en chaîne de caractère.";
 let number = 16;
 let bool = true;
 let array = [1,2,3,"hello"];
 let objet = {
    propriete1: 22,
    propriete2: "lol"
 };

function affichage (number){
    if (number === 16){
        console.log("Hello World");
    }  
};

/*
console.log(objet);

let compteur = 0;
let result =0;

function calculBete (a){
    while(a != 4) {
        if (a < 4){
            a ++;
        }
        compteur ++;
    }

    
    console.log(result);
    console.log("compteur ="+ compteur);
}

calculBete (result);


console.log(0.1 + 0.2);
*/

let prix = 12.5 ;
let prixLivraison = 5.5 ;
let nomPizza = 'Royale' ;
let date = `12/11/23`;
let blague = `Qu'est ce qu'une pizza a dit a une autre pizza qui lui demandait
des conseils? "Suis ta pâte et tout ira bien!"`;

let SumUpOrderPhrase = `Merci pour votre achat chez "La Pizzeria Raffinata"

Votre commande:
- La pizza : ${nomPizza}
- Le prix : ${prix} €
- Le prix de la livraison : ${prixLivraison} €
- Le prix total: ${prix + prixLivraison} €

date de la facture : ${date}

${blague}`;

console.log(SumUpOrderPhrase);

let nameGirl = "laetitia" ;
let age = 24 ;
let passion = ["j'aime la danse", "j'aime la psycologie"];
let tabUser = [];
 
tabUser.push(nameGirl);
tabUser.push(age);
tabUser.push(passion);
 

console.log(tabUser);
console.log(tabUser[2]);
console.log(tabUser[2][1]);

let leNom = "Jean-yves";
let lePrenom = "Lafesse";
let laPhrase = [];

laPhrase.push(leNom, lePrenom, leNom[0] + lePrenom[0]);

console.log(laPhrase);

function exercice_function1 (n){
    console.log(33, "+", n);
}

exercice_function1(100);

function exercice_function2 (n, m){
    console.log(n + m);
}

exercice_function2(30, 3);

let something = 44;
    function functionBugParent() {
        let something = 9;
        let lesNews = `il est 99h67`;
        console.log(something);
        console.log(lesNews);

        function functionBugEnfant() {
            let lesNews = `il est 99h67`;
        }
};
functionBugParent();
console.log(something);

let notePhilo = 10.5;
let noteSport = 18;

function moyenne(n,m){
    let sum = n + m;
    console.log("la moyenne des 2 notes : ", sum / 2 );
}

moyenne(notePhilo,noteSport);

document.addEventListener('click',(clickEvent)=>{
    console.log(clickEvent);
    console.log(`Tu as clické ici : 
    X : ${clickEvent.x} - Y : ${clickEvent.y}
    à ce moment : ${clickEvent.timeStamp}`);
});


let tableau1 = [14, 16, 18];

function rififi (t){
    let sum = 0
    for(let totalTableau of t){
        sum = sum + totalTableau;
    }
    sum = sum / t.length;
    if(sum >= 15){
        return "très Bien";
    }
    else if(sum >= 10){
        return "assez Bien";
    }
    else{
        return "refus;"
    }
}

console.log(rififi(tableau1));


let objetUser = {
    name: "Leticia",
    age: 24,
        passions : {
        passion1: "j'aime la danse",
        passion2: "j'aime la psychologie"
    }
}

console.log(objetUser.name);
console.log(objetUser.passions);
console.log(objetUser.passions.passion2);

objetUser.name = "Océane";
objetUser.age = 23;
objetUser.passions.passion1 = "les voyages";
objetUser.passions.passion2 = "les études";

console.log(objetUser.name);
console.log(objetUser.passions);
console.log(objetUser.passions.passion2);