<?php
// database connection code
if(isset($_POST['txtName']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', 'root','db_contact');

// get the post records
$txtIdNumber = $_POST['IdNumber'];
$txtPassword = $_POST['Password'];

// database insert SQL code
$sql = "INSERT INTO `tbl_contact` (`Id`, `fldIdNumber', `fldPassword') VALUES ('0', '$txtIdNumber', '$txtPassword')";

// insert in database
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Save The Entered Information";
}
}
else
{
	echo "There's Some Error With The Information That You Entered Please Try Again. Thank You!";

}
?>
