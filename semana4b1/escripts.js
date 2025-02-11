let encab = document.getElementById("titulo");
let parrf = document.getElementById("parrafo");
encab.innerText = "He cambiado este texto con JS";
parrf.innerHTML = "<button><a href=''>Inserte este texto con JS</a></button>";
let listado = document.getElementsByTagName("li");
Array.from(listado).forEach(function(elemento){
    elemento.style.color = "blue";
})
/*
document.getElementsByClassName();
document.getElementsByName();
document.getElementsByTagName();*/

let parrf2 = document.querySelector("#parrafo2");
let encabzs = document.querySelectorAll("div.encabezados h2");
encabzs.forEach(function(elemento){
    elemento.style.color = "green";
})
//document.querySelectorAll();
//console.log(parrf2);
//parrf2.style.color = "red";
parrf2.classList.add("colorp");


let boton1 = document.createElement("button");
boton1.textContent = "Haz click aquí";
boton1.setAttribute("class","class-btn");
let input1 = document.createElement("input");
//document.body.appendChild(boton1);
document.body.append(input1,boton1);

/*let elem = document.querySelector("div h3");
elem.remove();*/

let elem = document.querySelectorAll("div h3").
            forEach(function(el){
                el.remove();
            })