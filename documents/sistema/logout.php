<?php
  require_once 'header.php';
  
  if (isset($_SESSION['user']))
  {
   destroySession();
   echo "<br><div class='center'>you have been logged out. please
        <a data-transition='slide' href='index.php'>click here</a>
        to refresh the screen.</div>";
}
 else echo "<div class='center'>you cannot log out because
             you are not logged in </div>";
?>
      
     </div>
   </body>
  </html>
