class MiCompo extends HTMLElement{
    constructor(){
        super();
    }
    connectedCallback(){
       // this.style.color = "blue";
        //console.log("Componente agregado al DOM");
        this.innerHTML= `
            <style>
                p{
                    color:blue;
                }
            </style>
            <p>Esto es un párrafo </p>
        `
    }
}
customElements.define("mi-componente",MiCompo);


class MiTabla extends HTMLElement{
    constructor(){
        super();
    }

    connectedCallback(){
         this.innerHTML= `
                    <table>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Edad</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Maria</td>
                        <td>Sanchez</td>
                        <td>20</td>
                    </tr>
                    <tr>
                        <td>Luis</td>
                        <td>Martinez</td>
                        <td>19</td>
                    </tr>
                </tbody>
            </table>
         `
     }
}
customElements.define("mi-tabla",MiTabla);
/*

class MiTabla extends HTMLElement{
    constructor(){
        super();
        this.attachShadow({mode:'open'});
    }

    connectedCallback(){
         this.shadowRoot.innerHTML= `
            <table>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Edad</th>
                    </tr>
                </thead>
                    <tbody>
                        <slot></slot>
                    </tbody>
            </table>
         `;
     };
}

customElements.define("mi-tabla",MiTabla);
*/
class MiElemento extends HTMLElement{
    constructor(){
        super();
        this.attachShadow({mode:'open'});
        this.shadowRoot.innerHTML= `
        <h3><slot></slot></h3>
         `;
    }
    connectedCallback(){
        let estilos = document.createElement("link");
        estilos.rel= "stylesheet";
        estilos.href = "estilos.css"
        this.shadowRoot.appendChild(estilos);    
     }
}
customElements.define("mi-elemento",MiElemento);


class MiTempl extends HTMLElement{
    constructor(){
        super();
        this.attachShadow({mode:'open'});
        let plantilla = document.getElementById("ejemplo").content.cloneNode(true);
        this.shadowRoot.appendChild(plantilla);
    }    
}
customElements.define("tem-elem",MiTempl);
