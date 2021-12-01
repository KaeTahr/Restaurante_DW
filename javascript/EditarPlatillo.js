function validateForm() {
    const fields = ["id_platillo", "nombre", "descripcion", "precio"];
    const forms = document.forms["editarPlatillo"];
    for (let i = 0; i < fields.length; i++) {
      if (forms[i].value === "") {
        alert(fields[i] + " no puede estar vacio");
        return false;
      }
    }
    return true;
}
  
function enviar() {
    // Verificar que todos los campos esten completos.
    if (!validateForm()) {
        return;
    }

    // TODO(jesusanaya) Verificar que no haya SQL embebido.


    // Obtener entradas
    let ruta = "dia=" + $("input[name='dia']:checked").val();
    const fields = ["id_platillo", "nombre", "descripcion", "precio"];
    for (let index = 0; index < fields.length; index++) {
        ruta += "&";
        ruta += fields[index] + "=" + document.getElementById(fields[index]).value;
    }
    // Enviar datos a la base de datos a traves de CrearPedido.php
    $.ajax(
        {
            url: '../php/EditarPlatillo.php',
            type: 'POST',
            data: ruta,
        }
    ).done(function(res) {
            alert(res);
        }
    ).fail(function() {
            console.log("No se pudo editar la informacion");
        }
    ).always(function() {
            console.log("Se edito la informacion correctamente");
        }
    )

}


window.onload = function() {
    document.getElementById("boton").onclick = enviar;
};