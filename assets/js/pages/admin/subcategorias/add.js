$(document).ready(function () {
    
    $("#addSubCategoria").on('submit', function (e) {
        e.preventDefault();

        var form = $(this);
        if (form.parsley().isValid()) {
            var datos = JSON.parse(JSON.stringify($(form).serializeArray()));

            $.ajax({
                type: "POST",
                url: "/scripts/admin/categorias/agregar_subcategoria.php",
                data: datos,
                success: function (response) {

                    if(response == "success"){
                        mostrarAlerta('success', 'Subcategoría agregada', 'La subcategoría ha sido agregada');
                    }else{
                        mostrarAlerta('error', 'Error', 'Ha ocurrido un error al agregar la subcategoría');
                    }

                }
            });
        }
    });

});

function mostrarAlerta(icono, titulo, texto){
    return swal({
        icon: icono,
        title: titulo,
        text: texto
      });
}