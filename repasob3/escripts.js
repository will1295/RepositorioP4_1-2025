document.addEventListener("DOMContentLoaded",function(){
    let texto = document.getElementById("titulo");
    texto.innerHTML="JavaScript";

    class MiElemento extends HTMLElement{
        constructor(){
            super();
            this.attachShadow({mode:'open'});
            this.shadowRoot.innerHTML=`
                <h1>Esto es un custom element</h1>
                <form>
                    <label>Ingresa tu usuario</label>
                    <input>
                    <button type="submit">Haz Click Aqui</button>
                </form>
            `;
        }
    }
    customElements.define("mi-elemento",MiElemento);

    class OtroElemento extends HTMLElement{
        constructor(){
            super();
            this.attachShadow({mode:'open'});
            this.shadowRoot.innerHTML=`
            <style>
                p{
                    color:red;
                }
            </style>

            <p>Esto es un parrafo</p>
            `;
        }
    }
    customElements.define("otro-elemento",OtroElemento);

    class UnoMas extends HTMLElement{
        constructor(){
            super();
            this.attachShadow({mode:'open'});
            this.shadowRoot.innerHTML=`
            <p>Esto es otro parrafo</p>
            `;
        } 

        connectedCallback(){
            let estilos = document.createElement("link");
            estilos.rel = "stylesheet";
            estilos.href = "customs.css";
            this.shadowRoot.appendChild(estilos);
        }
    }
    customElements.define("uno-mas",UnoMas);

    



}) 
/*
jQuery
$(document).ready(function(){
    let texto = document.getElementById("titulo");
    texto.innerHTML="JavaScript";
});
*/

