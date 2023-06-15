<head>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.all.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.css" />


</head>
<div id="ListAttente-part" class="content" role="tabpanel" aria-labelledby="information-part-trigger">
    <div class="card ">
        <div class="card-header">

            <div class="col-sm-12 d-flex justify-content-between p-3">
                <p class="text-capitalize"> <span class="font-weight-bold text-capitalize">Patient :</span> Madani ali</p>
                <p class="text-capitalize"><span class="font-weight-bold text-capitalize">Type d'handycape :</span> <span class="text-primary">RETARD MENTAL</span> </p>
                <div class="d-flex justify-content-between " >
                    <a onclick="done()" class="btn btn-primary">Ajouter a la list d'attente </a>
                </div>

                <!-- SEARCH FORM -->

            </div>
        </div>
        <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                    <tr>

                        <!-- <th style="width: 5%">
                            N°
                        </th> -->
                        <th style="width: 20%">
                            Numéro  dossier
                        </th>
                        <th style="width: 20%">
                            Patient
                        </th>
                        <th style="width: 30%">
                            Type d'handicapé
                        </th>

                        <th class="text-center" style="width: 60%">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody>

                    <tr>


                       
                        <td>
                            A101
                        </td>

                        <td>
                            Said chami
                        </td>
                        <td>
                            TSA
                        </td>

                        <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" href="../AfficherDossierPatient/AfficherDossier.php">
                                <i class="fas fa-folder">
                                </i>
                                Afficher
                            </a>

                        </td>
                    </tr>
                    <tr>
                         <td>
                            A104
                        </td>
                        <td>
                            Ahmed madani
                        </td>
                        <td>
                          RETARD MENTAL
                        </td>

                        <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" href="../AfficherDossierPatient/AfficherDossier.php">
                                <i class="fas fa-folder">
                                </i>
                                Afficher
                            </a>

                        </td>
                    </tr>
                    <tr>

                        <td>
                            A105
                        </td>
                        <td>
                            Chair yassine
                        </td>

                        <td>
                         HANDICAP MOTEUR
                        </td>
                       


                        <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" href="../AfficherDossierPatient/AfficherDossier.php">
                                <i class="fas fa-folder">
                                </i>
                                Afficher
                            </a>

                        </td>
                    </tr>
                    <tr>

                        
                        <td>
                            A106
                        </td>
                        <td>
                            Fatima smiris
                        </td>
                        <td>
                         TRISOMIE 21
                        </td>

                        <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" href="../AfficherDossierPatient/AfficherDossier.php">
                                <i class="fas fa-folder">
                                </i>
                                Afficher
                            </a>

                        </td>
                    </tr>
                    <tr>

                        
                        <td>
                            A107
                        </td>
                        <td>
                            Anissa chamia
                        </td>
                        <td>
                          IMC
                        </td>

                        <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" href="../AfficherDossierPatient/AfficherDossier.php">
                                <i class="fas fa-folder">
                                </i>
                                Afficher
                            </a>

                        </td>
                    </tr>
                    <tr>

                       
                        <td>
                            A108
                        </td>
                        <td>
                            Mohammed ali
                        </td>
                        <td>
                         RPM
                        </td>

                        <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" href="../AfficherDossierPatient/AfficherDossier.php">
                                <i class="fas fa-folder">
                                </i>
                                Afficher
                            </a>


                        </td>
                    </tr>
                    <tr>

                       
                         <td>
                            A109
                        </td>
                        <td>
                            Adil chami
                        </td>
                        <td>
                         RETARD DE LANGUAGE
                        </td>

                        <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" href="../AfficherDossierPatient/AfficherDossier.php">
                                <i class="fas fa-folder">
                                </i>
                                Afficher
                            </a>


                        </td>
                    </tr>

                </tbody>
            </table>

        </div>
                <div class="card-header row d-flex justify-content-between">
                        <div class="float-right col-md-6">
                            <ul class="pagination pagination-sm">
                                <li class="page-item"><a class="page-link" href="#">«</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">»</a></li>
                            </ul>
                        </div>
                        <div style="margin-left:300px;" >
                            <label class="text-secondary" for="">Total : 7</label>
                            <div class="line"></div>
                        </div>
                      
                </div>

        <!-- /.card-body -->
    </div>

    <!-- <div class="d-flex">
                <h1>hkhk</h1>
            </div> -->
    <div class="justify-content-between d-flex">
        <div>
            <button class="btn btn-primary" onclick="stepper1.previous()">Previous</button>
           <a class="btn btn-primary" href="./DossierBeneficiairesManager.php"> Enregistrer</a>
        </div>

        <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
       

    </div>


    <div>

    </div>
</div>
<script src="../assets/plugins/sweetalert2/sweetalert2.all.min.js"></script>
<script>
    function done() {
        Swal.fire({
            title: '',
            text: "Le dossier a été ajouter à la liste d'attente",
            icon: 'success',
            confirmButtonText: 'OK',


        })
        // .then(function() {
        //     window.location = "./DossierBeneficiairesManager.php";
        // })
    }
</script>