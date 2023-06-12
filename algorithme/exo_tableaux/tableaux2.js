// Écrire une fonction qui prend un tableau en entrée et affiche le dernier élément de ce tableau.

let array= [1,2,3,4,5,4,7,8,9,10];
let array2=[2,5,18,76,12];

function arrayEnd (a){

    /*for(let i=0;i<a.length;i++){
        if((i+1) == a.length){ 
            console.log("result exo 1:",array[i]);
        }
    }*/
    console.log(a[a.length-1])
}



arrayEnd(array);
arrayEnd(array2);
// Écrire une fonction qui prend un tableau en entrée et retourne le dernier élément de ce tableau.

function arrayEndR (a){
    for(let i=0;i<a.length;i++){
        if((i+1) == a.length){ 
            return array[i];
        }
    }   
}

console.log("result exo 2:",arrayEndR(array));

// Écrire une fonction qui prend en entrée un tableau et qui retourne le minimum de ce tableau.



function arrayMini (a){
    let smallest=a[0];
    for(let i=0;i<a.length;i++){
        if(a[i]<smallest){
            smallest = a[i];
        }
    }
    return smallest;   
}

arrayMini(array);
console.log("result exo 3:", arrayMini(array));
console.log("result exo 3:", arrayMini([1,2,0,25]));
// Écrire une fonction qui prend en entrée un tableau et qui retourne le maximum de ce tableau.


function arrayMax (a){
    let biggest=a[0];
    for(let i=0;i<a.length;i++){
        if(a[i]>biggest){
            
            biggest = a[i];
        }
    }
    return biggest;   
}

arrayMax(array);
console.log("result exo 4:", arrayMax(array));

// [Plus difficile - bonus] Écrire une fonction qui prend en entrée un tableau de nombres positifs et qui retourne la deuxième plus grande valeur du tableau.

function arrayMax2 (a){
    let max1 = 0;
    let max2 = 0;
    for(let i=0;i<a.length;i++){
        if(a[i]>max1){
            max2 = max1;
            max1 = a[i];
        }else if(a[i]>max2){
            max2 = a[i];
        }
    }
    return max2;   
}

arrayMax2(array);
console.log("result exo 5:", arrayMax2(array));


// Écrire une fonction qui prend en entrée un tableau et un nombre et qui retourne le nombre de fois que ce nombre apparaît dans le tableau.

function arrayNumber (a,b){
    let number = 0;
    for(let i=0;i<a.length;i++)
        if(a[i]==b){
            number++;
        }
    return number;
}

arrayNumber(array,4);
console.log("result exo 6:", arrayNumber(array,4));

// Écrire une fonction qui prend en entrée un tableau et un nombre et qui retourne true si le nombre existe dans le tableau, false sinon.

function vrai (a,b){
    let isit 
    for(let i=0;i<a.length;i++){
        if(a[i]==b){
            isit= true;
        }
    }
    if(isit== undefined){
        isit= false;
    } 
    return isit;
}

vrai(array,4);
console.log("result exo 7:", vrai(array,4));

// [Bonus] Suite de l'exo : on **sait** que le tableau reçu est trié (on ne le vérifie pas). Comment exploiter cette information pour améliorer la recherche d'un élément ?
let tab2 =[1, 15, 22, 23, 64, 78, 125, 126, 178, 199, 201, 209, 220, 230, 240];

function guess (a,b){
    for(let i=a.length/2;i<15;){
        if(b==a[i]){
            return a[i];
        }else if(a[i]>b){
            i= (i+a.length)/2;
        }
        else if(a[i]<b){
            i= i/2;
        }
    };
}
console.log("tadaa:", guess(tab2,201));
// Créer un tableau qui contient [1,2,3,...,7777].

let bArray = [];
for(let i=0;i<7777;i++){
    bArray.push(i);
}
console.log("result exo 9:",bArray);



// Créer un tableau qui contient [10,20,30,...,77770].

let bbArray = [];
for(let i=0;i<77770;i++){
    if(i%10==0){
    bbArray.push(i);
    }
}
console.log("result exo 9:",bbArray);

// En se servant du tableau précédent, créer un tableau qui contient [5,10,15,...,38885].

let bdArray = [];
for(let i=0;i<38885;i++){
    if(i%5==0){
    bdArray.push(i);
    }
}
console.log("result exo 10:",bdArray);

// Écrire une fonction qui prend un tableau en entrée et qui en supprime les dernières valeurs, tant qu'elles sont inférieures à 50.
// console.log(leNomDeVotreFonction([1,45,88,54,23,-100,12]); // doit afficher [1,45,88,54]

function end(a){
    for(let i=0;i<3;i++){
        if(a[a.length -1]<50){
            a.pop();    
        }
    }
    return a;
}

console.log("result exo 11:", end([1,45,88,54,23,-100,12]));

let tab = [1,45,88,54,23,-100,12];

function end2(a){
    for(let i=a.length;a[i-1]<50;i--){
        a.pop();
    }
    console.log(a);
}

end2([1,45,88,54,23,-100,12]);