<form action="" method="post" enctype="multipart/form-data">
Picture:
<input type="file" name="picture"   />
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
$uploadfile = $uploaddir . basename($_FILES['picture']['name']);
// kako dobiti ekstenziju file:
$ext = pathinfo( basename($_FILES['picture']['name']), PATHINFO_EXTENSION);
//echo $ext.PHP_EOL;

// drugi nacin
print_r(explode('.', $uploadfile));
$ext = end(explode('.', $uploadfile));
//echo $ext.PHP_EOL;

print_r($_FILES);
echo __DIR__.PHP_EOL;
echo dirname(__FILE__).PHP_EOL;
echo $_SERVER['DOCUMENT_ROOT'];

echo '<pre>';
//if (move_uploaded_file($_FILES['picture']['tmp_name'], $uploadfile)) {
if (move_uploaded_file($_FILES['picture']['tmp_name'], time().'.'.$ext)) {    
    echo "File is valid, and was successfully uploaded.\n";
} else {
    echo "Possible file upload attack!\n";
}
print_r($_FILES);
echo "</pre>";
?>