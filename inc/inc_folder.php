<?php
$filelist = scandir('./inc');
// echo $_SERVER['PHP_SELF'];
// echo $_SERVER['HTTP_HOST'];
// $query = $_SERVER ['QUERY_STRING'];
$page = $_GET['page'];

echo '<p style="padding:26px;">';
   foreach ($filelist as $filekey => $file) {
      $href = 'index.php?page='.$page.'&file='.$file;
      echo '<a href='.$href.'>'.$file.'</a><br>';
   };
   echo '<br><hr>';

   if (!empty($_GET["file"])){
      $file = $_GET["file"];
      echo "<u>Contents of - <strong>$file</strong><br></u>";
      if (in_array($file,$filelist)) {
         if ($file != '.' && $file != '..') {
            if (is_dir('./inc/'.$file)) {
               echo "<br>This is a sub-directory.<br>" ;
            } else {
               $contents = file_get_contents('./inc/'.$file);
               echo '<pre>'.htmlentities($contents).'</pre>';
            }
         } else {echo '<h4>Cannot display.</h4>';};      
      } else {
         echo '<h4>no such file.</h4>';
      };
      echo '<br><br>'; 
   };
echo '</p>';