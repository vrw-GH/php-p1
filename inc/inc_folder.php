<?php
$filelist = scandir('./inc');
// print_r($filelist);

foreach ($filelist as $filekey => $file) {
   echo '<a href="./inc/'.$file.'">'.$file.'</a><br>';
};