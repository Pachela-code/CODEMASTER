class Filme {
  constructor(titulo, ano, duracao, nota) {
    this.titulo = titulo;
    this.ano = ano;
    this.duracao = duracao;
    this.nota = nota;
  }

  show() {
    const estrelas = "⭐️".repeat(this.nota);
    return (
      this.titulo + " (" + this.ano + ") - " + this.duracao + " - " + estrelas
    );
  }
}

let listaFilmes = [];

function inserirFilme() {
  const titulo = document.getElementById("titulo").value;
  const ano = document.getElementById("ano").value;
  const duracao = document.getElementById("duracao").value;
  const nota = parseInt(document.getElementById("nota").value);

  const filme = new Filme(titulo, ano, duracao, nota);

  listaFilmes.push(filme);

  atualizarListagem();
}

function atualizarListagem() {
  const listaFilmes = document.getElementById("lista-filmes");

  if (!listaFilmes) {
    console.error("Elemento 'lista-filmes' não encontrado na página.");
    return;
  }

  listaFilmes.innerHTML = "";

  filmes.forEach((filme) => {
    const p = document.createElement("p");
    p.textContent = filme.show();
    listaFilmes.appendChild(p);
  });
}
