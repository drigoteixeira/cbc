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
<body id="cadastro" class="login">

    <img class="logo" src="img/logo-cbc.png">

    <main class="main">

        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <h2>Faça o login</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <form action="homepage.php" class="form">

                        <div class="form-group">
                            <label for="inputEmail">E-mail</label>
                            <input type="email" class="form-control" id="inputMail">
                        </div>

                        <div class="form-group">
                            <label for="inputPassword">Senha</label>
                            <input type="password" class="form-control" id="inputPassword">
                        </div>

                        <button type="submit" class="btn btn-primary btn-lg btn-block">Entrar</button>

                    </form>
                </div>
            </div>

    </main>

    <!-- Scripts -->
    <script src="js/scripts.min.js"></script>
</body>
</html>
