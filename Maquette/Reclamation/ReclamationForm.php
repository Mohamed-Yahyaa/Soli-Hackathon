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
                        </div>
                    </div>
                </div>
            </div>
        <div class="col-12">
            
             <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Ajouter une réclamation</h3>
              </div>
              <div class="card-body">
                <!-- Date -->
                <!-- <div class="d-flex"> -->
                <div class="form-group">
                  <label>Objet</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" value="Saisir un objet" class="form-control datetimepicker-input" />
                    </div>
                </div>
                <!-- </div> -->
                <div class="form-group">
                  <label>Description</label>
                    <div class=" col-md-12" id="reservationdate" data-target-input="nearest">
                    <textarea name="description" id="summernote" class="form-control" rows="4"></textarea>
                    </div>
                </div>
                <!-- Date and time -->
                <div class="d-flex justify-content-between">
                <div class="d-flex justify-content-between">
                  <a href="ReclamationManager.php" class="btn btn-primary">Suivre</a></div>
              <div class="d-flex justify-content-between">
                  <a href="PatientManager.php" class="btn btn-secondary">Annuler</a>
                 </div>
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