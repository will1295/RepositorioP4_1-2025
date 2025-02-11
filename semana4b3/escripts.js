// getElementbyId

let enc = document.getElementById("encabezado");
let parrf = document.getElementsByClassName("parrafo");
Array.from(parrf).forEach(function(elemento){
    elemento.innerHTML="<b>Esto es por js</b>"});
//parrf.forEach(function(elemento){console.log(elemento)});


/*document.getElementsByClassName(); 
document.getElementsByName();
document.getElementsByTagName();
document.getElementsByTagNameNS();  */

/*document.getElementById("ele1").style.color = "red";
document.getElementById("ele2").style.color = "blue";
document.getElementById("ele3").style.color = "green";*/

//Extraccion del texto dentro de una etiqueta
console.log(enc.innerText);
//Extraccion del codigo html dentro de una etiqueta
console.log(enc.innerHTML);

enc.innerHTML = "Este texto ha cambiado con js";

//querySelector() -> etiquetas, clases o por id
//document.querySelector("li").classList.add("elemento");
//Seletor por etiqueta, por clase y por id
//Nombre de la etiqueta,  .          #
document.querySelectorAll("ul#lista li").forEach(function(el){
    el.classList.add("elemento");
})
//Crear y agregar elemento
let boton = document.createElement("button");
boton.textContent = "Haz Click Aqui";

let label1 = document.createElement("label");
label1.textContent = "Ejemplo de label";
//document.body.appendChild(boton);
document.body.append(boton,label1);
//Quitar algun elemento
document.querySelector(".parrafo2").remove();
