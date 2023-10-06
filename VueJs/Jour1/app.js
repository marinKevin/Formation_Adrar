//! Création d'une instance Vue c'est notre application
Vue.createApp({
//! Dans une fonction data on va retourner un objet qui contiendra les variables de l'application
//! Toutes les data seront contenues dans this
data() {
    return {
    tasks: [],
    valeurDeInput: '',
    toto:'LOL TOTO',
    toy : 'Voiture Electrique',
    quantity: 25,
    customers: ["petitLouis", "petitThomas", "petitNoa"],
    nom: "Génial",
    prenom:"Tortue",
    age: 110,
    imageUser:'https://static.hitek.fr/img/actualite/ill_m/1588743789/tortuegnialetitre.jpg',
    nombre: 5
};
},
//! Dans cet Object methods, on va écrire nos fonctions
methods: {
    ajouterTask() {
    this.tasks.push(this.valeurDeInput);
    this.valeurDeInput = '';
    },
    phraseRandom(){
        nbr= Math.random();
        if(nbr>0.5){
            return "Plus haut c'est le soleil";
        }else{
            return"le planché des vaches";
        }
    },
    futurAge(age){
        newAge = age + 10;
        return newAge;
    },
    random(){
        return Math.random();
    },
    incrementer(){
        this.nombre ++;
    },
    decrementer(){
        this.nombre --;
    }
},
//! L'application est montée sur la balise HTML qui possède l'id app
}).mount('#app');