/* 
$(document).ready(function () {
  $("#eCEP").bind('blur', function (e) {
    ConsultaCEP();
  });
});

function ConsultaCEP() {
  var CEP = $("#eCEP").val().replace("-", "");
  if (CEP.length == 8) {
    var url = 'https://viacep.com.br/ws/' + CEP + '/json/'
    $.ajax({
      url: url,
      datatype: 'jsonp',
      crossdomain: true,
      contenType: "application/json",
      success: function (json) {
        $("#endereco").val(json.logradouro);
        $("#bairro").val(json.bairro);
        $("#cidade").val(json.localidade);
        $("#uf").val(json.uf);
      },
      error: function (xhr, ajaxOptions, thrownError) {
        alert(thrownError);
      }

    });
  }
} 
*/

// https://viacep.com.br/exemplo/javascript/
function limpaCEP() {
  document.getElementById("endereco").value = "";
  document.getElementById("bairro").value = "";
  document.getElementById("cidade").value = "";
  document.getElementById("uf").value = "";
}

function cep(conteudo) {
  if (!("erro" in conteudo)) {
    document.getElementById("endereco").value = conteudo.logradouro;
    document.getElementById("bairro").value = conteudo.bairro;
    document.getElementById("cidade").value = conteudo.localidade;
    document.getElementById("uf").value = conteudo.uf;
  } else {
    limpaCEP();
    alert("CEP não encontrado.");
  }
}

function pesquisacep(valor) {
  var cep = valor.replace(/\D/g, "");
  if (cep != "") {
    var validacep = /^[0-9]{8}$/;

    if (validacep.test(cep)) {
      document.getElementById("endereco").value = "...";
      document.getElementById("bairro").value = "...";
      document.getElementById("cidade").value = "...";
      document.getElementById("uf").value = "...";

      var script = document.createElement("script");
      script.src = "https://viacep.com.br/ws/" + cep + "/json/?callback=cep";
      document.body.appendChild(script);
    } else {
      limpaCEP();
      alert("Formato de CEP inválido.");
    }
  } else {
    limpaCEP();
  }
}
