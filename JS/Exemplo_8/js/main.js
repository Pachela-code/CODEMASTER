function calculateDuration(start, end) {
  let duration = end - start;
  if (duration < 0) {
    duration = 24 + duration;
  }
  return duration;
}

function displayDuration() {
  let start = document.getElementById("start").value;
  let end = document.getElementById("end").value;
  let duration = calculateDuration(start, end);
  document.getElementById("result").innerHTML =
    "A duração do jogo foi de " + duration + " horas.";
}
