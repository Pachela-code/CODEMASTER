var i = 1;

function novoP(){
    let div = document.getElementById("teste");
    div.innerHTML += "<p>Parágrafo " + i + "</p>";
    i++;
}