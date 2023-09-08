<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $Nome = $_POST["nome"];
  $Email = $_POST["email"];
  $CPF = $_POST["cpf"];
  $Celular = $_POST["celular"];
  $Agencia = $_POST["agencia"];
  $Conta = $_POST["conta"];
  $CEP = $_POST["cep"];
  $Endereco = $_POST["endereco"];
  $Numero = $_POST["numero"];
  $Complemento = $_POST["complemento"];
  $Bairro = $_POST["bairro"];
  $Cidade = $_POST["cidade"];
  $UF = $_POST["uf"];
  $TipoServico = $_POST["tipoServico"];
  $Arquivos = $_FILES["arquivos"];

  $destinatario = ""; // Endereço de e-mail para onde enviar a mensagem
  $assunto = "Mensagem do formulário de contato";

  $corpo_mensagem = "Nome: " . $Nome . "\n";
  $corpo_mensagem .= "E-mail: " . $Email . "\n";
  $corpo_mensagem .= "CPF: " . $CPF . "\n";
  $corpo_mensagem .= "Celular: " . $Celular . "\n";
  $corpo_mensagem .= "Agência: " . $Agencia . "\n";
  $corpo_mensagem .= "Conta: " . $Conta . "\n";
  $corpo_mensagem .= "CEP: " . $CEP . "\n";
  $corpo_mensagem .= "Endereço: " . $Endereco . "\n";
  $corpo_mensagem .= "Número: " . $Numero . "\n";
  $corpo_mensagem .= "Complemento: " . $Complemento . "\n";
  $corpo_mensagem .= "Bairro: " . $Bairro . "\n";
  $corpo_mensagem .= "Cidade: " . $Cidade . "\n";
  $corpo_mensagem .= "UF: " . $UF . "\n";
  $corpo_mensagem .= "Tipo Serviço: " . $TipoServico . "\n";

  $boundary = md5(time());
  $headers = "From: $Email\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"\r\n";
  $message = "--$boundary\r\n";
  $message .= "Content-Type: text/plain; charset=\"utf-8\"\r\n";
  $message .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
  $message .= $corpo_mensagem . "\r\n";

  foreach ($Arquivos["tmp_name"] as $key => $tmp_name) {
    $name = $Arquivos["name"][$key];
    $type = $Arquivos["type"][$key];

    if (is_uploaded_file($tmp_name)) {
      $file_content = chunk_split(base64_encode(file_get_contents($tmp_name)));
      $message .= "--$boundary\r\n";
      $message .= "Content-Type: $type; name=\"$name\"\r\n";
      $message .= "Content-Transfer-Encoding: base64\r\n";
      $message .= "Content-Disposition: attachment; filename=\"$name\"\r\n";
      $message .= "\r\n" . $file_content . "\r\n";
    }
  }

  if (mail($destinatario, $assunto, $message, $headers)) {
    echo "Mensagem com anexos enviada com sucesso!";
  } else {
    echo "Erro ao enviar a mensagem.";
  }
}
