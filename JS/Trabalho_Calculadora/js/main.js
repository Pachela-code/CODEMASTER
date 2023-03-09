function updateDisplay(value) {
  document.getElementById("celsius").value += value;
}

function convertTemperature() {
  let celsius = document.getElementById("celsius").value;
  if (isNaN(celsius) || celsius === "") {
    alert("Please enter a valid number");
    return;
  }

  let fahrenheit = (celsius * 9) / 5 + 32;
  let kelvin = parseFloat(celsius) + 273.15;

  fahrenheit = fahrenheit.toFixed(2);
  kelvin = kelvin.toFixed(2);

  document.getElementById("fahrenheit").textContent = fahrenheit;
  document.getElementById("kelvin").textContent = kelvin;
}

function clearDisplay() {
  document.getElementById("celsius").value = "";
  document.getElementById("fahrenheit").textContent = "";
  document.getElementById("kelvin").textContent = "";
}

/* PARA CALCULADORA REAL 

function calculate() {
  let expression = document.getElementById("display").value;
  let result = eval(expression);

  if (isNaN(result)) {
    document.getElementById("display").value = "Error";
  } else if (result < 0) {
    document.getElementById("display").value = "Negative";
  } else {
    document.getElementById("display").value = result.toFixed(2);
  }
}

*/
