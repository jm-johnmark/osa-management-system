<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Pages</li>
                    <li class="breadcrumb-item active">Courses List</li>
                </ol>
            </nav>

            <div class="col-lg-12 mb-4 order-0">
                <div class="card">

                    <div class="col-sm-12" style="padding: 10px;">
                        <div class="btn-group" role="group" aria-label="Basic mixed styles example" style="float: right;">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAdd">Add</button>
                            <button type="button" class="btn btn-danger" onclick="delete_entry()">Delete</button>
                        </div>
                    </div>

                    <div class="card-datatable table-responsive">
                        <table id="datatable" class="datatables-basic table border-top">
                            <thead>
                                <tr>
                                    <th scope="col"><input type="checkbox" onchange="checkAll(this, 'check_user')"></th>
                                    <th scope="col"></th>
                                    <th scope="col">Course Name</th>
                                    <th scope="col">Course Code</th>
                                    <th scope="col">Grade</th>
                                    <th scope="col">Date Added</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php require_once 'views/modals/add_course.php'; ?>
<?php require_once 'views/modals/update_course.php'; ?>

<script type="text/javascript">
$(document).ready(function() { 
	get_datatable();
});

$("#form_submit_update_form").submit(function(e){
    e.preventDefault();
    $("#form_btn_update_form").prop('disabled', true);
    $("#modalUpdate").modal("hide");
    Swal.fire({
        title: 'Update',
        text: "Are you sure you want to proceed?",
        icon: 'question',
        showCancelButton: true,
        confirmButtonText: 'Proceed'
    }).then((result) => {
        if(result.isConfirmed){
            $.ajax({
                type:"POST",
                url:"ajax/update_course.php",
                data:$("#form_submit_update_form").serialize(),
                success:function(data){
                    if(data==1){
                        Swal.fire({
                            icon: 'success',
                            title: 'All Good!',
                            text: 'Course Updated Successfully',
                        });
                        get_datatable();
                    }else{
                        Swal.fire({
                            icon: 'danger',
                            title: 'Opps!',
                            text: 'Failed Query',
                        })
                }
                $("#form_btn_update_form").prop('disabled', false);
                }
            });  
        }
    });
});

function show_details_modal(primary_id){
    $("#modalUpdate").modal('show');
    $.post("ajax/get_courses.php",
        {
            course_id:primary_id
        },function(data){
           	var get_data = JSON.parse(data);
            $("#update_course_id").val(get_data[0].course_id);
            $("#update_course_name").val(get_data[0].course_name);
            $("#update_course_code").val(get_data[0].course_code);
            $("#update_course_grade").val(get_data[0].course_grade);
    });
}

function delete_entry(){
    var checkedValues = $('.delete_check_box:checkbox:checked').map(function() {
        return this.value;
    }).get();
    id = [];

    Swal.fire({
        title: 'Delete',
        text: "Are you sure you want to proceed?",
        icon: 'question',
        showCancelButton: true,
        confirmButtonText: 'Proceed'
    }).then((result) => {
        if(result.isConfirmed){
            $.post("ajax/delete_course.php",
            {
                id:checkedValues
            },function(data){
                if(data == 1){
                    Swal.fire({
                        icon: 'success',
                        title: 'All Good!',
                        text: 'Course deleted successfully',
                    });
                    get_datatable();
                }else{
                    Swal.fire({
                        icon: 'danger',
                        title: 'Opps!',
                        text: 'Failed Query',
                    });
                }   
            });  
        }
    });
}

$("#form_submit_add_form").submit(function(e){
    e.preventDefault();
    $("#form_btn_add_form").prop('disabled', true);
    $.ajax({
        type:"POST",
        url:"ajax/add_course.php",
        data:$("#form_submit_add_form").serialize(),
        success:function(data){
            if(data==1){
                Swal.fire({
                    icon: 'success',
                    title: 'All Good!',
                    text: 'Course Added Successfully',
                })
            	$('#form_submit_add_form')[0].reset();
            	get_datatable();
            }else{
            	Swal.fire({
                    icon: 'warning',
                    title: 'Opps!',
                    text: 'Failed Query!',
                })
           }
           $("#modalAdd").modal("hide");
           $("#form_btn_add_form").prop('disabled', false);
        }
      });
});

function get_datatable(){
$("#datatable").DataTable().destroy();
    $("#datatable").DataTable({
        "responsive": true,
        "processing": true,
        "ajax":{
            "type":"POST",
            "url":"ajax/datatables/courses.php",
            "dataSrc":"data", 
        },
        "columns":[
        {
            "mRender": function(data,type,row){
                return "<input type='checkbox' class='delete_check_box' name='check_user' value='"+row.course_id+"'>";                
            }
        },
        {
            "mRender":function(data, type, row){
                return "<button class='btn btn-success' style='padding: 5px 5px 5px 8px;' data-toggle='tooltip' title='Update Record' onclick='show_details_modal("+row.course_id+")'>Edit</button>";
            }
        },
        {
            "data":"course_name"
        },
        {
            "data":"course_code"
        },
        {
            "data":"course_grade"
        },
        {
            "data":"date_added"
        }
        ]
    });
}
</script>
