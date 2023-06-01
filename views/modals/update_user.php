<div class="modal fade" id="modalUpdateUsers" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-simple modal-dialog-centered">
        <div class="modal-content p-3 p-md-5">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
                <div class="text-center">
                    <h3 class="mb-5">Edit User Information</h3>
                </div>
        
                <form role="form" method="POST" id="form_submit_update_form" class="row g-3 needs-validation" novalidate>
				    <div class="modal-body">
						<input type="hidden" id="update_user_id" name="update_user_id">

	                    <div class="col-12">
	                      <label class="form-label">First Name</label>
	                      <div class="input-group has-validation">
	                        <input type="text" id="update_user_fname" name="update_user_fname" class="form-control" required>
	                      </div>
	                    </div>

	                    <div class="col-12">
	                      <label class="form-label">Middle Name</label>
	                      <div class="input-group has-validation">
	                        <input type="text" id="update_user_mname" name="update_user_mname" class="form-control" required>
	                      </div>
	                    </div>

	                    <div class="col-12">
	                      <label class="form-label">Last Name</label>
	                      <div class="input-group has-validation">
	                        <input type="text" id="update_user_lname" name="update_user_lname" class="form-control" required>
	                      </div>
	                    </div>

	                    <div class="col-12">
	                      <label class="form-label">Username</label>
	                      <div class="input-group has-validation">
	                        <input type="text" id="update_username" name="update_username" class="form-control" required>
	                      </div>
	                    </div>

	                    <div class="col-12">
	                      <label class="form-label">Password</label>
	                      <div class="input-group has-validation">
	                        <input type="text" id="update_password" name="update_password" class="form-control" required>
	                      </div>
	                    </div>
	                
				    </div>

				<div class="col-12 text-center">
                    <button class="btn btn-primary" type="submit" id="form_btn_update_form">Save</button>
				  	<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				</div>
			</form>

            </div>
        </div>
    </div>
</div>