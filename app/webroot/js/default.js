/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

function showPopover(object) {
    $(object).popover('show');
}

function hidePopover(object) {
    $(object).popover('hide');
}

function showModal(object) {
    $('#myModalLabel').text($(object).attr("data-titulo"));
    $('#modalDialog').width($(object).attr("data-width") + "%");
    $('#iframeContent').attr("src", app_www + $(object).attr("data-src"));
    $('#myModal').modal('show');
}

function setData(object){
    $("#"+$(object).attr("data-ref")).val($(object).attr("data-name"));
    $("#"+$(object).attr("data-input")).val($(object).attr("data-id"));
    $('#myModal').modal('hide');
}

function enrrutar(object){
    window.location = app_www + $(object).attr("data-ref");
};