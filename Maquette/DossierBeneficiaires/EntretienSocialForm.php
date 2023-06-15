<div id="Entretien-part" class="content" role="tabpanel" aria-labelledby="information-part-trigger">
   
            <div class="d-flex">
                
            <div class="form-group col-6" >
                    <div class="form-group">
                        <label>Date d'entretien</label>
                        <div class="input-group date" id="reservationdate" data-target-input="nearest">
                            <input type="date" value="<?php echo date('Y-m-d'); ?>" placeholder="" class="form-control datetimepicker-input" />
                        </div>
                    </div>
                </div>
                <div class="form-group col-6">
                 
                   <div class="form-group">
                        <label> Type d'handicapé </label>
                        <select class="form-control select2" style="width: 100%;">
                            <option selected="selected">Sélectionner un type  de handicap</option>
                            <option>TSA</option>
                            <option>RETARD MENTAL</option>
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
                     <div class="form-group col-6 ">
                        <div class="form-group">
                            <label>Couverture médicale </label>
                            <select class="form-control select2" style="width: 100%;">
                                <option selected="selected">Sélectionner un type  de handicap</option>
                                <option >CNOPS</option>
                                <option>CNSS</option>
                                <option>ramed</option>
                                <option>FAR</option>
                                <option>ASSURANCE</option>
                                <option>Ne sait pas</option>
                                
                            </select>
                        </div>
                    </div>
                <div class="form-group col-6 ">
                    <div class="form-group">
                        <label>Situation Familiale</label>
                        <select class="form-control select2" style="width: 100%;">
                            <option selected="selected">Sélectionner un type  de handicap</option>
                            <option>Marié</option>
                            <option>Divorcé</option>
                            <option>Veuf</option>
                            <option>Célibataire</option>
                            
                        </select>
                    </div>
                </div>
               
                
            </div>
            <div class="d-flex">
             
                <div class="form-group col-8">
                    <label> Niveau Scolaire </label>
                        <div class="d-flex form-group ">
                            <div class="custom-control custom-radio ">
                                <input name="radio" class="custom-control-input custom-control-input-primary custom-control-input-outline ml-2" type="radio" id="customCheckbox1" >
                                <label for="customCheckbox1" class="custom-control-label ml-2">Prescolaire </label>
                                
                            </div>
                            <div class="custom-control custom-radio ml-2">
                                <input name="radio" class="custom-control-input custom-control-input-primary custom-control-input-outline" type="radio" id="customCheckbox2" >
                                <label for="customCheckbox2" class="custom-control-label">Primaire </label>
                            </div>
                            <div class="custom-control custom-radio ml-2">
                                <input name="radio" class="custom-control-input custom-control-input-primary custom-control-input-outline" type="radio" id="customCheckbox3" checked >
                                <label for="customCheckbox3" class="custom-control-label">Collégial </label>
                            </div>
                            <div class="custom-control custom-radio ml-2">
                                <input name="radio" class="custom-control-input custom-control-input-primary custom-control-input-outline" type="radio" id="customCheckbox4"  >
                                <label for="customCheckbox4" class="custom-control-label">Secondaire </label>
                            </div>
                            <div class="custom-control custom-radio ml-2">
                                <input name="radio" class="custom-control-input custom-control-input-primary custom-control-input-outline" type="radio" id="customCheckbox5"  >
                                <label for="customCheckbox5" class="custom-control-label">Univairsitaire </label>
                            </div>
                           
                            
                        </div>
                    
                        
                </div>
                
            </div>
                 
                
              
                      <button class="btn btn-primary" onclick="stepper1.previous()">Previous</button>
                      <button class="btn btn-primary" data-target="#orientation-part"   onclick="stepper1.next()">Next</button>
                      <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                    </div>