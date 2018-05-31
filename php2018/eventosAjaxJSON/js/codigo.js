var http_request = false;

function peticion() {

    http_request = false;

    //Generamos el objeto XMLHttpRequest dependiendo del navegador
    if (window.XMLHttpRequest) { // Mozilla, Safari,...
        http_request = new XMLHttpRequest();
        if (http_request.overrideMimeType) {
            http_request.overrideMimeType('text/xml');
            // Ver nota sobre esta linea al final
        }
    } else if (window.ActiveXObject) { // IE
        try {
            http_request = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
            try {
                http_request = new ActiveXObject("Microsoft.XMLHTTP");
            } catch (e) {}
        }
    }
    //Comprobamos que se ha pdido generar
    if (!http_request) {
        alert('Falla :( No es posible crear una instancia XMLHTTP');
        return false;
    }

    //Lanzamos la peticion GET
    http_request.onreadystatechange = capturamosCambios;
    //http_request.open('GET', "http://localhost/1daw/cursoPHP/eventosAjaxJSON/php/peticion.php", true);
    //http_request.send(null);
    //Lanzamos la peticion POST
    http_request.open('POST', "http://localhost/1daw/cursoPHP/eventosAjaxJSON/php/peticionPost.php", true);
    http_request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    postData="nombre=paco";
    http_request.send(postData);

}

function capturamosCambios() {

    if (http_request.readyState == 4) {
        if (http_request.status == 200) {
            //OK en la respuesta. Convertimos el JSON a un array
            //var miInfo=JSON.parse(http_request.responseText);
            //alert(miInfo["nombre"]);
            console.log(http_request.responseText);
        } else {
            alert('Hubo problemas con la petición.');
        }
    }

}
