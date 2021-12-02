function CreateEntry(nombre, descripcion, precio, imagen_path) {
    return  "<div class=\"w3-row\">" 
            + "<div class=\"w3-col s7\">" + "<h1><b>" + nombre + "</b></span></h1><p class=\"w3-text-grey\">" + descripcion + "</p></div>" 
            + "<div class=\"w3-col s4 w3-center\">" + "<img src=\"" + imagen_path + "\" style=\"max-width:70%;\"></img>" + "</div>"
            + "<div class=\"w3-col s1\">" + "<span class=\"w3-right w3-tag w3-dark-grey w3-round\">" + precio + "</span>" + "</div></div>"
            + "<div class=\"w3-row\"> <div class=\"w3-col s12\"> <hr> </div></div>";
}
//<img src="<?php echo  $Imagen_path[$n] ?>" style="max-width:15%;"></img>
function GetDay(day){
    if (day == 5){
        return "Viernes";
    } else{
        return "Sabado";
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

function GetMenus() {
    let ruta = "";
    $.ajax(
        {
            url: 'php/ListaMenus.php',
            type: 'POST',
            data: ruta,
        }
    ).done(function(res) {
            var menus_json = JSON.parse(res);
            for (let index = 0; index < menus_json.length; index++) {
                const element = menus_json[index];
                const mod = document.getElementById(GetDay(element.day));
                mod.innerHTML += CreateEntry(element.nombre, element.descripcion, element.precio, element.imagen_path);
            }
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
    GetMenus();
    document.getElementById("myLink").click();  
};