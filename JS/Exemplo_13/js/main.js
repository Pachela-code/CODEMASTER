function numerosMagicos() {
  for (let i = 1; i <= 10; i++) {
    setTimeout(
      function () {
        document.body.innerHTML += i + "<br>";
      },

      2000 * i
    );
  }
}
