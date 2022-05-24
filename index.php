<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" href="../../resources/favicon-apache.png">
   <title>Projects: P1</title>
</head>

<body background="blue">
   <div id="header">
      <h1>My first PHP project</h1>
   </div>

   <div>
      <h3 style="color: blue">Details of project:</h3>
      <?php
         $descfile='./details.txt';
         if (file_exists($descfile)) {
            echo '<pre>';
            // include($descfile);
            // $contents_tagless = str_replace('<',"'",$contents);
            // $contents_tagless = str_replace('>',"'",$contents_tagless);
            $contents = file_get_contents($descfile);
            $contents_tagless = htmlentities($contents);
            echo $contents_tagless;
            echo '</pre>';
         } else {
         echo "<pre>  (No project description found) </pre>";
      }
      // print_r($_GET);
      ?>
      <br>
   </div>


   <div id="menu" style="background-color:lightgrey;">
      <?php
      $inc_dir = "inc";
      $pages = scandir($inc_dir,0);
      unset($pages[0],$pages[1]);
      foreach ($pages as $pagekey => $page) {
         $menuitem = substr_replace($page,'',-4);
         echo '<a href="index.php?page='.strtolower($menuitem).'">'.strtoupper(substr($menuitem,0,1)).substr($menuitem,1).'</a>';
         $seperator = ($pagekey==array_key_last($pages)) ? ' ':' &spades; ';
         echo "&nbsp;$seperator&nbsp;";          
      };
      ?>
   </div>
   <hr>
   <?php 
      // $randomcolor=dechex(rand(0, 10000000));
      $randomcolor = sprintf('#%06X', mt_rand(intval(0xFFFFFF / 1.005), 0xFFFFFF));
   ?>
   <div id="contents" style="background-color: <?=$randomcolor; ?>; margin:20px;">
      <?php
         if (!empty($_GET["page"])){
            $page = $_GET["page"];
            if (in_array($page.'.php',$pages)) {
               include($inc_dir.'/'.$page.'.php');
            } else {
               echo '<h3>Page does\'nt exist.</h3>';
            };
         } else {
            include($inc_dir.'/home.php');
         };
      ?>
   </div>

   <div id="footer">
      <hr>
      <a href="..\">Go Back (Projects List)</a>
   </div>

</body>

</html>