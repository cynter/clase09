function ingresar()
{
	var user= document.getElementById('miusuario').value; /* Declaro la variable user, sacando su valor con la funcion 
										  document.getElementById y saca el valor del ID del index.php input id="miusuario"  */
console.log(user); // para ver en la consola del navegador la informacion que tiene user
$.ajax({
		url:"nexo.php",
		type:"post",
		data:{usuario:user}
	}).then(function(respuesta){

			alert("Ok");

	},function(respuesta){
			
			alert(respuesta);

	});

}// ingresar