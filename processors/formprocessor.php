<?php
include '../class/chatbot.php';
$user = new Chatbot();
if(isset($_POST['login']))
{
	$email = $_POST['email'];
	$password = $_POST['password'];
	$user->signInWithEmailAndPassword($email,$password);
	

}
if(isset($_POST['signup']))
{
	$firstname = $_POST['first_name'];
	$lastname = $_POST['last_name'];
	$email = $_POST['email'];
	$dob = $_POST['dob'];
	$password = $_POST['password'];
	$bookingtype = $_POST['booking_type'];
	$user->Signup($firstname,$lastname,$email,$dob,$password);
}
if(isset($_POST['bookbtn']))
{
	$uid = $_SESSION['uid'];
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$town = $_POST['town'];
	if (isset($_POST['test_type'])) {
		$test_type = $_POST['test_type'];
	}
	else
	{
		$test_type="";
	}
	$phone_number = $_POST['phone_number'];
	$service_type=$_POST['service_type'];
	$status = '<h6 class="text-info">Pending</h6>';
	$user->bookService($uid,$first_name,$last_name,$town,$phone_number,$service_type,$status,$test_type);
}
if(isset($_POST['admin_login']))
{
	$first_name = $_POST['username'];
	$password = $_POST['password'];
	$user->adminLogin($first_name,$password);
}
if(isset($_POST['addmessage']))
{
	$id = $_POST['id'];
	$status = "<h6 class='text-success'>Confirmed</h6>";
	$message = $_POST['message'];
	$user->confirmBooking($id,$status,$message);
}


 ?>