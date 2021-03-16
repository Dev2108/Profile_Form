<?php
if(isset($_REQUEST["submit"]))
{
    $username = $_REQUEST["username"];
    $dob = $_REQUEST["dob"];
    $mob = $_REQUEST["number"];
    
    $gen = $_REQUEST["gen"];
 $email = $_REQUEST["email"];
    $skill = $_REQUEST["skill"];
 $about = $_REQUEST["about"];
 $ed = $_REQUEST["ed"];
 $intArea= $_REQUEST["interest"];
   $pflink= $_REQUEST["pflink"]; 
   $profile= $_FILES["image"]; 
    echo "Name: " . $username . "<br />";
  
     echo "DOB: " . $dob . "<br />";
 echo "Gender: " . $gen . "<br />";
 echo "Email: " . $email . "<br />";
 echo "Contact No. : " . $mob . "<br />";
 echo "Skills: " ;
 for($i=0;$i<count($skill);$i++){
    echo " <li>$skill[$i]</li>";
  } 
 echo "About: " . $about . "<br />";
 echo "Education Qualification: " . $ed . "<br />";
 echo "Inerest Area:";
 for($i=0;$i<count($intArea);$i++){
    echo " <li>$intArea[$i]</li>";
  } 
echo "Professional link: " . $pflink . "<br />";
echo "Profile photo: " . $profile. "<br />";

    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";
    // exit;
    
    if(!empty($_FILES["image"]["name"]))
    {
        //user has browsed a file to upload
        if($_FILES["image"]["error"] == 0)
        {
            //no errors with the file
            
            //alloweed file type array
            $allowed_types = array("image/jpeg", "image/jpg", "image/png", "image/gif");
            
            if((in_array($_FILES["image"]["type"], $allowed_types)))
            {
                //correct file type
                
                //get the dot position
                echo $dot_pos = strrpos($_FILES["image"]["name"], ".");
                echo '<br />';
                //from dot position to the end is the extension
                echo $extension = substr($_FILES["image"]["name"], $dot_pos);
                echo '<br />';
                //use date function to get random number
                echo $random_name = date("YmdHis");
                echo '<br />';
                //add date function value with extension to get unique new file name
                echo $new_name = $random_name . $extension;
                echo '<br />';

                if($_FILES["image"]["size"] < 819200)
                {
                    $uploaded = move_uploaded_file($_FILES["image"]["tmp_name"],
                                               "submit/" . $new_name);
                    
                    if($uploaded)
                    {
                        echo "File uploaded sucessfully";
                    }
                    else
                    {
                        echo "File could not be uploaded";
                    }   
                }
                else
                {
                    echo "File should be less than 10KB " . $_FILES["image"]["size"];
                }
            }
            else
            {
                //invalid file type
                echo "Please upload JPG or PNG files";
            }
        }
        else
        {
            //error with the file uploading
            echo "There are some errors with the file";
        }
    }
    else
    {
        //error message for not selecting any file
        echo "Please browse a file to upload";
    }

  }

?>

<!DOCTYPE html>
<html>
  <head>
   


  </head>
<body>

<img class='profile-picture' src='http://localhost:8000/submit/<?php echo $new_name?>' />

</body>
</html>