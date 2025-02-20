class MiComponente extends HTMLElement{
    //Aqui se coloca todo el codigo que necesita realizar
    //el custom element
    constructor(){
        super();
        this.style.color = "red";
        this.style.fontFamily = "Verdana";
    }

    //Metodo que se llama al momento de cargar el custom element
    connectedCallback(){   
    }
    //Metodo que se llama cuando el custom element se elimina
    disconnectedCallback(){
    }   
}

customElements.define("mi-componente",MiComponente);



class CustomEle extends HTMLElement{
    //Aqui se coloca todo el codigo que necesita realizar
    //el custom element
    constructor(){
        super();
    }

    //Metodo que se llama al momento de cargar el custom element
    connectedCallback(){  
        //innerHtml y innerText
        this.innerHTML = `
            <input type="text">
            <button type="button" id="btn">Click</button>
        ` 
    };
    //Metodo que se llama cuando el custom element se elimina
    disconnectedCallback(){
    }   
}
customElements.define("custom-ele",CustomEle);

class ShadowEle extends HTMLElement{
    constructor(){
        super();
        //Agregando el elemento al shadow DOM
        this.attachShadow({mode:"open"});
        /*this.style.color = "green";
        this.style.fontSize = "20pt";*/
        this.shadowRoot.innerHTML = `
        <style>
            p{
                color:green;
            }
        </style>
        <p>Este elemento forma parte del Shadow DOM</p>
        `;
    }

    //Metodo que se llama al momento de cargar el custom element
    connectedCallback(){  
       
    };
    //Metodo que se llama cuando el custom element se elimina
    disconnectedCallback(){
    }   
}
customElements.define("shadow-ele",ShadowEle);

class EstiloShadow extends HTMLElement{
    constructor(){
        super();
        this.attachShadow({mode:"open"});
        this.shadowRoot.innerHTML = `
        <p id='parr1'>Este elemento tendra estilos</p>
        `;
    }

    //Metodo que se llama al momento de cargar el custom element
    connectedCallback(){ 
        this.shadowRoot.querySelector('#parr1').addEventListener("click",
            function(){
                alert("Haz hecho click");
            }
        )
        let estilos = document.createElement("link");
        estilos.rel = "stylesheet";
        estilos.href = "shadows.css";
        //document.append
        //document.appendChild
        this.shadowRoot.appendChild(estilos);
       
    };
    //Metodo que se llama cuando el custom element se elimina
    disconnectedCallback(){
    }   
}
customElements.define("estilo-shadow",EstiloShadow);


//let parrafo = document.getElementById("super");
/*let parr = parrafo.content;
document.body.appendChild(parr);*/

class CustomTem extends HTMLElement{
    constructor(){
        super();
        this.attachShadow({mode:"open"});
        let parrafo = document.getElementById("super").content.cloneNode(true);
        this.shadowRoot.appendChild(parrafo);
    }
    //Metodo que se llama al momento de cargar el custom element
    connectedCallback(){ 
    };
    //Metodo que se llama cuando el custom element se elimina
    disconnectedCallback(){
    }   
}
customElements.define("custom-templ",CustomTem);