
class Employee{
    constructor(nom,prenom,age,salaire,nbrPaye){
        this.nom = nom;
        this.prenom = prenom;
        this.age = age;
        this.salaire = salaire;
        this.nbrPaye = nbrPaye;
        this.cout = this.calculCout();
    }
    calculCout(){
        let total = (this.salaire + this.salaire * 0.9 )*this.nbrPaye;
        return total;
    }
    getCout(){
        return this.cout;
    }
}

class PMe{
    constructor(nom,team,revenu,fraisFixe,fraisAchat,chargeSalariales){
        this.nom = nom;
        this.team = team;
        this.revenu = revenu;
        this.fraisFixe = fraisFixe;
        this.fraisAchat = fraisAchat;
        this.bilan = this.calculBilan();
        this.chargeSalariales = this.calculCoutTeam();
        
        

        
    }
    calculCoutTeam(){
         let summ = 0;
        for(let employee of this.team){
           
            summ += employee.getCout();
        }
        return summ;
    }
    calculBilan(){
        let resultat = this.revenu - (this.fraisFixe + this.fraisAchat + this.calculCoutTeam());
        return resultat;
    }
    display(){
        console.log(
        `ma petite entreprise = ${this.fraisFixe+this.fraisAchat}
        cout equipe : ${this.chargeSalariales}
        revenu = ${this.revenu}
        bilan : ${this.bilan}`);
    }
}

let Adrar = new PMe("Adrar",[new Employee("Steiner","Heinrich","40",2000,12),new Employee("Fernandez","Silvia","42",3000,12),new Employee("Lemoulin","Pierre","41",4000,12)],300000,20000,50000);
Adrar.display();
// employee.getCout();
// Adrar.team.getCout();
let pascal = new Employee("pedro","pascal","40",2000,12);
// console.log(pascal.getCout());
// console.log(Adrar.team.getCout());
console.log(Adrar);

let textArea = document.querySelector("textarea");
let rendu = document.querySelector("#formRender");
textArea.addEventListener("keyup",function(){
    rendu.innerHTML = textArea.value;
});
VANTA.BIRDS({
    el: "#myForm",
    mouseControls: true,
    touchControls: true,
    gyroControls: false,
    minHeight: 200.00,
    minWidth: 200.00,
    scale: 1.00,
    scaleMobile: 1.00
  });
textArea.value = localStorage.getItem("super texte");
if(textArea.value >0){// !==(différent de null) null est une façon de dire si il y a quelque chose dans la variables fait quelque chose;
    rendu.innerHTML = localStorage.getItem("super texte");
}
textArea.addEventListener("keyup",function(){
    localStorage.setItem("super texte",textArea.value);
    rendu.innerHTML = textArea.value;
});
try{
    prenom
    alert('Bonjour');  
}catch(err){
    alert(`Erreur Détectée ALERTE STOPPEZ TOUT: 
        -----------
        Le Nom de l'erreur 
        ${err.name}
        -----------
        Le Message de l'erreur  :
        ${err.message}
        ----------
        L'emplacement de l'erreur:
        ${err.stack}`);
}
alert(`Ce message s'affiche correctement`);

function division(){
    let x = prompt('Entrez un premier nombre (numérateur)');
    let y = prompt('Entrez un deuxième nombre (dénominateur)');
    
    if(isNaN(x) || isNaN(y) || x == '' || y == ''){
        throw new Error('Merci de rentrer deux nombres');
    }else if(y == 0){
        throw new Error('Division par 0 impossible')
    }else{
        alert(x / y);
    }
}

division();
try{
    division();
}catch(err){
    alert(err.message);
}finally{
    alert(`Ce message s'affichera quoiqu'il arrive`);
}

console.log(1/0);
