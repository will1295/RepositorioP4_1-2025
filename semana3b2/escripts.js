//Declaracion de funcion
function sumar(num1,num2){
    let total = num1+num2;
    //console.log(total);
    return total;
}

console.log(sumar(20,2));
//alert(sumar(20,2));
//sumar(20,2);

let restar = function(num1,num2){
    return num1-num2;
    //console.log(num1-num2);
}
console.log(40*restar(5,2));

let multi = function(num1,num2){
    return num1*num2;
}
console.log(multi(num2=20,num1=2));
        //Parametros => Cuerpo de la fun.
//let div = (num1,num2) => num1/num2;
//Operadores ternarios
let div = (num1,num2) => num2 ==0 ? "No se puede dividir entre cero":num1/num2;

let paridad = (num) => num % 2 == 0 ? "Es par":"Es impar";

console.log(div(20,10));
console.log(paridad(7));
//alert(message="Hola Mundo");