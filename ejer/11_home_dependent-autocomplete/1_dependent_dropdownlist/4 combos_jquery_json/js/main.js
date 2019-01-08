var ciudades;
var departamentos;

var searchIntoJson = function (obj, column, value) {
    var results = [];
    var valueField;
    var searchField = column;
    for (var i = 0 ; i < obj.length ; i++) {
        valueField = obj[i][searchField].toString();
        if (valueField === value) {
            results.push(obj[i]);
        }
    }
    return results;
};

var loadDepartamentos = function () {
    $("#departamento").empty();
    $("#departamento").append('<option value="" selected="selected"></option>');
    $.each(departamentos, function (i, valor) {
        $("#departamento").append("<option value='" + valor.departamentoId + "'>" + valor.nombreDepartamento + "</option>");
    });
};

var loadCiudades = function (departamentoId) {
    var ciudadesDepto = searchIntoJson(ciudades, "departamentoId", departamentoId);
    $("#ciudad").empty();
    $("#ciudad").append('<option value="" selected="selected"></option>');
    $.each(ciudadesDepto, function (i, valor) {
        $("#ciudad").append('<option value="' + valor.ciudadId + '">' + valor.nombreCiudad + '</option>');
    });
};

$(document).ready(function () {
    $.getJSON("data/departamentos.json", function (data) {
        departamentos = data;
    });

    $.getJSON("data/ciudades.json", function (data) {
        ciudades = data;
        setTimeout(function () {
            if (ciudades !== undefined) {
                loadDepartamentos();
            }
        }, 2000);
    });

    $("#departamento").change(function () {
        var departamentoId = $("#departamento").val();
        loadCiudades(departamentoId);
    });
});
