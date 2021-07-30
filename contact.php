
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  <?php
  
  $name = $_POST['name];
  $visitor_email = $_POST['email'];
  $message = $_POST['message'];
  
  
  $email_from = "easirarafat1994@gmail.com";
  $email_subject = "New Form Submission";
  
  $email_body = "User Name: $name.\n".
                 "User Email: $visitor_email.\n".
				 "User Message: $message.\n";
				 
				 
	$to ="easirarafat75@gmail.com";
    $headers ="From: $email-form \r\n";
    $headers .= "Reply-To: $visitor_email \r\n";
    mail($to,$email_subject,$email_body,$headers);
    header("Location: index.html");	
  
   ?>
