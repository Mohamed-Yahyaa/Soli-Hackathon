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
                <h3 class="card-title">Ajouter entité</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="./EntityManager.php" method="post" enctype="multipart/form-data">

                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">entité</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="type_handicap">

                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">description</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="description" placeholder="Enter discription">

                  </div>



                </div>
                <!-- /.card-body -->


                <div class="card-footer">
                  <div class="d-flex justify-content-between">
                    <a href="" class="btn btn-primary">Enregistrer</a>
                    <a href="./TypeHandicapManager.php" class="btn btn-outline-secondary">Annuler</a>
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
</body>

</html>