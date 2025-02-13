//Selectores
/*
document.getElementById(); //Primer elemento con el id
document.getElementsByClassName(); //Todos los elementos por la class
document.getElementsByName(); //Todos los elementos por el name
document.getElementsByTagName(); //Todos los elementos por su etiqueta

document.querySelector(); //Primer elemento que cumpla con el selector
document.querySelectorAll(); //Todos elementos que cumplan con el selector*/ 

let var1 = document.getElementById("titulo1");
//console.log(var1);
//var1.innerText = "Texto cambiado con js";
var1.innerHTML = "<p style='color:red'> Esto es un párrafo </p>";

let var2 = document.querySelector("#titulo2");
var2.innerHTML = "<p style='color:green'> Esto también es un párrafo </p>";

//let var3 = document.getElementById("elemento");
let var3 = document.querySelectorAll("ul#lista li");
//var3[0].innerHTML = "<p style='color:red'> Cambio con JS </p>"; 
var3.forEach(el => {
    el.innerHTML = "<p style='color:red'> Cambio con JS </p>"; 
});


//var3.innerHTML = "<p style='color:red'> Cambio con JS </p>";

var btn1 = document.createElement("button");
btn1.id = "btn1";
btn1.innerText = "Click";
btn1.setAttribute("type","button");
document.body.appendChild(btn1);

var lbl1 = document.createElement("label");
lbl1.id = "lbl1";
lbl1.innerText = "Label creado por JS";

var input1 = document.createElement("input");
input1.id = "input1";
input1.setAttribute("placeholder","Input creado por JS");
document.body.append(lbl1,input1);

var encab2 = document.querySelector("h2");
encab2.remove();