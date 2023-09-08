function createFileInputs(servico) {
  const documentos = {
    //Pode adicionar quantos serviços quiser (desde que altere no html)
    1: ["CNH + RG ou CPF", "Comprovante de endereço"],
  };

  const quantidadeDocumentos = servico ? documentos[servico].length : 0;
  const camposArquivo = document.getElementById("camposArquivo");
  camposArquivo.innerHTML = "";

  for (let i = 0; i < quantidadeDocumentos; i++) {
    const fileInput = document.createElement("input");
    fileInput.type = "file";
    fileInput.id = "arquivos";
    fileInput.name = "arquivos";
    fileInput.className =
      "file-input file-input-bordered file-input-primary w-full max-w-md file-input-sm";

    const label = document.createElement("label");
    label.className = "label";
    label.innerHTML = `<span class="label-text">${documentos[servico][i]}</span>`;

    const div = document.createElement("div");
    div.className = "flex flex-col pt-4";
    div.appendChild(label);
    div.appendChild(fileInput);

    camposArquivo.appendChild(div);
  }
}

const selectServico = document.getElementById("tipoServico");
selectServico.addEventListener("change", function () {
  const selectedOption = this.value;
  createFileInputs(selectedOption);
});
