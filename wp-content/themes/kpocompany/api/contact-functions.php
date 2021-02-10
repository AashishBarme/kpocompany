<?php

function ContactFormOperation($data)
{
    $to = "aashish.barme9@gmail.com";

     $name = $data["fullname"];
     $email = $data["email"];
     $subject = $data["subject"];

     $message = 'From:'.$name.'<'.$email.'><br>';
     $message .= 'Message:'.$data["message"];

     $headers = "From: " . strip_tags($email) . "\r\n";
     $headers .= "Reply-To: ". strip_tags($email) . "\r\n";
     $headers .= "MIME-Version: 1.0\r\n";
     $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

     //$save_data = $this->InsertFormData($name,$email,$subject,$data["message"]);
     $save_data = 1;
     if($save_data > 0 )
     {
        try {
            wp_mail($to,$subject,$message,$headers);
        }
        catch(Exception $e){
            $response = ["Status"=>"False","Message"=>"There was an error trying to send your message. Please try again later."];
            return $response;
        }
        $response = ["Status"=>"True","Message"=>"Thank you for your message. It has been sent."];
        return $response;
      }
    $response = ["Status"=>"False","Message"=>"There was an error trying to send your message. Please try again later."];
    return $response;
}