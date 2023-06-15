<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("../head.php") ?>
    <!-- Summernote CSS - CDN Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Summernote CSS - CDN Link -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <!-- //Summernote CSS - CDN Link -->
   
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
    <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                           
                        </div><!-- /.col -->
                       
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
        <div class="col-12">
            
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Ajouter un nouvel employé</h3>
              </div>
              <div class="card-body">
              
                <div class="d-flex">
                <div class="form-group col-6">
                  <label>Nom</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" value="Madani" class="form-control datetimepicker-input" />
                    </div>
                </div>

                <div class="form-group col-6">
                  <label>Prénom</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" value="Ali" class="form-control datetimepicker-input" />
                    </div>
                </div>
                </div>

                <div class="d-flex">
                <div class="form-group col-6">
                  <label>Téléphone</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" value="0611223344" class="form-control datetimepicker-input" />
                    </div>
                </div>

                <div class="form-group col-6">
                  <label>Email</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" value="MadaniAli@gmail.com" class="form-control datetimepicker-input" />
                    </div>
                </div>
                </div>
               
                <div class="d-flex">
                <div class="form-group col-6">
                  <label>Cin</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" value="K12334" class="form-control datetimepicker-input" />
                    </div>
                </div>

                <div class="form-group col-6">
                  <label>Adreese</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" value="Ahlan1" class="form-control datetimepicker-input" />
                    </div>
                </div>
                </div>
               
                <!-- Date and time -->
                <div class="d-flex justify-content-between">
                <div class="d-flex justify-content-between">
                  <a href="" class="btn btn-primary">Enregistrer</a>




              </div>
              <div class="d-flex justify-content-between">
                  <a href="../TypeService/TypeServiceManager.php" class="btn btn-secondary">Annuler</a>




              </div>
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Summernote JS - CDN Link -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<script>
        $(document).ready(function() {
          $('#summernote').summernote({
        placeholder: 'Saisir une description du service.',
       
        height: 100
      });
            $('.dropdown-toggle').dropdown();
        });
    </script>
</html>