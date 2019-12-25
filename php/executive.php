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
   }
if($epr=='save')
	{
		$name = mysqli_real_escape_string($conn, $_POST['name']);
        $position = mysqli_real_escape_string($conn,$_POST['position']);
        $text= mysqli_real_escape_string($conn,$_POST['text']);
        $quote= mysqli_real_escape_string($conn,$_POST['quote']);
        $dept= mysqli_real_escape_string($conn,$_POST['dept']);
        $facebook= mysqli_real_escape_string($conn,$_POST['facebook']);
        $twitter= mysqli_real_escape_string($conn,$_POST['twitter']);
        $instagram= mysqli_real_escape_string($conn,$_POST['instagram']);
        $contact= mysqli_real_escape_string($conn,$_POST['contact']);
        $year= mysqli_real_escape_string($conn,$_POST['year']);
		$a_sql= "INSERT  INTO executive(name, img, position,text,quote,dept,facebook,twitter, instagram,contact,year )VALUES('$name','$file_name','$position','$text','$quote','$dept','$facebook','$twitter','$instagram','$contact','$year')";
		if(mysqli_query($conn, $a_sql))
			header("location: executive.php");
		else
			$msg='error1:'.mysqli_error();
		
	}
	if($epr=='delete')
		{
			$id= $_GET['id'];
			$delete = "DELETE FROM executive WHERE id='$id'";
			if(mysqli_query($conn, $delete))
				{
					header("location: executive.php?epr=admin");
				}
			else
				{
					$msg='error:'.mysqli_error();
				}
	
		}
		if($epr=='saveup'){
		$id = mysqli_real_escape_string($conn, $_POST['id']);
		$name = mysqli_real_escape_string($conn, $_POST['name']);
        $position = mysqli_real_escape_string($conn,$_POST['position']);
        $text= mysqli_real_escape_string($conn,$_POST['text']);
        $quote= mysqli_real_escape_string($conn,$_POST['quote']);
        $dept= mysqli_real_escape_string($conn,$_POST['dept']);
        $facebook= mysqli_real_escape_string($conn,$_POST['facebook']);
        $twitter= mysqli_real_escape_string($conn,$_POST['twitter']);
        $instagram= mysqli_real_escape_string($conn,$_POST['instagram']);
        $contact= mysqli_real_escape_string($conn,$_POST['contact']);
        $year= mysqli_real_escape_string($conn,$_POST['year']);
		
       
        
		$a_sql="UPDATE executive SET name='$name', img='$file_name',position='$position',text='$text',quote='$quote',dept='$dept',facebook='$facebook',twitter='$twitter',instagram='$instagram',contact='$contact',year='$year' WHERE id='$id'";
		if(mysqli_query($conn, $a_sql))
			header("location: executive.php?epr=admin");
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
			$row="SELECT * FROM executive WHERE id='$id'";
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
					<form method="post" enctype="multipart/form-data" action="executive.php?epr=saveup">
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

							<p class="help-block">Example block-level help text here.</p> 
						</div>
						<div class="form-group"> 
							<label for="link">link</label>
							 <input type="text" value="<?php echo $st_row['location']?>" name="location" class="form-control form-upload" id="exampleInputPassword1" placeholder="link"> 
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
					<form method="post" enctype="multipart/form-data" action='executive.php?epr=save'> 
						<div class="form-group"> 
							<label for="title">
								name
							</label> 
							<input type="text" class="form-control form-upload" id="exampleInputEmail1" name="name" placeholder="Enter title"> 
						</div> 
						<div class="form-group"> 
							<label for="link">img</label>
							 <input type="file" name="img" class="form-control form-upload" id="exampleInputPassword1" placeholder="link"> 
						</div> 
						<div class="form-group"> 
							<label for="exampleInputFile">position</label> 
							<input type="text" name="position" id="exampleInputFile"> 

					
						</div>
						<div class="form-group"> 
							 <label for="exampleInputFile">text</label>
							<input type="text" class="form-control form-upload" name="text">

						</div> 
						<div class="form-group"> 
						<label for="exampleInputFile">quote</label>
							 
							<input type="text" class="form-control form-upload" name="quote">

						</div> 
						<div class="form-group"> 
							 <label for="exampleInputFile">dept</label>
							<input type="text" class="form-control form-upload" name="dept">

						</div> 
						<div class="form-group"> 
							 <label for="exampleInputFile">facebook</label>
							<input type="text" class="form-control form-upload" name="facebook">

						</div> 
						<div class="form-group"> 
							 <label for="exampleInputFile">twitter</label>
							<input type="text" class="form-control form-upload" name="twitter">

						</div> 
						<div class="form-group"> 
							 <label for="exampleInputFile">instagram</label>
							<input type="text" class="form-control form-upload" name="instagram">

						</div> 
						<div class="form-group"> 
							 <label for="exampleInputFile">contact</label>
							<input type="text" class="form-control form-upload" name="contact">

						</div> 
						<div class="form-group"> 
							 <label for="exampleInputFile">year</label>
							<input type="text" class="form-control form-upload" name="year">

						</div> 
						<div class="checkbox"> 
							<label> <input type="checkbox"> Check me out </label> 
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
		
		$sql="SELECT * FROM executive";
		if ($result = mysqli_query($conn, $sql)){
			while ($row=mysqli_fetch_assoc($result)) {
				echo "<tr class='table-row'>
					<td>".$row['id']."</td>
					
					<td id='link'>".$row['name']."</td>
					<td id='link'>".$row['position']."</td>
					<td id='link'>".$row['year']."</td>
					
					<td align='center'>
						<a class='btn btn-sm btn-danger' href='executive.php?epr=delete&id=".$row['id']."'>delete</a>
						<a class='btn btn-sm btn-success' href='executive.php?epr=update&id=".$row['id']."'>update</a>
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
