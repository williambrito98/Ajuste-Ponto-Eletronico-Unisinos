<?php
include __DIR__ . "\\header_admin.php";
?>
<section class="container-fluid">
    <div class="row bg-light pt-5">
        <div class="col-3 border p-3 text-center">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link bg-primary text-light rounded my-2" href="inserirAjuste.html"> <i class="fas fa-plus mr-2"></i>Inserir</a>
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
                            <th scope="">Período</th>
                            <th>Opção</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">11/10/2016 a 13/10/2016</th>
                            <th> <button type="button" class="button_option"><i class="fas fa-eye fa-2x"></i></button>
                            </th>
                        </tr>
                        <tr>
                            <th scope="row">11/10/2016 a 13/10/2016</th>
                            <th>
                                <a href="visualizarAjuste.html" class="button_option mr-3"> <i class="fas fa-eye fa-2x"></i></a>
                                <a class="button_option" href="editarAjuste.html"><i class="fas fa-cogs fa-2x "></i></a>
                            </th>
                        </tr>
                        <tr>
                            <th scope="row">11/10/2016 a 13/10/2016</th>
                            <th>
                                <button type="button" class="button_option"><i class="fas fa-eye fa-2x"></i></button>
                            </th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>