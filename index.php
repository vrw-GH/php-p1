<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Projects: P1</title>
</head>

<body background="blue">
   <div id="header">
      <h1>My first PHP project</h1>
   </div>

   <div id="menu">
      <?php
      $inc_dir = "inc";
      $pages = scandir($inc_dir,0);
      unset($pages[0],$pages[1]);
      foreach ($pages as $pagekey => $page) {
         $menuitem = substr_replace($page,'',-4);
         echo '<a href="index.php?page='.strtolower($menuitem).'">'.strtoupper(substr($menuitem,0,1)).substr($menuitem,1).'</a>';
         $seperator = ($pagekey==array_key_last($pages)) ? '':'&spades;';         
         echo "&nbsp;$seperator&nbsp;";          
      };
      ?>
   </div>
   <hr>

   <div id="contents">
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
      echo '<br>';
      ?>
   </div>
   <div id="footer">

      <hr>
      <a href="..\">Back to Projects List</a>
   </div>

</body>

</html>