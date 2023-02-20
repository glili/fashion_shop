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

// // Bouton précédent
// document.querySelector("#previous").addEventListener("click", function () {
//   if (current === 0) {
//     current = sliderImages.length;
//   }
//   slideLeft();
// });

// // Bouton suivant
// document.querySelector("#next").addEventListener("click", function () {
//   if (current === sliderImages.length - 1) {
//     current = -1;
//   }
//   slideRight();
// });

// // Défilement automatique toutes les 2 secondes
// setInterval(function () {
//   if (current === sliderImages.length - 1) {
//     current = -1;
//   }
//   slideRight();
// }, 2000);

// startSlide();




// Validation
function validationInfo(name) {
  //var de validation
 var fieldVerif = true;
  if (name == "form-inscription") {
    var preNom = document.forms["form-inscription"]["fname"].value;
    if ( preNom === undefined || preNom === "") {
      alert("Le champs prenom ne peut pas etre vide");
      return false;
    }

    var nom = document.forms["form-inscription"]["lname"].value;
    if (nom === "" || nom === undefined) {
      alert("Le champs nom ne peut pas etre vide");
      return false;
    }

    var password = document.forms["form-inscription"]["password"].value;
    if (password === "" || password === undefined) {
      alert("Le champs mot de passe ne peut pas etre vide");
      return false;
    }

    var cpassword = document.forms["form-inscription"]["cpassword"].value;
    if (cpassword === "" || cpassword === undefined) {
      alert("Le champs confirmation de mot de passe ne peut pas etre vide");
      return false;
    }

    if (password != cpassword) {
      alert("Le deux mots de passe sont differents");
      return false;
    }
    
    var email = document.forms["form-inscription"]["email"].value;
    if (email === "") {
      alert("Le champs couriel ne peut pas etre  vide");
      return false;
    } else {
      var emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,4}$/;
      var regexTest = emailRegex.test(String(email).toLocaleLowerCase());
      if (!regexTest) {
        alert("Verifiez la syntaxe de courriel");
        return false;
      }
    }

  } else if (name == "form-compte") {
    var email = document.forms["form-compte"]["email"].value;
    if (email === "") {
      alert("Le champs couriel ne peut pas etre  vide");
      // fieldVerif = false;
      return false;
    } else {
      var emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,4}$/;
      var regexTest = emailRegex.test(String(email).toLocaleLowerCase());
      if (!regexTest) {
        alert("Verifiez la syntaxe de courriel");
        return false;
      }
    }
    var password = document.forms["form-compte"]["password"].value;
    if (password === "" || password === undefined) {
      alert("Le champs mot de passe ne peut pas etre vide");
      return false;
    }
  } else if (name == "form-contact") {
    var email = document.forms["form-contact"]["email"].value;
    if (email === "") {
      alert("Le champs couriel ne peut pas etre  vide");
      return false;
    } else {
      var emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,4}$/;
      var regexTest = emailRegex.test(String(email).toLocaleLowerCase());
      if (!regexTest) {
        alert("Verifiez la syntaxe de courriel");
        return false;
      }
    }
  } else if (name == "form-footer") {
    var email = document.forms["form-footer"]["email"].value;
    if (email === "") {
      alert("Le champs couriel ne peut pas etre  vide");
      return false;
    } else {
      var emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,4}$/;
      var regexTest = emailRegex.test(String(email).toLocaleLowerCase());
      if (!regexTest) {
        alert("Verifiez la syntaxe de courriel");
        return false;
      }
    }
  }
  
 
}








// var btns = document.getElementsByTagName("button");
// var navs = document.getElementsByTagName("nav");
// var foots = document.getElementsByTagName("footer");
// for (let i = 0; i < btns.length; i++) { 
//   btns[i].addEventListener("mouseover", ()=>btns[i].style.backgroundColor="green");
//   foots[i].addEventListener("mouseover", ()=>foots[i].style.backgroundColor="gray");
//   navs[i].addEventListener("mouseover", ()=>navs[i].style.backgroundColor="gray");
// };

// function pageLoaded() { alert("La page est chargée !"); }
// function imageHovered() { alert("L'image est survolée !"); }
// function buttonClicked() { alert("Le bouton est cliqué !"); }
