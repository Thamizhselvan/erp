

   <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Settings</h1>
                        <h1 class="page-subhead-line" id="success" style="display:none">This is dummy text , you can replace it with your original text. </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
			                        
            <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-info">
                        <div class="panel-heading">
                           College Profile
                        </div>
                        <div class="panel-body">
                            <form role="form">
                               <div class="col-md-6">  
								   <div class="form-group">
                                            <label >College Name</label>
                                             <div  ><input class="form-control"  id="collegeName" type="text"></div>
                                           <!-- <input class="form-control" type="text"> -->
                                          <!--  <p class="help-block">Help text here.</p> -->
                                 </div>
                               </div>  
                                 
                                <div class="col-md-6">
										<div class="form-group">
                                            <label   >Address Line1</label>
                                           <div ><input class="form-control"  id="addr1" type="text"></div>
                                     <!-- <p class="help-block">Help text here.</p> -->
                                        </div>  
                                </div>
                                 <div class="col-md-6">
                                   <div class="form-group">
                                            <label  >Address Line2</label>
                                            <div ><input class="form-control"  id="addr2" type="text"></div>
                                     <!-- <p class="help-block">Help text here.</p> -->
                                  </div>
                                  </div>
                              
                                   
                                   <div class="col-md-6">
                                   <div class="form-group">
                                            <label  >City</label>
                                            <div ><input class="form-control"  id="city" type="text"></div>
                                     <!-- <p class="help-block">Help text here.</p> -->
                                  </div>
                                  </div>
                                  <div class="col-md-6">
                                   <div class="form-group">
                                            <label  >State</label>
                                            <div ><input class="form-control"  id="state" type="text"></div>
                                     <!-- <p class="help-block">Help text here.</p> -->
                                  </div>
                                  </div>                                  
                                   <div class="col-md-6">
                                   <div class="form-group">
                                            <label  >Phone number</label>
                                            <div ><input class="form-control"  id="phoneNo" type="text"></div>
                                     <!-- <p class="help-block">Help text here.</p> -->
                                  </div>
                                  </div>
                                   <div class="col-md-6">
                                   <div class="form-group">
                                            <label  >Mobile</label>
                                            <div ><input class="form-control"  id="mobile" type="text"></div>
                                     <!-- <p class="help-block">Help text here.</p> -->
                                  </div>
                                  </div>
                                   <div class="col-md-6">
                                  <div class="form-group">
                                            <label  >Email</label>
                                            <div ><input class="form-control"  id="email" type="text"></div>
                                     <!-- <p class="help-block">Help text here.</p> -->
                                  </div>
                                  </div>
                                   <div class="col-md-6">
                                  <div class="form-group">
                                            <label  >Website</label>
                                            <div ><input class="form-control"  id="website" type="text"></div>
                                     <!-- <p class="help-block">Help text here.</p> -->
                                  </div>
                                  </div>
								  <div class="col-md-6">
                                  <div class="form-group">
                                            <label  >Startup year</label>
                                            <div ><input class="form-control"  id="startup_yr" type="text"></div>
                                     <!-- <p class="help-block">Help text here.</p> -->
                                  </div>
                                  </div>
                                   <div class="col-md-6">
									 <div class="form-group">
                                            <label >Academic Year</label>
                                            <div  ><input class="form-control"  id="startDt" type="text"> <input class="form-control"  id="endDt" type="text"></div>
                                     <!-- <p class="help-block">Help text here.</p> -->
                                     </div>
                                </div>
								<div class="col-md-6">
                                  <div class="form-group">
                                            <label>Date Format</label>
                                            <div ><select class="form-control"  id="dateFormat">
												<option class="form-control" value="0">---Select---</option>
												<option class="form-control" value="1">dd/mm/yyyy</option>
												<option class="form-control" value="2">dd-mm-yyyy</option>
												<option class="form-control" value="3">yyyy/mm/dd</option>
												<option class="form-control" value="4">yyyy-mm-dd</option>
											</select></div>
                                     <!-- <p class="help-block">Help text here.</p> -->
                                  </div>
                                  </div>
								  
                                   <div class="col-md-6">  
									   <div class="form-group"></div>                                                                               
								   </div>
							          <div class="col-md-12 col-sm-12 col-xs-12">
											 
											<input class="form-control" type="hidden" name="option" id="option" value="save">
											<div class="col-md-6 col-sm-6 col-xs-12">
											    <input type="button" class="btn btn-info form-control" value="save" id="save" onclick="collegeSettings(this)">
												<!--<button class="btn btn-info form-control" id="save" onclick="employee(this)">save</button>-->
											</div>
											<div class="col-md-6 col-sm-6 col-xs-12">
											    <input type="button" value="update" class="btn btn-info form-control" id="update" onclick="collegeSettings(this)">
												<!--<button class="btn btn-info form-control" id="update" onclick="employee(this)">update</button>-->
											</div>
									   </div>
                                    </form>
                            </div>
                        </div>
            </div>
			 
                            </div>
        </div>
             <!--/.ROW-->
             <!-- <div class="row">
                 <div class="col-md-6 col-sm-6 col-xs-12">
               <div class="panel panel-primary">
                        <div class="panel-heading">
                           FORM ELEMENTS
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                            <label>Select Example</label>
                                            <select class="form-control">
                                                <option>One Vale</option>
                                                <option>Two Vale</option>
                                                <option>Three Vale</option>
                                                <option>Four Vale</option>
                                            </select>
                                        </div>
                            <hr>
                            <div class="form-group">
                                            <label>Multiple Select Example</label>
                                            <select multiple="" class="form-control">
                                                <option>One Vale</option>
                                                <option>Two Vale</option>
                                                <option>Three Vale</option>
                                                <option>Four Vale</option>
                                            </select>
                                        </div>
                            <hr>
                            <div class="form-group">
                                            <label>Checkboxes</label>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">Checkbox Example One
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">Checkbox Example Two
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">Checkbox Example Three
                                                </label>
                                            </div>
                                  <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">Checkbox Example Four
                                                </label>
                                            </div>
                                        </div>
                            <hr>
                            <div class="form-group">
                                            <label>Radio Button Examples</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">Radio Example One
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">Radio Example Two
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">Radio Example Three
                                                </label>
                                            </div>
                                        </div>
                            </div>
                        </div>
                            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
               <div class="panel panel-default">
                        <div class="panel-heading">
                           OTHER ELEMENTS FOR FORM
                        </div>
                        <div class="panel-body">
                            
                            <form role="form">
                                Some Message Examples
                                <br />
                                        <div class="form-group has-success">
                                            <label class="control-label" for="success">SUCCESS EXAMPLE</label>
                                            <input type="text" class="form-control" id="success" />
                                        </div>
                                        <div class="form-group has-warning">
                                            <label class="control-label" for="warning">WARNING EXAMPLE</label>
                                            <input type="text" class="form-control" id="warning" />
                                        </div>
                                        <div class="form-group has-error">
                                            <label class="control-label" for="error">ERROR EXAMPLE</label>
                                            <input type="text" class="form-control" id="error" />
                                        </div>
                                    </form>
                            <hr>
                            Other Group Examples
                            <br>
                            <form role="form">
                                  <div class="input-group">
      <span class="form-group input-group-btn">
        <button class="btn btn-default" type="button">Go!</button>
      </span>
      <input type="text" class="form-control" />
    </div>
<br />
                                           <div class="input-group">
     
      <input type="text" class="form-control" />
                                                <span class="form-group input-group-btn">
        <button class="btn btn-default" type="button">Go!</button>
      </span>
    </div>
                                         </form>
                            <hr>
                            <form role="form">
                                            <div class="form-group">
                                                <label for="disabledInput">Disabled input</label>
                                                <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input" disabled="">
                                            </div>
                                            
                                            
                                    </form>
                            <hr />
                            For more customization for this template or its components please visit official bootstrap website i.e getbootstrap.com or
                            <a href="http://getbootstrap.com/components/" target="_blank">click here</a> 
                            </div>
                        </div>
                            </div>

        </div>

            </div>-->
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
