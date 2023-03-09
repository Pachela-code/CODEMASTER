function mudarCor(event) {
  event.preventDefault();

  var cor = document.querySelector("#cor").value;
  document.body.style.backgroundColor = cor;

  localStorage.setItem("cor", cor);
}

function verificarCookies() {
  if (localStorage.getItem("cor") != null) {
    document.body.style.backgroundColor = localStorage.getItem("cor");
  }

  if (localStorage.getItem("texto") != null) {
    document.querySelector("#texto").value = localStorage.getItem("texto");
  }
}

function escreverTexto(event) {
  event.preventDefault();

  var text = document.querySelector("#texto").value;
  document.querySelector("#resultado").textContent = text;

  localStorage.setItem("texto", text);
}
