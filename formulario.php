<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/css/style.css" />
  <link rel="icon" type="image/x-icon" href="./favicon.ico" />
  <title>Formulário</title>
</head>

<body>
  <div class="container">
    <form id="formulario" method="POST">
      <div class="flex flex-col form-control max-w-screen-md p-4">

        <div class="flex flex-row justify-center">
          <a href='https://apoio.gvdsolucoes.com.br/'>
            <Image src="/assets/images/logo.png" alt="logo" width="200" height="150" />
          </a>
        </div>

        <div class="flex flex-col">
          <label class="label">
            <span class="label-text">Nome</span>
          </label>
          <input id="nome" name="nome" type="text" placeholder="nome" maxLength="50"
            class="input input-bordered input-primary w-full max-w-md" />
        </div>

        <div class="flex flex-col">
          <label class="label">
            <span class="label-text">E-mail</span>
          </label>
          <input id="email" name="email" type="email" placeholder="email@email.com" maxLength="50"
            class="input input-bordered input-primary w-full max-w-md" />
        </div>

        <div class="flex flex-row">
          <div class="flex flex-col">
            <label class="label">
              <span class="label-text">CNPJ</span>
            </label>
            <input id="cnpj" name="cnpj" oninput="maskInput(this, '###.###.###/####-##')"
              placeholder="xxx.xxx.xxx/xxxx-xx" maxLength="19"
              class="input input-bordered input-primary w-full max-w-md" />
          </div>
          <div class="flex flex-col pl-4">
            <label class="label">
              <span class="label-text">Celular</span>
            </label>
            <input id="celular" name="celular" oninput="maskInput(this, '(##) #####-####')"
              placeholder="(xx) xxxxx-xxxx" maxLength="15" class="input input-bordered input-primary w-full max-w-md" />
          </div>
        </div>

        <div class="flex flex-row">
          <div class="flex flex-col">
            <label class="label">
              <span class="label-text">Agência</span>
            </label>
            <input id="agencia" name="agencia" type='text' oninput="maskInput(this, '#####-#')" placeholder="xxxxx-x"
              maxLength="10" class="input input-bordered input-primary w-full max-w-md" />
          </div>
          <div class="flex flex-col pl-4">
            <label class="label">
              <span class="label-text">Conta</span>
            </label>
            <input id="conta" name="conta" type='text' oninput="maskInput(this, '########-#')" placeholder="xxxxxxxx-x"
              maxLength="12" class="input input-bordered input-primary w-full max-w-md" />
          </div>
        </div>

        <div class="flex flex-col">
          <label class="label">
            <span class="label-text">CEP</span>
          </label>
          <input id="cep" name="cep" type="text" value="" oninput="maskInput(this, '#####-###')" placeholder="xxxxx-xxx"
            maxlength="9" onblur="pesquisacep(this.value);"
            class="input input-bordered input-primary w-full max-w-md" />
        </div>

        <div class="flex flex-col">
          <label class="label">
            <span class="label-text">Endereço</span>
          </label>
          <input id="endereco" name="endereco" type="text" placeholder="rua/av" maxLength="100"
            class="input input-bordered input-primary w-full max-w-md" />
        </div>

        <div class="flex flex-row">
          <div class="flex flex-col">
            <label class="label">
              <span class="label-text">Número</span>
            </label>
            <input id="numero" name="numero" type="text" placeholder="nº" maxLength="10"
              class="input input-bordered input-primary w-full max-w-md" />
          </div>
          <div class="flex flex-col pl-4">
            <label class="label">
              <span class="label-text">Complemento</span>
            </label>
            <input id="complemento" name="complemento" type="text" placeholder="complemento" maxLength="50"
              class="input input-bordered input-primary w-full max-w-md" />
          </div>
        </div>

        <div class="flex flex-col">
          <label class="label">
            <span class="label-text">Bairro</span>
          </label>
          <input id="bairro" name="bairro" type="text" placeholder="bairro" maxLength="50"
            class="input input-bordered input-primary w-full max-w-md" />
        </div>

        <div class="flex flex-row">
          <div class="flex flex-col w-full">
            <label class="label">
              <span class="label-text">Cidade</span>
            </label>
            <input id="cidade" name="cidade" type="text" placeholder="cidade" maxLength="50"
              class="input input-bordered input-primary w-full max-w-md" />
          </div>
          <div class="flex flex-col w-full pl-4">
            <label class="label">
              <span class="label-text">UF</span>
            </label>
            <select id="uf" name="uf" class="select select-primary max-w-md">
              <option></option>
              <option value="AC">AC</option>
              <option value="AL">AL</option>
              <option value="AM">AM</option>
              <option value="AP">AP</option>
              <option value="BA">BA</option>
              <option value="CE">CE</option>
              <option value="DF">DF</option>
              <option value="ES">ES</option>
              <option value="GO">GO</option>
              <option value="MA">MA</option>
              <option value="MG">MG</option>
              <option value="MS">MS</option>
              <option value="MT">MT</option>
              <option value="PA">PA</option>
              <option value="PB">PB</option>
              <option value="PE">PE</option>
              <option value="PI">PI</option>
              <option value="PR">PR</option>
              <option value="RJ">RJ</option>
              <option value="RN">RN</option>
              <option value="RO">RO</option>
              <option value="RR">RR</option>
              <option value="RS">RS</option>
              <option value="SC">SC</option>
              <option value="SE">SE</option>
              <option value="SP">SP</option>
              <option value="TO">TO</option>
            </select>
          </div>
        </div>

        <div class="flex flex-col">
          <label class="label">
            <span class="label-text">Tipo Serviço</span>
          </label>
          <select id="tipoServico" name="tipoServico" class="select select-primary w-full max-w-md"
            onchange="createFileInputs(this.value);">
            <option disabled>Selecione</option>
            <option value="1">Antecipação de recebíveis</option>
            <option value="2">Home Equity</option>
            <option value="3">Crédito Tributário</option>
            <option value="4">Giro PME BNDES</option>
            <option value="5">Comissária</option>
            <option value="6">Empréstimo com ou sem garantia</option>
            <option value="7">Fomento a produção/matéria prima</option>
            <option value="8">Consignado para seus funcionários</option>
          </select>
        </div>

        <div id="camposArquivo" name="camposArquivo" class="flex flex-col"></div>

        <!-- <div id="camposArquivo" name="camposArquivo" class="flex flex-col">
          <div class="flex flex-col pt-4">
            <label class="label">
              <span class="label-text"></span>
            </label>
            <input type="file"
              class="file-input file-input-bordered file-input-primary file-input-sm w-full max-w-md" />
          </div>
        </div> -->

        <div class="form-control pt-4">
          <label class="label cursor-pointer justify-start">
            <input type="checkbox" class="checkbox checkbox-primary" />
            <span class="label-text pl-2">Concordo com os a <a href="" class='link link-primary'>Política de
                Privacidade</a></span>
          </label>
        </div>

        <div class="flex flex-row justify-evenly pt-4">
          <a id="btnCancelar" href="https://apoio.gvdsolucoes.com.br/"
            class="btn btn-active btn-ghost w-48">Cancelar</a>
          <button id="btnConfirmar" type="submit" class="btn btn-primary w-48">Confirmar</button>
        </div>

      </div>
    </form>
  </div>

  <!-- Footer -->
  <footer class="footer text-base-content">
    <div class="flex flex-row justify-between">
      <div class="flex flex-row justify-start">
        <a href="https://apoio.gvdsolucoes.com.br/">
          <images src="./assets/images/logo.png" style="height: 3vh; margin: 10px" />
        </a>
      </div>
      <div class="flex flex-row justify-end">
        <a href="https://www.gvdsolucoes.com.br">
          <images src="./assets/images/logo-gvd.png" style="height: 3vh; margin: 10px" />
        </a>
      </div>
    </div>
  </footer>

  <!-- JavaScript -->
  <script type="text/javascript" src="./assets/js/script.js"></script>
  <script type="text/javascript" src="./assets/js/documentos.js"></script>
  <script type="text/javascript" src="./assets/js/cepScript.js"></script>
  <script type="text/javascript" src="./assets/js/chamadaApi.js"></script>
</body>

</html>