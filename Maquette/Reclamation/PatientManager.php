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
                        <h1 class="m-0">Patient</h1>
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
                            Patients
                            </h3> -->

                            <div class="col-sm-12 d-flex justify-content-between p-3">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex justify-content-between">
                                        <a href="PatientForm.php" class="btn btn-primary"> <i class="fa fa-plus"></i> </a>
                                    </div>
                                </div>

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
                                        <td> Alami </td>
                                        <td> Hanan </td>
                                        <td> 0645729821 </td>
                                        <td class="project-actions text-right">
                                            <a class="btn btn-primary btn-sm" href="ReclamationForm.php"> <i class="fas fa-check"> </i> Suivre </a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Alami </td>
                                        <td> Karim </td>
                                        <td> 0645729821 </td>
                                        <td class="project-actions text-right">
                                            <a class="btn btn-primary btn-sm" href="ReclamationForm.php"> <i class="fas fa-check"> </i> Suivre </a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> Alami </td>
                                        <td> Salma </td>
                                        <td> 0645729821 </td>
                                        <td class="project-actions text-right">
                                            <a class="btn btn-primary btn-sm" href="ReclamationForm.php"> <i class="fas fa-check"> </i> Suivre </a>
                                        </td>
                                    </tr>

                                    <!-- <tr>
                                        <td> Elmagni </td>
                                        <td> Nora </td>
                                        <td> 0645729821 </td>
                                        <td class="project-actions text-right">
                                            <a class="btn btn-primary btn-sm" href="ReclamationForm.php"> <i class="fas fa-check"> </i> Suivre </a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> AHOUZI </td>
                                        <td> Yakin </td>
                                        <td> 0645729821 </td>
                                        <td class="project-actions text-right">
                                            <a class="btn btn-primary btn-sm" href="ReclamationForm.php"> <i class="fas fa-check"> </i> Suivre </a>
                                        </td>
                                    </tr> -->
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <div class="card-header row">
                        <!-- <div class="float-right col-md-6">
                            <ul class="pagination pagination my-0">
                                <li class="page-item"><a class="page-link" href="#">«</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">»</a></li>
                            </ul>
                        </div> -->
                        <div class="float-right col-md-6 d-flex" style="align-items: center; ">
                            <a href="ParentManager.php" class="btn btn-outline-secondary">Annuler</a>
                      
                        </div>
            </section>
            
            <!-- /.content -->
        </div>

        <?php include("../footer.php") ?>
    </div>
    <?php include("../scripts.php") ?>
</body>

</html>