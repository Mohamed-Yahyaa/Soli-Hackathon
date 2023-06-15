<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("../head.php") ?>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
<?php include("../menu.php") ?>
<?php include("../navbar.php") ?>

<div class="content-wrapper">
    <?php include("../content-header.php") ?>

<section class="content">
    <div class="container-fluid">
    <div class="row">
        <div class="col-12 mt-4">
             <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Ajouter un Parents</h3>
              </div>
              <div class="card-body" id="logins-part">
                <!-- Date -->
                <div class="d-flex">
                <div class="form-group col-6">
                  <label> Nom </label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" value="Elwahabe" class="form-control  datetimepicker-input" />
                    </div>
                </div>
                <div class="form-group col-6">
                  <label> Prénom </label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" value="Kamal" class="form-control  datetimepicker-input" />
                    </div>
                </div>
                </div>
                <div class="d-flex">
                <div class="form-group col-6 ">
                  <label> Sexe </label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <select type="text" value="" class="form-control  datetimepicker-input" class="btn btn-white dropdown-toggle ml-2" name="Sexe" id="filter">
                                        <option value="">Homme</option>
                                        <option value="">Femme</option>
                                    </select>
                    </div>
                    </div>
                
               

                <div class="form-group col-6">
                  <label> CIN </label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" value="KA78856" class="form-control  datetimepicker-input" />
                    </div>
                </div>
                </div>
                 
                <div class="d-flex">
                <div class="form-group col-6">
                  <label> Téléphone </label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" value="0653428932" class="form-control  datetimepicker-input" />
                    </div>
                    </div>
                
                
                <div class="form-group col-6">
                  <label> Adresse </label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" value="Rue ibn zagor" class="form-control  datetimepicker-input" />
                    </div>
                </div>
                </div>
                <!-- Date and time -->
                
                <div class="d-flex justify-content-between">
                  <a href="PatientManager.php" class="btn btn-primary">Suivre</a>
                  <a href="ParentManager.php" class="btn btn-outline-secondary">Annuler</a>
                </div>
                <!-- /.form group -->
                <!-- Date range -->

                <!-- /.form group -->

                <!-- Date and time range -->

                <!-- /.form group -->

                <!-- Date and time range -->

                <!-- /.form group -->
              </div>


              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- iCheck -->

            <!-- /.card -->
          </div>
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>

</div>

<?php include("../footer.php") ?>
</div>
<?php include("../scripts.php") ?>
</body>
<!-- menu-open -->

</html>