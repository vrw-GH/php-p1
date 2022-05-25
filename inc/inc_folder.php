<?php
$filelist = scandir('./inc');
// print_r($filelist);
// echo $_SERVER['PHP_SELF'];
// echo $_SERVER['HTTP_HOST'];
// $query = $_SERVER ['QUERY_STRING'];
$page = $_GET['page'];

foreach ($filelist as $filekey => $file) {
   // echo '<a href="index.php?page='.substr_replace($file,'',-4).'">'.$file.'</a><br>';
   
   $href = 'index.php?page='.$page.'&file='.$file;
   
   echo '<a href='.$href.'>'.$file.'</a><br>';
   // echo '<a href="./inc/'.$file.'">'.$file.'</a><br>';
};
echo '<br><hr>';

if (!empty($_GET["file"])){
   $file = $_GET["file"];
   echo "<u>File contents of - <strong>$file</strong><br></u>";
   if (in_array($file,$filelist)) {
      if ($file != '.' && $file != '..') {
         if (is_dir('./inc/'.$file)) {
            echo "<br>It is a subdirectory.<br>" ;
         } else {
            $contents = file_get_contents('./inc/'.$file);
            echo '<pre>'.htmlentities($contents).'</pre>';
         }
      } else {echo '<h4>Cannot display.</h4>';};      
   } else {
      echo '<h4>no such file.</h4>';
   };
   echo '<br><br>'; 
} else {
   // include($inc_dir.'/home.php');
};