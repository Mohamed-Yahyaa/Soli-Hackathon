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
                            <h1 class="m-0">Gestion des Rendez-vous</h1>
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
                                    <a href="../Rendez-vous/Rendez-vousForm.php" class="btn btn-primary"><i class="fa fa-plus"></i> </a>
                                </div>

                                <!-- SEARCH FORM -->
                                <form class="form-inline ml-3">
                                    <div class="input-group input-group-sm">

                                        <input type="search" class="form-control form-control-lg" placeholder="Type your keywords here">
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
                                        <th style="width: 5%">
                                         N°d'Ordre
                                        </th>
                                        <th style="width: 5%">
                                         N°Dossier
                                        </th>
                                        <th style="width: 10%">
                                            Nom
                                        </th>
                                        <th style="width: 10%">
                                        Prénom
                                        </th>
                                        <th style="width: 50%">
                                        Téléphone
                                        </th>

                                        <th style="width: 50%">
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>
                                          1
                                        </td>
                                        <td>
                                         A31
                                        </td>
                                        <td>
                                            Radi
                                        </td>

                                        <td>
                                            Said
                                        </td>
                                        <td>
                                            0600000000
                                        </td>

                                      
                                            <td>                                      
                                          <!-- Button trigger modal -->
<!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
                                        Afficher
                                        </button>
                                        </td> 


                                   
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <div class="card-header row" style="display: flow-root;">
                    <div style="display: flex;  justify-content: space-between;">

                        <ul class="pagination pagination my-0">
                            <li class="page-item"><a class="page-link" href="#">«</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">»</a></li>
                        </ul>
                        <div class="">

                            <button type="button" class="btn btn-default swalDefaultQuestion">
                                <i class="fas fa-download"></i> Export
                            </button>
                            <button type="button" class="btn btn-default swalDefaultQuestion">
                                <i class="fas fa-file-import"></i> Import
                            </button>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            
            <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">RendezVous</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="card-body">
                <!-- Date -->
                <div class="form-group ">
                  <label > DateRendezVous </label>
                  
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="date" value="2023-07-22" class="form-control datetimepicker-input" />
                        <!-- <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div> -->
                    </div>
                </div>
                <div class="form-group ">
                  <label> HeureDebut </label>
                  
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                    <input type="time" id="appt" name="appt"
                         min="09:00" max="18:00" required value="10:00">

                        <!-- <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div> -->
                    </div>
                </div>
              <div class="form-group">
                  <label>Remarque</label>
                  <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" 
                        value="loream 1"/>
                        <!-- <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div> -->
                    </div>
                </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary btn-sm">Save</button>
      </div>
    </div>
  </div>
</div>
</div>

            <!-- /.content -->
        </div>

        <?php include("../footer.php") ?>
    </div>
    <?php include("../scripts.php") ?>
</body>

</html>