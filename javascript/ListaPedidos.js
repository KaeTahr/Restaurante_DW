class Pedido {
    constructor(fecha, nombre, mail, platillos, aclaraciones) {
      this.fecha = fecha;
      this.nombre = nombre;
      this.mail = mail;
      this.platillos = platillos;
      this.aclaraciones = aclaraciones;
    }

    get fecha(){
        return this.fecha;
    }

    get nombre(){
        return this.nombre;
    }

    get mail(){
        return this.nombre;
    }

    get platillos(){
        return this.platillos;
    }

    get aclaraciones(){
        return this.aclaraciones;
    }

    static from(json) {
        return Object.assign(new Pedido(), json);
    }   
}

// Los siguientes objetos son dummis ya que los verdaderos pedidos vendran de la base de datos.
const dummy_pedidos = [
    {
        "fecha" : new Date('September 17, 2021 03:24:00'),
        "nombre" : "Jorge Elizondo",
        "numero" : "8341125089",
        "mail" : "jorge_elizondo@mail.com",
        "platillos" : "2 pizza peperoni",
        "aclaraciones" : ""
    },
    {
        "fecha" : new Date("September 17, 2021 04:24:00"),
        "nombre" : "Fernando Carrillo",
        "numero" : "8341125122",
        "mail" : "ferca@mail.com",
        "platillos" : "1 pizza Jamon",
        "aclaraciones" : ""
    },
    {
        "fecha" : new Date("September 17, 2021 03:26:00"),
        "nombre" : "Paco Sanchez",
        "numero" : "8341121234",
        "mail" : "psanchez@mail.com",
        "platillos" : "1 bacon jalapeño",
        "aclaraciones" : "Por favor no poner tantos jalapeños"
    },
    {
        "fecha" : new Date("September 17, 2021 05:35:24"),
        "nombre" : "Roberto Llanos",
        "numero" : "8341123671",
        "mail" : "rllanos@mail.com",
        "platillos" : "3 Supremas",
        "aclaraciones" : "sin aceitunas"
    },
    {
        "fecha" : new Date("September 17, 2021 10:29:50"),
        "nombre" : "Kevin",
        "numero" : "8341129102",
        "mail" : "kevin@mail.com",
        "platillos" : "1 Hawaiana",
        "aclaraciones" : ""
    },
    {
        "fecha" : new Date("September 18, 2021 9:30:00"),
        "nombre" : "Pablo Pizaña",
        "numero" : "8341125471",
        "mail" : "p.pizaña@mail.com",
        "platillos" : "1 Hamburguesa con papas",
        "aclaraciones" : ""
    },
    {
        "fecha" : new Date("September 18, 2021 17:29:50"),
        "nombre" : "Jesus Anaya",
        "numero" : "8341129018",
        "mail" : "j.anaya@mail.com",
        "platillos" : "1 arroz chino con pollo",
        "aclaraciones" : ""
    },
    {
        "fecha" : new Date('September 17, 2021 03:24:00'),
        "nombre" : "Jorge Elizondo",
        "numero" : "8341125089",
        "mail" : "jorge_elizondo@mail.com",
        "platillos" : "2 pizza peperoni",
        "aclaraciones" : ""
    },
    {
        "fecha" : new Date("September 17, 2021 04:24:00"),
        "nombre" : "Fernando Carrillo",
        "numero" : "8341125122",
        "mail" : "ferca@mail.com",
        "platillos" : "1 pizza Jamon",
        "aclaraciones" : ""
    },
    {
        "fecha" : new Date("September 17, 2021 03:26:00"),
        "nombre" : "Paco Sanchez",
        "numero" : "8341121234",
        "mail" : "psanchez@mail.com",
        "platillos" : "1 bacon jalapeño",
        "aclaraciones" : "Por favor no poner tantos jalapeños"
    },
    {
        "fecha" : new Date("September 17, 2021 05:35:24"),
        "nombre" : "Roberto Llanos",
        "numero" : "8341123671",
        "mail" : "rllanos@mail.com",
        "platillos" : "3 Supremas",
        "aclaraciones" : "sin aceitunas"
    },
    {
        "fecha" : new Date("September 17, 2021 10:29:50"),
        "nombre" : "Kevin",
        "numero" : "8341129102",
        "mail" : "kevin@mail.com",
        "platillos" : "1 Hawaiana",
        "aclaraciones" : ""
    },
    {
        "fecha" : new Date("September 18, 2021 9:30:00"),
        "nombre" : "Pablo Pizaña",
        "numero" : "8341125471",
        "mail" : "p.pizaña@mail.com",
        "platillos" : "1 Hamburguesa con papas",
        "aclaraciones" : ""
    },
    {
        "fecha" : new Date("September 18, 2021 17:29:50"),
        "nombre" : "Jesus Anaya",
        "numero" : "8341129018",
        "mail" : "j.anaya@mail.com",
        "platillos" : "1 arroz chino con pollo",
        "aclaraciones" : ""
    },
]

function CrearTabla() {
    dummy_pedidos.sort(function (a , b) {
        if (a.fecha > b.fecha) {
            return -1;
        }
        return 1;
    });
    let tabla = document.getElementById("TableContentPedidos");
    // dummy_pedidos.length
    for (let index = 0; index < dummy_pedidos.length; index++) {
        const elem = dummy_pedidos[index];
        tabla.innerHTML += "<tr><td>" + elem.fecha.toString() + "</td><td>" + elem.nombre + "</td><td>" + elem.numero +
                           "</td><td>" + elem.mail + "</td><td>" + elem.platillos + "</td><td>" + elem.aclaraciones + "</td></tr>";
    }
}

window.onload = function() {
    CrearTabla();
};