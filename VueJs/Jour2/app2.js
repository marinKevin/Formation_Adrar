Vue.createApp({
    data(){
        return{
            selectCard1: false,
            selectCard2: false
        };
    },
    methods: {
        selectionCard(uneCard){
            if(uneCard == 1){
                if(this.selectCard1 == false){
                    this.selectCard1 = true;
                }else{
                    this.selectCard1 = false;
                }
            }
            if(uneCard ==2){
                if(this.selectCard2 == false){
                    this.selectCard2 = true;
                }else{
                    this.selectCard2 = false;
                }
                // this.selectCard2 = this.true =! this.true;
                // this.selectCard2 = !this.selectCard2;
            }
        }
    }
}).mount('#app');