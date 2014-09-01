<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
<HTML>
   <HEAD>
      <TITLE>NTP peers</TITLE>
   </HEAD>
   <BODY>
      <H1>System date: </H1>
      <H2>
<?php
  echo date("F j, Y, g:i a");   
?>
      </H2>
      <H1>NTP peers:  </H1>
<?php
echo '<pre>';

// Outputs all the result of shellcommand, and returns
system('ntpq -p 127.0.0.1', $retval);

// Printing additional info
echo '
</pre>
<p>Return value: ' . $retval;
?>

   </BODY>
</HTML>
