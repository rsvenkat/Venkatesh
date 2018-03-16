<?php   include("include/header.php"); ?>
<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      
      <small></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="add_employee.php">Add Employee</a></li>
      <li class="active">Add Employee</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Employee Upload</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
          title="Collapse">
          <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
          </div>
        </div>
        <form action="emp_save.php" name="form" method="post" enctype="multipart/form-data" >  
          <input type="hidden" name="command" id="command" value="insert_head_record_emp" />

          <div class="box-body">
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="exampleInputEmail1">Emp.Id</label>
                  <input type="file"  id="logo" name="logo" onChange="ValidateFileUpload()">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="exampleInputEmail1">Heading no</label>
                  <input type="text" class="form-control" id="head_no" onKeyPress="return onlyNumbers1(event)" name="head_no" >
                </div>
              </div>
              
            </div>
            
            
            
            <div class="box-footer">
              <button type="submit" nmae="submit"  class="btn btn-info pull-right">Save</button>
            </div>
          </div>
        </form>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php   include("include/footer.php"); ?>


  <script type="text/javascript">
    ar charCode = (event.which) ? event.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
      return false; return true; }
  </script>
  <SCRIPT type="text/javascript">
    function ValidateFileUpload() {
      var fuData = document.getElementById('logo');
      var FileUploadPath = fuData.value;
//To check if user upload any file
if (FileUploadPath == '') 
{
  alert("Please upload an image");
} else {
  var Extension = FileUploadPath.substring(
    FileUploadPath.lastIndexOf('.') + 1).toLowerCase();
//The file uploaded is an image
if (Extension == "xls") {
// To Display
if (fuData.files && fuData.files[0]) {
  var reader = new FileReader();
  reader.onload = function(e) {
    $('#blah').attr('src', e.target.result);
  }
  reader.readAsDataURL(fuData.files[0]);
}
} 
//The file upload is NOT an image
else {
  alert("File Must be in Excel formate ie:xls(Excel 97-2003 Workbook)");
  document.getElementById("logo").value = "";
}
}
}
</script>
