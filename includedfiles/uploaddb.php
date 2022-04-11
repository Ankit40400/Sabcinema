     <?php
include 'database.php';

if(isset($_POST['submit']))
{
$file = $_FILES['file'];
print_r($file);

	$fileName= $_FILES['file']['name'];
	$filetype = $_FILES['file']['type'];
	$filesize = $_FILES['file']['size'];
	$filetemname = $_FILES['file']['tmp_name'];
	$fileerror = $_FILES['file']['error'];

	$moviename = mysqli_real_escape_string($conn,$_POST['movie_name']);
	$link = mysqli_real_escape_string($conn,$_POST['link']);
	$category = mysqli_real_escape_string($conn,$_POST['category']);
	$size =mysqli_real_escape_string($conn,$_POST['size']);
	




	$fileExt = explode(".", $fileName);

	$allowed = array('jpg','png','jpeg');

	$fileactualExt= strtolower(end($fileExt));
	if(in_array($fileactualExt, $allowed))
	{
		if($fileerror=== 0)
		{
			if($filesize<1500000)
			{
				$fileNameNew = $fileName.'.'.uniqid("",true).".".$fileactualExt;
				$filedestination = 'uploaded/'.$fileNameNew;
				
					if(empty($moviename)||empty($link)||empty($category))
					{
						header("Location:../index.php?gallay=empty");
						exit();
						
					}
					else{
								$sql ="select * from new";
								$stmt = mysqli_stmt_init($conn);
								if(!mysqli_stmt_prepare($stmt,$sql))
								{
									echo "sql statement failed1";
								}else{
									mysqli_stmt_execute($stmt);
									$result = mysqli_stmt_get_result($stmt);
									$rowcount = mysqli_num_rows($result);
									$setImageorder= $rowcount + 1;

								
}

							$sql = "insert into new(image_name, movie_name, movie_link, movie_section,
							movie_size, orderid) values(?,?,?,?,?,?);";
							if(!mysqli_stmt_prepare($stmt,$sql))
								{
									echo "sql statement failed";
								}else{

									mysqli_stmt_bind_param($stmt,"ssssss",$fileNameNew, $moviename,$link,$category,$size,$setImageorder);
									mysqli_stmt_execute($stmt);


									move_uploaded_file($filetemname, $filedestination);
									echo "uploades";
									header("Location:../index.php?succes");

								}
							
							
						}	
			}
			else
					{
					header("Location:../index.php?gallary=propersize_image");
					exit();
					}
				

			}
		
		else
		{
			header("Location:../index.php?gallary=error_in_uploading_file");
			exit();
		}

	}else
		{
			header("Location:../index.php?gallary=improper_extention");
			exit();
		}

}

	else
	{
		header("Location:../index.php?gallary=press_upload_button");
		exit();
		
	}

?>