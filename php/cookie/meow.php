<?php

   $cookieName="userName";
   $cookieValue="Mr. Meow";
   $expiry=time()+3600*24*30;
   $path="/";
   $secure=true;
   $domnain="localhost";
   $httpOnly=true;
   setcookie($cookieName,$cookieValue,$expiry);

?>