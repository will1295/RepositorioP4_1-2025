class MiComponente extends HTMLElement{
    constructor(){
        super();
    }
    connectedCallback(){
        this.style.color="red";
    }
}
customElements.define("mi-componente",MiComponente);

class MiTabla extends HTMLElement{
    constructor(){
        super();
    }
    connectedCallback(){
        this.innerHTML=`
        <style>
            table,tr,td,th{
                border: 1px solid black;
            }
        </style>

        <table>
            <thead>
                <tr>
                    <th>Encabezado 1</th>
                    <th>Encabezado 2</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td>Elemento</td>
                <td>Elemento</td> 
                </tr>
            </tbody>
        </table>`;
        }
}
customElements.define("mi-tabla",MiTabla);


class ShadowEl extends HTMLElement{
    constructor(){
        super();
        this.attachShadow({mode:'open'});
        this.shadowRoot.innerHTML=`
            <h1>Esto esta dentro del Shadow DOM</h1>`;
        }

        connectedCallback(){
            let estilos = document.createElement('link');
            estilos.rel = "stylesheet";
            estilos.href = "estilos.css";
            this.shadowRoot.appendChild(estilos);

        }
}
customElements.define("shadow-el",ShadowEl);


class ElePlan extends HTMLElement{
    constructor(){
        super();
        this.attachShadow({mode:"open"});
        this.style.color="blue";
        const planti = document.getElementById("plantilla").content.cloneNode(true);
        this.shadowRoot.appendChild(planti);
    }
}

customElements.define("ele-plan",ElePlan);




class EleCustom extends HTMLElement{
    constructor(){
        super();
        console.log("Inicializando el constructor")

        this.attachShadow({mode:"open"});

        this.shadowRoot.innerHTML=`
            <div>Esto es un custom element</div>
        `
    }

    connectedCallback(){
        let estilos = document.createElement('link');
        estilos.rel = "stylesheet";
        estilos.href = "estilos.css";
        this.shadowRoot.appendChild(estilos);
        console.log("Agregar el elemento al DOM");
    }

    disconnectedCallBack(){
        console.log("Elemento eliminado del DOM");
    }
}

customElements.define("ele-custom",EleCustom);