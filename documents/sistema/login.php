<?php
  require_once 'header.php';
  $error = $user = $pass = "";
  
  if (isset($_POST['user']))
  {
    $user = sanitizeString($_POST['user']);
    $pass = sanitizeString($_POST['pass']);
  
  if ($user == "" || $pass == "")
     $error = 'not all fields were entered';
  else
  {
    $result = queyMySQL("SELECT user,pass FROM members
      WHERE user='$user' AND pass='$pass'");

   if ($result->num_rows == 0)
   {
     $error = "invalid login attempt";
   }
   else
   {
     $_SESSION['user'] = $user;
     $_SESSION['pass'] = $pass;
     die("<div class='center'> you are now logged in. please
          <a data-transition='slide' href= members.php?view=$
          to continue.</div></div></body></html>");
    }
  }
} 

echo <<<_END
     <from method='post' action='login.php'
        <div data-role='fieldcontain'>
        <label></label>
        <span class='error'>$error</span>
       </div>
       <div data-role='fieldcontain'>
          <label></label>
       please enter your details to log in
       </div>
        <div data-role='fieldcontain'>
          <label>Username<label>
          <input type='text' maxlength='16' name='user' value='$user'>
         </div>
         <div data-role='fieldcontain'>
           <label>password</label>
          <input type='password' maxlength='16' name='pass' value='$pass'>
           </div>
          <div data-role='fieldcontain'>
            <label></label>  
          <input data-transition='slide' type='submit' value='Login'>
           </div>
          </form> 
         </div> 
        </body> 
      </html>
    _END;
    ?> 















 