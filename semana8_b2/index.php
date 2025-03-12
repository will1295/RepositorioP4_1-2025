<?php
    //Obtener el valor de Pedro.
    $arreglo1 = ['Juan','Pedro','Ana','Maria'];
    echo $arreglo1[1];
    echo "<br>";
    //Escribir con echo mi mascota es una gallina
    $arreglo2 = array('Gato','Perro','Gallina','Perico');
    echo "Mi mascota es una ".$arreglo2[2];
    echo "<br>";
    //Yo vivo en Chinameca
    $arreglo3 = ["Ciudad1"=>"Chinameca","Ciudad2"=>"Corinto",
                "Ciudad3"=>"Alegria"];
    echo "Yo vivo en ".$arreglo3["Ciudad1"];
    //Mi hermano viajo a Francia
    $arreglo4 = array("Lugar1"=> "Francia","Lugar2"=>"China",
                    "Lugar3"=>"El Salvador");
    echo "Mi hermano viajo a ".$arreglo4['Lugar1'];
    echo '<br>';

    //Fui al mercado y compre Naranjas y Zanahorias
    $arreglo5 = array(array("Manzana","Naranja","Guineo")
                    ,array("Lechuga","Zanahoria","Pepino"));

    echo "Fui al mercado y compre ".$arreglo5[0][1]
        ."s y ".$arreglo5[1][1]."s";
    echo "<br>";

    //Maria fue al Parque 1
    $arreglo6 = ["Personas"=>[
        "Nombre"=> "Maria","Apellido"=>'Perez'
    ],"Lugares"=>["Parque"=>"Parque 1"],
        ["Playa"=>"Playa1"]
    ];
    
    echo $arreglo6['Personas']['Nombre']." fue al "
    .$arreglo6['Lugares']['Parque'];
    echo '<br>';

    //Pepito Juarez estudia en la sede San Miguel la carrera de Medicina
    $arreglo7 = ["Estudiantes"=>[
        "Nombre"=>"Pepito","Apellido"=>"Juarez",
        "Sede"=>[
            "San Miguel",
            "La Union"
        ],
        "Carrera"=>[
            "Ingenieria",
            "Arquitectura",
            "Medicina"
        ]
    ]];

    echo $arreglo7['Estudiantes']['Nombre']
        ." ".$arreglo7['Estudiantes']['Apellido']
        ." estudia en la sede ".$arreglo7['Estudiantes']['Sede'][0]
        ." la carrera de ".$arreglo7['Estudiantes']['Carrera'][2];

?>