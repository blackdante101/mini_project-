<?php 
session_start();

class Chatbot
{
	public $db;
	function __construct() {
		$this->db = new mysqli("localhost","root","","chatbot");
	}
	public function signInWithEmailAndPassword($email,$password)
	{
		$stmt= $this->db->prepare("SELECT id,email,password,last_name from userstbl WHERE email=? AND password=?");
		$stmt->bind_param("ss",$email,$password);
		$stmt->execute();
		$stmt->bind_result($id,$e,$pwd,$lastname);
		$stmt->store_result();
		 if($stmt->num_rows == 1)
        {
         if($stmt->fetch()) 
        {
         $_SESSION['username']=$lastname;
         $_SESSION['uid'] = $id;
         header('location:../dashboard/');
        }
    }
    else {
    	header('location:../index.php?s=err');  
    }
    $stmt->close();	
		
	}
	public function Signup($first_name,$last_name,$email,$dob,$password)
	{
		$stmt=$this->db->prepare('INSERT INTO userstbl(first_name,last_name,email,dob,password) VALUES (?,?,?,?,?)');
		$stmt->bind_param("sssss",$first_name,$last_name,$email,$dob,$password);
		$signedUp =$stmt->execute();
		if($signedUp)
		{
			header('location:../index.php');
		}
		else
		{
			header('location:../signup.php?s=err');
		}
		$stmt->close();
	}
	public function listServices()
	{
		$stmt=$this->db->prepare("SELECT * FROM servicestbl");
		$stmt->execute();
		$stmt->bind_result($id,$title,$img,$description);
		while($stmt->fetch())
		{
			echo ' 
			<div class="col-md-2 p-3"> 
			<div class="service-card">
		<div style="background-image: url(../'.$img.');" class="service-img">
			
		</div>
		<h6>'.$title.'</h6>
		<a href="servicerequest.php?id='.$id.'" class="btn service-btn">Book now</a>
	</div> 
	</div>

			';
		}
		$stmt->close();
	}
	public function getServiceDetails($id)
	{
		$stmt=$this->db->prepare("SELECT * FROM servicestbl WHERE id =?");
		$stmt->bind_param('i',$id);
		$stmt->execute();
		$stmt->bind_result($id,$title,$img,$description);

		while($stmt->fetch())
		{
			echo '  
			<div style="background-image:url(../'.$img.');" class="servicerequest-img">
				
			</div>
			<h3 class="mt-3">'.$title.'</h3>
			<p>'.$description.'</p>
			';
			$_SESSION['bookingtype'] = $title;
		}
	}
	public function bookService($uid,$first_name,$last_name,$town,$phone_number,$service_type,$status)
	{
		$stmt=$this->db->prepare("INSERT INTO bookings(uid,first_name,last_name,town,phone_number,service_type,status) VALUES (?,?,?,?,?,?,?)");
		$stmt->bind_param("isssiss",$uid,$first_name,$last_name,$town,$phone_number,$service_type,$status);
		$booked = $stmt->execute();
		if($booked)
		{
			header("location:../dashboard/booked.php");
		}
		else
		{
			header("location:servicerequest.php?err=1");
		}

	}
	public function getBookings()
	{
		$id = $_SESSION['uid'];
		$stmt= $this->db->prepare("SELECT * FROM bookings WHERE uid = ? ORDER BY id DESC");
		$stmt->bind_param("i",$id);
		$stmt->execute();
		$stmt->bind_result($id,$uid,$fname,$lname,$town,$number,$service,$status);
        //$stmt->fetch();
		//echo $stmt->num_rows;
		//if($stmt->num_rows > 0)
		//{
		while($stmt->fetch())
		{
			echo '
			<div class="container rounded bg-light mt-3 rounded p-3">
			<div class="row">
			<div class="col-md-10">
			<h4 class="ml-3">'.$service.'</h4>
			<hr/>
			<p class="ml-3 text-secondary">
			<span><i class="fa fa-user"></i>&nbsp;&nbsp;'.$fname.' '.$lname.'</span><br>
			<span><i class="fa fa-map-marker"></i>&nbsp;&nbsp;'.$town.'</span><br>
			<span><i class="fa fa-phone"></i>&nbsp;&nbsp;'.$number.'</span>

			</p>
			</div>
			<div class="col-md-1">
			<h6>Status:</h6>
			<p class="text-danger">'.$status.'</p>
			</div>
			</div>
			</div>';
		}
	/*}
	else
	{
		echo '
		<div class=" container p-5">
		<h2 class="text-center">No Bookings</h2>
		<p class="text-center">you have not made any bookings yet</p>
		<img style="margin-left:20%;" src="../img/nobookings.jpg" width="60%" height="60%" alt="">
		
	</div>   

		';
	}*/

	}
	public function listPendingBookings()
	{   $status = '<h6 class="text-info">Pending</h6>';
		$stmt=$this->db->prepare("SELECT * FROM bookings WHERE status =? ORDER BY id DESC");
		$stmt->bind_param('s',$status);
		$stmt->execute();
		$stmt->bind_result($id,$uid,$fname,$lname,$town,$pnum,$service,$status);
		while($stmt->fetch())
		{
			echo ' 
             <tr>
             <td>'.$fname.'</td>
             <td>'.$lname.'</td>
             <td>'.$town.'</td>
             <td>'.$pnum.'</td>
             <td>'.$service.'</td>
             <td>'.$status.'</td>
             <td>
             <a class="btn btn-sm btn-success" href="actions.php?id='.$id.'&action=Confirmed">Accept</a>
             <a class="btn btn-sm btn-danger" href="actions.php?id='.$id.'&action=Declined">Decline</a>
             </td>
             </tr>
			';
		}
	}
	public function listConfirmedBookings()
	{
		$status = '<h6 class="text-success">Confirmed</h6>';
		$stmt=$this->db->prepare("SELECT * FROM bookings WHERE status =?");
		$stmt->bind_param('s',$status);
		$stmt->execute();
		$stmt->bind_result($id,$uid,$fname,$lname,$town,$pnum,$service,$status);
		while($stmt->fetch())
		{
			echo ' 
             <tr>
             <td>'.$fname.'</td>
             <td>'.$lname.'</td>
             <td>'.$town.'</td>
             <td>'.$pnum.'</td>
             <td>'.$service.'</td>
             <td>'.$status.'</td>
             
             </tr>
			';
		}
	}
	public function adminLogin($username,$password)
	{
		$stmt=$this->db->prepare("SELECT first_name,password FROM userstbl WHERE first_name = ? AND password=?");
		$stmt->bind_param("ss",$username,$password);
		$stmt->execute();
		$stmt->bind_result($first_name,$last_name);
		$stmt->store_result();
		if($stmt->num_rows == 1)
		{
			if($stmt->fetch())
			{ 
				$_SESSION['username'] = "admin";
				header('location:../admin/dashboard.php');
			}

		}
		else
		{
             header('location:../admin/index.php?s=err');
		}
	}

}

?>