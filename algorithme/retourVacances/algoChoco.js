

function chocolatine(a){
    let price = 0;
        if(a<=10){
            price += 1.4;
        }
        else if(a>10 && a>=20){
            price += 1.3;
        }
        else{
            price += 1.2;
        }
    console.log('Le prix Total est :' + price);   
}
    

chocolatine(10);