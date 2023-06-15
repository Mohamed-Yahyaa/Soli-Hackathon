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
            <h1 class="m-0">Gestion des Couvertures Médicales</h1>
          </div><!-- /.col -->

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Default box -->
                    <div class="card">
                        
                        <div class="card-header">

                            <div class="col-sm-12 d-flex justify-content-between p-3">
                                <div class="d-flex justify-content-between">
                                    <a href="./CouvertureMedicaleForm.php" class="btn btn-primary"><i class="fa fa-plus"></i> </a>
                                    
                                   
                                    
                                </div>
                                <!-- SEARCH FORM -->
                                <form class="form-inline ml-3">
                                    <div class="input-group input-group-sm">

                                        <input type="search" class="form-control form-control-lg"
                                        placeholder="Tapez vos mots-clés ici">
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
                                        <th style="width: 20%">
                                        Nom 
                                        </th>
                                        <th style="width: 20%">
                                            Description
                                        </th>
                                        <!-- <th  style="width: 20%; text-align: center;">
                                            Actions
                                        </th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                       
                                        <td>
                                         CNSS
                                        </td>
                                        <td class="text-truncate" style="max-width: 150px;">
                                            
                                        LA CNSS l'Assurance Maladie exerce une mission de service public.

                                        </td>
                                        <td class="project-actions text-right">
                                            <a class="btn btn-primary btn-sm" href="#">
                                                <i class="fas fa-folder">
                                                </i>
                                                Afficher
                                            </a>
                                            <a class="btn btn-info btn-sm" href="#">
                                                <i class="fas fa-pencil-alt">
                                                </i>
                                                Édit
                                            </a>
                                            <a class="btn btn-danger btn-sm" href="#">
                                                <i class="fas fa-trash">
                                                </i>
                                                Supprimer
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                       
                                       <td>
                                         La mutuelle
                                       </td>
                                       <td class="text-truncate" style="max-width: 150px;">
                                           
                                       la mutuelle applique à la fin de vie ce qu'il sait faire par ailleurs.
                                       </td>
                                       <td class="project-actions text-right">
                                           <a class="btn btn-primary btn-sm" href="#">
                                               <i class="fas fa-folder">
                                               </i>
                                               Afficher
                                           </a>
                                           <a class="btn btn-info btn-sm" href="#">
                                               <i class="fas fa-pencil-alt">
                                               </i>
                                               Édit
                                           </a>
                                           <a class="btn btn-danger btn-sm" href="#">
                                               <i class="fas fa-trash">
                                               </i>
                                               Supprimer
                                           </a>
                                       </td>
                                   </tr>
                                   <tr>
                                       
                                       <td>
                                        FAR
                                       </td>
                                       <td class="text-truncate" style="max-width: 150px;">
                                       Assurance FAR
                                       </td>
                                       <td class="project-actions text-right">
                                           <a class="btn btn-primary btn-sm" href="#">
                                               <i class="fas fa-folder">
                                               </i>
                                               Afficher
                                           </a>
                                           <a class="btn btn-info btn-sm" href="#">
                                               <i class="fas fa-pencil-alt">
                                               </i>
                                               Édit
                                           </a>
                                           <a class="btn btn-danger btn-sm" href="#">
                                               <i class="fas fa-trash">
                                               </i>
                                               Supprimer
                                           </a>
                                       </td>
                                   </tr>
                                   <tr>
                                       
                                       <td>
                                          Assurance 
                                       </td>
                                       <td class="text-truncate" style="max-width: 150px;">
                                       La formation professionnelle est une obligation pour les entreprises,  </td>
                                       <td class="project-actions text-right">
                                           <a class="btn btn-primary btn-sm" href="#">
                                               <i class="fas fa-folder">
                                               </i>
                                               Afficher
                                           </a>
                                           <a class="btn btn-info btn-sm" href="#">
                                               <i class="fas fa-pencil-alt">
                                               </i>
                                               Édit
                                           </a>
                                           <a class="btn btn-danger btn-sm" href="#">
                                               <i class="fas fa-trash">
                                               </i>
                                               Supprimer
                                           </a>
                                       </td>
                                   </tr>
                                   <tr>
                                       
                                       <td>
                                       CNOPS
                                       </td>
                                       <td class="text-truncate" style="max-width: 150px;">
                                       Assurance 1. cnops
                                         <td class="project-actions text-right">
                                           <a class="btn btn-primary btn-sm" href="#">
                                               <i class="fas fa-folder">
                                               </i>
                                               Afficher
                                           </a>
                                           <a class="btn btn-info btn-sm" href="#">
                                               <i class="fas fa-pencil-alt">
                                               </i>
                                               Édit
                                           </a>
                                           <a class="btn btn-danger btn-sm" href="#">
                                               <i class="fas fa-trash">
                                               </i>
                                               Supprimer
                                           </a>
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
            <!-- /.content -->
        </div>

        <?php include("../footer.php") ?>
    </div>
    <?php include("../scripts.php") ?>
</body>

</html>