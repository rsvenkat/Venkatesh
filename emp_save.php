<?php
ini_set('upload_max_filesize', '20M');
ini_set('post_max_size', '10M');
ini_set('max_input_time', 300);
ini_set('max_execution_time', 15000);

include("include/connect.php");
//error_reporting(0);

$command=$_POST['command'];

$c_date=date('Y-m-d');


date_default_timezone_set('Asia/Kolkata');
$date = new DateTime();
$c_time=$date->format( 'H:i:s A' );
$ip_addr=$_SERVER['REMOTE_ADDR']; 
$cur_year=date('Y');



include 'excel_reader.php';



$excel = new PhpExcelReader;


if($command=='insert_head_record_emp')
{

	$file_name=$_FILES["logo"]["name"];
	$file_size=$_FILES["logo"]["size"];
$file_mb1=round(($file_size / 1048576), 2); // bytes to MB 
$file_mb=$file_mb1.'MB';
$ext = pathinfo($file_name, PATHINFO_EXTENSION);
$random_no=rand(10000000,99999999);
$head_no=$_POST['head_no'];


/*$sec_namea=$_POST['sec_namea'];
*/
$target_path = "upload/"; 
$uploaded_files=$random_no."_".$_FILES['logo']['name'];
move_uploaded_file($_FILES['logo']['tmp_name'], $target_path .$random_no."_".$_FILES['logo']['name']);

mysqli_query($connect,"insert into excel_record(sheet_name,excel_type,file_size,head_no,c_date,c_time)values('$uploaded_files','$ext','$file_mb','$head_no','$c_date','$c_time')");

$last_id = mysqli_insert_id($connect);

//$last_id=mysqli_insert_id($connect);

$excel->read('upload/'.$uploaded_files);
function sheetData($sheet,$last_id,$head_no) 
{
	$x = $head_no;
	$y = 1;
	while($y <= $sheet['numCols']) 
	{
		$cell = isset($sheet['cells'][$x][$y]) ? $sheet['cells'][$x][$y] : '';
		mysqli_query("insert into excel_heading(excel_id,heading,heading_no)values('$last_id','$cell','$y')");
		//echo "insert into excel_heading(excel_id,heading,heading_no)values('$last_id','$cell','$y')";
		$y++;
	}  
	$x++;
}
$nr_sheets = count($excel->sheets);
$excel_data = '';         
$i=0;
$excel_data .= sheetData($excel->sheets[$i],$last_id,$head_no);

//echo "<script type=text/javascript>alert('Files Uploaded');window.location.href='emp_matching.php?last_id=".$last_id."';</script>";
}

if($command=='match_insert_excel_rows_emp')
{





	$record_id=$_POST['record_id'];
	$name=$_POST['name'];
	$fathername=$_POST['fathername'];
	$dateofbirth=$_POST['dateofbirth'];
	$mobile=$_POST['mobile'];
	$address=$_POST['address'];
	$aadhaarno=$_POST['aadhaarno'];
	$bankname=$_POST['bankname'];
	$bankaccountno=$_POST['bankaccountno'];
	$bankifsccode=$_POST['bankifsccode'];
	$ppfuanno=$_POST['ppfuanno'];
	$esicipno=$_POST['esicipno'];
	$empid=$_POST['empid'];

//echo "select * from excel_record where id='$record_id'";
	$b=mysqli_query($connect,"select * from excel_record where id='$record_id'")or die(mysqli_error());
	$row_b=mysqli_fetch_array($b);
	$file_name=$row_b['sheet_name'];
	$head_no=$row_b['head_no'];


	$excel->read('upload/'.$file_name);
	function sheetData($sheet,$head_no) 
	{
		$x = $head_no+1;
		$userData = array();
		while($x <= $sheet['numRows']) 
		{
			global $name,$fathername,$dateofbirth,$mobile,$address,$aadhaarno,$bankname,$bankaccountno,$bankifsccode,$ppfuanno,$esicipno,$record_id,$empid;


			$name1=isset($sheet['cells'][$x][$name]) ? $sheet['cells'][$x][$name] : '';
			$name2=str_replace("'", "", $name1);

			$fathername1=isset($sheet['cells'][$x][$fathername]) ? $sheet['cells'][$x][$fathername] : '';
			$fathername2=str_replace("'", "", $fathername1);

			$dateofbirth1=isset($sheet['cells'][$x][$dateofbirth]) ? $sheet['cells'][$x][$dateofbirth] : '';
			$dateofbirth2=str_replace("'", "", $dateofbirth1);

			$mobile1=isset($sheet['cells'][$x][$mobile]) ? $sheet['cells'][$x][$mobile] : '';
			$mobile2=str_replace("'", "", $mobile1);

			$address1=isset($sheet['cells'][$x][$address]) ? $sheet['cells'][$x][$address] : '';
			$address2=str_replace("'", "", $address1);

			$aadhaarno1=isset($sheet['cells'][$x][$aadhaarno]) ? $sheet['cells'][$x][$aadhaarno] : '';
			$aadhaarno2=str_replace("'", "", $aadhaarno1);

			$bankname1=isset($sheet['cells'][$x][$bankname]) ? $sheet['cells'][$x][$bankname] : '';
			$bankname2=str_replace("'", "", $bankname1);

			$bankaccountno1=isset($sheet['cells'][$x][$bankaccountno]) ? $sheet['cells'][$x][$bankaccountno] : '';
			$bankaccountno2=str_replace("'", "", $bankaccountno1);

			$bankifsccode1=isset($sheet['cells'][$x][$bankifsccode]) ? $sheet['cells'][$x][$bankifsccode] : '';
			$bankifsccode2=str_replace("'", "", $bankifsccode1);

			$ppfuanno1=isset($sheet['cells'][$x][$ppfuanno]) ? $sheet['cells'][$x][$ppfuanno] : '';
			$ppfuanno2=str_replace("'", "", $ppfuanno1);

			$esicipno1=isset($sheet['cells'][$x][$esicipno]) ? $sheet['cells'][$x][$esicipno] : '';
			$esicipno2=str_replace("'", "", $esicipno1);

			$empid1=isset($sheet['cells'][$x][$empid]) ? $sheet['cells'][$x][$empid] : '';
			$empid2=str_replace("'", "", $empid1);






			$d = mysqli_query($connect,"SELECT  *  FROM  employees where  name='$first_name2' and mobileno='$mobile2' ")or die(mysqli_error());
			$count_d=mysqli_num_rows($d);
			if($count_d>0) 
			{
// echo "<script type=text/javascript>alert('Please check in Excel'+'$first_name2'+' $std_name'+' $sec_no2'+ '$father_ph2'+ ' Details already Stored in database.');</script>";
			}
			else
			{



				mysqli_query($connect,"INSERT INTO `employees`(`empid`, `name`, `fname`, `dateofbirth`, `mobileno`, `address`, `aadhaarno`, `bankname`, `bankaccountno`, `bankifsccode`, `ppfuanno`, `esicipno`) VALUES ('$empid','$name2','$fathername2','$dateofbirth2','$mobile2','$address2','$aadhaarno2','$bankname2','$bankaccountno2','$bankifsccode2','$ppfuanno2','$esicipno2')")or die(mysqli_error());


			}

			/* End  */
			$x++;
		}
	}
$nr_sheets = count($excel->sheets);       // gets the number of sheets
$excel_data = '';              // to store the the html tables with data of each sheet
$i=0;
sheetData($excel->sheets[$i],$head_no); 

echo "<script type=text/javascript>alert('Values Stored into DB Successfully');window.location='emp_upload.php';</script>";

}
?>