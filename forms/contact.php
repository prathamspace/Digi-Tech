<?php
if (isset($_REQUEST['formsubmit'])) {
$maillayout = " <b> Enquiry From Aspire Digi Tech </b> <br />
 Name :  " . $_REQUEST['name'] . "  <br />
 E-Mail :  " . $_REQUEST['email'] . "  <br />
 Subject :  " . $_REQUEST['subject'] . "  <br />
 Message :  " . $_REQUEST['message'] . "  <br />   ";

    $to = "sales@aspiredigitech.com";
    $subject = " Enquiry -Aspire Digi Tech ";
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: Aspire Digi Tech <sales@aspiredigitech.com>' . "\r\n";
    $mail = mail($to, $subject, $maillayout, $headers);
    if ($mail) {

    $maillayout1 = " Dear " . $_REQUEST['name'] . ", Thanks for sending your query. One of our representatives will soon be in touch with you for further details and proceedings.<br />
    Thanks and Regards <br />
    Aspire Digi Tech";
        $to1 = "" . $_REQUEST['email'] . "";
        $subject1 = "Thank You " . $_REQUEST['name'] . "";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: Aspire Digi Tech  <info@aspiredigitech.com>' . "\r\n";
        $mail1 = mail($to1, $subject1, $maillayout1, $headers);
        header('location:index.html');
    }
}