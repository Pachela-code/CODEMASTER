function gerar(){

    //Variaveis Locais
    let input = document.getElementById("numero");
    let numero = parseInt(input.value);
    let div = document.getElementById("resultado");

    //Executar
    reset();
    for(let i=1; i<=numero; i++){
        div.innerHTML += i + "<br>";
    }
    input.focus();

}

function reset(){
    //Variaveis Locais
    let input = document.getElementById("numero");
    let div = document.getElementById("resultado");

    //Executar
    div.innerHTML = "";
    input.value = "";
}

function teclado(event){
    switch(event.key){
        case "Enter": gerar(); break;
    }
}