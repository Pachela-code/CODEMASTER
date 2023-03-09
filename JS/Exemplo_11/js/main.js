function addElements() {
  // Criando a div com o parágrafo

  var p = document.createElement("p");
  p.innerHTML = "Versão Brasileira Herbert Richers";
  document.getElementById("paraDiv").appendChild(p);

  // Criando a div com o botão
  var btn = document.createElement("button");
  btn.innerHTML = "Não cliques aqui";
  document.getElementById("btnDiv").appendChild(btn);

  // Criando a div com a imagem específica
  var img = document.createElement("img");
  img.src = "https://static.significados.com.br/foto/flocos-de-neve.jpg";
  document.getElementById("imgDiv").appendChild(img);
}
addElements();

/* 
function footerCracolandia() {
  let footer = document.createElement("footer");
  footer.style.backgroundColor = "#333";
  footer.style.color = "#fff";
  footer.style.textAlign = "center";
  footer.style.padding = "10px";
  footer.innerHTML = "Copyright &copy; 2023";

  document.body.appendChild(footer);
}

*/
