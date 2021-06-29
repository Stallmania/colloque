
function aff_BlockPhysique(action)
{
    document.getElementById('BlockPhysique').style.display = (action == "oui")? "" : "none";
    var prenom = document.getElementById('prenom')
    var nom = document.getElementById('nom')
    var situation = document.getElementById('situation')
    if (action == "oui") {
        prenom.setAttribute('name', 'prenom')
        prenom.setAttribute('required', 'required')
        nom.setAttribute('name', 'nom')
        nom.setAttribute('required', 'required')
        situation.setAttribute('name', 'situation')
        situation.setAttribute('required', 'required')

    }else{
        prenom.removeAttribute('name')
        prenom.removeAttribute('required')
        nom.removeAttribute('name')
        nom.removeAttribute('required')
        situation.removeAttribute('name')
        situation.removeAttribute('required')
    }
}

function aff_BlockMoral(action)
{
    document.getElementById('BlockMoral').style.display = (action == "oui")? "" : "none";
    var raisons = document.getElementById('raisons')
    var nbPartic = document.getElementById('nbPartic')
    if (action == "oui") {
        raisons.setAttribute('name', 'raisons')
        raisons.setAttribute('required', 'required')
        nbPartic.setAttribute('name', 'nbPartic')
        nbPartic.setAttribute('required', 'required')
    }else{
        raisons.removeAttribute('name')
        raisons.removeAttribute('required')
        nbPartic.removeAttribute('name')
        nbPartic.removeAttribute('required')
    }
}

function aff_cocktail(action)
{
    var cocltail = document.getElementById('cocktail')
    cocltail.style.display = (action == "oui")? "" : "none";
    
    var cocktailCloture = document.getElementById('cocktailCloture')
    if (action == "oui") {
        cocktailCloture.setAttribute('name', 'optionnel[]')
        cocktailCloture.setAttribute('value', '15')
    }else{
        cocktailCloture.removeAttribute('name')
        cocktailCloture.removeAttribute('value')
    }
}
