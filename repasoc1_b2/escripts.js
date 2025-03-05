document.addEventListener("DOMContentLoaded",function(){
    
    let btn1 = document.getElementById("btn");
    btn1.addEventListener("click",function(){
        alert("Haz hecho click en este boton");
    })

    class MiElemento extends HTMLElement{
        constructor(){
            super();
            this.innerHTML = `
                <h1>Titulo del custom element</h1>
                <p>Los custom elements son parte de los webcomponents</p>
            `;
        }
    }

    customElements.define('mi-elemento',MiElemento);

    class ShadowElemento extends HTMLElement{
        constructor(){
            super();
            this.attachShadow({mode:'open'});
            this.shadowRoot.innerHTML = `
                <style>
                    p{
                        color: red;
                    }
                </style>

                <h1>Titulo del custom element dentro shadow dom</h1>
                <p>Los custom elements con shadow dom
                No se mostraran a menos que se acceda a ellos por medio 
                del shadow root</p>
            `;
        }
    }

    customElements.define('elemento-shadow',ShadowElemento);

    class OtroElemento extends HTMLElement{
        constructor(){
            super();
            this.attachShadow({mode:'open'});
            this.shadowRoot.innerHTML = `
                <h1>Podemos agregar otra hoja de estilos a los custom element</h1>
                <p>Y tener el archivo separado para una mejor
                modularizacion del codigo</p>
                <button type="button" id="btn">Click</button>
            `;
        }
        connectedCallback(){
            let estilos = document.createElement('link');
            estilos.rel = 'stylesheet';
            estilos.href = 'estilos2.css';
            this.shadowRoot.appendChild(estilos);

            let boton = this.shadowRoot.getElementById("btn");
            boton.addEventListener("click",function(){
                alert("Haz hecho click en mi custom element")
            })
        }
    }

    customElements.define('otro-elemento',OtroElemento);




})


