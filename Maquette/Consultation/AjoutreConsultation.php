<div id="orientation-part" class="content" role="tabpanel" aria-labelledby="orientation-part-trigger">
<div class="d-flex">

                <div class="form-group col-4">
                  <label> Date Enregistrement </label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" value="04/03/2023"/>
                        <!-- <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div> -->
                    </div>
                </div>
                <div class="form-group col-4">
                  <label> Date Consultation </label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" value="04/03/2023"/>
                        <!-- <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div> -->
                    </div>
                </div>
                <div class="form-group col-4">
                 
                   <div class="form-group">
                        <label> type de handicap </label>
                        <select class="form-control select2" style="width: 100%;">
                            <option selected="selected">Sélectionner un type  de handicap</option>
                            <option>TSA</option>
                            <option selected="selected">RETARD MENTAL</option>
                            <option>TRISOMIE 21</option>
                            <option>IMC</option>
                            <option>RPM</option>
                            <option>RETARD DE LANGUAGE</option>
                            <option>HANDICAP MOTEUR</option>
                            <option>AUTRES</option>
                        </select>
                    </div>
                </div>
                </div>
                <div class="d-flex">
               
                <div class="form-group col-md-12">
                  <label>Observation</label>
                    <div id="reservationdate" data-target-input="nearest">
                    <textarea name="Observation" id="summernote" class="form-control" rows="4">observation1</textarea>
                        <!-- <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div> -->
                    </div>
                </div>
                </div>
                <div class="d-flex">
                <div class="form-group col-md-12">
                  <label>Diagnostic</label>
                    <div id="reservationdate" data-target-input="nearest">
                    <textarea name="Remarque" id="summernote2" class="form-control" rows="4">Diagnostic1</textarea>
                        <!-- <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div> -->
                    </div>
                </div>
                </div>
                
                <div class="d-flex">
                
                <div class="form-group col-md-12">
                  <label>Bilan</label>
                    <div id="reservationdate" data-target-input="nearest">
                    <textarea name="Diagnostic" id="summernote3" class="form-control" rows="4">Bilan1</textarea>
                        <!-- <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div> -->
                    </div>
                </div>
                </div>
                <div class="d-flex">
                <div class="form-group col-md-12">
                  <label>Remarque</label>
                    <div id="reservationdate" data-target-input="nearest">
                    <textarea name="Remarque" id="summernote5" class="form-control" rows="4">Remarque1</textarea>
                        <!-- <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div> -->
                    </div>
                </div>
                </div>
                
                     
                      <button class="btn btn-primary" onclick="stepper1.previous()">Previous</button>
                      <a class="btn btn-primary"   href="./consultation.php">Enregistrement</a>
</div>