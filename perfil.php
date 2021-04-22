<?php include __DIR__ . '\\src\\Components\\header.php' ?>

<body class="d-flex justify-content-center align-items-center bg-primary">
    <form class="bg-white p-5 rounded m-3" action="./Controllers/ControllerAdmin.php" method="post">
        <h1>Selecionar Perfir</h1>
        <select class="form-control form-control-lg my-4" name="perfil">
            <?php
            session_start();
            if (isset($_SESSION['perfil'])) {
                foreach ($_SESSION['perfil'] as $key => $value) {
                    foreach ($value as $k => $v) {
                        echo "<option value='{$v}'>{$v}</option>";
                    }
                }
            }
            ?>
        </select>
        <button type="submit" class="btn btn-primary">Continuar</button>
    </form>

<?php include __DIR__ . '\\src\\Components\\footer.php' ?>