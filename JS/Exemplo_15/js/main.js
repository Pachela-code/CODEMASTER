function mostrarPassword() {
  var passwordField = document.getElementById("password");
  var passwordIcon = document.getElementById("password-icon");
  passwordField.type = "text";
  passwordIcon.src = "aberto.jpg";
  passwordIcon.alt = "Mostrar senha";
}

function esconderPassword() {
  var passwordField = document.getElementById("password");
  var passwordIcon = document.getElementById("password-icon");
  passwordField.type = "password";
  passwordIcon.src = "fechado.jpg";
  passwordIcon.alt = "Esconder senha";
}
