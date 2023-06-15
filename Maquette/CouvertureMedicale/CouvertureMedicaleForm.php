<!DOCTYPE html>
<html lang="en">
      <!-- Summernote CSS - CDN Link -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Summernote CSS - CDN Link -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<!-- //Summernote CSS - CDN Link -->

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
 <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"></h1>
          </div><!-- /.col -->

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid ">
        <!-- Small boxes (Stat box) -->


        <div class="col-md-12 d-flex justify-content-center">
            <!-- general form elements -->
            <div class="card card-primary card-create">
              <div class="card-header">
                <h3 class="card-title">Ajouter Couverture</h3> 
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="./EntityManager.php" method="post"  enctype="multipart/form-data">
               
                <div class="card-body">
                  <div class="form-group">
                      <label for="exampleInputEmail1">Couverture Médicale</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="type_handicap">
                     
                  </div>
                  <div class="form-group">
                  <label>Description</label>
                    <div class=" col-md-12" id="reservationdate" data-target-input="nearest">
                    <textarea name="description" id="summernote" class="form-control" rows="4"></textarea>
                        <!-- <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div> -->
                    </div>
                </div>



                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                      <div class="d-flex justify-content-between">
                      <button type="submit" class="btn btn-primary">Enregistré</button>
                      <a href="../CouvertureMedicale/CouvertureMedicaleManager.php" class="btn btn-outline-secondary">Annuler</a>
                      </div>
                 
                </div>
              </form>
            </div>
            
            <!-- /.card -->



          </div>


    
    </section>
    <!-- /.content -->
  </div>
  <!-- /.control-sidebar -->

  
  <?php include("../footer.php") ?>
    </div>
    <?php include("../scripts.php") ?>


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
</body>

</html>