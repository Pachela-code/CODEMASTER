// GUARDAR DADOS SEM APAGAR
let listaDados = [];

// IMC GORDITO

function calcularIMC(peso, altura) {
  return peso / (altura * altura);
}

function mostrarDados() {
  let inputs = [
    // BUSCA A INFORMACAO ATRAVES DO ID

    document.getElementById("nome"),
    document.getElementById("idade"),
    document.getElementById("peso"),
    document.getElementById("altura"),
  ];

  // GUARDA A POSICAO PARA CADA UM DOS IDS

  let dados = [
    inputs[0].value,
    inputs[1].value,
    inputs[2].value,
    inputs[3].value,
  ];

  // CALCULO DO IMC USANDO A POSICAO [2] - PESO + POSICAO[3] - ALTURA

  let imc = calcularIMC(dados[2], dados[3]);

  // MOSTRA OS ELEMENTOS DA DIV

  let divDados = document.getElementById("dadosUsuario");

  listaDados.push(
    "Nome: " +
      dados[0] +
      "<br>" +
      "Idade: " +
      dados[1] +
      "<br>" +
      "Peso: " +
      dados[2] +
      "<br>" +
      "Altura: " +
      dados[3] +
      "<br>" +
      "IMC: " +
      imc.toFixed(2) +
      "<br><br>"
  );

  // VAI MOSTRANDO O PESSOAL POR AI ABAIXO
  divDados.innerHTML = "";
  for (let i = 0; i < listaDados.length; i++) {
    divDados.innerHTML += listaDados[i];
  }
}
