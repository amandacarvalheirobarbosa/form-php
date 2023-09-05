//document.getElementById("btnConfirmar").addEventListener("click", function () {
document
  .getElementById("formulario")
  .addEventListener("submit", function (event) {
    event.preventDefault();

    const data = {
      Nome: "",
      Email: "",
      CNPJ: "",
      Celular: "",
      Agencia: "",
      Conta: "",
      CEP: "",
      Endereco: "",
      Numero: "",
      Complemento: "",
      Bairro: "",
      Cidade: "",
      UF: "",
      TipoServico: "",
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
        alert("Dados enviados com sucesso!");
      })
      .catch((error) => {
        console.error("Erro:", error.message);
        alert("Erro ao enviar dados para a API.");
      });
  });
