<?php

$msg = "";

/* Added some line for conflict for git hub purpose*/


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $from = htmlspecialchars($_POST['email']);
    $body = htmlspecialchars($_POST['body']);

    $to      = "amrit.kharel1.1@gmail.com";
    $subject = 'DeveloperEnvironment';

    /* $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
    $headers .= "From: ".$name."<" .$from. ">"."\r\n" .
        "Reply-To: ". $to . "\r\n" .
        "X-Mailer: PHP/" . phpversion(); */

    /*$headers = 'From: ' . $name . "<" . $from . ">" . " \r\n" .
        'Reply-To: ' . $from . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    */

    $headers = array(
        'From' => $name."<" .$from. ">",
        'Reply-To' => $from,
        'X-Mailer' => 'PHP/' . phpversion()
    );

    $result = mail($to, $subject, $body, $headers);
    if ($result) {
        $msg = "Email Sent!";
    } else {
        $msg = "Email couldn't be Sent!";
    }
    
    
/* Added some line for conflict for git hub purpose*/
    /* Added some line for conflict for git hub purpose*/
    /* Some lines were altered*/
    /* Added some line for conflict for git hub purpose*/
    /* some lines were update in local*/
     /* Added some line for conflict for git hub purpose*/
    /* Some lines were altered*/
    /* Added some line for conflict for git hub purpose*/
    /* some lines were update in local*/
     /* Added some line for conflict for git hub purpose*/
    /* Some lines were altered*/
    /* Added some line for conflict for git hub purpose*/
    /* some lines were update in local*/
     /* Added some line for conflict for git hub purpose*/
    /* Some lines were altered*/
    /* Added some line for conflict for git hub purpose*/
    /* some lines were update in local*/
    
}

