const colorButton = document.getElementById('colorButton');
const butoes = document.getElementsByClassName('butoes')[0];
const buttons = butoes.getElementsByTagName('button');

function changeColor() {
  for (let i = 0; i < buttons.length; i++) {
    buttons[i].style.backgroundColor = 'green';
  }
  for (let i = 0; i < buttons.length; i++) {
    buttons[i].onclick = function() {
      this.parentNode.removeChild(this);
      colorButton.remove(colorButton);
    }
  }
}

colorButton.onclick = changeColor;

/* OUUU .remove e siga */

