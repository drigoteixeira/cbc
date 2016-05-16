<!doctype html>
<!--[if IE 7]> <html class="no-js ie7" lang="pt-br"> <![endif]-->
<!--[if IE 8]> <html class="no-js ie8" lang="pt-br"> <![endif]-->
<!--[if IE 9]> <html class="no-js ie9" lang="pt-br"> <![endif]-->
<head>
    <meta charset="utf-8">
    <title>CBC Taurus</title>
    <?php include __DIR__ . '/in/meta.php'; ?>
    <?php include __DIR__ . '/in/estilos.php'; ?>
</head>
<body class="login">
    <!-- Header -->
    <?php include __DIR__ . '/in/header.php'; ?>

    <main>

        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-4">
                    <h1>Faça login na Hooked</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <form action="#">
                        <div class="form-group">
                            <label for="inputName">E-mail</label>
                            <input type="text" class="form-control" id="inputName" placeholder="Informe seu e-mail">
                        </div>
                        <div class="form-group">
                            <label for="inputPassword">Senha</label>
                            <input type="password" class="form-control" id="inputPassword" placeholder="Informe sua senha">
                        </div>
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Continuar conectado
                                    </label>
                                </div>
                            </div>
                            <div class="col-xs-6 text-right forget-senha">
                                <p><a href="#">Esqueci a senha</a></p>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success btn-lg">Fazer login</button>
                    </form>
                </div>
            </div>

            <hr>
        </div>

        <div class="container cadastro">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <p>Não possui cadastro aqui na Hooked?</p>
                    <a href="#" class="btn btn-default btn-lg btn-block" role="button">Crie seu perfil</a>
                </div>
            </div>
        </div>

    </main>
    <!-- Footer -->
    <?php include __DIR__ . '/in/footer.php'; ?>

    <!-- Scripts -->
    <script src="js/scripts.min.js"></script>
</body>
</html>
