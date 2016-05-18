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
<body id="cadastro" class="confirmacao">

    <img class="logo" src="img/logo-cbc.png">

    <main class="main">

        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <h2>Confirme seus dados</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <form action="cadastro.php" class="form">
                        <div class="form-group">
                            <label for="inputName">CPF:</label>
                            <input type="text" class="form-control" id="inputCpf" placeholder="Informe seu CPF" >
                        </div>
                        <div class="form-group">
                            <label for="inputPassword">Data de Aniversário</label>
                            <input type="number" class="form-control" id="inputPassword" placeholder="DD/MM/AAAA">
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
