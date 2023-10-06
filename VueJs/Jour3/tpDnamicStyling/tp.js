Vue.createApp({
    data(){
        return{
            text1: "",
            text2: "",
            affichageText1: "",
            class: ""
        }
    },
    methods: {
        affiche(){
            this.affichageText1 = this.text1;
            // if(this.affichageText1 = this.text1){
            //     this.affichageText1 = null;
            // }else{
            //     this.affichageText1 = this.text1;
            // }           
        }
    },
    watch:{
        text1(value){
            if(value == "world"){
                this.class = maClasseWorld;
            }
        }
    }

}).mount('#app');