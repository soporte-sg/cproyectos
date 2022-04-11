$("document").ready(
function() {

    $('#select_categoria').bind('click', function()
    {
        $.ajax({
               type: "GET",
               url: "/documental/TbProcesoNoconformes/cargos/"+$(this).val(),
               beforeSend: function() {
                     $('#div_subcategorias_wrapper').html('<div class="rating-flash" id="cargando_div">Cargando</div>');
                     },
               success: function(msg){
                   $('#div_subcategorias_wrapper').html(msg);
               }
             });
    });

}
);
$("document").ready(
function() {

    $('#select_clasificacion').bind('click', function()
    {
        $.ajax({
               type: "GET",
               url: "/documental/TbProcesoNoconformes/clasificacion/"+$(this).val(),
               beforeSend: function() {
                     $('#div_subcategorias_wrapper1').html('<div class="rating-flash" id="cargando_div">Cargando</div>');
                     },
               success: function(msg){
                   $('#div_subcategorias_wrapper1').html(msg);
               }
             });
    });

}
);