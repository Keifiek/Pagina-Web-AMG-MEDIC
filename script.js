$(document).ready(function(){
    $("form").submit(function(event){
        event.preventDefault();
        var formData = $(this).serialize();       
        $.ajax({
            type: "POST",
            url: "servidor.php",
            data: formData,
            success: function(response){
                alert("Formulario enviado exitosamente");
            },
            error: function(){
                alert("Error: Ocurrio un error en el envio del formulario");
            }
        });
    });
});