/*
//Série A
//A1
// Initialisation
setPos(300, 300);
changeColor(color.red);
setLineWidth(10);
// Réalisation
forward(200);
faceRight();
forward(100);
*/

/*
//Série A
//A2
// Initialisation
setPos(300, 300);
changeColor(color.yellow);
setLineWidth(10);
// Réalisation
faceLeft();
forward(100);
faceDown();
forward(100);
faceRight();
forward(200);
faceUp();
forward(200);
*/

/*
//Série A
//A3
// Initialisation
setPos(300, 300);
changeColor(color.yellow);
setLineWidth(10);
// Réalisation
forward(100);
faceUp();
forward(200);
backward(100);
faceRight();
forward(100);
faceLeft();
forward(200);
*/

/*
//Série A
//A4
// Initialisation
setPos(100, 550);
changeColor(color.green);
setLineWidth(10);
faceRight();
// Réalisation
forward(200);
arcLeft(100, 90);
arcLeft(100, 90);
forward(100);
arcRight(100, 90);
arcRight(100, 90);
forward(200);
*/

/*
//Série A
//A5
// Initialisation
setPos(300, 100);
changeColor(color.fuchsia);
setLineWidth(10);
faceRight();
// Réalisation
arcRight(200, 360);
arcRight(100, 180);
arcLeft(100, 180);
*/

/*
//Série A
//A6
// Initialisation
setPos(300,550);
changeColor(color.green);
setLineWidth(10);
faceUp();
// Réalisation
forward(100);
up();
forward(100);
down();
forward(200);
*/

/*
//Série B
//B1
// Initialisation
setPos(100, 100);
changeColor(color.green);
setLineWidth(10);
faceRight();
// Réalisation

for(let i=0;i<4;i++) {
    forward(100);
    faceDown();
    forward(100);
    faceRight();
}
*/

/*
//Série B
//B3
// Initialisation
setPos(100, 300);
changeColor(color.red);
setLineWidth(10);
// Réalisation
for(let i=0 ; i<4 ; i++) {
    faceUp();
    forward(50);
    faceRight();
    forward(50);
    faceDown();
    forward(50);
    faceRight();
    forward(50);  
}
*/

/*
//Série B
//B3
// Initialisation
setPos(300, 200);
changeColor(color.blue);
setLineWidth(10);
// Réalisation

for( let i=0;i<4;i++) {
    forward(200);
    right(90);
}
*/
 /*
//Série B
//B4
// Initialisation
setPos(400,350);
changeColor(color.aqua);
setLineWidth(10);
faceLeft();
// Réalisation
for(let i=0;i<3;i++) {
    forward(200);
    right(120);
} */

/*
//Série B
//B5
// Initialisation
setPos(300, 500);
changeColor(color.yellow);
setLineWidth(10);
faceUp();
// Réalisation
forward(200);

for(let i=0;i<3;i++) {
    changeColor(color.red);
    forward(100);
    right(120);
}
*/

/*
//Série B
//B6
// Initialisation
setPos(200, 400);
changeColor(color.red);
setLineWidth(10);
// Réalisation
for(let i=0;i<2;i++){
    faceRight();
    forward(50);
    faceUp();
    forward(50);
}
changeColor(color.green);
for (let i=0;i<3;i++) {
    faceRight();
    forward(50);
    faceDown();
    forward(50);
}
*/

/*
//Série C
//C1
// Initialisation
setPos(100, 200);
changeColor(color.aqua);
setLineWidth(10);
faceRight();
// Réalisation
for (let i=0;i<4;i++) {
    for (let j=0;j<3;j++) {
        forward(100);
        right(120);
    }
    forward(100);
}
*/

/*
//Série C
//C2
// Initialisation
setPos(200, 500);
changeColor(color.fuchsia);
setLineWidth(10);
faceUp();
// Réalisation
for (let i=0;i<5;i++) {
    for (let j=0;j<4;j++) {
        forward(50);
        right(90);
    }
    up();
    forward(100);
    down();
}
*/

/*
//Série C
//C3
// Initialisation
setPos(50, 100);
shiftColor(1/3);
setLineWidth(10);
faceRight();
// Réalisation
for (let i=0;i<3;i++){
    for(let j=0;j<8;j++){
        forward(100);
        left(135);
    }
    up();
    forward(200);
    shiftColor(0.1);
    down();
}
*/

/*
//Série C
//C4
// Initialisation
setPos(20, 200);
changeColor(color.red);
setLineWidth(10);
faceRight();
// Réalisation
for(let i=0;i<5;i++){
    for(let j=0;j<3;j++){
        forward(50);
        left(120);
    }
    changeColor(color.yellow);
    for(let k=0;k<4;k++){
        forward(50);
        right(90);
    }
    up();
    forward(100);
    down();
    changeColor(color.red)
}
*/
/*
//Série C
//C5
// Initialisation
setPos(300, 200);
shiftColor(1/4);
setLineWidth(10);
faceRight();
// Réalisation
for(let i=0;i<4;i++){
    for(let j=0;j<8;j++){
        forward(200);
        left(135);
    }
    right(90);
    shiftColor(0.21)
}
*/


//Série D
//D9
// Initialisation
setPos(300, 200);
changeColor(color.blue);
setLineWidth(10);
faceRight();
let longueur=100;
// Réalisation
for (let i=0;i<6;i++){
    forward(longueur);
    right(120);
    longueur=longueur+100;
}

/*
//Série D
//D10
// Initialisation
setPos(300, 200);
changeColor(color.yellow);
setLineWidth(10);
faceRight();
let longueur=100;
// Réalisation
for (let i=0;i<10;)*/