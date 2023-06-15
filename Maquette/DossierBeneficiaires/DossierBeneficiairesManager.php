<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("../head.php") ?>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <?php include("../menu.php") ?>
        <?php include("../navbar.php") ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <?php include("../content-header.php") ?>

            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Suivi les paiment des clients</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            

                            <div class="col-sm-12 d-flex justify-content-between p-3">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex justify-content-between">
                                        <a href="./DossierBeneficiairesForm.php" class="btn btn-primary"> <i class="fa fa-plus"></i> </a>
                                    </div>
                                  
                                </div>
                                <!-- SEARCH FORM -->
                                <form class="form-inline ml-3">
                                    <div class="input-group input-group-sm">
                                        <input type="search" class="form-control form-control-lg" placeholder="Rechercher">
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-lg btn-default">
                                                <i class="fa fa-search"></i>
                                            </button>

                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                        <div class="card-body p-0">
                            <table class="table table-striped projects">
                                <thead>
                                    <tr>
                                        <th style="width: 5%"> Client </th>
                                        <th style="width: 1%"> Produits </th>
                                        <th style="width: 1%"> Montont </th>
                                        <th style="width: 1%">MDP  </th>
                                        <th style="width: 5%"> Status </th>
                                        <th style="width: 5%"> DP prévue </th>
                                        <th style="width: 5%"> DP réception </th>
                                        <th style="width: 5%" class="text-center"> Notification </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                   
                                        <td class="text-capitalize"> Madani ali </td>
                                        <td class="text-capitalize"> Robe </td>
                                        <td class="text-capitalize"> 1000 MAD </td>
                                        <td class="text-capitalize"> Virement bancaire </td>
                                       
                                        <td> <span class="badge bg-secondary">En attente</span> </td>
                                        <th style="width: 5%"> 16/06/2023 </th>
                                        <th style="width: 5%"> ---- </th>
                                       
                                        <td class="project-actions text-right">
                                           
                                            <a class="btn btn-info btn-sm" href="#"><i class="fa fa-bell" aria-hidden="true"></i> Notifier </a>
                                        </td>
                                    </tr>
                                    <tr>
                                   
                                        <td class="text-capitalize"> Marie Dupont</td>
                                        <td class="text-capitalize"> Chemise </td>
                                        <td class="text-capitalize"> 2000 MAD </td>
                                        <td class="text-capitalize"> Chèque </td>
                                       
                                        <td> <span class="badge bg-success">Payé</span> </td>
                                        <th style="width: 5%"> 16/06/2023 </th>
                                        <th style="width: 5%"> 15/06/2023 </th>
                                       
                                        <td class="project-actions text-right">
                                           
                                            <a class="btn btn-secondary btn-sm" href="#"><i class="fa fa-bell" aria-hidden="true"></i> Notifier </a>
                                        </td>
                                    </tr>

                                    

                                  

                                   


                                  

                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <div class="card-header row">
                        <div class="float-right col-md-6">
                            <ul class="pagination pagination-sm">
                                <li class="page-item"><a class="page-link" href="#">«</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">»</a></li>
                            </ul>
                        </div>
                        <div class="float-left col-md-6 d-flex justify-content-end" style="align-items: center; ">
                          
                            <button type="button" class="btn btn-default mr-2 swalDefaultQuestion">
                                <i class="fas fa-download"></i> Export
                            </button>
                            <button type="button" class="btn btn-default swalDefaultQuestion">
                                <i class="fas fa-file-import"></i> Import
                            </button>
                        </div><!-- /.container-fluid -->
                    </div>
            </section>
            <!-- /.content -->
        </div>

        <?php include("../footer.php") ?>
    </div>
    <?php include("../scripts.php") ?>
</body>

</html>