
<div id="logins-part" class="content" role="tabpanel" aria-labelledby="logins-part-trigger">
<div class="d-flex">
<div class="card-body">
<div class="form-group">




                  <label>DateRendezVous</label>
                  <div class="col-md-6" id="reservationdate" data-target-input="nearest">
                  <input type="date" id="meeting-time"
                  value="2023-07-22" class="form-control datetimepicker-input">

                      <!-- <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                          <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                      </div> -->
                  </div>
                </div>
                <div class="form-group">

                  <label>HeureDebut</label>
                 
                  
                  <div class=" col-md-6" id="reservationdate" data-target-input="nearest">
                  <input type="time" id="appt" name="appt"
                         min="09:00" max="18:00" required value="10:00"class="form-control datetimepicker-input">

                      <!-- <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                          <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                      </div> -->
                  </div>
                </div>
                <div class="form-group">
                  <label>Remarque</label>
                    <div class=" col-md-12" id="reservationdate" data-target-input="nearest">
                    <textarea name="description" id="summernote" class="form-control" rows="4"></textarea>
                        <!-- <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div> -->
                    </div>
                </div>
                </div>
                </div>
                
                <button class="btn btn-primary" onclick="stepper1.previous()">Previous</button>
                      <button class="btn btn-primary"   onclick="stepper1.next()">Next</button>
</div>

    

    <!-- Summernote JS - CDN Link -->

