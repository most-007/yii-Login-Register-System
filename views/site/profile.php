<section id="horizontal-form-layouts">
	<div class="row">
	    <div class="col-md-12">
	        <div class="card">
	            <div class="card-header">
	                <h4 class="card-title" id="horz-layout-basic">User Info</h4>
	                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
        		
	            </div>
	            <div class="card-content collpase show">
	                <div class="card-body">
						<div class="card-text">
							
						</div>
	                    <form class="form form-horizontal form-bordered">
	                    	<div class="form-body">
	                    		
			                    <div class="row">
	                            	<label class="col-md-3 label-control" for="projectinput1">Username</label>
		                            <div class="col-md-9 mx-auto">
		                            	<!-- <input type="text" id="projectinput1" class="form-control" placeholder="First Name" name="fname"> -->
                                        <label ><?=Yii::$app->user->identity->username;?></label>
                                    </div>
		                        </div>
		                        <div class="row">
	                            	<label class="col-md-3 label-control" for="projectinput2">gender</label>
									<div class="col-md-9 mx-auto">
	                            		<!-- <input type="text" id="projectinput2" class="form-control" placeholder="Last Name" name="lname"> -->
	                            	<label ><?=Yii::$app->user->identity->gender;?></label>

                                    </div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">E-mail</label>
		                            <div class="col-md-9 mx-auto">
                                    <label ><?=Yii::$app->user->identity->email;?></label>
		                            	<!-- <input type="text" id="projectinput3" class="form-control" placeholder="E-mail" name="email"> -->
		                            </div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput4">Contact Number</label>
		                            <div class="col-md-9 mx-auto">
		                            	<!-- <input type="text" id="projectinput4" class="form-control" placeholder="Phone" name="phone"> -->
                                        <label ><?=Yii::$app->user->identity->phone;?></label>
                                    </div>
                                </div>
                                <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Ntionality</label>
		                            <div class="col-md-9 mx-auto">
                                    <label ><?=Yii::$app->user->identity->nationality;?></label>
		                            	<!-- <input type="text" id="projectinput3" class="form-control" placeholder="E-mail" name="email"> -->
		                            </div>
		                        </div>

								<!-- <h4 class="form-section"><i class="ft-clipboard"></i> Requirements</h4>

		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Company</label>
									<div class="col-md-9 mx-auto">
		                            	<input type="text" id="projectinput5" class="form-control" placeholder="Company Name" name="company">
		                            </div>
		                        </div>

		                        <div class="form-group row">
		                        	<label class="col-md-3 label-control" for="projectinput6">Interested in</label>
		                        	<div class="col-md-9 mx-auto">
			                            <select id="projectinput6" name="interested" class="form-control">
			                                <option value="none" selected="" disabled="">Interested in</option>
			                                <option value="design">design</option>
			                                <option value="development">development</option>
			                                <option value="illustration">illustration</option>
			                                <option value="branding">branding</option>
			                                <option value="video">video</option>
			                            </select>
		                            </div>
		                        </div>

		                        <div class="form-group row">
		                        	<label class="col-md-3 label-control" for="projectinput7">Budget</label>
		                        	<div class="col-md-9 mx-auto">
			                            <select id="projectinput7" name="budget" class="form-control">
			                                <option value="0" selected="" disabled="">Budget</option>
			                                <option value="less than 5000$">less than 5000$</option>
			                                <option value="5000$ - 10000$">5000$ - 10000$</option>
			                                <option value="10000$ - 20000$">10000$ - 20000$</option>
			                                <option value="more than 20000$">more than 20000$</option>
			                            </select>
		                            </div>
		                        </div>

								<div class="form-group row">
									<label class="col-md-3 label-control">Select File</label>
									<div class="col-md-9 mx-auto">
										<label id="projectinput8" class="file center-block">
											<input type="file" id="file">
											<span class="file-custom"></span>
										</label>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput9">About Project</label>
									<div class="col-md-9 mx-auto">
										<textarea id="projectinput9" rows="5" class="form-control" name="comment" placeholder="About Project"></textarea>
									</div>
								</div>-->
							</div> 

	                        <!-- <div class="form-actions">
	                            <button type="button" class="btn btn-warning mr-1">
	                            	<i class="ft-x"></i> Cancel
	                            </button>
	                            <button type="submit" class="btn btn-primary">
	                                <i class="la la-check-square-o"></i> Save
	                            </button>
	                        </div> -->
</form>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>

	




</section>