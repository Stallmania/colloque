let form = document.querySelector('#payment-form');

form.prenom.addEventListener('change',function(){
    ValideNom(this);
})
form.nom.addEventListener('change',function(){
    ValideNom(this);
})
form.situation.addEventListener('change',function(){
    ValideNom(this);
})
form.tel.addEventListener('change',function(){
    tel(this);
})
form.ville.addEventListener('change',function(){
    ValideNom(this);
})
form.raisons.addEventListener('change',function(){
    ValideCompany(this);
})
form.tel.addEventListener('change',function(){
    ValideTel(this);
})
form.adress.addEventListener('change',function(){
    ValideCompany(this);
})
form.cp.addEventListener('change',function(){
    ValideCp(this);
})

const ValideNom = function(inputx){
    // includes even more Latin chars
    let nomRegexp = new RegExp('^[a-zA-Z\u00C0-\u024F\u1E00-\u1EFF\ .-]+$','g')
    let testNom = nomRegexp.test(inputx.value);
    let small = inputx.nextElementSibling;
    if (!testNom) {
        small.innerHTML = 'Les caractères spéciaux et les chiffres non acceptés!'
        small.style.display = "";
        small.style.background = "red";
        small.style.color = "white";
    }else{
        small.style.display = "none";
    }
}
const ValideCompany = function(inputx){
    // includes even more Latin chars
    let nomRegexp = new RegExp('^[a-zA-Z0-9\u00C0-\u024F\u1E00-\u1EFF\ .-]+$','g')
    let testNom = nomRegexp.test(inputx.value);
    let small = inputx.nextElementSibling;
    if (!testNom) {
        small.innerHTML = 'Les caractères spéciaux acceptés  . -'
        small.style.display = "";
        small.style.background = "red";
        small.style.color = "white";
    }else{
        small.style.display = "none";
    }
}
const tel = function(inputx){
    // includes even more Latin chars
    let nomRegexp = new RegExp('^\+{1}[0-9]+$','g')
    let testNom = nomRegexp.test(inputx.value);
    let small = inputx.nextElementSibling;
    if (!testNom || (inputx.value.length) < 10) {
        small.innerHTML = 'Numéro de tétéphone invalide'
        small.style.display = "";
        small.style.background = "red";
        small.style.color = "white";
    }else{
        small.style.display = "none";
    }
}
const ValideCp = function(inputx){
    // includes even more Latin chars
    let nomRegexp = new RegExp('^[0-9]+$','g')
    let testNom = nomRegexp.test(inputx.value);
    let small = inputx.nextElementSibling;
    if (!testNom || (inputx.value.length) !== 5) {
        small.innerHTML = 'code postal invalide'
        small.style.display = "";
        small.style.background = "red";
        small.style.color = "white";
    }else{
        small.style.display = "none";
    }
}

/*(123) 456-7890
+(123) 456-7890
+(123)-456-7890
+(123) - 456-7890
+(123) - 456-78-90
123-456-7890
123.456.7890
1234567890
+31636363634
075-63546725*/

const ValideTel = function(inputx){
    let nomRegexp = new RegExp('^[+]*[(]{0,1}[0-9]{1,3}[)]{0,1}[-\s\./0-9]*$','g')
    let testNom = nomRegexp.test(inputx.value);
    let small = inputx.nextElementSibling;
    if (!testNom || (inputx.value.length) < 10) {
        console.log(inputx.value.length);
        small.innerHTML = 'Numéro de téléphone invalide'
        small.style.display = "";
        small.style.background = "red";
        small.style.color = "white";
    }else{
        small.style.display = "none";
    }
}

