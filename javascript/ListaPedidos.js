function CrearTabla(ruta) {
    let tabla = document.getElementById("TableContentPedidos");
    // Enviar datos a la base de datos a traves de CrearPedido.php
    $.ajax(
        {
            url: 'php/ListaPedido.php',
            type: 'POST',
            data: ruta,
        }
    ).done(function(res) {
            tabla.innerHTML = res;
        }
    ).fail(function() {
            console.log("No se pudo acceder la informacion");
        }
    ).always(function() {
            console.log("Se accedio a la informacion correctamente");
        }
    )
}

window.onload = function() {
    CrearTabla("");
};