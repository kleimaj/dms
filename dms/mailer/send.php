<?php

use PHPMailer\PHPMailer\PHPMailer;
require __DIR__ . '/vendor/autoload.php';

$errors = [];
$response = [];
if (!empty($_POST)) {

   $fname = !empty($_POST['fname']) ? $_POST['fname'] : '';
   $lname = !empty($_POST['lname']) ? $_POST['lname'] : '';
   $company = !empty($_POST['company']) ? $_POST['company'] : '';
   $email = !empty($_POST['email']) ? $_POST['email'] : '';;
   $message = !empty($_POST['message']) ? $_POST['message'] : '';;
   $location = !empty($_POST['location']) ? $_POST['location'] : '';
   $title =!empty($_POST['title']) ? $_POST['title'] : '';

   if (empty($fname)) {
       $errors[] = 'First Name is empty';
   }
   if (empty($lname)) {
       $errors[] = 'Last Name is empty';
   }
   if (empty($email)) {
       $errors[] = 'Email is empty';
   } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $errors[] = 'Email is invalid';
   }
   if (empty($message)) {
       $errors[] = 'Message is empty';
   }


   if(empty($errors)){
        $mail = new PHPMailer();
        // specify SMTP credentials
        $mail->isSMTP();

        $mail->Host = 'webcodegenie.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'work@webcodegenie.com';
        $mail->Password = 'P48]z82AV@i8';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
        $mail->setFrom("no-reply@webcodegenie.com", 'No Reply');
        $mail->addAddress('nirmi@webcodegenie.com', 'Me');

        

        $mail->Subject = 'New message from your website';
        // Enable HTML if needed
        $mail->isHTML(true);
        $bodyParagraphs = [
            "First Name: {$fname}", 
            "Last Name: {$lname}", 
            "Title: {$title}", 
            "Company: {$company}", 
            "Email: {$email}", 
            "Location: {$location}",
            "Message:", nl2br($message)
        ];
        $body = join('<br />', $bodyParagraphs);
        $mail->Body = $body;
        // echo $body;
        if($mail->send()){
            $response=[
                "type"=>"success",
                "message" => "Thank you for contacting us. We will reach out shortly."
            ];
            
        } else {
            $response=[
                "type"=>"error",
                "message" => "Something went wrong while submiting the form, please try again some time."
            ];

        }
   }
   else
   {
        $response=[
            "type"=>"error",
            "message" => $errors[0]
        ];
   }
}
else{
    $response=[
        "type"=>"error",
        "message" => "Invalid access"
    ];
}
ob_clean();
echo json_encode($response);
die();