<?php
session_start();
include dirname(__DIR__) . '\\src\\Components\\admin\\header.php';
$_SESSION['inserir'] = true;
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
                <div class="d-flex justify-content-between mb-5 align-items-center">
                    <h1 class="display-4">Lista de Horas</h1>
                    <button type="button" id="addAjuste" class="btn btn-primary">
                        <i class="fas fa-plus fa-2x"></i>
                    </button>
                </div>
                <form action="../Controllers/ControllerAdmin.php" method="post">
                    <table class="table text-center">
                        <thead class="bg-primary text-light">
                            <tr>
                                <th scope="col">Data</th>
                                <th scope="col">Hora Entrada</th>
                                <th scope="col">Hora Saida</th>
                                <th scope="col">Justificativa</th>
                                <th scope="col">Opções</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">
                                    <input id="date" type="date" name="data_1" class="form-control">
                                </th>
                                <td>
                                    <input type="time" name="hora_entrada_1" required class="form-control">
                                </td>
                                <td>
                                    <input type="time" name="hora_saida_1" required class="form-control">
                                </td>
                                <td>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="justificativa_1">
                                            <?php
                                            if (isset($_SESSION['justificativas'])) {
                                                foreach ($_SESSION['justificativas'] as $key => $value) {
                                                    echo "<option value='{$value['id_justificativa']}'>{$value['descricao']}</option>";
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </td>
                                <td>
                                    <button type="button" class="button_option btn btn-dark" id="deleteAjuste_1" onclick="deleteAjuste(this.id)"><i class="fas fa-trash-alt fa-2x mx-3"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="lead mt-3">
                        <button type="submit" class="btn btn-primary btn-lg text-light" role="button">Enviar para Análise</button>
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>

<script src="../src/assets/js/inserirAjuste.js"></script>
<?php
include dirname(__DIR__) . '\\src\\Components\\admin\\footer.php';
?>