<?php   include("include/header.php");
include("include/connect.php"); 
if(isset($_REQUEST['submit'])=='submit')
{    

  if(@$_REQUEST['id']=='')
  {
    mysqli_query($connect,"INSERT INTO employees (empid,name,fname,bankname,desination,bankaccountno,mobileno,bankifsccode,address,aadhaarno,ppfuanno,esicipno,dateofbirth) VALUES ('".$_REQUEST['empid']."','".$_REQUEST['name']."','".$_REQUEST['fname']."','".$_REQUEST['bankname']."','".$_REQUEST['desination']."','".$_REQUEST['bankaccountno']."','".$_REQUEST['mobileno']."','".$_REQUEST['bankifsccode']."','".$_REQUEST['address']."','".$_REQUEST['aadhaarno']."','".$_REQUEST['ppfuanno']."','".$_REQUEST['esicipno']."','".date('Y-m-d H:i:s')."')") or die(mysqli_error());

    echo "<script type='text/javascript'>alert('Employee Inserted Successfully...');window.location.href='add_employee.php';</script>";
  }
}
?>

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
        <form role="form" action="" method="post" enctype="multipart/form-data">
          <div class="box-body">
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label>Emp.Id</label>
                  <input type="text" class="form-control" id="empid" name="empid" placeholder="Emp.Id" required>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Father Name</label>
                  <input type="text" class="form-control" id="fname" name="fname" placeholder="Father Name" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label>DOB</label>
                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" class="form-control pull-right" id="datepicker" name="dateofbirth" placeholder="Date of Birth" required>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Mobile.No</label>
                  <input type="text" class="form-control" id="mobileno" name="mobileno" placeholder="Mobile No" required>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Address</label>
                  <input type="text" class="form-control" id="address" name="address" placeholder="Address" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label>Aadhaar No</label>
                  <input type="text" class="form-control" id="aadhaarno" name="aadhaarno" placeholder="Aadhaar No" required>
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label>Bank Name</label>
                  <input type="text" class="form-control" id="bankname" name="bankname" placeholder="Bank Name" required>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Bank Account.No</label>
                  <input type="text" class="form-control" id="bankaccountno" name="bankaccountno" placeholder="Bank Account No" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label>Bank IFSC Code</label>
                  <input type="text" class="form-control" id="bankifsccode" name="bankifsccode" placeholder="Bank IFSC Code" required>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>PF UAN.No</label>
                  <input type="text" class="form-control" id="ppfuanno" name="ppfuanno" placeholder="PF UAN.No" required>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>ESIC IP.No</label>
                  <input type="text" class="form-control" id="esicipno" name="esicipno" placeholder="ESIC IP.No" required>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Designation</label>
                  <input type="text" class="form-control" id="desination" name="desination" placeholder="Designation" required>
                </div>
              </div>
            </div><br>
            <button type="submit" name="submit" class="btn btn-info pull-right">Save</button>
          </div>
        </form>
      </div>
      <!-- /.box-body -->
      <!-- /.box-footer-->
    </div>
    <!-- /.box -->

  </section>
  <!-- /.content -->
<!-- /.content-wrapper -->
<?php   include("include/footer.php"); ?>