function convertTemperature() {
  let celsius = parseFloat(document.getElementById("celsius").value);
  let fahrenheit = celsius * 1.8 + 32;
  let kelvin = celsius + 273.15;

  document.getElementById("fahrenheit").innerHTML = fahrenheit + "°F";
  document.getElementById("kelvin").innerHTML = kelvin + "K";
}
