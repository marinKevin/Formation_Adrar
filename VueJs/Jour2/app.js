//! Création d'une instance Vue c'est notre application
Vue.createApp({
//! Dans une fonction data on va retourner un objet qui contiendra les variables de l'application
//! Toutes les data seront contenues dans this
data() {
    return {
    form1:"",
    form2:"",
    number: 0,
    phrase: "trala"
};
},
//! Dans cet Object methods, on va écrire nos fonctions
methods: {
    alert(){
        alert('bonjour');
    },
    capterInput(event){
        console.log(event);
        this.form1 = event.target.value;
    },
    capterInput2(event){
        console.log(event);
        this.form2 = event.target.value;
    }
},
computed:{
    timer(){
        setTimeout(() => {
            this.number = 1;
          }, "60000");
    }
},
watch: {
    number(value){
        console.log("le watcher est en action");
        if(value < 7){
            this.phrase = "Essaie encore";
        }
        if(value == 7){
            this.phrase = "Tu as trouvé le nombre Mystère !";
        }
        if(value > 7){
            this.phrase = "Tu es trop loin";
        }
        if(value> 30){
            this.phrase = "on recommence";
            setTimeout(() => {
                this.number = 0;
              }, "5000");
        }
    }
}
//! L'application est montée sur la balise HTML qui possède l'id app
}).mount('#app');