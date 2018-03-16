<?php   include("include/header.php");
include("include/connect.php"); 

$last_id=$_REQUEST['last_id'];?>
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
        <h3 class="box-title">Add Employee</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
          title="Collapse">
          <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
          </div>
        </div>

        <form action="emp_save.php" name="import_student"  method="post" enctype="multipart/form-data" onSubmit="return validateForm()">   
          <input type="hidden" name="command" id="command" value="match_insert_excel_rows_emp" />
          <input type="hidden" name="record_id" id="record_id" value="<?php echo $last_id; ?>" />
          <div class="box-body">
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label>Name</label>
                  <select class="form-control select2" name="name" id="name" style="width: 100%;">
                   
                    <?php
                    $a2=mysqli_query($connect,"select * from  excel_heading where excel_id='$last_id'")or die(mysqli_error());
                    while($row_a2=mysqli_fetch_array($a2))
                    {
                      ?>
                      <option value="<?php echo $row_a2['heading_no']; ?>"><?php echo $row_a2['heading']; ?></option>
                      <?php
                    }
                    ?>
                  </select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Father Name</label>
                  <select class="form-control select2" name="fathername" id="fathername" style="width: 100%;">
                    
                    <?php
                    $a2=mysqli_query($connect,"select * from  excel_heading where excel_id='$last_id'")or die(mysqli_error());
                    while($row_a2=mysqli_fetch_array($a2))
                    {
                      ?>
                      <option value="<?php echo $row_a2['heading_no']; ?>"><?php echo $row_a2['heading']; ?></option>
                      <?php
                    }
                    ?>
                  </select>
                </div>
              </div>
              

              <div class="col-md-4">
                <div class="form-group">
                  <label>DOB</label>
                  <select class="form-control select2" name="dateofbirth" id="dateofbirth" style="width: 100%;">
                    
                    <?php
                    $a2=mysqli_query($connect,"select * from  excel_heading where excel_id='$last_id'")or die(mysqli_error());
                    while($row_a2=mysqli_fetch_array($a2))
                    {
                      ?>
                      <option value="<?php echo $row_a2['heading_no']; ?>"><?php echo $row_a2['heading']; ?></option>
                      <?php
                    }
                    ?>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label>Mobile.No</label>
                  <select class="form-control select2" name="mobile" id="mobile" style="width: 100%;">
                    
                    <?php
                    $a2=mysqli_query($connect,"select * from  excel_heading where excel_id='$last_id'")or die(mysqli_error());
                    while($row_a2=mysqli_fetch_array($a2))
                    {
                      ?>
                      <option value="<?php echo $row_a2['heading_no']; ?>"><?php echo $row_a2['heading']; ?></option>
                      <?php
                    }
                    ?>
                  </select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Address</label>
                  <select class="form-control select2" name="address" id="address" style="width: 100%;">
                    
                    <?php
                    $a2=mysqli_query($connect,"select * from  excel_heading where excel_id='$last_id'")or die(mysqli_error());
                    while($row_a2=mysqli_fetch_array($a2))
                    {
                      ?>
                      <option value="<?php echo $row_a2['heading_no']; ?>"><?php echo $row_a2['heading']; ?></option>
                      <?php
                    }
                    ?>
                  </select>
                </div>
              </div>
              

              
              <div class="col-md-4">
                <div class="form-group">
                  <label>Aadhaar No</label>
                  <select class="form-control select2" name="aadhaarno" id="aadhaarno" style="width: 100%;">
                    
                    <?php
                    $a2=mysqli_query($connect,"select * from  excel_heading where excel_id='$last_id'")or die(mysqli_error());
                    while($row_a2=mysqli_fetch_array($a2))
                    {
                      ?>
                      <option value="<?php echo $row_a2['heading_no']; ?>"><?php echo $row_a2['heading']; ?></option>
                      <?php
                    }
                    ?>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label>Bank Name</label>
                  <select class="form-control select2" name="bankname" id="bankname" style="width: 100%;">
                    
                    <?php
                    $a2=mysqli_query($connect,"select * from  excel_heading where excel_id='$last_id'")or die(mysqli_error());
                    while($row_a2=mysqli_fetch_array($a2))
                    {
                      ?>
                      <option value="<?php echo $row_a2['heading_no']; ?>"><?php echo $row_a2['heading']; ?></option>
                      <?php
                    }
                    ?>
                  </select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Bank Account.No</label>
                  <select class="form-control select2" name="bankaccountno" id="bankaccountno" style="width: 100%;">
                    
                    <?php
                    $a2=mysqli_query($connect,"select * from  excel_heading where excel_id='$last_id'")or die(mysqli_error());
                    while($row_a2=mysqli_fetch_array($a2))
                    {
                      ?>
                      <option value="<?php echo $row_a2['heading_no']; ?>"><?php echo $row_a2['heading']; ?></option>
                      <?php
                    }
                    ?>
                  </select>
                </div>
              </div>
              

              
              <div class="col-md-4">
                <div class="form-group">
                  <label>Bank IFSC Code</label>
                  <select class="form-control select2" name="bankifsccode" id="bankifsccode" style="width: 100%;">
                    
                    <?php
                    $a2=mysqli_query($connect,"select * from  excel_heading where excel_id='$last_id'")or die(mysqli_error());
                    while($row_a2=mysqli_fetch_array($a2))
                    {
                      ?>
                      <option value="<?php echo $row_a2['heading_no']; ?>"><?php echo $row_a2['heading']; ?></option>
                      <?php
                    }
                    ?>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label>PF UAN.No</label>
                  <select class="form-control select2" name="ppfuanno" id="ppfuanno" style="width: 100%;">
                    
                    <?php
                    $a2=mysqli_query($connect,"select * from  excel_heading where excel_id='$last_id'")or die(mysqli_error());
                    while($row_a2=mysqli_fetch_array($a2))
                    {
                      ?>
                      <option value="<?php echo $row_a2['heading_no']; ?>"><?php echo $row_a2['heading']; ?></option>
                      <?php
                    }
                    ?>
                  </select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>ESIC IP.No</label>
                  <select class="form-control select2" name="esicipno" id="esicipno" style="width: 100%;">
                    
                    <?php
                    $a2=mysqli_query($connect,"select * from  excel_heading where excel_id='$last_id'")or die(mysqli_error());
                    while($row_a2=mysqli_fetch_array($a2))
                    {
                      ?>
                      <option value="<?php echo $row_a2['heading_no']; ?>"><?php echo $row_a2['heading']; ?></option>
                      <?php
                    }
                    ?>
                  </select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>EMP ID</label>
                  <select class="form-control select2" name="empid" id="empd" style="width: 100%;">
                    
                    <?php
                    $a2=mysqli_query($connect,"select * from  excel_heading where excel_id='$last_id'")or die(mysqli_error());
                    while($row_a2=mysqli_fetch_array($a2))
                    {
                      ?>
                      <option value="<?php echo $row_a2['heading_no']; ?>"><?php echo $row_a2['heading']; ?></option>
                      <?php
                    }
                    ?>
                  </select>
                </div>
              </div>
            </div>

            <div class="box-footer">
              <button type="submit" class="btn btn-info pull-right">Save</button>
            </div>
          </div>
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


    <script>
      function validateForm() {

        
        
       var first_name = document.getElementById("first_name");
       var first_name1 = first_name.options[first_name.selectedIndex].value;
     if(first_name1==0 || first_name1==null || first_name1== "" ) //for text use if(strUser1=="Select")
     {
       alert("Please select a Student Name");
       return false;
     }
     
   }

 </script>
