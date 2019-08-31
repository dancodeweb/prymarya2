<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE-edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="imagetoolbar" content="no" />
    <title>Prymarya 2 framework</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo BASEURL; ?>assets/img/icon.png">
    <link href="<?php echo BASEURL; ?>assets/lib/dataTables/css/jquery.dataTables.min.css" rel="stylesheet" />
    <link href="<?php echo BASEURL; ?>assets/lib/bootstrap-4.3.1/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo BASEURL; ?>assets/lib/dataTables/css/dataTables.bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo BASEURL; ?>assets/lib/iziToast/dist/css/iziToast.min.css" rel="stylesheet" />
    <link href="<?php echo BASEURL; ?>assets/lib/fontawesome-free-5.10.2/css/all.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL; ?>assets/dist/styles.css?cb=1567140344076">
  </head>
  <body oncontextmenu="return false">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <a href="<?php echo BASEURL; ?>" class="navbar-brand">Prymarya 2 framework | by dancodeweb</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#ops">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="ops">
            <u class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="<?php echo BASEURL; ?>images" class="nav-link">Imagens</a>
                </li>
                <li class="nav-item">
                    <a href="#" data-toggle="modal" class="nav-link" data-target="#users" name="print_users" title="Relação de usuários">Relatório de usuários</a> 
                </li>
                <li class="nav-item">
                    <a href="<?php echo BASEURL; ?>home/logout" class="nav-link">Sair do sistema</a>
                </li>
            </u>
        </div>
    </nav>
    <!-- MODAL IMPRIMIR HISTÓRICO LIGAÇÕES INICIO -->
    <div class="modal fade" id="users" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Relatório de usuários cadastrado</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="GET" name="usersPrint" id="usersPrint" action="<?php echo BASEURL; ?>rel/users.php" target="_blank">
                    <div class="form-group col-sm-12">
                        <label for="active">Ativo:</label>
                        <input type="radio" id="active" name="active" value="Y" /> Sim
                        <input type="radio" id="active" name="active" value="N" /> Não
                        <input type="radio" id="active" name="active" value="A" checked="checked" /> Todos
                    </div>
                    <hr />
                    <input type="submit" name="print_ligacoes_enter" id="print_ligacoes_enter" value="Gerar relatório" class="btn btn-primary"/>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
            </div>
        </div>
    </div>
	<!-- MODAL IMPRIMIR HISTÓRICO LIGAÇÕES FIM -->
    <div class="container mb-3 mt-3">
      <?php $this->loadViewer($viewName, $viewData_set); ?>
    </div>
    <script type="text/javascript" src="<?php echo BASEURL; ?>assets/lib/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="<?php echo BASEURL; ?>assets/lib/axios/dist/axios.js"></script>
    <script type="text/javascript" src="<?php echo BASEURL; ?>assets/lib/iziToast/dist/js/iziToast.min.js"></script>
    <script type="text/javascript" src="<?php echo BASEURL; ?>assets/lib/sweetalert2@8.js"></script>
    <script type="text/javascript" src="<?php echo BASEURL; ?>assets/lib/dataTables/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?php echo BASEURL; ?>assets/lib/dataTables/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo BASEURL; ?>assets/lib/bootstrap-4.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo BASEURL; ?>assets/lib/fontawesome-free-5.10.2/js/all.js"></script>
    <script type="text/javascript" src="<?php echo BASEURL; ?>assets/dist/all.js?cb=1567140344076"></script>
  </body>
</html>