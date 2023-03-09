function interruptorLuz(){
    let img = document.getElementById("luz");
    let body = document.body;
    let botao = document.getElementById("botao");

    if(img.getAttribute("src") == "imagens/ligado.jpg"){
        img.setAttribute("src", "imagens/desligado.jpg");
        body.style.backgroundColor = "gray";
        botao.innerHTML = "Ligar Luz";
    }
    else{
        img.setAttribute("src", "imagens/ligado.jpg");
        body.style.backgroundColor = "yellow";
        botao.innerHTML = "Desligar Luz";
    }
}