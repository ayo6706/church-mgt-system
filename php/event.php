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

include 'db.php';
$epr="";
$msg="";
if (isset($_GET['epr'])) 
	$epr=$_GET['epr'];
	# code...
if(isset($_FILES['img'])){
      $errors= array();
      $file_name = $_FILES['img']['name'];
      $file_size =$_FILES['img']['size'];
      $file_tmp =$_FILES['img']['tmp_name'];
      $file_type=$_FILES['img']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['img']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"../upload/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
       if (empty($file_name)) {
      	# code...
      	$file_name = 'sticky-notes.jpg';
      }
   }
if($epr=='save')
	{
		$title = mysqli_real_escape_string($conn, $_POST['title']);
        $link = mysqli_real_escape_string($conn,$_POST['link']);
        $location= mysqli_real_escape_string($conn,$_POST['location']);
        $date= mysqli_real_escape_string($conn,$_POST['date']);
		$a_sql= "INSERT  INTO event(title, link, location,date, img )VALUES('$title','$link','$location',,'$date','$file_name')";
		if(mysqli_query($conn, $a_sql))
			header("location: event.php");
		else
			$msg='error1:'.mysqli_error();
		
	}
	if($epr=='delete')
		{
			$id= $_GET['id'];
			$delete = "DELETE FROM event WHERE id='$id'";
			if(mysqli_query($conn, $delete))
				{
					header("location: event.php?epr=admin");
				}
			else
				{
					$msg='error:'.mysqli_error();
				}
	
		}
		if($epr=='saveup'){
		$id = mysqli_real_escape_string($conn, $_POST['id']);
		$title = mysqli_real_escape_string($conn, $_POST['title']);
        $link = mysqli_real_escape_string($conn, $_POST['link']);
        $location= mysqli_real_escape_string($conn, $_POST['location']);
        $date= mysqli_real_escape_string($conn, $_POST['date']);
       
        
		$a_sql="UPDATE event SET title='$title', link='$link',location='$location', date='$date', img='$file_name' WHERE id='$id'";
		if(mysqli_query($conn, $a_sql))
			header("location: event.php?epr=admin");
		else
			$msg='error:'.mysqli_error();
		
	}
?>
	
<!DOCTYPE html>
<html>
<head>
	<title></title><?php
	include '../include/adminnavbar.php';
	?>
	
					
	<?php
		if($epr=='update')
		{
			$id=$_GET['id'];
			$row="SELECT * FROM event WHERE id='$id'";
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
					<form method="post" enctype="multipart/form-data" action="event.php?epr=saveup">
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
							<input type="text" class="form-control form-upload" id="exampleInputEmail1" value="<?php echo $st_row['title']?>" name="title" placeholder="Enter title"> 
						</div> 
						<div class="form-group"> 
							<label for="link">link</label>
							 <input type="text" value="<?php echo $st_row['link']?>" name="link" class="form-control form-upload" id="exampleInputPassword1" placeholder="link"> 
						</div> 
						<div class="form-group"> 
							<label for="exampleInputFile">File input</label> 
							<input type="file" value="<?php echo '../upload/$st_row["img"]';?>" name="img" id="exampleInputFile"> 

							
						</div>
						<div class="form-group"> 
							<label for="link">link</label>
							 <input type="text" value="<?php echo $st_row['location']?>" name="location" class="form-control form-upload" id="exampleInputPassword1" placeholder="link"> 
						</div> 
						
						<div class="form-group"> 
							<label for="link">link</label>
							 <input type="date" value="<?php echo $st_row['date']?>" name="date" class="form-control form-upload" id="exampleInputPassword1" placeholder="date"> 
						</div> 
						<button type="submit" name="btnsaveup" class="btn btn-default">
							Submit
						</button> 
							</form> 
						</div>
			
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
					<form method="post" enctype="multipart/form-data" action='event.php?epr=save'> 
						<div class="form-group"> 
							<label for="title">
								Enter title
							</label> 
							<input type="text" class="form-control form-upload" id="exampleInputEmail1" name="title" placeholder="Enter title"> 
						</div> 
						<div class="form-group"> 
							<label for="link">link</label>
							 <input type="text" name="link" class="form-control form-upload" id="exampleInputPassword1" placeholder="link"> 
						</div> 
						<div class="form-group"> 
							<label for="exampleInputFile">File input</label> 
							<input type="file" name="img" id="exampleInputFile"> 

							<p class="help-block">Example block-level help text here.</p> 
						</div>
						<div class="form-group"> 
							 
							<input type="text" class="form-control form-upload" name="location">

						</div>
						<div class="form-group"> 
							 
							<input type="date" class="form-control form-upload" name="date">

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
			<th>title</th>
			
			<th>location</th>
			
			
			
			<th>action</th>
		</thead>
		<?php
		
		$sql="SELECT * FROM event";
		if ($result = mysqli_query($conn, $sql)){
			while ($row=mysqli_fetch_assoc($result)) {
				echo "<tr class='table-row'>
					<td>".$row['id']."</td>
					<td id='title'><a href='".$row["link"]."'>
			        			  ".$row["title"]."
			        	</a></td>
					
					<td id='link'>".$row['location']."</td>
					

					
					<td align='center'>
						<a class='btn btn-sm btn-danger' href='event.php?epr=delete&id=".$row['id']."'>delete</a>
						<a class='btn btn-sm btn-success' href='event.php?epr=update&id=".$row['id']."'>update</a>
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
