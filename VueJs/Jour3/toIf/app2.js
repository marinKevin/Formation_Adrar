Vue.createApp({
    data(){
        return{
            nouveau: "",
            list: []
        };
    },
    methods: {
        ajouterFilm(){
            this.list.push(this.nouveau);
            this.nouveau = "";
        },
        supprimerFilm(index){
            this.list.splice(index,1);
        }
    }
}).mount('#app');