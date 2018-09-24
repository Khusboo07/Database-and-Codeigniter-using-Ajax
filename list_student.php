<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Student Details</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css'?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/jquery.dataTables.css'?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/dataTables.bootstrap4.css'?>">
</head>
<body>
<div class="container">
    <!-- Page Heading -->
    <div class="row">
        <div class="col-12">
            <div class="col-md-12">
                <br>
                <h2 align="center">REGISTERED STUDENT DETAILS</h2>
                    <div class="float-left"><a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#Modal_Add"><span class="fa fa-plus"></span>REGISTER NEW STUDENT</a></div>
                
            </div>
            
            <table class="table table-striped" id="mydata">
                <thead>
                    <tr>
                        <th>Student Code</th>
                        <th>Student Name</th>
                        <th>Contact-No</th>
                        <th>Class</th>
                        <th>Date Of Birth</th>
                        <th>Subjects</th>
                        <th>Address</th>  
                        <th>City</th> 
                        <th style="text-align: right;">Actions</th>
                    </tr>
                </thead>
                <tbody id="show_data">
                    
                </tbody>
            </table>
        </div>
    </div>
        
</div>


        <!-- MODAL ADD -->
            <form>
            <div class="modal fade" id="Modal_Add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Student</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Student Code</label>
                            <div class="col-md-10">
                              <input type="text" name="student_code" id="student_code" class="form-control" placeholder="Student Code">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Student Name</label>
                            <div class="col-md-10">
                              <input type="text" name="student_name" id="student_name" class="form-control" placeholder="Student Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Contact-No</label>
                            <div class="col-md-10">
                              <input type="text" name="contact_no" id="contact_no" class="form-control" placeholder="Student Contact-No">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Class</label>
                            <div class="col-md-10">
                              <input type="text" name="class" id="class" class="form-control" placeholder="Student Class">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Date Of Birth</label>
                            <div class="col-md-10">
                              <input type="date" name="date_of_birth" id="date_of_birth" class="form-control" placeholder="Student Date Of Birth">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label" for="subject">Subjects</label>
                            <div class="col-md-10">
                                <select name="subject" id="subject" class="form-control">
                                    <option value="">--Select Subject--</option>
                                    <option value="English">English</option>
                                    <option value="Mathematics">Mathematics</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Address</label>
                            <div class="col-md-10">
                              <input type="text" name="address" id="address" class="form-control" placeholder="Student Address">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">City</label>
                            <div class="col-md-10">
                              <input type="text" name="city" id="city" class="form-control" placeholder="Student City">
                            </div>
                        </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" type="submit" id="btn_save" class="btn btn-primary">Save</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
        <!--END MODAL ADD-->

        <!-- MODAL EDIT -->
        <form>
            <div class="modal fade" id="Modal_Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Student Details.</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Student Code</label>
                            <div class="col-md-10">
                              <input type="text" name="student_code_edit" id="student_code_edit" class="form-control" placeholder="Student Code" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Student Name</label>
                            <div class="col-md-10">
                              <input type="text" name="student_name_edit" id="student_name_edit" class="form-control" placeholder="Student Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Contact-No</label>
                            <div class="col-md-10">
                              <input type="text" name="contact_no_edit" id="contact_no_edit" class="form-control" placeholder="Student Contact-No">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Class</label>
                            <div class="col-md-10">
                              <input type="text" name="class_edit" id="class_edit" class="form-control" placeholder="Student Class">
                            </div>
                        </div>
                         <div class="form-group row">
                            <label class="col-md-2 col-form-label">Date Of Birth</label>
                            <div class="col-md-10">
                              <input type="date" name="date_of_birth_edit" id="date_of_birth_edit" class="form-control" placeholder="Student Date Of Birth">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label" for="subject">Subjects</label>
                            <div class="col-md-10">
                                <select name="subject_edit" id="subject_edit" class="form-control">
                                    <option value="">--Select Subject--</option>
                                    <option value="English">English</option>
                                    <option value="Mathematics">Mathematics</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Address</label>
                            <div class="col-md-10">
                              <input type="text" name="address_edit" id="address_edit" class="form-control" placeholder="Student Address">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">City</label>
                            <div class="col-md-10">
                              <input type="text" name="city_edit" id="city_edit" class="form-control" placeholder="Student City">
                            </div>
                        </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" type="submit" id="btn_update" class="btn btn-primary">Update</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
        <!--END MODAL EDIT-->

 <!--MODAL DELETE-->
         <form>
            <div class="modal fade" id="Modal_Delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Student</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                       <strong>Are you sure to delete this record?</strong>
                  </div>
                  <div class="modal-footer">
                    <input type="hidden" name="student_code_delete" id="student_code_delete" class="form-control">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="button" type="submit" id="btn_delete" class="btn btn-primary">Yes</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
        <!--END MODAL DELETE-->

<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.2.1.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.dataTables.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/dataTables.bootstrap4.js'?>"></script>

<script type="text/javascript">
    $(document).ready(function(){
        show_student(); //call function show all student
        
        $('#mydata').dataTable();
         
        //function show all student
        function show_student(){
            $.ajax({
                type  : 'ajax',
                url   : "<?php echo site_url('Students/list_students')?>",
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                '<td>'+data[i].student_code+'</td>'+
                                '<td>'+data[i].student_name+'</td>'+
                                '<td>'+data[i].contact_no+'</td>'+
                                '<td>'+data[i].class+'</td>'+
                                '<td>'+data[i].date_of_birth+'</td>'+
                                '<td>'+data[i].subject+'</td>'+
                                '<td>'+data[i].address+'</td>'+
                                '<td>'+data[i].city+'</td>'+
                                '<td style="text-align:right;">'+
                                    '<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit" data-student_code="'+data[i].student_code+'" data-student_name="'+data[i].student_name+'" data-contact_no="'+data[i].contact_no+'" data-class="'+data[i].class+'" data-date_of_birth="'+data[i].date_of_birth+'" data-subject="'+data[i].subject+'" data-address="'+data[i].address+'" data-city="'+data[i].city+'"  >Edit</a>'+' '+
                                    '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-student_code="'+data[i].student_code+'">Delete</a>'+
                                '</td>'+
                                '</tr>';
                    }
                    $('#show_data').html(html);
                }

            });
        }


        //Save student
        $('#btn_save').on('click',function(){
            var student_code = $('#student_code').val();
            var student_name = $('#student_name').val();
            var contact_no = $('#contact_no').val();
            var student_class = $('#class').val();
            var dob = $('#date_of_birth').val();
            var sub = $('#subject').val();
            var address = $('#address').val();
            var city = $('#city').val();
           
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('Students/add_student')?>",
                dataType : "JSON",
                data : {student_code:student_code , student_name:student_name, contact_no:contact_no, class:student_class, date_of_birth:dob, subject:sub, address:address, city:city},
                success: function(data){
                    $('[name="student_code"]').val("");
                    $('[name="student_name"]').val("");
                    $('[name="contact_no"]').val("");
                    $('[name="class"]').val("");
                    $('[name="date_of_birth"]').val("");
                    $('[name="subject"]').val("");
                    $('[name="address"]').val("");
                    $('[name="city"]').val("");
                    $('#Modal_Add').modal('hide');
                    show_student();
                }
            });
            return false;
        });

         //get data for update record
        $('#show_data').on('click','.item_edit',function(){
            var student_code = $(this).data('student_code');
            var student_name = $(this).data('student_name');
            var contact_no   = $(this).data('contact_no');
            var student_class = $(this).data('class');
            var dob   = $(this).data('date_of_birth');
            var sub   = $(this).data('subject');
            var address = $(this).data('address');
            var city = $(this).data('city');

            
            $('#Modal_Edit').modal('show');
            $('[name="student_code_edit"]').val(student_code);
            $('[name="student_name_edit"]').val(student_name);
            $('[name="contact_no_edit"]').val(contact_no);
            $('[name="class_edit"]').val(student_class);
            $('[name="date_of_birth_edit"]').val(dob);
            $('[name="subject_edit"]').val(sub);
            $('[name="address_edit"]').val(address);
            $('[name="city_edit"]').val(city);
        });

        //update record to database
         $('#btn_update').on('click',function(){
            var student_code = $('#student_code_edit').val();
            var student_name = $('#student_name_edit').val();
            var contact_no  = $('#contact_no_edit').val();
            var student_class = $('#class_edit').val();
            var dob = $('#date_of_birth_edit').val();
            var sub = $('#subject_edit').val();
            var address = $('#address_edit').val();
            var city = $('#city_edit').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('Students/update_student')?>",
                dataType : "JSON",
                data : {student_code:student_code , student_name:student_name,  contact_no:contact_no, class:student_class, date_of_birth:dob, subject:sub, address:address, city:city},
                success: function(data){
                    $('[name="student_code_edit"]').val("");
                    $('[name="student_name_edit"]').val("");
                    $('[name="contact_no_edit"]').val("");
                    $('[name="class_edit"]').val("");
                    $('[name="date_of_birth_edit"]').val("");
                    $('[name="subject_edit"]').val("");
                    $('[name="address_edit"]').val("");
                    $('[name="city_edit"]').val("");

                    $('#Modal_Edit').modal('hide');
                    show_student();
                }
            });
            return false;
        });

       //get data for delete record
        $('#show_data').on('click','.item_delete',function(){
            var student_code = $(this).data('student_code');
            
            $('#Modal_Delete').modal('show');
            $('[name="student_code_delete"]').val(student_code);
        });

       //delete record to database
         $('#btn_delete').on('click',function(){
            var student_code = $('#student_code_delete').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('Students/delete_student')?>",
                dataType : "JSON",
                data : {student_code:student_code},
                success: function(data){
                    $('[name="student_code_delete"]').val("");
                    $('#Modal_Delete').modal('hide');
                    show_student();
                }
            });
            return false;
        });

    });

</script>
</body>
</html>