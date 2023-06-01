<div class="modal fade" id="modalAddUsers" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-simple modal-enable-otp modal-dialog-centered">
        <div class="modal-content p-3 p-md-5">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
                <div class="text-center mb-4">
                    <h3 class="mb-5">Add User</h3>
                </div>
        
                <form role="form" method="POST" id="form_submit_add_form" class="row g-3 needs-validation" novalidate>
				<div class="modal-body">
	                    <div class="col-12">
	                      <label class="form-label">First Name</label>
	                      <div class="input-group has-validation">
	                        <input type="text" name="user_fname" class="form-control" required>
	                      </div>
	                    </div>

	                    <div class="col-12">
	                      <label class="form-label">Middle Name</label>
	                      <div class="input-group has-validation">
	                        <input type="text" name="user_mname" class="form-control" required>
	                      </div>
	                    </div>

	                    <div class="col-12">
	                      <label class="form-label">Last Name</label>
	                      <div class="input-group has-validation">
	                        <input type="text" name="user_lname" class="form-control" required>
	                      </div>
	                    </div>

	                    <div class="col-12">
	                      <label class="form-label">Username</label>
	                      <div class="input-group has-validation">
	                        <input type="text" name="username" class="form-control" required>
	                      </div>
	                    </div>

	                    <div class="col-12">
	                      <label class="form-label">Password</label>
	                      <div class="input-group has-validation">
	                        <input type="text" name="password" class="form-control" required>
	                      </div>
	                    </div>
	                
				</div>
				<div class="modal-footer">
				  	<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				  	<button class="btn btn-primary" type="submit" id="form_btn_add_form">Save</button>
				</div>

			</form>
            </div>
        </div>
    </div>
</div>