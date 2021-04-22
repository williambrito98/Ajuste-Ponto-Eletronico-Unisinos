<?php
session_start();
include dirname(__DIR__) . '\\src\\Components\\admin\\header.php';
?>
<section class="container-fluid">
    <div class="row bg-light pt-5">
        <div class="col-3 border p-3 text-center">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link bg-primary text-light rounded my-2" href="./inserirAjute.php"> <i class="fas fa-plus mr-2"></i>Inserir</a>
                </li>
            </ul>
        </div>
        <div class="col-9">
            <div class="jumbotron">
                <h1 class="display-4 mb-5">Ajustes</h1>
                <?php
                if (isset($_SESSION['msg'])) {
                    echo "<div class='alert alert-primary' role='alert'>
                            {$_SESSION['msg']}
                       </div>";
                    unset($_SESSION['msg']);
                }
                ?>
                <table class="table text-center">
                    <thead class="bg-primary text-light">
                        <tr>
                            <th scope="">Período</th>
                            <th>Opção</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (isset($_SESSION)) {
                            foreach ($_SESSION['ajustes'] as $key => $value) {
                                if (empty($value['data_inicial']) || empty($value['data_final'])) {
                                    continue;
                                }
                                $data_inicial = explode('-', $value['data_inicial']);
                                $data_inicial = "{$data_inicial[2]}/{$data_inicial[1]}/{$data_inicial[0]}";
                                $data_final = explode('-', $value['data_final']);
                                $data_final = "{$data_final[2]}/{$data_final[1]}/{$data_final[0]}";
                                echo " 
                                    <tr>
                                        <th scope='row'>{$data_inicial} a {$data_final}</th>
                                        <th> <a href='../Controllers/ControllerAdmin.php?id={$value['id']}' class='button_option mr-3'> <i class='fas fa-eye fa-2x'></i></a>
                                    </th>
                                </tr>";
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<?php include dirname(__DIR__) . '\\src\\Components\\admin\\footer.php'; ?>