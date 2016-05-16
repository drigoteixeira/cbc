<!doctype html>
<!--[if IE 7]> <html class="no-js ie7" lang="pt-br"> <![endif]-->
<!--[if IE 8]> <html class="no-js ie8" lang="pt-br"> <![endif]-->
<!--[if IE 9]> <html class="no-js ie9" lang="pt-br"> <![endif]-->
<head>
    <meta charset="utf-8">
    <title>Recuperar Senha | Hooked</title>
    <?php include __DIR__ . '/in/meta.php'; ?>
    <?php include __DIR__ . '/in/estilos.php'; ?>
</head>
<body class="reset">
    <!-- Header -->
    <?php include __DIR__ . '/in/header.php'; ?>

    <main>

        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-4">
                    <h1>Recuperar Senha</h1>
                </div>
            </div>
            <div class="row cadastro">
                <div class="col-md-4 col-md-offset-4">
                    <form action="#">
                        <div class="form-group">
                            <label for="inputName">Informe seu e-mail</label>
                            <input type="text" class="form-control" id="inputName" placeholder="Informe seu e-mail">
                        </div>
                        <button type="submit" class="btn btn-success btn-lg">Confirmar</button>
                    </form>
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
