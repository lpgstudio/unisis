<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <title>Formulário de Login</title>
</head>
<body>
    
    <section>
        <?php print_r($_POST); ?>
        <div class="container-login">
            <div class="user signinBx">
                <div class="imgBx"><img src="https://picsum.photos/id/336/400/500" alt=""></div>
                <div class="formBx">
                    <form class="" action="#" method="post">
                        <h2>Login</h2>
                        <?php include(TEMPLATE_PATH . '/messages.php') ?>
                        <input 
                            type="email" 
                            name="email" 
                            id="email" 
                            class="form-control" 
                            placeholder="Informe seu e-mail."
                            value="<?= $email ?>" 
                            autofocus
                        >
                        <input 
                            type="password" 
                            name="password" 
                            id="password" 
                            class="form-control " 
                            placeholder="*******" 
                        >
                        <button>Login</button>
                        <p class="signup" >ainda não tem uma conta? <a href="#" onclick="TogglerForm()">Registrar.</a></p>
                    </form>
                </div>
            </div>
            <div class="user signupBx">
                <div class="formBx">
                    <form action="createAccount.php" method="post">
                        <h2>Criar uma conta</h2>
                        <input type="text" placeholder="Nome" name="create_username">
                        <input type="email" placeholder="Email" name="create_email">
                        <input type="password" placeholder="Senha" name="create_password">
                        <button>Registrar</button>
                        <p class="signup">Já possuí uma conta? <a href="#" onclick="TogglerForm()">Fazer Login.</a></p>
                    </form>
                </div>
                <div class="imgBx"><img src="https://picsum.photos/id/1/400/500" alt=""></div>
            </div>
        </div>
    </section>

    <script src="assets/js/app.js"></script>
</body>
</html>