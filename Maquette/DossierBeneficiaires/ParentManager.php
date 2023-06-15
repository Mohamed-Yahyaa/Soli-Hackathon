<div style="display:none" class="formAdd" data-target="#btADD">

    <?php include "./ParentForm.php" ?>
</div>
<div class="table">
    <div id="parent-part" class="content">
        <div class="card ">
            <div class="card-header">

                <div class="col-sm-12 d-flex justify-content-between p-3">
                    <div class="d-flex justify-content-between " id="btnADD">
                        <button href="./ParentForm.php" onclick="myFunction()" class="btn btn-primary"> Ajouter parent</button>
                    </div>

                    <!-- SEARCH FORM -->
                    <form class="form-inline ml-3">
                        <div class="input-group input-group-sm">

                            <input type="search" class="form-control form-control-lg" placeholder="Rechercher">
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
                            <th style="width: 5%"></th>
                            <th style="width: 5%">
                                N°
                            </th>
                            <th style="width: 20%">
                                Nom
                            </th>
                            <th style="width: 20%">
                                Prénom
                            </th>
                            <th style="width: 30%">
                                Téléphone
                            </th>

                            <th class="text-center" style="width: 15%">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>

                            <td>
                                <input type="radio" name="parentRadio" aria-label="Radio button for following text input" checked>
                            </td>
                            <td>
                                1
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

                            <td class="project-actions text-right">
                                <a class="btn btn-primary btn-sm" href="../Parent/ParentManager.php">
                                    <i class="fas fa-folder">
                                    </i>
                                    Afficher
                                </a>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="radio" name="parentRadio" aria-label="Radio button for following text input">
                            </td>
                            <td>
                                2
                            </td>
                            <td>
                                Ben
                            </td>

                            <td>
                                Ahmed
                            </td>
                            <td>
                                0600000000
                            </td>

                            <td class="project-actions text-right">
                                <a class="btn btn-primary btn-sm" href="../Parent/ParentManager.php">
                                    <i class="fas fa-folder">
                                    </i>
                                    Afficher
                                </a>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="radio" name="parentRadio" aria-label="Radio button for following text input">
                            </td>
                            <td>
                                3
                            </td>
                            <td>
                                Chair
                            </td>

                            <td>
                                Yassin
                            </td>
                            <td>
                                0600000000
                            </td>


                            <td class="project-actions text-right">
                                <a class="btn btn-primary btn-sm" href="../Parent/ParentManager.php">
                                    <i class="fas fa-folder">
                                    </i>
                                    Afficher
                                </a>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="radio" name="parentRadio" aria-label="Radio button for following text input">
                            </td>
                            <td>
                                4
                            </td>
                            <td>
                                lani
                            </td>

                            <td>
                                Fatima
                            </td>
                            <td>
                                0600000000
                            </td>

                            <td class="project-actions text-right">
                                <a class="btn btn-primary btn-sm" href="../Parent/ParentManager.php">
                                    <i class="fas fa-folder">
                                    </i>
                                    Afficher
                                </a>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="radio" name="parentRadio" aria-label="Radio button for following text input">
                            </td>
                            <td>
                                5
                            </td>
                            <td>
                                Riyad
                            </td>

                            <td>
                                Anissa
                            </td>
                            <td>
                                0600000000
                            </td>

                            <td class="project-actions text-right">
                                <a class="btn btn-primary btn-sm" href="../Parent/ParentManager.php">
                                    <i class="fas fa-folder">
                                    </i>
                                    Afficher
                                </a>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="radio" name="parentRadio" aria-label="Radio button for following text input">
                            </td>
                            <td>
                                6
                            </td>
                            <td>
                                Yamin
                            </td>

                            <td>
                                Mohammed
                            </td>
                            <td>
                                0600000000
                            </td>

                            <td class="project-actions text-right">
                                <a class="btn btn-primary btn-sm" href="../Parent/ParentManager.php">
                                    <i class="fas fa-folder">
                                    </i>
                                    Afficher
                                </a>


                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="radio" name="parentRadio" aria-label="Radio button for following text input">
                            </td>
                            <td>
                                7
                            </td>
                            <td>
                                Abom
                            </td>

                            <td>
                                Adil
                            </td>
                            <td>
                                0600000000
                            </td>

                            <td class="project-actions text-right">
                                <a class="btn btn-primary btn-sm" href="../Parent/ParentManager.php">
                                    <i class="fas fa-folder">
                                    </i>
                                    Afficher
                                </a>


                            </td>
                        </tr>

                    </tbody>
                </table>

            </div>

            <div class="card-header row">
                <div class="float-right col-md-6">
                    <ul class="pagination pagination-sm">
                        <li class="page-item"><a class="page-link" href="#">«</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">»</a></li>
                    </ul>
                </div>

            </div>
            <!-- /.card-body -->
        </div>

        <button class="btn btn-primary" onclick="stepper1.next()">Suivant</button>
    </div>
</div>

<script>
    function myFunction() {
        var parentTable = document.getElementsByClassName('table');
        var formAdd = document.getElementsByClassName('formAdd');

        //  console.log(parentTable)
        formAdd[0].style.display = "inline";
        parentTable[0].style.display = "none";
        //   $('#parent-table').hide();
    }

    function ajouter() {
        var parentTable = document.getElementsByClassName('table');
        var formAdd = document.getElementsByClassName('formAdd');

        //  console.log(parentTable)
        formAdd[0].style.display = "none";
        parentTable[0].style.display = "inline";
        //   $('#parent-table').hide();
    }
</script>