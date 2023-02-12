//ex 2

var num= 255;
var txt = "255";
var bin = true;
var flt = 7.23;

num++;
console.log("Incrementation " + num);

console.log(txt + " est ici une chaine de characteres");

bin = !bin;
console.log("contraire de true " + bin);

 flt += num;
console.log("flt + number " +flt);


// Ex3

var num= 23;
var txt = "33";

var summ = 23 + parseInt(txt);

console.log(summ);


//Ex4

var myNumber = 15;

if(myNumber > 10){
    alert("Variable MyNumber is greater than 10" );
}


// Ex5
var result = 42;
result >10 ? alert(true) : alert(false);

// ex6

var chaine = prompt("Entrez un string:");
var leSize = chaine.length;
leSize >10 ? alert(true) : alert(false);


// ex7

 var laNote = prompt("Entres la note sur 20:");
 if(laNote >=0 && laNote<7){
    console.log("Hideux");
 }else if(laNote >=7 && laNote<10){
    console.log("Moche");
 }else if(laNote >=10 && laNote<15){
    console.log("Nice");
 }else if(laNote >=15 && laNote<20){
    console.log("GG");
 }else{
    console.log("BUG");
 }
// ex8
var annee = prompt("Etrez annee: ");
if (annee%4==0){
    if (annee%100 ==0){
        if  (annee%400 ==0){
            console.log("bisextile");
        }else{
            console.log("non bisextile");
        }
    }else{
        console.log("bisextile");
    }
}else{
    console.log(" non bisextile");
}
    

// ex9


var num = 42;

var dizaines  = (num-(num%10))/10;
console.log(dizaines);
var unites = num%10;
console.log(unites);


// ex11
var premier = prompt("Entrez premier nombre:");
var deuxieme = prompt("Entrez deuxieme nombre:");
one(premier, deuxieme);
two(premier, deuxieme);
three(premier, deuxieme);
four(premier, deuxieme);

function one(a, b){
    console.log(Number (a) + Number (b));
}

function two (a, b){
    console.log( a-b);
}

function three(a, b){
    console.log(a*b);
}

function four(a, b){
    console.log( a/b);
}
// ex12

var entree = prompt("Entree nombres minutes");
console.log(entree*60);
// ex13
var base = prompt("Entrez base de triangle:");
var hauteur = prompt("Entrez hauteur de triangle:");
surface(premier, deuxieme);


function suurface(a, b){
    console.log(a*b)/2;
}

// ex14

var salBrut=promt("Entrez salaire brute");
var sal = salBrut - (salBrut*0.18 + salBrut*0.07 + salBrut*0.05);
// ex15

var prix=promt("Entrez prix maison");
var period = 5;
var interest = 3.25;
var shypMensal = prix/5*0.0325/12;