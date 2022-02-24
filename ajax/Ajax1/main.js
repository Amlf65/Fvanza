$(document).on("ready", main);

function cargarNota(url, ev) {
    ev.preventDefault();
    $("#capa").text("cargando...");
    setTimeout(function () {
        $("#capa").load(url);
    }, 1000)
}

function main(e) {

    $("#botonMS").on("click", function (e) {
        cargarNota("ms.txt", e)

    })
    $("#botonGoogle").on("click", function (e) {
        cargarNota("google.txt", e)
    })
    $("#botonApple").on("click", function (e) {
        cargarNota("apple.txt", e)
    })
}
