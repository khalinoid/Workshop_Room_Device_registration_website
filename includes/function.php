<?php
session_start();
 
$message = ''; 

// $dest_path = ''; 

include 'database.php';
if (isset($_POST['submit']) && $_POST['submit'] == 'Upload')
{
	
  if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK)
  {
    // get details of the uploaded file
    $fileTmpPath = $_FILES['file']['tmp_name'];
    $fileName = $_FILES['file']['name'];
    $fileSize = $_FILES['file']['size'];
    $fileType = $_FILES['file']['type'];
    $fileNameCmps = explode(".", $fileName);
    $fileExtension = strtolower(end($fileNameCmps));
 
    // sanitize file-name
    // $newFileName = md5(time() . $fileName) . '.' . $fileExtension;
 
    // check if file has one of the following extensions
    $allowedfileExtensions = array('jpg', 'gif', 'png', 'zip', 'txt', 'xls', 'doc', 'pdf');
 
    if (in_array($fileExtension, $allowedfileExtensions))
    {
      // directory in which the uploaded file will be moved
      $uploadFileDir = '../uploads/';
     echo $dest_path = $uploadFileDir . $fileName;
 
      if(move_uploaded_file($fileTmpPath, $dest_path)) 
      {
        $branch_name = $_POST['branch_name'];
        $device_name = $_POST['device_name'];
        $device_model = $_POST['device_model'];
        $serial_number = $_POST['serial_number'];
        $registered_by = $_POST['registered_by'];
        $content = $_POST['content'];
       
       
        $query = "INSERT into devices (branch_name,device_name,device_model,serial_num,registered_by,discription,file_path,created_at)";
        $query .= " VALUES ('".$branch_name."','".$device_name."','".$device_model."','".$serial_number."','".$registered_by."','".$content."','".$fileName."',NOW())";
        
        $insert = mysqli_query($connect,$query);
        if($insert){
          
          $message ='File is successfully uploaded.';
          die();
        }
        else{
          $message =die("QUERY FAILD " . mysqli_error($connect));

        }
    }
      else
      {
        $message = 'There was some error moving the file to upload directory. Please make sure the upload directory is writable by web server.';
      }
    }
    else
    {
      $message = 'Upload failed. Allowed file types: ' . implode(',', $allowedfileExtensions);
    }
  }
  else
  {
    $message = 'There is some error in the file upload. Please check the following error.<br>';
    $message .= 'Error:' . $_FILES['file']['error'];
  }
}
$_SESSION['message'] = $message;

header("Location: ../reg.php");