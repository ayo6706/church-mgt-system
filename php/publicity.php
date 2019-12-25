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
	
$_POST['position'] = 'publicity';
?>
<?php


include 'db.php';
$epr="";
$msg="";
if (isset($_GET['epr'])) 
	$epr=$_GET['epr'];
	# code...
if($epr=='save')
	{
		$user = $_POST['username'];
        $pass = $_POST['password'];
        $position = $_POST['position'];
        $pass =(md5($pass));
		$a_sql= "INSERT  INTO publicity(username, password, position)VALUES('$user','$pass','$position')";
		if(mysqli_query($conn, $a_sql))
			header("location: publicity.php?epr=admin");
		else
			$msg='error:'.mysqli_error();
		
	}
	if($epr=='delete')
		{
			$id= $_GET['id'];
			$delete="DELETE FROM publicity where id=$id";
			if(mysqli_query($conn, $delete))
				{
					header("location: publicity.php?epr=admin");
				}
				
			else
				{
					$msg='error:'.mysql_error();
				}
	
		}
		
		if($epr=='saveup'){
			$id=$_POST['id'];
		$user = $_POST['username'];
        $pass = $_POST['password'];
        $position = $_POST['position'];
        $pass =(md5($pass));
        
		$a_sql="UPDATE publicity SET username='$user', password='$pass', position='$position' WHERE id='$id'";
		if(mysqli_query($conn, $a_sql))
			header("location: publicity.php?epr='admin'");
		else
			$msg='error:'.mysqli_error();
		
	}
?>
	
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php
	include '../include/adminnavbar.php';
	?>
				
			

	<?php
		if($epr=='update')
		{
			$id=$_GET['id'];
			$row="SELECT * FROM publicity WHERE id='$id'";
			if ($result = mysqli_query($conn, $row)){
			$st_row=mysqli_fetch_assoc($result);
		}

				
			?>	
				
				
			<div class="form-grids row widget-shadow" 
				data-example-id="basic-forms"> 
				<div class="form-title">
					<h4>Basic Form :</h4>
				</div>
				<div class="form-body">
					<form method="post" enctype="multipart/form-data" action="publicity.php?epr=saveup">
					<div class="form-group"> 
							<label for="title">
								id
							</label> 
							<input type="text" class="form-control form-upload" id="exampleInputEmail1" value="<?php echo $st_row['id']?>" name="id" placeholder="Enter title"> 
						</div> 
					
					<div class="form-group"> 
							<label for="title">
								Enter title
							</label> 
							<input type="text" class="form-control form-upload" id="exampleInputEmail1" value="<?php echo $st_row['username']?>" name="username" placeholder="Enter title"> 
						</div> 
						<div class="form-group"> 
							<label for="link">link</label>
							 <input type="password" value="<?php echo $st_row['password']?>" name="password" class="form-control form-upload" id="exampleInputPassword1" placeholder="link"> 
						</div> 
						
						<button type="submit" name="btnsave" class="btn btn-default">
							Submit
						</button> 
							</form> 
						</div>
			

		<?php 
		}else{
			?>
			






			<div class="form-grids row widget-shadow" 
				data-example-id="basic-forms"> 
				<div class="form-title">
					<h4>Basic Form :</h4>
				</div>
				<div class="form-body">
					<form method="post" enctype="multipart/form-data" action='publicity.php?epr=save'> 
						<div class="form-group"> 
							<label for="title">
								Enter title
							</label> 
							<input type="text" class="form-control form-upload" id="exampleInputEmail1" name="username" placeholder="Enter title"> 
						</div> 
						<div class="form-group"> 
							<label for="link">link</label>
							 <input type="password" name="password" class="form-control form-upload" id="exampleInputPassword1" placeholder="link"> 
						</div> 
						<button type="submit" name="btnsave" class="btn btn-default">
							Submit
						</button> 
							</form> 
						</div>
					</div>



<?php
}
?>

	<h2>new content</h2>
	<div class="table-responsive">
  				<table class="table">
		<thead>
			<th>no</th>
			<th>username</th>
			<th>action</th>
		</thead>
		<?php
		
			# code...
		
		$sql="SELECT * FROM publicity";
		if ($result = mysqli_query($conn, $sql)){
			while ($row=mysqli_fetch_assoc($result)) {
				echo "<tr class='table-row'>
					<td >".$row['id']."</td>
			
					<td id='link' >".$row['username']."</td>
			
					<td align='center'>
						<a class='btn btn-sm btn-danger' href='publicity.php?epr=delete&id=".$row['id']."'>delete</a>
						<a class='btn btn-sm btn-success' href='publicity.php?epr=update&id=".$row['id']."'>update</a>
					</td>
				</tr>";

				# code...
			}}
		
		?>
	</table>
	</div>
	</div>
	<script src="../js/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/metisMenu.min.js"></script>
	<script src="custom.js" type="text/javascript"></script>

</body>  
</html>
<?php echo $msg; 

?>
