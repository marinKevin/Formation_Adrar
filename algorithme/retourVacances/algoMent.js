function nombreAleatoire(min, max) {
    let nbr = Math.random() * (max - min) + min;
    return Math.round(nbr);
  }

function mentaliste(){
    let target = nombreAleatoire(1,101);
    alert(target);
    for(let i=0;i<10;i++){
        let guess = prompt('A toi de jouer Mentaliste :');
        if(guess == target && i == 0){
            alert('trouver du premier coup')
            return(guess)
        }
        else if(guess == target){
            alert(`enfin, tu as trouvé en ${i + 1} coups`)
            return(guess)
        }
        else if(i == 9){
            alert('Tu as perdu :(')
        }

    }
}

mentaliste();

