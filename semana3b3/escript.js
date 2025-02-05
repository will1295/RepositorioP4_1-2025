//Funciones nominales
function suma(a,b){
    return a+b;
}
 
console.log(suma(20,2));
//alert(suma(20,2));

//Funciones anonimas
var resta = function(a,b){
    return a-b;
}
console.log(resta(6,5));

//Funciones flecha
         //Parametros => cuerpo de la funcion
var mult = (a,b) => a*b;

       //Par=> cuerpo     Operador ternario
var par = num=> num % 2 == 0 ? "Es par":"Es impar";
console.log(par(2));