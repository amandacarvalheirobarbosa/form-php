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
