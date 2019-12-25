<?php 
	session_start(); 

	if (!isset($_SESSION['user_name'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: ../staff/login.php');
	}


	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['user_name']);
		header("location: ../staff/login.php");
	}
	

?>
<?php


include '../../php/db.php';
$epr="";
$msg="";
if (isset($_GET['epr'])) 
	$epr=$_GET['epr'];
	# code...
	if($epr=='delete')
		{
			$id= $_GET['id'];
			$delete="DELETE FROM blog where id=$id";
			if(mysqli_query($conn, $delete))
				{
					header("location: blog.php?epr=admin");
				}
				
			else
				{
					$msg='error:'.mysql_error();
				}
	
		}
		
		
?>
	
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php
	include '../adminnavbar.php';
	?>
	
	<h2>new content</h2>
	<div class="table-responsive">
  				<table class="table">
		<thead>
			<th>no</th>
			<th>firstname</th>
			<th>lastname</th>
			<th>username</th>
			<th>email</th>
			<th>password</th>
			<th>ip</th>
			<th>dept</th>
			<th>sex</th>
			<th>action</th>

		</thead>
		<?php
		
			# code...
		
		$sql="SELECT * FROM guestusers";
		if ($result = mysqli_query($conn, $sql)){
			while ($row=mysqli_fetch_assoc($result)) {
				echo "<tr>
					<td>".$row['id']."</td>
					<td>".$row['first_name']."</td>
					<td>".$row['last_name']."</td>
					<td>".$row['username']."</td>
					<td>".$row['email']."</td>
					<td>".$row['password']."</td>
					<td>".$row['ip']."</td>
					<td>".$row['dept']."</td>
					<td>".$row['sex']."</td>
					
			
					<td align='center'>
						<a class='btn btn-sm btn-danger' href='blog.php?epr=delete&id=".$row['id']."'>delete</a>
						
					</td>
				</tr>";

				# code...
			}}
		
		?>
		</table>
		</div>
	</div>
	
	<script src="../../js/jquery.min.js"></script>
	<script src="../../js/bootstrap.min.js"></script>
	<script src="../../js/metisMenu.min.js"></script>
	<script src="../../php/custom.js" type="text/javascript"></script>

</body>  
</html>
<?php echo $msg; 

?>
