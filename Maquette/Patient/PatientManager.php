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
                            <h1 class="m-0">Gestion des Patients</h1>
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
                            <!-- <h3 class="card-title">
                            Pa
                            tients
                            </h3> -->

                            <div class="col-sm-12 d-flex justify-content-between p-3">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex justify-content-between">
                                        <a href="PatientForm.php" class="btn btn-primary"> <i class="fa fa-plus"></i> </a>
                                    </div>
                                </div>
                                <!-- SEARCH FORM -->
                                <form class="form-inline ml-3">
                                    <div class="input-group input-group-sm">
                                        <input type="search" class="form-control form-control-lg" placeholder="Tapez vos mots-clés ici">
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
                                        <!-- <th style="width: 10%"> Image </th> -->
                                        <th style="width: 10%"> Nom </th>
                                        <th style="width: 10%"> Prenom </th>
                                        <th style="width: 10%"> Telephone </th>
                                        <th style="width: 10%" class="">  </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <!-- <td> <img class="rounded-circle"  width="50" height="50" src="../assets/dist/img/User-avatar.svg.png" alt="image" srcset=""> </td> -->
                                        <td> AHOUZI </td>
                                        <td> Hanan </td>
                                        <td> 0645729821 </td>
                                        <td class="project-actions text-right">
                                            <a class="btn btn-primary btn-sm" href="#"> <i class="fas fa-folder"> </i> Afficher </a>
                                            <a class="btn btn-info btn-sm" href="#"><i class="fas fa-pencil-alt"> </i> Edit </a>
                                            <a class="btn btn-danger btn-sm" href="#"> <i class="fas fa-trash"> </i> Delete </a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <!-- <td> <img class="rounded-circle"  width="50" height="50" src="../assets/dist/img/User-avatar.svg.png" alt="image" srcset=""> </td> -->
                                        <td> Mnari </td>
                                        <td> Karim </td>
                                        <td> 0645729821 </td>
                                        <td class="project-actions text-right">
                                            <a class="btn btn-primary btn-sm" href="#"> <i class="fas fa-folder"> </i> Afficher </a>
                                            <a class="btn btn-info btn-sm" href="#"><i class="fas fa-pencil-alt"> </i> Edit </a>
                                            <a class="btn btn-danger btn-sm" href="#"> <i class="fas fa-trash"> </i> Delete </a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <!-- <td> <img class="rounded-circle"  width="50" height="50" src="../assets/dist/img/User-avatar.svg.png" alt="image" srcset=""> </td> -->
                                        <td> alami </td>
                                        <td> Salma </td>
                                        <td> 0645729821 </td>
                                        <td class="project-actions text-right">
                                            <a class="btn btn-primary btn-sm" href="#"> <i class="fas fa-folder"> </i> Afficher </a>
                                            <a class="btn btn-info btn-sm" href="#"><i class="fas fa-pencil-alt"> </i> Edit </a>
                                            <a class="btn btn-danger btn-sm" href="#"> <i class="fas fa-trash"> </i> Delete </a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <!-- <td> <img class="rounded-circle"  width="50" height="50" src="../assets/dist/img/User-avatar.svg.png" alt="image" srcset=""> </td> -->
                                        <td> Nwino </td>
                                        <td> Nabila </td>
                                        <td> 0645729821 </td>
                                        <td class="project-actions text-right">
                                            <a class="btn btn-primary btn-sm" href="#"> <i class="fas fa-folder"> </i> Afficher </a>
                                            <a class="btn btn-info btn-sm" href="#"><i class="fas fa-pencil-alt"> </i> Edit </a>
                                            <a class="btn btn-danger btn-sm" href="#"> <i class="fas fa-trash"> </i> Delete </a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <!-- <td> <img class="rounded-circle"  width="50" height="50" src="../assets/dist/img/User-avatar.svg.png" alt="image" srcset=""> </td> -->
                                        <td> Bchnigha </td>
                                        <td> Yousra </td>
                                        <td> 0645729821 </td>
                                        <td class="project-actions text-right">
                                            <a class="btn btn-primary btn-sm" href="#"> <i class="fas fa-folder"> </i> Afficher </a>
                                            <a class="btn btn-info btn-sm" href="#"><i class="fas fa-pencil-alt"> </i> Edit </a>
                                            <a class="btn btn-danger btn-sm" href="#"> <i class="fas fa-trash"> </i> Delete </a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <!-- <td> <img class="rounded-circle"  width="50" height="50" src="../assets/dist/img/User-avatar.svg.png" alt="image" srcset=""> </td> -->
                                        <td> Alwahabi </td>
                                        <td> Yaser </td>
                                        <td> 0645729821 </td>
                                        <td class="project-actions text-right">
                                            <a class="btn btn-primary btn-sm" href="#"> <i class="fas fa-folder"> </i> Afficher </a>
                                            <a class="btn btn-info btn-sm" href="#"><i class="fas fa-pencil-alt"> </i> Edit </a>
                                            <a class="btn btn-danger btn-sm" href="#"> <i class="fas fa-trash"> </i> Delete </a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <!-- <td> <img class="rounded-circle"  width="50" height="50" src="../assets/dist/img/User-avatar.svg.png" alt="image" srcset=""> </td> -->
                                        <td> Tork </td>
                                        <td> Kamal </td>
                                        <td> 0645729821 </td>
                                        <td class="project-actions text-right">
                                            <a class="btn btn-primary btn-sm" href="#"> <i class="fas fa-folder"> </i> Afficher </a>
                                            <a class="btn btn-info btn-sm" href="#"><i class="fas fa-pencil-alt"> </i> Edit </a>
                                            <a class="btn btn-danger btn-sm" href="#"> <i class="fas fa-trash"> </i> Delete </a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <!-- <td> <img class="rounded-circle"  width="50" height="50" src="../assets/dist/img/User-avatar.svg.png" alt="image" srcset=""> </td> -->
                                        <td> Elkaki </td>
                                        <td> Nasim </td>
                                        <td> 0645729821 </td>
                                        <td class="project-actions text-right">
                                            <a class="btn btn-primary btn-sm" href="#"> <i class="fas fa-folder"> </i> Afficher </a>
                                            <a class="btn btn-info btn-sm" href="#"><i class="fas fa-pencil-alt"> </i> Edit </a>
                                            <a class="btn btn-danger btn-sm" href="#"> <i class="fas fa-trash"> </i> Delete </a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <!-- <td> <img class="rounded-circle"  width="50" height="50" src="../assets/dist/img/User-avatar.svg.png" alt="image" srcset=""> </td> -->
                                        <td> Elmagni </td>
                                        <td> Nora </td>
                                        <td> 0645729821 </td>
                                        <td class="project-actions text-right">
                                            <a class="btn btn-primary btn-sm" href="#"> <i class="fas fa-folder"> </i> Afficher </a>
                                            <a class="btn btn-info btn-sm" href="#"><i class="fas fa-pencil-alt"> </i> Edit </a>
                                            <a class="btn btn-danger btn-sm" href="#"> <i class="fas fa-trash"> </i> Delete </a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <!-- <td> <img class="rounded-circle"  width="50" height="50" src="../assets/dist/img/User-avatar.svg.png" alt="image" srcset=""> </td> -->
                                        <td> AHOUZI </td>
                                        <td> Yakin </td>
                                        <td> 0645729821 </td>
                                        <td class="project-actions text-right">
                                            <a class="btn btn-primary btn-sm" href="#"> <i class="fas fa-folder"> </i> Afficher </a>
                                            <a class="btn btn-info btn-sm" href="#"><i class="fas fa-pencil-alt"> </i> Edit </a>
                                            <a class="btn btn-danger btn-sm" href="#"> <i class="fas fa-trash"> </i> Delete </a>
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
                            <ul class="pagination pagination my-0">
                                <li class="page-item"><a class="page-link" href="#">«</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">»</a></li>
                            </ul>
                        </div>
                        <div class="float-left col-md-6 d-flex justify-content-end" style="align-items: center; ">
                            <!-- <button type="button" class="btn btn-default swalDefaultQuestion">
                                <i class="fas fa-download"></i> export_pdf
                            </button> -->
                            <button type="button" class="btn btn-default mr-2 swalDefaultQuestion">
                                <i class="fas fa-download"></i> export
                            </button>
                            <button type="button" class="btn btn-default swalDefaultQuestion">
                                <i class="fas fa-file-import"></i> import
                            </button>
                        </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>

        <?php include("../footer.php") ?>
    </div>
    <?php include("../scripts.php") ?>
</body>

</html>