<?php
    use PHPMailer\PHPMailer\PHPMailer;

    if (isset($_POST['name']) && isset($_POST['email'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $body = $_POST['body'];

        require_once "PHPMailer/PHPMailer.php";
        require_once "PHPMailer/SMTP.php";
        require_once "PHPMailer/Exception.php";

        $mail = new PHPMailer();

         //SMTP Settings
        $mail->isSMTP();
        $mail->Host = "mail.ccedigest.com.pk";
        $mail->SMTPAuth = true;
        $mail->Username = "general@ccedigest.com.pk"; //enter you email address
        $mail->Password = '(nH%Cs4b,D*T'; //enter you email password
        $mail->Port = 465;
        $mail->SMTPSecure = "ssl";
        //Email Settings
        $mail->isHTML(true);
        $mail->setFrom($email, $name);
        $mail->addAddress("general@ccedigest.com.pk"); //enter you email address
        $mail->Subject = ("$email ($subject)");
        $mail->Body = $body;

        if ($mail->send()) {
            $status = "success";
            $response = "Email is sent!";
        } else {
            $status = "failed";
            $response = "Something is wrong: <br><br>" . $mail->ErrorInfo;
        }

        exit(json_encode(array("status" => $status, "response" => $response)));
    }
?>