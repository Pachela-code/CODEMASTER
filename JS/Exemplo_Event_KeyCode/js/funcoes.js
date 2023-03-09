var frutas = [];

function cadastrar(){
    let input = document.getElementById("fruta");
    frutas.push(input.value);
    input.value = "";
}

function listar(){
    for(let i=0; i<frutas.length; i++){
        console.log((i+1) + " - " + frutas[i]);
    }
}

function teclado(event){
    
    /*if(event.keyCode == 13){
        cadastrar();
    }*/
    
    switch(event.keyCode){
        case 13: cadastrar(); break;
    }
}