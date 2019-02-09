<?php
//var_dump($_POST);

//set up an array?
//set up fake mail

function send_email_user($name, $email, $password){
    $sendMail = $email;
    $subject = "Email with your login id from website";
    $message = "Thank you for signing up! Your login details are \n\n Username: \n\n" . $username . " \n\n Password:" . $password;

  send_email_user($sendMail, $subject, $confirm);
  //mail($sendMail, $subject, $message) if this was real
}
?>
