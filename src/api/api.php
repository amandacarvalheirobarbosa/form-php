<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // Dados do formulário
  $Nome = $_POST["Nome"];
  $Email = $_POST["Email"];
  $CNPJ = $_POST["CNPJ"];
  $Celular = $_POST["Celular"];
  $Agencia = $_POST["Agencia"];
  $Conta = $_POST["Conta"];
  $CEP = $_POST["CEP"];
  $Endereco = $_POST["Endereco"];
  $Numero = $_POST["Numero"];
  $Complemento = $_POST["Complemento"];
  $Bairro = $_POST["Bairro"];
  $Cidade = $_POST["Cidade"];
  $UF = $_POST["UF"];
  $TipoServico = $_POST["TipoServico"];

  // Configurações de e-mail
  $destinatario = "amanda.c@gvdsolucoes.com.br"; // Endereço de e-mail para onde enviar a mensagem
  $assunto = "Mensagem do formulário de contato";

  // Monta a mensagem
  $corpo_mensagem = "Nome: " . $Nome . "\n";
  $corpo_mensagem .= "E-mail: " . $Email . "\n";
  $corpo_mensagem .= "CNPJ: " . $CNPJ . "\n";
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
  $corpo_mensagem .= "TipoServico: " . $TipoServico . "\n";

  // Processar uploads de arquivos
  $anexos = array();

  foreach ($_FILES["anexos"]["error"] as $key => $error) {
    if ($error == UPLOAD_ERR_OK) {
      $tmp_name = $_FILES["anexos"]["tmp_name"][$key];
      $name = basename($_FILES["anexos"]["name"][$key]);
      $anexos[] = array("name" => $name, "tmp_name" => $tmp_name);
    }
  }

  // Enviar o e-mail com anexos
  $boundary = md5(time());
  $headers = "From: $email\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"\r\n";
  $message = "--$boundary\r\n";
  $message .= "Content-Type: text/plain; charset=\"utf-8\"\r\n";
  $message .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
  $message .= $corpo_mensagem . "\r\n";

  foreach ($anexos as $anexo) {
    $message .= "--$boundary\r\n";
    $message .= "Content-Type: application/octet-stream; name=\"" . $anexo["name"] . "\"\r\n";
    $message .= "Content-Transfer-Encoding: base64\r\n";
    $message .= "Content-Disposition: attachment\r\n\r\n";
    $message .= chunk_split(base64_encode(file_get_contents($anexo["tmp_name"]))) . "\r\n";
  }

  if (mail($destinatario, $assunto, $message, $headers)) {
    echo "Mensagem com anexos enviada com sucesso!";
  } else {
    echo "Erro ao enviar a mensagem.";
  }
}