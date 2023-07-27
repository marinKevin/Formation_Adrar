
class Imc {

    constructor( name, weight, size) {

        this.name = name;
        this.weight = weight;
        this.size = size;
        //this.imc= this.imcCalcul();
        this.imc = weight / (size*size);
    }
    /*
    imcCalcul(){
               return (this.weight / (this.taille * this.size)).toFixed(2);
            
    }
    */ 

    display (){
        console.log( `${this.name} (${this.weight} kg, ${this.size} m) a un IMC: ${this.imc.toFixed(2)} `);
    }
};

let list = [
            new Imc("Sébastien Chabal", 135, 1.7),
            new Imc("Escaladeuse", 45, 1.68),
            new Imc("JOJO ", 300, 2),
            new Imc("Gontrand ", 90, 1.75),
            new Imc("Colonel Clock ", 200, 1.75),
            new Imc("JOsiane de la Vega", 99, 1.55),
          ];



list.forEach (element => {element.display();
});

console.log(list);

    