//variables de diferentes tipos
var coche = "bmw";
var edad = 18;
var todo = coche + edad;//se pueden concatenar cadenas de texto
var min = "AAAAAAAAAAA";
var mensaje = "Hola";
//ARRAY CON CLAVE Y VALOR...
var array = ["aa","bb",2]


//propiedades-funciones...etc     http://librosweb.es/libro/javascript/capitulo_4/funciones.html

	console.log("hola".length);//.length cuenta caracteres del strig
	console.log(min.toLowerCase());//pasa una cadena de mayusculas a minusculas...toUpperCase() -->a mayusculas
	// alert(coche);

	var posicion = mensaje.indexOf('o'); // posicion = 3  calcula la posicion del caracter indicado en la cadena de texto... si hay varios
	//caracteres iguales saca el primero desde la izquierda....si no existe el caracter devuelve -1 

	posicion = mensaje.lastIndexOf('a');     // posicion = 3
	// alert(posicion);




//.split();  -->
	var palabra = "Hola";
	var letras = palabra.split(""); // letras = ["H", "o", "l", "a"]
	console.log(posicion);


//.length();   -->
	var vocales = ["a", "e", "i", "o", "u"];
	var numeroVocales = vocales.length; // numeroVocales = 5
	alert(array.reverse());


var numero4 = 10;
var numero5 = 0;
alert(numero4/numero5); 

//seguir documentacion



