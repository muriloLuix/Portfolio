function telefoneForm(campo) {
    let telefone = campo.value.replace(/\D/g, "");
  
    telefone = telefone.replace(/^(\d{2})(\d)/g, "($1) $2");
    telefone = telefone.replace(/(\d)(\d{4})$/, "$1-$2");
  
    campo.value = telefone;
  }
  
  let campoTelefone = document.getElementById("telefone");
  
  campoTelefone.addEventListener("input", function () {
    telefoneForm(campoTelefone);
  });