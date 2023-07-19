let listeFilm = ["Ultime décision","Mission Alcatraz","Attack Force"];

for(let i=0;i<listeFilm.length;i++) {
    console.log(listeFilm[i]);
}

listeFilm.forEach(unFilm => console.log(unFilm));

for (let unFilm of listeFilm){
    console.log (unFilm);
}

let objetUser = {
    name: "Leticia",
    age: 24,
        passions : {
        passion1: "j'aime la danse",
        passion2: "j'aime la psychologie"
    }
}

for(let element in objetUser){
    console.log(`${element}: ${objetUser[element]}`)
}

for(let element in objetUser){
    if(typeof objetUser[element]==="object"){
        for(let sousElement in objetUser[element]){
            console.log(`${objetUser[element][sousElement]}`);
        }
    }
}