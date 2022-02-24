$(document).on("ready", funcPrincipal);

function funcPrincipal() {

    $("#btnVerificar").on("click", funcVerificar);
}

function funcVerificar() {
    var valorescrito = $("#txtUser").val();
    console.log(valorescrito)

    $.get("veruser.php?usuario=" + valorescrito, function (data, status) {
        var respuesta;
        if (data == "0")
            respuesta = "usuario no existe";
        else respuesta = "usuario existente";
        $("#respuesta").text(respuesta);
        //$("#respuesta").css("font-size", "2em")
    });
}
