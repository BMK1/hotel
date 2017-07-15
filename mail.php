
<html>
   
   <head>
      <title>Sending HTML email using PHP</title>
   </head>
   
   <body>
      
     <?php
 require_once "Mail.php";
 
 $from = "Sandra Sender <joen19012@gmail.com";
 $to = "Ramona Recipient <joen19012@gmail.com>";
 $subject = "Hi!";
 $body = "Hi,\n\nHow are you?";
 
 $host = "joen19012@gmail.com";
 $username = "joen19012@gmail.com";
 $password = "199652qwertyuioPamr24";
 
 $headers = array ('From' => $from,
   'To' => $to,
   'Subject' => $subject);
 $smtp = Mail::factory('smtp',
   array ('host' => $host,
     'auth' => true,
     'username' => $username,
     'password' => $password));
 
 $mail = $smtp->send($to, $headers, $body);
 
 if (PEAR::isError($mail)) {
   echo("<p>" . $mail->getMessage() . "</p>");
  } else {
   echo("<p>Message successfully sent!</p>");
  }
 ?>
      
   </body>
</html>