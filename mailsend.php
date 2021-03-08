<html>
<head>
    <title>Request Sent Successfully</title>
</head>
<body>

    <?php

        require_once('PHPMailer-5.2-stable/PHPMailerAutoload.php');

        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'ssl';
        $mail->Host = 'smtp.gmail.com';
        $mail->Port ='465';
        $mail->isHTML();
        $mail->Username = 'vetrichanakyha2003@gmail.com';
        $mail->Password = 'dkbvcfxhmfawscnu';
        $mail->SetFrom('vetrichanakyha2003@gmail.com');
        $mail->Subject = $_POST["Subject"] . ' from ( ' . $_POST["name"] . ' )';
        $mail->Body = 'From:' . $_POST['name'] .'<br> His Mail Address: '. $_POST['_replyto'] . '<br>' . $_POST['message'];
        $mail->AddAddress('vetrichanakyha2003@gmail.com');

        $mail->Send();

        echo '<center><h1>Request SENT SUCCESSFULLY</h1><hr><p>Redirecting to Main Page Please Wait.....</p></center>';

        header("Location: index.html");
  
        exit; 

    ?>

</body>

</html>