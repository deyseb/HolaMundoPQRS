$(function(){
    $("#formRegistrarUsuario").on("submit", function(e){
        e.preventDefault();
        var f = $(this);
        var formData = new FormData(document.getElementById("formRegistrarUsuario"));
        formData.append("dato", "valor");
        $.ajax({
            url: "controllers/registrarUsuario_controller.php",
            type: "post",
            dataType: "json",
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            beforeSend: function(){
                Swal.fire({
                    title: "Cargando...",
                    text: "Espere un momento por favor!",
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                    imageUrl: "img/loading.gif",
                })
                Swal.disableButtons();
            },
            success: function(response){
                if (response['estado']) {
                    console.log("Se completó el registro!");
                    Swal.fire({
                        icon: "success",
                        title: 'Ok!',
                        text: response['mensaje'],
                    });
                    location.reload();
                } else {
                    console.log("No se completó el registro!");
                    Swal.fire({
                        icon: "error",
                        title: 'Opps!',
                        text: response['mensaje'],
                    })
                    
                }
            },
        });
    });
});
