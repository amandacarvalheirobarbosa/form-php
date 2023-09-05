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

    if (tipoServico === "") {
      alert("Por favor, selecione um serviço antes de confirmar.");
    } else {
      const data = {
        Nome: nome,
        Email: email,
        CNPJ: cnpj,
        Celular: celular,
        Agencia: agencia,
        Conta: conta,
        CEP: cep,
        Endereco: endereco,
        Numero: numero,
        Complemento: complemento,
        Bairro: bairro,
        Cidade: cidade,
        UF: uf,
        TipoServico: tipoServico,
        arquivos: [],
      };

      fetch("./api/api.php", {
        method: "POST",
        headers: {
          "Content-Type": "application/json",
        },
        body: JSON.stringify(data),
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
