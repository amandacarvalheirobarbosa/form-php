function createFileInputs(servico) {
  const documentos = {
    1: [
      "Contrato social com última alteração",
      "CNH + RG ou CPF",
      "Comprovante de endereço de empresa e dos sócios com até 120 dias",
      "Imposto de Renda + Recibo de Entrega",
      "Faturamento dos últimos 12 meses",
      "Endividamento",
    ],
    2: [
      "Contrato social com última alteração",
      "CNH + RG ou CPF",
      "Comprovante de endereço de empresa e dos sócios com até 120 dias",
      "Imposto de Renda + Recibo de Entrega",
      "Faturamento dos últimos 12 meses",
      "Endividamento",
    ],
    3: [
      "Contrato social com última alteração",
      "CNH + RG ou CPF",
      "Comprovante de endereço de empresa e dos sócios com até 120 dias",
      "Imposto de Renda + Recibo de Entrega",
      "Faturamento dos últimos 12 meses",
      "Endividamento",
    ],
    4: [
      "Contrato social com última alteração",
      "CNH + RG ou CPF",
      "Comprovante de endereço de empresa e dos sócios com até 120 dias",
      "Imposto de Renda + Recibo de Entrega",
      "Faturamento dos últimos 12 meses",
      "Endividamento",
      "CND",
      "CRF",
      "RAIS",
    ],
    5: [
      "Contrato social com última alteração",
      "CNH + RG ou CPF",
      "Comprovante de endereço de empresa e dos sócios com até 120 dias",
      "Imposto de Renda + Recibo de Entrega",
      "Faturamento dos últimos 12 meses",
      "Endividamento",
    ],
    6: [
      "Contrato social com última alteração",
      "CNH + RG ou CPF",
      "Comprovante de endereço de empresa e dos sócios com até 120 dias",
      "Imposto de Renda + Recibo de Entrega",
      "Faturamento dos últimos 12 meses",
      "Endividamento",
    ],
    7: [
      "Contrato social com última alteração",
      "CNH + RG ou CPF",
      "Comprovante de endereço de empresa e dos sócios com até 120 dias",
      "Imposto de Renda + Recibo de Entrega",
      "Faturamento dos últimos 12 meses",
      "Endividamento",
    ],
    8: [
      "Contrato social com última alteração",
      "CNH + RG ou CPF",
      "Comprovante de endereço de empresa e dos sócios com até 120 dias",
      "Imposto de Renda + Recibo de Entrega",
      "Faturamento dos últimos 12 meses",
      "Endividamento",
    ],
  };

  const quantidadeDocumentos = servico ? documentos[servico].length : 0;
  const camposArquivo = document.getElementById("camposArquivo");
  camposArquivo.innerHTML = "";

  for (let i = 0; i < quantidadeDocumentos; i++) {
    const fileInput = document.createElement("input");
    fileInput.type = "file";
    fileInput.className =
      "file-input file-input-bordered file-input-primary file-input-sm w-full max-w-md";

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

/* // Chama a função inicialmente para criar campos com base na opção padrão
createFileInputs(document.getElementById("tipoServico").value); */

// Adicionar um ouvinte de evento para detectar mudanças na seleção
const selectServico = document.getElementById("tipoServico");
selectServico.addEventListener("change", function () {
  const selectedOption = this.value;
  createFileInputs(selectedOption);
});
