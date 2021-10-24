


function validateForm() {
  const fields = ["Nombre", "Numero", "Email", "Orden"]
  const forms = document.forms["crearPedido"];
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
    const fields = ["Nombre", "Numero", "Email", "Orden", "Aclaraciones"]
    let ruta = "";
    for (let index = 0; index < fields.length; index++) {
        if (index > 0) {
            ruta += "&";
        }
        ruta += fields[index] + "=" + document.getElementById(fields[index]).value;
    }
    
    // Enviar datos a la base de datos a traves de CrearPedido.php
    $.ajax(
        {
            url: 'php/CrearPedido.php',
            type: 'POST',
            data: ruta,
        }
    ).done(function(res) {
            alert(res);
        }
    ).fail(function() {
            console.log("No se pudo insertar la informacion");
        }
    ).always(function() {
            console.log("Se inserto la informacion correctamente");
        }
    )

}


window.onload = function() {
     document.getElementById("boton").onclick = enviar;
};