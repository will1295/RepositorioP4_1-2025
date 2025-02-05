//Funcion nominal
        //nombre
function sumar( num1,num2){ 
    //Cuerpo de la funcion
    let resultado = num1+num2;
    return resultado;
    //Retorno de la función
}

//Funciones anonimas

let resta=function(a,b){
    return a-b;
}
      //Parametros => Cuerpo de la funcion
let multi = (x,y) => x*y; 
//Operador ternario 
let div = (x,y) => y!==0 ? x/y:"No se puede dividir entre cero";

while(true){
    let num1 = Number(prompt("Escribe un número: "));
    let num2 = Number(prompt("Escribe un número: "));
    console.log(sumar(num1,num2));
    console.log(resta(num1,num2));
    console.log(multi(num1,num2));
    console.log(div(num1,num2));
    let op = prompt("Desea probar con otros numeros? (s/n)")
    if(op=="n"){
        break;
    }
}

