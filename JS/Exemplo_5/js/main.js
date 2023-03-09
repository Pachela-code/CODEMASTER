function alterarClasses() {

  // Variavel

  let elements = document.getElementsByClassName("texto");
  
  // Negocio
  
  for (let i = 0; i < elements.length; i++) {
    if (elements[i].style.borderRadius === "2px") {
      elements[i].style.borderRadius = "";
      elements[i].style.border = "";
      elements[i].style.color = "";
    } else {
      elements[i].style.borderRadius = "2px";
      elements[i].style.border = "5px solid white";
      elements[i].style.color = "red";
      
    }
  }

}
