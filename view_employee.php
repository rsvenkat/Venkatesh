
<?php   include("include/header.php");
include("include/connect.php"); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Data Tables
      <small>advanced tables</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Tables</a></li>
      <li class="active">Data tables</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        

        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Data Table With Full Features</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>Sl No</th>
                  <th>Emp Name</th>
                  <th>Phone No</th>
                  <th>PF UAN No</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $sno=1; 
                $emp=mysqli_query($connect,"select * from employees");
                while($emp_row=mysqli_fetch_array($emp))
                {

                  ?>
                  <tr>
                    <td><?php echo $sno; ?></td>
                    <td><?php echo $emp_row["name"]; ?></td>
                    <td><?php echo $emp_row["mobileno"]; ?></td>
                    <td><?php echo $emp_row["ppfuanno"]; ?></td>
                  </tr>
                  <?php
                  $sno++;
                }
                
                ?>
              </tbody>
              
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>

<?php   include("include/footer.php"); ?>