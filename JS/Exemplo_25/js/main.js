class Caes {
  constructor(nome, idade, raca, nif) {
    this.nome = nome;
    this.idade = idade;
    this.raca = raca;
    this.nif = nif;
  }
}

const fichasCaes = [];

function exibirFicha() {
  const nome = document.getElementById("nome").value;
  const idade = document.getElementById("idade").value;
  const raca = document.getElementById("raca").value;
  const nif = document.getElementById("nif").value;

  fichasCaes.push(new Caes(nome, idade, raca, nif));

  document.querySelectorAll("#registro-caes input").forEach(function (input) {
    input.value = "";
  });

  atualizarTabela();
}

function atualizarTabela() {
  const tabelaBody = document.getElementById("ficha_caes");
  tabelaBody.innerHTML = fichasCaes
    .map(function (cao) {
      return (
        "<tr><td>" +
        cao.nome +
        "</td><td>" +
        cao.idade +
        "</td><td>" +
        cao.raca +
        "</td><td>" +
        cao.nif +
        "</td></tr>"
      );
    })
    .join("");
}
