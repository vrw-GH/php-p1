<!-- ----------------- INC_FOLDER.php ------------------- -->

<div class="div_workarea" style="background-color: <?=$randomcolor; ?>; ">
   <?php
      $filelist = scandir('./inc');
      // echo $_SERVER['PHP_SELF'];
      // echo $_SERVER['HTTP_HOST'];
      // $query = $_SERVER ['QUERY_STRING'];
      $page = $_GET['page'];

      foreach ($filelist as $filekey => $file) {
         $href = 'index.php?page='.$page.'&file='.$file;
         echo '<a href='.$href.'>'.$file.'</a><br>';
      };
      echo '<hr>';
      if (!empty($_GET["file"])){
         $file = $_GET["file"];
         echo "<i>Contents of - <strong>$file</strong><br></i>";
         echo '<div class="div_descr" style="background-color: white">';
         if (in_array($file,$filelist)) {
            if ($file != '.' && $file != '..') {
               if (is_dir('./inc/'.$file)) {
                  echo "<pre>This is a sub-directory.<pre>" ;
               } else {
                  $contents = file_get_contents('./inc/'.$file);
                  echo '<pre>'.htmlentities($contents).'</pre>';
               }
            } else {echo '<pre>Cannot display.</pre>';};
         } else {
            echo '<pre>no such file.</pre>';
         };
         echo '<br>';
         echo '</div>';
      } else {echo 'Select something above to show contents.';};      
   ?>
</div>