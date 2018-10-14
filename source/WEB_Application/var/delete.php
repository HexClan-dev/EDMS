<?php
$files = glob('./cache/*'); // get all file names     
foreach($files as $file){ // iterate files
  if(is_file($file))
    unlink($file); // delete file
}
$smth=glob('./sessions/*'); // get all file names
foreach($smth as $file){ // iterate files
  if(is_file($file))
    unlink($file); // delete file
}
echo "Deleted!!!";
?>
