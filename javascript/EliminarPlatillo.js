function validateForm() {
    const fields = ["id_platillo"];
    const forms = document.forms["BorrarPlatillo"];
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
      let ruta = "id_platillo=" + document.getElementById("id_platillo").value;
      // Enviar datos a la base de datos a traves de CrearPedido.php
      $.ajax(
          {
              url: '../php/BorrarPlatillo.php',
              type: 'POST',
              data: ruta,
          }
      ).done(function(res) {
              alert(res);
          }
      ).fail(function() {
              console.log("No se pudo eliminar la informacion");
          }
      ).always(function() {
              console.log("Se elimino la informacion correctamente");
          }
      )
  
  }
  
  
  window.onload = function() {
       document.getElementById("boton").onclick = enviar;
  };