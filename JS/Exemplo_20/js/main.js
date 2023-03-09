/*function guardar() {
  const nome = document.getElementById("nome").value;
  const nota1 = parseFloat(document.getElementById("nota1").value);
  const nota2 = parseFloat(document.getElementById("nota2").value);

  const media = ((nota1 + nota2) / 2).toFixed(1);

  const informacoes = { nome: nome, nota1: nota1, nota2: nota2, media: media };
  console.log(informacoes);

  const divInformacoes = document.getElementById("informacoes");
  divInformacoes.innerHTML = `
    <p>Nome: ${informacoes.nome}</p>
    <p>Nota 1: ${informacoes.nota1}</p>
    <p>Nota 2: ${informacoes.nota2}</p>
    <p>Média: ${informacoes.media}</p>
  `;
}
*/
var pessoas = [];

function guardar() {
  const nome = document.getElementById("nome").value;
  const nota1 = parseFloat(document.getElementById("nota1").value);
  const nota2 = parseFloat(document.getElementById("nota2").value);

  const media = ((nota1 + nota2) / 2).toFixed(1);

  const informacoes = { nome: nome, nota1: nota1, nota2: nota2, media: media };

  pessoas.push(informacoes);

  const posicao = pessoas.indexOf(informacoes);
  console.log(pessoas);

  const divInformacoes = document.getElementById("informacoes");

  // CENINHA DO APPENDCHILD

  const pessoaDiv = document.createElement("div");
  pessoaDiv.innerHTML = `
    <p>Nome: ${informacoes.nome}</p>
    <p>Nota 1: ${informacoes.nota1}</p>
    <p>Nota 2: ${informacoes.nota2}</p>
    <p>Média: ${informacoes.media}</p>
    <hr>
  `;
  divInformacoes.appendChild(pessoaDiv);
}

/*

function reset() {
  document.getElementById("nome").value = "";
  document.getElementById("nota1").value = "";
  document.getElementById("nota2").value = "";

  pessoas = [];

  const divInformacoes = document.getElementById("informacoes");
  while (divInformacoes.firstChild) {
    divInformacoes.removeChild(divInformacoes.firstChild);
  }
}

*/
