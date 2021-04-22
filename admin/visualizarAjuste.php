<?php
session_start();
include dirname(__DIR__) . '\\src\\Components\\admin\\header.php';
?>


<section class="container-fluid">
    <div class="row bg-light pt-5">
        <div class="col-3 border p-3 text-center">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link bg-primary text-light rounded my-2" href="inserirAjuste.php"> <i class="fas fa-plus mr-2"></i>Inserir</a>
                </li>
            </ul>
        </div>
        <div class="col-9">
            <div class="jumbotron">
                <h1 class="display-4 mb-5">Ajustes</h1>
                <!-- <p class="lead mt-5">
                        <a class="btn btn-primary btn-lg" href="#" role="button">Iniciar</a>
                </p>-->
                <table class="table text-center">
                    <thead class="bg-primary text-light">
                        <tr>
                            <th>Data</th>
                            <th scope="col">Hora Entrada</th>
                            <th scope="col">Hora Saida</th>
                            <th scope="col">Justificativa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (isset($_SESSION['conteudo_ajustes'])) {
                            foreach ($_SESSION['conteudo_ajustes'] as $key => $value) {
                                if (empty($value['data'])) {
                                    continue;
                                }
                                $data = explode('-', $value['data']);
                                $data = "{$data[2]}/{$data[1]}/{$data[0]}";
                                echo "<tr>
                                        <th>{$data}</th>
                                        <td>{$value['hora_entrada']}</td>
                                        <td>{$value['hora_saida']}</td>
                                        <td>{$value['descricao']}</td>
                                    </tr>";
                            }
                            unset($_SESSION['conteudo_ajustes']);
                        }
                        ?>
                    </tbody>
                </table>
                <div class="alert alert-dark" role="alert">
                    Status: Enviado para o Coordenador
                </div>
            </div>
        </div>
    </div>
</section>


<?php include dirname(__DIR__) . '\\src\\Components\\admin\\footer.php'; ?>