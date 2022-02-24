$(document).on("ready", function () {

    $("#enviar").on("click", cargar);
})

function cargar() {


    $.ajax({
        url: "consulta.php",
        data: $("#miform").serialize(),
        type: "POST",
        timeout: 2000
    }).done(function (respuesta, estado, objeto) {
        $('#datagrid').html(respuesta);
        console.log("***estado***")
        console.log(estado)
        console.log("***objeto***")
        console.log(objeto)

    }).fail(function (objeto, estado, error) {
        $('#datagrid').html(error);
        console.log("***estado***")
        console.log(estado)
        console.log("***objeto***")
        console.log(objeto)

        /*  }).always(function (respuesta, estado, objeto) {
              $('#datagridII').html(respuesta);
              console.log("estado")
              console.log(estado)
              console.log("objeto")
              console.log(objeto)*/
    })

}
