<?php
if (isset($_POST['send-mail'])) {

if(isset($_POST['name'])) {
    $visitor_name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email_body .= "<div>
                       <label><b>Visitor Name:</b></label>&nbsp;<span>".$visitor_name."</span>
                    </div>";
}

if(isset($_POST['email'])) {
    $visitor_email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['email']);
    $visitor_email = filter_var($visitor_email, FILTER_VALIDATE_EMAIL);
    $email_body .= "<div>
                       <label><b>Visitor Email:</b></label>&nbsp;<span>".$visitor_email."</span>
                    </div>";
}
  
if(isset($_POST['message'])) {
    $visitor_message = htmlspecialchars($_POST['message']);
    $email_body .= "<div style='display: flex; flex-direction: row'>
                       <label><b>Visitor Message:</b></label>&nbsp;<div>".$visitor_message."</div>
                    </div>";
}

$email_body .= "</div>";

$recipient = 'contact@bestfsmods.com';
$subject = 'Contact';
$sender = 'sender@bestfsmods.com';
$headers  = 'Content-type: text/html; charset=utf-8';

if(mail($recipient, $subject, $email_body, $headers, ' -f ' . $sender)) {
    header("Location: ../contact?m=s");
    exit();
} else {
    header("Location: ../contact?m=ns");
    exit();
}}