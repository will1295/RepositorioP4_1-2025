document.addEventListener("DOMContentLoaded",function(){
    document.querySelector(".parrafo").innerText="He cambiado este texto";

    class MiElemento extends HTMLElement{
        constructor(){
            super();
            this.attachShadow({mode:'open'});
            this.shadowRoot.innerHTML = `
                <p style="color: red;">Esto es un custom element</p>
            `
        }
    }
    customElements.define("mi-elemento",MiElemento);

    class UnFormulario extends HTMLElement{
        constructor(){
            super();
            this.attachShadow({mode:'open'});
            this.shadowRoot.innerHTML = `
                <h1>Formulario Custom</h1>
                <form>
                    <label>Ingrese su usuario</label>
                    <input>
                    <label>Ingrese su contraseña</label>
                    <input type="password">
                    <button id="click" type="button">Login</button>
                </form>
            `
            this.shadowRoot.querySelector("#click").addEventListener("click",function(){
                alert("Click en custom element");
            })
        }
    }
    customElements.define("un-formulario",UnFormulario);

    class OtroElemento extends HTMLElement{
        constructor(){
            super();
            this.attachShadow({mode:'open'});
            this.shadowRoot.innerHTML = `
                <style>
                    p{
                        color:blue;
                    }
                </style>

                <p>Esto es otro custom element</p>
            `
        }
    }
    customElements.define("otro-elemento",OtroElemento);

    class EstiloElemento extends HTMLElement{
        constructor(){
            super();
            this.attachShadow({mode:'open'});
            this.shadowRoot.innerHTML = `
                <div class="container">
                    <h1 id="titulo">Elemento con CSS</h1>
                    <p>Aqui hay otro custom element</p>
                </div>
            `
        }

        connectedCallback(){
            let estilos = document.createElement("link");
            estilos.rel = "stylesheet";
            estilos.href = "estilos2.css";
            this.shadowRoot.appendChild(estilos);
        }
    }
    customElements.define("estilo-elemento",EstiloElemento);

})



