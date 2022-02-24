$(document).on("ready", Cargar)
console.log("lee")

function Cargar() {
    $('#datagrid').load('consulta.php');
}
