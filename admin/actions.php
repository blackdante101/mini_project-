<?php 
include '../class/chatbot.php';
$chatbot = new Chatbot();
$id = $_GET['id'];
$action =$_GET['action'];

if($action=="Confirmed")
{
$status = "<h6 class='text-success'>Confirmed</h6>";
$stmt=$chatbot->db->prepare("UPDATE bookings SET status = ? WHERE id =?");
$stmt->bind_param('si',$status,$id);
$stmt->execute();
header('location:index.php');
}
else if($action=="Declined")
{
	$status = "<h6 class='text-danger'>Declined</h6>";
	$stmt=$chatbot->db->prepare("UPDATE bookings SET status = ? WHERE id =?");
	$stmt->bind_param('si',$status,$id);
    $stmt->execute();
    header('location:index.php');
}

?>