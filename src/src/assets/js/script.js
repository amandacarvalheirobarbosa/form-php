/* Mascara */
function maskInput(input, pattern) {
  var value = input.value.replace(/\D/g, "");
  var formattedValue = "";
  var patternIndex = 0;

  for (var i = 0; i < value.length; i++) {
    if (patternIndex >= pattern.length) {
      break;
    }

    if (pattern[patternIndex] === "#") {
      formattedValue += value[i];
      patternIndex++;
    } else {
      formattedValue += pattern[patternIndex];
      patternIndex++;
      i--;
    }
  }

  input.value = formattedValue;
}

/* Valida CPF e CNPJ */
/* function validaCPFCNPJ(cpfcnpj) {
  const regexCPFCNPJ =
    /^(\d{3}\.\d{3}\.\d{3}-\d{2}|\d{2}\.\d{3}\.\d{3}\/\d{4}-\d{2})$/;

  if (regexCPFCNPJ.test(cpfcnpj)) {
    return true;
  } else {
    return false;
  }
} */
