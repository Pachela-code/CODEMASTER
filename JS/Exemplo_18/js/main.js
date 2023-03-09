function mostrarUrlCompleta() {
  console.log(location.href);
}

function mostrarUrlBase() {
  console.log(location.origin);
}

function mostrarUrlCaminho() {
  console.log(location.pathname);
}

function mostrarUrlPorta() {
  console.log(location.port);
}

function mostrarUrlProtocolo() {
  console.log(location.protocol);
}

function atualizarPagina() {
  location.reload();
}

function redirecionarGoogle() {
  if (confirm("Tem certeza que deseja ir para a Kikas?")) {
    window.location.href = "https://www.kikas-lasiesta.pt/";
  }
}

function mostrarComprimentoInterno() {
  console.log(innerWidth);
}

function mostrarAlturaInterna() {
  console.log(innerHeight);
}

function mostrarComprimentoExterno() {
  console.log(outerWidth);
}

function mostrarAlturaExterna() {
  console.log(outerHeight);
}
