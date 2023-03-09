function calcularTemperaturas() {
  let temperaturas = [];
  let tempTotal = 0;

  for (let i = 1; i <= 12; i++) {
    const temp = parseFloat(document.querySelector(`#temp${i}`).value);
    temperaturas.push(temp);
    tempTotal += temp;
  }

  const tempMaxima = Math.max(...temperaturas);
  const tempMinima = Math.min(...temperaturas);
  const tempMedia = tempTotal / 12;

  let inferiorMediaAno = 0;

  temperaturas.forEach((temp) => {
    if (temp < tempMedia) {
      inferiorMediaAno++;
    }
  });

  document.querySelector(
    "#result"
  ).innerHTML = `A maior temperatura foi ${tempMaxima.toFixed(2)}°C <br> 
    A menor temperatura foi ${tempMinima.toFixed(2)}°C <br> 
    A temperatura média anual foi ${tempMedia.toFixed(2)}°C <br>
    O número de meses com temperatura abaixo da média foi ${inferiorMediaAno}.`;
}
