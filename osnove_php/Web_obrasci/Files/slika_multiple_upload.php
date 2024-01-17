<form action="" method="post" enctype="multipart/form-data">
Picture:
<input type="file" name="picture[]" multiple="multiple"  />
<input type="submit" value="Send" />
</form>
<?php

//$uploaddir = '/var/www/uploads/';
$uploaddir =$_SERVER['DOCUMENT_ROOT'].'/osnove_php/uploads/'; 

// kreiraj upload dir ukoliko ne postoji
if(!is_dir($uploaddir)){
    mkdir($uploaddir);
  }
  print_r($_FILES);

$uploadfile = $uploaddir . basename($_FILES['picture']['name'][0]);


for ($i=0; $i < count($_FILES['picture']['name']); $i++) { 
    $ext = pathinfo( basename($_FILES['picture']['name'][$i]), PATHINFO_EXTENSION);
    if (move_uploaded_file($_FILES['picture']['tmp_name'][$i], time().'('.$i.').'.$ext)) {    
        echo "File is valid, and was successfully uploaded.\n";
    } else {
        echo "Possible file upload attack!\n";
    }
}

?>