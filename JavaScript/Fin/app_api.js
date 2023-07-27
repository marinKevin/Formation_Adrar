// let apiDiv = document.querySelector('#apiContact');
// let contactAPI = ()=>{
//     let data = fetch('https://api.open-meteo.com/v1/forecast?latitude=52.52&longitude=13.41&hourly=temperature_2m');
//     console.log(data);
//     let dataTransformed = data.json();
//     console.log(dataTransformed);
//     apiDiv.innerHTML = dataTransformed.latitude;
// }

// contactAPI();

let apiPokeDiv = document.querySelector('#pokeListe');
let contactPokeAPI = async ()=>{
    let data = await fetch('https://pokeapi.co/api/v2/pokemon');
    console.log(data);
    let dataTransformed = await data.json();
    console.log(dataTransformed);
    apiPokeDiv.innerText = dataTransformed.results;
}

contactPokeAPI();
