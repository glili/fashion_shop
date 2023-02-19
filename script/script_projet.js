// Carousel

let sliderImages = document.querySelectorAll("#slider img");
let current = 0;

// Cache les images sauf la première
function reset() {
  for (let i = 0; i < sliderImages.length; i++) {
    sliderImages[i].style.display = "none";
  }
}

function startSlide() {
  reset();
  sliderImages[0].style.display = "block";
}

// Affiche l'image suivante
function slideRight() {
  reset();
  sliderImages[current + 1].style.display = "block";
  current++;
}

// Affiche l'image précédente
function slideLeft() {
  reset();
  sliderImages[current - 1].style.display = "block";
  current--;
}

// Bouton précédent
document.querySelector("#previous").addEventListener("click", function () {
  if (current === 0) {
    current = sliderImages.length;
  }
  slideLeft();
});

// Bouton suivant
document.querySelector("#next").addEventListener("click", function () {
  if (current === sliderImages.length - 1) {
    current = -1;
  }
  slideRight();
});

// Défilement automatique toutes les 2 secondes
setInterval(function () {
  if (current === sliderImages.length - 1) {
    current = -1;
  }
  slideRight();
}, 2000);

startSlide();




// Validation

function verificationInfo() {
  //var de validation
  var fieldVerif = true;

  var preNom = document.getElementById("fname").value;
  var nom = document.getElementById("lname").value;
  var password = document.getElementById("password").value;
  var cpassword = document.getElementById("cpassword").value;
  var email = document.getElementById("email").value;
  var email1 = document.getElementById("email1").value;
  var email2 = document.getElementById("email2").value;
  var email3 = document.getElementById("email3").value;


//   if (preNom === "" || preNom === undefined) {
//     fieldVerif = false;
//     alert("Le champs prenom ne peut pas etre vide");
//   }
//   if (nom === "" || nom === undefined) {
//     fieldVerif = false;
//     alert("Le champs nom ne peut pas etre vide");
//   }
//   if (password === "" || password === undefined) {
//     fieldVerif = false;
//     alert("Le champs mot de passe ne peut pas etre vide");
//   }
//   if (cpassword === "" || cpassword === undefined) {
//     fieldVerif = false;
//     alert("Le champs confirmation de mot de passe ne peut pas etre vide");
//   }

//   if (password != cpassword) {
//     alert("Le deux mots de passe sont differents");
// }


  var btn1 = document.getElementById("submit1");
  var btn2 = document.getElementById("submit2");
  var btn3 = document.getElementById("submit3");
  var btn4 = document.getElementById("info-register");

  if (btn1.buttonClicked) {
    if (preNom === "" || preNom === undefined) {
      fieldVerif = false;
      alert("Le champs prenom ne peut pas etre vide");
    }
    if (nom === "" || nom === undefined) {
      fieldVerif = false;
      alert("Le champs nom ne peut pas etre vide");
    }
    if (password === "" || password === undefined) {
      fieldVerif = false;
      alert("Le champs mot de passe ne peut pas etre vide");
    }
    if (cpassword === "" || cpassword === undefined) {
      fieldVerif = false;
      alert("Le champs confirmation de mot de passe ne peut pas etre vide");
    }
  
    if (email === "") {
      fieldVerif = false;
      alert("Le champs couriel ne peut pas etre  vide");
    }
  } else if (btn2.buttonClicked) {
    if (email2 === "") {
      fieldVerif = false;
      alert("Le champs couriel ne peut pas etre  vide");
    }
  } else if (btn3.buttonClicked) {
    if (email3 === "") {
      fieldVerif = false;
      alert("Le champs couriel ne peut pas etre  vide");
    }
  } else if (btn4.buttonClicked) {
    if (email1 === "") {
      fieldVerif = false;
      alert("Le champs couriel ne peut pas etre  vide");
    }

  } 
    var emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,4}$/;
    var regexTest = verif.test(String(contenuEmail).toLocaleLowerCase());
    if (!regexTest) {
      fieldVerif = false;
      alert("Verifiez la syntaxe de courriel");
    }
  
 }


    






var btns = document.getElementsByTagName("button");
var navs = document.getElementsByTagName("nav");
var foots = document.getElementsByTagName("footer");
for (let i = 0; i < btns.length; i++) { 
  btns[i].addEventListener("mouseover", ()=>btns[i].style.backgroundColor="green");
  foots[i].addEventListener("mouseover", ()=>foots[i].style.backgroundColor="gray");
  navs[i].addEventListener("mouseover", ()=>navs[i].style.backgroundColor="gray");
};

function pageLoaded() { alert("La page est chargée !"); }
function imageHovered() { alert("L'image est survolée !"); }
function buttonClicked() { alert("Le bouton est cliqué !"); }
