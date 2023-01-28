// Menu Burger

let burger = document.getElementById("burger-menu");
burger.addEventListener("click", afficherMenu)
function afficherMenu() {
    let menu = document.getElementsByClassName("lien_top")[0];
    menu.classList.toggle("lien_top_affiche"); //ajout de la class lien_top_affiche si l element n'a pas la class
}

// Modal inscription

let modal = document.getElementById("modal-inscription");
if (modal) {
    let button = document.getElementsByClassName("bouton-inscription")[0];
    let span = modal.querySelector(".close");
    button.addEventListener('click', function () {
        modal.style.display = "block";
    });
    span.addEventListener('click', function () {
        modal.style.display = "none";
    });
}

var inputs = document.querySelectorAll(".input-inscription");
inputs.forEach(input => {
    // Quand on tape un caractère dans un champ, on met la valeur du champ dans localStorage
    input.addEventListener("keyup", stockageValeur)
})

function stockageValeur(event) {
    let input = event.currentTarget;
    let name = input.getAttribute("name");
    // On récupère la valeur du champ
    let value = input.value;
    // On stocke dans localStorage à la clé "name" (prenom, nom ou email)
    window.localStorage.setItem(name, value);
}

// Quand la page est chargée, on met les valeurs du champ à jour depuis localStorage
window.addEventListener("DOMContentLoaded", remplirFormulaire)
function remplirFormulaire() {
    var inputs = document.querySelectorAll(".input-inscription");
    inputs.forEach(input => {
        let name = input.getAttribute("name");
        // On récupère la valeur dans localStorage à la clé "name" (prenom, nom ou email)
        let value = window.localStorage.getItem(name);
        if (value) {
            // Si on a une valeur, on la met dans le champ
            input.value = value;
        }
    })
}

// Page abonnement

let extraCheckbox = document.getElementById("extra-checkbox");
let prixAbo = document.querySelector(".prix-abo")

if (extraCheckbox) {
    extraCheckbox.addEventListener("change", calculerPrix);
    function calculerPrix() {
        var prix = 39.99;
        if (extraCheckbox.checked) {
            prix += 10;
        }
        prixAbo.innerHTML = prix + " €"
    }
}

// article

let champ_contenu = document.getElementById("formulaire_contenu");

if (champ_contenu) {
    ClassicEditor
        .create( champ_contenu )
        .catch( error => {
            console.error( error );
        } );

}

// Filtre blog
var boutons_tags = document.querySelectorAll(".bouton-tag");
var articles = document.querySelectorAll(".article_text");
boutons_tags.forEach(bouton_tag => {
    // Quand on clique sur un bouton de tag, on filtre les articles
    bouton_tag.addEventListener("click", function () {
        var tag = bouton_tag.getAttribute("data-tag");
        articles.forEach(article => {
            if (tag == "" || article.getAttribute("data-tag") == tag) {
                // Affiche si "tout" ou bon tag
                article.style.display = "block";
            } else {
                article.style.display = "none";
            }
        });
    });
})
