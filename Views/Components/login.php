<?php
include  __DIR__ . "\\header.php";
?>
<link rel="stylesheet" href="src/css/index.css">
</head>

<body id="login" class="d-flex justify-content-center align-items-center bg-primary">
    <form class="bg-white p-5 rounded m-3" method="post" action="../">
        <h1>Iniciar Seção</h1>
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Email" name="email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Senha</label>
            <input type="password" class="form-control" id="senha" placeholder="Senha" name="senha">
        </div>
        <div class="my-3">
            <a href="#" class="nav-link">Esqueceu seu Senha ?</a>
        </div>
        <div class="my-3">
            <a href="#" class="nav-link">Criar Login</a>
        </div>
        <button type="submit" class="btn btn-primary">Entrar</button>
    </form>


    <?php
    include __DIR__ . "\\footer.php";
    ?>