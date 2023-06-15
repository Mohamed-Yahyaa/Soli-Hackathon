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
                <h3 class="card-title">Ajouter Patient</h3>
              </div>
              <div class="card-body">
                <!-- Date -->
                <div class="d-flex ">
                <div class="form-group col-6">
                  <label>Nom</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" placeholder="" value="Elkankoch" class="form-control datetimepicker-input" />
                    </div>
                </div>
                
                <div class="form-group col-6">
                  <label>Prenom</label>
                  <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" placeholder="" value="Nasim" class="form-control datetimepicker-input" />
                    </div>
                </div>
                </div>

                <div class="d-flex ">
                <div class="form-group col-6">
                  <label>CIN</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" placeholder="" value="KA28578" class="form-control datetimepicker-input" />
                    </div>
                </div>

                <div class="form-group col-6">
                  <label>Telephone</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="tel" placeholder="" value="0635982509" class="form-control datetimepicker-input" />
                    </div>
                </div>
                </div>
                <!-- <div class="d-flex "> -->
                <!-- <div class="form-group col-6">
                  <label>Email</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="email" placeholder="" value="nasim@gmail.com" class="form-control datetimepicker-input" />
                    </div>
                </div> -->

                <!-- <div class="form-group col-6">
                  <label>Image</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="file" placeholder="" value="img" class="form-control datetimepicker-input" />
                    </div>
                </div> -->
                <!-- </div> -->

                <!-- <div class="d-flex ">
                <div class="form-group col-6">
                  <label>Date Naissance</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="date" placeholder="" value="18/03/2023" class="form-control datetimepicker-input" />
                    </div>
                </div>
                </div> -->

                <div class="d-flex">
                <div class="form-group col-6">
                  <label>Adress</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" placeholder="" value="Rue ibn nasim" value="gggagggg" class="form-control datetimepicker-input" />
                    </div>
                </div>

                <div class="form-group col-6">
                  <label>Remarques</label>
                    <div class=" col-md-12" id="reservationdate" data-target-input="nearest">
                    <textarea name="description" placeholder="" id="summernote" class="form-control" rows="4"></textarea>
                    </div>
                </div>
                </div>
                <!-- Date and time -->
                
                <div class="d-flex justify-content-between">
                  <a href="ReclamationForm.php" class="btn btn-primary">Enregistrer</a>
                  <a href="PatientManager.php" class="btn btn-outline-secondary">Annuler</a>




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
</html>