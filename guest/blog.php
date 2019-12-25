<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

/******LOGO OUT*/
	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}
	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		
	}
	

?>
<?php


include '../php/db.php';
$epr="";
$msg="";

$name=$_SESSION['username'];

$sql="SELECT * FROM guestusers WHERE username='$name'";
        if ($result = mysqli_query($conn, $sql)){
            $row=mysqli_fetch_assoc($result);

         $fullname = $row['last_name']." ".$row['first_name'];

        }
if (isset($_GET['epr'])) 
	$epr=$_GET['epr'];
	# code...
#store image
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

   #save document
if($epr=='save')
	{
		$title =mysqli_real_escape_string($conn, $_POST['title']);
        $link = mysqli_real_escape_string($conn, $_POST['link']);
        $author= mysqli_real_escape_string($conn, $fullname);
        $note = mysqli_real_escape_string($conn, $_POST['note']);
        
        
		$a_sql= "INSERT  INTO blog(title, link, author, img, note )VALUES('$title','$link','$author','$file_name','$note')";
		if(mysqli_query($conn, $a_sql))
			header("location: blog.php?epr=guest");
		else
			$msg='error:'.mysqli_error();
		
	}
	#delete document
	if($epr=='delete')
		{
			$id= $_GET['id'];
			$delete="DELETE FROM blog where id=$id";
			if(mysqli_query($conn, $delete))
				{
					header("location: blog.php?epr=guest");
				}
				
			else
				{
					$msg='error:'.mysqli_error();
				}
	
		}
		
		#update
		#save
		if($epr=='saveup'){
		$id= mysqli_real_escape_string($conn, $_POST['id']);
		$title= mysqli_real_escape_string($conn, $_POST['title']);
        $link = mysqli_real_escape_string($conn, $_POST['link']);
        $author= mysqli_real_escape_string($conn, $fullname);
        $note = mysqli_real_escape_string($conn, $_POST['note']);
       
        
		$a_sql="UPDATE blog SET title='$title', link='$link',author='$author',img='$file_name',note='$note' WHERE id='$id'";
		if(mysqli_query($conn, $a_sql))
			header("location: blog.php?epr=guest");
		else
			$msg='error:'.mysqli_error();
		
	}
?>
	
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
</head>
<body>
	
		<nav class="nav">
			<ul>
				<li>
			<p>Welcome <strong><?php echo $fullname; ?></strong></p></li>
				<li><a href='../index.php'>homepage</a></li>
				<li><p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p></li>
			</ul>
		</nav>
	
		
	<?php
	#update
		if($epr=='update')
		{
			$id=$_GET['id'];
			$row="SELECT * FROM blog WHERE id='$id'";
			if ($result = mysqli_query($conn, $row)){
			$st_row=mysqli_fetch_assoc($result);
		}

				
			?>	
				<div class="container">
				<div class="form-grids row"> 
				
				<div class="form-body">
					<form method="post" enctype="multipart/form-data" action="blog.php?epr=saveup">
					<div class="form-group"> 
							<label for="id">
								id
							</label> 
							<input type="text" class="form-control form-upload"  value="<?php echo $st_row['id']?>" name="id">  
						</div>
					<div class="form-group"> 
							<label for="title">
								Enter title
							</label> 
							<input type="text" class="form-control form-upload"  value="<?php echo $st_row['title']?>" name="title"> 
						</div> 
						<div class="form-group"> 
							<label for="link">link</label>
							 <input type="text" value="<?php echo $st_row['link']?>" name="link" class="form-control form-upload"> 
						</div> 
						<div class="form-group"> 
							<label for="InputFile">File input</label> 
							<input type="file" value="<?php echo '../upload/$st_row["img"]';?>" name="img"> 

						</div>
						<div class="form-group"> 
							 
							<textarea class="form-note"  name="note"><?php echo $st_row['note']?></textarea>

						</div> 
						
						<button type="submit" name="btnsave" class="btn btn-default">
							Submit
						</button> 
							</form> 
						</div>
			
</div>
		<?php 
		}else{
			?>
	


<!---normal-form-->


		<div class="container">

			<div class="form-grids row widget-shadow" 
				data-example-id="basic-forms"> 
				<div class="form-title">
					<h4>write your post here :</h4>
					
				</div>
				<div class="form-body">
					<form method="post" enctype="multipart/form-data" action='blog.php?epr=save'> 
						<div class="form-group"> 
							<label for="title">
								Enter title
							</label> 
							<input type="text" class="form-control form-upload"  name="title" placeholder="enter title"> 
						</div> 
						
						<div class="form-group"> 
							<label for="InputFile">File input</label> 
							<input type="file" name="img"> 

							 
						</div>
						<div class="form-group"> 
							 
							<textarea class="form-note" name="note"></textarea>

						</div> 
						
						<button type="submit" name="btnsave" class="btn btn-default">
							Submit
						</button> 
							</form> 
						</div>
					</div>


</div>
<?php
}
?>
<!---fetch form from db-->
	<h2>my blog posts</h2>
	<div class="table-responsive">
  				<table class="table">
		<thead>
			<th>no</th>
			<th>title</th>
						
			<th>action</th>
		</thead>
		<?php
		
			# code...
		
		$sql="SELECT * FROM blog WHERE author='$fullname'";
		$no=1;
		if ($result = mysqli_query($conn, $sql)){
			while ($row=mysqli_fetch_assoc($result)) {
				echo "<tr class='table-row'>
					<td >$no</td>

					<td id='title'>
			        			  ".$row["title"]."
			        	</td>
					
					
					<td align='center'>
						<a class='btn btn-sm btn-danger' href='blog.php?epr=delete&id=".$row['id']."'>delete</a>
						<a class='btn btn-sm btn-success' href='blog.php?epr=update&id=".$row['id']."'>update</a>
					</td>
				</tr>";
				$no++;
				# code...
			}}
		
		?>
	</table>
	</div>
	</div>

</body>  
</html>
<?php echo $msg; 

?>
