const menus = [
    {
        "nombre" : "Viernes",
        "dia" : 5, // Viernes
        "platillos" : [
            {
                nombre: "PIZZA DE PEPERONNI",
                precio: "$140.00",
                descripcion: "Pizza de 12 pulgadas con queso mozzarella y peperonni."
            },
            {
                nombre: "PIZZA DE JAMON",
                precio: "$140.00",
                descripcion: "Pizza de 12 pulgadas con queso mozzarella y jamon."
            },
            {
                nombre: "PIZZA DE BACON JALAPEÑO",
                precio: "$140.00",
                descripcion: "Pizza de 12 pulgadas con queso mozzarella, jalaño y tocino."
            },
            {
                nombre: "PIZZA DE BACON JALAPEÑO",
                precio: "$140.00",
                descripcion: "Pizza de 12 pulgadas con queso mozzarella, jalaño y tocino."
            },
            {
                nombre: "PIZZA HAWAIANA",
                precio: "$150.00",
                descripcion: "Pizza de 12 pulgadas con queso mozzarella, piña y jamon."
            },
            {
                nombre: "PIZZA SUPREMA",
                precio: "$170.00",
                descripcion: "Pizza de 12 pulgadas con queso mozzarella, peperonni, cebolla, pimiento verde y tomate"
            },
        ]
    },
    {
        "nombre" : "Sabado",
        "dia" : 6, // Viernes
        "platillos" : [
            {
                nombre: "HAMBURGUESA CON PAPAS",
                precio: "$100.00",
                descripcion: "Carne de res magra, cebolla en salsa de barbacoa, queso, tomate, lechuga y aderezo de la casa"
            },
            {
                nombre: "ARROZ CON POLLO",
                precio: "$170.00",
                descripcion: "Delicioso arroz chino con pollo y vegetales para 2 personas"
            },
        ]
    },
]

function CreateEntry(nombre, descripcion, precio) {
    return "<h1><b>" + nombre + "</b> <span class=\"w3-right w3-tag w3-dark-grey w3-round\">" + precio + "</span></h1><p class=\"w3-text-grey\">"
            + descripcion + "</p><hr>";
}

function CrearMenus() {
    for (let index = 0; index < menus.length; index++) {
        const element = menus[index];
        const mod = document.getElementById(element.nombre);
        mod.innerHTML = "";
        for (let index2 = 0; index2 < element.platillos.length; index2++) {
            const element2 = element.platillos[index2];
            mod.innerHTML += CreateEntry(element2.nombre, element2.descripcion, element2.precio);
        }
    }
}

function openMenu(evt, menuName) {
    var i, x, tablinks;
    x = document.getElementsByClassName("menu");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < x.length; i++) {
       tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
    }
    document.getElementById(menuName).style.display = "block";
    evt.currentTarget.firstElementChild.className += " w3-red";
}

window.onload = function() {
  CrearMenus();
  document.getElementById("myLink").click();  
};