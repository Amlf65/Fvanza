$(document).on("ready",Cargar)

function Cargar()
{
     $.ajax({
        url: "consulta.php",
        success: function(resp){
            $('#datagrid').html(resp);

        }
    });

}
