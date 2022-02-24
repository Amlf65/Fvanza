$(document).on("ready", function () {

    $("#myForm").on("submit", ejecutarAjax);
});

function ejecutarAjax(e) {
    e.preventDefault();

    var datosEnviados = {
        'usuario': $("#nombre").val(),
        'contra': $("#password").val()
    }

    /* var datosEnviados1 = $("#myForm").serialize()
    console.log(datosEnviados);
    console.log("---")
    console.log(datosEnviados1);*/
    $.ajax({

        url: 'registroUsuario.php',
        type: 'GET',
        data: datosEnviados,
        timeout: 10000

    }).done(function (data) {
        $("#status").html(data);
    }).fail(function (data) {
        alert(data);
    })
}
