/**
 * Created by Thiago Cunha on 16/09/2016.
 */

var $btnAumentar = $("#btnAumentar");
var $btnDiminuir = $("#btnDiminuir");
var $elemento = $("body");

function obterTamnhoFonte() {
    return parseFloat($elemento.css('font-size'));
}

$btnAumentar.on('click', function() {
    $elemento.css('font-size', obterTamnhoFonte() + 5);
});

$btnDiminuir.on('click', function() {
    $elemento.css('font-size', obterTamnhoFonte() - 5);
});