<?php include __DIR__ . '\\src\\Components\\header.php' ?>

<body class="d-flex justify-content-center align-items-center bg-primary">
    <form class="bg-white p-5 rounded m-3" action="./Controllers/ControllerLogin.php" method="post">
        <h1>Iniciar Seção</h1>
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Senha</label>
            <input type="password" name="senha" class="form-control" id="senha" placeholder="Senha">
        </div>
        <?php
        session_start();
        if (isset($_SESSION['error'])) {
            echo "<div class='alert alert-danger' role='alert'>
                            {$_SESSION['error']}
                       </div>";
            unset($_SESSION['error']);
        }
        ?>
        <div class="my-3">
            <a href="#" class="nav-link">Esqueceu seu Senha ?</a>
        </div>
        <div class="my-3">
            <a href="#" class="nav-link">Criar Login</a>
        </div>
        <button type="submit" class="btn btn-primary">Entrar</button>
    </form>

<?php include __DIR__ . '\\src\\Components\\footer.php' ?>