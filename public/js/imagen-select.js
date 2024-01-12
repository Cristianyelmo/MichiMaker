
var nombreImagen = document.getElementById('presentacione_id');
var imgColor = document.getElementById('imgColor');
nombreImagen.addEventListener('change', function() {

   var opcionSeleccionada = nombreImagen.options[nombreImagen.selectedIndex];
var infoPersonalizada = opcionSeleccionada.getAttribute("data-info");
  imgColor.src= `https://michimaker-production.up.railway.app/storage/img/${infoPersonalizada}.png`
 });


 var nombreImagen3 = document.getElementById('sombreros_id');
var imgSombreros = document.getElementById('imgSombrero');

nombreImagen3.addEventListener('change', function() {
   // Obtener el valor seleccionado del elemento select
  /*  var nombreImagenxd2 = nombreImagen2.value; */
   var opcionSeleccionada2 = nombreImagen3.options[nombreImagen3.selectedIndex];

// Obtén el valor y la información personalizada

var infoPersonalizada2 = opcionSeleccionada2.getAttribute("data-info-3");
console.log( infoPersonalizada2);
  imgSombreros.src= `https://michimaker-production.up.railway.app/storage/img/${infoPersonalizada2}.png`
 });

/* hjgjg */
var nombreImagen2 = document.getElementById('gafas_id');
var imgGafas = document.getElementById('imgGafas');

nombreImagen2.addEventListener('change', function() {
   // Obtener el valor seleccionado del elemento select
  /*  var nombreImagenxd2 = nombreImagen2.value; */
   var opcionSeleccionada = nombreImagen2.options[nombreImagen2.selectedIndex];

// Obtén el valor y la información personalizada

var infoPersonalizada = opcionSeleccionada.getAttribute("data-info-2");
  imgGafas.src= `https://michimaker-production.up.railway.app/storage/img/${infoPersonalizada}.png`
 });



 var nombreImagen4 = document.getElementById('expresions_id');
var imgExpresion = document.getElementById('imgExpresion');

nombreImagen4.addEventListener('change', function() {
   // Obtener el valor seleccionado del elemento select
  /*  var nombreImagenxd2 = nombreImagen2.value; */
   var opcionSeleccionada3 = nombreImagen4.options[nombreImagen4.selectedIndex];

// Obtén el valor y la información personalizada

var infoPersonalizada3 = opcionSeleccionada3.getAttribute("data-info-4");
  imgExpresion.src= `https://michimaker-production.up.railway.app/storage/img/${infoPersonalizada3}.png`
 });


 var nombreImagen6 = document.getElementById('camisetas_id');
var imgCamiseta = document.getElementById('imgCamiseta');

nombreImagen6.addEventListener('change', function() {
   // Obtener el valor seleccionado del elemento select
  /*  var nombreImagenxd2 = nombreImagen2.value; */
   var opcionSeleccionada5 = nombreImagen6.options[nombreImagen6.selectedIndex];

// Obtén el valor y la información personalizada

var infoPersonalizada5 = opcionSeleccionada5.getAttribute("data-info-5");
  imgCamiseta.src= `https://michimaker-production.up.railway.app/storage/img/${infoPersonalizada5}.png`
 });