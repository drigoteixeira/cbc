<!doctype html>
<!--[if IE 7]> <html class="no-js ie7" lang="pt-br"> <![endif]-->
<!--[if IE 8]> <html class="no-js ie8" lang="pt-br"> <![endif]-->
<!--[if IE 9]> <html class="no-js ie9" lang="pt-br"> <![endif]-->
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>CBC Taurus</title>
    <?php include __DIR__ . '/in/meta.php'; ?>
    <?php include __DIR__ . '/in/estilos.php'; ?>
</head>
<body class="login">

    <img class="logo" src="img/logo-cbc.png">

    <main class="main">

        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-4">
                    <h1>Preencha seu cadastro</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <form action="login.php">
                        <div class="form-group">
                            <label for="inputName">Nome e Sobrenome</label>
                            <input type="text" class="form-control" id="inputName">
                        </div>
                        <div class="form-group">
                            <label for="inputEmail">E-mail</label>
                            <input type="email" class="form-control" id="inputMail">
                        </div>

                        <legend>Endereço:</legend>

                        <div class="form-group">
                           <label for="inputState">Estado</label>
                            <select class="form-control">
                                <option value="">Selecione</option>
                                <option value="AC">Acre</option>
                                <option value="AL">Alagoas</option>
                                <option value="AP">Amapá</option>
                                <option value="AM">Amazonas</option>
                                <option value="BA">Bahia</option>
                                <option value="CE">Ceará</option>
                                <option value="DF">Distrito Federal</option>
                                <option value="ES">Espirito Santo</option>
                                <option value="GO">Goiás</option>
                                <option value="MA">Maranhão</option>
                                <option value="MS">Mato Grosso do Sul</option>
                                <option value="MT">Mato Grosso</option>
                                <option value="MG">Minas Gerais</option>
                                <option value="PA">Pará</option>
                                <option value="PB">Paraíba</option>
                                <option value="PR">Paraná</option>
                                <option value="PE">Pernambuco</option>
                                <option value="PI">Piauí</option>
                                <option value="RJ">Rio de Janeiro</option>
                                <option value="RN">Rio Grande do Norte</option>
                                <option value="RS">Rio Grande do Sul</option>
                                <option value="RO">Rondônia</option>
                                <option value="RR">Roraima</option>
                                <option value="SC">Santa Catarina</option>
                                <option value="SP">São Paulo</option>
                                <option value="SE">Sergipe</option>
                                <option value="TO">Tocantins</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="inputCep">CEP</label>
                            <input type="text" class="form-control" id="inputCEP" placeholder="00000-000">
                        </div>

                        <div class="form-group">
                            <label for="inputCity">Cidade</label>
                            <input type="password" class="form-control" id="inputCity" placeholder="Cidade">
                        </div>

                        <div class="form-group">
                            <label for="inputCity">Endereço</label>
                            <input type="password" class="form-control" id="inputAddress" placeholder="Endereço">
                        </div>

                        <div class="row">
                            <div class="col-xs-3">
                                <label for="inputNumber">Número</label>
                                <input type="number" class="form-control" id="inputNumber" placeholder="">
                            </div>
                            <div class="col-xs-9">
                                <label for="inputComplement">Complemento</label>
                                <input type="text" class="form-control" id="inputComplement" placeholder="">
                            </div>
                        </div>

                        <br>

                        <legend>Dados de acesso:</legend>

                        <div class="form-group">
                            <label for="inputPassword">Senha</label>
                            <input type="password" class="form-control" id="inputPassword">
                        </div>

                        <div class="form-group">
                            <label for="inputConfirmPassword">Confirme a Senha</label>
                            <input type="password" class="form-control" id="inputConfirmPassword">
                        </div>

                        <button type="submit" class="btn btn-primary btn-lg btn-block">Confirmar</button>

                    </form>
                </div>
            </div>

    </main>

    <!-- Scripts -->
    <script src="js/scripts.min.js"></script>
</body>
</html>
