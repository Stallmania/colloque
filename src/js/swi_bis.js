// à la charge du DOM
$(document).ready(function(){
    if(($('#mme').prop("checked") == true) || ($('#monsieur').prop("checked") == true)){
        document.getElementById('BlockMoral').style.display = "none";
        document.getElementById('raisons').removeAttribute('name')
        document.getElementById('raisons').removeAttribute('required')
        document.getElementById('nbPartic').removeAttribute('name')
        document.getElementById('nbPartic').removeAttribute('required')
    }
    if(($('#raison').prop("checked") == true)){
        document.getElementById('BlockPhysique').style.display = "none";
        document.getElementById('prenom').removeAttribute('name')
        document.getElementById('prenom').removeAttribute('required')
        document.getElementById('nom').removeAttribute('name')
        document.getElementById('nom').removeAttribute('required')
        document.getElementById('situation').removeAttribute('name')
        document.getElementById('situation').removeAttribute('required')
    }
    if(($('#thirdPrice').prop("checked") == true)){
        document.getElementById('cocktail').style.display = "none";
        document.getElementById('cocktailCloture').removeAttribute('name')
        document.getElementById('cocktailCloture').removeAttribute('value')
        document.getElementById('cocktailCloture').setAttribute('value', '0')
    }
})

//par choix d'utilisateur
var civilite = document.querySelector(".civilite")
civilite.addEventListener('change',()=>{
    if (mme.checked || monsieur.checked) {
        document.getElementById('BlockMoral').style.display = "none";
        document.getElementById('raisons').removeAttribute('name')
        document.getElementById('raisons').removeAttribute('required')
        document.getElementById('nbPartic').removeAttribute('name')
        document.getElementById('nbPartic').removeAttribute('required')
    }else{
        document.getElementById('BlockMoral').style.display = "";
        document.getElementById('raisons').setAttribute('name', 'raisons')
        document.getElementById('raisons').setAttribute('required', 'required')
        document.getElementById('nbPartic').setAttribute('name', 'nbPartic')
        document.getElementById('nbPartic').setAttribute('required', 'required')
    }
})

civilite.addEventListener('change',()=>{
    if (raison.checked) {
        document.getElementById('BlockPhysique').style.display = "none";
        document.getElementById('prenom').removeAttribute('name')
        document.getElementById('prenom').removeAttribute('required')
        document.getElementById('nom').removeAttribute('name')
        document.getElementById('nom').removeAttribute('required')
        document.getElementById('situation').removeAttribute('name')
        document.getElementById('situation').removeAttribute('required')
    }else{
        document.getElementById('BlockPhysique').style.display = "";
        document.getElementById('prenom').setAttribute('name', 'prenom')
        document.getElementById('prenom').setAttribute('required', 'required')
        document.getElementById('nom').setAttribute('name', 'nom')
        document.getElementById('nom').setAttribute('required','required')
        document.getElementById('situation').setAttribute('name','situation')
        document.getElementById('situation').setAttribute('required','required')
    }
})

var procucts = document.querySelector(".procucts")
procucts.addEventListener('change',()=>{
    if (thirdPrice.checked) {
        document.getElementById('cocktail').style.display = "none";
        document.getElementById('cocktailCloture').removeAttribute('name')
        document.getElementById('cocktailCloture').removeAttribute('value')
    }else{
        document.getElementById('cocktail').style.display = "";
        document.getElementById('cocktailCloture').setAttribute('name', 'optionnel[]')
        document.getElementById('cocktailCloture').setAttribute('value', '15')
    }
})

procucts.addEventListener('change',()=>{
    if (firstPrice.checked || secondePrice.checked || free.checked ) {
        document.getElementById('cocktail').style.display = "";
        document.getElementById('cocktailCloture').setAttribute('name', 'optionnel[]')
        document.getElementById('cocktailCloture').setAttribute('value', '15')
    }else{
        document.getElementById('cocktail').style.display = "none";
        document.getElementById('cocktailCloture').removeAttribute('name')
        document.getElementById('cocktailCloture').removeAttribute('value')
    }
})




