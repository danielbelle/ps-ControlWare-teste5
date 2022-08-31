$(document).ready(function(){
    $("#submit").click(function (){
        var form = new FormData($("#formulario")[0]);

        $.ajax({
            url:'teste/cliente.php',
            type:'post',
            dataType: 'json',
            cache: false,
            processData: false,
            contentType: false,
            data: form,
            timeOut: 8000,
            success: function(resultado){
                $("#resposta").html(resultado);
            }
        })
    });
})