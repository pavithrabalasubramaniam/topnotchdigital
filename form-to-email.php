<?php
  error_reporting(-1);
  $name = $_POST['name'];
  $institution = $_POST['institution']; 
  $mobile = $_POST['mobile']; 
  $visitor_email = $_POST['email'];
  $message = $_POST['message'];
  $email_from = 'topnotch@yourwebsite.com';
  $email_subject = "New Form submission";
  $email_body = "You have received a new feedback from $name\n".
  				"Institution:$institution \n".
                "Email:$visitor_email \n".
                "Mobile: $mobile \n".
                "Message: $message";
  $to = "placeofvel@gmail.com,pavithra12395@gmail.com";
  $headers = "From: $email_from \r\n";
  $headers .= "Reply-To: $visitor_email \r\n";
   mail($to,$email_subject,$email_body,$headers) ;

    if(isset($email)){
         echo 'Success! Thanks for submitting';
    }
    else {
        echo "Something went wrong. Please try after sometime or call us @9171156941";
    }

function IsInjected($str)
    {
    $injections = array('(\n+)',
           '(\r+)',
           '(\t+)',
           '(%0A+)',
           '(%0D+)',
           '(%08+)',
           '(%09+)'
           );
               
    $inject = join('|', $injections);
    $inject = "/$inject/i";
    
    if(preg_match($inject,$str))
    {
      return true;
    }
    else
    {
      return false;
    }
}

if(IsInjected($visitor_email))
{
    echo "Bad email value!";
    exit;
}
?>