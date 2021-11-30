function validateForm() {
    const fields = ["Username", "Password"]
    const forms = document.forms["login"];
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
    const fields = ["Username", "Password"]
    let ruta = "";
    for (let index = 0; index < fields.length; index++) {
        if (index > 0) {
            ruta += "&";
        }
        ruta += fields[index] + "=" + document.getElementById(fields[index]).value;
    }
    
    // Enviar datos a la base de datos a traves de CrearLogin.php
    $.ajax(
        {
            url: '../php/CrearLogin.php',
            type: 'POST',
            data: ruta,
        }
    ).done(function(res) {
            alert(res);
            window.location.href = "../php/lista_pedidos.php";
        }
    ).fail(function() {
            console.log("No se pudo hacer login");
        }
    ).always(function() {
            console.log("Login ejecutado correctamente");
        }
    )

}


window.onload = function() {
    document.getElementById("boton").onclick = enviar;
};