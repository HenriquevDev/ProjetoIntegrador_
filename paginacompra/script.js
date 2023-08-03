function Avaliar(estrela) {

    var url = window.location;

    url = url.toString()

    url = url.split("index.html");

    url = url[0];

   

    var s1 = document.getElementById("s1").src;

    var s2 = document.getElementById("s2").src;

    var s3 = document.getElementById("s3").src;

    var s4 = document.getElementById("s4").src;

    var s5 = document.getElementById("s5").src;




   

   if (estrela == 5){

    if (s5 == url + "../img/staroff.png") {

    document.getElementById("s1").src = "../img/star.png";

    document.getElementById("s2").src = "../img/star.png";

    document.getElementById("s3").src = "../img/star.png";

    document.getElementById("s4").src = "../img/star.png";

    document.getElementById("s5").src = "../img/star.png";

   

    } else {

    document.getElementById("s1").src = "../img/star.png";

    document.getElementById("s2").src = "../img/star.png";

    document.getElementById("s3").src = "../img/star.png";

    document.getElementById("s4").src = "../img/star.png";

    document.getElementById("s5").src = "../img/star.png";

   

   }}

   

    //ESTRELA 4

   if (estrela == 4){

    if (s4 == url + "../img/staroff.png") {

    document.getElementById("s1").src = "../img/star.png";

    document.getElementById("s2").src = "../img/star.png";

    document.getElementById("s3").src = "../img/star.png";

    document.getElementById("s4").src = "../img/star.png";

    document.getElementById("s5").src = "../img/staroff.png";

   

    } else {

    document.getElementById("s1").src = "../img/star.png";

    document.getElementById("s2").src = "../img/star.png";

    document.getElementById("s3").src = "../img/star.png";

    document.getElementById("s4").src = "../img/star.png";

    document.getElementById("s5").src = "../img/staroff.png";

   

   }}

   

   //ESTRELA 3

   if (estrela == 3){

    if (s3 == url + "../img/staroff.png") {

    document.getElementById("s1").src = "../img/star.png";

    document.getElementById("s2").src = "../img/star.png";

    document.getElementById("s3").src = "../img/star.png";

    document.getElementById("s4").src = "../img/star.png";

    document.getElementById("s5").src = "../img/staroff.png";

   

    } else {

    document.getElementById("s1").src = "../img/star.png";

    document.getElementById("s2").src = "../img/star.png";

    document.getElementById("s3").src = "../img/star.png";

    document.getElementById("s4").src = "../img/staroff.png";

    document.getElementById("s5").src = "../img/staroff.png";

   

   }}

   

   //ESTRELA 2

   if (estrela == 2){

    if (s2 == url + "../img/staroff.png") {

    document.getElementById("s1").src = "../img/star.png";

    document.getElementById("s2").src = "../img/star.png";

    document.getElementById("s3").src = "../img/staroff.png";

    document.getElementById("s4").src = "../img/staroff.png";

    document.getElementById("s5").src = "../img/staroff.png";

   

    } else {

    document.getElementById("s1").src = "../img/star.png";

    document.getElementById("s2").src = "../img/star.png";

    document.getElementById("s3").src = "../img/staroff.png";

    document.getElementById("s4").src = "../img/staroff.png";

    document.getElementById("s5").src = "../img/staroff.png";

   

   }}

   

    //ESTRELA 1

   if (estrela == 1){

    if (s1 == url + "../img/star.png") {

    document.getElementById("s1").src = "../img/star.png";

    document.getElementById("s2").src = "../img/staroff.png";

    document.getElementById("s3").src = "../img/staroff.png";

    document.getElementById("s4").src = "../img/staroff.png";

    document.getElementById("s5").src = "../img/staroff.png";

   

    } else {

    document.getElementById("s1").src = "../img/star.png";

    document.getElementById("s2").src = "../img/staroff.png";

    document.getElementById("s3").src = "../img/staroff.png";

    document.getElementById("s4").src = "../img/staroff.png";

    document.getElementById("s5").src = "../img/staroff.png";

   

   }}

   

    document.getElementById('rating').innerHTML = avaliacao;

}

// Obtém o elemento do input

const inputElement = document.getElementById("input-number");




// Botão para adicionar 1 ao número

document.getElementById("btn-add").addEventListener("click", function() {

  let currentNumber = parseFloat(inputElement.value);

  inputElement.value = (currentNumber + 1).toString();

});




// Botão para subtrair 1 do número

document.getElementById("btn-subtract").addEventListener("click", function() {

  let currentNumber = parseFloat(inputElement.value);

  inputElement.value = (currentNumber - 1).toString();

});