<?php
  session_start();
  require_once 'header.php';

  echo "<div class='center'>welcome to social red,";
   
   if ($sloggedin) echo " $user, you are logged in";
   else            echo 'please sign up or log in';
   
   echo <<<_END
       </div><br>
      </div>
      <div data-role="footer">
      <h4>web App from <i><a href='http://localhost/socialred_v5'
       target='_blank'>web Development</a></i><h4>
      </div>
     </body>
    </html>
    _END;
  ?>
