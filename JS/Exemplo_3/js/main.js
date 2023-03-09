function celsiusToKelvin(celsius) {
  return celsius + 273.15;
}

function celsiusToFahrenheit(celsius) {
  return celsius * (9/5) + 32;
}

var celsius = 25;
var kelvin = celsiusToKelvin(celsius);
console.log("The temperature in kelvin",kelvin);
var fahrenheit = celsiusToFahrenheit(celsius);
console.log("The temperature in fahrenheit",fahrenheit);

