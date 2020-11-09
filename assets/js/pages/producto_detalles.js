$(document).ready(function () {
    var producto_id= document.getElementById("producto_id").value;
   obtenerProductoPorId(producto_id);

});

function obtenerProductoPorId (producto_id){

	$.ajax({
		type: "GET",
		url: "/scripts/obtener_producto.php",
		data: { producto_id: producto_id },
		success: function (response) {
			let producto = $.parseJSON(response);

			if(producto.length != undefined){
				window.location.href ="/index.php";
			}else{
				//document.getElementById("nombreProducto").innerHTML = producto.nombre;
				$("#nombreProducto").html(producto.nombre);
				$("#descripcionProducto").html(producto.descripcion);
				$("#precioproducto").html(producto.precio + " colones");
			}
		}
	});
}
