function gerarNumero() {
  const min = Number(document.getElementById("min").value);
  const max = Number(document.getElementById("max").value);

  const numero = Math.floor(Math.random() * (max - min + 1)) + min;

  document.getElementById("resultado").textContent =
    `O número gerado é:` + numero;
}

function mudarCor() {
  const divs = document.getElementsByClassName("cores-da-moda");
  for (let i = 0; i < divs.length; i++) {
    const r = Math.floor(Math.random() * 256);
    const g = Math.floor(Math.random() * 256);
    const b = Math.floor(Math.random() * 256);
    const a = 0.8;

    // Guarda aqui os valores
    const cor = "rgba(" + r + ", " + g + ", " + b + ", " + a + ")";
    divs[i].style.backgroundColor = cor;
    console.log(cor);
  }
}
