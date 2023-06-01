<div class="modal fade" id="modalAdd" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-simple modal-enable-otp modal-dialog-centered">
        <div class="modal-content p-3 p-md-5">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
                <div class="text-center mb-4">
                    <h3 class="mb-5">Add Academic Year</h3>
                </div>
        
                <form role="form" method="POST" id="form_submit_add_form" class="row g-3 needs-validation" novalidate>
					<div class="modal-body">
						<div class="col-12">
							<label class="form-label">Violation</label>
							<select name="violation_id" class="form-select">
								<?php 
									$fetch_violation = $mysqli->query("SELECT * FROM tbl_violations ORDER BY violation_name ASC") or die(mysqli_error());
									while ($violation_row = $fetch_violation->fetch_array()) {
										echo "<option value='$violation_row[violation_id]'>$violation_row[violation_name]</option>";
									}
								?>
							</select>
						</div>

						<div class="col-12">
							<label class="form-label">Student</label>
							<select name="student_id" class="form-select">
								<?php 
									$fetch_student = $mysqli->query("SELECT * FROM tbl_students ORDER BY student_fname ASC") or die(mysqli_error());
									while ($student_row = $fetch_student->fetch_array()) {
										echo "<option value='$student_row[student_id]'>$student_row[student_lname], $student_row[student_fname] $student_row[student_mname]</option>";
									}
								?>
							</select>
						</div>

						<div class="col-12">
							<label class="form-label">Sanction</label>
							<select name="sanction_id" class="form-select">
								<?php 
									$fetch_sanction = $mysqli->query("SELECT * FROM tbl_sanctions ORDER BY sanction_name ASC") or die(mysqli_error());
									while ($sanction_row = $fetch_sanction->fetch_array()) {
										echo "<option value='$sanction_row[sanction_id]'>$sanction_row[sanction_name]</option>";
									}
								?>
							</select>
						</div>

						<div class="col-12">
							<label class="form-label">Academic Year</label>
							<select name="ay_id" class="form-select">
								<?php 
									$fetch_ay = $mysqli->query("SELECT * FROM tbl_academic_year ORDER BY ay_name ASC") or die(mysqli_error());
									while ($ay_row = $fetch_ay->fetch_array()) {
										echo "<option value='$ay_row[ay_id]'>$ay_row[ay_name]</option>";
									}
								?>
							</select>
						</div>

						<div class="col-12">
							<label class="form-label">Description</label>
							<textarea class="form-control" placeholder="Description" name="offense_desc"></textarea>
						</div>

					</div>

                    <div class="col-12 text-center">
                        <button class="btn btn-primary" type="submit" id="form_btn_add_form">Save</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
			    </form>
            </div>
        </div>
    </div>
</div>