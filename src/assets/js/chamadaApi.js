//document.getElementById("btnConfirmar").addEventListener("click", function () {
document
  .getElementById("formulario")
  .addEventListener("submit", function (event) {
    event.preventDefault();
    const nome = document.getElementById("nome").value;
    const email = document.getElementById("email").value;
    const cnpj = document.getElementById("cnpj").value;
    const celular = document.getElementById("celular").value;
    const agencia = document.getElementById("agencia").value;
    const conta = document.getElementById("conta").value;
    const cep = document.getElementById("cep").value;
    const endereco = document.getElementById("endereco").value;
    const numero = document.getElementById("numero").value;
    const complemento = document.getElementById("complemento").value;
    const bairro = document.getElementById("bairro").value;
    const cidade = document.getElementById("cidade").value;
    const uf = document.getElementById("uf").value;
    const tipoServico = document.getElementById("tipoServico").value;
    const termos = document.getElementById("termos");

    if (tipoServico === "" && !termos.checked) {
      alert(
        "Por favor, selecione um serviço e aceite os termos para continuar."
      );
    } else if (tipoServico === "") {
      alert("Por favor, selecione um serviço para continuar.");
    } else if (!termos.checked) {
      alert("Por favor, aceite os termos para continuar.");
    } else {
      const formData = new FormData();
      formData.append("Nome", nome);
      formData.append("Email", email);
      formData.append("CNPJ", cnpj);
      formData.append("Celular", celular);
      formData.append("Agencia", agencia);
      formData.append("Conta", conta);
      formData.append("CEP", cep);
      formData.append("Endereco", endereco);
      formData.append("Numero", numero);
      formData.append("Complemento", complemento);
      formData.append("Bairro", bairro);
      formData.append("Cidade", cidade);
      formData.append("UF", uf);
      formData.append("TipoServico", tipoServico);

      const fileInputs = document.querySelectorAll(".file-input");
      const files = [];

      fileInputs.forEach(function (fileInput) {
        const inputFiles = fileInput.files;
        if (inputFiles.length > 0) {
          for (let i = 0; i < inputFiles.length; i++) {
            files.push(inputFiles[i]);
          }
        }
      });

      if (files.length === 0) {
        alert("Selecione os arquivos necessários.");
      } else {
        for (let i = 0; i < files.length; i++) {
          formData.append("arquivos[]", files[i]);
        }
      }

      fetch("./api/api.php", {
        method: "POST",
        body: formData,
      })
        .then((response) => {
          if (!response.ok) {
            throw new Error("Erro ao enviar a solicitação à API");
          }
          return response.json();
        })
        .then((data) => {
          console.log("Resposta da API:", data);
        })
        .catch((error) => {
          console.error("Erro:", error.message);
        });
    }
  });
