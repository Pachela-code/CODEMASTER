/* Ou usar $(document).ready() para que a função só seja executada 
depois que a pagina seja totalmente carregada */

$("#btn-converter").click(function () {
  var valorCelsius = $("#celsius").val();

  var valorFahrenheit = valorCelsius * 1.8 + 32;

  var valorKelvin = parseFloat(valorCelsius) + 273.15;

  $("#fahrenheit").html(valorFahrenheit.toFixed(2));
  $("#kelvin").html(valorKelvin.toFixed(2));

  $("#div-resultado").fadeToggle(2000);
});

$("#btn-reset").click(function () {
  $("#div-resultado").fadeOut(2000, function () {
    $("#fahrenheit").html("");
    $("#kelvin").html("");
    $("#celsius").val("");
  });
});
