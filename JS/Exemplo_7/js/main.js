function calculaOrdenado() {
  // Obtém o valor do salário e do incremento
  var ordenado = parseFloat(document.getElementById("ordenado").value);
  var incremento =
    parseFloat(document.getElementById("incremento").value) / 100;

  // Calcula o novo salário base
  var novoOrdenado = ordenado + ordenado * incremento;

  // Exibe o resultado na div "resultado"
  document.getElementById("resultado").innerHTML =
    "Novo ordenado base: € " + novoOrdenado;
}